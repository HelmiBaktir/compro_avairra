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
      <h3>Profile Company</h3>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Company Profile</a></li>
      </ol>
    </div>
  </div>

  <form action="{{ route('profilecompany.store') }}" method="post">
    @csrf
    @foreach ($companies as $companyData)
        <input type="hidden" name="company_ids[]" value="{{ $companyData['company']->id }}">    
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3" for="nama">Company Name</label>
                                        <label class="control-label col-lg-8">
                                            <input type="text" class="form-control" id="txtCompanyName"
                                                name="txtCompanyName" required value="{{ $companyData['company']->name }}">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label col-sm-3">Email </label>
                                        <label class="control-label col-lg-8">
                                            <input type="text" class="form-control" id="txtEmail" name="txtEmail"
                                                placeholder="Email" required
                                                value="{{ $companyData['company']->email }}">
                                        </label>
                                    </div>

                                    <div id="phoneNumbersContainer">
                                        @foreach ($companyData['phoneNumbers'] as $index => $phoneNumber)
                                            <div class="form-group row" id="phoneNumberRow{{ $index }}">
                                                <label class="control-label col-sm-3">Phone Number {{ $index + 1 }}</label>
                                                <label class="control-label col-lg-7">
                                                    <input type="text" class="form-control" id="txtPhoneNumber{{ $index }}" name="txtPhoneNumber{{ $index }}"
                                                        placeholder="Phone Number {{ $index + 1 }}" required value="{{ $phoneNumber }}">
                                                </label>
                                                <div class="col-lg-1">
                                                    <button type="button" class="btn btn-danger" onclick="removePhoneNumber({{ $index }})">Remove</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div id="addressesContainer">
                                        @foreach ($companyData['addresses'] as $index => $address)
                                            <div class="form-group row" id="addressRow{{ $index }}">
                                                <label class="control-label col-sm-3">Address {{ $index + 1 }}</label>
                                                <label class="control-label col-lg-7">
                                                    <input type="text" class="form-control" id="txtAddress{{ $index }}" name="txtAddress{{ $index }}"
                                                        placeholder="Address {{ $index + 1 }}" required value="{{ $address }}">
                                                </label>
                                                <div class="col-lg-1">
                                                    <button type="button" class="btn btn-danger" onclick="removeAddress({{ $index }})">Remove</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-10">
                <div class="form-group">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-pa nav-icon"></i> Simpan</button>
                        <button type="button" id="addPhoneNumber" class="btn btn-primary">Add Phone Number</button>
                        <button type="button" id="addAddress" class="btn btn-primary">Add Address</button>
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

<script>
    var phoneNumbersContainer = document.getElementById('phoneNumbersContainer');
    var addPhoneNumberButton = document.getElementById('addPhoneNumber');
    var lastPhoneNumberIndex = {{ count($companyData['phoneNumbers']) > 0 ? count($companyData['phoneNumbers']) - 1 : 0 }}; // Inisialisasi indeks dengan nomor telepon terakhir

    addPhoneNumberButton.addEventListener('click', function () {
        var newPhoneNumberIndex = ++lastPhoneNumberIndex;
        
        var newPhoneNumberInput = document.createElement('div');
        newPhoneNumberInput.innerHTML = `
            <div class="form-group row" id="phoneNumberRow${newPhoneNumberIndex}">
                <label class="control-label col-sm-3">Phone Number ${newPhoneNumberIndex + 1}</label>
                <label class="control-label col-lg-7">
                    <input type="text" class="form-control" id="txtPhoneNumber${newPhoneNumberIndex}" name="txtPhoneNumber${newPhoneNumberIndex}"
                        placeholder="Phone Number ${newPhoneNumberIndex + 1}" required>
                </label>
                <div class="col-lg-1">
                    <button type="button" class="btn btn-danger" onclick="removePhoneNumber(${newPhoneNumberIndex})">Remove</button>
                </div>
            </div>
        `;

        phoneNumbersContainer.appendChild(newPhoneNumberInput);
    });

    function removePhoneNumber(index) {
        var phoneNumberRow = document.getElementById('phoneNumberRow' + index);
        phoneNumberRow.remove();
        
        // Update lastPhoneNumberIndex after removing
        lastPhoneNumberIndex--;
    }
</script>
<script>
    var addressesContainer = document.getElementById('addressesContainer');
    var addAddressButton = document.getElementById('addAddress');
    var lastAddressIndex = {{ count($companyData['addresses']) > 0 ? count($companyData['addresses']) - 1 : 0 }}; // Inisialisasi indeks dengan alamat terakhir

    addAddressButton.addEventListener('click', function () {
        var newAddressIndex = ++lastAddressIndex;
        
        var newAddressInput = document.createElement('div');
        newAddressInput.innerHTML = `
            <div class="form-group row" id="addressRow${newAddressIndex}">
                <label class="control-label col-sm-3">Address ${newAddressIndex + 1}</label>
                <label class="control-label col-lg-7">
                    <input type="text" class="form-control" id="txtAddress${newAddressIndex}" name="txtAddress${newAddressIndex}"
                        placeholder="Address ${newAddressIndex + 1}" required>
                </label>
                <div class="col-lg-1">
                    <button type="button" class="btn btn-danger" onclick="removeAddress(${newAddressIndex})">Remove</button>
                </div>
            </div>
        `;

        addressesContainer.appendChild(newAddressInput);
    });

    function removeAddress(index) {
        var addressRow = document.getElementById('addressRow' + index);
        addressRow.remove();
        
        // Update lastAddressIndex after removing
        lastAddressIndex--;
    }
</script>
@endsection