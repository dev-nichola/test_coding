<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>

        @vite(['/resources/css/app.css', '/resources/js/app.js'])
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        @include('partials.navbar')

        @include('partials.hero')
        

        <!-- Popular Cars -->
        <section class="bg-darkGrey">
            <div class="container relative py-[100px]">
                <header class="mb-[30px]">
                    <h2 class="text-dark mb-1 text-[26px] font-bold">
                        All Cars
                    </h2>
                    <p class="text-secondary text-base">Start your big day</p>
                </header>

                <div class="grid gap-[29px] md:grid-cols-2 lg:grid-cols-4">
                    {{ $slot }}
                </div>
            </div>
        </section>
        @include("partials.footer")
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({ once: true, duration: 300, easing: 'ease-out' });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../scripts/script.js"></script>
    </body>

</html>