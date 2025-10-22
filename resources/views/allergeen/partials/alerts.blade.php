{{-- success Message --}}
@if (session('success'))
    <div id="flash-message"
        class="max-w-lg mx-auto mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
        role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

@if (session('error'))
    <div id="flash-message"
        class="max-w-lg mx-auto mt-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
        role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif

@if ($errors->any())
    <div id="flash-message"
        class="max-w-lg mx-auto mt-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
        role="alert">
        <strong class="font-bold">Validation Error!</strong>
        <ul class="mt-2 list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


