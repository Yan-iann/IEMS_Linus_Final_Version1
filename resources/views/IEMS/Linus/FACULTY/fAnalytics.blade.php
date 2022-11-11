@extends('layouts.F_Layout')
@section('content')
<body>
<div class="home-section" style="height:100%">
    <div class="home-content">
      <span class="text">Analysis</span>
    </div>
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
              <h1> {{ $gradThesis }}</h1>
              <h6 class="card-subtitle mb-2 text-muted">Analysis Here</h6>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">Undergraduate Thesis Papers</h6>
              <h1> {{ $undergradThesis }}</h1>
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

</body>
    

<script>

  <?php
  $dataPoints = array( 
    array("label"=>"Wildlifes", "y"=> $wildlife),
    array("label"=>"PostGrad Thesis Papers", "y"=> $gradThesis),
    array("label"=>"UnderGrad Thesis Papers", "y"=> $undergradThesis),
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
@endsection

