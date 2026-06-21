<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f8f9ff",
                        "secondary-fixed-dim": "#bdcac1",
                        "primary-fixed-dim": "#8bd79b",
                        "secondary-fixed": "#d9e6dd",
                        "inverse-primary": "#8bd79b",
                        "on-error": "#ffffff",
                        "inverse-surface": "#213145",
                        "primary-container": "#166534",
                        "primary": "#004c22",
                        "background": "#f8f9ff",
                        "error-container": "#ffdad6",
                        "on-surface-variant": "#404940",
                        "surface-tint": "#1f6c3a",
                        "tertiary": "#004565",
                        "inverse-on-surface": "#eaf1ff",
                        "on-tertiary-fixed": "#001e2f",
                        "secondary-container": "#d9e6dd",
                        "surface-variant": "#d3e4fe",
                        "surface-container-highest": "#d3e4fe",
                        "on-primary-fixed": "#00210b",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#005e87",
                        "on-primary-fixed-variant": "#005226",
                        "surface-container-high": "#dce9ff",
                        "on-primary-container": "#93e0a2",
                        "outline": "#707a6f",
                        "on-tertiary-container": "#9dd5ff",
                        "tertiary-fixed-dim": "#89ceff",
                        "secondary": "#55615a",
                        "surface-container": "#e5eeff",
                        "on-surface": "#0b1c30",
                        "surface-container-low": "#eff4ff",
                        "on-secondary": "#ffffff",
                        "outline-variant": "#bfc9bd",
                        "error": "#ba1a1a",
                        "on-secondary-fixed-variant": "#3e4943",
                        "on-secondary-container": "#5b6760",
                        "surface-dim": "#cbdbf5",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#f8f9ff",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed": "#131e19",
                        "tertiary-fixed": "#c9e6ff",
                        "primary-fixed": "#a6f4b5",
                        "on-background": "#0b1c30"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "base": "4px",
                        "xl": "32px",
                        "xs": "4px",
                        "md": "16px",
                        "sm": "8px",
                        "lg": "24px",
                        "sidebar-width": "260px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "code-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "title-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "code-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "title-lg": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen">
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface-container-lowest border-r border-outline-variant flex flex-col py-lg px-md z-50">
        <div class="mb-xl px-md">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">Sustainable Community</p>
        </div>
<<<<<<< HEAD
        <nav class="flex-1 space-y-sm">
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="/dashboard-pengurus-test">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
                <span class="material-symbols-outlined" data-icon="recycling">recycling</span>
                <span class="font-body-md text-body-md">Verifikasi Setoran</span>
            </a>
            
            <a class="flex items-center gap-md bg-secondary-container text-primary font-semibold rounded-lg px-md py-sm transition-all opacity-80 scale-95" href="#">
                <span class="material-symbols-outlined" data-icon="receipt_long" style="font-variation-settings: 'FILL' 1">receipt_long</span>
                <span class="font-body-md text-body-md">Manajemen Iuran</span>
            </a>

            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
                <span class="material-symbols-outlined" data-icon="category">category</span>
=======
        <nav class="flex flex-col gap-2">
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed transition-colors duration-200 rounded-lg" href="{{ route('pengurus-rt.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed transition-colors duration-200 rounded-lg" href="{{ route('pengurus-rt.setor-sampah') }}">
                <span class="material-symbols-outlined">fact_check</span>
                <span class="font-body-md text-body-md">Verifikasi Setoran</span>
            </a>
            <!-- Active Tab -->
            <a class="flex items-center gap-3 px-4 py-3 text-primary bg-secondary-container rounded-lg font-semibold transition-transform active:scale-95" href="{{ route('pengurus-rt.manajemen-iuran') }}">
                <span class="material-symbols-outlined">payments</span>
                <span class="font-body-md text-body-md">Manajemen Iuran</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed transition-colors duration-200 rounded-lg" href="{{ route('pengurus-rt.waste-categories') }}">
                <span class="material-symbols-outlined">category</span>
>>>>>>> be2db534ee81329bdc96731711d718b5391e7324
                <span class="font-body-md text-body-md">Kategori Sampah</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
                <span class="material-symbols-outlined" data-icon="bar_chart">bar_chart</span>
                <span class="font-body-md text-body-md">Laporan</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span class="font-body-md text-body-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto space-y-sm border-t border-outline-variant pt-lg">
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="font-label-md text-label-md">Bantuan</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-label-md text-label-md">Keluar</span>
            </a>
        </div>
    </aside>

    <header class="flex justify-between items-center h-16 px-lg ml-[260px] md:ml-[var(--sidebar-width,260px)] w-[calc(100%-260px)] md:w-[calc(100%-var(--sidebar-width,260px))] bg-surface-container-lowest border-b border-outline-variant fixed top-0 right-0 z-40">
        <div class="flex items-center gap-md">
            <div class="relative">
                <span class="absolute inset-y-0 left-3 flex items-center text-on-surface-variant">
                    <span class="material-symbols-outlined" data-icon="search">search</span>
                </span>
                <input class="bg-surface rounded-full py-sm pl-10 pr-md border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary text-body-md w-64" placeholder="Cari data warga..." type="text" />
            </div>
        </div>
        
        <div class="flex items-center gap-md ml-auto">
            <button class="relative text-on-surface-variant hover:text-primary transition-colors p-sm">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                <span class="absolute top-1 right-1 bg-error text-white text-[10px] rounded-full w-4 h-4 flex items-center justify-center">3</span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors p-sm mr-sm">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
            </button>
            <div class="flex items-center gap-sm border-l border-outline-variant pl-md">
                <div class="text-right">
                    <p class="font-label-md text-label-md text-on-surface whitespace-nowrap">Budi Santoso</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">Pengurus RT 04</p>
                </div>
                <img class="w-10 h-10 rounded-full border border-outline-variant object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvp77FnINR4Y3rgOHQpm0OaJw6OyqCyKT1Z7iKvSwnxEd_tdja-L8cN7QpnX_G84JM2d7mUdDB8cMY7ya6_qLkMVZkpkgbnIlTZ-SHxyvHaajfQYRxFHqwUphugbt0R7uZC_Yo_Kv1CGAM9Y38pbSuPOqz-eAO88pxfdswmH8egc262cgp393_-TOhDcwG-SrRjNU5Da4BRQo1gV1v92ENRBXoyWrx10RWYq4a1p73Dln4CT8ndkSj9a4RnYkKv88PvHcGDTnNLbg" alt="Budi Santoso" />
            </div>
        </div>
    </header>

    <main class="ml-sidebar-width pt-24 pb-xl px-lg">
        <div class="max-w-container-max mx-auto space-y-lg">
            
            <div id="iuran-main-view" class="space-y-lg">
                <div class="mb-md">
                    <h2 class="text-2xl font-bold text-primary">Manajemen Iuran</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-md">
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-md shadow-sm">
                        <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-xs">Total Tagihan Bulan Ini</p>
                        <h3 class="text-xl font-bold text-on-surface">Rp 12.450.000</h3>
                        <p class="text-[10px] text-primary font-bold mt-xs">▲ 4.2% dari bln lalu</p>
                    </div>
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-md shadow-sm">
                        <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-xs">Iuran Terkumpul</p>
                        <h3 class="text-xl font-bold text-on-surface">Rp 9.800.000</h3>
                        <div class="w-full bg-surface h-1.5 rounded-full mt-2 overflow-hidden">
                            <div class="bg-primary h-1.5 rounded-full" style="width: 78.7%"></div>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-md shadow-sm">
                        <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-xs">Warga Belum Bayar</p>
                        <h3 class="text-xl font-bold text-on-surface">142 KK</h3>
                        <p class="text-[10px] text-error font-semibold mt-xs underline cursor-pointer">Segera Ingatkan</p>
                    </div>
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-md shadow-sm">
                        <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-xs">Persentase Pelunasan</p>
                        <h3 class="text-xl font-bold text-on-surface">78%</h3>
                        <p class="text-[10px] text-on-surface-variant mt-xs">Update: Hari ini, 09:00</p>
                    </div>
                </div>

                <div class="flex flex-wrap justify-between items-center gap-md">
                    <div class="flex gap-sm">
                        <button onclick="toggleViewMode('form')" class="bg-primary text-white text-xs font-bold px-lg py-2.5 rounded-lg flex items-center gap-sm hover:opacity-90 transition-all">
                            <span class="material-symbols-outlined text-sm">add_circle</span> Generate Tagihan Baru
                        </button>
                        <button class="border border-outline-variant text-on-surface text-xs font-bold px-lg py-2.5 rounded-lg flex items-center gap-sm hover:bg-surface-container-low transition-all">
                            <span class="material-symbols-outlined text-sm">file_download</span> Ekspor Laporan
                        </button>
                    </div>
                    
                    <div class="flex gap-sm">
                        <select id="statusFilterDropdown" class="text-xs text-on-surface border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary px-lg py-2.5 bg-surface-container-lowest cursor-pointer min-w-[140px]">
                            <option value="semua">Semua Status</option>
                            <option value="lunas">Lunas</option>
                            <option value="belum">Belum Lunas</option>
                            <option value="tertunda">Tertunda</option>
                        </select>

                        <select class="text-xs text-on-surface border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary px-lg py-2.5 bg-surface-container-lowest cursor-pointer">
                            <option>Juni 2026</option>
                            <option>Mei 2026</option>
                        </select>
                    </div>
                </div>

                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-secondary-container">
                            <tr>
                                <th class="px-lg py-3 text-left font-semibold text-xs text-on-surface tracking-wider">NAMA WARGA</th>
                                <th class="px-lg py-3 text-left font-semibold text-xs text-on-surface tracking-wider">PERIODE</th>
                                <th class="px-lg py-3 text-left font-semibold text-xs text-on-surface tracking-wider">JUMLAH TAGIHAN</th>
                                <th class="px-lg py-3 text-left font-semibold text-xs text-on-surface tracking-wider">STATUS</th>
                                <th class="px-lg py-3 text-center font-semibold text-xs text-on-surface tracking-wider">AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant text-sm" id="tableRecordsBody">
                            <tr class="table-record-item hover:bg-surface-container-low transition-colors" data-status="lunas">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-sm">
                                        <div class="w-8 h-8 rounded-full bg-surface-variant text-primary flex items-center justify-center font-bold text-xs">AS</div>
                                        <div>
                                            <p class="font-medium text-sm text-on-surface">Ahmad Subarjo</p>
                                            <p class="text-[10px] text-on-surface-variant">Blok A-01</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant text-xs">Juni 2026</td>
                                <td class="px-lg py-md font-bold text-on-surface">Rp 150.000</td>
                                <td class="px-lg py-md">
                                    <span class="bg-primary-fixed text-on-primary-fixed text-[11px] font-bold px-3 py-1 rounded-full">Lunas</span>
                                </td>
                                <td class="px-lg py-md text-center">
                                    <a href="#" class="text-primary text-xs font-semibold hover:underline">link</a>
                                </td>
                            </tr>
                            <tr class="table-record-item hover:bg-surface-container-low transition-colors" data-status="belum">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-sm">
                                        <div class="w-8 h-8 rounded-full bg-[#f1f5f9] text-gray-600 flex items-center justify-center font-bold text-xs">BW</div>
                                        <div>
                                            <p class="font-medium text-sm text-on-surface">Budi Wijaya</p>
                                            <p class="text-[10px] text-on-surface-variant">Blok A-02</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant text-xs">Juni 2026</td>
                                <td class="px-lg py-md font-bold text-on-surface">Rp 150.000</td>
                                <td class="px-lg py-md">
                                    <span class="bg-error-container text-on-error-container text-[11px] font-bold px-3 py-1 rounded-full">Belum Lunas</span>
                                </td>
                                <td class="px-lg py-md text-center">
                                    <div class="flex justify-center gap-sm">
                                        <button class="border border-primary text-primary text-[11px] font-bold px-3 py-1 rounded-lg hover:bg-secondary-container transition-all">Cetak</button>
                                        <button class="bg-primary text-white text-[11px] font-bold px-3 py-1 rounded-lg hover:opacity-80 transition-all">Ingatkan</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-record-item hover:bg-surface-container-low transition-colors" data-status="tertunda">
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-sm">
                                        <div class="w-8 h-8 rounded-full bg-tertiary-container text-white flex items-center justify-center font-bold text-xs">CW</div>
                                        <div>
                                            <p class="font-medium text-sm text-on-surface">Citra Wahyuni</p>
                                            <p class="text-[10px] text-on-surface-variant">Blok A-05</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-md text-on-surface-variant text-xs">Juni 2026</td>
                                <td class="px-lg py-md font-bold text-on-surface">Rp 150.000</td>
                                <td class="px-lg py-md">
                                    <span class="bg-surface-variant text-on-surface text-[11px] font-bold px-3 py-1 rounded-full">Tertunda</span>
                                </td>
                                <td class="px-lg py-md text-center">
                                    <button class="bg-primary text-white text-[11px] font-bold px-4 py-1 rounded-lg hover:opacity-80 transition-all shadow-sm mx-auto">Verifikasi</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="px-lg py-md bg-surface border-t border-outline-variant flex justify-between items-center">
                        <p id="counterRowsText" class="text-xs text-on-surface-variant">Menampilkan seluruh data warga</p>
                        <div class="bg-primary text-white text-xs font-bold w-6 h-6 flex items-center justify-center rounded-md">1</div>
                    </div>
                </div>
            </div>

            <div id="generate-billing-form-view" class="hidden space-y-lg">
                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg shadow-sm">
                    <div class="border-b border-outline-variant pb-md mb-lg flex items-center gap-sm">
                        <button onclick="toggleViewMode('main')" class="p-sm hover:bg-surface rounded-full transition-all text-on-surface-variant">
                            <span class="material-symbols-outlined text-xl">arrow_back</span>
                        </button>
                        <h2 class="text-base font-bold text-on-surface">Generate Tagihan Baru</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-lg mb-lg">
                        <div class="space-y-xs">
                            <label class="text-xs font-bold text-on-surface-variant uppercase">Pilih Bulan</label>
                            <select class="w-full border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary px-lg py-3 text-sm bg-surface-container-lowest cursor-pointer">
                                <option disabled selected>Pilih Bulan</option>
                                <option>Januari</option><option>Februari</option><option>Maret</option>
                                <option>April</option><option>Mei</option><option>Juni</option>
                                <option>Juli</option><option>Agustus</option><option>September</option>
                                <option>Oktober</option><option>November</option><option>Desember</option>
                            </select>
                        </div>
                        <div class="space-y-xs">
                            <label class="text-xs font-bold text-on-surface-variant uppercase">Pilih Tahun</label>
                            <select class="w-full border-outline-variant rounded-xl focus:border-primary focus:ring-1 focus:ring-primary px-lg py-3 text-sm bg-surface-container-lowest cursor-pointer">
                                <option disabled selected>Pilih Tahun</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-md mb-lg">
                        <div class="bg-[#f4faf6] border border-emerald-50 rounded-xl p-md flex items-center gap-md">
                            <div class="w-10 h-10 bg-secondary-container text-primary rounded-xl flex items-center justify-center">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">groups</span>
                            </div>
                            <div>
                                <p class="text-[10px] text-on-surface-variant font-bold uppercase">Total Warga</p>
                                <p class="text-base font-bold text-on-surface">142 KK</p>
                            </div>
                        </div>
                        <div class="bg-[#f4faf6] border border-emerald-50 rounded-xl p-md flex items-center gap-md">
                            <div class="w-10 h-10 bg-secondary-container text-primary rounded-xl flex items-center justify-center">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">payments</span>
                            </div>
                            <div>
                                <p class="text-[10px] text-on-surface-variant font-bold uppercase">Estimasi Pendapatan</p>
                                <p class="text-base font-bold text-primary">Rp 12.450.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-surface border border-outline-variant rounded-xl p-md flex items-start gap-sm mb-lg">
                        <span class="material-symbols-outlined text-primary mt-0.5">info</span>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Tagihan akan dikirimkan ke <strong>semua warga</strong> yang terdaftar di sistem. Proses ini tidak dapat dibatalkan setelah dimulai.
                        </p>
                    </div>

                    <div class="flex justify-end gap-sm pt-md border-t border-outline-variant">
                        <button onclick="toggleViewMode('main')" class="px-lg py-2.5 text-xs font-bold text-on-surface-variant hover:text-on-surface transition-all">Batalkan</button>
                        <button onclick="executeGenerateBilling()" class="bg-inverse-surface text-white px-lg py-2.5 text-xs font-bold rounded-lg hover:opacity-90 transition-all shadow-sm">Generate Sekarang</button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
        // Smooth Table Filter Execution
        document.getElementById('statusFilterDropdown').addEventListener('change', function(e) {
            const filterValue = e.target.value;
            const records = document.querySelectorAll('.table-record-item');
            let visibleCount = 0;
            
            records.forEach(record => {
                if(filterValue === 'semua') {
                    record.style.display = 'table-row';
                    visibleCount++;
                } else {
                    if(record.getAttribute('data-status') === filterValue) {
                        record.style.display = 'table-row';
                        visibleCount++;
                    } else {
                        record.style.display = 'none';
                    }
                }
            });
            document.getElementById('counterRowsText').innerText = `Menampilkan ${visibleCount} dari ${records.length} Warga`;
        });

        // View Mode Switcher
        function toggleViewMode(targetView) {
            const mainViewBlock = document.getElementById('iuran-main-view');
            const formViewBlock = document.getElementById('generate-billing-form-view');
            
            if(targetView === 'form') {
                mainViewBlock.classList.add('hidden');
                formViewBlock.classList.remove('hidden');
            } else {
                formViewBlock.classList.add('hidden');
                mainViewBlock.classList.remove('hidden');
            }
            window.scrollTo({ top: 0 });
        }

        function executeGenerateBilling() {
            alert('Sukses! Tagihan iuran baru berhasil digenerate dan didistribusikan ke seluruh warga.');
            toggleViewMode('main');
        }
    </script>
</body>

</html>