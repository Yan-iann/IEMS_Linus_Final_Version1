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
  <div class="card-header">Edit Journal</div>
    <div class="card-body">
      
    <h2>Edit Journal Record</h2>
    <form method="post" action="{{ route('updateJournal',$journal->info_ID) }}" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group">
      <label for="wildlife_name">journal Title:</label>
      <input type="input" class="form-control"  name="journal_title" value="{{$journal->journal_title}}">
    </div>
    <div class="form-group">
      <label for="wildlife_scientific_name">Journal Author:</label>
      <input type="input" class="form-control"  name="journal_author" value="{{$journal->journal_author}}">
    </div>
    <div class="form-group">
      <label for="wildlife_class">Journal Reference:</label>
      <input type="input" class="form-control"  name="journal_reference" value="{{$journal->journal_reference}}">
    </div>
    <div class="form-group">
      <label for="wildlife_order">Journal Description:</label>
      <input type="input" class="form-control"  name="journal_desc" value="{{$journal->journal_desc}}">
    </div>
    <div class="form-group">
      <label for="wildlife_family">Date Published:</label>
      <input type="input" class="form-control"  name="date_published" value="{{$journal->date_published}}">
    </div>
    <div class="form-group">
      <label for="wildlife_genus">Journal Status:</label>
      <input class="form-control" type="input" name="journal_status" value="{{$journal->journal_status}}">
    </div>
     {{ csrf_field() }}
     <br>
    <button type="submit"  class="btn btn-success">Update </button>
  </form>
  <br>
  <a href="{{ route('journal') }}"><button type="submit"  class="btn btn-success">Exit</button>
                  </a>
  <br>
  <br>
 </div>
</div>
</body>
@stop 