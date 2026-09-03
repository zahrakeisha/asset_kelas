<aside class="fixed top-0 left-0 z-40 w-64 h-screen bg-white border-r border-gray-200">

    {{-- Logo --}}
    <div class="h-20 px-6 flex items-center border-b border-gray-200">

        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-xl bg-indigo-600
                        flex items-center justify-center">

                <i class="ph ph-package text-2xl text-white"></i>

            </div>

            <div>

                <h1 class="text-lg font-bold text-gray-800">
                    Asset Kelas
                </h1>

                <p class="text-xs text-gray-400">
                    Admin Panel
                </p>

            </div>

        </div>

    </div>


    {{-- Navigation --}}
    <nav class="p-4">

        {{-- Menu utama --}}
        <p class="px-3 mb-3 text-xs font-semibold
                  text-gray-400 uppercase tracking-wider">

            Menu Utama

        </p>


        {{-- Dashboard --}}
        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3 px-3 py-3 mb-1
                  rounded-xl text-gray-600
                  hover:bg-indigo-50 hover:text-indigo-600
                  transition duration-200">

            <i class="ph ph-squares-four text-xl"></i>

            <span class="text-sm font-medium">
                Dashboard
            </span>

        </a>


        {{-- User --}}
        <a href="{{ route('admin.users.index') }}"
           class="flex items-center gap-3 px-3 py-3 mb-1
                  rounded-xl text-gray-600
                  hover:bg-indigo-50 hover:text-indigo-600
                  transition duration-200">

            <i class="ph ph-users text-xl"></i>

            <span class="text-sm font-medium">
                User
            </span>

        </a>


        {{-- Barang --}}
        <a href="{{ route('admin.barang.index') }}"
           class="flex items-center gap-3 px-3 py-3 mb-1
                  rounded-xl text-gray-600
                  hover:bg-indigo-50 hover:text-indigo-600
                  transition duration-200">

            <i class="ph ph-package text-xl"></i>

            <span class="text-sm font-medium">
                Barang
            </span>

        </a>


        {{-- Kategori --}}
        <a href="{{ route('admin.kategori.index') }}"
           class="flex items-center gap-3 px-3 py-3 mb-1
                  rounded-xl text-gray-600
                  hover:bg-indigo-50 hover:text-indigo-600
                  transition duration-200">

            <i class="ph ph-folders text-xl"></i>

            <span class="text-sm font-medium">
                Kategori
            </span>

        </a>


        {{-- Ruangan --}}
        <a href="{{ route('admin.ruangan.index') }}"
           class="flex items-center gap-3 px-3 py-3 mb-1
                  rounded-xl text-gray-600
                  hover:bg-indigo-50 hover:text-indigo-600
                  transition duration-200">

            <i class="ph ph-buildings text-xl"></i>

            <span class="text-sm font-medium">
                Ruangan
            </span>

        </a>


        {{-- Masa Ekonomis --}}
        <a href="{{ route('admin.masa_ekonomis.index') }}"
           class="flex items-center gap-3 px-3 py-3 mb-1
                  rounded-xl text-gray-600
                  hover:bg-indigo-50 hover:text-indigo-600
                  transition duration-200">

            <i class="ph ph-calendar text-xl"></i>

            <span class="text-sm font-medium">
                Masa Ekonomis
            </span>

        </a>


        {{-- Pembatas --}}
        <div class="border-t border-gray-100 my-5"></div>


        {{-- Transaksi --}}
        <p class="px-3 mb-3 text-xs font-semibold
                  text-gray-400 uppercase tracking-wider">

            Transaksi

        </p>


        {{-- Pengajuan Barang --}}
        <a href="{{ route('admin.pengajuan_barang.index') }}"
           class="flex items-center gap-3 px-3 py-3 mb-1
                  rounded-xl text-gray-600
                  hover:bg-indigo-50 hover:text-indigo-600
                  transition duration-200">

            <i class="ph ph-clipboard-text text-xl"></i>

            <span class="text-sm font-medium">
                Pengajuan Barang
            </span>

        </a>


        {{-- Logout --}}
        <div class="border-t border-gray-100 my-5"></div>

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button type="submit"
                    class="w-full flex items-center gap-3
                           px-3 py-3 rounded-xl
                           text-gray-600
                           hover:bg-red-50 hover:text-red-600
                           transition duration-200">

                <i class="ph ph-sign-out text-xl"></i>

                <span class="text-sm font-medium">
                    Logout
                </span>

            </button>

        </form>

    </nav>

</aside>