@extends('layout')
@section('content')
<style>
    
    body{
    background-image: url('');
    background-attachment: fixed;
    background-size: cover;
}
.title{
    background-color: maroon;
    color: white;
    margin-top: 3px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-family: 'Times New Roman', serif;
}
.card-header{
  background-color: #1e90ff;
  color: white;
}
.card{
   background-color: #dcdcdc;
}
</style>

<body>
<div class="card" style="margin:20px;">
  <div class="card-header">Add User Information</div>
    <div class="card-body">
      
    <h2>Add User Record</h2>
    <form method="post" action="{{ route('storeUserInfo') }}" enctype="multipart/form-data">
      {!! csrf_field() !!}

      <div class="form-group">
      <label for="Journal_name">First Name:</label>
      <input type="input" class="form-control"  placeholder="Enter first_name" name="first_name">
    </div>

    <div class="form-group">
      <label for="wildlife_scientific_name">Middle Name:</label>
      <input type="input" class="form-control"  placeholder="Enter middle_name" name="middle_name">
    </div>
    <div class="form-group">
      <label for="wildlife_class">Last Name:</label>
      <input type="input" class="form-control"  placeholder="Enter last_name" name="last_name">
    </div>
    
    <div class="form-group">
      <label for="wildlife_class">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="wildlife_class">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password">
    </div>

    <div class="form-group">
      <label for="wildlife_order">User Type:</label>
      <input type="input" class="form-control"  placeholder="Enter user_type" name="user_type">
    </div>

    <div class="form-group">
      <label for="wildlife_pic">Profile Picture:</label>
      <input type="file" id="profile_pic" class="form-control"  placeholder="Wildlife Picture" name="profile_pic">
    </div>
     {{ csrf_field() }}
     <hr>
    <button type="submit"  class="btn btn-success">Submit</button>
    <a  href="{{ route('adminDashboard') }}" class="btn btn-dark" title="Back">
                            Cancel
                        </a>
  </form>
  <br>
  <br>
 </div>
</div>
</body>
@stop 