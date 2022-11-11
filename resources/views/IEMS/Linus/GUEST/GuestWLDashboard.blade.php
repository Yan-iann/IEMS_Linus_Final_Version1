@extends('layouts.G_Layout')
@section('content')
<body>
<div class="home-section">
<div class="home-content">
    <span class="text">Wildlifes</span>
</div>
</div>

    <div class="table-responsive">
                        <table class="table">
                             <thead>
                                <tr>
                                  <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="{{ route('searchWildlife') }}">
                                    <td></td>
                                    <td></td>
                                    <td><input type="search" name="searchWildlife" class="form-control mr-sm2" placeholder="Search Wildlife Name"></td>
                                    <td><button class="btn btn-info btn-sm" type="submit" style="color: white">Search</button></td>
                                  </form>
                                </tr>
                              </thead>
                       </table><!--end of table-->
    </div> <!--end of table-->
      <div class="container-fluid">
        <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
          @foreach($studentDashboard as $item)
          <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
            <div class="card border-dark" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#ModalWildlife{{$item->info_ID}}">
              <img class="card-img-top "src="{{ asset($item->wildlife_pic) }}" alt="Card image cap">
                <div class="card-body bg-light text-primary">
                  <h5 class="card-title text-center">{{$item->wildlife_name}}</h5>
                  <p class="card-text text-center">({{$item->wildlife_scientific_name}})</p>
                </div>
            </div>
           
          </div>
          
          @endforeach
        </div><!--end of catalog-->
        <!-- Add Button -->
        
      </div><!--end of class container fluid-->
</body>
@endsection

  
