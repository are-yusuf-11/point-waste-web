<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Tagihan Iuran</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#004c22",
                        "on-surface": "#0b1c30",
                        "surface": "#ffffff",
                    },
                    fontFamily: { sans: ["Inter", "sans-serif"] }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .icon-filled { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-[#f8f9ff] text-on-surface font-sans min-h-screen flex p-4 gap-4" 
      x-data="{ 
        isPaid: false, 
        modalKonfirmasi: false, 
        modalBerhasil: false,
        bayar() {
            this.modalKonfirmasi = false;
            this.modalBerhasil = true;
        },
        selesai() {
            this.isPaid = true;
            this.modalBerhasil = false;
        }
      }">

    <aside class="w-[260px] bg-surface border border-gray-100 flex flex-col justify-between p-6 h-[calc(100vh-2rem)] sticky top-4 z-30 rounded-2xl shadow-sm">
        <div class="space-y-10">
            <div class="flex items-center gap-3 px-2 py-2">
                <span class="material-symbols-outlined text-primary text-[32px] icon-filled">recycling</span>
                <span class="font-bold text-xl text-primary tracking-tight">PointWaste</span>
            </div>
            <nav class="space-y-1">
                <a href="/dashboard-warga-test" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">dashboard</span>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
                <a href="/setor-sampah-test" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">delete</span>
                    <span class="text-sm font-medium">Setor Sampah</span>
                </a>
                <a href="/mutasi-poin-test" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">receipt_long</span>
                    <span class="text-sm font-medium">Mutasi Poin</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 bg-[#e8f5e9] text-primary font-semibold rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px] icon-filled">credit_card</span>
                    <span class="text-sm">Tagihan Iuran</span>
                </a>
                <a href="/profil-saya-test" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">person</span>
                    <span class="text-sm font-medium">Profil</span>
                </a>
            </nav>
        </div>
        <div class="border-t border-gray-100 pt-5 space-y-4">
            <div class="flex items-center gap-3 px-1">
                <img class="w-10 h-10 rounded-full object-cover border" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150" alt="Avatar">
                <div>
                    <h4 class="text-sm font-semibold text-on-surface leading-tight">Budi Santoso</h4>
                    <span class="text-xs text-gray-400">Warga RT 01</span>
                </div>
            </div>
            <button class="w-full flex items-center justify-center gap-2 px-4 py-2.5 border border-gray-200 text-gray-700 bg-gray-50 hover:bg-gray-100 font-medium rounded-xl text-xs transition-all">
                <span class="material-symbols-outlined text-[18px]">logout</span> Logout
            </button>
        </div>
    </aside>

    <div class="flex-1 flex flex-col h-[calc(100vh-2rem)]">
        <header class="h-[60px] flex items-center justify-between px-6 mb-2">
            <div class="flex items-center gap-1.5">
                <span class="text-lg font-semibold text-on-surface">Halo, Arafly ramdani</span>
                <span>👋</span>
            </div>
            <div class="flex items-center gap-3 text-gray-500">
                <button class="p-2 hover:bg-gray-100 rounded-full relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <button class="p-2 hover:bg-gray-100 rounded-full"><span class="material-symbols-outlined">settings</span></button>
            </div>
        </header>

        <main class="flex-1 px-6 overflow-y-auto pb-10 space-y-6">
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
                
                <div class="lg:col-span-2 bg-surface rounded-2xl border border-gray-100 shadow-sm p-8 flex flex-col justify-between min-h-[220px]">
                    
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Tagihan Bulan Ini</span>
                            <h2 class="text-[28px] font-bold text-[#0f2942] mt-1 leading-tight">Juni 2026</h2>
                        </div>
                        
                        <template x-if="!isPaid">
                            <span class="px-3 py-1 bg-red-50 text-red-500 text-xs font-bold rounded-full uppercase tracking-wider border border-red-100">Belum Bayar</span>
                        </template>
                        <template x-if="isPaid">
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-full uppercase tracking-wider border border-emerald-100">Sudah Bayar</span>
                        </template>
                    </div>

                    <div class="mt-8">
                        <template x-if="!isPaid">
                            <div class="w-full">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-1">
                                        <p class="text-xs font-medium text-gray-400">Total Tagihan Bersih</p>
                                        <p class="text-4xl font-bold text-[#0f2942]">Rp 40.000</p>
                                    </div>
                                    <button @click="modalKonfirmasi = true" class="px-6 py-3 bg-primary hover:bg-emerald-900 text-white font-semibold rounded-xl flex items-center gap-2 transition-all shadow-md">
                                        <span class="material-symbols-outlined text-[20px]">payments</span>
                                        Bayar Sekarang
                                    </button>
                                </div>
                                
                                <div class="mt-6 pt-4 border-t border-gray-100 flex gap-12">
                                    <div class="text-sm text-gray-500">
                                        <span class="block text-xs text-gray-400 font-medium mb-0.5">Iuran Dasar</span> 
                                        <span class="font-semibold text-gray-700">Rp 50.000</span>
                                    </div>
                                    <div class="text-sm text-emerald-600">
                                        <span class="block text-xs text-gray-400 font-medium mb-0.5">Diskon Poin</span> 
                                        <span class="font-semibold">-Rp 10.000</span>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <template x-if="isPaid">
                            <div class="w-full flex flex-col items-center justify-center py-6 space-y-3">
                                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[28px] icon-filled">check_circle</span>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-bold text-[#0f2942]">Tagihan Terbayar</h3>
                                    <p class="text-sm text-gray-400 mt-1">Terima kasih telah melakukan pembayaran tepat waktu.</p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="bg-surface rounded-2xl border border-gray-100 shadow-sm p-8 flex flex-col justify-between min-h-[220px]">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-emerald-50 text-primary rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-[22px] icon-filled">stars</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-[#0f2942] text-sm">Konversi Poin</h3>
                            <p class="text-xs text-gray-400">Gunakan poin untuk iuran</p>
                        </div>
                    </div>

                    <div class="my-auto py-5 px-6 bg-[#fcfdfe] border border-gray-100 rounded-xl text-center flex flex-col items-center justify-center">
                        <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Poin Tersedia</span>
                        <div class="flex items-baseline justify-center gap-1.5 mt-1">
                            <span class="text-[36px] font-bold text-primary leading-none">1.000</span>
                            <span class="text-xs font-semibold text-gray-400">Poin</span>
                        </div>
                        <div class="mt-2 text-xs bg-emerald-50 text-primary px-3 py-1 rounded-full font-medium">
                            Setara Rp 10.000
                        </div>
                    </div>
                </div>
            </div>

            <section class="bg-surface rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-gray-50 flex items-center justify-between">
                    <h3 class="font-bold text-[#0f2942]">Riwayat Pembayaran</h3>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-gray-50 border border-gray-200 rounded-xl text-xs font-semibold text-gray-500">
                        <span>Tahun 2026</span>
                        <span class="material-symbols-outlined text-[16px]">expand_more</span>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-xs font-bold text-gray-400 uppercase tracking-wider bg-gray-50/50">
                                <th class="px-8 py-4">Periode</th>
                                <th class="px-8 py-4">Total Bayar</th>
                                <th class="px-8 py-4">Metode</th>
                                <th class="px-8 py-4">Tanggal Bayar</th>
                                <th class="px-8 py-4 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-medium text-[#0f2942] divide-y divide-gray-50">
                            <tr x-show="isPaid" x-transition class="bg-emerald-50/10">
                                <td class="px-8 py-4 font-bold">Juni 2026</td>
                                <td class="px-8 py-4">Rp 40.000</td>
                                <td class="px-8 py-4 text-gray-400">GoPay</td>
                                <td class="px-8 py-4 text-gray-400">26 Juni 2026, 12:30</td>
                                <td class="px-8 py-4 text-center">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-md uppercase border border-emerald-100">
                                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> LUNAS
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4">Mei 2026</td>
                                <td class="px-8 py-4">Rp 35.000</td>
                                <td class="px-8 py-4 text-gray-400">GoPay</td>
                                <td class="px-8 py-4 text-gray-400">05 Mei 2026, 09:12</td>
                                <td class="px-8 py-4 text-center">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-md uppercase border border-emerald-100">
                                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> LUNAS
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4">April 2026</td>
                                <td class="px-8 py-4">Rp 48.000</td>
                                <td class="px-8 py-4 text-gray-400">OVO</td>
                                <td class="px-8 py-4 text-gray-400">02 April 2026, 14:45</td>
                                <td class="px-8 py-4 text-center">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-md uppercase border border-emerald-100">
                                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> LUNAS
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-4">Maret 2026</td>
                                <td class="px-8 py-4">Rp 50.000</td>
                                <td class="px-8 py-4 text-gray-400">Dana</td>
                                <td class="px-8 py-4 text-gray-400">04 Maret 2026, 11:30</td>
                                <td class="px-8 py-4 text-center">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-md uppercase border border-emerald-100">
                                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> LUNAS
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <div class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-black/40 backdrop-blur-sm" 
         x-show="modalKonfirmasi" x-cloak x-transition>
        <div class="bg-white w-full max-w-[420px] rounded-2xl shadow-xl overflow-hidden" @click.away="modalKonfirmasi = false">
            <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                <h3 class="text-lg font-bold text-primary">Konfirmasi Pembayaran</h3>
                <button @click="modalKonfirmasi = false" class="text-gray-400 hover:text-gray-600"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-6 space-y-5">
                <div class="flex items-center gap-4 bg-gray-50 p-4 rounded-xl border border-gray-100">
                    <div class="w-10 h-10 bg-[#0f2942] text-white rounded-lg flex items-center justify-center"><span class="material-symbols-outlined icon-filled">account_balance_wallet</span></div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Metode Pembayaran</p>
                        <p class="text-sm font-bold text-[#0f2942]">GoPay / OVO / Dana</p>
                    </div>
                </div>
                <div class="space-y-2.5 text-sm">
                    <div class="flex justify-between text-gray-500"><span>Total Tagihan</span><span>Rp 40.000</span></div>
                    <div class="flex justify-between text-gray-500"><span>Biaya Admin</span><span>Rp 1.000</span></div>
                    <div class="pt-3 border-t border-dashed border-gray-200 flex justify-between items-center">
                        <span class="font-bold text-[#0f2942]">Total Bayar</span>
                        <span class="text-xl font-bold text-primary">Rp 41.000</span>
                    </div>
                </div>
                <div class="space-y-2 pt-2">
                    <button @click="bayar()" class="w-full py-3 bg-primary hover:bg-emerald-900 text-white font-semibold rounded-xl transition-all shadow-md">Lanjutkan Pembayaran</button>
                    <button @click="modalKonfirmasi = false" class="w-full py-3 bg-white text-gray-500 font-semibold hover:text-gray-700 transition">Batal</button>
                </div>
                <p class="text-[11px] text-center text-gray-400 px-2">Selesaikan pembayaran dalam 15 menit untuk menghindari pembatalan otomatis.</p>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 z-[70] flex items-center justify-center p-4 bg-black/40 backdrop-blur-sm" 
         x-show="modalBerhasil" x-cloak x-transition>
        <div class="bg-white w-full max-w-[420px] rounded-2xl shadow-xl p-6 flex flex-col items-center text-center">
            <div class="w-16 h-16 bg-emerald-50 text-primary rounded-full flex items-center justify-center mb-4 border border-emerald-100">
                <span class="material-symbols-outlined text-[32px] icon-filled">check_circle</span>
            </div>
            <h2 class="text-xl font-bold text-primary">Pembayaran Berhasil</h2>
            <p class="text-xs text-gray-400 mt-1 px-4">Terima kasih! Pembayaran iuran Anda telah kami terima.</p>
            
            <div class="w-full bg-gray-50 rounded-xl p-5 my-6 space-y-3 text-left">
                <div class="text-center pb-3 border-b border-gray-200 border-dashed">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-0.5">Total Dibayar</p>
                    <p class="text-2xl font-bold text-primary">Rp 41.000</p>
                </div>
                <div class="space-y-2 text-xs font-semibold">
                    <div class="flex justify-between"><span class="text-gray-400">Metode Pembayaran</span><span class="text-[#0f2942]">GoPay</span></div>
                    <div class="flex justify-between"><span class="text-gray-400">Tanggal</span><span class="text-[#0f2942]">05 Juni 2026</span></div>
                    <div class="flex justify-between"><span class="text-gray-400">ID Transaksi</span><span class="text-[#0f2942]">PW-9928374</span></div>
                </div>
            </div>

            <button @click="selesai()" class="w-full py-3 bg-primary hover:bg-emerald-900 text-white font-semibold rounded-xl transition-all">Selesai</button>
        </div>
    </div>

</body>
</html>