@extends('admin.layouts.base')
@section('title','Category')

@section('toolbar')
@include('admin/components/toolbar',['title' => 'Product', 'subtitle' => 'Data'])
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
        <div class="card-toolbar">
            <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
        </div>

    </div>
    <div class="card-body pt-0">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_products_table">

        </table>
    </div>
</div>

<div id="modal-div"></div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var datatable = $('#kt_products_table').DataTable({
            "initComplete": function() {
                $('#kt_products_table thead').addClass('bg-light-secondary fw-bold');
            },
            "columnDefs": [{
                "defaultContent": "-",
                "targets": "_all"
            }],
            processing: true,
            serverSide: true,
            ajax: "{{ route('products.table.admin') }}",
            columns: [
                {
                    data: 'Image',
                    name: 'Image',
                    title: 'Image',
                    className: 'px-5 text-nowrap'
                },
                {
                    data: 'Nomor',
                    name: 'Nomor',
                    title: 'Nomor',
                    className: 'text-nowrap'
                },
                {
                    data: 'Name',
                    name: 'Name',
                    title: 'Name',
                    className: 'text-nowrap'
                },
                {
                    data: 'Series',
                    name: 'Series',
                    title: 'Series',
                    className: 'text-nowrap'
                },
                {
                    data: 'Category',
                    name: 'Category',
                    title: 'Category',
                    className: 'text-nowrap'
                },
                {
                    data: 'Action',
                    name: 'Action',
                    title: 'Action',
                    className: 'text-nowrap px-5'
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
    function deleteCategory(data){
        Swal.fire({
            title: 'Are you sure?',
            text: "Delete Product Data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                let url = "{{ route('products.destroy', ':id') }}".replace(':id', data)
                $.ajax({
                    url: url,
                    method: "DELETE",
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            Swal.fire({
                                title: response.msg,
                                icon: 'success',
                                confirmButtonText: "Oke"
                            }).then(function(result) {
                                $('#kt_products_table').DataTable().ajax.reload();
                            });

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
                            title: 'Failed, Server Error',
                            icon: 'error',
                            confirmButtonText: "Oke"
                        })
                    }
                });
            }
        })
    }
</script>
@endsection
