@extends('layout')
@section('content')
<style>
    
    body{
    background-image: url('');
    background-attachment: fixed;
    background-size: cover;
}
.title{
    background-color: #1e90ff;
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
  <div class="card-header">Edit Thesis</div>
    <div class="card-body">
      
    <h2>Edit Thesis Record</h2>
    <form method="post" action="{{ route('updateThesis',$thesis->info_ID) }}" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group">
      <label for="wildlife_name">Thesis Title:</label>
      <input type="input" class="form-control"  name="thesis_title" value="{{$thesis->thesis_title}}">
    </div>
    <div class="form-group">
      <label for="wildlife_scientific_name">Thesis Author:</label>
      <input type="input" class="form-control"  name="thesis_author" value="{{$thesis->thesis_author}}">
    </div>
    <div class="form-group">
      <label for="wildlife_class">Thesis Reference:</label>
      <input type="input" class="form-control"  name="thesis_reference" value="{{$thesis->thesis_reference}}">
    </div>
    <div class="form-group">
      <label for="wildlife_order">Thesis Type:</label>
      <input type="input" class="form-control"  name="thesis_type" value="{{$thesis->thesis_type}}">
    </div>
    <div class="form-group">
      <label for="wildlife_family">Date Published:</label>
      <input type="input" class="form-control"  name="date_published" value="{{$thesis->date_published}}">
    </div>
    <div class="form-group">
      <label for="wildlife_genus">Thesis Status:</label>
      <input class="form-control" type="input" name="thesis_status" value="{{$thesis->thesis_status}}">
    </div>
    <br>
    <button type="submit"  class="btn btn-success">Update </button>
  </form>
  <br>
  <a href="{{ route('thesis') }}"><button type="submit"  class="btn btn-success">Exit</button>
                  </a>
  <br>
  <br>
 </div>
</div>
</body>
@stop 