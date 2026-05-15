<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products List</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->product_name }} {{ $product->product_description }} {{ $product->price }}</li>
        @endforeach
    </ul>
</body>
</html>