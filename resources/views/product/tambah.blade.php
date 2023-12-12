@extends('layout.adminlte')
<!-- plugin css -->
@section('plugin_css')
<link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.min.css')}}">
@endsection
<!-- css -->
@section('add_css')
.buttonChecked:hover {transform: translateY(3px); cursor: pointer;}

.buttonChecked:active {
transform: translateY(5px);
}

.buttonPlus:hover {transform: translateY(3px); cursor: pointer;}

.buttonPlus:active {
transform: translateY(5px);

}
@endsection
<!-- content -->
@section('content')

<!-- modal simpan -->
<div class="modal fade" id="modalSimpan" role="dialog" aria-labelledby="favoritesModalLabel"> 
  <div class="modal-dialog" role="document"> 
    <div class="modal-content" style="border-radius: 17px;"> 
      <div class="modal-header" style="background-color: #e61919; border-radius:17px 17px 0px 0px;"> 
        <h4 style="color:white;">Simpan Data History</h4> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button> 
      </div> 
      <div class="modal-body"> 
        <div class="form-group"> 
          <span id="pesan_error" style="display: none;"></span>
          <span id="pesan_konfirmasi" style="display: none;">Apakah anda yakin ingin menyimpan data history ?</span>
        </div> 
        <div class="form-group"> 
          <button class="btn btn-default" data-dismiss="modal" aria-label="Close">Tutup</button> 
          <button class="btn btn-primary" style="display: none;" id="btn_simpan_history" onclick="submitForm()">Simpan</button> 
        </div>
      </div> 
    </div> 
  </div> 
</div>
<!-- tutup modal simpan -->

<br>
<div class="container-fluid">
  <!-- NOTIFIKASI -->
    <div id="notif">
      @if (session()->has('message'))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fa fa-close"></i> Alert!</h5>
          {{ session('message') }}
        </div>
      @endif      
    </div>
  <!-- END NOTIFIKASI -->

  <div class="row mb-2">
    <div class="col-sm-6">
      <h3>Tambah Product</h3>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Product</a></li>
        <li class="breadcrumb-item active">Tambah Product</li>
      </ol>
    </div>
  </div>

  <FORM method="POST" action="{{ route('product.store') }}" >
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">

              <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row"> 
                        <label class="control-label col-sm-3" for="nama">Nomor Product</label> 
                        <label class="control-label col-lg-8">
                          <input type="text" class="form-control" id="txtNoProduct" name="txtNoProduct" required readonly value="<?php echo $noProduct; ?>">
                        </label>
                      </div>                      
                    </div>
                  </div>
              </div>

              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6"> 
                      <div class="form-group row"> 
                        <label class="control-label col-sm-3">Series Product</label> 
                        <label class="control-label col-lg-8">
                          <input type="text" class="form-control" id="txtSeriesProduct" name="txtSeriesProduct" placeholder="Series Product" required>
                        </label>
                      </div>
                      <div class="form-group row"> 
                        <label class="control-label col-sm-3">Name Product</label> 
                        <label class="control-label col-lg-8">
                          <input type="text" class="form-control" id="txtNameProduct" name="txtNameProduct" placeholder="Producr Name" required>
                        </label>
                      </div>
                      <div class="form-group row"> 
                        <label class="control-label col-sm-3">Description</label> 
                        <label class="control-label col-lg-8">
                          <input type="text" class="form-control" id="txtDesc" name="txtDesc" placeholder="Description Ibu" required>
                        </label>
                      </div> 
                      <div class="form-group row"> 
                        <label class="control-label col-sm-3">Kategori Product</label> 
                        <label class="control-label col-lg-8">
                            <select class="form-control select2" id="txtCategory" name="txtCategory" >
                                <option selected disabled value="">Kategori...</option>
                                @foreach($category as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </label>
                      </div>                    
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-10">
                <div class="form-group">
                    <p>PRODUCT PICTURE</p>
                    <!-- <img id="imgIc" style="width:100%; height:100%;" src=""> -->
                    <div id="dpIC">
                        <input type="file" id="input-file-now" name="lampiran[]" multiple class="dropify" data-show-remove="true" data-height="500" data-allowed-file-extensions="jpg jpeg png"/>
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary"><i class="fa fa-pa nav-icon"></i> Simpan</button>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </FORM>
</div>
@endsection
<!-- plugin js -->
@section('plugin_js')

@endsection

<!-- add js -->
@section('add_js')
<script src="{{asset('dropify/dist/js/dropify.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fr').dropify({
      messages: {
        default: 'Glissez-déposez un fichier ici ou cliquez',
        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
        remove:  'Supprimer',
        error:   'Désolé, le fichier trop volumineux'
      }
    });

    // Used events
    var drEvent = $('#input-file-events').dropify();

    drEvent.on('dropify.beforeClear', function(event, element){
      return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element){
      alert('File deleted');
    });

    drEvent.on('dropify.errors', function(event, element){
      console.log('Has Errors');
    });

    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e){
      e.preventDefault();
      if (drDestroy.isDropified()) {
        drDestroy.destroy();
      } else {
        drDestroy.init();
      }
    })
  });
</script>

<script>
  function submitForm(){
    document.getElementById("form_submit").submit();
    window.loading_screen = window.pleaseWait({
        logo: '{{ asset("logo-sima-small.png") }}',
        backgroundColor: 'white',
        loadingHtml: '<div class="spinner"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div></div'
      });
  }
</script>
@endsection