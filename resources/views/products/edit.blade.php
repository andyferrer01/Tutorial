<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Title</title>
    @vite('resources/views/app.css')
</head>
<body>
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text"
            name="product_name"
            value="{{ $product->product_name }}">
        <br><br>

        <input type="number"
            name="price"
            value="{{ $product->price }}">
        <br><br>

        <input type="text"
            name="product_description"
            value="{{ $product->product_description }}">
        <br><br>

        <button type="submit">
            Update
        </button>
    </form>
</body>
</html>
