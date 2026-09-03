@extends('admin.template.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('content')

    {{-- Header --}}
    <div class="mb-6">

        <h1 class="text-2xl font-bold text-gray-800">
            Dashboard
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Selamat datang di sistem manajemen Asset Kelas.
        </p>

    </div>


    {{-- Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2
                xl:grid-cols-4 gap-5">


        {{-- User --}}
        <div class="bg-white border border-gray-200
                    rounded-2xl p-5">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm text-gray-500">
                        Total User
                    </p>

                    <h3 class="text-3xl font-bold
                               text-gray-800 mt-2">

                        0

                    </h3>

                </div>

                <div class="w-12 h-12 rounded-xl
                            bg-blue-50 flex items-center
                            justify-center">

                    <i class="ph ph-users
                              text-2xl text-blue-600">
                    </i>

                </div>

            </div>

        </div>


        {{-- Barang --}}
        <div class="bg-white border border-gray-200
                    rounded-2xl p-5">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm text-gray-500">
                        Total Barang
                    </p>

                    <h3 class="text-3xl font-bold
                               text-gray-800 mt-2">

                        0

                    </h3>

                </div>

                <div class="w-12 h-12 rounded-xl
                            bg-green-50 flex items-center
                            justify-center">

                    <i class="ph ph-package
                              text-2xl text-green-600">
                    </i>

                </div>

            </div>

        </div>


        {{-- Ruangan --}}
        <div class="bg-white border border-gray-200
                    rounded-2xl p-5">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm text-gray-500">
                        Total Ruangan
                    </p>

                    <h3 class="text-3xl font-bold
                               text-gray-800 mt-2">

                        0

                    </h3>

                </div>

                <div class="w-12 h-12 rounded-xl
                            bg-purple-50 flex items-center
                            justify-center">

                    <i class="ph ph-buildings
                              text-2xl text-purple-600">
                    </i>

                </div>

            </div>

        </div>


        {{-- Pengajuan --}}
        <div class="bg-white border border-gray-200
                    rounded-2xl p-5">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-sm text-gray-500">
                        Total Pengajuan
                    </p>

                    <h3 class="text-3xl font-bold
                               text-gray-800 mt-2">

                        0

                    </h3>

                </div>

                <div class="w-12 h-12 rounded-xl
                            bg-orange-50 flex items-center
                            justify-center">

                    <i class="ph ph-clipboard-text
                              text-2xl text-orange-600">
                    </i>

                </div>

            </div>

        </div>

    </div>


    {{-- Pengajuan Terbaru --}}
    <div class="mt-6 bg-white border border-gray-200
                rounded-2xl">

        <div class="p-5 border-b border-gray-200
                    flex items-center justify-between">

            <div>

                <h2 class="font-semibold text-gray-800">
                    Pengajuan Barang Terbaru
                </h2>

                <p class="text-xs text-gray-400 mt-1">
                    Daftar pengajuan barang terbaru
                </p>

            </div>

            <a href="{{ route('admin.pengajuan_barang.index') }}"
               class="text-sm font-medium text-indigo-600
                      hover:text-indigo-700">

                Lihat semua →

            </a>

        </div>


        <div class="overflow-x-auto">

            <table class="w-full text-sm">

                <thead class="bg-gray-50">

                    <tr>

                        <th class="text-left px-5 py-4
                                   font-medium text-gray-500">
                            No
                        </th>

                        <th class="text-left px-5 py-4
                                   font-medium text-gray-500">
                            Peminjam
                        </th>

                        <th class="text-left px-5 py-4
                                   font-medium text-gray-500">
                            Barang
                        </th>

                        <th class="text-left px-5 py-4
                                   font-medium text-gray-500">
                            Jumlah
                        </th>

                        <th class="text-left px-5 py-4
                                   font-medium text-gray-500">
                            Status
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <tr class="border-t border-gray-100">

                        <td class="px-5 py-4">
                            1
                        </td>

                        <td class="px-5 py-4">
                            -
                        </td>

                        <td class="px-5 py-4">
                            -
                        </td>

                        <td class="px-5 py-4">
                            -
                        </td>

                        <td class="px-5 py-4">

                            <span class="px-3 py-1 rounded-full
                                         bg-gray-100 text-gray-500
                                         text-xs">

                                Belum ada data

                            </span>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

@endsection