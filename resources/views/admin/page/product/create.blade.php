@extends('admin.layouts.base')
@section('title','Product')

@section('toolbar')
@include('admin/components/toolbar',['title' => ' Add Product', 'subtitle' => 'Product Data - Create Product'])
@endsection

@section('content')
<div class="card card-flush">
    <form id="addProductForm" method="post">
        <div class="card-body ">
            <div class="form-group">
                <label class="required form-label"><b>Series Product :</b></label>
                <input type="text" name="series" class="form-control mb-2" placeholder="Write a series product"/>
            </div>
            <div class="form-group">
                <label class="required form-label "><b>Product Name :</b></label>
                <input type="text" name="name" class="form-control mb-2" placeholder="Write a name product"/>
            </div>
            <div class="form-group">
                <label class="required form-label"><b>Category of Product</b></label>
                <select name="category" class="form-select mb-2" data-control="select2" data-placeholder="Select Category Product" >
                    <option></option>
                    @foreach($category as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label class="required form-label"><b>Description</b></label>
                <textarea class="form-control" name="desc" id="tiny_desc">
       
                </textarea>
            </div><br>
            <div class="form-group">
                <span class="required form-label"><b>Product Image</b></span>
                <input class="form-control mb-2" type="file" name="image" accept="image/*" onchange="loadFileLogo(event)">
            </div>
            <div class="form-group">
                <img id="preview-logo" src="#" class="img-fluid h-50 w-50" alt="" style="display: none;">
                <span id="image-status"><b>!! Product photos have not been uploaded !! </b></span>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end p-1">
                <button href="{{ route('products.index') }}" class="btn btn-light-success fw-bold me-5 w-150px">
                    Back
                </button>
                <button type="submit" id="kt_btn_create_product" class="btn btn-success fw-bold w-150px">
                    Create Product
                </button>
            </div>    
        </div>
    </form>
</div>

<div id="modal-div"></div>

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
    function loadFileLogo(event) {
        var image = document.getElementById('preview-logo');
        var status = document.getElementById('image-status');
        image.src = URL.createObjectURL(event.target.files[0]);

        // Cek apakah gambar telah diupload
        if (event.target.files.length > 0) {
            status.textContent = ''; // Gambar sudah diupload, kosongkan teks status
            image.style.display = 'block'; // Tampilkan gambar
        } else {
            status.textContent = '!! Product photos have not been uploaded !!';
            image.style.display = 'none'; // Sembunyikan gambar
        }
    }
</script>

<script>
    $('#kt_btn_create_product').click(function(e) {
        e.preventDefault();
        Swal.fire({
            icon:'warning',
            title: "Are you sure insert product?",
            showCancelButton: true,
            confirmButtonText: "Save",
        }).then((result) => {
            if (result.isConfirmed) {
                tinyMCE.triggerSave();
                let act = '{{ route("products.store") }}'
                let form_data = new FormData(document.querySelector("#addProductForm"));
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
                                , buttonsStyling: false
                                , showConfirmButton: false
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
