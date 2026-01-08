<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/motodo.png') }}" type="image/png">
    <title>Motodo Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#F1F5F8] to-[#E5E7EB] flex justify-center items-center p-4">

<div class="max-w-5xl w-full bg-white shadow-2xl rounded-3xl overflow-hidden flex flex-col lg:flex-row">

    <!-- Left Section -->
    <div class="lg:w-1/2 p-8 sm:p-12 flex flex-col justify-center">

        <div class="mb-10">
            <div class="flex items-center gap-3 mb-6">
                <img src="{{ asset('image/motodo.png') }}"
                    class="h-18 w-18 rounded-xl shadow-md object-cover"
                    alt="Motodo Logo">
                <div>
                    <h1 class="text-2xl font-bold text-[#1C2B33]">Motodo</h1>
                    <p class="text-xs text-gray-500">Task Management</p>
                </div>
            </div>

            <h2 class="text-3xl font-bold text-[#1C2B33] mb-2">
                Buat Akun Baru
            </h2>
            <p class="text-gray-600">Daftar untuk mulai mengelola tugas Anda</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
                <div class="flex">
                    <svg class="w-5 h-5 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414
                              1.414L8.586 10l-1.293 1.293a1 1 0 101.414
                              1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414
                              10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586
                              8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        @foreach ($errors->all() as $error)
                            <p class="text-sm text-red-600">{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <form class="space-y-5" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full px-4 py-3.5 rounded-xl font-medium bg-[#F1F5F8] border-2 border-transparent
                    focus:border-[#0082FB] focus:bg-white transition-all"
                    placeholder="Nama Anda"
                    required>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="w-full px-4 py-3.5 rounded-xl font-medium bg-[#F1F5F8] border-2 border-transparent
                    focus:border-[#0082FB] focus:bg-white transition-all"
                    placeholder="email@example.com"
                    required>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input
                    type="password"
                    name="password"
                    class="w-full px-4 py-3.5 rounded-xl font-medium bg-[#F1F5F8] border-2 border-transparent
                    focus:border-[#0082FB] focus:bg-white transition-all"
                    placeholder="••••••••"
                    required>
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="w-full px-4 py-3.5 rounded-xl font-medium bg-[#F1F5F8] border-2 border-transparent
                    focus:border-[#0082FB] focus:bg-white transition-all"
                    placeholder="••••••••"
                    required>
            </div>

            <!-- Role -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Daftar Sebagai</label>
                <select
                    name="role"
                    class="w-full px-4 py-3.5 rounded-xl font-medium bg-[#F1F5F8] border-2 border-transparent
                    focus:border-[#0082FB] focus:bg-white transition-all"
                    required>
                    <option value="">Pilih Role</option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="w-full py-4 rounded-xl font-semibold bg-gradient-to-r from-[#0082FB] to-[#0064E0]
                hover:shadow-lg hover:scale-[1.02] text-white transition-all flex items-center justify-center gap-2">
                Daftar
            </button>

            <p class="text-xs text-center text-gray-500">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-[#0082FB] font-medium hover:underline">
                    Masuk di sini
                </a>
            </p>
        </form>

    </div>

    <!-- Right Section (Illustration) -->
    <div class="lg:w-1/2 bg-gradient-to-br from-[#0082FB] to-[#0064E0] hidden lg:flex items-center justify-center p-12 relative">
        <img src="{{ asset('image/icon/data-analysis-animate.svg') }}"
             class="w-80 h-80 drop-shadow-2xl relative z-10">
        <div class="absolute inset-0 opacity-5">
            <div class="w-64 h-64 bg-white rounded-full absolute top-0 left-0 -ml-20 -mt-20"></div>
            <div class="w-96 h-96 bg-white rounded-full absolute bottom-0 right-0 -mr-40 -mb-40"></div>
        </div>
    </div>
</div>

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        timer: 2000,
        showConfirmButton: false,
    });
</script>
@endif

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: '{{ session('error') }}',
        confirmButtonColor: '#0082FB'
    });
</script>
@endif

</body>
</html>
