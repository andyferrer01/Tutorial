<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    @vite('resources/css/app.css')
    
</head>

<body class="bg-gray-100">

    @include('components.header')

    <div class="flex">

        @include('components.sidebar')

        <main class="flex-1 p-6">

            <div class="bg-white p-6 rounded-2xl shadow-sm">

                <div class="flex justify-between items-center mb-6">

                    <h1 class="text-3xl font-bold">
                        Products
                    </h1>

                    <a href="{{ route('products.create') }}"
                       class="bg-indigo-600 text-white px-4 py-2 rounded-xl">
                        Add Product
                    </a>

                </div>

                <table class="w-full">

                        <tr class="border-b">
                            <th class="text-left py-3">Name</th>
                            <th class="text-left py-3">Price</th>
                            <th class="text-left py-3">Description</th>
                            <th class="text-left py-3">Actions</th>
                        </tr>
                    
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->product_description }}</td>
                            <td>
                            <a href="{{ route('products.edit', $product->id) }}">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $product->id) }}"
                                method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                        </tr>   
                   
                        @endforeach
                </table>

            </div>

        </main>

    </div>

</body>
</html>