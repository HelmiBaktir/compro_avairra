@extends('layout.adminlte')
<!-- plugin css -->
@section('plugin_css')
<link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.min.css')}}">
@endsection
<!-- css -->
@section('add_css')
/* Mark input boxes that gets an error on validation: */
input.invalid {
background-color: #ffdddd;
}
@endsection
<!-- content -->
@section('content')
<!-- modal Add -->
<div class="modal fade" id="modalAdd" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 17px;">
            <div class="modal-header" style="background-color: #e61919; border-radius:17px 17px 0px 0px;">
                <h4 style="color:white;">Tambah Data Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="regForm" action="{{ route('category.store') }}" aria-label="{{ __('Register') }}">
                    <!-- @csrf -->
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">{{ __('NAME') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="desc" class="col-md-4 col-form-label">{{ __('Desc') }}</label>

                        <div class="col-md-6">
                            <input id="desc" type="text" class="form-control" name="desc"  required autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                            <button type="submit" class="btn btn-primary"> Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- tutup modal Add-->

<!-- modal Edit -->
<div class="modal fade" id="modalEdit" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 17px;">
            <div class="modal-header" style="background-color: #e61919; border-radius:17px 17px 0px 0px;">
                <h4 style="color:white;">Edit Data Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <FORM method="post" id="editForm">
                  @method('put')
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Nama Kategori:</label>
                        <input type="text" class="form-control col-md-6" id="txtNamaKategoriEdit" name="txtNamaKategoriEdit" placeholder="Nama Kategori" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Deskripsi Kategori:</label>
                        <input type="text" class="form-control col-md-6" id="txtDescKategoriEdit" name="txtDescKategoriEdit" placeholder="Nama Karyawan" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                        <input type="hidden" name="txtID" id="txtID">
                        <button class="btn btn-danger">Simpan</button>
                    </div>
                </FORM>
            </div>
        </div>
    </div>
</div>
<!-- tutup modal Edit -->

<!-- modal Delete -->
<div class="modal fade" id="modalHapus" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 17px;">
            <div class="modal-header" style="background-color: #e61919; border-radius:17px 17px 0px 0px;">
                <h4 style="color:white;">Hapus Data Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <FORM method="post" id='FormDeleteSingle'>
                    @method('delete')

                    <div class="form-group">
                        Apakah anda yakin ingin menghapus data kategori <b><span id="nametext"></span></b> ?
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                        <input type="hidden" name="txtIDDelete" id="txtIDDelete">
                        <input type="hidden" name="jenis_delete" value="single">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Tutup</button>
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </FORM>
            </div>
        </div>
    </div>
</div>
<!-- tutup modal Delete -->

<!-- modal Delete All-->
<div class="modal fade" id="modalHapusSemua" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 17px;">
            <div class="modal-header" style="background-color: #e61919; border-radius:17px 17px 0px 0px;">
                <h4 style="color:white;">Hapus Data Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <FORM method="post" id='FormDeleteAll'>
                    @method('delete')
                    <div class="form-group">
                        <span id="textdel"></span>
                    </div>
                    <div class="form-group" id="field_input">
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                        <input type="hidden" name="jenis_delete" value="all">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Tutup</button>
                        <button class="btn btn-danger" id="btnConfirmHapus">Hapus</button>
                    </div>
                </FORM>
            </div>
        </div>
    </div>
</div>
<!-- tutup modal Delete All-->

<br>
<div class="container-fluid">

    <!-- NOTIFIKASI -->
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fa fa-check"></i> Alert!</h5>
        {{ session('message') }}
    </div>
    @endif

    @if (session()->has('danger_message'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fa fa-close"></i> Alert!</h5>
        {{ session('danger_message') }}
    </div>
    @endif
    <!-- END NOTIFIKASI -->

    <div class="row mb-2">
        <div class="col-sm-6">
            <h3>Master Kategori</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Master Kategori</li>
            </ol>
        </div>
    </div>

    <?php if(true){ ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-1 col-4" title="Tambah">
                            <button type="button" class="btn btn-block btn-primary btn-sm" id="btnAdd" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus-circle nav-icon"></i> Tambah</button>
                        </div>
                        <div class="col-lg-1 col-4" title="Hapus">
                            <button type="button" class="btn btn-block btn-danger btn-sm" data-toggle="modal" data-target="#modalHapusSemua" onclick="opendeleteallmodal();"><i class="fa fa-times-circle nav-icon"></i> Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>  
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <?php if(true){ ?>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="text-align: center;">
                                                #
                                            </th>
                                            <?php } ?>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="text-align: center;">
                                                No
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 20%; text-align: center;">
                                                Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 30%; text-align: center;">
                                                Desc
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 25%; text-align: center;">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $key => $value)
                                        <tr>
                                            <!-- {{-- Auth::user()->username == "super_admin" --}} -->
                                            <?php if(true){ ?>
                                            <td>
                                                <label>
                                                    <input type="checkbox" class="flat-red" id="checkbox<?php echo $key ?>" name="chkDel[]" value="<?php echo $value['id']; ?>">
                                                </label>
                                            </td>
                                            <?php } ?>
                                            <td style="text-align: center;">{{($key+1)}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->desc}}</td>
                                            <td>
                                                <div class="form-group">
                                                    <div>
                                                        <!-- {{-- Auth::user()->username == "super_admin" --}} -->
                                                        <?php if(true){ ?>
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalEdit" title="Edit" id="<?php echo 'edit'.$key; ?>" onclick="openeditmodal({{ $value->id }});"><i class="fa fa-edit"></i></button>
                                                        <button class="btn btn-danger" data-toggle="modal" data-target="#modalHapus" title="Hapus" onclick="opendeletemodal(<?php echo "'".$value["id"]."'" ?>,<?php echo "'".$value->name."'" ?>)"><i class="fa fa-times"></i></button>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- plugin js -->
@section('plugin_js')

@endsection

<!-- add js -->
@section('add_js')
<script>
    $(document).ready(function() {
        $('div.alert').delay(3000).slideUp(300);
    });

    // FOR FORM EDIT
    $(document).on('submit', '#editForm', function(event) {
        document.getElementById("editForm").submit();    
    });

    function openeditmodal(id) {
      let action = "{{ route('category.update', ':id') }}".replace(':id', id)
      $('#editForm').attr('action', action);
        var url = "{{ route('category.edit', ':id') }}".replace(':id', id);
        $.ajax({
            type: "GET"
            , url: url
            , data: {
                category_id: id
            }
            , success: function(data) {
                var resp = $.parseJSON(data);
                document.getElementById('txtNamaKategoriEdit').value = resp.name;
                document.getElementById('txtDescKategoriEdit').value = resp.desc;
                document.getElementById('txtID').value = id;
            }
        });
    }
    //============== END FORM EDIT

    // FOR DELETE DATA
    // FOR DELETE CHECKED
    $('input').on('ifChecked', function(event) {
        // CREATE HIDDEN ELEMENT FOR SAVE ID'S CHOOSE
        var input = document.createElement("input");
        input.setAttribute('type', 'hidden');
        input.setAttribute('id', 'del' + $(this).val());
        input.setAttribute('name', 'txtDeleteAll[]');
        input.setAttribute('value', $(this).val());

        var parent = document.getElementById("field_input");
        parent.appendChild(input);
    });

    $('input').on('ifUnchecked', function(event) {
        var parent = document.getElementById("field_input");
        var element = document.getElementById('del' + $(this).val());
        parent.removeChild(element);
    });

    //FOR OPEN DELETE MODAL (SINGLE DELETE)
    function opendeletemodal(id, nama) {
      let action = "{{ route('category.destroy', ':id') }}".replace(':id', id)
      $('#FormDeleteSingle').attr('action', action);
        document.getElementById('nametext').innerHTML = nama;
        document.getElementById('txtIDDelete').value = id;
    }

    //FOR OPEN DELETE MODAL (ALL DELETE)
    function opendeleteallmodal() {
      let action = "{{ route('category.destroy', ':id') }}".replace(':id', 1)
      $('#FormDeleteAll').attr('action', action);
        $ischecked = false;
        for (var i = 0; i < document.getElementsByName('chkDel[]').length; i++) {
            if (document.getElementById('checkbox' + i).checked) {
                $ischecked = true;
            }
        }

        if ($ischecked) {
            document.getElementById("textdel").innerHTML = "Apakah anda yakin ingin menghapus data kategori yang telah dipilih?";
            document.getElementById("btnConfirmHapus").style.visibility = "visible";
        } else {
            document.getElementById("textdel").innerHTML = "Tidak ada data kategori yang dipilih";
            document.getElementById("btnConfirmHapus").style.visibility = "hidden";
        }
    }
    //============== END DELETE DATA

    var btnAdd = document.getElementById('btnAdd');
    btnAdd.onclick = function() {
        modalAdd.style.display = "block";
    }
</script>


<script src="{{asset('dropify/dist/js/dropify.min.js')}}"></script>

<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez'
                , replace: 'Glissez-déposez un fichier ou cliquez pour remplacer'
                , remove: 'Supprimer'
                , error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });

</script>
@endsection