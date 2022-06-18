<ul class="list-group position-absolute" style="z-index: 1024; width: 100%;">
    @forelse($products as $product)
        <li class="list-group-item">
            <a href="{{ url('_' . $product->product_slug) }}"><img src="{{ asset($product->product_thumbnail) }}"
                    width="50px" alt="{{ $product->product_name }}">
                {{ $product->product_name }}</a>
        </li>
    @empty
        <li class="list-group-item">
            <p class="text-danger">কোনো প্রোডাক্ট নেই</p>
        </li>
    @endforelse
</ul>
