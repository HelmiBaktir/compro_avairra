<!-- resources/views/admin/dailytask/create.blade.php -->
@extends('admin.layouts.base')
@section('title', 'Daily Task')

@section('toolbar')
    @include('admin/components/toolbar', ['title' => ' Add Daily Task', 'subtitle' => 'Daily Task Data - Create Daily Task'])
@endsection

@section('content')
    <div class="card card-flush">
        <form id="addDailyTaskForm" method="post" action="{{ route('dailytask.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label class="required form-label"><b>Tanggal Laporan :</b></label>
                    <input type="date" name="report_date" class="form-control mb-2" required>
                </div>
                
                <div class="form-group mb-2">
                    <label class="required form-label"><b>Morning Task</b></label>
                    <textarea class="form-control" name="morning_task" id="tiny_desc">
        
                    </textarea>
                </div>

                <div class="form-group mb-2">
                    <label class="required form-label"><b>Afternoon Progress</b></label>
                    <textarea class="form-control" name="afternoon_progress" id="tiny_desc_aff">
        
                    </textarea>
                </div>
                
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end p-1">
                    <button href="{{ route('dailytask.store') }}" class="btn btn-light-success fw-bold me-5 w-150px">
                        Back
                    </button>
                    <button type="submit" id="kt_btn_create_dailytask" class="btn btn-success fw-bold w-150px">
                        Simpan Daily Task
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
<script>
        tinymce.init({ 
            selector: "#tiny_desc,#tiny_desc_aff",
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
                                    window.location.href = "{{ route('home') }}"
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
   
@endsection
