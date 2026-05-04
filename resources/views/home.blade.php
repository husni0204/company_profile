<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $metaDescription }}">

        <title>{{ $pageTitle }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gradient-to-b from-white via-sky-50/60 to-blue-50 text-slate-900 dark:bg-gradient-to-b dark:from-blue-950 dark:via-slate-950 dark:to-blue-950 dark:text-slate-100">
        <header class="sticky top-0 z-50 border-b border-blue-100/90 bg-white/90 backdrop-blur dark:border-blue-900/80 dark:bg-blue-950/90">
            <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('home') }}" class="group flex flex-col leading-tight">
                    <span class="text-lg font-bold tracking-tight text-blue-950 dark:text-white">{{ $companyName }}</span>
                    <span class="text-xs font-medium text-blue-600 dark:text-sky-300">Automotive stamping & body</span>
                </a>
                <nav class="hidden items-center gap-8 text-sm font-medium text-slate-600 dark:text-slate-300 md:flex">
                    <a href="#tentang" class="transition hover:text-blue-700 dark:hover:text-sky-300">Tentang</a>
                    <a href="#layanan" class="transition hover:text-blue-700 dark:hover:text-sky-300">Layanan</a>
                    <a href="#keunggulan" class="transition hover:text-blue-700 dark:hover:text-sky-300">Keunggulan</a>
                    <a href="#kontak" class="transition hover:text-blue-700 dark:hover:text-sky-300">Kontak</a>
                </nav>
                <div class="flex items-center gap-3">
                    @if (Route::has('login'))
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-lg bg-gradient-to-r from-blue-600 to-sky-500 px-4 py-2 text-sm font-semibold text-white shadow-md shadow-blue-500/25 transition hover:from-blue-500 hover:to-sky-400 dark:from-blue-500 dark:to-sky-400 dark:hover:from-blue-400 dark:hover:to-sky-300"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="hidden rounded-lg border border-blue-200 bg-white/80 px-4 py-2 text-sm font-semibold text-blue-800 transition hover:border-blue-300 hover:bg-blue-50 sm:inline-block dark:border-blue-700 dark:bg-blue-900/50 dark:text-sky-100 dark:hover:bg-blue-900"
                            >
                                Masuk
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
        </header>

        <main>
            <section class="relative overflow-hidden border-b border-blue-100 bg-gradient-to-br from-blue-700 via-blue-600 to-sky-500 text-white dark:border-blue-900 dark:from-blue-900 dark:via-blue-800 dark:to-sky-700">
                <div class="pointer-events-none absolute inset-0" aria-hidden="true">
                    <div class="absolute inset-0 bg-gradient-to-t from-white/10 via-transparent to-white/5"></div>
                    <div class="absolute -left-32 top-0 h-96 w-96 rounded-full bg-white/25 blur-3xl"></div>
                    <div class="absolute -right-20 bottom-0 h-80 w-80 rounded-full bg-sky-200/40 blur-3xl"></div>
                    <div class="absolute bottom-0 left-1/2 h-64 w-[120%] -translate-x-1/2 bg-gradient-to-t from-white/20 to-transparent"></div>
                </div>
                <div class="relative mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-28 lg:px-8 lg:py-32">
                    <p class="text-sm font-semibold uppercase tracking-widest text-sky-100">Manufaktur otomotif</p>
                    <h1 class="mt-4 max-w-3xl text-4xl font-bold tracking-tight text-white drop-shadow-sm sm:text-5xl lg:text-6xl">
                        Presisi stamping untuk body mobil Anda
                    </h1>
                    <p class="mt-6 max-w-2xl text-lg leading-relaxed text-blue-50">
                        {{ $companyName }} bergerak di bidang <strong class="font-semibold text-white">manufaktur otomotif</strong>,
                        dengan fokus pada <strong class="font-semibold text-sky-100">stamping body mobil</strong>—komponen bodi
                        kendaraan yang diproduksi melalui proses press logam presisi untuk memenuhi standar OEM dan industri.
                    </p>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <a
                            href="#layanan"
                            class="inline-flex items-center justify-center rounded-lg bg-white px-6 py-3 text-sm font-semibold text-blue-700 shadow-lg shadow-blue-900/20 transition hover:bg-blue-50"
                        >
                            Lihat layanan
                        </a>
                        <a
                            href="#kontak"
                            class="inline-flex items-center justify-center rounded-lg border border-white/40 bg-white/10 px-6 py-3 text-sm font-semibold text-white backdrop-blur transition hover:bg-white/20"
                        >
                            Hubungi kami
                        </a>
                    </div>
                </div>
            </section>

            <section id="tentang" class="mx-auto max-w-6xl scroll-mt-24 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
                            Tentang {{ $companyName }}
                        </h2>
                        <p class="mt-4 text-lg leading-relaxed text-slate-600 dark:text-slate-400">
                            Kami adalah mitra manufaktur yang mendukung rantai pasok otomotif nasional melalui kapabilitas
                            <span class="font-semibold text-slate-900 dark:text-slate-200">stamping logam</span> dan perakitan
                            komponen body kendaraan. Dengan peralatan press dan dies yang dirancang untuk volume produksi,
                            kami menghadirkan konsistensi dimensi, kekuatan material, dan efisiensi biaya untuk pelanggan industri.
                        </p>
                        <p class="mt-4 leading-relaxed text-slate-600 dark:text-slate-400">
                            Fokus kami mencakup panel bodi, rangka pendukung, dan bagian struktural yang membutuhkan toleransi
                            ketat—sesuai kebutuhan pabrikan kendaraan dan tier supplier di ekosistem otomotif.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-blue-100 bg-gradient-to-br from-white to-sky-50/80 p-8 shadow-sm shadow-blue-100/50 dark:border-blue-900 dark:from-blue-950 dark:to-blue-900/80">
                        <h3 class="text-sm font-semibold uppercase tracking-wide text-blue-700 dark:text-sky-300">Ringkasan bisnis</h3>
                        <dl class="mt-6 space-y-4 text-sm">
                            <div class="flex justify-between gap-4 border-b border-slate-100 pb-4 dark:border-slate-800">
                                <dt class="text-slate-500 dark:text-slate-400">Nama perusahaan</dt>
                                <dd class="font-medium text-slate-900 dark:text-white">{{ $companyName }}</dd>
                            </div>
                            <div class="flex justify-between gap-4 border-b border-slate-100 pb-4 dark:border-slate-800">
                                <dt class="text-slate-500 dark:text-slate-400">Industri</dt>
                                <dd class="font-medium text-slate-900 dark:text-white">Otomotif — manufaktur</dd>
                            </div>
                            <div class="flex justify-between gap-4 border-b border-slate-100 pb-4 dark:border-slate-800">
                                <dt class="text-slate-500 dark:text-slate-400">Spesialisasi</dt>
                                <dd class="max-w-[60%] text-right font-medium text-slate-900 dark:text-white">Stamping body mobil</dd>
                            </div>
                            <div class="flex justify-between gap-4">
                                <dt class="text-slate-500 dark:text-slate-400">Lokasi</dt>
                                <dd class="font-medium text-slate-900 dark:text-white">Indonesia</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>

            <section id="layanan" class="scroll-mt-24 border-y border-blue-100/80 bg-gradient-to-b from-white via-white to-sky-50/50 py-16 dark:border-blue-900 dark:from-blue-950/40 dark:via-blue-950/30 dark:to-blue-950/50 sm:py-24">
                <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">Layanan & kapabilitas</h2>
                        <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
                            Solusi dari material coil hingga komponen siap rakit untuk kebutuhan body kendaraan bermotor.
                        </p>
                    </div>
                    <ul class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <li class="rounded-xl border border-blue-100 bg-white p-6 shadow-sm shadow-blue-50/80 dark:border-blue-800 dark:bg-blue-950/60">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-500/10 text-blue-700 dark:bg-sky-500/15 dark:text-sky-300">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                </svg>
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">Stamping presisi</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Proses blanking, bending, dan forming pada coil atau sheet metal untuk panel dan bracket body.
                            </p>
                        </li>
                        <li class="rounded-xl border border-blue-100 bg-white p-6 shadow-sm shadow-blue-50/80 dark:border-blue-800 dark:bg-blue-950/60">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-500/10 text-blue-700 dark:bg-sky-500/15 dark:text-sky-300">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                </svg>
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">Body mobil</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Produksi komponen bodi sesuai spesifikasi desain kendaraan dan alur perakitan pabrik pelanggan.
                            </p>
                        </li>
                        <li class="rounded-xl border border-blue-100 bg-white p-6 shadow-sm shadow-blue-50/80 dark:border-blue-800 dark:bg-blue-950/60">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-500/10 text-blue-700 dark:bg-sky-500/15 dark:text-sky-300">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                </svg>
                            </div>
                            <h3 class="mt-4 text-lg font-semibold text-slate-900 dark:text-white">Kontrol kualitas</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Inspeksi dimensi dan uji material untuk memastikan komponen memenuhi persyaratan teknis dan keamanan.
                            </p>
                        </li>
                    </ul>
                </div>
            </section>

            <section id="keunggulan" class="mx-auto max-w-6xl scroll-mt-24 bg-gradient-to-b from-blue-50/40 via-transparent to-white px-4 py-16 dark:from-blue-950/30 dark:to-transparent sm:px-6 lg:px-8 lg:py-24">
                <h2 class="text-center text-3xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
                    Mengapa memilih kami
                </h2>
                <p class="mx-auto mt-4 max-w-2xl text-center text-lg text-slate-600 dark:text-slate-400">
                    Pengalaman di manufaktur otomotif dan komitmen pada ketepatan proses stamping menjadikan kami mitra yang andal.
                </p>
                <ol class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <li class="text-center">
                        <span class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-blue-600 to-sky-500 text-lg font-bold text-white shadow-md shadow-blue-500/30">1</span>
                        <h3 class="mt-4 font-semibold text-slate-900 dark:text-white">Fokus otomotif</h3>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Alur kerja disesuaikan dengan kebutuhan tier supplier dan OEM.</p>
                    </li>
                    <li class="text-center">
                        <span class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-blue-600 to-sky-500 text-lg font-bold text-white shadow-md shadow-blue-500/30">2</span>
                        <h3 class="mt-4 font-semibold text-slate-900 dark:text-white">Presisi dies</h3>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Perawatan dies dan engineering mendukung stabilitas produksi massal.</p>
                    </li>
                    <li class="text-center">
                        <span class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-blue-600 to-sky-500 text-lg font-bold text-white shadow-md shadow-blue-500/30">3</span>
                        <h3 class="mt-4 font-semibold text-slate-900 dark:text-white">Skalabilitas</h3>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Kapasitas produksi dirancang untuk mendukung volume body components.</p>
                    </li>
                    <li class="text-center">
                        <span class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-blue-600 to-sky-500 text-lg font-bold text-white shadow-md shadow-blue-500/30">4</span>
                        <h3 class="mt-4 font-semibold text-slate-900 dark:text-white">Kolaborasi</h3>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Tim teknis siap berdiskusi mulai dari prototipe hingga produksi seri.</p>
                    </li>
                </ol>
            </section>

            <section id="kontak" class="relative scroll-mt-24 overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-sky-800 py-16 text-white dark:from-blue-950 dark:via-blue-900 dark:to-sky-950 sm:py-24">
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-white/5 to-transparent" aria-hidden="true"></div>
                <div class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col items-start justify-between gap-10 lg:flex-row lg:items-center">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Diskusikan kebutuhan stamping Anda</h2>
                            <p class="mt-4 max-w-xl text-blue-100">
                                Hubungi {{ $companyName }} untuk konsultasi teknis, permintaan sampel, atau penawaran volume produksi
                                komponen body mobil.
                            </p>
                        </div>
                        <div class="w-full max-w-md rounded-xl border border-white/20 bg-white/10 p-6 backdrop-blur">
                            <p class="text-sm font-medium text-sky-200">Informasi kontak</p>
                            <p class="mt-3 text-sm text-blue-50">
                                Silakan sesuaikan alamat email, telepon, dan kantor pada konfigurasi aplikasi atau halaman admin sesuai kebijakan perusahaan Anda.
                            </p>
                            @if (Route::has('login'))
                                <a
                                    href="{{ route('login') }}"
                                    class="mt-6 inline-flex w-full items-center justify-center rounded-lg bg-white py-3 text-sm font-semibold text-blue-800 shadow-lg shadow-blue-950/30 transition hover:bg-blue-50"
                                >
                                    Masuk ke area anggota
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-blue-100 bg-gradient-to-r from-white via-sky-50/50 to-blue-50 py-8 dark:border-blue-900 dark:from-blue-950 dark:via-blue-950 dark:to-blue-950">
            <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-4 text-center text-sm text-slate-500 sm:flex-row sm:text-left sm:px-6 lg:px-8 dark:text-slate-400">
                <p>&copy; {{ date('Y') }} {{ $companyName }}. Seluruh hak cipta dilindungi.</p>
                <p class="max-w-md sm:text-right">Manufaktur otomotif — stamping body mobil.</p>
            </div>
        </footer>
    </body>
</html>
