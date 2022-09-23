
 <div class="sidebar close">
      <ul>
        <li>
          <a href="{{ url('/') }}">
            <img src="{{URL::asset('/images/logo_linuswhite.png')}}" alt="profile Pic" height="200" width="200">
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
      <li>
        <div class="iocn-link">
          <a href="{{ route('thesis') }}">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Thesis Paper</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Thesis Papers</a></li>
          <li><a href="#">Undergraduate</a></li>
          <li><a href="#">Postgraduate</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="{{ route('journal') }}">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Journal Articles</span>
          </a>
        </div>
      </li>
      <li>
        <a href="#"> 
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analysis</span>
        </a>
      </li>


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
          <i class='bx bx-log-out' ></i> <!-- Log out  idk how e log out-->
        </div>
      </li>
    </ul>
</div>

      

 
  