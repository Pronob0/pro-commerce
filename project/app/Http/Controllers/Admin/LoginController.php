<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showadminLoginform(){
        return view('admin.loginform');
    }

    public function adminLogin(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {


            return redirect(route('admin.dashboard'));
        }

        Toastr::error("Credential's Does not Match",'Error');
        return back()->withInput($request->only('email', 'remember'));


    }






    }


