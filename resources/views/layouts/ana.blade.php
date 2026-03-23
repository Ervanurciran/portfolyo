<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('baslik') | Portfolyo </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans">

    {{-- NAV --}}
    <nav class="bg-white border-b border-orange-100 px-8 py-4 flex justify-between items-center sticky top-0 z-50 shadow-sm">
        <a href="/" class="text-2xl font-bold text-orange-500 tracking-tight">✦ Portfolyo</a>

        <div class="flex gap-8 items-center">
            <a href="/" class="text-gray-600 hover:text-orange-500 transition font-medium">Ana Sayfa</a>
            <a href="/projeler" class="text-gray-600 hover:text-orange-500 transition font-medium">Projeler</a>
            <a href="/iletisim" class="bg-orange-500 text-white px-5 py-2 rounded-full hover:bg-orange-600 transition font-medium">İletişim</a>
        </div>

        @auth
        <div class="flex gap-4 items-center text-sm">
            <a href="/admin" class="text-gray-500 hover:text-orange-500 transition">Admin</a>
            <a href="/admin/mesajlar" class="text-gray-500 hover:text-orange-500 transition">Mesajlar</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="bg-red-500 text-white px-4 py-1 rounded-full hover:bg-red-600 transition">Çıkış</button>
            </form>
        </div>
        @endauth
    </nav>

    {{-- İÇERİK --}}
    <main>
        @yield('icerik')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-gray-400 text-center py-8 mt-20">
        <p class="text-sm">© 2026 <span class="text-orange-400 font-medium"></span> · Tüm hakları saklıdır.</p>
    </footer>

</body>
</html>