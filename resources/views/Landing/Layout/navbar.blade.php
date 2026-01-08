<nav class="bg-white/80 backdrop-blur-md border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg flex items-center justify-center">
                    <img src="{{ asset('image/motodo.png') }}" class="h-18 w-18 rounded-xl shadow-md object-cover"
                        alt="Motodo Logo">
                </div>
                <span class="text-xl font-bold text-gray-900">Motodo.</span>
            </div>

            <div class="hidden md:flex items-center gap-8">
                <a href="#beranda" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition">Beranda</a>
                <a href="#cara-kerja" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition">Cara Kerja</a>
                <a href="#keunggulan" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition">Keunggulan</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}"
                    class="text-sm font-medium text-gray-700 hover:text-blue-600 transition hidden sm:block">Masuk</a>
                <a href="{{ route('register') }}"
                    class="px-6 py-2 text-sm font-semibold text-white bg-[#0082FB] rounded-full hover:bg-[#0082FB]/80 transition">Coba
                    Gratis</a>
            </div>
        </div>
    </div>
</nav>