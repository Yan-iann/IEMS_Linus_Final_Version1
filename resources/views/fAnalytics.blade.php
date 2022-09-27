@extends('Flayout')
<head>
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
</head>

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

<div class="home-section">

    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Analysis</span>
    </div>

    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <br>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

            <div class="col-12 col-lg-8">
            <div class="row g-1">
              <div class="col-12  col-lg-7">
                <label for="formGroupExampleInput" class="form-label">wildlifes</label>
                <h5 class="detailsView">{{ $wildlife }}</h5 class="detailsView">
              </div>

             <div class="col-12 col-lg-8">
            <div class="row g-1">
              <div class="col-12  col-lg-7">
                <label for="formGroupExampleInput" class="form-label">Thesis Papers</label>
                <h5 class="detailsView">{{ $thesis }}</h5 class="detailsView">
              </div>

              <div class="col-12 col-lg-8">
              <div class="row g-1">
              <div class="col-12  col-lg-7">
                <label for="formGroupExampleInput" class="form-label">Journal Articles</label>
                <h5 class="detailsView">{{ $journal }}</h5 class="detailsView">
              </div>
</body>

