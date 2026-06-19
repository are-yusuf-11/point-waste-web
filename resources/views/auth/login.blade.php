<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Authentication</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed-variant": "#005226", "tertiary": "#004565", "on-tertiary-container": "#9dd5ff",
                        "primary-fixed": "#a6f4b5", "on-surface": "#0b1c30", "on-background": "#0b1c30",
                        "error-container": "#ffdad6", "surface-tint": "#1f6c3a", "surface-container-lowest": "#ffffff",
                        "surface-variant": "#d3e4fe", "secondary-container": "#d9e6dd", "outline": "#707a6f",
                        "primary-fixed-dim": "#8bd79b", "tertiary-fixed": "#c9e6ff", "secondary-fixed": "#d9e6dd",
                        "surface": "#f8f9ff", "on-tertiary-fixed-variant": "#004c6e", "surface-container-low": "#eff4ff",
                        "inverse-surface": "#213145", "surface-bright": "#f8f9ff", "on-primary": "#ffffff",
                        "background": "#f8f9ff", "primary-container": "#166534", "inverse-primary": "#8bd79b",
                        "on-error-container": "#93000a", "surface-container-highest": "#d3e4fe", "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#89ceff", "primary": "#004c22", "surface-container-high": "#dce9ff",
                        "error": "#ba1a1a", "secondary": "#55615a", "outline-variant": "#bfc9bd",
                        "on-secondary-fixed-variant": "#3e4943", "on-tertiary-fixed": "#001e2f", "on-primary-container": "#93e0a2",
                        "surface-container": "#e5eeff", "on-primary-fixed": "#00210b", "surface-dim": "#cbdbf5",
                        "inverse-on-surface": "#eaf1ff", "on-secondary-container": "#5b6760", "secondary-fixed-dim": "#bdcac1",
                        "on-surface-variant": "#404940", "tertiary-container": "#005e87", "on-secondary-fixed": "#131e19",
                        "on-error": "#ffffff", "on-secondary": "#ffffff"
                    },
                    "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                    "spacing": { "xs": "4px", "xl": "32px", "base": "4px", "lg": "24px", "sm": "8px", "sidebar-width": "260px", "md": "16px", "container-max": "1280px", "gutter": "24px" },
                    "fontFamily": { "display-lg": ["Inter"], "code-sm": ["Inter"], "label-md": ["Inter"], "title-lg": ["Inter"], "headline-lg": ["Inter"], "headline-md": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], "headline-lg-mobile": ["Inter"] },
                    "fontSize": { "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }], "code-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }], "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }], "title-lg": ["20px", { "lineHeight": "28px", "fontWeight": "600" }], "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }], "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }], "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }], "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }], "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "600" }] }
                }
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .eco-overlay { background: linear-gradient(180deg, rgba(0, 35, 15, 0.4) 0%, rgba(0, 50, 20, 0.75) 100%); }
    </style>
</head>

<body class="bg-background text-on-surface min-h-screen overflow-x-hidden font-body-md text-body-md">
    <main class="flex min-h-screen w-full">
        <section class="hidden lg:flex lg:w-1/2 relative bg-primary-container items-center justify-center p-xl overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover object-center" src="{{ asset('images/bg-login.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=1000'" />
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
                        <span class="block font-headline-md text-headline-md text-white">{{ number_format($totalSampah, 1, ',', '.') }} kg</span>
                        <span class="font-label-md text-label-md text-white/80 uppercase tracking-wider text-[11px]">Sampah Terolah</span>
                    </div>
                    <div class="p-md bg-white/10 backdrop-blur-md rounded-xl border border-white/20 shadow-sm">
                        <span class="block font-headline-md text-headline-md text-white">{{ number_format($jumlahWarga, 0, ',', '.') }}</span>
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
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Selamat Datang</h2>
                    <p class="text-on-surface-variant font-body-md text-body-md">Masuk ke akun Anda untuk mengelola setoran sampah.</p>
                </div>
                
                <div class="flex bg-secondary-container rounded-lg p-xs mb-lg">
                    <a href="{{ route('showLogin') }}" class="flex-1 py-sm text-center font-label-md text-label-md rounded-md transition-all bg-surface-container-lowest text-primary font-bold shadow-sm">
                        Login
                    </a>
                    <a href="{{ route('showRegister') }}" class="flex-1 py-sm text-center font-label-md text-label-md rounded-md transition-all text-on-secondary-container hover:text-primary">
                        Register
                    </a>
                </div>

                <form class="space-y-lg block" id="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="space-y-sm">
                        <label class="font-label-md text-label-md text-on-surface-variant">Email</label>
                        <div class="relative">
                            <input class="w-full px-md py-sm bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-fixed focus:border-primary outline-none transition-all placeholder:text-outline/60 text-on-surface" placeholder="Masukan Email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                            <span class="material-symbols-outlined absolute right-md top-1/2 -translate-y-1/2 text-outline-variant">mail</span>
                        </div>
                    </div>
                    
                    <div class="space-y-sm">
                        <div class="flex justify-between items-center">
                            <label class="font-label-md text-label-md text-on-surface-variant">Password</label>
                            <a class="text-tertiary font-label-md text-label-md hover:underline font-semibold text-emerald-800 relative z-10 cursor-pointer" href="{{ Route::has('password.request') ? route('password.request') : '#' }}">Lupa Password?</a>
                        </div>
                        <div class="relative">
                            <input class="w-full px-md py-sm bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary-fixed focus:border-primary outline-none transition-all placeholder:text-outline/60 text-on-surface" id="login-password" placeholder="Masukan password" type="password" name="password" required />
                            <button class="absolute right-md top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition-colors" onclick="togglePassword('login-password')" type="button">
                                <span class="material-symbols-outlined" id="password-icon">visibility</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-sm">
                        <input class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary" id="remember" type="checkbox" name="remember" />
                        <label class="font-body-md text-body-md text-on-surface-variant select-none" for="remember">Ingat saya</label>
                    </div>
                    
                    <button class="w-full bg-primary-container text-on-primary-container hover:bg-primary transition-all py-md rounded-xl font-headline-md text-headline-md flex items-center justify-center gap-sm group" type="submit">
                        Login Sekarang
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </form>

                <div class="mt-xl">
                    <div class="relative flex items-center mb-lg">
                        <div class="flex-grow border-t border-outline-variant"></div>
                        <span class="px-md font-label-md text-label-md text-outline">Atau masuk dengan</span>
                        <div class="flex-grow border-t border-outline-variant"></div>
                    </div>
                    <div class="grid grid-cols-2 gap-md">
                        <button class="flex items-center justify-center gap-sm py-sm border border-outline-variant rounded-lg hover:bg-surface-variant transition-colors">
                            <img alt="Google" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqEgMFZdXd5ZHkIG13XIC5ooisyep-H3QvF-pWgNkw7NLpq_86HT-8j5bE3gM91MKMjnsdUEgAAuvPOuQV8m6DcXWy9Z7qzmensrzAxAAFQL4dDmEV-WB3B3QTUql8ZCzmuDXozn4M7L9epdLw5Vc3JH9SCPVjpTDXiM2tSIf-FMxK3CP8B4Yn_04Cyws2eUgAiqybxxtXH3k1bxLzsjy7bHNVQtkQCDISUP0CEgNkj32tYuXPbPazQQMLfII0yAhAGPQR5P_myqE" />
                            <span class="font-label-md text-label-md">Google</span>
                        </button>
                        <button class="flex items-center justify-center gap-sm py-sm border border-outline-variant rounded-lg hover:bg-surface-variant transition-colors">
                            <img alt="Facebook" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSsHyif3Nk4gCA4q7lZ_aaHX6xBiNBjVIReJK-aVeOVjq2W2lFLOBXtJNNwB0z9fjZcXFxkTu9pDOAHPJYgwfAOrti0t84XARt32dgToGKIUClQkh7MLqMj7tZpaAKEFEQNtkARioIvv5DvVQl14jsBIZ14A5IuP6NXC0FqqW_xXgo5SWmIRw63t4nQHNKCpqFBnEHu98OgULV5wFUrm6HMCxBsSvTxodQO8QEkdSnLbq_42qnPxEY0lucO4XQfv3jHX1AE-kpraA" />
                            <span class="font-label-md text-label-md">Facebook</span>
                        </button>
                    </div>
                </div>
                
                <p class="mt-xl text-center text-on-surface-variant font-body-md text-body-md">
                    Butuh bantuan? <a class="text-emerald-800 font-bold hover:underline" href="#">Hubungi Admin</a>
                </p>
            </div>
        </section>
    </main>

    <x-alert />

    <script>
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const icon = passwordInput.nextElementSibling.querySelector('.material-symbols-outlined');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                icon.textContent = 'visibility';
            }
        }
    </script>
</body>
</html>