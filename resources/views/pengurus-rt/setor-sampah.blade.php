<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Riwayat Setoran | PointWaste</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-error-container": "#93000a",
                        "error": "#ba1a1a",
                        "tertiary-fixed-dim": "#89ceff",
                        "primary": "#004c22",
                        "background": "#f8f9ff",
                        "on-surface-variant": "#404940",
                        "on-secondary-fixed": "#131e19",
                        "outline": "#707a6f",
                        "surface-container": "#e5eeff",
                        "secondary-fixed-dim": "#bdcac1",
                        "on-secondary-fixed-variant": "#3e4943",
                        "on-tertiary-container": "#9dd5ff",
                        "surface-container-high": "#dce9ff",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-container-low": "#eff4ff",
                        "primary-fixed-dim": "#8bd79b",
                        "surface-container-highest": "#d3e4fe",
                        "secondary": "#55615a",
                        "inverse-primary": "#8bd79b",
                        "secondary-fixed": "#d9e6dd",
                        "surface-variant": "#d3e4fe",
                        "on-primary-fixed-variant": "#005226",
                        "on-primary-container": "#93e0a2",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "on-error": "#ffffff",
                        "primary-fixed": "#a6f4b5",
                        "error-container": "#ffdad6",
                        "secondary-container": "#d9e6dd",
                        "on-secondary-container": "#5b6760",
                        "inverse-on-surface": "#eaf1ff",
                        "tertiary-container": "#005e87",
                        "surface-tint": "#1f6c3a",
                        "surface-container-lowest": "#ffffff",
                        "primary-container": "#166534",
                        "inverse-surface": "#213145",
                        "on-background": "#0b1c30",
                        "on-tertiary-fixed": "#001e2f",
                        "tertiary-fixed": "#c9e6ff",
                        "on-primary-fixed": "#00210b",
                        "tertiary": "#004565",
                        "surface-bright": "#f8f9ff",
                        "outline-variant": "#bfc9bd",
                        "surface-dim": "#cbdbf5",
                        "on-surface": "#0b1c30",
                        "surface": "#f8f9ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xl": "32px",
                        "md": "16px",
                        "sidebar-width": "260px",
                        "xs": "4px",
                        "lg": "24px",
                        "gutter": "24px",
                        "sm": "8px",
                        "base": "4px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "title-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
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
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["24px", {
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

        body {
            background-color: #f8f9ff;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
</head>

<body class="font-body-md text-on-surface">
    <!-- Sidebar Navigation -->
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width border-r border-outline-variant bg-surface-container-lowest flex flex-col py-lg px-md z-50">
        <div class="mb-xl px-sm">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste</h1>
            <p class="font-label-md text-label-md text-secondary opacity-70">Resident Portal</p>
        </div>
        <nav class="flex-1 space-y-xs">
            <a class="flex items-center gap-md px-md py-sm text-secondary hover:bg-surface-container-low transition-colors rounded-lg group" href="{{ route('pengurus-rt.dashboard') }}">
                <span class="material-symbols-outlined text-secondary group-hover:text-primary">dashboard</span>
                <span class="font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm bg-secondary-container text-primary font-semibold rounded-lg" href="{{ route('pengurus-rt.setor-sampah') }}">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">recycling</span>
                <span class="font-body-md">Setor Sampah</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-secondary hover:bg-surface-container-low transition-colors rounded-lg group" href="#">
                <span class="material-symbols-outlined text-secondary group-hover:text-primary">account_balance_wallet</span>
                <span class="font-body-md">Mutasi Poin</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-secondary hover:bg-surface-container-low transition-colors rounded-lg group" href="{{ route('pengurus-rt.manajemen-iuran') }}">
                <span class="material-symbols-outlined text-secondary group-hover:text-primary">receipt_long</span>
                <span class="font-body-md">Tagihan Iuran</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-secondary hover:bg-surface-container-low transition-colors rounded-lg group" href="#">
                <span class="material-symbols-outlined text-secondary group-hover:text-primary">person</span>
                <span class="font-body-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto p-md bg-secondary-container/30 rounded-xl">
            <div class="flex items-center gap-sm mb-md">
                <img alt="Resident Profile" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" data-alt="A professional headshot of a friendly man in his 30s, clean-cut with a warm smile, against a minimalist soft gray background. The lighting is high-key and bright, matching a professional corporate modern aesthetic. The color palette is composed of soft neutrals with high clarity and sharp focus." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjV6PiXHQhTfb3t38pkeGSof6EC1s9bV4grxHt9hi2TZuLifYqyLN55_lmZSbaFXyFPsI9fuW2CxhXQHCEUhG_0sTg_W2PfNIRENpJBxu9U8MhGJ1Ncm_0ZRDEc5PsX844n-DGnf_Ot4-4lMkupOj1pTY_d38jjQ9sf4mJD-rpeGUxdzZAOC2wGm68KZCUN3Ct_xoDiYW6rHBRBQ5tBsjLeZrvxnPprEWlsj40WGulh1SKfmbC8RU3Eg_Aer1Acc8OQn-X95HS9Tc" />
                <div>
                    <p class="font-label-md text-on-surface font-bold">Andi Pratama</p>
                    <p class="text-[10px] text-secondary uppercase tracking-wider">Silver Member</p>
                </div>
            </div>
            <button class="w-full bg-primary text-white font-semibold py-sm px-md rounded-lg flex items-center justify-center gap-xs hover:bg-primary/90 transition-all active:scale-95">
                <span class="material-symbols-outlined text-[18px]">add</span>
                <span class="text-xs">Setor Sekarang</span>
            </button>
        </div>
    </aside>
    <!-- Top Navigation Bar -->
    <header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 bg-surface border-b border-outline-variant flex justify-between items-center px-xl z-40">
        <div class="flex items-center gap-md flex-1">
            <h2 class="font-title-lg text-title-lg text-primary">Riwayat Setoran</h2>
            <div class="relative w-full max-w-md ml-lg">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" placeholder="Cari ID Transaksi..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-md">
            <button class="p-2 text-secondary hover:bg-secondary-container transition-all rounded-full relative">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-error rounded-full border-2 border-white"></span>
            </button>
            <button class="p-2 text-secondary hover:bg-secondary-container transition-all rounded-full">
                <span class="material-symbols-outlined">settings</span>
            </button>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="ml-sidebar-width pt-16 min-h-screen">
        <div class="max-w-container-max mx-auto p-xl">
            <!-- Summary Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-xl">
                <!-- Total Setoran Card -->
                <div class="bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex items-center gap-lg group hover:border-primary transition-colors">
                    <div class="w-14 h-14 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[28px]">scale</span>
                    </div>
                    <div>
                        <p class="font-label-md text-secondary uppercase tracking-widest mb-xs">Total Setoran (kg)</p>
                        <h3 class="font-title-lg text-display-lg text-primary leading-tight">124.5 <span class="text-headline-md font-normal text-secondary">kg</span></h3>
                    </div>
                </div>
                <!-- Total Poin Card -->
                <div class="bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex items-center gap-lg group hover:border-primary transition-colors">
                    <div class="w-14 h-14 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary">
                        <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">stars</span>
                    </div>
                    <div>
                        <p class="font-label-md text-secondary uppercase tracking-widest mb-xs">Total Poin dari Setoran</p>
                        <h3 class="font-title-lg text-display-lg text-primary leading-tight">2.450 <span class="text-headline-md font-normal text-secondary">pts</span></h3>
                    </div>
                </div>
                <!-- Menunggu Verifikasi Card -->
                <div class="bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex items-center gap-lg group hover:border-primary transition-colors">
                    <div class="w-14 h-14 rounded-full bg-orange-100 flex items-center justify-center text-orange-700">
                        <span class="material-symbols-outlined text-[28px]">pending_actions</span>
                    </div>
                    <div>
                        <p class="font-label-md text-secondary uppercase tracking-widest mb-xs">Menunggu Verifikasi</p>
                        <h3 class="font-title-lg text-display-lg text-primary leading-tight">03 <span class="text-headline-md font-normal text-secondary">Log</span></h3>
                    </div>
                </div>
            </div>
            <!-- Content Header with Filters -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-lg">
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Data Riwayat Setoran</h3>
                    <p class="font-body-md text-secondary">Kelola dan pantau aktivitas daur ulang Anda.</p>
                </div>
                <div class="flex flex-wrap items-center gap-sm">
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-md text-secondary px-xs">Rentang Tanggal</label>
                        <div class="flex items-center gap-xs px-md py-2 border border-outline-variant rounded-lg bg-white">
                            <span class="material-symbols-outlined text-outline text-[18px]">calendar_today</span>
                            <input class="border-none p-0 text-body-md focus:ring-0 w-48" placeholder="1 Okt 2023 - 31 Okt 2023" type="text" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-xs">
                        <label class="font-label-md text-secondary px-xs">Status</label>
                        <select class="px-md py-2 border border-outline-variant rounded-lg bg-white text-body-md focus:border-primary focus:ring-0">
                            <option>Semua Status</option>
                            <option>Selesai</option>
                            <option>Menunggu Verifikasi</option>
                            <option>Dibatalkan</option>
                        </select>
                    </div>
                    <button class="bg-surface-container border border-outline-variant text-primary font-semibold px-md h-[42px] mt-auto rounded-lg flex items-center gap-xs hover:bg-primary hover:text-white transition-all">
                        <span class="material-symbols-outlined text-[18px]">filter_list</span>
                        Filter
                    </button>
                    <button class="bg-primary text-white font-semibold px-lg h-[42px] mt-auto rounded-lg hover:bg-primary/90 transition-all shadow-sm">
                        Unduh PDF
                    </button>
                </div>
            </div>
            <!-- Transaction Table Container -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                <div class="overflow-x-auto custom-scrollbar">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-secondary-container/30">
                            <tr>
                                <th class="px-lg py-md font-label-md text-secondary uppercase tracking-wider border-b border-outline-variant">Tanggal</th>
                                <th class="px-lg py-md font-label-md text-secondary uppercase tracking-wider border-b border-outline-variant">ID Transaksi</th>
                                <th class="px-lg py-md font-label-md text-secondary uppercase tracking-wider border-b border-outline-variant">Kategori</th>
                                <th class="px-lg py-md font-label-md text-secondary uppercase tracking-wider border-b border-outline-variant">Berat (kg)</th>
                                <th class="px-lg py-md font-label-md text-secondary uppercase tracking-wider border-b border-outline-variant">Poin</th>
                                <th class="px-lg py-md font-label-md text-secondary uppercase tracking-wider border-b border-outline-variant">Status</th>
                                <th class="px-lg py-md font-label-md text-secondary uppercase tracking-wider border-b border-outline-variant text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <!-- Row 1 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg py-md">
                                    <p class="font-body-md text-on-surface font-semibold">25 Okt 2023</p>
                                    <p class="text-[10px] text-secondary">09:42 WIB</p>
                                </td>
                                <td class="px-lg py-md">
                                    <code class="bg-surface-container px-2 py-0.5 rounded text-primary font-semibold text-xs">PW-20231025-01</code>
                                </td>
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-xs">
                                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                                        <span class="font-body-md">Plastik PET</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md font-title-lg text-primary">5.2</td>
                                <td class="px-lg py-md">
                                    <span class="text-primary font-bold">+150</span>
                                </td>
                                <td class="px-lg py-md">
                                    <span class="inline-flex items-center gap-xs px-3 py-1 rounded-full bg-green-100 text-green-700 font-semibold text-[11px] border border-green-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-700 animate-pulse"></span>
                                        SELESAI
                                    </span>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <button class="p-1.5 text-outline hover:text-primary hover:bg-primary/10 rounded-lg transition-all">
                                        <span class="material-symbols-outlined text-[20px]">visibility</span>
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg py-md">
                                    <p class="font-body-md text-on-surface font-semibold">24 Okt 2023</p>
                                    <p class="text-[10px] text-secondary">14:15 WIB</p>
                                </td>
                                <td class="px-lg py-md">
                                    <code class="bg-surface-container px-2 py-0.5 rounded text-primary font-semibold text-xs">PW-20231024-03</code>
                                </td>
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-xs">
                                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                                        <span class="font-body-md">Kertas HVS</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md font-title-lg text-primary">12.0</td>
                                <td class="px-lg py-md">
                                    <span class="text-orange-600 font-bold italic">Checking...</span>
                                </td>
                                <td class="px-lg py-md">
                                    <span class="inline-flex items-center gap-xs px-3 py-1 rounded-full bg-amber-100 text-amber-700 font-semibold text-[11px] border border-amber-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-700"></span>
                                        VERIFIKASI
                                    </span>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <button class="p-1.5 text-outline hover:text-primary hover:bg-primary/10 rounded-lg transition-all">
                                        <span class="material-symbols-outlined text-[20px]">visibility</span>
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg py-md">
                                    <p class="font-body-md text-on-surface font-semibold">22 Okt 2023</p>
                                    <p class="text-[10px] text-secondary">11:05 WIB</p>
                                </td>
                                <td class="px-lg py-md">
                                    <code class="bg-surface-container px-2 py-0.5 rounded text-primary font-semibold text-xs">PW-20231022-07</code>
                                </td>
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-xs">
                                        <span class="w-2 h-2 rounded-full bg-slate-500"></span>
                                        <span class="font-body-md">Logam</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md font-title-lg text-primary">2.5</td>
                                <td class="px-lg py-md">
                                    <span class="text-primary font-bold">+200</span>
                                </td>
                                <td class="px-lg py-md">
                                    <span class="inline-flex items-center gap-xs px-3 py-1 rounded-full bg-green-100 text-green-700 font-semibold text-[11px] border border-green-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-700"></span>
                                        SELESAI
                                    </span>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <button class="p-1.5 text-outline hover:text-primary hover:bg-primary/10 rounded-lg transition-all">
                                        <span class="material-symbols-outlined text-[20px]">visibility</span>
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="hover:bg-surface-container-low transition-colors group opacity-70">
                                <td class="px-lg py-md">
                                    <p class="font-body-md text-on-surface font-semibold">20 Okt 2023</p>
                                    <p class="text-[10px] text-secondary">08:20 WIB</p>
                                </td>
                                <td class="px-lg py-md">
                                    <code class="bg-surface-container px-2 py-0.5 rounded text-primary font-semibold text-xs">PW-20231020-02</code>
                                </td>
                                <td class="px-lg py-md">
                                    <div class="flex items-center gap-xs">
                                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                                        <span class="font-body-md">Plastik Mixed</span>
                                    </div>
                                </td>
                                <td class="px-lg py-md font-title-lg text-primary">0.0</td>
                                <td class="px-lg py-md">
                                    <span class="text-error font-bold">0</span>
                                </td>
                                <td class="px-lg py-md">
                                    <span class="inline-flex items-center gap-xs px-3 py-1 rounded-full bg-red-100 text-red-700 font-semibold text-[11px] border border-red-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-red-700"></span>
                                        DIBATALKAN
                                    </span>
                                </td>
                                <td class="px-lg py-md text-right">
                                    <button class="p-1.5 text-outline hover:text-primary hover:bg-primary/10 rounded-lg transition-all">
                                        <span class="material-symbols-outlined text-[20px]">info</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="bg-surface-container-low/50 px-lg py-md flex items-center justify-between border-t border-outline-variant">
                    <p class="font-label-md text-secondary">Menampilkan 1-10 dari 42 transaksi</p>
                    <div class="flex items-center gap-xs">
                        <button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center bg-white text-secondary hover:bg-surface-container transition-colors disabled:opacity-50" disabled="">
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <button class="w-8 h-8 rounded border border-primary flex items-center justify-center bg-primary text-white text-xs font-bold">1</button>
                        <button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center bg-white text-xs font-bold text-secondary hover:bg-surface-container transition-colors">2</button>
                        <button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center bg-white text-xs font-bold text-secondary hover:bg-surface-container transition-colors">3</button>
                        <button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center bg-white text-secondary hover:bg-surface-container transition-colors">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Bento-style Tips Section -->
            <div class="mt-xl grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <div class="md:col-span-8 bg-primary-container text-on-primary-container p-xl rounded-2xl relative overflow-hidden flex items-center">
                    <div class="relative z-10 max-w-lg">
                        <h4 class="font-headline-md text-white mb-sm">Dapatkan Poin Ekstra Akhir Pekan!</h4>
                        <p class="font-body-md text-white/80 mb-lg">Setiap setoran di hari Sabtu dan Minggu mendapatkan bonus 15% poin loyalitas. Ayo kumpulkan lebih banyak sampah anorganik hari ini!</p>
                        <button class="bg-white text-primary font-bold px-lg py-md rounded-xl hover:bg-secondary-fixed transition-all flex items-center gap-sm">
                            <span class="material-symbols-outlined">rocket_launch</span>
                            Setor Sampah Sekarang
                        </button>
                    </div>
                    <div class="absolute right-0 top-0 h-full w-1/3 bg-white/5 -skew-x-12"></div>
                    <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-primary-fixed-dim/20 rounded-full blur-3xl"></div>
                </div>
                <div class="md:col-span-4 bg-tertiary text-white p-xl rounded-2xl flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center px-2 py-0.5 rounded-full bg-tertiary-fixed text-tertiary text-[10px] font-bold uppercase tracking-wider mb-md">Edu Tip</div>
                        <h4 class="font-title-lg mb-sm">Pisahkan PET & HDPE</h4>
                        <p class="font-body-md text-white/70">Memisahkan jenis plastik memudahkan verifikasi dan bisa menambah nilai poin Anda hingga 5%.</p>
                    </div>
                    <a class="mt-lg text-tertiary-fixed font-bold flex items-center gap-xs hover:gap-md transition-all" href="#">
                        Pelajari Selengkapnya
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Simple micro-interaction for active state simulation
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', function(e) {
                if (!this.classList.contains('bg-secondary-container')) {
                    document.querySelectorAll('nav a').forEach(l => {
                        l.classList.remove('bg-secondary-container', 'text-primary', 'font-semibold');
                        l.classList.add('text-secondary');
                        const icon = l.querySelector('.material-symbols-outlined');
                        if (icon) icon.style.fontVariationSettings = "'FILL' 0";
                    });
                    this.classList.add('bg-secondary-container', 'text-primary', 'font-semibold');
                    this.classList.remove('text-secondary');
                    const icon = this.querySelector('.material-symbols-outlined');
                    if (icon) icon.style.fontVariationSettings = "'FILL' 1";
                }
            });
        });

        // Search bar focus effect
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('ring-2', 'ring-primary/20', 'border-primary');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20', 'border-primary');
        });
    </script>
</body>

</html>