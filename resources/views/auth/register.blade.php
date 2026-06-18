<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Register</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#166534",      /* Hijau utama sesuai tombol login */
                        "primary-hover": "#0f5128",
                        "bg-light": "#f8fafc",      /* Warna background lembut */
                        "text-dark": "#0f172a"
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
            <div class="w-full max-w-[400px]">
                
                <div class="mb-6 text-left">
                    <h2 class="text-3xl font-bold text-text-dark mb-1">Selamat Datang</h2>
                    <p class="text-gray-500 text-sm">Masuk ke akun Anda untuk mengelola setoran sampah.</p>
                </div>
                
                <div class="flex bg-[#e2ece5] rounded-xl p-1 mb-6">
                    <a href="{{ route('login') }}" class="flex-1 py-2 text-center text-sm font-medium text-gray-600 rounded-lg transition-all hover:text-primary">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="flex-1 py-2 text-center text-sm font-semibold bg-white text-primary rounded-lg shadow-sm">
                        Register
                    </a>
                </div>

                <form class="space-y-4" method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="space-y-1">
                        <label class="block text-xs font-semibold text-gray-700">Nama</label>
                        <input class="w-full px-4 py-2.5 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-gray-400 text-sm" placeholder="Masukan Nama" type="text" name="nama" value="{{ old('nama') }}" required autofocus />
                        @error('nama') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    
                    <div class="space-y-1">
                        <label class="block text-xs font-semibold text-gray-700">Password</label>
                        <div class="relative">
                            <input class="w-full px-4 py-2.5 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-gray-400 text-sm" id="reg-password" placeholder="Masukan password" type="password" name="password" required />
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary transition-colors" onclick="togglePassword('reg-password', 'pass-icon')" type="button">
                                <span class="material-symbols-outlined text-md" id="pass-icon">visibility</span>
                            </button>
                        </div>
                        @error('password') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-1">
                        <label class="block text-xs font-semibold text-gray-700">Email</label>
                        <div class="relative">
                            <input class="w-full px-4 py-2.5 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-gray-400 text-sm" placeholder="Masukan Email" type="email" name="email" value="{{ old('email') }}" required />
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-md">mail</span>
                        </div>
                        @error('email') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <input type="hidden" name="id_rt" value="{{ $daftar_rt->first()->id_rt ?? 1 }}">
                    <input type="hidden" name="no_hp" value="-">
                    <input type="hidden" name="alamat" value="Alamat belum diatur">
                    <input type="hidden" name="password_confirmation" id="reg-password-confirm">

                    <div class="flex items-center gap-2 pt-1">
                        <input class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary" id="terms" type="checkbox" required />
                        <label class="text-[11px] text-gray-500 select-none" for="terms">
                            Saya menyetujui <a href="#" class="text-primary font-medium hover:underline">Syarat & Ketentuan</a> serta <a href="#" class="text-primary font-medium hover:underline">Kebijakan Privasi</a>.
                        </label>
                    </div>
                    
                    <button class="w-full bg-primary text-white hover:bg-primary-hover transition-all py-3 rounded-xl font-medium text-sm flex items-center justify-center gap-2 mt-2" type="submit" onclick="syncConfirmPassword()">
                        Daftar Sekarang
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </form>

                <div class="mt-6">
                    <div class="relative flex items-center mb-4">
                        <div class="flex-grow border-t border-gray-200"></div>
                        <span class="px-3 text-xs text-gray-400">Atau masuk dengan</span>
                        <div class="flex-grow border-t border-gray-200"></div>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <button class="flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-xl hover:bg-gray-50 transition-colors text-xs font-medium">
                            <img alt="Google" class="w-4 h-4" src="https://www.vectorlogo.zone/logos/google/google-icon.svg" />
                            <span>Google</span>
                        </button>
                        <button class="flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-xl hover:bg-gray-50 transition-colors text-xs font-medium">
                            <img alt="Facebook" class="w-4 h-4" src="https://www.vectorlogo.zone/logos/facebook/facebook-official.svg" />
                            <span>Facebook</span>
                        </button>
                    </div>
                </div>
                
                <p class="mt-6 text-center text-xs text-gray-500">
                    Butuh bantuan? <a class="text-primary font-semibold hover:underline" href="#">Hubungi Admin</a>
                </p>
            </div>
        </section>
    </main>

    <script>
        // Fungsi untuk memperlihatkan/menyembunyikan password
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerText = 'visibility_off';
            } else {
                input.type = 'password';
                icon.innerText = 'visibility';
            }
        }

        // Otomatis mengisi data konfirmasi password agar lolos validasi 'confirmed' di backend
        function syncConfirmPassword() {
            const pass = document.getElementById('reg-password').value;
            document.getElementById('reg-password-confirm').value = pass;
        }
    </script>
</body>

</html>