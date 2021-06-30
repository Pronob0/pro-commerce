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
                <li class="breadcrumb-item active" aria-current="page">Change Profile</li>
              </ol>
            </nav>
          </div>

        </div>
        <!-- Card stats -->

      </div>
    </div>
  </div>
  <br>
  <!-- Page content -->
  <div class="container-fluid pronob-nav mt--6 px-5">

    <div class="header  py-7 py-lg-8 pt-lg-9">


      <!-- Page content -->
      <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-8">
            <div class="card  border-0 mb-0">

              <div class="card-body px-lg-5 py-lg-5">
                  {{-- validation_error --}}
                @include('includes.validation_error')
                {{-- validation_error end --}}
                <h1 class="text-dark text-center mb-4 font-weight-bolder">Change Profile</h1>
                <br><br>
                  <form id="" action="{{ route('admin.profile-update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                              <h4 class="heading">{{ __('Current Profile Image') }} *</h4>
                          </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="image-review mb-1"  >

                                      <img class="h-100 img-fluid " src="{{ asset('assets/images/admins/'.$data->image) }}" alt="" id="show">
                                    </div>
                                    <div class="upload-btn-wrapper justify-content-center">
                                        <button  class="pronob-btn " >Upload photo</button>
                                        <input type="file" name="image" id="myfile" />
                                    </div>
                                </div>
                                <div class="col-md-4">

                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3">
                          <div class="left-area">
                              <h4 class="heading">{{ __('Name') }} *</h4>
                          </div>
                        </div>
                        <div class="col-lg-9">
                            <input type="text"  class="form-control form-control-alternative text-dark" placeholder="@lang('Username')" value="{{ $data->name }}">
                      </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3">
                          <div class="left-area">
                              <h4 class="heading">{{ __('Email') }} *</h4>
                          </div>
                        </div>
                        <div class="col-lg-9">
                            <input type="email" value="{{ $data->email }}"  class="form-control form-control-alternative text-dark" placeholder="User Email">
                      </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3">
                          <div class="left-area">
                              <h4 class="heading">{{ __('Phone') }} *</h4>
                          </div>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" value="{{ $data->mobile }}"  class="form-control form-control-alternative text-dark" placeholder="User Phone Number">
                      </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-5 w-50">Save</button>
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
    $('#myfile').change(function(){

   var file = event.target.files[0];
   var reader = new FileReader();

   reader.onload = function(e) {
   // The file's text will be printed here
   $("#show").attr('src',e.target.result);
   console.log(e.target.result)
   };

   reader.readAsDataURL(file);

   });
   </script>
@endpush

