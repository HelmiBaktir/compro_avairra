<!-- resources/views/admin/dailytask/create.blade.php -->
@extends('admin.layouts.base')
@section('title', 'Daily Task')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@section('content')
<div class="card card-flush">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <h2>Halo, {{Auth::user()->name}} !</h2>
        </div>
        <div class="card-toolbar">
            <button id="btnAddDailyTask" class="btn btn-success">Add DailyTask</button>
        </div>

    </div>
    <div class="card-body pt-0">
        <table id='dailytaskTable'>
            <thead>
                <th>No</th>
                <th>Date Input</th>
                <th>Morning Task</th>
                <th>Afternoon Progress</th>
                <th>Review</th>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp

                @foreach($dailyTasks as $dytask)
                    <tr>
                        <td>{{$counter++}}</td>
                        <td>{{$dytask->created_at}}</td>
                        <td>{{$dytask->morning_task}}</td>
                        <td>{{$dytask->afternoon_progress}}</td>
                        <!-- tombol review bisa melihatkan apa yang sudah diinputkan scr lengkap -->
                        <td>
                            <a class="btn btn-primary btn-sm">
                                <i class="fas fa-info-circle"></i> Review
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="modal-div"></div>
@endsection

@section('scripts')
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
                    let act = '{{ route("dailytask.create") }}';
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
                                    window.location.href = "{{ route('dailytask.index') }}"
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
        });
    </script>
	<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#dailytaskTable').DataTable();
        });
    </script>
@endsection
