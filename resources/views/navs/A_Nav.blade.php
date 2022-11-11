<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-menu'></i>
      <span class="logo_name">Linus</span>
    </div>
      <ul class="nav-links">
          <!--All Accounts-->
       <li>
          <a href="{{ route('adminDashboard') }}">
            <i class='bx bxs-user'></i>
            <span class="link_name">All Users</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('adminDashboard') }}">All Users</a>
              </li>
            </ul>
        </li> <!--end of All Acounts Bar-->

       <!--Admins-->
       <li>
          <a href="{{ route('adminAccounts') }}">
            <i class='bx bxs-user'></i>
            <span class="link_name">Administrator</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('adminAccounts') }}">Administrator</a>
              </li>
            </ul>
        </li> <!--end of Admins Bar-->

         <!--Faculty-->
        <li>
          <a href="{{ route('adminFacultyAccounts') }}">
            <i class='bx bxs-user'></i>
            <span class="link_name">Faculty & Staff</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('adminFacultyAccounts') }}">Faculty & Staff</a>
              </li>
            </ul>
        </li> <!--end of Faculty Bar-->

         <!--Student-->
        <li>
          <a href="{{ route('adminStudentAccounts') }}">
          <i class='bx bxs-user-circle'></i>
            <span class="link_name">Student</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('adminStudentAccounts') }}">Student</a>
              </li>
            </ul>
        </li> <!--end of Student-->
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