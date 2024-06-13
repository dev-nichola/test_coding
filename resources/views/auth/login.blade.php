<x-auth-layout>
    <section class="bg-darkGrey relative py-[70px]">
        <div class="container">
            <div class="flex flex-col items-center">
                <header class="mb-[30px] text-center">
                    <h2 class="font-bold text-dark text-[26px] mb-1">
                        Sign In
                    </h2>
                    <p class="text-base text-secondary">We will help you get ready today</p>
                </header>
                <form action="{{ route("credentials") }}" method="POST" class="bg-white p-[30px] pb-10 rounded-3xl max-w-[490px] w-full">
                    @method("POST")
                    @csrf

                    <div class="grid grid-cols-2 items-center gap-y-6 gap-x-4 lg:gap-x-[30px]">
                        <div class="flex flex-col col-span-2 gap-3">
                            <label for="" class="text-base font-semibold text-dark">
                                Email Address
                            </label>
                            <input type="email" name="email" id="email"
                                class="text-base font-medium focus:border-primary focus:outline-none placeholder:text-secondary placeholder:font-normal px-[26px] py-4 border border-grey rounded-[50px]"
                                placeholder="Insert Email Address" value="admin@admin.com">
                        </div>
                        <div class="flex flex-col col-span-2 gap-3">
                            <label for="" class="text-base font-semibold text-dark">
                                Password
                            </label>
                            <input type="password" name="password" id="password"
                                class="text-base font-medium focus:border-primary focus:outline-none placeholder:text-secondary placeholder:font-normal px-[26px] py-4 border border-grey rounded-[50px]"
                                placeholder="Insert password" value="123456">
                        </div>
                        <div class="col-span-2 mt-[26px]">
                            <div class="p-1 rounded-full w-full flex justify-center bg-primary group">
                                <button class="btn-primary">Login</button>
                                </a>
                            </div>
                        </div>                       
                </form>
            </div>
        </div>
    </section>
</x-auth-layout>
