@extends('layouts.admin')
@section('css')
    <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />


    

@endsection
@section('content')
    <div class="card p-3">
        <div class="mt-5 table-responsive">
            <div class="btn-list d-flex justify-content-between  mt-1 pb-5">
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
            </div>
            <table class=" table card-table table-vcenter text-nowrap  align-items-center w-100 dataTable mt-3" id="example" >
                <thead class="thead-light">
                    <tr >
                        <th>#</th>
                        <th>INV NUM</th>
                        <th class="text-center">Project</th>
                        <th class="text-center">Client</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Method</th>
                        <th style="font-size: 12px">Currency</th>
                        <th class="text-center">Date</th>
                        @if (Auth()->user()->role=="Admin")
                            <th>Action</th>
                        @endif
                       
                    </tr>
                </thead>
                <tbody>
                    @php $counter=1; @endphp
                    @foreach($incomes as $row)
                        <tr id="row{{$row->id}}" >
                            <td> {{$counter++}} </td>
                            <td style="font-size: 12px">INV-00{{$row->invoice_number}}</td>
                            <td class="text-center">{{Helper::getProject($row->project_id)->project_name}}</td>
                            <td style="font-size: 12px">{{Helper::getClientEamil($row->project_id)->email}}</td>
                            <td >
                                @if ($row->currency=='EUR')
                                    <span class="fa fa-eur" style="margin-right: 4px"></span>
                                @elseif($row->currency=='GBP')
                                    <span class="fa fa-gbp" style="margin-right: 4px"></span>
                                @else
                                    <span class="fa fa-dollar" style="margin-right: 4px"></span>
                                @endif
                                {{$row->amount}}</td>
                            <td style="font-size: 12px">{{$row->payment_method}}</td>
                            <td>{{$row->currency}}</td>
                            <td class="text-center">
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
                            
                            @if (Auth()->user()->role=="Admin")
                                <td>
                                    <a  data-id="{{$row->id}}"  class="btn btn-danger btn-sm text-white mr-2 delete">Delete</a>
                                </td>
                            @endif
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

   

    <div id="edit" class="modal fade">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content ">
                <div class="modal-header pd-x-20">
                    <h6 class="modal-title">Edit client</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body pd-20">
                    <div class="alert alert1 alert-danger">
                        <ul id="error"></ul>
                    </div>

                    <form method="post" id="editform">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input name="name"  type="text"  class="form-control" placeholder="Full name" autocomplete="off" id="name">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="phone" type="number" class="form-control" placeholder="Phone Number" autocomplete="off" id="phone">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" type="email" class="form-control" placeholder="Email Address" autocomplete="off" id="email">
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input name="country" type="text" class="form-control" placeholder="Country" autocomplete="off" id="country">
                        </div>
                        <div class="modal-footer  mt-2">
                            <input type="hidden" name="hidden_id" id="hidden_id">
                            <button type="submit" class="btn btn-primary">Update client</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div><!-- modal-body -->

            </div>
        </div><!-- MODAL DIALOG -->
    </div>


@endsection
@section('directory')
    <li class="breadcrumb-item active" aria-current="page">Incomes</li>
@endsection
@section('jquery')
    <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>

    <script>
        $('#example').DataTable();
        $('.alert').hide();
    </script>


    <script>
        
      $('body').on('click','.delete',function(){  
        var id =$(this).attr('data-id');
        Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6          ',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.value) {
                $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  

            $.ajax({
                    type:'DELETE',
                    url:'{{url("incomes")}}/'+id,
                    type:'Delete',
                    success:function(data){ 
                    Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    )
                    $('#row'+id).hide(1500);
                    },
                    error:function(error){
                    Swal.fire(
                      'Faild!',
                      'Income has related data first delete departments data',
                      'error'
                        )
                    }
                 });
                }
            })
              
        });

    
    </script>
@endsection
