@if ($errors->any())
    <div class="fixed bottom-0 text-center text-white p-2 w-full bg-red-700">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="fixed bottom-0 text-center text-white p-2 w-full bg-green-700">
        <ul>
            <li>{{ session('success') }}</li>
        </ul>
    </div>
@endif

@if (session('error'))
    <div class="fixed bottom-0 text-center text-white p-2 w-full bg-red-700">
        <ul>
            <li>{{ session('error') }}</li>
        </ul>
    </div>
@endif
