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

    {{-- <div class="h-auto w-full p-4 mt-5">
        <h1 class="text-center">محصولات</h1>
        <div class="w-36 h-48 bg-gray-500">

        </div>
    </div> --}}
    <div class="w-full p-5">
        <h2 class="p-5">اطلاعات کاربر</h2>
        <hr>
        <div class="border w-full p-5 mt-5 grid grid-cols-2 md:grid-cols-4 gap-4">
            <div>
                <span>نام :</span>
                <span>{{ $user->name }}</span>
            </div>
            <div>
                <span>ایمیل :</span>
                <span>{{ $user->email }}</span>
            </div>
            <div>
                <span>تلفن همراه :</span>
                <span>{{ $user->mobile }}</span>
            </div>
            <div>
                <span>تلفن :</span>
                <span>{{ $user->phone }}</span>
            </div>
            <div>
                <span>اینستاگرام :</span>
                <span>{{ $user->instagram }}</span>
            </div>
            <div>
                <span>جنسیت :</span>
                <span>{{ $user->gender == 'male' ? 'مرد' : 'زن' }}</span>
            </div>
        </div>

        <h2 class="p-5">سفارشات</h2>
        <hr>
        <div class="border w-full overflow-x-auto p-5 mt-5">
            <table class="min-w-full divide-y divide-gray-200 w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3   text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                            ردیف
                        </th>
                        <th class="px-6 py-3   text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                            نام محصول</th>
                        <th class="px-6 py-3   text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                            تعداد</th>
                        <th class="px-6 py-3   text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                            قیمت محصول</th>
                        <th class="px-6 py-3   text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                            قیمت نهایی</th>
                        <th class="px-6 py-3   text-xs font-bold text-gray-500 uppercase tracking-wider text-center">
                            وضعیت</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-center">
                    @foreach ($user->orders()->orderBy('id', 'desc')->get() as $index => $order)
                        <tr class="text-center border-b">
                            <td
                                class="px-6 py-6   text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                {{ $index + 1 }}
                            </td>
                            <td
                                class="px-6 py-6   text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                {{ $order->product_name }}
                            </td>
                            <td
                                class="px-6 py-6   text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                {{ $order->quantity }}
                            </td>
                            <td
                                class="px-6 py-6   text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                {{ number_format($order->product_price) }} تومان
                            </td>
                            <td
                                class="px-6 py-6   text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                {{ number_format($order->total_price) }} تومان
                            </td>
                            <td
                                class="px-6 py-6   text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                <span
                                    class="px-5 py-2 text-white {{ $order->status ? 'bg-green-500' : 'bg-red-500' }} bg-green-500 rounded-3xl ">
                                    {{ $order->status ? 'پرداخت شده' : 'لغو شده' }}</span>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>
