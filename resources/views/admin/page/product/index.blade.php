@extends('admin.layouts.base')
@section('title','Product')

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
        <table class="table align-middle table-row-dashed fs-6 gy-5 text-center" id="kt_products_table">

        </table>
    </div>
</div>

<div id="modal-div"></div>

@endsection

@section('scripts')
<script src="{{ asset('jeremia-assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>

<script>
    $(document).ready(function() {
        var datatable = $('#kt_products_table').DataTable({
            "initComplete": function() {
                $('#kt_products_table thead th').addClass('bg-light-secondary fw-bold text-center justify-content-center align-content-center');
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
                    data: 'No',
                    name: 'No',
                    title: 'No',
                    className: 'px-5 text-nowrap'
                },
                {
                    data: 'Image',
                    name: 'Image',
                    title: 'Image',
                    className: 'text-nowrap'
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

<script>
    function deleteProduct(data){
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
