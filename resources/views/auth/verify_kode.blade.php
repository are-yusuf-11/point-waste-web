<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Verifikasi Kode</title>
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
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#404940",
                        "surface": "#f8f9ff",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#bfc9bd",
                        "outline": "#707a6f",
                        "tertiary": "#004565"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", {"lineHeight": "56px", "fontWeight": "700"}],
                        "headline-lg": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
    <style>
        .eco-overlay {
            background: linear-gradient(180deg, rgba(0, 35, 15, 0.4) 0%, rgba(0, 50, 20, 0.75) 100%);
        }
        /* Menghilangkan panah up/down pada input type number */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen overflow-x-hidden font-body-md text-body-md">
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
                    <h1 class="font-display-lg text-display-lg text-white mb-2 tracking-tight">PointWaste</h1>
                    <p class="text-white/90 leading-relaxed max-w-sm mb-12">
                        Mengelola sampah jadi lebih bernilai. Bergabunglah dengan komunitas kami untuk mewujudkan lingkungan yang lebih bersih dan berkelanjutan.
                    </p>
                </div>

                <div class="flex gap-4 max-w-sm">
                    <div class="flex-1 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-xl">
                        <div class="text-2xl font-bold">45.2k</div>
                        <div class="text-xs text-white/80 uppercase tracking-wider mt-1">Ton Sampah Terolah</div>
                    </div>
                    <div class="flex-1 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-xl">
                        <div class="text-2xl font-bold">12.8k</div>
                        <div class="text-xs text-white/80 uppercase tracking-wider mt-1">Warga Aktif</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full lg:w-1/2 flex items-center justify-center p-6 bg-surface">
            <div class="w-full max-w-[420px]">
                
                <div class="mb-8 text-center lg:text-left">
                    <h2 class="text-xl font-bold text-slate-900 mb-2">Verifikasi Kode</h2>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Masukkan 6 digit kode verifikasi yang telah dikirimkan ke email Anda.
                    </p>
                </div>

                <form class="space-y-6" method="POST" action="#">
                    @csrf
                    
                    <div class="flex justify-between gap-2" id="otp-container">
                        <input class="w-12 h-16 text-center text-xl font-bold bg-white border border-slate-200 rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-slate-800 shadow-sm" type="number" maxlength="1" oninput="moveNext(this, 1)" onkeydown="moveBack(event, 1)" id="code-1" required />
                        <input class="w-12 h-16 text-center text-xl font-bold bg-white border border-slate-200 rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-slate-800 shadow-sm" type="number" maxlength="1" oninput="moveNext(this, 2)" onkeydown="moveBack(event, 2)" id="code-2" required />
                        <input class="w-12 h-16 text-center text-xl font-bold bg-white border border-slate-200 rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-slate-800 shadow-sm" type="number" maxlength="1" oninput="moveNext(this, 3)" onkeydown="moveBack(event, 3)" id="code-3" required />
                        <input class="w-12 h-16 text-center text-xl font-bold bg-white border border-slate-200 rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-slate-800 shadow-sm" type="number" maxlength="1" oninput="moveNext(this, 4)" onkeydown="moveBack(event, 4)" id="code-4" required />
                        <input class="w-12 h-16 text-center text-xl font-bold bg-white border border-slate-200 rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-slate-800 shadow-sm" type="number" maxlength="1" oninput="moveNext(this, 5)" onkeydown="moveBack(event, 5)" id="code-5" required />
                        <input class="w-12 h-16 text-center text-xl font-bold bg-white border border-slate-200 rounded-xl focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-slate-800 shadow-sm" type="number" maxlength="1" oninput="moveNext(this, 6)" onkeydown="moveBack(event, 6)" id="code-6" required />
                    </div>

                    <button class="w-full bg-primary-container text-white hover:bg-primary transition-all py-3 rounded-xl font-semibold text-center tracking-wide shadow-md" type="submit">
                        Verifikasi Kode
                    </button>
                </form>

                <div class="mt-8 space-y-4 text-center">
                    <p class="text-sm text-slate-600">
                        Tidak menerima kode? <a href="#" class="text-emerald-700 font-bold hover:underline">Kirim ulang</a>
                    </p>
                    
                    <p>
                        <a class="text-slate-500 font-semibold hover:text-slate-800 inline-flex items-center gap-1 text-sm transition-colors" href="{{ route('login') }}">
                            <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali ke Login
                        </a>
                    </p>
                </div>

            </div>
        </section>
    </main>

    <script>
        // Otomatis pindah ke kotak kanan saat angka diketik
        function moveNext(current, index) {
            if (current.value.length >= 1) {
                current.value = current.value.slice(0, 1); // Memastikan hanya 1 digit
                const nextInput = document.getElementById(`code-${index + 1}`);
                if (nextInput) {
                    nextInput.focus();
                }
            }
        }

        // Otomatis balik ke kotak kiri saat menekan tombol Backspace (hapus)
        function moveBack(event, index) {
            if (event.key === "Backspace" && event.target.value.length === 0) {
                const prevInput = document.getElementById(`code-${index - 1}`);
                if (prevInput) {
                    prevInput.focus();
                }
            }
        }
    </script>
</body>

</html>