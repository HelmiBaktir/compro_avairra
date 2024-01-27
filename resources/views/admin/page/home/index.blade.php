@extends('admin.layouts.base')
@section('title','Dashboard')

@section('toolbar')
@include('admin/components/toolbar',['title' => 'Welcome To Content Management'])
@endsection

@section('content')
<div class="card card-flush">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" data-kt-filter="search" class="form-control form-control-solid w-400px ps-12" placeholder="Search" />
            </div>
        </div>
    </div>
    <div class="card-body pt-0">
        <table class= "table align-middle table-row-dashed fs-6 gy-5 text-center" id="kt_dailytasks_table">

        </table>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('jeremia-assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>

<script>
$(document).ready(function() {
    var datatable = $('#kt_dailytasks_table').DataTable({
        "initComplete": function() {
            $('#kt_dailytasks_table thead th').addClass('bg-light-secondary fw-bold text-center justify-content-center align-content-center');
        },
        "columnDefs": [{
            "defaultContent": "-",
            "targets": "_all"
        }],
        processing: true,
        serverSide: true,
        ajax: "{{ route('dailytasks.table.admin') }}",
        columns: [
            {
                data: 'No',
                name: 'No',
                title: 'No',
                className: 'px-5 text-nowrap'
            },
            {
                data: 'User',
                name: 'User',
                title: 'User',
                className: 'text-nowrap'
            },
            {
                data: 'Report_Date',
                name: 'Report_Date',
                title: 'Report Date',
                className: 'text-nowrap'
            },
            {
                data: 'Morning_Task',
                name: 'Morning_Task',
                title: 'Morning Task',
                className: 'text-nowrap'
            },
            {
                data: 'Afternoon_Progress',
                name: 'Afternoon_Progress',
                title: 'Afternoon Progress',
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
@endsection
