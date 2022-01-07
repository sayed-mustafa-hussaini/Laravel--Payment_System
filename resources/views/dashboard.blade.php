@extends('layouts.admin')
@section('css')
    <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />
    <!--C3 CHARTS CSS -->
		<link href="{{ asset('public/assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet"/>


        		<!--C3 CHARTS CSS -->
		<link href="{{ asset('public/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>
       

        <style>
     
     .chart-container {
    width: 1000px;
    height:600px
}
        </style>
@endsection
@section('content')


 

<!-- ROW -->
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="fa fa-globe text-primary fa-3x text-primary-shadow"></i>
                <h6 class="mt-4 mb-2">Total Projects</h6>
                <h2 class="mb-2 number-font">{{$total_projects}}</h2>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="fa fa-dollar text-success fa-3x text-success-shadow"></i>
                <h6 class="mt-4 mb-2">Total Incomes</h6>
                <h2 class="mb-2  number-font">$ {{$total_incomes}}</h2>
            </div>
        </div>
    </div><!-- COL END -->
    
    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="fa fa-pie-chart text-danger fa-3x text-danger-shadow"></i>
                <h6 class="mt-4 mb-2">Total Clients</h6>
                <h2 class="mb-2  number-font">{{$total_client}}</h2>
            </div>
        </div>
    </div><!-- COL END -->
</div>
<!-- ROW -->

<div class="row">
   
    <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="chart-wrapper">
                    <canvas id="myChart" style="width:100%;height:530px"></canvas>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="chart-wrapper">
                    <canvas id="price" style="width:100%;height:550px"></canvas>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
</div>


@endsection

@section('jquery')

        <!-- CHARTJS JS -->
		<script src="{{asset('public/assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{asset('public/assets/plugins/chart/utils.js')}}"></script>
		<script src="{{asset('public/assets/js/chart.js')}}"></script>
        <script src="{{asset('public/assets/js/chart.js')}}"></script>
        

    <script>


new Chart("myChart", {
    type: 'bar',
    data: {
      labels:[<?php foreach($date_project as $key){ echo '"'.$key->year." ".'" ,';}?>],
      datasets: [
        {
          label: "Projects",
          backgroundColor: "#8e5ea2",
          data: [<?php foreach($date_project as $key){ echo $key->total." ".' ,';}?>],
        }
          
      ]
    },
    options: {
        title: {
            display: true,
            text: 'Projects'
        },
        
        responsive: true,
        tooltips: {
            mode: 'index',
        }
    },
});
</script>

<script>

    new Chart("price", {
    type: 'line',
    data: {
      labels: [<?php foreach($price as $key){ echo '"'.$key->month." ".$key->year." ".'" ,';}?>],
      datasets: [
        {
          label: "Price",
          backgroundColor: "rgba(255, 99, 132,0)",
          borderColor: "rgb(255, 99, 132)",
          data: [<?php foreach($price as $key){ echo $key->total." ".' ,';}?>],
        }
          
      ]
    },
    options: {
        title: {
            display: true,
            text: 'Incomes'
        },
        
        responsive: true,
        tooltips: {
            mode: 'index',
        }
    },
});
</script>
    
</script>

@endsection
