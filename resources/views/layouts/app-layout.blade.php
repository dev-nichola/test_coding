<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') ?? __('Bismillah Sewa Mobil') }}</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body class="text-black font-poppins">
    <section id="Dashboard" class="flex">
        @include('partials.sidebar')
        <div id="Content"
            class="flex flex-col bg-taskia-background-grey rounded-l-[60px] w-full h-screen overflow-y-scroll p-[50px] gap-[30px]">
            @include('partials.header')
            <div class="flex flex-col gap-[30px]">
            {{ $slot }}
            </div>
        </div>
    </section>

</body>

</html>
