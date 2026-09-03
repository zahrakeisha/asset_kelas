<header class="h-20 bg-white border-b border-gray-200
               flex items-center justify-between px-6">

    {{-- Judul halaman --}}
    <div>

        <h2 class="text-lg font-semibold text-gray-800">
            @yield('page-title', 'Dashboard')
        </h2>

        <p class="text-xs text-gray-400">
            Sistem Manajemen Asset Kelas
        </p>

    </div>


    {{-- Bagian kanan --}}
    <div class="flex items-center gap-5">

        {{-- Notification --}}
        <button
            class="relative w-10 h-10 rounded-xl
                   flex items-center justify-center
                   hover:bg-gray-100 transition">

            <i class="ph ph-bell text-xl text-gray-600"></i>

            <span class="absolute top-2 right-2
                         w-2 h-2 bg-red-500 rounded-full">
            </span>

        </button>


        {{-- Profile --}}
        <div class="flex items-center gap-3
                    pl-5 border-l border-gray-200">

            <div class="w-10 h-10 rounded-full
                        bg-indigo-100
                        flex items-center justify-center">

                <i class="ph ph-user text-xl text-indigo-600"></i>

            </div>

            <div>

                <p class="text-sm font-semibold text-gray-700">

                    {{ auth()->user()->nama ?? auth()->user()->name }}

                </p>

                <p class="text-xs text-gray-400">
                    Administrator
                </p>

            </div>

        </div>

    </div>

</header>