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
</style>
<body>
  <div class="card">
      <div class="card-header">Journal Details</div>
      <div class="card-body">
            <h4 class="card-title">Journal Title: {{ $journal->journal_title}}</h4>
            <br>
            <p class="card-text">Journal Author: {{ $journal->journal_author }}</p>
            <p class="card-text">Journal Reference: {{ $journal->journal_reference }}</p>
            <p class="card-text">Journal Description: {{ $journal->journal_desc }}</p>
            <p class="card-text">Journal Published Date: {{ $journal->date_published }}</p>
              <span>
                  <a  href="{{ route('editJournal',$journal->info_ID) }}"><button type="submit"  class="btn btn-success">Edit
                  </button>
                  </a>
                  <a  href="{{ route('deleteJournal',$journal->info_ID) }}"><button type="submit"  class="btn btn-danger">Delete
                  </button>
                  </a>
                  <a href="{{ route('journal') }}"><button type="submit"  class="btn btn-success">Back</button>
                  </a>
              </span>
        </div><!--end of card body-->   
  </div><!--end of card-->
</body><!--end of body-->
@endsection