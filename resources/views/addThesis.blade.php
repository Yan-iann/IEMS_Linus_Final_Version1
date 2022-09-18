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
  <div class="card-header">Add Thesis Paper</div>
    <div class="card-body">
      
    <h2>Add A Thesis Paper Record</h2>
    <form method="post" action="{{ route('storeThesis') }}" enctype="multipart/form-data">
      {!! csrf_field() !!}
       <div class="form-group">
      <label for="thesis id">Information ID:</label>
      <input type="input" class="form-control"  placeholder="Enter Information ID" name="info_ID">
    </div>
      <div class="form-group">
      <label for="thesis_name">Thesis Title:</label>
      <input type="input" class="form-control"  placeholder="Enter Thesis Title" name="thesis_title">
    </div>
    <div class="form-group">
      <label for="wildlife_scientific_name">Thesis Author:</label>
      <input type="input" class="form-control"  placeholder="Enter Thesis Author" name="thesis_author">
    </div>
    <div class="form-group">
      <label for="wildlife_class">Thesis Reference:</label>
      <input type="input" class="form-control"  placeholder="Enter Thesis Reference" name="thesis_reference">
    </div>
    <div class="form-group">
      <label for="wildlife_order">Thesis File:</label>
      <input type="input" class="form-control"  placeholder="Enter Thesis File" name="thesis_file">
    </div>
    <div class="form-group">
      <label for="wildlife_family">Thesis Type:</label>
      <input type="input" class="form-control"  placeholder="Enter Thesis Type" name="thesis_type">
    </div>
    <div class="form-group">
      <label for="wildlife_genus">Date Published:</label>
      <input class="form-control" type="input" name="date_published"  placeholder="Enter Date Published">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="thesis_status" value="approved">
    </div>
     {{ csrf_field() }}
    <button type="submit"  class="btn btn-success">Submit</button>
    <a  href="{{ route('thesis') }}" class="btn btn-dark" title="Back">
                            Cancel
                        </a>
  </form>
  <br>
  <br>
 </div>
</div>
</body>
@stop 