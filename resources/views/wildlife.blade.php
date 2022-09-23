@extends('layout')
@section('content')


<body>

  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
         <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="{{ route('searchWildlife') }}">
          <td></td>
          <td></td>
          <td><input type="search" name="searchWildlife" class="form-control mr-sm2" placeholder="Search Wildlife Name"></td>
          <td><button class="btn btn-primary btn-sm" type="submit">Search</button></td>
         </form>
        </tr>
      </thead>
    </table>
  </div>

  <div class="container">
    @foreach($wildlifes as $item)
      @include('layouts.FACULTY.displayWildlife') <!-- Modal View -->
         <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l " data-bs-toggle="modal" data-bs-target="#myModal{{ route('showWildlife',$item->info_ID)}}">       
          <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
            <div class="card border-dark" style="width: 18rem;">
              <img class="card-img-top " src="{{ asset($item->wildlife_pic) }}"> <!-- Photo-->
                <div class="card-body bg-light text-primary">
                  <h5 class="card-title text-center">{{$item->wildlife_name}}</h5> 
                  <p class="card-text text-center fst-italic">({{$item->wildlife_scientific_name}})</p>
                </div>
             </div>  
          </div>  
         </div>
    @endforeach
  



<div class="addButton">
    <form method="post" action="{{ route('storeDataWildlife') }}" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group">
      <input type="hidden" class="form-control" name="info_type" value="wildlife">
    </div>
   {{ csrf_field() }}
    <button type="submit"  class="btn btn-success">+</button>
  </form>
  <hr>
</div>
</div>
</body>
@endsection