<x-main-layout>
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
                    @foreach ($fetchings as $item)
                    <div class="card-popular">
                        <div>
                            <h5 class="text-dark mb-[2px] text-lg font-bold">
                                {{ $item->name }}
                            </h5>
                            <a href="{{ route('detail', $item->slug) }}" class="absolute inset-0"></a>        </div>
                        <img src="{{ asset('storage/' . $item->image) }}" class="h-[150px] w-full min-w-[216px] rounded-[18px]"
                            alt="">
                        <div class="flex items-center justify-between gap-1">
                            <p class="text-secondary text-sm font-normal">
                                <span class="text-primary text-base font-bold">Rp. {{ $item->rental_rate }}</span>/day
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

   

    @include("partials.footer")
</x-main-layout>