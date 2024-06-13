<div>
    <div id="Sidebar"
            class="no-scrollbar flex h-screen w-[280px] shrink-0 flex-col gap-[30px] overflow-y-scroll p-[30px]">
            <div class="flex justify-start">
                <h1 class="text-lg font-bold"><i class="fa-brands fa-laravel"></i>  VROM </h1>
            </div>
            <h3 class="text-sm font-semibold uppercase text-gray-500">Home</h3>
            <x-side-link to="#"><i class="fas fa-house"></i>  Dashboard</x-side-link>

            <small class="text-sm font-semibold uppercase text-gray-500">Master</small>

            <x-side-link to="#"><i class="fas fa-car"></i>  Mobil</x-side-link>
            <x-side-link to="#"><i class="fas fa-folder"></i>  Model</x-side-link>
            <x-side-link to="{{ route('brand') }}"><i class="fas fa-bandage"></i>  Brand</x-side-link>

            <small class="text-sm font-semibold uppercase text-gray-500">Rentals</small>
            <x-side-link to="#"><i class="fas fa-list"></i>  Daftar Rental</x-side-link>

            <small class="text-sm font-semibold uppercase text-gray-500">Return</small>
            <x-side-link to="#"><i class="fas fa-rotate-left"></i>  Daftar Pengembalian</x-side-link>

            <small class="text-sm font-semibold uppercase text-gray-500">Users</small>
            <x-side-link to="#"><i class="fas fa-check"></i>  Permintaan Status</x-side-link>
            <x-side-link to="#"><i class="fas fa-users"></i>  Daftar Pengguna</x-side-link>

            <small class="text-sm font-semibold uppercase text-gray-500">Logout</small>
            <x-side-link to="#"><i class="fas fa-users"></i>  Keluar</x-side-link>
        </div>
</div>