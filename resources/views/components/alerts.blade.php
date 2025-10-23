<div>
    {{-- success Message --}}
    @if (session('success'))
        <div id="success-message"
            class="flash-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('success') }}
        </div>
    @endif


    {{-- error Message --}}
    @if (session('error'))
        <div id="error-message" class="flash-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            {{ session('error') }}
        </div>
    @endif

    {{-- Errors  --}}
    @if ($errors->any())
        <div id="warning-message"
            class="flash-message bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


@push('alert')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const flashMessages = document.querySelectorAll('.flash-message');
            if (flashMessages.length > 0) {
                setTimeout(() => {
                    flashMessages.forEach(el => el.remove());
                    window.location.href = "{{ route('allergeen.index') }}";
                }, 4000); // 4 seconds visible
            }
        });
    </script>
@endpush
