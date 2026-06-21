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
                        "on-primary-fixed-variant": "#005226",
                        "tertiary": "#004565",
                        "on-tertiary-container": "#9dd5ff",
                        "primary-fixed": "#a6f4b5",
                        "on-surface": "#0b1c30",
                        "on-background": "#0b1c30",
                        "error-container": "#ffdad6",
                        "surface-tint": "#1f6c3a",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#d3e4fe",
                        "secondary-container": "#d9e6dd",
                        "outline": "#707a6f",
                        "primary-fixed-dim": "#8bd79b",
                        "tertiary-fixed": "#c9e6ff",
                        "secondary-fixed": "#d9e6dd",
                        "surface": "#f8f9ff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "surface-container-low": "#eff4ff",
                        "inverse-surface": "#213145",
                        "surface-bright": "#f8f9ff",
                        "on-primary": "#ffffff",
                        "background": "#f8f9ff",
                        "primary-container": "#166534",
                        "inverse-primary": "#8bd79b",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#d3e4fe",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#89ceff",
                        "primary": "#004c22",
                        "surface-container-high": "#dce9ff",
                        "error": "#ba1a1a",
                        "secondary": "#55615a",
                        "outline-variant": "#bfc9bd",
                        "on-secondary-fixed-variant": "#3e4943",
                        "on-tertiary-fixed": "#001e2f",
                        "on-primary-container": "#93e0a2",
                        "surface-container": "#e5eeff",
                        "on-primary-fixed": "#00210b",
                        "surface-dim": "#cbdbf5",
                        "inverse-on-surface": "#eaf1ff",
                        "on-secondary-container": "#5b6760",
                        "secondary-fixed-dim": "#bdcac1",
                        "on-surface-variant": "#404940",
                        "tertiary-container": "#005e87",
                        "on-secondary-fixed": "#131e19",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xs": "4px",
                        "xl": "32px",
                        "base": "4px",
                        "lg": "24px",
                        "sm": "8px",
                        "sidebar-width": "260px",
                        "md": "16px",
                        "container-max": "1280px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "code-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "title-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "code-sm": ["13px", {
                            "lineHeight": "18px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "title-lg": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .eco-overlay {
            background: linear-gradient(180deg, rgba(0, 35, 15, 0.4) 0%, rgba(0, 50, 20, 0.75) 100%);
        }
    </style>
</head>

<body class="bg-background text-on-surface min-h-screen overflow-x-hidden font-body-md text-body-md">
    <main class="flex min-h-screen w-full">
        <section class="hidden lg:flex lg:w-1/2 relative bg-primary-container items-center justify-center p-xl overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover object-center" src="{{ asset('images/bg-login.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&q=80&w=1000'" />
                <div class="absolute inset-0 eco-overlay mix-blend-multiply"></div>
            </div>
            
            <div class="relative z-10 w-full max-w-md text-on-primary-container text-left px-md">
                <div class="mb-lg">
                    <span class="inline-flex items-center justify-center p-md bg-emerald-800 text-white rounded-xl mb-md shadow-md">
                        <span class="material-symbols-outlined text-[40px]" data-icon="recycling">recycling</span>
                    </span>
                    <h1 class="font-display-lg text-display-lg text-white mb-xs tracking-tight">PointWaste</h1>
                    <p class="font-body-md text-body-md text-white/90 leading-relaxed max-w-sm">
                        Mengelola sampah jadi lebih bernilai. Bergabunglah dengan komunitas kami untuk mewujudkan lingkungan yang lebih bersih dan berkelanjutan.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 gap-md mt-xl">
                    <div class="p-md bg-white/10 backdrop-blur-md rounded-xl border border-white/20 shadow-sm">
                        <span class="block font-headline-md text-headline-md text-white">45.2k</span>
                        <span class="font-label-md text-label-md text-white/80 uppercase tracking-wider text-[11px]">Ton Sampah Terolah</span>
                    </div>
                    <div class="p-md bg-white/10 backdrop-blur-md rounded-xl border border-white/20 shadow-sm">
                        <span class="block font-headline-md text-headline-md text-white">12.8k</span>
                        <span class="font-label-md text-label-md text-white/80 uppercase tracking-wider text-[11px]">Warga Aktif</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full lg:w-1/2 flex items-center justify-center p-md lg:p-xl bg-surface relative">
            <div class="w-full max-w-[440px]" id="auth-canvas">
                <div class="lg:hidden flex items-center justify-center gap-sm mb-xl">
                    <span class="material-symbols-outlined text-primary text-headline-lg" data-icon="recycling">recycling</span>
                    <span class="font-headline-md text-headline-md text-primary">PointWaste</span>
                </div>

                <div class="mb-xl text-center lg:text-left">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Lupa Password?</h2>
                    <p class="text-on-surface-variant font-body-md text-body-md">
                        Masukkan email terdaftar Anda. Kami akan mengirimkan instruksi untuk mengatur ulang password Anda.
                    </p>
                </div>

                @if (session('status'))
                    <div class="mb-lg p-sm bg-green-100 border border-green-400 text-green-700 rounded-lg text-xs">
                        {{ session('status') }}
                    </div>
                @endif
                
                <form class="space-y-lg block" id="forgot-password-form" method="POST" action="{{ Route::has('password.email') ? route('password.email') : '#' }}">
                    @csrf
                    
                    <div class="space-y-sm">
                        <label class="font-label-md text-label-md text-on-surface-variant text-[11px] uppercase tracking-wider">Alamat Email</label>
                        <div class="relative">
                            <input class="w-full px-md py-sm bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-fixed focus:border-primary outline-none transition-all placeholder:text-outline/40 text-on-surface" placeholder="nama@email.com" type="email" name="email" value="{{ old('email') }}" required autofocus />
                            <span class="material-symbols-outlined absolute right-md top-1/2 -translate-y-1/2 text-outline-variant" data-icon="mail">mail</span>
                        </div>
                        @error('email')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <button class="w-full bg-primary-container text-on-primary-container hover:bg-primary transition-all py-md rounded-xl font-headline-md text-headline-md flex items-center justify-center gap-sm group" type="submit">
                        Kirim Instruksi Pemulihan
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
                    </button>
                    
                    <div class="text-center pt-xs">
                        <a href="{{ Route::has('login') ? route('login') : '#' }}" class="inline-flex items-center gap-xs font-label-md text-label-md text-primary font-bold hover:underline transition-all">
                            <span class="material-symbols-outlined text-[18px]" data-icon="arrow_back">arrow_back</span>
                            KEMBALI KE LOGIN
                        </a>
                    </div>
                </form>

                <p class="mt-xl text-center text-on-surface-variant font-body-md text-body-md">
                    Butuh bantuan? <a class="text-emerald-800 font-bold hover:underline" href="#">Hubungi Admin</a>
                </p>
            </div>
        </section>
    </main>
</body>

</html>