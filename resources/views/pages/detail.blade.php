<x-main-layout>
    <section class="bg-darkGrey relative py-[70px]">
        <div class="container">
    
            <div class="grid grid-cols-12 gap-[30px]">
                <!-- Car Preview -->
                <div class="col-span-12 lg:col-span-8">
                    <div class="bg-white p-4 rounded-[30px] flex flex-col gap-4">
                        <img src="{{ asset('storage') .'/'. $item->image  }}" alt="">
                        <div class="grid items-center grid-cols-4 gap-3 md:gap-5">
                        </div>
                    </div>
                </div>
    
                <!-- Details -->
                <div class="col-span-12 md:col-start-5 lg:col-start-auto md:col-span-8 lg:col-span-4">
                    <div class="bg-white p-5 pb-[30px] rounded-3xl h-full">
                        <div class="flex flex-col h-full divide-y divide-grey">
                            <!-- Name, Category, Rating -->
                            <div class="max-w-[230px] pb-5">
                                <h1 class="font-bold text-[28px] leading-[42px] text-dark mb-[6px]">
                                   {{ $item->name }}
                                </h1>
                                <p class="text-primary font-semibold text-base mb-[10px]">{{ $item->brand->name }}</p>
                                <p class="text-secondary text-sm font-normal mb-[10px]">{{ $item->modelBrand->name }}</p>

                                
                            </div>
                            <!-- Features -->
                            <ul class="flex flex-col gap-4 flex-start pt-5 pb-[25px]">
                                <li class="flex items-center gap-3 text-base font-semibold text-dark">
                                    <img src="../assets/svgs/ic-checkDark.svg" alt="">
                                    350 Horse Power
                                </li>
                                <li class="flex items-center gap-3 text-base font-semibold text-dark">
                                    <img src="../assets/svgs/ic-checkDark.svg" alt="">
                                    4 Seat People
                                </li>
                                <li class="flex items-center gap-3 text-base font-semibold text-dark">
                                    <img src="../assets/svgs/ic-checkDark.svg" alt="">
                                    Supercharge Turbo
                                </li>
                                <li class="flex items-center gap-3 text-base font-semibold text-dark">
                                    <img src="../assets/svgs/ic-checkDark.svg" alt="">
                                    8 Speeds AT
                                </li>
                                <li class="flex items-center gap-3 text-base font-semibold text-dark">
                                    <img src="../assets/svgs/ic-checkDark.svg" alt="">
                                    A.I Full Tracking
                                </li>
                                <li class="flex items-center gap-3 text-base font-semibold text-dark">
                                    <img src="../assets/svgs/ic-checkDark.svg" alt="">
                                    Semi Autonomous
                                </li>
                                <li class="flex items-center gap-3 text-base font-semibold text-dark">
                                    <img src="../assets/svgs/ic-checkDark.svg" alt="">
                                    Apple CarPlay
                                </li>
                                <li class="flex items-center gap-3 text-base font-semibold text-dark">
                                    <img src="../assets/svgs/ic-checkDark.svg" alt="">
                                    Pickup Delivery
                                </li>
                            </ul>
                            <!-- Price, CTA Button -->
                            <div class="flex items-center justify-between gap-4 pt-5 mt-auto">
                                <div>
                                    <p class="font-bold text-dark text-[22px]">
                                       {{ $item->rental_rate }}
                                    </p>
                                    <p class="text-base font-normal text-secondary">
                                        /day
                                    </p>
                                </div>
                                <div class="w-full max-w-[70%]">
                                    <!-- Button Primary -->
                                    <div class="p-1 rounded-full bg-primary group">
                                        <a href="{{ route('rent', $item->slug) }}" class="btn-primary">
                                            <p>
                                                Rent Now
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</x-main-layout>