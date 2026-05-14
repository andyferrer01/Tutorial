<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div>
            <label for="product_description">Description:</label>
            <textarea id="product_description" name="product_description"></textarea>
        </div>
        <button type="submit">Create Product</button>
    </form>
</body>
</html>