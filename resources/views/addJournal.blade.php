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
  <div class="card-header">Add Journal Article</div>
    <div class="card-body">
      
    <h2>Add A Journal Article Record</h2>
    <form method="post" action="{{ route('storeJournal') }}" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group">
      <label for="Journal_name">Journal Title:</label>
      <input type="input" class="form-control"  placeholder="Enter Journal Title" name="journal_title">
    </div>
    <div class="form-group">
      <label for="wildlife_scientific_name">Journal Author:</label>
      <input type="input" class="form-control"  placeholder="Enter Journal Author" name="journal_author">
    </div>
    <div class="form-group">
      <label for="wildlife_class">Journal Reference:</label>
      <input type="input" class="form-control"  placeholder="Enter Journal Reference" name="journal_reference">
    </div>
    <div class="form-group">
      <label for="wildlife_order">Journal Description:</label>
      <input type="input" class="form-control"  placeholder="Enter Journal Description" name="journal_desc">
    </div>
    <div class="form-group">
      <label for="wildlife_genus">Date Published:</label>
      <input class="form-control" type="input" name="date_published"  placeholder="Enter Date Published">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="journal_status" value="approved">
    </div>
    <input type="hidden" class="form-control" name="info_type" value="journal_article">
     {{ csrf_field() }}
    <button type="submit"  class="btn btn-success">Submit</button>
    <a  href="{{ route('journal') }}" class="btn btn-dark" title="Back">
                            Cancel
                        </a>
  </form>
  <br>
  <br>
 </div>
</div>
</body>
@stop 