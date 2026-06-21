<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Lupa Password</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#004c22",
                        "primary-container": "#166534",
                        "on-primary-container": "#93e0a2",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#404940",
                        "surface": "#f8f9ff",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#bfc9bd",
                        "background": "#f8f9ff"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"]
                    }
                }
            }
        }
    </script>
    <style>
        .eco-overlay {
            background: linear-gradient(180deg, rgba(0, 35, 15, 0.4) 0%, rgba(0, 50, 20, 0.75) 100%);
        }
    </style>
</head>

<body class="bg-background text-on-surface min-h-screen overflow-x-hidden font-body-md text-body-md">
    <main class="flex min-h-screen w-full">
        <section class="hidden lg:flex lg:w-1/2 relative bg-primary-container items-center justify-center p-8 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover object-center" src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&q=80&w=1000" />
                <div class="absolute inset-0 eco-overlay mix-blend-multiply"></div>
            </div>
            
            <div class="relative z-10 w-full max-w-md text-white px-4">
                <div class="mb-6">
                    <span class="inline-flex items-center justify-center p-4 bg-emerald-800 text-white rounded-xl mb-4 shadow-md">
                        <span class="material-symbols-outlined text-[40px]">recycling</span>
                    </span>
                    <h1 class="font-display-lg text-[48px] font-bold text-white mb-2 tracking-tight">PointWaste</h1>
                    <p class="leading-relaxed max-w-sm">
                        Mengelola sampah jadi lebih bernilai. Bergabunglah dengan komunitas kami untuk mewujudkan lingkungan yang lebih bersih dan berkelanjutan.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="p-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/20 shadow-sm">
                        <span class="block text-2xl font-bold text-white">45.2k</span>
                        <span class="text-xs text-white/80 uppercase tracking-wider">Ton Sampah Terolah</span>
                    </div>
                    <div class="p-4 bg-white/10 backdrop-blur-md rounded-xl border border-white/20 shadow-sm">
                        <span class="block text-2xl font-bold text-white">12.8k</span>
                        <span class="text-xs text-white/80 uppercase tracking-wider">Warga Aktif</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full lg:w-1/2 flex items-center justify-center p-6 bg-surface">
            <div class="w-full max-w-[440px]">
                <div class="mb-8 text-center lg:text-left">
                    <h2 class="text-2xl font-bold text-on-surface mb-2">Lupa Password?</h2>
                    <p class="text-on-surface-variant">
                        Masukkan email terdaftar Anda. Kami akan mengirimkan instruksi untuk mengatur ulang password Anda.
                    </p>
                </div>

                @if (session('error'))
                    <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg text-xs">
                        {{ session('error') }}
                    </div>
                @endif
                
                <form class="space-y-6 block" id="forgot-password-form" method="POST" action="{{ route('auth.send-verification') }}">
                    @csrf
                    
                    <div class="space-y-2">
                        <label class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Alamat Email</label>
                        <div class="relative">
                            <input class="w-full px-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg outline-none text-on-surface" placeholder="nama@email.com" type="email" name="email" value="{{ old('email') }}" required autofocus />
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline-variant">mail</span>
                        </div>
                        @error('email')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <button class="w-full bg-primary-container text-on-primary-container hover:bg-primary hover:text-white transition-all py-3 rounded-xl font-semibold flex items-center justify-center gap-2 group" type="submit">
                        Kirim Instruksi Pemulihan
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                    
                    <div class="text-center pt-2">
                        <a href="{{ route('showLogin') }}" class="inline-flex items-center gap-1 text-sm text-primary font-bold hover:underline transition-all">
                            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                            KEMBALI KE LOGIN
                        </a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>