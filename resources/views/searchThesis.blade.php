@extends('Flayout')
<body>
<div class="sidebar close">
      <ul>
        <li>
          <a href="{{ url('/') }}">
          </a>
        </li>
      </ul>
    
    <ul class="nav-links">
      <li>
        <a href="{{ route('wildlife') }}">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Wildlife</span>
        </a>
      </li>
      <!--end of wildlife-->
      <li>
        <div class="iocn-link">
          <a href="{{ route('thesis') }}">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Thesis Paper</span>
          </a>
          
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Thesis Papers</a></li>
        </ul>
      </li>
      <!--end of Thesis Paper-->
      <li>
        <div class="iocn-link">
          <a href="{{ route('journal') }}">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Journal Articles</span>
          </a>
        </div>
      </li>
      <!--end of Journal Article-->

      <li>
        <a href="#"> 
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analysis</span>
        </a>
      </li>
      <!--end of Analysis-->

      <!-- Profile Deets -->
      <li>
          <div class="profile-details">
                  <div class="profile-content">
                  <!--<img src="image/profile.jpg" alt="profileImg">-->
                  </div>
            <div class="name-job">
                    <div class="profile_name">{{ Auth::user()->name }}</div> <!-- call Name -->
                    <div class="job">Faculty</div>        <!-- user type -->
            </div>
          
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class='bx bx-log-out' ></i>
                            </x-dropdown-link>
                        </form>
          </div>
      </li>
    </ul>    
</div><!--end of Sidebar-->

<div class="home-section">

    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Thesis Papers</span>
    </div>

    <div class="table-responsive">
                        <table class="table">
                             <thead>
                                <tr>
                                  <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="{{ route('searchThesis') }}">
                                    <td></td>
                                    <td></td>
                                    <td><input type="search" name="searchThesis" class="form-control mr-sm2" placeholder="Search Thesis Title"></td>
                                    <td><button class="btn btn-primary btn-sm" type="submit">Search</button></td>
                                  </form>
                                </tr>
                          </thead>
                       </table>
                    </div>
    
    <div class="container-fluid">

      
      <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
        
        @foreach($thesis as $item)
        <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
          <div class="card border-dark" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#ModalThesis{{$item->info_ID}}">
              <div class="card-body bg-light text-primary">
                <h5 class="card-title text-center">  {{$item->date_published }}</h5>
                <h5 class="card-title text-center"> {{$item->thesis_title}}</h5>
                <div class="card-footer border-0"></div>
                <p class="card-text text-center"> ({{$item->thesis_author}})</p>
              </div>
           </div>  
           @include('editThesis')  
        </div>
        @include('displayThesis')
        @endforeach  

        </div>
  </div>
  <hr>
  <div class="addButton">
        <form method="post" action="{{ route('storeDataThesis') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group">
          <input type="hidden" class="form-control" name="info_type" value="thesis">
        </div>
        {{ csrf_field() }}
        <button type="submit"  class="btn btn-success">+</button>
        </form>  
        <hr> 
  </div>


@foreach($thesis as $item)
<!-- Delete Thesis Modal-->
<form action="{{ route('deleteThesis',$item->info_ID) }}" method="get" enctype="multipart/form-data">
      <div class="modal fade" id="ModalDeleteThesis{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      {!! csrf_field() !!}
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
            
            <div class="col-12">
            <h4>Are you sure you want to Delete?</h4>
            </div>
            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
@endforeach  
</body>


  
