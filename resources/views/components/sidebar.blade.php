<aside class="w-64 min-h-screen bg-white shadow-md p-5">

    <ul class="space-y-4">

        <li>
            <a href="/"
               class="text-gray-700 hover:text-indigo-600">
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('products.index') }}"
               class="text-gray-700 hover:text-indigo-600">
                Products
            </a>
        </li>

        <li>
            <a href="{{ route('books.index') }}"
               class="text-gray-700 hover:text-indigo-600">
                Books
            </a>
        </li>

    </ul>

</aside>