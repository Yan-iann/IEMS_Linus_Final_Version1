<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-menu'></i>
      <span class="logo_name">Linus</span>
    </div>
      <ul class="nav-links">

        <!--Wildlife-->
        <li>
          <a href="{{ route('guestDashboard') }}">
            <i class='bx bx-grid-alt' ></i>
            <span class="link_name">Critters</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('guestDashboard') }}">Critters</a>
              </li>
            </ul>
        </li> <!--end of wildlife Bar-->

            <!--Museum-->
        <li>
            <div class="iocn-link">
              <a href="{{ route('boneCollection') }}">
                <i class='bx bx-collection' ></i>
                <span class="link_name">Museum</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('boneCollection') }}">Museum</a></li>
              <li><a href="{{ route('boneCollection') }}">Bones</a></li>
              <li><a href="#">References</a></li>
            </ul>
      </li>
      <!--end of Museum Bar-->

        <!--Thesis-->
        <li>
            <div class="iocn-link">
              <a href="{{ route('Guest_thesis') }}">
                <i class='bx bx-collection' ></i>
                <span class="link_name">Thesis Papers</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Guest_thesis') }}">Thesis Papers</a></li>
              <li><a href="{{ route('G_gradThesis') }}">PostGraduate</a></li>
              <li><a href="{{ route('G_undergradThesis') }}">UnderGraduate</a></li>
            </ul>
      </li>
      <!--end of Thesis Paper-->

         <!--Journal-->
        <li>
          <a href="{{ route('Guest_journal') }}">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Journal Articles</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Guest_journal') }}"> Journal Articles</a></li>
            </ul>
        </li><!--end of Journal Article-->

        
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