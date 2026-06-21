<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Mutasi Poin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#004c22",
                        "primary-container": "#166534",
                        "background": "#f8f9ff",
                        "surface": "#ffffff",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#404940",
                        "outline-variant": "#bfc9bd",
                    },
                    fontFamily: { sans: ["Inter", "sans-serif"] }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .icon-unfilled { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>

<body class="bg-[#fdfdfd] text-on-surface font-sans min-h-screen flex p-4 gap-4" 
      x-data="{ 
        kategoriFilter: 'semua',
        // Data dilempar langsung secara aman dari Controller Backend berupa JSON Array
        transaksi: {{ json_encode($transaksi ?? [
            ['tgl' => '25 Juni 2026, 10:15', 'judul' => 'Reward Setoran Sampah #2', 'detail' => 'Setoran Plastik PET & Kardus (3.5 Kg)', 'kat' => 'setoran', 'poin' => '+450', 'tipe' => 'plus'],
            ['tgl' => '20 Juni 2026, 08:00', 'judul' => 'Pembayaran Iuran RT Juni 2026', 'detail' => 'Potongan otomatis iuran bulanan', 'kat' => 'iuran', 'poin' => '-850', 'tipe' => 'minus'],
            ['tgl' => '18 Juni 2026, 09:40', 'judul' => 'Reward Setoran Sampah #1', 'detail' => 'Logam (Aluminium) & Kaca (2.0 Kg)', 'kat' => 'setoran', 'poin' => '+820', 'tipe' => 'plus'],
            ['tgl' => '15 Juni 2026, 11:20', 'judul' => 'Bonus Program Pilih Sampah Mandiri', 'detail' => 'Bonus insentif keaktifan 3 bulan berturut-turut', 'kat' => 'bonus', 'poin' => '+1.000', 'tipe' => 'plus']
        ]) }},
        get filteredTransaksi() {
            if (this.kategoriFilter === 'semua') return this.transaksi;
            return this.transaksi.filter(t => t.kat === this.kategoriFilter);
        }
      }">

    <aside class="w-[260px] bg-surface border border-gray-100 flex flex-col justify-between p-6 h-[calc(100vh-2rem)] sticky top-4 z-30 rounded-2xl shadow-sm">
        <div class="space-y-10">
            <div class="flex items-center gap-3 px-2 py-2">
                <span class="material-symbols-outlined text-primary text-[32px]">recycling</span>
                <span class="font-bold text-xl text-primary tracking-tight">PointWaste</span>
            </div>

            <nav class="space-y-1">
                <a href="/dashboard-warga-test" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">dashboard</span>
                    <span class="text-sm">Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">delete</span>
                    <span class="text-sm">Setor Sampah</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 bg-emerald-50 text-primary font-semibold rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">receipt_long</span>
                    <span class="text-sm">Mutasi Poin</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">credit_card</span>
                    <span class="text-sm">Tagihan Iuran</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">person</span>
                    <span class="text-sm">Profil</span>
                </a>
            </nav>
        </div>

        <div class="border-t border-gray-100 pt-5 space-y-4">
            <div class="flex items-center gap-3 px-1">
                <img class="w-10 h-10 rounded-full object-cover border" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150" alt="Avatar">
                <div>
                    <h4 class="text-sm font-semibold text-on-surface leading-tight">{{ Auth::user()->name ?? 'Budi Santoso' }}</h4>
                    <span class="text-xs text-gray-400">Warga RT 01</span>
                </div>
            </div>
            <a href="#" class="w-full flex items-center justify-center gap-2 px-4 py-2.5 border border-gray-200 text-gray-700 bg-gray-50 hover:bg-gray-100 font-medium rounded-xl text-xs transition-all">
                <span class="material-symbols-outlined icon-unfilled text-[18px]">logout</span>
                Logout
            </a>
        </div>
    </aside>

    <div class="flex-1 flex flex-col min-h-screen">
        
        <header class="h-[60px] bg-transparent flex items-center justify-between px-6 mb-4">
            <div class="flex items-center gap-1.5">
                <span class="text-lg font-semibold text-on-surface">Halo, {{ Auth::user()->name ?? 'Nama Warga' }}</span>
                <span>👋</span>
            </div>
        </header>

        <main class="flex-1 px-6 space-y-6">
            <div class="space-y-1">
                <h2 class="text-2xl font-bold text-on-surface">Mutasi Poin</h2>
                <p class="text-sm text-gray-500">Pantau riwayat perolehan dan penggunaan poin Anda dari aktivitas pengelolaan sampah mandiri.</p>
            </div>

            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-surface p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3 relative overflow-hidden before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1.5 before:bg-emerald-600">
                    <span class="text-xs font-medium text-gray-400 block tracking-wide">Total Poin Saat Ini</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="text-3xl font-bold text-on-surface">{{ number_format($totalPoin ?? 1470, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex items-center gap-1 text-xs text-emerald-600 font-medium">
                        <span class="material-symbols-outlined text-[16px]">check_circle</span>
                        <span>+{{ number_format($poinMingguIni ?? 100, 0, ',', '.') }} poin minggu ini</span>
                    </div>
                </div>

                <div class="bg-surface p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3 relative overflow-hidden before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1.5 before:bg-blue-500">
                    <span class="text-xs font-medium text-gray-400 block tracking-wide">Poin Diperoleh ({{ $bulanSekarang ?? 'Juni' }})</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="text-3xl font-bold text-on-surface">+{{ number_format($poinMasuk ?? 2270, 0, ',', '.') }}</span>
                    </div>
                    <div class="text-xs text-gray-400 font-medium">Dari {{ $totalAktivitasMasuk ?? 3 }} aktivitas masuk</div>
                </div>

                <div class="bg-surface p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3 relative overflow-hidden before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1.5 before:bg-red-500">
                    <span class="text-xs font-medium text-gray-400 block tracking-wide">Poin Digunakan ({{ $bulanSekarang ?? 'Juni' }})</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="text-3xl font-bold text-on-surface">-{{ number_format($poinKeluar ?? 850, 0, ',', '.') }}</span>
                    </div>
                    <div class="text-xs text-gray-400 font-medium">Digunakan untuk iuran RT</div>
                </div>
            </section>

            <section class="bg-surface rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
                <div class="p-4 border-b border-gray-50 flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 px-3 py-2 border border-gray-200 rounded-xl text-xs font-medium text-gray-600 bg-gray-50/50">
                            <span class="material-symbols-outlined icon-unfilled text-[18px]">calendar_today</span>
                            <span>{{ $bulanSekarang ?? 'Juni' }} 2026</span>
                        </div>

                        <div class="relative inline-block text-left">
                            <select x-model="kategoriFilter" class="appearance-none pl-4 pr-10 py-2 border border-gray-200 rounded-xl text-xs font-bold text-on-surface bg-gray-50/50 focus:ring-emerald-500 focus:border-emerald-500 cursor-pointer outline-none">
                                <option value="semua">Semua Kategori</option>
                                <option value="setoran">Setoran</option>
                                <option value="iuran">Iuran</option>
                                <option value="bonus">Bonus</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400 text-[18px]">expand_more</span>
                        </div>
                    </div>

                    <button @click="alert('Fitur Ekspor PDF/Excel Berhasil Dipicu!')" class="flex items-center gap-2 px-4 py-2 border border-emerald-200 text-emerald-700 bg-emerald-50/50 hover:bg-emerald-50 font-bold rounded-xl text-xs transition-all">
                        <span class="material-symbols-outlined icon-unfilled text-[18px]">download</span>
                        Ekspor Laporan
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-gray-50/50 border-b border-gray-100">
                            <tr>
                                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-widest">Tanggal</th>
                                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-widest">Keterangan</th>
                                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-widest text-center">Kategori</th>
                                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-widest text-right">Jumlah (Poin)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <template x-for="item in filteredTransaksi">
                                <tr class="hover:bg-gray-50/30 transition-colors">
                                    <td class="px-6 py-5 text-xs font-medium text-on-surface" x-text="item.tgl"></td>
                                    <td class="px-6 py-5">
                                        <div class="text-xs font-bold text-on-surface" x-text="item.judul"></div>
                                        <div class="text-[10px] text-gray-400" x-text="item.detail"></div>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <span class="px-2.5 py-1 text-[10px] font-bold rounded-md uppercase" 
                                              :class="{
                                                 'bg-emerald-100 text-emerald-700': item.kat === 'setoran',
                                                 'bg-blue-100 text-blue-700': item.kat === 'iuran',
                                                 'bg-gray-800 text-white tracking-wider': item.kat === 'bonus'
                                              }" x-text="item.kat"></span>
                                    </td>
                                    <td class="px-6 py-5 text-right text-sm font-bold" 
                                        :class="item.tipe === 'plus' ? 'text-emerald-600' : 'text-red-500'"
                                        x-text="item.poin"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>

                <div class="p-5 bg-white border-t border-gray-50 flex items-center justify-between">
                    <p class="text-xs text-gray-400 font-medium">Menampilkan data berdasarkan filter</p>
                </div>
            </section>
        </main>
    </div>

</body>
</html>