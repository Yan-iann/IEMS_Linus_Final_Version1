@extends('Flayout')
<head>

</head>

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
              <li><a class="link_name" href="#">analysis</a></li>
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

<div class="home-section" style="height:100%">

    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Analysis</span>
    </div>

    <div class="container-fluid">
      <div class="row g-5 m-4 p-0 d-flex align-items-stretch g-l">
        
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">Wildlife</h6>
              <h1> {{ $wildlife }}</h1>
              <h6 class="card-subtitle mb-2 text-muted">Analysis Here</h6>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">Graduate Thesis Papers</h6>
              <h1> {{ $thesis }}</h1>
              <h6 class="card-subtitle mb-2 text-muted">Analysis Here</h6>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">Undergraduate Thesis Papers</h6>
              <h1> {{ $thesis }}</h1>
              <h6 class="card-subtitle mb-2 text-muted">Analysis Here</h6>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card" >
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">Journal Articles</h6>
              <h1> {{ $journal }}</h1>
              <h6 class="card-subtitle mb-2 text-muted">Analysis Here</h6>
            </div>
          </div>
        </div> 

        <div class="col-12 col-md-12 col-lg-6"style="height:12rem;">
          <div class="card" >
            <div class="card-body">           
              <div id="chartContainer" style="height: 370px; width: 100%;"></div>
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>

    

<script>

  <?php
  $dataPoints = array( 
    array("label"=>"Wildlifes", "y"=> $wildlife),
    array("label"=>"Thesis Papers", "y"=> $thesis),
    array("label"=>"Journal", "y"=> $journal),
  )
  
  ?>
  window.onload = function() {
   
   
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
      text: "Total Information Cards"
    },
    subtitles: [{
      text: "IEMS COLLECTION"
    }],
    data: [{
      type: "pie",
      yValueFormatString: "#,##0.00\"%\"",
      indexLabel: "{label} ({y})",
      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
  });
  chart.render();
   
  }
  
</script>
</body>

