@extends('layouts.F_Layout')
@section('content')
<div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
            
  <div class="col-12 col-lg-4">
    <label for="formGroupExampleInput" class="form-label">Image</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
  </div>

        <div class="col-12 col-lg-8">
          <div class="row g-1">
            <div class="col-12 col-lg-7">
              <label for="formGroupExampleInput" class="form-label">First Name*</label>
              <input type="text" class="form-control" id="fname" placeholder="Example input placeholder">
            </div>
            <div class="col 12 col-lg-5">
              <label for="formGroupExampleInput" class="form-label">Last Name*</label>
              <input type="text" class="form-control" id="lname" placeholder="Example input placeholder">
            </div>

            <div class="col-12"><br>
              <!-- Filler -->
            </div>

            <div class="col-12"><br>
              <label for="formGroupExampleInput" class="form-label">Email*</label>
              <input type="text" class="form-control" id="email" placeholder="Example input placeholder">
            </div>

            <div class="col-12"><br>
              <!-- Filler -->
            </div> <div class="col-12"><br>
              <!-- Filler -->
            </div>
            <div class="col-12"><br>
              <label for="formGroupExampleInput" class="form-label">Current Password</label>
              <input type="text" class="form-control" id="pwd" placeholder="Example input placeholder">
            </div>
            <div class="col-12 col-lg-6"><br>
              <label for="formGroupExampleInput" class="form-label">New Password</label>
              <input type="text" class="form-control" id="pwd" placeholder="Example input placeholder">
            </div>
            <div class="col-12 col-lg-6"><br>
              <label for="formGroupExampleInput" class="form-label">Re-Enter New Password</label>
              <input type="text" class="form-control" id="pwd" placeholder="Example input placeholder">
            </div>
          </div>
        </div>
</div>


  <div class="modal-footer border-0" style="padding-right: 25px;">
    <button type="button" class="btn btn-info">Save</button>
    <p> </p>
    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
  </div>
</div>
@endsection