<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Setor Sampah</title>
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
                        "background": "#f8f9ff",
                        "surface": "#ffffff",
                        "on-surface": "#0b1c30",
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
        input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; margin: 0; }
    </style>
</head>

<body class="bg-[#f8f9ff] text-on-surface font-sans min-h-screen flex p-4 gap-4" x-data="setorSampah()">

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
                <a href="#" class="flex items-center gap-4 px-4 py-3 bg-[#e8f5e9] text-primary font-semibold rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px] icon-filled">delete</span>
                    <span class="text-sm">Setor Sampah</span>
                </a>
                <a href="/mutasi-poin-test" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">receipt_long</span>
                    <span class="text-sm font-medium">Mutasi Poin</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">credit_card</span>
                    <span class="text-sm font-medium">Tagihan Iuran</span>
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

    <div class="flex-1 flex flex-col h-[calc(100vh-2rem)] overflow-hidden">
        <header class="h-[60px] flex items-center justify-between px-6 mb-2 shrink-0">
            <div class="flex items-center gap-1.5">
                <span class="text-lg font-semibold text-on-surface">Halo, Arafly ramdani</span>
                <span>👋</span>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 hover:bg-gray-100 rounded-full relative"><span class="material-symbols-outlined text-[22px]">notifications</span></button>
                <button class="p-2 hover:bg-gray-100 rounded-full"><span class="material-symbols-outlined text-[22px]">settings</span></button>
            </div>
        </header>

        <main class="flex-1 px-6 overflow-y-auto pb-20">
            <form action="#" method="POST" enctype="multipart/form-data" class="max-w-5xl bg-surface rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
                @csrf
                
                <div class="flex items-center gap-2.5 pb-2">
                    <span class="material-symbols-outlined text-primary text-[24px]">assignment</span>
                    <h2 class="font-bold text-gray-800 text-base">Form Pengajuan Setor Sampah</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2 relative">
                        <label class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Tanggal Setor</label>
                        <div @click="showKalender = !showKalender" @click.away="showKalender = false"
                             class="flex items-center justify-between px-4 py-3 bg-[#eef2f6] hover:bg-gray-100 rounded-xl cursor-pointer transition-all border border-transparent"
                             :class="showKalender ? 'ring-2 ring-primary bg-white border-transparent' : ''">
                            <span class="text-sm font-medium text-[#0f2942]" x-text="tanggalTerpilih || 'Masukan Tanggal'"></span>
                            <span class="material-symbols-outlined text-gray-400 text-[20px] transition-transform" :class="showKalender ? 'rotate-180' : ''">expand_more</span>
                        </div>

                        <div x-show="showKalender" x-cloak x-transition
                             class="absolute top-full left-0 mt-1 z-50 bg-white border border-gray-100 shadow-xl rounded-2xl p-5 w-[300px]">
                            <div class="flex items-center justify-center mb-4">
                                <h4 class="font-bold text-sm text-gray-800">Juni 2026</h4>
                            </div>
                            <div class="grid grid-cols-7 text-center text-[10px] font-bold text-gray-400 mb-2 uppercase tracking-wider">
                                <span>San</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
                            </div>
                            <div class="grid grid-cols-7 gap-y-1 text-center">
                                <template x-for="day in daysInMonth">
                                    <button type="button" @click="pilihTanggal(day)" 
                                            class="w-7 h-7 flex items-center justify-center text-xs font-semibold rounded-full transition-all"
                                            :class="day === 26 ? 'bg-[#b6f05a] text-[#004c22]' : (day === null ? '' : 'text-gray-700 hover:bg-gray-100')">
                                        <span x-text="day"></span>
                                    </button>
                                </template>
                            </div>
                        </div>
                        <input type="hidden" name="tanggal_setor" :value="tanggalTerpilih">
                    </div>

                    <div class="space-y-2">
                        <label class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Foto Sampah</label>
                        <div class="relative h-[46px] border border-dashed border-gray-300 rounded-xl flex items-center justify-center bg-white hover:bg-gray-50 transition-all group cursor-pointer">
                            <input type="file" name="foto_sampah" class="absolute inset-0 opacity-0 cursor-pointer">
                            <div class="flex items-center gap-2 text-gray-400 group-hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">add_photo_alternate</span>
                                <span class="text-xs font-medium">Klik untuk unggah foto</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="text-[11px] font-bold text-gray-400 uppercase tracking-wider block">Rincian Sampah</label>
                    
                    <div class="space-y-2.5">
                        <template x-for="(item, index) in barisSampah" :key="index">
                            <div class="flex items-center gap-3">
                                
                                <div class="flex-1 relative" @click.away="item.openDropdown = false">
                                    <div @click="item.openDropdown = !item.openDropdown"
                                         class="w-full flex items-center justify-between px-4 py-3 bg-[#eef2f6] rounded-xl cursor-pointer text-sm font-medium text-[#0f2942] border border-transparent"
                                         :class="item.openDropdown ? 'ring-2 ring-primary bg-white' : ''">
                                        <span x-text="item.label || 'Pilih Kategori Sampah'"></span>
                                        <span class="material-symbols-outlined text-gray-400 text-[20px]">expand_more</span>
                                    </div>
                                    
                                    <div x-show="item.openDropdown" x-cloak x-transition
                                         class="absolute left-0 right-0 mt-1 bg-white border border-gray-100 shadow-lg rounded-xl overflow-hidden z-40 max-h-[200px] overflow-y-auto">
                                        <template x-for="cat in listKategori">
                                            <div @click="pilihKategori(index, cat)" 
                                                 class="px-4 py-2.5 text-sm font-medium text-[#0f2942] hover:bg-[#eef2f6] cursor-pointer border-b border-gray-50 last:border-none"
                                                 :class="item.kategori === cat.value ? 'bg-[#e8f5e9] text-primary' : ''"
                                                 x-text="cat.text">
                                            </div>
                                        </template>
                                    </div>
                                </div>

                                <div class="w-24 md:w-28 relative">
                                    <input type="number" x-model="item.bobot" @input="updateTotal()"
                                           class="w-full pl-4 pr-10 py-3 bg-[#eef2f6] border-none rounded-xl text-sm font-bold text-[#0f2942] text-center focus:ring-2 focus:ring-primary" placeholder="0">
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[11px] font-bold text-gray-400 uppercase">kg</span>
                                </div>

                                <button type="button" @click="hapusBaris(index)" x-show="barisSampah.length > 1"
                                        class="w-11 h-11 flex items-center justify-center border border-red-100 bg-red-50 text-red-500 rounded-xl hover:bg-red-100 transition-all shrink-0">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </template>
                    </div>

                    <button type="button" @click="tambahBaris()" class="text-xs font-bold text-primary flex items-center gap-1.5 hover:underline pl-0.5 pt-1">
                        <span class="material-symbols-outlined text-[18px]">add_circle</span>
                        Tambah Kategori
                    </button>
                </div>

                <div class="bg-[#e8f5e9] border border-[#c8e6c9] rounded-xl px-4 py-3 flex items-center justify-between">
                    <span class="text-xs font-semibold text-emerald-950">Estimasi Poin</span>
                    <span class="text-sm font-black text-primary" x-text="`${formatNumber(estimasiTotal)} Poin`">0 Poin</span>
                </div>

                <div class="flex items-center justify-end gap-2 pt-2">
                    <button type="submit" class="px-8 py-2.5 bg-primary hover:bg-emerald-900 text-white font-bold rounded-xl text-xs transition-all shadow-sm">
                        Kirim Pengajuan
                    </button>
                    <button type="button" class="px-6 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-xl text-xs transition-all">
                        Batal
                    </button>
                </div>
            </form>
        </main>
    </div>

    <script>
        function setorSampah() {
            return {
                showKalender: false,
                tanggalTerpilih: '',
                daysInMonth: [null, null, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30],
                
                // Daftar Variasi Kategori Sampah Lengkap Sesuai Mockup Gambar
                listKategori: [
                    { value: 'Kaca', text: 'Kaca = 90 poin/kg', rate: 90 },
                    { value: 'Plastik', text: 'Plastik = 10 poin/kg', rate: 10 },
                    { value: 'Kertas', text: 'Kertas = 5 poin/kg', rate: 5 },
                    { value: 'Logam', text: 'Logam = 20 poin/kg', rate: 20 }
                ],
                
                barisSampah: [{ kategori: '', label: 'Pilih Kategori Sampah', bobot: '', poinPerKg: 0, openDropdown: false }],
                estimasiTotal: 0,
                
                pilihTanggal(day) {
                    if (day) {
                        this.tanggalTerpilih = `${day} Juni 2026`;
                        this.showKalender = false;
                    }
                },

                tambahBaris() {
                    this.barisSampah.push({ kategori: '', label: 'Pilih Kategori Sampah', bobot: '', poinPerKg: 0, openDropdown: false });
                },

                hapusBaris(index) {
                    this.barisSampah.splice(index, 1);
                    this.updateTotal();
                },

                pilihKategori(index, cat) {
                    this.barisSampah[index].kategori = cat.value;
                    this.barisSampah[index].label = cat.text;
                    this.barisSampah[index].poinPerKg = cat.rate;
                    this.barisSampah[index].openDropdown = false;
                    this.updateTotal();
                },

                updateTotal() {
                    this.estimasiTotal = this.barisSampah.reduce((sum, item) => {
                        return sum + (parseFloat(item.bobot || 0) * item.poinPerKg);
                    }, 0);
                },

                formatNumber(val) {
                    return new Intl.NumberFormat('id-ID').format(val);
                }
            }
        }
    </script>
</body>
</html>