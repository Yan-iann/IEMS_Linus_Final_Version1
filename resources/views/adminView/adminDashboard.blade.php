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
          <span class="link_name">Faculty</span>
        </a>
      </li>
      <!--end of faculty-->
      <li>
        <div class="iocn-link">
          <a href="{{ route('thesis') }}">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Students</span>
          </a>
        </div>

      <!-- Profile Deets -->
      <li>
          <div class="profile-details">
                  <div class="profile-content">
               <!--<img src="image/profile.jpg" alt="profileImg">-->
                  </div>
            <div class="name-job">
                    <a href="{{ route('Fprofile') }}">
                    <div class="profile_name">{{ Auth::user()->user_ID }}</div> <!-- call Name -->
                    </a>
                    <div class="job">Administrator</div>        <!-- user type -->
                    
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
      <span class="text">User Accounts</span>
    </div>
    
    <div class="table-responsive">
                        <table class="table">
                             <thead>
                                <tr>
                                  <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="">
                                    <td></td>
                                    <td></td>
                                    <td><input type="search" name="searchWildlife" class="form-control mr-sm2" placeholder="Search User"></td>
                                    <td><button class="btn btn-primary btn-sm" type="submit">Search</button></td>
                                  </form>
                                </tr>
                          </thead>
                       </table>
                    </div>
    <div class="container-fluid">

      
      <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
            @foreach($userInfo as $item)
        <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
          <div class="card border-dark" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#ModalWildlife{{$item->info_ID}}">
            <img class="card-img-top "src="{{ asset($item->profile_pic) }}" alt="Card image cap">
              <div class="card-body bg-light text-primary">
                <h5 class="card-title text-center">{{$item->first_name}}</h5>
                <p class="card-text text-center">({{$item->last_name}})</p>
                <p class="card-text text-center">({{$item->user_type}})</p>
              </div>
           </div>
        </div>
        @endforeach
        </div>
       
  </div>
  <hr>
  <div class="addButton">
        <a href="{{ route('addUser') }}" class="btn btn-success">+ </a>
        <hr> 
  </div>
</body>



  
