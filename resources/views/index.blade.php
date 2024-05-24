<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webcasting</title>

    @vite('resources/css/app.css')
</head>

<body dir="rtl">
    @include('header')

    <h1 class="text-center mt-5 p-5">محصولات</h1>
    <hr>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-5">
        @foreach ($products as $product)
            <form action="{{ route('order', $product->id) }}" method="POST">
                @csrf
                <div class="border p-4 h-auto shadow-sm">
                    <img src="{{ $product->image ? asset('images/' . $product->image) : asset('images/test.jpg') }}"
                        alt="Product 1" class="w-full h-56 object-cover mb-2">
                    <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                    <p class="text-gray-600 mt-2">قیمت : {{ number_format($product->price) }} تومان</p>
                    <p class="text-gray-600">موجودی : {{ $product->stock }}</p>
                    <div class="flex items-center mt-4">
                        <div class="w-56 flex items-center gap-2">
                            <span>تعداد :</span>
                            <input type="number" name="quantity" required value="0"
                                class="p-2 w-16 border text-center">
                        </div>
                        <button href="{{ route('order', $product->id) }}"
                            class="block text-center cursor-pointer flex-1  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">سفارش</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>

    @include('errors')
</body>

</html>
