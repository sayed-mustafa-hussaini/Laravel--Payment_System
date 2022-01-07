@extends('layouts.admin')
@section('css')
    <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />

@endsection
@section('content')
    <div class="card p-3">
        <div class="btn-list ">
                <a href="javascript:viod();" data-backdrop="static" data-toggle="modal" data-target="#create"
                    class="pull-right btn btn-primary d-inline"><i class="ti-plus"></i> &nbsp;Add New client</a>
        </div>

        <div class="mt-5 table-responsive">
            <table class="table table-striped table-bordered table-sm text-nowrap w-100 dataTable no-footer" id="example" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Address</th>
                        <th>Create</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $counter=1; @endphp
                    @foreach ($clients as $row)
                
                        <tr id="row{{ $row->id }}" >
                            <td> {{$counter++}} </td>
                            <td> {{$row->name}} </td>
                            <td> {{$row->phone}} </td>
                            <td> {{$row->email}} </td>
                            <td> {{$row->address}} </td>
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
                            <td>
                                <a  data-id="{{$row->id}}"  class="btn btn-danger btn-sm text-white mr-2 delete">Delete</a>
                                <a  data-id="{{$row->id}}"  data-toggle="modal" data-target="#edit"  class="btn btn-info btn-sm text-white mr-2 edit">Edit</a>
                            </td>
                            
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



    <div id="create" class="modal fade">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content ">
                <div class="modal-header pd-x-20">
                    <h6 class="modal-title">Add client</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                    <div class="alert  alert-danger">
                        <ul id="error"></ul>
                    </div>
                    <form method="post" id="createform">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input name="name"  type="text"  class="form-control" placeholder="Full name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="phone" type="number" class="form-control" placeholder="Phone Number" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" type="email" class="form-control" placeholder="Email Address" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control" placeholder="Address" autocomplete="off">
                        </div>
                        <div class="modal-footer  mt-2">
                            <button type="submit" class="btn btn-primary">Create client</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div><!-- modal-body -->
            </div>
        </div><!-- MODAL DIALOG -->
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
                            <label>Address</label>
                            <input name="address" type="text" class="form-control" placeholder="Address" autocomplete="off" id="address">
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
    <li class="breadcrumb-item active" aria-current="page">clients</li>
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

        $("#createform").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '
                }
            });
            $.ajax({
                url: '{{ url("clients") }}',
                type: 'post',
                data: formData,
                success: function(data) {
                    $(".alert").css('display', 'none');
                    $('.table').load(document.URL + ' .table');
                    $('#create').modal('hide');
                    $('#createform')[0].reset();
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
        });


        $('body').on('click', '.edit', function() {
            id = $(this).attr('data-id');
            url = '{{ url("clients") }}' + '/' + id + '/' + "edit";
            $.get(url, function(data) {
                $('#name').val(data.name);
                $('#phone').val(data.phone);
                $('#email').val(data.email);
                $('#address').val(data.address);
                $('#hidden_id').val(data.id);
            });
        });

        $("#editform").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '@php echo csrf_token() @endphp '
                }
            });
            $.ajax({
                url: '{{ url("client_update") }}',
                type: 'post',
                data: formData,
                success: function(data) {
                    $(".alert1").css('display', 'none');
                    $('.table').load(document.URL + ' .table');
                    $('#edit').modal('hide');
                    $('#editform')[0].reset();
                    return $.growl.notice({
                        message: data.success,
                        title: 'Success !',
                    });
                },
                error: function(data) {
                    $(".alert1").find("ul").html('');
                    $(".alert1").css('display', 'block');
                    $.each(data.responseJSON.errors, function(key, value) {
                        $(".alert1").find("ul").append('<li>' + value + '</li>');
                    });
                    $('.modal').animate({
                        scrollTop: 0
                    }, '500');

                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
        
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
                    url:'{{url("clients")}}/'+id,
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
                      'client has related data first delete departments data',
                      'error'
                        )
                    }
                 });
                }
            })
              
        });

    
    </script>
    <script>
        $('body').on("click",'.print_slip',function() {
            $.ajax({
                type:'GET',
                url:'{{url("partial-payment-billing/print")}}/'+$(this).attr('data-print'),
                success:function(data){ 
                   $('.printData').html(data); 
                },
                error:function(error){
                    // console.log('Server Error');
                }
                });
        });
    
        $('#print_modal').on('shown.bs.modal', function() {
            printDiv();
            $('#print_modal').modal('hide');
        });
        function printDiv() {
            var divToPrint = document.getElementById('divtoprint');
            var newWin = window.open('', 'Print-Window');
            newWin.document.open();
            newWin.document.write('<html><head><style>@media  print { body{hight: 100%;}}</style></head> <body onload="window.print()">' +
                divToPrint.innerHTML + '</body></html>');
            newWin.document.close();
            setTimeout(function() {
                newWin.close();
            }, 10);
        }
    
    </script>
@endsection
