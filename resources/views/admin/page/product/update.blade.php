@extends('admin.layouts.base')
@section('title','Product')

@section('toolbar')
@include('admin/components/toolbar',['title' => 'Product', 'subtitle' => 'Update - Product'])
@endsection

@section('content')
<div class="card card-flush">
    <form id="updateProductForm" method="post">
        @method('put')
        <div class="card-body ">
            <div class="form-group">
                <label class="required form-label "><b>Series Product :</b></label>
                <input type="text" name="series" class="form-control mb-2" value="{{ $product->series }}" placeholder="Write a series product"/>
            </div>
            <div class="form-group">
                <label class="required form-label "><b>Product Name :</b></label>
                <input type="text" name="name" class="form-control mb-2"  value="{{ $product->name }}"  placeholder="Write a name product"/>
            </div>
            <div class="form-group">
                <label class="required form-label"><b>Category of Product</b></label>
                <select name="category" class="form-select mb-2" data-control="select2" data-placeholder="Select Category Product" >
                    <option></option>
                    @foreach($category as $key => $value)
                    <option value="{{ $value->id }}" {{$product->category_id == $value->id ? 'selected' : '' }}>{{ $value->name  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label class="required form-label"><b>Description</b></label>
                <textarea class="form-control" name="desc" id="tiny_desc">
                    {!! $product->desc  !!}
                </textarea>
            </div><br>
            <div class="form-group">
                <span class="required form-label"><b>Product Image</b></span>
                <input class="form-control mb-2" type="file" name="image" accept="image/*" onchange="loadFileLogo(event)">
            </div>
            <div class="form-group">
                <img id="preview-logo" src="{{ asset($product->image_path) }}" class="img-fluid h-50 w-50" alt="">
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end p-1">
                <button href="{{ route('products.index') }}" class="btn btn-light-success fw-bold me-5 w-150px">
                    Back
                </button>
                <button type="submit" id="kt_btn_update_product" class="btn btn-success fw-bold w-150px">
                    Update Product
                </button>
            </div>    
        </div>
    </form>
</div>


@endsection

@section('scripts')
<script>
    tinymce.init({ 
        selector: "#tiny_desc",
        toolbar: ["styleselect bold italic blockquote link bullist numlist",],
        plugins : "advlist autolink link image lists charmap print preview code table",
        statusbar: false,
        elementpath: false,
        height: 1000, 
     
    });
</script>

<script>
    var loadFileLogo = function(event) {
        var output = document.getElementById('preview-logo');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };

    var loadFileImage = function(event) {
        var output = document.getElementById('preview-image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };

</script>


<script>
    $('#kt_btn_update_product').click(function(e) {
        e.preventDefault();
        Swal.fire({
            icon:'warning',
            title: "Are you sure update product?",
            showCancelButton: true,
            confirmButtonText: "Save",
        }).then((result) => {
            if (result.isConfirmed) {
                tinyMCE.triggerSave();
                let act = "{{ route('products.update',':id') }}".replace(':id','{{ encrypt($product->id) }}')
                let form_data = new FormData(document.querySelector("#updateProductForm"));
                form_data.append('_token', '{{ csrf_token() }}')
                $.ajax({
                    url: act
                    , type: "POST"
                    , data: form_data
                    , dataType: "json"
                    , contentType: false
                    , processData: false
                    , success: function(data) {
                        if (data.status == "success") {
                            Swal.fire({
                                title: data.msg
                                , icon:'success'
                                , buttonsStyling: true
                                , showConfirmButton: true
                            }).then(function(result) {
                                window.location.href = "{{ route('products.index') }}"
                            });

                        } else {
                            Swal.fire({
                                title:  data.msg,
                                icon:'error'
                                , buttonsStyling: false
                                , showConfirmButton: false
                            })
                        }
                    }
                })
            }
        });
    })
</script>
@endsection
