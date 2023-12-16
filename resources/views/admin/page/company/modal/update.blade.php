<form id="update_company_form">
    @method('put')
    <div class="modal fade" id="kt_modal_update_company" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content rounded">
                <div class="modal-body scroll-y ">
                    <div class="fv-row">
                        <div class="d-flex align-content-between flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                            <div class="text-start d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3 py-lg-0">
                                <h3 class="modal-title pt-2">Update Company</h3>
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
                    <div class="fv-row mt-3">
                        <label for="required" class="required fs-6 fw-semibold mb-2">Name</label>
                        <input type="text" class="form-control" value="{{ $company->name }}" name="name" placeholder="Write the company name">
                    </div>
                    <div class="fv-row mt-3">
                        <label for="required" class="required fs-6 fw-semibold mb-2">Email</label>
                        <input type="email" class="form-control" value="{{ $company->email }}" name="email" placeholder="Write the company email">
                    </div>
                    @php
                        $phone_number =  explode('//', $company->phone_number);
                    @endphp
                    <div id="phone_div">
                        @foreach ($phone_number as $key => $item)
                            @if ($key == 0)
                            <div class="fv-row mt-3">
                                <label for="required" class="required fs-6 fw-semibold mb-2">Phone Number</label>
                                <input type="number" class="form-control" name="phone_number[]" value="{{$item}}"
                                    placeholder="Write the company number phone">
                            </div>
                            @else
                            <div class="fv-row mt-3" id="phone_{{$key-1}}">
                                <label for="required" class="required fs-6 fw-semibold mb-2">Phone Number</label>
                                    <div class="row">
                                        <div class="col-10">
                                            <input type="number" class="form-control"  value="{{$item}}" name="phone_number[]" placeholder="Write the company number phone">
                                        </div>
                                        <div class="col-2">
                                            <button type="button" onclick="deletePhoneNumber({{$key-1}})" class="btn btn-icon btn-danger"><i class="fa fa-trash fs-4"></i></button>
                                        </div>
                                    </div>
                            </div>
                            @endif
                        @endforeach
                        
                    </div>
                    <div class="fv-row mt-3">
                        <button type="button" id="btnAddPhoneNumber" class="btn btn-primary">Add Phone
                            Number</button>
                    </div>
                    @php
                        $address =  explode('//', $company->address);
                    @endphp
                    <div id="address_div">
                        @foreach ($address as $key => $item)
                            @if ($key == 0)
                                <div class="fv-row mt-3">
                                    <label for="required" class="required fs-6 fw-semibold mb-2">Address</label>
                                    <textarea name="address[]" class="form-control" placeholder="Write the comany address">{{ $item }}</textarea>
                                </div>
                            @else
                                <div class="fv-row mt-3" id="address_{{ $key-1 }}">
                                    <label for="required" class="required fs-6 fw-semibold mb-2">Address</label>
                                        <div class="row">
                                            <div class="col-10">
                                                <textarea name="address[]" class="form-control" placeholder="Write the comany address">{{ $item }}</textarea>
                                            </div>
                                            <div class="col-2">
                                                <button type="button" onclick="deleteAddress({{ $key-1 }})" class="btn btn-icon btn-danger"><i class="fa fa-trash fs-4"></i></button>
                                            </div>
                                        </div>
                                </div>
                            @endif
                        @endforeach
                       
                    </div>
                    <div class="fv-row mt-3">
                        <button type="button" id="btnAddAddress" class="btn btn-primary">Add Address</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-kt-modal-action-type="close" data-bs-dismiss="modal"
                        class="btn btn-light-success fw-bold me-5 w-150px">
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
        $('#kt_modal_update_company').modal('show');
    });

    $('#btn-simpan').click(function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Update Company",
            text: "Are you sure you want to update Company?",
            icon: 'warning',
            target: document.getElementById('content'),
            reverseButtons: true,
            confirmButtonText: "Yes",
            showCancelButton: true,
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                let act = "{{ route('company.update',':id') }}".replace(':id','{{ encrypt($company->id) }}')
                let form_data = new FormData(document.querySelector("#update_company_form"));
                form_data.append('_token', '{{ csrf_token() }}')
                $.ajax({
                    url: act,
                    type: "POST",
                    data: form_data,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status == "success") {
                            Swal.fire({
                                title: data.msg,
                                icon: 'success',
                                buttonsStyling: false,
                                showConfirmButton: false
                            }).then(function(result) {
                                $('#kt_modal_update_company').modal('hide');
                                $('#kt_company_table').DataTable().ajax.reload();
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
        })
    })

    var phone = {{ count($phone_number) - 1 }};
    var address = {{ count($address) - 1 }};
    $('#btnAddPhoneNumber').click(function(e) {
        e.preventDefault();
        var element = `
        <div class="fv-row mt-3" id="phone_${phone}">
            <label for="required" class="required fs-6 fw-semibold mb-2">Phone Number</label>
                <div class="row">
                    <div class="col-10">
                        <input type="number" class="form-control" name="phone_number[]" placeholder="Write the company number phone">
                    </div>
                    <div class="col-2">
                        <button type="button" onclick="deletePhoneNumber(${phone})" class="btn btn-icon btn-danger"><i class="fa fa-trash fs-4"></i></button>
                    </div>
                </div>
        </div>`
        $('#phone_div').append(element)
        phone = phone + 1;
    })
    $('#btnAddAddress').click(function(e) {
        e.preventDefault();
        var element = `
        <div class="fv-row mt-3" id="address_${address}">
            <label for="required" class="required fs-6 fw-semibold mb-2">Address</label>
                <div class="row">
                    <div class="col-10">
                        <textarea name="address[]" class="form-control" placeholder="Write the comany address"></textarea>
                    </div>
                    <div class="col-2">
                        <button type="button" onclick="deleteAddress(${address})" class="btn btn-icon btn-danger"><i class="fa fa-trash fs-4"></i></button>
                    </div>
                </div>
        </div>`
        $('#address_div').append(element)
        address = address + 1;
    })

    function deletePhoneNumber(data){
        $('#phone_'+data).remove();
    }

    function deleteAddress(data){
        $('#address_'+data).remove();
    }
</script>
