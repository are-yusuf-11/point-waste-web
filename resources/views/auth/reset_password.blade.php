<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Ganti Password Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <style>
        .eco-overlay {
            background: linear-gradient(180deg, rgba(0, 35, 15, 0.4) 0%, rgba(0, 50, 20, 0.75) 100%);
        }
    </style>
</head>
<body class="bg-[#f8f9ff] text-[#0b1c30] min-h-screen font-sans">
    <main class="flex min-h-screen w-full">
        <section class="hidden lg:flex lg:w-1/2 relative bg-[#166534] items-center justify-center p-12 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&q=80&w=1000" />
                <div class="absolute inset-0 eco-overlay mix-blend-multiply"></div>
            </div>
            
            <div class="relative z-10 w-full max-w-md text-white">
                <div class="mb-10">
                    <span class="inline-flex items-center justify-center p-4 bg-emerald-900 text-white rounded-xl mb-4 shadow-lg">
                        <span class="material-symbols-outlined text-[40px]">recycling</span>
                    </span>
                    <h1 class="text-5xl font-bold mb-4 tracking-tight">PointWaste</h1>
                    <p class="text-white/90 leading-relaxed text-lg">
                        Mengelola sampah jadi lebih bernilai. Bergabunglah dengan komunitas kami untuk mewujudkan lingkungan yang lebih bersih.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-5 bg-white/10 backdrop-blur-md rounded-xl border border-white/20">
                        <div class="text-3xl font-bold">45.2k</div>
                        <div class="text-[10px] uppercase font-bold text-white/70 tracking-widest mt-1">Ton Sampah Terolah</div>
                    </div>
                    <div class="p-5 bg-white/10 backdrop-blur-md rounded-xl border border-white/20">
                        <div class="text-3xl font-bold">12.8k</div>
                        <div class="text-[10px] uppercase font-bold text-white/70 tracking-widest mt-1">Warga Aktif</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
            <div class="w-full max-w-[440px]">
                <div class="mb-10">
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Buat Kata Sandi Baru</h2>
                    <p class="text-slate-500 text-sm">Masukkan kata sandi baru Anda untuk mengamankan akun.</p>
                </div>

                <form class="space-y-6" method="POST" action="#">
                    @csrf
                    <div class="space-y-2">
                        <label class="block text-[11px] font-bold text-slate-400 tracking-widest uppercase">KATA SANDI BARU</label>
                        <div class="relative">
                            <input id="password-input" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-emerald-600 focus:border-emerald-600 outline-none transition-all placeholder:text-slate-400 text-sm" placeholder="Masukan Password baru" type="password" required />
                            <button type="button" onclick="togglePassword()" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-emerald-700">
                                <span id="eye-icon" class="material-symbols-outlined text-lg">visibility</span>
                            </button>
                        </div>
                    </div>
                    
                    <button class="w-full bg-[#166534] text-white hover:bg-emerald-800 transition-all py-4 rounded-xl font-bold text-sm shadow-xl shadow-emerald-900/20" type="submit">
                        Simpan Password
                    </button>
                </form>

                <div class="mt-8 text-center">
                    <a class="inline-flex items-center gap-2 text-sm font-bold text-emerald-800 hover:underline" href="{{ route('login') }}">
                        <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali ke Login
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script>
        function togglePassword() {
            const input = document.getElementById('password-input');
            const icon = document.getElementById('eye-icon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerText = 'visibility_off';
            } else {
                input.type = 'password';
                icon.innerText = 'visibility';
            }
        }
    </script>
</body>
</html>

