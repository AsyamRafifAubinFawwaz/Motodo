<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motodo - Belajar Jadi Lebih Teratur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        @keyframes blob {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>
</head>

<body class="antialiased text-gray-900 bg-[#f3f5f7]">

    @include('Landing.Layout.navbar')

    <main>
        <section id="beranda" class="relative pt-3 pb-20 lg:pt-3 lg:pb-28 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div class="text-center lg:text-left">


                        <h1
                            class="text-5xl lg:text-7xl font-extrabold text-[#0f172a] leading-tight tracking-tight mb-6">
                            Belajar Jadi <br>
                            Lebih Teratur.
                        </h1>

                        <p class="text-lg text-gray-500 mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                            Agar tugas tidak lagi membuat pusing. Di Motodo, guru dan siswa memiliki alur kerja yang
                            jelas, rapi, dan sangat mudah diikuti.
                        </p>

                       
                    </div>

                    <div class="relative lg:h-[600px] flex items-center justify-center">
                        <div class="relative w-full max-w-lg mx-auto">
                            <div
                                class="absolute top-0 right-0 -mr-20 -mt-20 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                            </div>
                            <div
                                class="absolute -bottom-8 -left-20 w-72 h-72 bg-cyan-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
                            </div>

                            <div class="relative p-4 ">
                                <img src="{{ asset('image/hero-logo.png') }}" class="w-full h-full object-cover" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- <p class="text-center text-sm text-gray-500 mb-6">Dipercaya oleh sekolah dan lembaga pendidikan
                    terkemuka</p>
                <div
                    class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                    <div class="flex items-center gap-2 text-xl font-bold text-gray-800">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
                        </svg> SMK Nusantara
                    </div>
                    <div class="flex items-center gap-2 text-xl font-bold text-gray-800">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 7H7v6h6V7z" />
                        </svg> SMA Harapan
                    </div>
                    <div class="flex items-center gap-2 text-xl font-bold text-gray-800">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2L2 7l8 5 8-5-8-5z" />
                        </svg> Universitas Maju
                    </div>
                    <div class="flex items-center gap-2 text-xl font-bold text-gray-800">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0z" />
                        </svg> Bimbel Cerdas
                    </div>
                </div>
            </div>  -->
        </section>

        <section id="cara-kerja" class="py-24 bg-white relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-px bg-linear-to-r from-transparent via-gray-100 to-transparent">
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-20">
                    <span
                        class="text-[#0082FB] font-semibold tracking-wider text-sm uppercase mb-3 block">Keunggulan</span>
                    <h2 class="text-4xl lg:text-5xl font-extrabold text-[#0A0F1C] mb-6 tracking-tight">Kenapa Harus
                        Motodo?</h2>
                    <p class="text-lg text-gray-500 max-w-2xl mx-auto leading-relaxed">
                        Kami merancang fitur yang membuat proses belajar mengajar menjadi lebih <span
                            class="text-[#0082FB] font-medium">simpel</span> dan <span
                            class="text-[#0082FB] font-medium">menyenangkan</span>.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
                    <div
                        class="group bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-blue-50/80 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#0082FB] group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7 text-[#0082FB] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#0A0F1C] mb-3 group-hover:text-[#0082FB] transition-colors">
                            Alur Kerja Jelas</h3>
                        <p class="text-gray-500 leading-relaxed text-sm">Semua tugas tertata rapi dengan instruksi
                            lengkap, memudahkan siswa memahami ekspektasi.</p>
                    </div>

                    <div
                        class="group bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-cyan-50/80 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#0082FB] group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7 text-[#0082FB] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#0A0F1C] mb-3 group-hover:text-[#0082FB] transition-colors">
                            Tugas Terukur</h3>
                        <p class="text-gray-500 leading-relaxed text-sm">Prioritas dan deadline yang jelas membantu
                            mengatur waktu belajar dengan lebih efisien.</p>
                    </div>

                    <div
                        class="group bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-blue-50/80 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#0082FB] group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7 text-[#0082FB] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#0A0F1C] mb-3 group-hover:text-[#0082FB] transition-colors">
                            Pelacakan Rapi</h3>
                        <p class="text-gray-500 leading-relaxed text-sm">Dashboard informatif bagi guru untuk memantau
                            perkembangan setiap siswa secara real-time.</p>
                    </div>

                    <div
                        class="group bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-cyan-50/80 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#0082FB] group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7 text-[#0082FB] group-hover:text-white transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#0A0F1C] mb-3 group-hover:text-[#0082FB] transition-colors">
                            Fokus Belajar</h3>
                        <p class="text-gray-500 leading-relaxed text-sm">Interface bebas distraksi membuat guru dan
                            siswa tetap fokus pada esensi pembelajaran.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="keunggulan" class="py-24 bg-[#f8fbff] relative">
            <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-10"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-20">
                    <span class="text-[#0082FB] font-semibold tracking-wider text-sm uppercase mb-3 block">Fitur
                        Unggulan</span>
                    <h2 class="text-4xl lg:text-5xl font-extrabold text-[#0A0F1C] mb-6 tracking-tight">Solusi Lengkap
                        untuk Semua</h2>
                    <p class="text-lg text-gray-500 max-w-2xl mx-auto leading-relaxed">Platform yang menjembatani
                        kebutuhan administratif guru dan kemudahan akses belajar siswa.</p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-stretch">

                    <div
                        class="group bg-white rounded-[2.5rem] shadow-xl border border-blue-100/50 p-10 lg:p-12 hover:shadow-2xl hover:shadow-blue-200/20 transition-all duration-500 flex flex-col relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-64 h-64 bg-linear-to-bl from-blue-50 to-transparent rounded-bl-[10rem] -mr-16 -mt-16 z-0">
                        </div>

                        <div class="relative z-10 flex-1">
                            <div
                                class="w-16 h-16 bg-linear-to-br from-[#0064E0] to-[#0082FB] rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-blue-500/30">
                               @include('Landing.icons.teacher')
                            </div>
                            <h3
                                class="text-3xl font-extrabold text-[#0A0F1C] mb-4 group-hover:text-[#0082FB] transition-colors">
                                Untuk Admin / Guru</h3>
                            <p class="text-gray-500 mb-10 text-lg leading-relaxed">Kelola kelas, tugas, dan nilai siswa
                                dalam satu dashboard yang intuitif dan powerfull.</p>

                            <ul class="space-y-6">
                                <li class="flex items-start gap-4 group/item">
                                    <div
                                        class="w-6 h-6 bg-blue-50 rounded-full flex items-center justify-center shrink-0 mt-1 transition-colors group-hover/item:bg-[#0082FB]">
                                        <svg class="w-3.5 h-3.5 text-[#0082FB] group-hover/item:text-white transition-colors"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 font-medium">Manajemen tugas terstruktur</span>
                                </li>
                                <li class="flex items-start gap-4 group/item">
                                    <div
                                        class="w-6 h-6 bg-blue-50 rounded-full flex items-center justify-center shrink-0 mt-1 transition-colors group-hover/item:bg-[#0082FB]">
                                        <svg class="w-3.5 h-3.5 text-[#0082FB] group-hover/item:text-white transition-colors"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 font-medium">Detail lengkap (deadline & prioritas)</span>
                                </li>
                                <li class="flex items-start gap-4 group/item">
                                    <div
                                        class="w-6 h-6 bg-blue-50 rounded-full flex items-center justify-center shrink-0 mt-1 transition-colors group-hover/item:bg-[#0082FB]">
                                        <svg class="w-3.5 h-3.5 text-[#0082FB] group-hover/item:text-white transition-colors"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 font-medium">Pantau progres siswa real-time</span>
                                </li>
                                <li class="flex items-start gap-4 group/item">
                                    <div
                                        class="w-6 h-6 bg-blue-50 rounded-full flex items-center justify-center shrink-0 mt-1 transition-colors group-hover/item:bg-[#0082FB]">
                                        <svg class="w-3.5 h-3.5 text-[#0082FB] group-hover/item:text-white transition-colors"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 font-medium">Ekspor laporan ke PDF otomatis</span>
                                </li>
                            </ul>
                        </div>
                       
                    </div>

                    <div
                        class="group bg-[#0A0F1C] text-white rounded-[2.5rem] shadow-2xl p-10 lg:p-12 hover:shadow-2xl hover:shadow-gray-900/50 transition-all duration-500 flex flex-col relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-64 h-64 bg-linear-to-bl from-white/5 to-transparent rounded-bl-[10rem] -mr-16 -mt-16 z-0">
                        </div>

                        <div class="relative z-10 flex-1">
                            <div
                                class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-8 border border-white/10">
                              @include('Landing.icons.student')
                            </div>
                            <h3
                                class="text-3xl font-extrabold text-white mb-4 group-hover:text-blue-300 transition-colors">
                                Untuk Siswa</h3>
                            <p class="text-gray-400 mb-10 text-lg leading-relaxed">Pengalaman belajar yang fokus dan
                                bebas stres. Kerjakan tugas tepat waktu tanpa drama.</p>

                            <ul class="space-y-6">
                                <li class="flex items-start gap-4">
                                    <div
                                        class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center shrink-0 mt-1">
                                        <svg class="w-3.5 h-3.5 text-blue-300" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 font-medium">Daftar tugas (To-Do) yang jelas</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div
                                        class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center shrink-0 mt-1">
                                        <svg class="w-3.5 h-3.5 text-blue-300" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 font-medium">Instruksi lengkap & mudah dipahami</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div
                                        class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center shrink-0 mt-1">
                                        <svg class="w-3.5 h-3.5 text-blue-300" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 font-medium">Upload tugas cepat (Drag & Drop)</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div
                                        class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center shrink-0 mt-1">
                                        <svg class="w-3.5 h-3.5 text-blue-300" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 font-medium">Antarmuka simpel, tanpa ribet</span>
                                </li>
                            </ul>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>


    </main>

    @include('Landing.Layout.footer')

</body>

</html>