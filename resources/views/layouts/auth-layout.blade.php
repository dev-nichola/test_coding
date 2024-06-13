<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>

        @vite(['/resources/css/app.css', '/resources/js/app.js'])
        
        <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <x-toaster-hub />


        {{ $slot }}


        @stack('scripts')
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({ once: true, duration: 300, easing: 'ease-out' });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../scripts/script.js"></script>
    </body>

</html>