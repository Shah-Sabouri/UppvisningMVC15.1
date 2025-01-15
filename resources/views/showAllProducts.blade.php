<div>
    @foreach ($products as $product)
        <p>Products name: {{ $product->$product_name }} cost: {{ $product->$price }}</p>
    @endforeach
</div>

