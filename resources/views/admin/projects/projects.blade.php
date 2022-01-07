@extends('layouts.admin')
@section('css')
    <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/notify/css/jquery.growl.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />

    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" defer/>
    <style>
        .select2-selection{
           background:#f5f6fa !important;
       }

       .table-invoice tr th{
           font-size: 13px !important;
       }
   </style>


@endsection
@section('content')
    <div class="card p-3">
        <div class="btn-list ">
                <a href="javascript:viod();" data-backdrop="static" data-toggle="modal" data-target="#create"
                    class="pull-right btn btn-primary d-inline" id="createNewProject"><i class="ti-plus"></i> &nbsp;Add New Project</a>
        </div>
        <div class="mt-5 table-responsive">
            <table class="table table-striped table-bordered table-sm text-nowrap w-100 dataTable no-footer project_table" id="example" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Project Name</th>
                        <th>Start Date</th>
                        <th>Deadline</th>
                        <th>Total Price</th>
                        <th>Paid Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $counter=1; @endphp
                    @foreach ($projects as $row)

                        <tr id="row{{ $row->id }}" >
                            <td> {{$counter++}} </td>
                            <td> {{$row->project_name}} </td>
                            <td> {{$row->start_date}} </td>
                            <td> {{$row->deadline}} </td>
                            <td> 
                                @if ($row->currency=='EUR')
                                    <span class="fa fa-eur" style="margin-right: 4px"></span>
                                @elseif($row->currency=='GBP')
                                    <span class="fa fa-gbp" style="margin-right: 4px"></span>
                                @else
                                    <span class="fa fa-dollar" style="margin-right: 4px"></span>
                                @endif
                            {{$row->total_price}} </td>
                            <td id="paidAmount"> 
                                @if ($row->currency=='EUR')
                                    <span class="fa fa-eur" style="margin-right: 4px"></span>
                                @elseif($row->currency=='GBP')
                                    <span class="fa fa-gbp" style="margin-right: 4px"></span>
                                @else
                                    <span class="fa fa-dollar" style="margin-right: 4px"></span>
                                @endif
                                <?php echo Helper::paidAmount($row->id); ?> 
                            </td>
                            <td>
                                @if ($row->status=='Not Started')
                                    <span class="badge badge-warning  ml-2 ">  {{$row->status}} </span>
                                @elseif($row->status=='In Progress')
                                    <span class="badge badge-info  ml-2 ">  {{$row->status}} </span>
                                @elseif($row->status=='Finished')
                                    <span class="badge badge-success ml-2  ">  {{$row->status}} </span>     
                                @elseif($row->status=='Cancelled')
                                    <span class="badge badge-danger ml-2 ">  {{$row->status}} </span>
                                @endif
                            </td>

                            <td>
                                <a   href="{{url('project/information')}}/{{$row->id}}"  class="btn btn-lime btn-sm text-white mr-2">Info</a>
                                <a  data-id="{{$row->id}}"  class="btn btn-danger btn-sm text-white mr-2 delete">Delete</a>
                                <a  data-id="{{$row->id}}"  data-toggle="modal" data-target="#edit"  class="btn btn-info btn-sm text-white mr-2 edit">Edit</a>
                                <a  data-id="{{$row->id}}"  data-toggle="modal" data-target="#edit"  class="btn btn-teal btn-sm text-white mr-2 edit">Print</a>
                            </td>   
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


    {{-- Create Project Modal --}}
    <div id="create" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header pd-x-20">
                    <h6 class="modal-title">Add Project</h6>
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
                            <label>Project Name</label>
                            <input name="project_name"  type="text"  class="form-control" placeholder="Project name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Client Email</label>
                            <select name="client_email" class="form-control  select2-selection">
                                <option value="" selected disabled>Select Client Email</option>
                                @foreach ($clients as $row)
                                    <option value="{{$row->id}}" >{{$row->email}}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-row mt-2">
                            <div class="col">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input name="start_date" type="date" class="form-control" placeholder="Start date" autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Deadline</label>
                                    <input name="deadline" type="date" class="form-control" placeholder="Deadline" autocomplete="off">
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control select2-selection">
                                <option value="" selected disabled>Select Status</option>
                                <option value="Not Started">Not Started</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Finished">Finished</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                          </div>
                          <div class="form-row mt-2">
                            <div class="col">
                                <div class="form-group">
                                    <label>Total Price</label>
                                    <input name="total_price" type="number" class="form-control" placeholder="Total price" autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Currency</label>
                                    <select name="currency" class="form-control" >
                                        <option value="" selected disabled>Select Currency</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="GBP">GBP</option>
                                    </select>
                                </div>
                            </div>
                          </div>
                          <div class="form-group  mt-2" >
                            <label>Description</label>
                            <textarea name="description" class="form-control"  rows="4" placeholder="Write Description" autocomplete="off"></textarea>
                          </div>

                          <div class="modal-footer  mt-2">
                            <button type="submit" class="btn btn-primary">Create Project</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                    </form>
                </div><!-- modal-body -->
            </div>
        </div><!-- MODAL DIALOG -->
    </div>{{-- Create Project Modal --}}


    {{-- Edit Project Modal --}}
    <div id="edit" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header pd-x-20">
                    <h6 class="modal-title">Edit Project</h6>
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
                            <label>Project Name</label>
                            <input name="project_name"  type="text"  class="form-control" placeholder="Project name" autocomplete="off" id="project_name">
                        </div>
                        <div class="form-group">
                            <label>Client Email</label>
                            <select name="client_email" class="form-control  select2-selection" id="client_email">
                                <option value="" selected disabled>Select Client Email</option>
                                @foreach ($clients as $row)
                                    <option value="{{$row->id}}" >{{$row->email}}</option>
                                @endforeach
                            </select>
                          </div>


                        <div class="form-row mt-2">
                            <div class="col">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input name="start_date" type="date" class="form-control" placeholder="Start date" autocomplete="off" id="start_date">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Deadline</label>
                                    <input name="deadline" type="date" class="form-control" placeholder="Deadline" autocomplete="off" id="deadline">
                                </div>
                            </div>
                          </div>

                         
                          <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control select2-selection" id="status">
                                <option value="" selected disabled>Select Status</option>
                                <option value="Not Started">Not Started</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Finished">Finished</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                          </div>

                          <div class="form-row mt-2">
                            <div class="col">
                                <div class="form-group">
                                    <label>Total Price</label>
                                    <input name="total_price" type="number" class="form-control" placeholder="Total price" autocomplete="off" id="total_price">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Currency</label>
                                    <select name="currency" class="form-control" id="currency">
                                        <option value="" selected disabled>Select Currency</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="GBP">GBP</option>
                                    </select>
                                </div>
                            </div>
                          </div>

                        <div class="form-group  mt-2" >
                            <label>Description</label>
                            <textarea name="description" class="form-control"  rows="4" placeholder="Write Description" autocomplete="off" id="description"></textarea>
                        </div>


                        <div class="modal-footer  mt-2">
                            <input type="hidden" name="hidden_id" id="hidden_id">
                            <button type="submit" class="btn btn-primary">Update Project</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div><!-- modal-body -->

            </div>
        </div><!-- MODAL DIALOG -->
    </div> {{-- Edit Project Modal --}}






@endsection
@section('directory')
    <li class="breadcrumb-item active" aria-current="page">Projects</li>
@endsection
@section('jquery')
    <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/notify/js/jquery.growl.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    
    {{-- select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

    <script>
        $('#example').DataTable();
        $('.alert').hide();
        $('body').on('click', '#createNewProject', function() {
            $('#createform')[0].reset();
            $("#create .alert").css('display', 'none');
        });
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
                url: '{{ url("projects") }}',
                type: 'post',
                data: formData,
                success: function(data) {
                    $(".alert").css('display', 'none');
                    $('.project_table').load(document.URL + ' .project_table');
                    $('#create').modal('hide');
                    $('#createform')[0].reset();
                    $('.select2-selection').change();
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
            url = '{{ url("projects") }}' + '/' + id + '/' + "edit";
            $.get(url, function(data) {
                $('#project_name').val(data.project_name);
                $('#client_email').val(data.client_id).trigger('change'); 
                $('#start_date').val(data.start_date);
                $('#deadline').val(data.deadline);
                $('#status').val(data.status).trigger('change');  
                $('#total_price').val(data.total_price);
                $('#currency').val(data.currency);
                $('#description').val(data.description);
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
                url: '{{ url("project_update") }}',
                type: 'post',
                data: formData,
                success: function(data) {
                    $(".alert1").css('display', 'none');
                    $('.project_table').load(document.URL + ' .project_table');
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
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.value) {
                $.ajaxSetup({headers: {'X-CSRF-TOKEN':'@php echo csrf_token() @endphp '}});  
            $.ajax({
                    type:'DELETE',
                    url:'{{url("projects")}}/'+id,
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
                      'Partial Bill has related data first delete departments data',
                      'error'
                        )
                    }
                 });
                }
            })
              
        });
    </script>

    {{-- select2 --}}
    <script>
        $(document).ready(function() {
            $('.select2-selection').select2({
                "width":"100%",
                "padding":"10px",
            });
        });
    </script>



@endsection
