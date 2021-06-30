<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File ;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $data=Auth::guard('admin')->user();
        return view('admin.dashboard',compact('data'));
    }
    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect(route('admin.loginform'));
    }
    public function PassChange(){
        return view('admin.admin_password_change');
    }
    public function ProfileEdit(){

        $data=Auth::guard('admin')->user();
        return view('admin.admin_profile_edit',compact('data'));
    }


    public function PassUpdate(Request $request){

        $this->validate($request,[

            'old_password'=>'required',
            'password'=>'required|confirmed',

        ]);

        $hashedpassword=Auth::guard('admin')->user()->password;
        if(Hash::check($request->old_password, $hashedpassword)){
            if(!Hash::check($request->password, $hashedpassword)){

                $user=Admin::find(Auth::guard('admin')->id());

                $user->password=Hash::make($request->password);
                $user->save();
                Toastr::success('Password Changed Successfully','Success');
                Auth::logout();
                return redirect()->back();
            }
            else{
                Toastr::error('Password Can not be same','Error');
                return redirect()->back();
            }
        }
        else{
        Toastr::error('Password not matched!','Error');
        return redirect()->back();
        }
    }
    public function profileupdate(Request $request){
        $rules =
        [
            'image' => 'mimes:jpeg,jpg,png,svg',
            'email' => 'unique:admins,email,'.Auth::guard('admin')->user()->id
        ];


        $validator = Validator::make($request->all(), $rules);


        //--- Validation Section Ends
        $input = $request->all();
        $data = Auth::guard('admin')->user();
        //dd('/assets/images/admins/'.$data->image);
            if ($file = $request->file('image'))
            {
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/admins/',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/admins/'.$data->image)) {

                        File::delete(public_path().'/assets/images/admins/'.$data->image);
                    }
                }
            $input['image'] = $name;
            }
        $data->update($input);
        Toastr::success('Successfully updated your profile','Success');

        return redirect(route('admin.change-profile'));
    }
}
