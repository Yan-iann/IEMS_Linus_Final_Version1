<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-menu'></i>
      <span class="logo_name">Linus</span>
    </div>
      <ul class="nav-links">
         <!--Wildlife-->
        <li>
          <a href="{{ route('studentDashboard') }}">
            <i class='bx bx-grid-alt' ></i>
            <span class="link_name">Wildlife</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('studentDashboard') }}">Wildlife</a>
              </li>
            </ul>
        </li> <!--end of wildlife Bar-->
         <!--Thesis-->
        <li>
          <a href="{{ route('Student_thesis') }}">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Thesis Paper</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Student_thesis') }}">Thesis Papers</a>
              </li>
            </ul>
        </li> <!--end of Thesis Paper-->
         <!--Journal-->
        <li>
          <a href="{{ route('Student_journal') }}">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Journal Articles</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Student_journal') }}"> Journal Articles</a></li>
            </ul>
        </li><!--end of Journal Article-->

        <!--Request-->
        <li>
          <a href="{{ route('Student_request') }}"> 
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="link_name">Request</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Student_request') }}">Request</a>
              </li>
            </ul>
        </li><!--end of Request-->
        
         <!--Profile-->
        <li>
          <div class="profile-details">
            <div class="profile-content">
            </div>
              <div class="name-job">
                <a href="{{ route('Fprofile') }}">
                  <div class="profile_name">{{ Auth::user()->name }}
                  </div> <!-- call Name -->
                </a>
                  <div class="job">{{ Auth::user()->user_type }}</div><!-- user type -->   
              </div>
                <!-- Authentication for LogOut-->         
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                  this.closest('form').submit();">
                  <i class='bx bx-log-out' ></i>
                   </x-dropdown-link>
                </form>
          </div>
        </li><!--end of Profile-->
      </ul><!--end of Nav Links-->    
</div><!--end of Sidebar-->