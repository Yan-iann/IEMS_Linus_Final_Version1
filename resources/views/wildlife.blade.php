@extends('Flayout')
<body>
<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxs-ghost'></i>
      <span class="logo_name">Linus</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="{{ route('wildlife') }}">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Wildlife</span>
        </a>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Wildlife</a></li>
        </ul>
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
        <ul class="sub-menu">
          <li><a class="link_name" href="#"> Journal Articles</a></li>
        </ul>
        
      </li>
      <!--end of Journal Article-->

      <li>
        <a href="{{ route('analysis') }}"> 
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analysis</span>
        </a>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Analysis</a></li>
        </ul>
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
                    </a>
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

<div class="home-section" style="height:100%">

    <div class="home-content">
      <i class='bx bx-menu' ></i>
<<<<<<< HEAD
      <span class="text">Wildlifes</span>
=======
      <span class="text">Wildlife</span>
>>>>>>> 072465f3db45546d17352bd361cf4ec0cf7f1e50
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
                       </table>
                    </div>
    <div class="container-fluid">

      
      <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
        
        @foreach($wildlifes as $item)
        <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
          <div class="card border-dark" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#ModalWildlife{{$item->info_ID}}">
            <img class="card-img-top "src="{{ asset('storage/images/'.$item->wildlife_pic) }}" alt="Card image cap">
              <div class="card-body bg-light text-primary">
                <h5 class="card-title text-center">{{$item->first_name}}</h5>
                <p class="card-text text-center">({{$item->wildlife_scientific_name}})</p>
              </div>
           </div>
           @include('editWildlife')  
        </div>
        @include('displayWildlife') 
        @endforeach
        </div>
       

    <!-- Add Button -->

    <a class="float" data-bs-toggle="modal" data-bs-target="#ModalAddWl">
      <i class="bx bx-plus my-float"></i>
    </a>

  </div>
  

</body>

@foreach($wildlifes as $item)
<!-- Delete Wildlife Modal-->
<form action="{{ route('deleteWildlife',$item->info_ID) }}" method="get" enctype="multipart/form-data">
      <div class="modal fade" id="ModalDeleteWl{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      {!! csrf_field() !!}
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content  bg-light">
            
            

            <div class="modal-header border-0 text-center">
              <h5 class="modal-title  text-center">Confirmation</h5>
              <button type="button" class="btn-close bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body border-0">
              <p>Are you sure you want to delete this information card?</p>
            </div>

            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
@endforeach

<!-- Add Wildlife Modal-->
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="modal fade" id="ModalAddWl" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content  bg-light">
            
      <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center">Add Wildlife Information</h5>
        <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
            
            <div class="col-12">
            <label for="wildlife_pic">Wildlife Picture:</label>
            <input type="file" id="wildlife_pic" class="form-control"  placeholder="Wildlife Picture" name="wildlife_pic">
            </div> 

          
              <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Wildlife Name</label>
              <input type="input" class="form-control"  placeholder="Enter Wildlife Name" name="wildlife_name">
              </div>
             
            

            
              <div class="col-12">
                <label for="formGroupExampleInput" class="form-label">Scientific Name</label>
                <input type="input" class="form-control" placeholder="Enter Wildlife Scientific Name" name="wildlife_scientific_name" >
              </div>
          

            <div class="col-12 col-md-4">
              <label for="formGroupExampleInput2" class="form-label">Class</label>
              <input type="input" placeholder="Enter Wildlife Class" class="form-control" name="wildlife_class" >
            </div>

            <div class="col-12 col-md-4">
              <label for="formGroupExampleInput2" class="form-label">Order</label>
              <input type="input" class="form-control"  placeholder="Enter Wildlife Order" name="wildlife_order" >
            </div>

            <div class="col-12 col-md-4">
              <label for="formGroupExampleInput2" class="form-label">Family</label>
              <input type="input" class="form-control" placeholder="Enter Wildlife Family" name="wildlife_family" >
            </div>

            <div class="-12 col-md-4">
              <label for="formGroupExampleInput2" class="form-label">Genus</label>  
              <input type="input" class="form-control" placeholder="Enter Wildlife Genus"  name="wildlife_genus"  name="wildlife_genus" >
            </div>

            <div class="col-12 col-md-4">
              <label for="formGroupExampleInput2" class="form-label">Specie</label>
              <input type="input" class="form-control" placeholder="Enter Wildlife Species"  name="wildlife_species" >
            </div>

            <div class="col-12">
              <label for="formGroupExampleInput2" class="form-label">Location</label> 
              <input type="input" class="form-control"  placeholder="Enter Wildlife Location" name="wildlife_location" >
            </div>

              <input type="hidden" class="form-control" name="info_type" value="wildlife">
              <input type="hidden" class="form-control"  name="wildlife_status" value="Approved">

            <div class="col-12">
              <label for="exampleFormControlinputarea1" class="form-label">Description</label>
              <textarea class="form-control" name="wildlife_desc" rows="3" placeholder="Enter Wildlife Description"></textarea>
            </div>

            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-info text-white">Submit</button>
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>



  
