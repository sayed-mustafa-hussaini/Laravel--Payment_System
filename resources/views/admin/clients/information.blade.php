<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Flaira - Bootstrap HTML Admin Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dashboard template,admin panel template,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin panel,admin template,bootstrap admin template,dashboard template,	bootstrap admin template,premium admin templates,html admin template,ecommerce dashboard,admin panel template,bootstrap admin theme,bootstrap admin panel">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/brand/favi.png')}}" />

		<!-- TITLE -->
		<title>Information – Your Software Development Partner - Payments System</title>

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    

		<!-- STYLE CSS -->
		<link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('public/assets/css/skin-modes.css" rel="stylesheet')}}"/>


		<!--C3 CHARTS CSS -->
		<link href="{{asset('public/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet')}}"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="{{asset('public/assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="{{asset('public/assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('public/assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('public/assets/colors/color1.css')}}" />

        <style>
            .custom-code{
                display: flex;
                justify-content:flex-end;
                align-items:center;
                
            }
           @media screen and (max-width:768px){
            .custom-code{
                display: none;
               
            }
           }
        </style>

	</head>

	<body>

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('public/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!--APP-SIDEBAR-->
				<div class="header sticky">
					<div class="container">
						<div class="d-flex py-2">
							<div class="">
								<a class="header-brand" href="index.html">
									<img src="{{asset('public/sarey-big.png')}}" style="display: block !important;width:140px !important" class="header-brand-img desktop-logo" alt="logo">
								</a><!-- LOGO -->
							</div>
              
							<div class="d-flex  ml-auto header-right-icons">
								<div class="dropdown d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->
							</div>
						</div>
					</div>
				</div>
				<!--APP-SIDEBAR-->


				



                <!--app-content open-->
				<div class="app-content mt-5" style="margin-top:100px; ">
					<div class="container">
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="clearfix">
											<div class="float-left">
												<h2 class="card-title mb-0">Invoice</h2>
											</div>
										</div>
										<hr>
										<div class="row mb-3">
											<div class="col-lg-6 col-md-6 col-sm-12 ">
												<p class="h3">Invoice:</p>
                                                <p ><span class="fa fa-user-o mr-2"></span> Name : <span>{{$client->name}}</span></p>
                                                <p ><span class="fa fa-envelope-o mr-2"></span>Email Address : <span>{{$client->email}}</span></p>
                                                <p ><span class="fa fa-file-text-o mr-2"></span>Project : <span>{{$project->project_name}}</span></p>
                                                <p ><span class="fa fa-id-card-o mr-2"></span>Project Price : <span> 
                                                    @if ($project->currency=='EUR')
                                                        <span class="fa fa-eur" style="margin-right: 4px"></span>
                                                    @elseif($project->currency=='GBP')
                                                        <span class="fa fa-gbp" style="margin-right: 4px"></span>
                                                    @else
                                                        <span class="fa fa-dollar" style="margin-right: 4px"></span>
                                                    @endif   
                                                    {{$project->total_price}}</span></p>
											</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 custom-code" >
                                                <a class="header-brand" href="index.html">
                                                    <img src="{{asset('public/sarey-big.png')}}" style="display: block !important;height:70px !important;margin-left:auto;" class="header-brand-img desktop-logo" alt="logo">
                                                </a><!-- LOGO -->
                                            </div>
										</div>
										<div class="table-responsive push">
                                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                                <tbody>

                                                    <tr class=" ">
                                                        <th class="text-center">#</th>
                                                        <th>INV NUM</th>
                                                        <th class="text-center">Description</th>
                                                        <th class="text-center">Date</th>
                                                        <th class="text-center">Amount</th>
                                                    </tr>
                                                    @php $counter=1; $total=0; @endphp
                                                    @foreach ($invoice as $row)
                                                        <tr>
                                                            <td class="text-center">{{$counter++}}</td>
                                                            <td class="text-center">INV-00{{$row->invoice_number}}</td>
                                                            <td style="white-space: pre-wrap;text-align:justify;">
                                                                    <p  style="margin:-40px 0;font-size:12px;">{{$row->description}}</p>
                                                            </td>
                                                            <td class="text-right">
                                                                @php
                                                                    $date=date_create($row->created_at);
                                                                    echo date_format($date,"Y-M-d");
                                                                @endphp
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($project->currency=='EUR')
                                                                    <span class="fa fa-eur" style="margin-right: 4px"></span>
                                                                @elseif($project->currency=='GBP')
                                                                    <span class="fa fa-gbp" style="margin-right: 4px"></span>
                                                                @else
                                                                    <span class="fa fa-dollar" style="margin-right: 4px"></span>
                                                                @endif  
                                                                {{$row->amount}}
                                                            </td>
                                                        </tr>

                                                        @php
                                                            $total+=$row->amount;
                                                        @endphp
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="4" class=" text-uppercase text-right">Total Paid</td>
                                                        <td class="font-weight-bold text-center">
                                                            @if ($project->currency=='EUR')
                                                                <span class="fa fa-eur" style="margin-right: 4px"></span>
                                                            @elseif($project->currency=='GBP')
                                                                <span class="fa fa-gbp" style="margin-right: 4px"></span>
                                                            @else
                                                                <span class="fa fa-dollar" style="margin-right: 4px"></span>
                                                            @endif  
                                                            {{$total}}
                                                        </td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="button" class="btn btn-info  mb-1" onclick="javascript:window.print();"><i class="si si-wallet"></i> Print Invoice</button>
                                    </div>
                                </div>
                            </div><!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>


			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
              Copyright © @php echo date('Y') @endphp . Designed by <a href="https://Payments System/"> Payments System </a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="{{asset('public/assets/js/jquery-3.4.1.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('public/assets/plugins/bootstrap/js/popper.min.js')}}"></script>

		<!-- SPARKLINE JS-->
		<script src="{{asset('public/assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="{{asset('public/assets/js/circle-progress.min.js')}}"></script>

		<!-- RATING STAR JS-->
		<script src="{{asset('public/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- INPUT MASK JS-->
		<script src="{{asset('public/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

        <!--HORIZONTAL JS-->
		<script src="{{asset('public/assets/plugins/horizontal-menu/horizontal-menu.js')}}"></script>

		<!-- CUSTOM SCROLL BAR JS-->
		<script src="{{asset('public/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('public/assets/plugins/p-scroll/p-scroll-1.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{asset('public/assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- STICKY JS -->
		<script src="{{asset('public/assets/js/stiky.js')}}"></script>

		<!-- SELECT2 JS -->
		 <script src="{{asset('public/assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{asset('public/assets/js/custom.js')}}"></script>

	</body>
</html>