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
                    <a href="{{ route('Fprofile') }}">
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
<div class="home-section" style="height: 100%">

<div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Profile</span>
</div>


  <div class="container-fluid">
    <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
            
      <div class="col-12 col-lg-4"> 
        <img style="width: 200px;"class="imageWildlife" src="{{ asset('storage/images/profile_Pic.png') }}" alt="No profile picture">   
      </div>
    
            <div class="col-12 col-lg-8">
              <div class="row g-1">
                <div class="col-12  col-lg-7">
                  <label for="formGroupExampleInput" class="form-label">FirstName</label>
                  <h3>{{ Auth::user()->name }}</h3>
                </div>

                <!-- Last Name
                <div class="col-12 col-lg-5">
                  <label for="formGroupExampleInput" class="form-label">Last Name</label>
                </div>
                -->
    
                <div class="col-12"><br>
                  <!-- Filler -->
                </div>
    
                <div class="col-12"><br>
                  <label for="formGroupExampleInput" class="form-label">Email</label>
                  <h3>{{ Auth::user()->email }}</h3>
                </div>
    
                <div class="col-12"><br>
                  <!-- Filler -->
                </div> <div class="col-12"><br>
                  <!-- Filler -->
                </div>
    
                <div class="col-12"><br>
                  <label for="formGroupExampleInput" class="form-label">Password</label>
                  <h3>*********</h3>
                </div>
              </div>
            </div>
    </div>
    
    
      <div class="modal-footer border-0" style="padding-right: 25px;">
        <button type="button" class="btn btn-info text-white m-5">Edit</button>
      </div>
  </div>
    
</div>
</body>