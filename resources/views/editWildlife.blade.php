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
  <div class="card-header">Edit Wildlife</div>
    <div class="card-body">
      
    <h2>Edit WildLife Record</h2>
    <form method="post" action="{{ route('updateWildlife',$wildlifes->info_ID) }}" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group">
      <label for="wildlife_name">Wildlife Name:</label>
      <input type="input" class="form-control"  name="wildlife_name" value="{{$wildlifes->wildlife_name}}">
    </div>
    <div class="form-group">
      <label for="wildlife_scientific_name">Wildlife Scientific Name:</label>
      <input type="input" class="form-control"  name="wildlife_scientific_name" value="{{$wildlifes->wildlife_scientific_name}}">
    </div>
    <div class="form-group">
      <label for="wildlife_class">Wildlife Class:</label>
      <input type="input" class="form-control"  name="wildlife_class" value="{{$wildlifes->wildlife_class}}">
    </div>
    <div class="form-group">
      <label for="wildlife_order">Wildlife Order:</label>
      <input type="input" class="form-control"  name="wildlife_order" value="{{$wildlifes->wildlife_order}}">
    </div>
    <div class="form-group">
      <label for="wildlife_family">Wildlife Family:</label>
      <input type="input" class="form-control"  name="wildlife_family" value="{{$wildlifes->wildlife_family}}">
    </div>
    <div class="form-group">
      <label for="wildlife_genus">Wildlife Genus:</label>
      <input class="form-control" type="input" name="wildlife_genus" value="{{$wildlifes->wildlife_genus}}">
    </div>
    <div class="form-group">
      <label for="wildlife_species">Wildlife Species:</label>
      <input type="input" class="form-control"  name="wildlife_species" value="{{$wildlifes->wildlife_species}}">
    </div>
    <div class="form-group">
      <label for="wildlife_location">Wildlife Location:</label>
      <input type="input" class="form-control"  name="wildlife_location" value="{{$wildlifes->wildlife_location}}">
    </div>
    <div class="form-group">
      <label for="wildlife_desc">Wildlife Desc:</label>
      <input type="input" class="form-control"  name="wildlife_desc" value="{{$wildlifes->wildlife_desc}}">
    </div>
    <div class="form-group">
    <label for="wildlife_desc">Wildlife Status:</label>
      <input type="input" class="form-control"  name="wildlife_status" value="{{$wildlifes->wildlife_status}}">
    </div>
    <br>
    <button type="submit"  class="btn btn-success">Update </button>
  </form>
  <br>
  <a href="{{ route('wildlife') }}"><button type="submit"  class="btn btn-success">Exit</button>
                  </a>
  
  <br>
  <br>
 </div>
</div>
</body>
@stop 