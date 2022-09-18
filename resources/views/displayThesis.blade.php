@extends('layout')
@section('content')
<style>
img{
  margin-top: -600px;
  margin-left: 300px;
  width: 250px;
  height: auto;
}
 body{
    background-image: url('');
    background-attachment: fixed;
    background-size: cover;
}
.card-header {
  background-color: #1e90ff;;
  color: black;
}
.card-body {
   background-color: #dcdcdc;
}
.card{
    margin-top: 100px;
    margin-left: 300px;      
    margin-right: 350px;
    width: 55%;
}
h2{
  color: red;
  text-align: center;
}
</style>
<body>
  <div class="card">
      <div class="card-header">Thesis Details</div>
      <div class="card-body">
            <h4 class="card-title">Thesis Title: {{ $thesis->thesis_title}}</h4>
            <br>
            <p class="card-text">Thesis Author: {{ $thesis->thesis_author }}</p>
            <p class="card-text">Thesis Reference: {{ $thesis->thesis_reference }}</p>
            <p class="card-text">Thesis Type: {{ $thesis->thesis_type }}</p>
            <p class="card-text">Thesis Published Date: {{ $thesis->date_published }}</p>
            <h2 class="card-title">Request the file now from IEMS@su.edu.ph</h2>
              <span>
                  <a  href="{{ route('editThesis',$thesis->info_ID) }}"><button type="submit"  class="btn btn-success">Edit
                  </button>
                  </a>
                  <a  href="{{ route('deleteThesis',$thesis->info_ID) }}"><button type="submit"  class="btn btn-danger">Delete
                  </button>
                  </a>
                  <a href="{{ route('thesis') }}"><button type="submit"  class="btn btn-success">Back</button>
                  </a>
              </span>
        </div><!--end of card body-->   
  </div><!--end of card-->
</body><!--end of body-->
@endsection