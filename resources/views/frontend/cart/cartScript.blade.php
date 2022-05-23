  {{-- product cart view --}}
  <script>
      $(document).ready(function() {

          // product view 
          $(".ViewProduct").click(function() {
              var productId = this.id;
              productView(productId)
          });


          function productView(productId) {
              $("#quantity").val(1);
              $("#id").empty();
              $("#productName").text('');
              $("#productThumbnail").attr("src", '');
              $("#productCode").empty();
              $("#product_price").empty();
              $("#discunt_price").empty();
              $("#subTotal").empty();
              $("#productStock").empty();
              $.ajax({
                  type: "POST",
                  url: "{{ url('product-view') }}",
                  data: {
                      id: productId
                  },
                  dataType: "json",
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(response) {
                      var discountAmount = response.product_price * response.product_discount / 100;
                      var salesPrice = response.product_price - discountAmount;

                      $("#id").val(response.id);
                      $("#productName").text(response.product_name);
                      $("#productThumbnail").attr("src", "{{ url('/') }}/" + response
                          .product_thumbnail);
                      $("#productCode").append(response.product_code);

                      // increase product 
                      $("#quantity").change(function(e) {
                          e.preventDefault();
                          // product if discount 
                          if (response.product_discount > 0) {
                              $(".old-price").removeClass('d-none');
                              $("#product_price").text($(this).val() * response
                                  .product_price);
                              $("#discunt_price").text($(this).val() * salesPrice);
                          } else {
                              $(".old-price").addClass('d-none');
                              $("#discunt_price").text($(this).val() * response
                                  .product_price);
                          }
                      });
                      // product if discount 
                      if (response.product_discount > 0) {
                          $(".old-price").removeClass('d-none');
                          $("#product_price").text(response.product_price);
                          $("#discunt_price").text(response.product_price - discountAmount);
                      } else {
                          $(".old-price").addClass('d-none');
                          $("#discunt_price").text(response.product_price);
                      }

                      // product quantity
                      if (response.product_qty > 0) {
                          $(".addToCart").attr("disabled", false).text('Add To Cart');
                          $("#productStock").append(
                              '<span class="badge badge-success">In Stock</span>');
                      } else {
                          $(".addToCart").attr("disabled", true).text('Stock Out');
                          $("#productStock").append(
                              '<span class="badge badge-danger">Out Of Stock</span>');
                      }
                  }
              });

          }
          productView();
      });
  </script>

  {{-- add to cart --}}
  <script>
      $(document).ready(function() {
          $(".addToCart").click(function() {
              var id = $("#id").val();
              var quantity = $("#quantity").val();
              var productName = $('#productName').text();
              var discunt_price = $('#discunt_price').text();
              var productThumbnail = $("#productThumbnail").attr('src');
              addToCart(id, quantity, productName, discunt_price, productThumbnail);
          });

          function addToCart(product_id, quantity, productName, discunt_price, productThumbnail) {
              var id = product_id;
              var product_qty = quantity;
              var product_name = productName;
              var discunt_price = discunt_price;
              var product_thumbnail = productThumbnail;

              $.ajax({
                  type: "POST",
                  url: "{{ url('add-to-cart') }}",
                  data: {
                      id: id,
                      product_qty: product_qty,
                      product_name: product_name,
                      discunt_price: discunt_price,
                      product_thumbnail: product_thumbnail,
                  },
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  dataType: "json",
                  success: function(response) {
                      $("#addCartModal").modal('hide');
                      if (response.success) {
                          toastr.success(response.success)
                      } else {
                          toastr.error(response.error)
                      }

                      minicart();
                  }
              });
          }

          function minicart() {
              $.ajax({
                  type: "GET",
                  url: "{{ url('product-minicart') }}",
                  dataType: "json",
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(response) {
                      $("#cartTotal").text('৳' + response.cartTotal + ' TK');
                      $("#miniCartTotal").text('৳' + response.cartTotal + ' TK');
                      $("#cartQty").text(response.cartQty);
                      var minicart = '';
                      $.each(response.carts, function(index, value) {

                          minicart += `
                        <div class="product product-cart">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="${value.options.product_thumbnail}"
                                        alt="product" width="80" height="88" />
                                </a>
                                <button type="submit" class="btn btn-link btn-close cartRemove" id="${value.rowId}">
                                 <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                </button>
                            </figure>
                            <div class="product-detail">
                                <a href="product.html" class="product-name">${value.name}</a>
                                <div class="price-box">
                                    <span class="product-quantity">${value.qty}</span>
                                    <span class="product-price">${value.price}</span>
                                </div>
                            </div>
                        </div>`
                      });

                      // console.log(minicart);
                      $("#MiniCart").html(minicart);


                      $('.cartRemove').click(function(e) {
                          var rowId = $(this).attr('id');
                          $.ajax({
                              type: "GET",
                              url: "{{ url('remove-cart') }}",
                              data: {
                                  rowId: rowId,
                              },
                              dataType: "json",
                              success: function(response) {
                                  if (response.success) {
                                      toastr.success(response.success)
                                  } else {
                                      toastr.error(response.error)
                                  }
                                  location.reload();
                              }
                          });
                      });

                  }
              });
          }
          minicart();

      });
  </script>
  {{-- cart page --}}
  <script>
      $(document).ready(function() {
          $.ajax({
              type: "GET",
              url: "{{ url('cart-page') }}",
              data: "data",
              dataType: "json",
              success: function(response) {
                  var cartItem = '';
                  $.each(response.carts, function(index, value) {
                      cartItem += `
                                            <tr>
                                                <td>
                                                    <figure class="itemside align-items-center">
                                                        <div class="row">
                                                            <div class="col-md-4"><img width='130px'
                                                                    id="product_thumbnail"
                                                                    src="${value.options.product_thumbnail}"
                                                                    class="img-sm">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <figcaption class="info">
                                                                    <p class="title text-dark" id="product_name">${value.name}</p>
                                                                </figcaption>

                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <a href="wishlist.html" class="wishlist"
                                                                            title="Add To Wishlist">
                                                                            <i class="d-icon-heart"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <a href="wishlist.html" class="wishlist"
                                                                            title="Remove">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </td>
                                                <td> <input type="number" id="quantity" value="${value.qty}" min="1"></td>
                                                <td>
                                                    <p><strong id="productPrice">${value.price}</strong><span>TK</span></p>
                                                </td>
                                            </tr>`
                      $("#CartListItem").html(cartItem)
                      $("input[type='number']").inputSpinner();
                  });
              }
          });
      });
  </script>
