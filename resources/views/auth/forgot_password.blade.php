<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Lupa Password</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#166534",      /* Hijau utama PointWaste */
                        "primary-hover": "#0f5128",
                        "text-dark": "#0b1c30"
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .eco-overlay {
            background: linear-gradient(180deg, rgba(22, 101, 52, 0.4) 0%, rgba(15, 23, 42, 0.6) 100%);
        }
    </style>
</head>

<body class="bg-white font-sans text-text-dark min-h-screen">
    <main class="flex min-h-screen w-full">
        
        <section class="hidden lg:flex lg:w-1/2 relative items-center justify-center p-12 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover object-center" src="{{ asset('images/bg-login.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&q=80&w=1000'" />
                <div class="absolute inset-0 eco-overlay mix-blend-multiply"></div>
            </div>
            
            <div class="relative z-10 w-full max-w-md text-white text-left">
                <div class="mb-8">
                    <span class="inline-flex items-center justify-center p-3 bg-[#0d4722] text-white rounded-xl mb-4 shadow-sm">
                        <span class="material-symbols-outlined text-[32px]">recycling</span>
                    </span>
                    <h1 class="text-4xl font-bold mb-2 tracking-tight">PointWaste</h1>
                    <p class="text-white/80 text-sm leading-relaxed max-w-sm">
                        Mengelola sampah jadi lebih bernilai. Bergabunglah dengan komunitas kami untuk mewujudkan lingkungan yang lebih bersih dan berkelanjutan.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 gap-4 mt-12">
                    <div class="p-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/20 shadow-sm">
                        <span class="block text-2xl font-bold text-white">{{ $totalSampah ?? '45.2k' }}</span>
                        <span class="text-[10px] uppercase font-semibold text-white/70 tracking-wider">Ton Sampah Terolah</span>
                    </div>
                    <div class="p-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/20 shadow-sm">
                        <span class="block text-2xl font-bold text-white">{{ $jumlahWarga ?? '12.8k' }}</span>
                        <span class="text-[10px] uppercase font-semibold text-white/70 tracking-wider">Warga Aktif</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full lg:w-1/2 flex items-center justify-center p-6 bg-white">
            <div class="w-full max-w-[420px] px-2">
                
                <div class="mb-6 text-left">
                    <h2 class="text-3xl font-bold text-text-dark mb-2 tracking-tight">Lupa Password?</h2>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-[360px]">
                        Masukkan email terdaftar Anda. Kami akan mengirimkan instruksi untuk mengatur ulang password Anda.
                    </p>
                </div>

                @if (session('status'))
                    <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-700 text-xs rounded-xl font-medium">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="space-y-5" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    
                    <div class="space-y-1.5">
                        <label class="block text-[11px] font-bold text-gray-500 tracking-wider uppercase">ALAMAT EMAIL</label>
                        <div class="relative">
                            <input class="w-full pl-10 pr-4 py-2.5 bg-[#f8fafc] border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-gray-400 text-sm shadow-sm" placeholder="nama@email.com" type="email" name="email" value="{{ old('email') }}" required autofocus />
                            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-base">mail</span>
                        </div>
                        @error('email') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <button class="w-full bg-primary text-white hover:bg-primary-hover transition-all py-3 rounded-xl font-semibold text-sm flex items-center justify-center gap-2 mt-2 shadow-md" type="submit">
                        Kirim Instruksi Pemulihan
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </form>

                <div class="mt-6 border-t border-gray-100 pt-5 text-center">
                    <a class="inline-flex items-center gap-1.5 text-[11px] font-extrabold text-primary tracking-wider uppercase hover:underline" href="{{ route('login') }}">
                        <span class="material-symbols-outlined text-xs font-bold">arrow_back</span>
                        Kembali Ke Login
                    </a>
                </div>
                
            </div>
        </section>
    </main>
</body>

</html>