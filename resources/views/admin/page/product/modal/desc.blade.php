<div class="modal fade" id="kt_modal_desc_product" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-body scroll-y ">
                <div class="fv-row">
                    <div class="d-flex align-content-between flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                        <div class="text-start d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3 py-lg-0">
                            <h3 class="modal-title pt-2">Description of {{ $product->name }}</h3>
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
                <div class="fv-row mt-3">
                    <img src="{{ asset($product->image_path) }}" alt="Product Image" style="width: 100%; height: 100%;">                
                </div>
                <div class="fv-row mt-3">
                    <h5 class="modal-title pt-2">Nomor Product : {!! $product->nomor !!}</h5>
                </div>
                <div class="fv-row mt-3">
                    <h5 class="modal-title pt-2">Product : {!! $product->name !!} [Series : {!! $product->series !!}]</h5> 
                </div>
                <div class="fv-row mt-3">
                    <h5 class="modal-title pt-2">Category : {!! $product->category->name !!}</h5> 
                </div>
                <hr>
                <div class="fv-row mt-3">
                    {!! $product->desc !!}
                </div>
                <hr>
            </div>
            <div class="modal-footer">
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
        $('#kt_modal_desc_product').modal('show');
        var tables = document.getElementsByTagName('table');

        for (var i = 0; i < tables.length; i++) {
            if(tables[i].classList.length == 0){
                tables[i].classList.add('table');
                tables[i].classList.add('table-bordered');
            }

        }

    });
</script>