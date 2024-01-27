<form id="add_category_form">
    <div class="modal fade" id="kt_modal_add_category" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content rounded">
                <div class="modal-body scroll-y ">
                    <div class="fv-row">
                        <div class="d-flex align-content-between flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <div class="text-start d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3 py-lg-0">
                                <h3 class="modal-title pt-2">Add Category</h3>
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
                        <label for="required" class="required fs-6 fw-semibold mb-2"><b>Name of Category</b></label>
                        <input type="text" class="form-control" name="name" placeholder="Write the category name">
                    </div>
                    <div class="fv-row mt-3">
                        <label for="required" class="required fs-6 fw-semibold mb-2"><b>Description</b></label>
                        <textarea name="desc" class="form-control" cols="30" rows="10" placeholder="Write the category desc"></textarea>
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
        $('#kt_modal_add_category').modal('show');
    });

    $('#btn-simpan').click(function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Add Category"
            , text: "Are you sure you want to add Category?"
            , icon: 'warning'
            , target: document.getElementById('content')
            , reverseButtons: true
            , confirmButtonText: "Yes"
            , showCancelButton: true
            , cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                let act = '{{ route("categories.store") }}'
                let form_data = new FormData(document.querySelector("#add_category_form"));
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
                                $('#kt_modal_add_category').modal('hide');
                                $('#kt_category_table').DataTable().ajax.reload();
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

