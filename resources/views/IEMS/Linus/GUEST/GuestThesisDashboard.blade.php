@extends('layouts.G_Layout')
@section('content')
<body>
<div class="home-section">
    <div class="home-content">
      <span class="text">Thesis Papers</span>
    </div>
</div>
    <div class="table-responsive">
                        <table class="table">
                             <thead>
                                <tr>
                                  <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="{{ route('searchThesis') }}">
                                    <td></td>
                                    <td></td>
                                    <td><input type="search" name="searchThesis" class="form-control mr-sm2" placeholder="Search Thesis Title"></td>
                                    <td><button class="btn btn-info btn-sm" type="submit" style="color: white">Search</button></td>
                                  </form>
                                </tr>
                              </thead>
                       </table>
    </div>
    
    <div class="container-fluid">
      <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
        
    @foreach($thesis as $item)
        <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch" data-bs-toggle="modal" data-bs-target="#ModalThesis{{$item->info_ID}}">
            <div class="card border-dark" style="width: 18rem;">
                  <div class="card-body bg-light ">
                    <p class="text-muted fst-italic">{{$item->date_published }}</p>
                    <h4 class="card-title">{{$item->thesis_title}}</h4>
                    <br>
                    <p class="card-subtitle mb-2 text-muted">{{$item->thesis_author}}</p>
                  </div>
                <div class="card-footer border-0"></div>
               
            </div>
        </div>
    @endforeach  

        </div>
</body>
@endsection
