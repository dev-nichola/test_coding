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
        <nav class="container relative my-4 lg:my-10">
            <div class="flex w-full flex-col justify-between lg:flex-row lg:items-center">
                <div class="hidden w-full lg:block" id="navigation">

                    <div class="mt-6 flex flex-col items-baseline gap-4 lg:mt-0 lg:flex-row lg:items-center lg:justify-between">            
                        <div class="ml-auto flex w-full flex-col lg:w-auto lg:flex-row lg:items-center lg:gap-12">
                            <a href="sign-in.html" class="btn-secondary">
                                Log In
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <section class="container relative pb-[100px] pt-[30px]">
            <div class="flex flex-col items-center justify-center gap-[30px]">
                <!-- Preview Image -->
                <div class="relative">
                    <div class="absolute z-0 hidden lg:block">
                        <div class="text-darkGrey text-[220px] font-extrabold leading-[101%] tracking-[-0.06em]">
                            <div data-aos="fade-right" data-aos-delay="300">
                                NEW
                            </div>
                            <div data-aos="fade-left" data-aos-delay="600">
                                PORSCHE
                            </div>
                        </div>
                    </div>
                    <img src="../assets/images/porsche.webp" class="relative z-10 w-full max-w-[963px]" alt=""
                        data-aos="zoom-in" data-aos-delay="950">
                </div>

                <div class="flex flex-col items-center justify-around gap-7 lg:flex-row lg:gap-[60px]">
                    <!-- Car Details -->
                    <div class="flex items-center gap-y-12">
                        <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
                            data-aos-delay="1400">
                            <h6 class="text-dark text-center text-xl font-bold md:text-[26px]">
                                380
                            </h6>
                            <p class="text-secondary text-center text-sm font-normal md:text-base">
                                Horse Power
                            </p>
                        </div>
                        <span class="vr" data-aos="fade-left" data-aos-delay="1600"></span>
                        <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
                            data-aos-delay="1900">
                            <h6 class="text-dark text-center text-xl font-bold md:text-[26px]">
                                12S
                            </h6>
                            <p class="text-secondary text-center text-sm font-normal md:text-base">
                                Speed AT
                            </p>
                        </div>
                        <span class="vr" data-aos="fade-left" data-aos-delay="2100"></span>
                        <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
                            data-aos-delay="2400">
                            <h6 class="text-dark text-center text-xl font-bold md:text-[26px]">
                                AWD
                            </h6>
                            <p class="text-secondary text-center text-sm font-normal md:text-base">
                                Drive
                            </p>
                        </div>
                        <span class="vr" data-aos="fade-left" data-aos-delay="2600"></span>
                        <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left"
                            data-aos-delay="2900">
                            <h6 class="text-dark text-center text-xl font-bold md:text-[26px]">
                                A.I
                            </h6>
                            <p class="text-secondary text-center text-sm font-normal md:text-base">
                                Tracking
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Cars -->
        <section class="bg-darkGrey">
            <div class="container relative py-[100px]">
                <header class="mb-[30px]">
                    <h2 class="text-dark mb-1 text-[26px] font-bold">
                        All Cars
                    </h2>
                    <p class="text-secondary text-base">Start your big day</p>
                </header>

                <!-- Cars -->
                <div class="grid gap-[29px] md:grid-cols-2 lg:grid-cols-4">
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-dark mb-[2px] text-lg font-bold">
                                Taycan 4S
                            </h5>
                            <p class="text-secondary text-sm font-normal">Electric Car</p>
                            <a href="./details.html" class="absolute inset-0"></a>
                        </div>
                        <img src="../assets/images/car-01.webp" class="h-[150px] w-full min-w-[216px] rounded-[18px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-secondary text-sm font-normal">
                                <span class="text-primary text-base font-bold">$250</span>/day
                            </p>
                            <!-- Rating -->
                            <p class="text-dark flex items-center gap-[2px] text-xs font-semibold">
                                (4.8/5)
                                <img src="../assets/svgs/ic-star.svg" alt="">
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-dark mb-[2px] text-lg font-bold">
                                911 922 RS
                            </h5>
                            <p class="text-secondary text-sm font-normal">Sport Car</p>
                            <a href="./details.html" class="absolute inset-0"></a>
                        </div>
                        <img src="../assets/images/car-02.webp" class="h-[150px] w-full min-w-[216px] rounded-[18px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-secondary text-sm font-normal">
                                <span class="text-primary text-base font-bold">$456</span>/day
                            </p>
                            <!-- Rating -->
                            <p class="text-dark flex items-center gap-[2px] text-xs font-semibold">
                                (5/5)
                                <img src="../assets/svgs/ic-star.svg" alt="">
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-dark mb-[2px] text-lg font-bold">
                                Macan 7S
                            </h5>
                            <p class="text-secondary text-sm font-normal">Family Car</p>
                            <a href="./details.html" class="absolute inset-0"></a>
                        </div>
                        <img src="../assets/images/car-03.webp" class="h-[150px] w-full min-w-[216px] rounded-[18px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-secondary text-sm font-normal">
                                <span class="text-primary text-base font-bold">$190</span>/day
                            </p>
                            <!-- Rating -->
                            <p class="text-dark flex items-center gap-[2px] text-xs font-semibold">
                                (4.3/5)
                                <img src="../assets/svgs/ic-star.svg" alt="">
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card-popular">
                        <div>
                            <h5 class="text-dark mb-[2px] text-lg font-bold">
                                Cayman 992
                            </h5>
                            <p class="text-secondary text-sm font-normal">Race Car</p>
                            <a href="./details.html" class="absolute inset-0"></a>
                        </div>
                        <img src="../assets/images/car-04.webp" class="h-[150px] w-full min-w-[216px] rounded-[18px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <!-- Price -->
                            <p class="text-secondary text-sm font-normal">
                                <span class="text-primary text-base font-bold">$899</span>/day
                            </p>
                            <!-- Rating -->
                            <p class="text-dark flex items-center gap-[2px] text-xs font-semibold">
                                (4.9/5)
                                <img src="../assets/svgs/ic-star.svg" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Instant Booking -->
        <section class="relative bg-[#060523]">
            <div class="container py-20">
                <div class="flex flex-col">
                    <header class="mb-[50px] w-full max-w-[360px]">
                        <h2 class="mb-4 text-[26px] font-bold text-white">
                            Drive Yours Today. <br>
                            Drive Faster.
                        </h2>
                        <p class="text-subtlePars text-base">Get an instant booking to catch up whatever your
                            really want to achieve today, yes.</p>
                    </header>
                    <!-- Button Primary -->
                    <div class="bg-primary group w-max rounded-full p-1">
                        <a href="details.html" class="btn-primary">
                            <p>
                                Book Now
                            </p>
                            <img src="../assets/svgs/ic-arrow-right.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="absolute bottom-[-30px] right-0 hidden max-h-[332px] lg:block lg:w-[764px]">
                    <img src="../assets/images/porsche_small.webp" alt="">
                </div>
            </div>
        </section>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({ once: true, duration: 300, easing: 'ease-out' });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../scripts/script.js"></script>
    </body>

</html>