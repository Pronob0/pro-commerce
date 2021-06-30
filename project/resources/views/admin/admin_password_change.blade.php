@extends('admin.layouts.main')
@section('title')
<title>Admin Dashboard</title>
@endsection
@section('content')

<div class="header pronob-nav pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
              </ol>
            </nav>
          </div>

        </div>
        <!-- Card stats -->

      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid pronob-nav mt--6 px-5">

    <div class="header  py-7 py-lg-8 pt-lg-9">


      <!-- Page content -->
      <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-7">
            <div class="card  border-0 mb-0">

              <div class="card-body px-lg-5 py-lg-5">
                  {{-- validation_error --}}
                @include('includes.validation_error')
                {{-- validation_error end --}}
                <h1 class="text-dark text-center mb-4 font-weight-bolder">Change Password</h1>
                  <form id="changepass" action="{{ route('admin.update_pass') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                            <label class="sr-only" for="inlineFormInputGroup">Old Password</label>
                            <div class="input-group mb-2">

                                <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old Password">
                            </div>
                      </div>
                       <div class="form-group">
                                <label class="sr-only" for="inlineFormInputGroup">New Password</label>
                                <div class="input-group mb-2">

                                    <input type="password" name="password"  class="form-control" id="password" placeholder=" New Password">
                                </div>
                       </div>
                       <div class="form-group">
                        <label class="sr-only" for="inlineFormInputGroup">Confirm Password</label>
                        <div class="input-group mb-2">

                            <input type="password" name="password_confirmation"  class="form-control" id="password_confirmation" placeholder=" Confirm Password">
                        </div>
               </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4 w-100">Submit</button>
                      </div>
                  </form>
              </div>
            </div>

          </div>
        </div>
      </div>


    <!-- Page content -->


  </div>

@endsection
@push('js')
<script >

</script>
@endpush
