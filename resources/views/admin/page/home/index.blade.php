@extends('admin.layouts.base')
@section('title','Dashboard')

@section('toolbar')
@include('admin/components/toolbar',['title' => 'Welcome To Content Management'])
@endsection

@section('content')
<div class="card card-flush">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <h2>Halo, {{Auth::user()->name}} !</h2>
        </div>
       @if(Auth::user()->getRoleNames()->first()  != 'admin')
       <div class="card-toolbar">
           {{-- <a href="{{ route('dailytask.create') }}" id="btnAddDailyTask" class="btn btn-success">Add DailyTask</a> --}}
           <button id="btnAddDailyTask" class="btn btn-success">Add DailyTask</a>
       </div>
       @endif

    </div>
    <div class="card-body pt-0">
        <table class= "table align-middle table-row-dashed fs-6 gy-5 text-center" id="kt_daily_table">

        </table>
    </div>
</div>

<div id="modal-div"></div>
@endsection

@section('scripts')
<script>
    $('#btnAddDailyTask').on('click',function (e){
        $.ajax({
            url: "{{ route('dailytask.create') }}"
            , method: "GET"
            , success: function(response) {
                $('#modal-div').html("");
                if (response.status == 'success') {
                    $('#modal-div').html(response.msg);
                }
                else{
                    Swal.fire({
                        title: response.msg,
                        icon:'error'
                    })
                }
            }
            , error: function(xhr, status, error) {
                console.log(error);
            }
        });
    })
</script>
<script>
    function showModalUpdate(data){
        let url = "{{ route('dailytask.edit', ':id') }}".replace(':id', data)
        $.ajax({
            url: url,
            method: "GET",
            success: function(response) {
                $('#modal-div').html("");
                if (response.status == 'success') {
                    $('#modal-div').html(response.msg);
                } else {
                    Swal.fire({
                        title: response.msg,
                        icon: 'error',
                        confirmButtonText: "Oke"
                    })
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    title: 'Failed Show Form Update',
                    icon: 'error',
                    confirmButtonText: "Oke"
                })
            }
        });
    }
</script>
<script>
   

    $(document).ready(function() {
        var datatable = $('#kt_daily_table').DataTable({
            "initComplete": function() {
                $('#kt_daily_table thead th').addClass('bg-light-secondary fw-bold text-center justify-content-center align-content-center');
            },
            "columnDefs": [{
                "defaultContent": "-",
                "targets": "_all"
            }],
            processing: true,
            serverSide: true,
            ajax: "{{ route('dailytasks.table') }}",
            columns: [
                {
                    data: 'No',
                    name: 'No',
                    title: 'No',
                    className: 'text-nowrap'
                },
                @if ($user->getRoleNames()->first() == 'admin')   
                {
                    data: 'User',
                    name: 'User',
                    title: 'User',
                    className: 'text-nowrap'
                },
                @endif
                {
                    data: 'Report Date',
                    name: 'Report Date',
                    title: 'Report Date',
                    className: 'text-nowrap'
                },
                {
                    data: 'Morning Task',
                    name: 'Morning Task',
                    title: 'Morning Task',
                },
                {
                    data: 'Morning Task Datetime',
                    name: 'Morning Task Datetime',
                    title: 'Morning Task Datetime',
                },
                {
                    data: 'Afternoon Progress',
                    name: 'Afternoon Progress',
                    title: 'Afternoon Progress',
                },
                {
                    data: 'Afternoon Progress Datetime',
                    name: 'Afternoon Progress Datetime',
                    title: 'Afternoon Progress Datetime',
                },
                @if ($user->getRoleNames()->first() != 'admin')   
                {
                    data: 'Action',
                    name: 'Action',
                    title: 'Action',
                    className: 'text-nowrap'
                },
                @endif
              
            ]
        });
    
     
    });
    </script>
    
    <script>

      
         function showPreview(data){
            let url = "{{ route('dailytask.show', ':id') }}".replace(':id', data)
            $.ajax({
                url: url,
                method: "GET",
                success: function(response) {
                    $('#modal-div').html("");
                    if (response.status == 'success') {
                        $('#modal-div').html(response.msg);
                    } else {
                        Swal.fire({
                            title: response.msg,
                            icon: 'error',
                            confirmButtonText: "Oke"
                        })
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Failed, Error Server',
                        icon: 'error',
                        confirmButtonText: "Oke"
                    })
                }
            });
        }
    </script>
@endsection
