<!-- Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productName">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img id="productThumbnail" src="{{ asset('public/frontend') }}/images/demos/demo3/logo_.png"
                            alt="product image">
                    </div>
                    <div class="col-md-7">
                        <ul class="list-group">
                            <input type="hidden" id="id">
                            <li class="list-group-item">স্টকে আছে : <strong id="productStock"></strong>
                            <li class="list-group-item">প্রোডাক্টের কোড : <strong id="productCode"></strong></li>
                            <li class="list-group-item">প্রোডাক্টের সংখ্যা :
                                <input type="number" id="quantity" value="1" min="1"></strong>
                            </li>
                            {{-- <li class="list-group-item"> প্রোডাক্টের দাম (টাকা) : <strong id="productPrice"></strong>
                            </li> --}}
                            <li class="list-group-item product-price" style="font-size: 13px;">বিক্রয় মুল্য(টাকা) :
                                <ins class="new-price">৳ <span id="discunt_price"></span>/-</ins><del
                                    class="old-price">৳
                                    <span id="product_price"></span>/-</del>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addToCart">কার্টে যোগ করুন</button>
            </div>
        </div>
    </div>
</div>
