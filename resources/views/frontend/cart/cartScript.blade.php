  {{-- product cart view --}}
  <script>
      $(document).ready(function() {
          // ************************************************************ product view start ***************************************************************** 
          // product view 
          $(".ViewProduct").click(function() {
              var productId = this.id;
              productView(productId)
          });


          function productView(productId) {
              var productId = productId;
              $("#quantity").val(1);
              $("#id").val('');
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
          // ************************************************************ product view end ***************************************************************** 

          // ************************************************************  add to cart start ***************************************************************** 

          $(".addToCart").click(function() {
              var id = $("#id").val();
              console.log(id);
              var quantity = $("#quantity").val();
              addToCart(id, quantity);
          });

          function addToCart(product_id, quantity) {
              var id = product_id;
              var product_qty = quantity;

              $.ajax({
                  type: "POST",
                  url: "{{ url('add-to-cart') }}",
                  data: {
                      id: id,
                      product_qty: product_qty,
                  },
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  dataType: "json",
                  success: function(response) {
                      if (response.success) {
                          toastr.success(response.success)
                      } else {
                          toastr.error(response.error)
                      }
                      $("#addCartModal").modal('hide');
                      minicart();
                  }
              });
          }
          // ************************************************************  add to cart end ***************************************************************** 


          // ************************************************************ minicart section  start ***************************************************************** 

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

                      // remove cart / 
                      $('.cartRemove').click(function(e) {
                          var rowId = $(this).attr('id');
                          removeCart(rowId);
                      });

                  }
              });
          }
          minicart();

          // ************************************************************ minicart section  end ***************************************************************** 


          // ************************************************************ cart page script  start ***************************************************************** 

          // cart page script 
          function cartPage() {

              $.ajax({
                  type: "GET",
                  url: "{{ url('cart-page') }}",
                  data: "data",
                  dataType: "json",
                  success: function(response) {
                      $("#cartTotall").text('৳' + response.cartTotal + ' TK');
                      $("#grandTotal").text('৳' + response.cartTotal + ' TK');
                      $("#miniCartTotall").text('৳' + response.cartTotal + ' TK');
                      $("#cartQtyy").text(response.cartQty);
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
                                                                       
                                                                        <a id="${value.id}" authId='{{ Auth::id() }}' class="wishlist AddToWishList"
                                                                            title="Add To Wishlist">
                                                                            <i class="d-icon-heart"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <a  class="wishlist cartRemove rowId" id="${value.rowId}"
                                                                            title="Remove">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </td>
                                                <td> <input type="number" id="quantity" class='quantity' rowId='${value.rowId}' value="${value.qty}" min="1"></td>
                                                <td>
                                                    <p><strong id="productPrice">${value.qty} * ${value.price} = ${value.price * value.qty}</strong><span>TK</span></p>
                                                </td>
                                            </tr>`

                      });

                      $("#CartListItem").html(cartItem)
                      $(".quantity").inputSpinner();
                      // remove cart / 
                      $('.cartRemove').click(function(e) {
                          var rowId = $(this).attr('id');
                          removeCart(rowId);
                      });
                      //increase quantity
                      $(".quantity").change(function(e) {
                          var rowId = $(this).attr("rowId");
                          var quantity = $(this).val();
                          increaseCartQty(rowId, quantity);
                      });

                      //   {{-- wishlist section --}}
                      $(".AddToWishList").click(function(e) {
                          var authId = $(this).attr("authId");
                          var product_id = $(this).attr("id");
                          addToWishList(authId, product_id);
                      });
                  }
              });
          }
          cartPage();
          // ************************************************************ cart page script  end ***************************************************************** 

          // ************************************************************ remove product  start ***************************************************************** 

          function removeCart(rowId) {
              var rowId = rowId;

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
                      minicart();
                      cartPage();
                      //   location.reload();
                  }
              });
          }

          // ************************************************************ remove product  end ***************************************************************** 

          // ************************************************************ incrase cart quantity  start ***************************************************************** 

          function increaseCartQty(rowId, quantity) {
              var rowId = rowId;
              var quantity = quantity;

              $.ajax({
                  type: "GET",
                  url: "{{ url('increase-cart-qty') }}",
                  data: {
                      rowId: rowId,
                      quantity: quantity,
                  },
                  dataType: "json",
                  success: function(response) {
                      cartPage();
                      minicart();
                  }
              });
          }
          // ************************************************************ incrase cart quantity  end ***************************************************************** 

          // ************************************************************ wishlist section start ***************************************************************** 

          //   {{-- wishlist section --}}
          $(".AddToWishList").click(function(e) {
              var authId = $(this).attr("authId");
              var product_id = $(this).attr("id");
              addToWishList(authId, product_id);
          });
          //add to wishlist
          function addToWishList(authId, product_id) {
              var authId = authId;
              var product_id = product_id;
              if (authId != '') {
                  $.ajax({
                      type: "POST",
                      url: "{{ url('add-to-wishlist') }}",
                      data: {
                          product_id: product_id,
                      },
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      dataType: "json",
                      success: function(response) {
                          if (response.status == 1) {
                              Swal.fire({
                                  icon: 'success',
                                  title: response.success,
                                  showConfirmButton: false,
                                  timer: 1500
                              })
                          } else {
                              Swal.fire({
                                  icon: 'error',
                                  title: response.error,
                                  showConfirmButton: false,
                                  timer: 1500
                              })
                          }
                      }
                  });
              } else {
                  Swal.fire({
                      title: 'দয়া করে লগিন করুন !',
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Login !'
                  }).then((result) => {
                      if (result.isConfirmed) {
                          window.location.href = '{{ url('login') }}'
                      }
                  })
              }
          }
          //show wishlist data in table
          function wishlistData() {
              //wish list data
              $.ajax({
                  type: "GET",
                  url: "{{ url('wishlist-data') }}",
                  dataType: "json",
                  success: function(response) {
                      var wishlistData = '';
                      $.each(response, function(index, value) {
                          wishlistData += `  
                            
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <img width='100px' id="product_thumbnail" src="${value.product_thumbnail}" class="img-sm">
                                    </figure>
                                </td>
                                <td>
                                    <figcaption class="info">
                                        <p class="title text-dark" id="product_name">${value.product_name}</p>
                                    </figcaption>
                                </div>
                                </td>
                                <td>
                                    <p><strong id="productPrice">
                                        <span class="badge badge-${value.product_qty >0 ? 'success': 'danger'}">${value.product_qty >0 ? 'IN STOCK': 'STOCK OUT'}</span>
                                        </strong>
                                    </p>
                                </td>
                                <td>
                                    ${value.product_price } tk
                                </td>
                                <td>
                                    <button type="submit" id='${value.id }' class="btn  float-left btn-link  removeWishList">
                                        <i class="far fa-trash-alt fa-xs"></i>
                                    </button>
                                    <button style='font-size: 14px;' class="btn  btn-link  addToCart float-right" id="${value.id }" title="Add to cart"><i class="d-icon-bag"></i>Add To Cart</button>
                                </td>
                            </tr>`
                      });
                      $("#wishListData").html(wishlistData);

                      $('.removeWishList').click(function(e) {
                          var product_id = $(this).attr("id");
                          removeProduct(product_id);
                      });

                      //   {{-- add to cart --}}
                      $(".addToCart").click(function() {
                          var id = $(this).attr("id");
                          var quantity = 1;
                          addToCart(id, quantity);
                      });

                  }

              });
          }
          wishlistData();

          //remove form wishlist
          function removeProduct(product_id) {
              var id = product_id;
              $.ajax({
                  type: "POST",
                  url: "{{ url('remove-wishlist') }}",
                  data: {
                      id: id,
                  },
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  dataType: 'json',
                  success: function(response) {
                      if (response.status == 1) {
                          Swal.fire({
                              icon: 'success',
                              title: response.success,
                              showConfirmButton: false,
                              timer: 1500
                          })
                      } else {
                          Swal.fire({
                              icon: 'error',
                              title: response.error,
                              showConfirmButton: false,
                              timer: 1500
                          })
                      }

                      wishlistData();
                      //   location.reload();
                  }
              });
          }

          // ************************************************************ wishlist section start ***************************************************************** 



          // ************************************************************ coupon section start ***************************************************************** 

          //   apply coupon 
          $('#couponSubmit').click(function(e) {
              e.preventDefault();
              var couponName = $('#coupon').val();
              haveCoupon(couponName);
          });

          function haveCoupon(couponName) {
              var coupon_name = couponName;
              $.ajax({
                  type: "POST",
                  url: "{{ url('have-coupon') }}",
                  data: {
                      coupon_name: coupon_name,
                  },
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  dataType: "json",
                  success: function(response) {
                      if (response.status == 1) {
                          Swal.fire({
                              icon: 'success',
                              title: response.success,
                              showConfirmButton: false,
                              timer: 1500
                          })
                      } else {
                          Swal.fire({
                              icon: 'error',
                              title: response.error,
                              showConfirmButton: false,
                              timer: 1500
                          })
                      }

                      cartPage();
                      minicart();
                  }
              });
          }
          // ************************************************************ coupon section end ***************************************************************** 

      });
  </script>
