@extends('layouts.admin')

@section('css')
    <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{asset('public/assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" />

	<style>
		.invoice-table tr td{
           background:white !important;
       }
	</style>
@endsection

@section('content')

	<!-- ROW -->
	<div class="row">
		<div class="col-xl-4 col-md-4 col-lg-6">
			<div class="card">
				<div class="card-body text-center">
					<h6 class=""><span class="text-success"><i class="fe fe-file-text mr-2 fs-20 text-success-shadow"></i></span>Total Paid Amount</h6>
					<h3 class="text-dark counter mt-0 mb-3 number-font">
						@if ($project->currency=='EUR')
							<span class="fa fa-eur" style="margin-right: 3px"></span>
						@elseif($project->currency=='GBP')
							<span class="fa fa-gbp" style="margin-right: 3px"></span>
						@else
							<span class="fa fa-dollar" style="margin-right: 3px"></span>
						@endif
						<?php echo Helper::paidAmount($project->id); ?>
					</h3>
					<div class="progress h-1 mt-0 mb-2">
						<div class="progress-bar progress-bar-striped bg-success w-70" role="progressbar"></div>
					</div>
					<div class="row mt-4">
						<div class="col text-center"> <span class="text-muted">Project Price</span>
							<h4 class="font-weight-normal mt-2 mb-0 number-font1">
								@if ($project->currency=='EUR')
									<span class="fa fa-eur" style="margin-right: 3px"></span>
								@elseif($project->currency=='GBP')
									<span class="fa fa-gbp" style="margin-right: 3px"></span>
								@else
									<span class="fa fa-dollar" style="margin-right: 3px"></span>
								@endif
								{{$project->total_price}}
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-4 col-lg-6">
			<div class="card overflow-hidden">
				<div class="card-body text-center ">
					<h6 ><span class="text-info"><i class="fe fe-users mr-2 fs-20 text-info-shadow"></i></span>Total Invoice</h6>
					<h3 class="text-dark counter mt-0 mb-3 number-font load-totalInvoice">{{$total_invoice}}</h3>
					<div class="progress h-1 mt-0 mb-2">
						<div class="progress-bar progress-bar-striped bg-info w-50" role="progressbar"></div>
					</div>
					<div class="row mt-4">
						
						<div class="col text-center text-danger"> <span class="text-muted">Unsent</span>
							<h4 class="font-weight-normal mt-2 mb-0 number-font1 load-totalInvoice-unsent">{{$invoice_unsent}}</h4>
						</div>
						<div class="col text-center text-primary"> <span class="text-muted">Sent</span>
							<h4 class="font-weight-normal mt-2 mb-0 number-font1 load-totalInvoice-sent">{{$invoice_sent}}</h4>
						</div>
						<div class="col text-center text-success"> <span class="text-muted">Paid</span>
							<h4 class="font-weight-normal mt-2 mb-0 number-font1 load-totalInvoice-paid">{{$invoice_paid}}</h4>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-4 col-lg-6">
			<div class="card overflow-hidden">
				<div class="card-body text-center">
					<h6 class=""><span class="text-secondary"><i class="fe fe-award mr-2 fs-20 text-secondary-shadow"></i></span>Total Invoice Price</h6>
					<h3 class="text-dark counter mt-0 mb-3 number-font text-danger">
								@if ($project->currency=='EUR')
									<span class="fa fa-eur" style="margin-right: 3px"></span>
								@elseif($project->currency=='GBP')
									<span class="fa fa-gbp" style="margin-right: 3px"></span>
								@else
									<span class="fa fa-dollar" style="margin-right: 3px"></span>
								@endif
								<span class="load-totalInvoicePrice">
									<?php echo Helper::totalInvoicePrice($project->id); ?>
								</span>
					</h3>
					<div class="progress h-1 mt-0 mb-2">
						<div class="progress-bar progress-bar-striped bg-secondary w-60" role="progressbar"></div>
					</div>
					<div class="row mt-4">
						<div class="col text-center"> <span class="text-muted">Unsent</span>
							<h4 class="font-weight-normal mt-2 mb-0 number-font1">
								@if ($project->currency=='EUR')
									<span class="fa fa-eur" style="margin-right: 3px"></span>
								@elseif($project->currency=='GBP')
									<span class="fa fa-gbp" style="margin-right: 3px"></span>
								@else
									<span class="fa fa-dollar" style="margin-right: 3px"></span>
								@endif
								<span class="load-totalInvoicePrice-unsent"><?php echo Helper::totalInvoiceUnsent($project->id); ?></span>
							</h4>
						</div>
						<div class="col text-center"> <span class="text-muted">Sent</span>
							<h4 class="font-weight-normal mt-2 mb-0 number-font1">
								@if ($project->currency=='EUR')
									<span class="fa fa-eur" style="margin-right: 3px"></span>
								@elseif($project->currency=='GBP')
									<span class="fa fa-gbp" style="margin-right: 3px"></span>
								@else
									<span class="fa fa-dollar" style="margin-right: 3px"></span>
								@endif

								<span class="load-totalInvoicePrice-sent"><?php echo Helper::totalInvoiceSent($project->id); ?></span>
							</h4>
						</div>
						<div class="col text-center"> <span class="text-muted">Paid</span>
							<h4 class="font-weight-normal mt-2 mb-0 number-font1">
								@if ($project->currency=='EUR')
									<span class="fa fa-eur" style="margin-right: 3px"></span>
								@elseif($project->currency=='GBP')
									<span class="fa fa-gbp" style="margin-right: 3px"></span>
								@else
									<span class="fa fa-dollar" style="margin-right: 3px"></span>
								@endif

								<span class="load-totalInvoicePrice-paid"><?php echo Helper::paidAmount($project->id); ?></span>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- ROW -->


	<!-- ROW-1 OPEN -->
	<div class="row" id="user-profile">
		<div class="col-xl-12 col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">About {{$project->project_name}}</h3>
				</div>
				<div class="card-body">
					<div class="pd-20 p-4">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item listnoback ist-group-item-info">
										<b>Project Name</b> <a class="pull-right text-aqua text-primary" id="show_project_name">{{$project->project_name}}</a>
									</li>
									<li class="list-group-item listnoback">
										<b>Client Email</b> <a class="pull-right text-aqua text-primary" text-primary id="show_client_name"><?php echo Helper::getCustomer($project->client_id)->email;?></a>
									</li>
									<li class="list-group-item listnoback">
										<b>Start Date</b> <a class="pull-right text-aqua text-primary" id="show_start_date">{{$project->start_date}}</a>
									</li>
									<li class="list-group-item listnoback">
										<b>Total Price</b> <a class="pull-right text-aqua text-primary" id="show_status">{{$project->total_price}}</a>
									</li>
									<li class="list-group-item listnoback">
										<b>Status</b> 
										<a class="pull-right text-aqua text-primary" id="show_status">
											@if ($project->status=='Not Started')
												<span class="badge badge-warning  ml-2 ">  {{$project->status}} </span>
											@elseif($project->status=='In Progress')
												<span class="badge badge-info  ml-2 ">  {{$project->status}} </span>
											@elseif($project->status=='Finished')
												<span class="badge badge-success ml-2  ">  {{$project->status}} </span>     
											@elseif($project->status=='Cancelled')
												<span class="badge badge-danger ml-2 ">  {{$project->status}} </span>
											@endif
										</a>
									</li>
									
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item listnoback">
										<b>Client Name</b> <a class="pull-right text-aqua text-primary" id="show_client_email"><?php echo Helper::getCustomer($project->client_id)->name; ?></a>
									</li>
									
									<li class="list-group-item listnoback">
										<b>Paid Amount</b> <a class="pull-right text-aqua text-primary" id="show_author"><?php echo Helper::paidAmount($project->id); ?></a>
									</li>
									<li class="list-group-item listnoback">
										<b>Deadline</b> <a class="pull-right text-aqua text-primary" id="show_deadline">{{$project->deadline}}</a>
									</li>
									
									<li class="list-group-item listnoback">
										<b>Currency</b><a class="pull-right text-aqua text-primary" id="show_status">{{$project->currency}}</a>
									</li>
									<li class="list-group-item listnoback">
										<b>Create Date</b> 
										<a class="pull-right text-aqua text-primary" id="show_created_at">
											@php
												$date=date_create($project->created_at);
												echo date_format($date,"Y-m-d");
											@endphp    
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6 mt-5">
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item listnoback">
										<b>description</b> <a class="pull-right text-aqua text-justify text-primary"  >{{$project->description}}</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div>
			<div class="card">
				<div class="card-header p-0">
					<div class="wideget-user-tab">
						<div class="tab-menu-heading">
							<div class="tabs-menu1">
								<ul class="nav">
									<li ><a style="font-size: 20px !important" class="active" data-toggle="tab">Invoice</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="border-0">

						<div class="btn-list d-flex justify-content-between  mt-1 pb-3">
							<div class="input-group">
								<div class="input-group">
									<a href="#" class="btn btn-teal button-icon mr-3 mt-1 mb-1">
										<span><i class="fe fe-printer"></i>Print</span>
									</a>
									<a href="#" class="btn btn-cyan button-icon mr-3 mt-1 mb-1">
										<span><i class="fe fe-download"></i>PDF</span>
									</a>
								</div>
							</div>
							<div class="">
								<a href="javascript:viod();" data-backdrop="static" data-toggle="modal" data-target="#invoiceCreate" 
								class="pull-right btn  btn-primary  btn-md d-inline" id="addNewInvoice"><i class="ti-plus"></i> &nbsp;Add New Invoice</a>
							
							</div>	
						</div>
			

						<div class="table-responsive">
							<table class="table card-table table-vcenter text-nowrap  align-items-center mt-3 invoice-table">
								<thead class="thead-light">
									<tr>
										<th>#</th>
										<th>INV NUM</th>
										<th>AMOUNT</th>
										<th>STATUS</th>
										<th>SENT DATE</th>
										<th>DEADLINE</th>
										<th>CREATE</th>
										<th >ACTION</th>
									</tr>
								</thead>
								<tbody>
									@if (empty($invoices[0]))
										<tr>
											<td>No data available in table</td>
										</tr>
									@else
										@php $counter=1; @endphp
										@foreach($invoices as $row)
										<tr id="row {{$row->id}}" >
												<td>{{$counter++}}</td>
												<td>INV-00{{$row->invoice_number}} </td>
												<td> 
													@if ($project->currency=='EUR')
														<span class="fa fa-eur" style="margin-right: 1px"></span>
													@elseif($project->currency=='GBP')
														<span class="fa fa-gbp" style="margin-right: 1px"></span>
													@else
														<span class="fa fa-dollar" style="margin-right: 1px"></span>
													@endif
													{{$row->amount}} 
												</td>
												<td>
													@if($row->status=="Unsent")
														<span  class="badge badge-warning mr-2 mb-2 "> {{$row->status}} </span>
													@elseif($row->status=="Paid")
														<span  class="badge badge-success mr-2 mb-2 "> {{$row->status}} </span>
													@else
														<span class="badge badge-secondary mr-2 mb-2"> {{$row->status}} </span>
													@endif
												</td>
												<td>
													@if($row->sent_date==null)
														<span  class="text-danger"> Not Sent </span>
													@else
														<span> {{$row->sent_date}} </span>
													@endif
												</td>
												<td> {{$row->deadline}} </td>
												<td >
													@php
														$date=date_create($row->created_at);
														echo date_format($date,'Y-M-d');
													@endphp 
													<br>
													<small class="text-muted">
														@php
															$date=date_create($row->created_at);
															echo date_format($date,'h:i:s a');
														@endphp 
													</small>     
												</td>
												<td>
													@if ($row->status=="Unsent")
														<a  data-id=" {{$row->id}} " data-currency=" {{$project->currency}} " data-toggle="modal" data-target="#show"  class="btn btn-success btn-sm text-white mr-2 view">View</a>
														<a  data-id=" {{$row->id}} " class="btn btn-danger btn-sm text-white mr-2 invoice-delete">Delete</a>
														<a  data-id=" {{$row->id}} "  data-toggle="modal" data-target="#invoice-edit"  class="btn btn-info btn-sm text-white mr-2 invoice-edit">Edit</a>
														<a  data-id=" {{$row->id}} " data-status=" {{$row->status}} "  data-toggle="modal" data-target="# "  class="btn btn-cyan btn-sm text-white mr-2 invoice_sent">Sent Invoice</a>
													@elseif($row->status=="Sent")
														<a  data-id=" {{$row->id}} " data-currency=" {{$project->currency}} " data-toggle="modal" data-target="#show"  class="btn btn-success btn-sm text-white mr-2 view">View</a>
														<a  data-id=" {{$row->id}} "  class="btn btn-danger btn-sm text-white mr-2 invoice-delete">Delete</a>
														<a  data-id=" {{$row->id}} "  data-toggle="modal" data-target="#invoice-edit"  class="btn btn-info btn-sm text-white mr-2 invoice-edit">Edit</a>
														<a  data-id=" {{$row->id}} " data-status=" {{$row->status}} "  data-toggle="modal" data-target="# "  class="btn btn-green btn-sm text-white mr-2 invoice_sent">Sent again</a>
													@else
														<a  data-id=" {{$row->id}} " data-currency=" {{$project->currency}} " data-toggle="modal" data-target="#show"  class="btn btn-success btn-sm text-white mr-2 view">View</a>
														<a  data-id=" {{$row->id}} "  class="btn btn-danger btn-sm text-white mr-2 invoice-delete">Delete</a>
														<a  data-id=" {{$row->id}} "  data-toggle="modal" data-target="#invoice-edit"  class="btn btn-info btn-sm text-white mr-2 invoice-edit">Edit</a>
													@endif
												
												</td>
											</tr>
										@endforeach

									@endif
								</tbody>
							</table>
						</div>
									

						<div class="my-2 d-flex justify-content-end ">
							<p class="text-right mr-3 border p-2 m-0">Total Price: 
								@if ($project->currency=='EUR')
									<span class="fa fa-eur  ml-1"></span>
								@elseif($project->currency=='GBP')
									<span class="fa fa-gbp  ml-1" ></span>
								@else
									<span class="fa fa-dollar  ml-1"></span>
								@endif
								<span class="total_price"><?php echo Helper::totalInvoicePrice($project->id); ?></span>
							</p>
						</div>
							
					</div>
				</div>
			</div>
		</div><!-- COL-END -->
	</div>
	<!-- ROW-1 CLOSED -->


						



	{{-- Invoice Create --}}
	<div id="invoiceCreate" class="modal fade invoiceCreate">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content ">
				<div class="modal-header pd-x-20">
					<h6 class="modal-title">Add Invoice</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pd-20">
					<div class="alert  alert-danger">
						<ul id="error" ></ul>
					</div>
					<form method="post" id="createformInvoice">
						<div class="form-group InvNum">
							<label>Invoice Number</label>
							<input name="invoice_number" readonly  type="text"  class="form-control" value="<?php echo Helper::invNum() ?>" autocomplete="off">
						</div>
						<div class="form-group">
							<input name="project_name" value="{{$project->id}}"   type="hidden"  class="form-control" placeholder="project_id"  autocomplete="off" >
							<input name="status" readonly  type="hidden"  class="form-control" value="Unsent" autocomplete="off">
							<label>Invoice Amount</label>
							<input name="Invoice_amount"  type="number"  class="form-control"  placeholder="Invoice amount" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Deadline</label>
							<input name="deadline" type="date"  class="form-control" placeholder="Deadline" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control"  rows="4" placeholder="Write Description" autocomplete="off"></textarea>
						</div>
						<div class="modal-footer  mt-2">
							<button type="submit" class="btn btn-primary">Create Invoice</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div><!-- modal-body -->
			</div>
		</div><!-- MODAL DIALOG -->
	</div>{{-- Invoice Create --}}



	{{-- Invoice Edit --}}
	<div id="invoice-edit" class="modal fade">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content ">
				<div class="modal-header pd-x-20">
					<h6 class="modal-title">Edit Invoice</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pd-20">
					<div class="alert-invoiceItem alert  alert-danger">
						<ul id="error"></ul>
					</div>
					
					<form method="post"  id="editformInvoice">
						<div class="form-group">
							<label>Invoice Number</label>
							<input name="invoice_number" readonly  type="text"  class="form-control"  autocomplete="off" id="invoice_number">
						</div>
						<div class="form-group">
							<input name="project_name"   type="hidden"  class="form-control"   autocomplete="off" id="edit_project_id">
							<label>Invoice Amount</label>
							<input name="Invoice_amount"  type="number"  class="form-control"  placeholder="Invoice amount" autocomplete="off" id="invoice_amount">
						</div>
						<div class="form-group">
							<label>Status</label>
							<select name="status" class="form-control " id="invoice_status">
								{{-- <option value="" selected disabled>Select Status</option>
								<option value="Sent">Sent</option>
								<option value="Unsent">Unsent</option>
								<option value="Paid" >Paid</option> --}}
							</select>
						</div>
						<div class="form-row mt-2">
							<div class="col">
								<div class="form-group">
									<label>Sent Date</label>
									<input name="sent_date"  type="date"  class="form-control"  autocomplete="off" id="invoice_sent_date">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label>Deadline</label>
									<input name="deadline" type="date"  class="form-control" placeholder="Deadline" autocomplete="off" id="invoice_deadline">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control"  rows="4" placeholder="Write Description" autocomplete="off" id="invoice_description"></textarea>
						</div>
						<div class="modal-footer  mt-2">
							<input type="hidden" name="invoice_hidden_id" id="invoice_hidden_id">
							<button type="submit" class="btn btn-primary">Update Invoice</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div><!-- modal-body -->
			</div>
		</div><!-- MODAL DIALOG -->
	</div>{{-- Invoice Edit --}}





	{{-- show Modal --}}
	<div id="show" class="modal fade" style="z-index:100000">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content ">
				<div class="modal-header pd-x-20">
					<h6 class="modal-title">Invoice Info </h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pd-20" id="divtoprint">

					<div style="margin-top: 20px;" class="mb-2">
						<div class="input-group">
							<a href="#" class="btn btn-teal button-icon mr-3 mt-1 mb-1" id="show-print">
								<span><i class="fe fe-printer"></i>Print</span>
							</a>
							<a href="#" class="btn btn-cyan button-icon mr-3 mt-1 mb-1" id="show-pdf">
								<span><i class="fe fe-download"></i>PDF</span>
							</a>
						</div>
					</div>
					<div class="row p-4">
						<table class=" table-md table " cellspacing="0" cellpadding="0" width="100%">
							<tbody>
								<tr>
									<th>Invoice Number :</th>
									<td ><small id="show-invoiceNumber"> </small></td>
									<th>AMOUNT :</th>
									<td ><small id="show-amount"> </small></td>
								</tr>
								<tr>
									<th>SENT DATE :</th>
									<td ><small id="show-sentDate"> </small></td>   
									<th>DEADLINE :</th>
									<td ><small id="show-deadline"> </small></td>   
								</tr>
								<tr>
									<th>Status</th>
									<td ><small id="show-status"> </small></td>   
									<th>Create Date:</th>
									<td ><small id="show-createDate"> </small></td>   
								</tr>
								</tr>
								<tr>
									<td colspan="4">
										<h6 class="font-weight-300 text-uppercase">Description  :</h6>
										<p class="mt-2" id="show-description"></p>
									</td>
								</tr>
								<tr>
									<td></td><td></td><td></td><td></td>
								</tr>
							</tbody>
						</table>
					</div>
							
				</div><!-- modal-body -->
			</div>
		</div><!-- MODAL DIALOG -->
	</div>{{-- show Modal --}}




	

					
@endsection

@section('directory')
    <li class="breadcrumb-item active" aria-current="page">Project<span class="mx-2">/</span><span class="text-info">{{$project->project_name}}</span></li>
@endsection


@section('jquery')
    <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js')}}"></script>
    <script src="{{asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js')}}"></script>


	<script>


		$('#example').DataTable();
        $('.alert').hide();
        $('body').on('click', '#addNewInvoice', function() {
            $("#create .alert").css('display', 'none');
			$('.InvNum').load(document.URL + ' .InvNum');
        });


		// Create Invoice
        $("#createformInvoice").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '
                }
            });
            $.ajax({
                url: '{{ url("invoice") }}',
                type: 'post',
                data: formData,
                success: function(data) {
                    $(".alert").css('display', 'none');
                    $('#invoiceCreate').modal('hide');
                    $('.invoice-table').load(document.URL + ' .invoice-table');
                    $('#createformInvoice')[0].reset();

					$('.load-totalInvoice').load(document.URL + ' .load-totalInvoice');
					$('.load-totalInvoice-unsent').load(document.URL + ' .load-totalInvoice-unsent');
					$('.load-totalInvoice-sent').load(document.URL + ' .load-totalInvoice-sent');
					$('.load-totalInvoice-paid').load(document.URL + ' .load-totalInvoice-paid');
					$('.total_price').load(document.URL + ' .total_price');

					$('.load-totalInvoicePrice').load(document.URL + ' .load-totalInvoicePrice');
					$('.load-totalInvoicePrice-unsent').load(document.URL + ' .load-totalInvoicePrice-unsent');
					$('.InvNum').load(document.URL + ' .InvNum');

                    return $.growl.notice({
                        message: data.success,
                        title: 'Success !',
                    });
                },
                error: function(data) {
                    $(".alert").find("ul").html('');
                    $(".alert").css('display', 'block');
                    $.each(data.responseJSON.errors, function(key, value) {
                        $(".alert").find("ul").append('<li>' + value + '</li>');
                    });
                    $('.modal').animate({
                        scrollTop: 0
                    }, '500');
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }); // Create Invoice



		// Delete invoice
        $('body').on('click','.invoice-delete',function(){  
            var id =$(this).attr('data-id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  
                    $.ajax({
                            type:'DELETE',
                            url:'{{url("invoice")}}/'+id,
                            type:'Delete',
                            success:function(data){ 
                                Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
								$('.invoice-table').load(document.URL + ' .invoice-table');
                                $('#row'+id).hide(1500);
								$('.load-totalInvoice').load(document.URL + ' .load-totalInvoice');
								$('.load-totalInvoice-unsent').load(document.URL + ' .load-totalInvoice-unsent');
								$('.load-totalInvoice-sent').load(document.URL + ' .load-totalInvoice-sent');
								$('.load-totalInvoice-paid').load(document.URL + ' .load-totalInvoice-paid');
								$('.total_price').load(document.URL + ' .total_price');
								$('.load-totalInvoicePrice').load(document.URL + ' .load-totalInvoicePrice');
								$('.load-totalInvoicePrice-unsent').load(document.URL + ' .load-totalInvoicePrice-unsent');
								$('.load-totalInvoicePrice-sent').load(document.URL + ' .load-totalInvoicePrice-sent');
								$('.load-totalInvoicePrice-paid').load(document.URL + ' .load-totalInvoicePrice-paid');
                            },
                            error:function(error){
                                Swal.fire(
                                'Faild!',
                                'Invoice has related data',
                                'error'
                                    )
                            }
                    });
                }
            })
              
        });// Delete invoice



		 // Edit Invoice
		 $('body').on('click', '.invoice-edit', function() {
            $(".alert").css('display', 'none');
            $('#editformInvoice')[0].reset();
            id = $(this).attr('data-id');
            url = '{{ url("invoice") }}' + '/' + id + '/' + "edit";
            $.get(url, function(data) {
                $('#invoice_number').val(data.invoice_number);
                $('#edit_project_id').val(data.project_id);
                $('#invoice_amount').val(data.amount);
				var Hdata='';
				if(data.status=="Paid"){
					Hdata='<option value=""  disabled>Select Status</option><option selected value="Paid" >Paid</option>'
					$('#invoice_amount').prop('readonly', true);
				}else{
					$('#invoice_amount').prop('readonly', false);
					if(data.status=="Unsent"){
						Hdata='<option value="" disabled>Select Status</option><option value="Unsent" selected>Unsent</option><option value="Sent" >Sent</option>'
					}else{
						Hdata='<option value="" disabled>Select Status</option><option value="Unsent">Unsent</option><option value="Sent" selected>Sent</option>'
					}
				}
				$('#invoice_status').html(Hdata);
                $('#invoice_sent_date').val(data.sent_date);
                $('#invoice_deadline').val(data.deadline);
                $('#invoice_description').val(data.description);
                $('#invoice_hidden_id').val(data.id);
            });
        }); // Edit Invoice


		 // Submit Edit Invoice
		 $("#editformInvoice").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var id=$('#edit_project_id').val(); 
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '
                }
            });
            $.ajax({
                url: '{{ url("invoice_update") }}',
                type: 'post',
                data: formData,
                success: function(data) {
                    $(".alert-invoiceItem").css('display', 'none');
                    $('#invoice-edit').modal('hide');
                    $('.invoice-table').load(document.URL + ' .invoice-table');
					$('.load-totalInvoice').load(document.URL + ' .load-totalInvoice');
					$('.load-totalInvoice-unsent').load(document.URL + ' .load-totalInvoice-unsent');
					$('.load-totalInvoice-sent').load(document.URL + ' .load-totalInvoice-sent');
					$('.load-totalInvoice-paid').load(document.URL + ' .load-totalInvoice-paid');
					$('.total_price').load(document.URL + ' .total_price');
					$('.load-totalInvoicePrice').load(document.URL + ' .load-totalInvoicePrice');
					$('.load-totalInvoicePrice-unsent').load(document.URL + ' .load-totalInvoicePrice-unsent');
					$('.load-totalInvoicePrice-sent').load(document.URL + ' .load-totalInvoicePrice-sent');
					$('.load-totalInvoicePrice-paid').load(document.URL + ' .load-totalInvoicePrice-paid');
                    return $.growl.notice({
                        message: data.success,
                        title: 'Success !',
                    });
                },
                error: function(data) {
                    $(".alert-invoiceItem").find("ul").html('');
                    $(".alert-invoiceItem").css('display', 'block');
                    $.each(data.responseJSON.errors, function(key, value) {
                        $(".alert-invoiceItem").find("ul").append('<li>' + value + '</li>');
                    });
                    $('.modal').animate({
                        scrollTop: 0
                    }, '500');
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }); // Submit Edit Invoice



		// Sent Invoice
        $('body').on('click','.invoice_sent',function(){  
            var id =$(this).attr('data-id');
			var status =$(this).attr('data-status');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#34c39f',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, Sent invoice item!'
            }).then((result) => {
                if (result.value) {
					$(this).text('Sending..');
					$(this).addClass('btn-loading');
                    $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  
                    $.ajax({
                            type:'get',
                            url:'{{url("sentInvoice")}}/'+id,
                            type:'get',
                            success:function(data){ 
                                Swal.fire(
                                'Sent!',
                                'Your file has been sent.',
                                'success'
                                )
								
								$( ".invoice_sent[data-id='"+id+"']" ).removeClass('btn-loading');
								if(status=="Sent"){
									$( ".invoice_sent[data-id='"+id+"']" ).text('Sent again');
								}else{
									$( ".invoice_sent[data-id='"+id+"']" ).text('Sent Invoice');
								}
								
								$('.invoice-table').load(document.URL + ' .invoice-table');
								$('.load-totalInvoice').load(document.URL + ' .load-totalInvoice');
								$('.load-totalInvoice-unsent').load(document.URL + ' .load-totalInvoice-unsent');
								$('.load-totalInvoice-sent').load(document.URL + ' .load-totalInvoice-sent');
								$('.load-totalInvoice-paid').load(document.URL + ' .load-totalInvoice-paid');
								$('.load-totalInvoicePrice').load(document.URL + ' .load-totalInvoicePrice');
								$('.load-totalInvoicePrice-unsent').load(document.URL + ' .load-totalInvoicePrice-unsent');
								$('.load-totalInvoicePrice-sent').load(document.URL + ' .load-totalInvoicePrice-sent');
								$('.load-totalInvoicePrice-paid').load(document.URL + ' .load-totalInvoicePrice-paid');	
                            },
                            error:function(error){
                                Swal.fire(
                                'Faild!',
                                'Invoice Item has related data',
                                'error'
                                    )

									$( ".invoice_sent[data-id='"+id+"']" ).removeClass('btn-loading');
								if(status=="Sent"){
									$( ".invoice_sent[data-id='"+id+"']" ).text('Sent again');
								}else{
									$( ".invoice_sent[data-id='"+id+"']" ).text('Sent Invoice');
								}

								$('.invoice-table').load(document.URL + ' .invoice-table');
									
                            }
                    });
                }
            })
              
        });// Sent Invoice



		// Show invoice
        $('body').on('click', '.view', function() {
            var id = $(this).attr('data-id');
			var currency=$(this).attr('data-currency');
            var url="{{url('invoice-show')}}/"+id;
            $.get(url,function(data){
				$('#show-print').attr('data-show-print',data.id);
				$('#show-pdf').attr('data-show-print',data.id);
			   	$('#show-invoiceNumber').text('INV-00'+data.invoice_number);

				var show_currency='';
				if (currency=='EUR'){
					show_currency='<span class="fa fa-eur" style="margin-right: 3px"></span>'+data.amount;
				}else if(currency=='GBP'){
					show_currency='<span class="fa fa-gbp" style="margin-right: 3px"></span>'+data.amount;
				}else{
					show_currency='<span class="fa fa-dollar" style="margin-right: 3px"></span>'+data.amount;
				}
				$('#show-amount').html(show_currency);

				var sentDate='';
				if( data.sent_date== null){
					sentDate='Not Sent';
					$('#show-sentDate').addClass(' text-danger');
				}else{
					sentDate=data.sent_date;
					$('#show-sentDate').removeClass(' text-danger');
				}
				$('#show-sentDate').html(sentDate);

				$('#show-deadline').text(data.deadline);

				var status='';
				if(data.status=="Unsent"){
					status='<span  class="badge badge-warning mr-2 mb-2 ">'+data.status+'</span>';
				}else if(data.status=="Paid"){
					status='<span  class="badge badge-success mr-2 mb-2 ">'+data.status+'</span>';
				}else{
					status='<span class="badge badge-secondary mr-2 mb-2">'+data.status+'</span>';
				}
				$('#show-status').html(status);
				var dt = new Date(data.created_at);
				$('#show-createDate').text(dt.getFullYear() + "-" + (dt.getMonth() + 1) + "-" + dt.getDate());
				$('#show-description').text(data.description);

            });        
        });// Show invoice


	</script>



@endsection