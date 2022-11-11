@extends('layouts.F_Layout')
@section('content')
<body>
  <div class="home-section" style="height: 100%">
    <div class="home-content">
      <span class="text">Profile</span>
    </div>
  </div>
    <div class="container-fluid">
      <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">   
        <div class="col-12 col-lg-4"> 
          <img style="width: 200px;"class="imageWildlife" src="{{ asset('storage/images/profile_Pic.png') }}" alt="No profile picture">   
        </div>
          <div class="col-12 col-lg-8">
            <div class="row g-1">
              <div class="col-12  col-lg-7">
                <label for="formGroupExampleInput" class="form-label">FirstName</label>
                <h3>{{ Auth::user()->name }}</h3>
              </div>
              <div class="col-12"><br>
              </div>
              <div class="col-12"><br>
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <h3>{{ Auth::user()->email }}</h3>
              </div>
              <div class="col-12"><br>
                <!-- Filler -->
              </div> 
              <div class="col-12"><br>
                <!-- Filler -->
              </div>
              <div class="col-12"><br>
                <label for="formGroupExampleInput" class="form-label">Password</label>
                <h3>*********</h3>
              </div>
            </div><!--end og row 1-->
          </div><!--end og col 1-->
            <!--Modal Footer-->
            <div class="modal-footer border-0" style="padding-right: 25px;">
              <button type="button" class="btn btn-info text-white m-5">Edit</button>
            </div>
      </div>
    </div><!--end of container-->
</body>
@endsection