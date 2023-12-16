<form id="update_banner_form">
    @method('put')
    <div class="modal fade" id="kt_modal_update_banner" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content rounded">
                <div class="modal-body scroll-y ">
                    <div class="fv-row">
                        <div class="d-flex align-content-between flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <div class="text-start d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3 py-lg-0">
                                <h3 class="modal-title pt-2">Update Banner</h3>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="fv-row mt-3">
                        <label for="required" class="required fs-6 fw-semibold mb-2">Posision</label>
                        <input type="text" class="form-control" name="posision" value="{{ $banner->posision }}" placeholder="Write the banner posision" readonly>
                    </div>
                    <div class="fv-row mt-3">
                        <label for="required" class="required fs-6 fw-semibold mb-2">Image</label>
                        <input class="form-control mb-2" type="file" name="image" accept="image/*" onchange="loadFileLogo(event)">
                    </div> 
                    <div class="fv-row mt-3">
                        <img id="preview-logo" src="{{ asset($banner->image_path) }}" class="img-fluid h-50 w-50" alt="">
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" data-kt-modal-action-type="close" data-bs-dismiss="modal" class="btn btn-light-success fw-bold me-5 w-150px">
                        Cancel
                    </button>
                    <button type="submit" id="btn-simpan" class="btn btn-success fw-bold w-150px">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    $(document).ready(function() {
        $('#kt_modal_update_banner').modal('show');
    });

    $('#btn-simpan').click(function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Update banner"
            , text: "Are you sure you want to Update Banner?"
            , icon: 'warning'
            , target: document.getElementById('content')
            , reverseButtons: true
            , confirmButtonText: "Yes"
            , showCancelButton: true
            , cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                let act = "{{ route('banner-slider.update',':id') }}".replace(':id','{{ encrypt($banner->id) }}')
                let form_data = new FormData(document.querySelector("#update_banner_form"));
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
                                $('#kt_modal_update_banner').modal('hide');
                                $('#kt_banner_table').DataTable().ajax.reload();
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
        })
    })


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
