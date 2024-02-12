<div class="modal fade" id="kt_modal_create_product" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-body scroll-y ">
                <div class="fv-row">
                    <div class="d-flex align-content-between flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                        <div class="text-start d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3 py-lg-0">
                            <h3 class="modal-title pt-2">Tambah Daily Task</h3>
                        </div>
                        <div>
                            <button type="button" class="btn btn-sm btn-icon btn-active-color-primary"
                                data-kt-modal-action-type="close" data-bs-dismiss="modal">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                        </div>
                    </div>
                </div>
                <hr>
                <form action="" id="addDailyTaskForm">
                    <div class="fv-row mt-3">
                        <div class="form-group">
                            <label class="required form-label"><b>Tanggal Laporan :</b></label>
                            <input type="date" name="report_date" class="form-control mb-2" required>
                        </div>
                        
                        <div class="form-group mb-2">
                            <label class="required form-label"><b>Morning Task</b></label>
                            <textarea class="form-control" name="morning_task" id="tiny_desc">
                
                            </textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="kt_btn_create_dailytask"
                    class="btn btn-success fw-bold me-5 w-150px">
                    Save
                </button>
                <button type="button" data-kt-modal-action-type="close" data-bs-dismiss="modal"
                    class="btn btn-light-success fw-bold me-5 w-150px">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#kt_modal_create_product').modal('show');

    });
</script>
<script src="{{ asset('jeremia-assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<script>
    tinymce.init({ 
        selector: "#tiny_desc",
        toolbar: ["styleselect bold italic blockquote link bullist numlist",],
        plugins : "advlist autolink link image lists charmap print preview code table",
        statusbar: false,
        elementpath: false,
    
    });
</script>

<script>
    $('#kt_btn_create_dailytask').click(function (e) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: "Apakah Anda yakin ingin menyimpan Daily Task?",
            showCancelButton: true,
            confirmButtonText: "Simpan",
        }).then((result) => {
            if (result.isConfirmed) {
                tinyMCE.triggerSave();
                let act = '{{ route("dailytask.store") }}';
                let form_data = new FormData(document.querySelector("#addDailyTaskForm"));
                form_data.append('_token', '{{ csrf_token() }}');
                $.ajax({
                    url: act,
                    type: "POST",
                    data: form_data,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.status == "success") {
                            Swal.fire({
                                title: data.msg,
                                icon: 'success',
                                buttonsStyling: false,
                                showConfirmButton: false
                            }).then(function (result) {
                                $('#kt_modal_create_product').modal('hide');
                                $('#kt_daily_table').DataTable().ajax.reload();
                            });

                        } else {
                            Swal.fire({
                                title: data.msg,
                                icon: 'error',
                                buttonsStyling: false,
                                showConfirmButton: false
                            })
                        }
                    }
                })
            }
        });
    })
</script>