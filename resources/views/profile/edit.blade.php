@extends('layout.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Edit Profil</h2>

    @if(session('success'))
        <div class="p-3 mb-4 text-green-700 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="text-sm text-gray-600 dark:text-gray-300">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}"
                class="w-full p-3 mt-1 rounded-xl border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:ring-0">
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="text-sm text-gray-600 dark:text-gray-300">Email</label>
            <input type="email" name="email" value="{{ $user->email }}"
                class="w-full p-3 mt-1 rounded-xl border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:ring-0">
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="text-sm text-gray-600 dark:text-gray-300">Password Baru (Opsional)</label>
            <input type="password" name="password"
                class="w-full p-3 mt-1 rounded-xl border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:ring-0">
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="text-sm text-gray-600 dark:text-gray-300">Konfirmasi Password</label>
            <input type="password" name="password_confirmation"
                class="w-full p-3 mt-1 rounded-xl border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:ring-0">
        </div>

        <button
            class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition-all">
            Simpan Perubahan
        </button>
    </form>
</div>
@endsection
