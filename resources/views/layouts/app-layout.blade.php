<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') ?? __('Bismillah Rental') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

        @livewireStyles
</head>

<body class="font-poppins text-black">
    <x-toaster-hub />

    <section id="Dashboard" class="flex">
        @include('partials.sidebar')
        <div id="Content"
            class="bg-taskia-background-grey flex h-screen w-full flex-col gap-[30px] overflow-y-scroll rounded-l-[60px] p-[50px]">
            @include('partials.header')
            <div class="flex flex-col gap-[30px]">
            {{ $slot }}
            </div>
        </div>
    </section>
    
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
window.addEventListener('confirm-delete', function (event) {
    let ids = event.detail.ids;
    if (confirm('Apakah Anda yakin ingin menghapus data yang dipilih?')) {
        this.call('confirmDelete', ids);
    }
});
});        
        <script>
    @endpush
    
    @livewireScripts
</body>

</html>
