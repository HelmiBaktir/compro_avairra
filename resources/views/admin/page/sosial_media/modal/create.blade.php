<form id="add_sosial_media_form">
    <div class="modal fade" id="kt_modal_add_sosial_media" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content rounded">
                <div class="modal-body scroll-y ">
                    <div class="fv-row">
                        <div class="d-flex align-content-between flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <div class="text-start d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3 py-lg-0">
                                <h3 class="modal-title pt-2">Add Sosial Media</h3>
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
                        <label for="required" class="required fs-6 fw-semibold mb-2">Company</label>
                        <select name="company" class="form-select mb-2 select-select2" data-control="select2" data-placeholder="Select Company Name" >
                            <option></option>
                            @foreach($company as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="fv-row mt-3">
                        <label for="required" class="required fs-6 fw-semibold mb-2">Platform</label>
                        <input type="text" class="form-control" name="platform" placeholder="Write the platform sosial media">
                    </div>
                    <div class="fv-row mt-3">
                        <label for="required" class="required fs-6 fw-semibold mb-2">Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Write the platform sosial media link">
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
        $('#kt_modal_add_sosial_media').modal('show');
        
    });
    $('.select-select2').select2({
    });

    $('#btn-simpan').click(function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Add Sosial Media"
            , text: "Are you sure you want to add Sosial Media?"
            , icon: 'warning'
            , target: document.getElementById('content')
            , reverseButtons: true
            , confirmButtonText: "Yes"
            , showCancelButton: true
            , cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                let act = '{{ route("sosial-media.store") }}'
                let form_data = new FormData(document.querySelector("#add_sosial_media_form"));
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
                                $('#kt_modal_add_sosial_media').modal('hide');
                                $('#kt_sosial_media_table').DataTable().ajax.reload();
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

