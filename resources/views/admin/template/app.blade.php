<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard') - Asset Kelas</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Phosphor Icons --}}
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

</head>

<body class="bg-gray-50 text-gray-800">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        @include('admin.template.sidebar')

        {{-- Bagian kanan --}}
        <div class="flex-1 ml-64 flex flex-col min-h-screen">

            {{-- Navbar --}}
            @include('admin.template.navbar')

            {{-- Content --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>

            {{-- Footer --}}
            @include('admin.template.footer')

        </div>

    </div>

</body>

</html>