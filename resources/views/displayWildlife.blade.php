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
      <div class="card-header">Wildlife Details</div>
      <div class="card-body">
            <h4 class="card-title">Wildlife Name: {{ $wildlifes->wildlife_name}}</h4>
            <br>
            <p class="card-text">Widlife Scientific Name: {{ $wildlifes->wildlife_scientific_name }}</p>
            <p class="card-text">Wildlife Class: {{ $wildlifes->wildlife_class }}</p>
            <p class="card-text">Wildlife Order: {{ $wildlifes->wildlife_order }}</p>
            <p class="card-text">Wildlife Family: {{ $wildlifes->wildlife_family }}</p>
            <p class="card-text">Wildlife Genus: {{ $wildlifes->wildlife_genus }}</p>
            <p class="card-text">Wildlife Specie: {{ $wildlifes->wildlife_species }}</p>
            <p class="card-text">Wildlife Location: {{ $wildlifes->wildlife_location }}</p>
            <p class="card-text">Wildlife Description: {{ $wildlifes->wildlife_desc }}</p>
              <span>
                  <a  href="{{ route('editWildlife',$wildlifes->info_ID) }}"><button type="submit"  class="btn btn-success">Edit
                  </button>
                  </a>
                  <a  href="{{ route('deleteWildlife',$wildlifes->info_ID) }}"><button type="submit"  class="btn btn-danger">Delete
                  </button>
                  </a>
                  <a href="{{ route('wildlife') }}"><button type="submit"  class="btn btn-success">Back</button>
                  </a>
              </span>
              <div class="images">
                  <img src="{{ asset($wildlifes->wildlife_pic) }}"/>
              </div>
        </div><!--end of card body-->   
  </div><!--end of card-->
</body><!--end of body-->
@endsection