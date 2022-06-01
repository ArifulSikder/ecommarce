<section class="mb-3">
    <h4 class="widget-title font-weight-bold">সর্বশেষ পন্য</h4>
    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">

            <div class="widget widget-products appear-animate"
                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.5s'}">
                <div class="products-col">
                    @foreach (latestProduct()->take(3) as $product)
                        <div class="product product-list-sm">
                            <figure class="product-media">
                                <a href="{{ url('_' . $product->product_slug) }}">
                                    <img src="{{ asset($product->product_thumbnail) }}" alt="product" width="100"
                                        height="100" style="background-color: #f5f5f5;" />
                                </a>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a
                                        href="{{ url('_' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                </h3>
                                @if ($product->product_discount > 0)
                                    <div class="product-price">
                                        <ins class="new-price">৳
                                            {{ banglaNumber($product->product_price - ($product->product_price * $product->product_discount) / 100) }}/-</ins><del
                                            class="old-price">৳
                                            {{ banglaNumber($product->product_price) }}/-</del>
                                    </div>
                                @else
                                    <div class="product-price">
                                        <ins class="new-price">৳
                                            {{ banglaNumber($product->product_price) }}/-</ins>
                                    </div>
                                @endif
                                <div class="ratings-container">
                                    {{-- <div class="ratings-full">
                                        <span class="ratings" style="width:40%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 ">
            <div class="widget widget-products appear-animate"
                data-animation-options="{'name': 'fadeIn','delay': '.3s'}">
                <div class="products-col">
                    @foreach (latestProduct()->skip(3)->take(3)
    as $product)
                        <div class="product product-list-sm">
                            <figure class="product-media">
                                <a href="{{ url('_' . $product->product_slug) }}">
                                    <img src="{{ asset($product->product_thumbnail) }}" alt="product" width="100"
                                        height="100" style="background-color: #f5f5f5;" />
                                </a>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a
                                        href="{{ url('_' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                </h3>
                                @if ($product->product_discount > 0)
                                    <div class="product-price">
                                        <ins class="new-price">৳
                                            {{ banglaNumber($product->product_price - ($product->product_price * $product->product_discount) / 100) }}/-</ins><del
                                            class="old-price">৳
                                            {{ banglaNumber($product->product_price) }}/-</del>
                                    </div>
                                @else
                                    <div class="product-price">
                                        <ins class="new-price">৳
                                            {{ banglaNumber($product->product_price) }}/-</ins>
                                    </div>
                                @endif
                                <div class="ratings-container">
                                    {{-- <div class="ratings-full">
                                        <span class="ratings" style="width:40%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="widget widget-products appear-animate"
                data-animation-options="{'name': 'fadeInRightShorter','delay': '.5s'}">
                <div class="products-col">
                    @foreach (latestProduct()->skip(6)->take(3)
    as $product)
                        <div class="product product-list-sm">
                            <figure class="product-media">
                                <a href="{{ url('_' . $product->product_slug) }}">
                                    <img src="{{ asset($product->product_thumbnail) }}" alt="product" width="100"
                                        height="100" style="background-color: #f5f5f5;" />
                                </a>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a
                                        href="{{ url('_' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                </h3>
                                @if ($product->product_discount > 0)
                                    <div class="product-price">
                                        <ins class="new-price">৳
                                            {{ banglaNumber($product->product_price - ($product->product_price * $product->product_discount) / 100) }}/-</ins><del
                                            class="old-price">৳
                                            {{ banglaNumber($product->product_price) }}/-</del>
                                    </div>
                                @else
                                    <div class="product-price">
                                        <ins class="new-price">৳
                                            {{ banglaNumber($product->product_price) }}/-</ins>
                                    </div>
                                @endif
                                <div class="ratings-container">
                                    {{-- <div class="ratings-full">
                                        <span class="ratings" style="width:40%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
