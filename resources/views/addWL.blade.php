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
  <div class="card-header">Add Wildlife</div>
    <div class="card-body">
      
    <h2>Add A WildLife Record</h2>
    <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group">
      <label for="wildlife_infoID">Information ID:</label>
      <input type="input" class="form-control"  placeholder="Enter ID" name="info_ID">
    </div>
      <div class="form-group">
      <label for="wildlife_name">Wildlife Name:</label>
      <input type="input" class="form-control"  placeholder="Enter Wildlife Name" name="wildlife_name">
    </div>
    <div class="form-group">
      <label for="wildlife_scientific_name">Wildlife Scientific Name:</label>
      <input type="input" class="form-control"  placeholder="Enter Wildlife Scientific Name" name="wildlife_scientific_name">
    </div>
    <div class="form-group">
      <label for="wildlife_class">Wildlife Class:</label>
      <input type="input" class="form-control"  placeholder="Enter Wildlife Class" name="wildlife_class">
    </div>
    <div class="form-group">
      <label for="wildlife_order">Wildlife Order:</label>
      <input type="input" class="form-control"  placeholder="Enter Wildlife Order" name="wildlife_order">
    </div>
    <div class="form-group">
      <label for="wildlife_family">Wildlife Family:</label>
      <input type="input" class="form-control"  placeholder="Enter Wildlife Family" name="wildlife_family">
    </div>
    <div class="form-group">
      <label for="wildlife_genus">Wildlife Genus:</label>
      <input class="form-control" type="input" name="wildlife_genus"  placeholder="Wildlife Genus">
    </div>
    <div class="form-group">
      <label for="wildlife_species">Wildlife Species:</label>
      <input type="input" class="form-control"  placeholder="Enter Wildlife Species" name="wildlife_species">
    </div>
    <div class="form-group">
      <label for="wildlife_location">Wildlife Location:</label>
      <input type="input" class="form-control"  placeholder="Enter Wildlife Location" name="wildlife_location">
    </div>
    <div class="form-group">
      <label for="wildlife_desc">Wildlife Desc:</label>
      <input type="input" class="form-control"  placeholder="Enter Wildlife Description" name="wildlife_desc">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control"  placeholder="Enter Wildlife Status" name="wildlife_status" value="Approved">
    </div>
    <div class="form-group">
      <label for="wildlife_pic">Wildlife Picture:</label>
      <input type="file" id="wildlife_pic" class="form-control"  placeholder="Wildlife Picture" name="wildlife_pic">
    </div>
    <br>
     {{ csrf_field() }}
    <button type="submit"  class="btn btn-success">Submit</button>
    <a  href="{{ route('wildlife') }}" class="btn btn-dark" title="Back">
                            Cancel
                        </a>
  </form>
  <br>
  <br>
 </div>
</div>
</body>
@stop 