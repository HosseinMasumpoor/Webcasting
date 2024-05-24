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

    <div class="w-full p-5">
        <div class="border p-4 h-auto w-96 m-auto">
            <img src="{{ $order->product->image ? asset('images/' . $order->product->image) : asset('images/test.jpg') }}"
                alt="Product 1" class="w-full h-56 object-cover mb-2">
            <h3 class="text-lg text-center font-semibold">{{ $order->product_name }}</h3>
            <p class="text-gray-600 mt-3">قیمت واحد : {{ number_format($order->product_price) }} تومان</p>
            <p class="text-gray-600">تعداد : {{ number_format($order->quantity) }}</p>
            <p class="text-gray-600 font-bold">قیمت نهایی : {{ number_format($order->total_price) }} تومان</p>
            <div class="flex gap-4">

                <a href="{{ route('payment', $order->id) }}"
                    class="block text-center cursor-pointer mt-6 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full">پرداخت</a>
                <a href="{{ route('home') }}"
                    class="block text-center cursor-pointer mt-6 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full">عدم
                    پرداخت</a>
            </div>

        </div>
    </div>


</body>

</html>
