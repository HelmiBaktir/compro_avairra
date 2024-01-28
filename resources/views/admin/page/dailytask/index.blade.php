<!-- resources/views/admin/dailytask/create.blade.php -->
@extends('admin.layouts.base')
@section('title', 'Daily Task')
@section('content')
<div class="card card-flush">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <h2>Halo, {{Auth::user()->name}} !</h2>
        </div>
        <div class="card-toolbar">
            <a href="{{ route('dailytask.create') }}" id="btnAddDailyTask" class="btn btn-success">Add DailyTask</a>
        </div>

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
                {
                    data: 'Report Date',
                    name: 'Report Date',
                    title: 'Report Date',
                    className: 'text-nowrap'
                },
                {
                    data: 'Afternoon Progress',
                    name: 'Afternoon Progress',
                    title: 'Afternoon Progress',
                    className: 'text-nowrap'
                },
                {
                    data: 'Action',
                    name: 'Action',
                    title: 'Action',
                    className: 'text-nowrap'
                },
              
            ]
        });
    
        const filterSearch = document.querySelector('[data-kt-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    });
    </script>
    
    <script>
         function showModalDescProduct(data){
            let url = "{{ route('products.show', ':id') }}".replace(':id', data)
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
