@extends('admin.layouts.base')
@section('title','Category')

@section('toolbar')
@include('admin/components/toolbar',['title' => 'Product', 'subtitle' => 'Create - Product'])
@endsection

@section('content')
<div class="card card-flush">
    <div class="card-body ">
        <form id="addProductForm" method="post">
            <div class="form-group">
                <label class="required form-label ">Series</label>
                <input type="text" name="series" class="form-control mb-2" placeholder="Write a series product"/>
            </div>
            <div class="form-group">
                <label class="required form-label ">Name</label>
                <input type="text" name="name" class="form-control mb-2" placeholder="Write a name product"/>
            </div>
            <div class="form-group">
                <label class="required form-label">Category</label>
                <select name="category" class="form-select mb-2" data-control="select2" data-placeholder="Select Category Product" >
                    <option></option>
                    @foreach($category as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label class="required form-label">Desc</label>
                <textarea class="form-control" name="desc" id="tiny_desc">
       
                </textarea>
            </div>



        </form>
    </div>
</div>

<div id="modal-div"></div>

@endsection

@section('scripts')
<script>
    tinymce.init({ 
        selector: "#tiny_desc",
        menubar: false,
        toolbar: ["styleselect bold italic blockquote link bullist numlist",],
        plugins : "advlist autolink link image lists charmap print preview code table",
        statusbar: false,
        elementpath: false,
     
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
