<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Resident Dashboard - PointWaste</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet" />
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

        .active-tab-indicator {
            transition: transform 0.2s ease;
        }

        .bento-card {
            background-color: #ffffff;
            border: 1px solid #E2E8F0;
            transition: all 0.3s ease;
        }

        .bento-card:hover {
            border-color: #166534;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    <!-- Fixed SideNavBar -->
    <aside class="fixed left-0 top-0 h-screen w-[260px] bg-surface-container-lowest border-r border-outline-variant flex flex-col py-lg px-md z-50">
        <div class="font-headline-md text-headline-md font-bold text-primary mb-xl">PointWaste</div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-sm bg-secondary-container text-primary rounded-lg px-md py-sm font-bold scale-[0.98] transition-all" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-sm text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-all" href="#">
                <span class="material-symbols-outlined">recycling</span>
                <span class="font-label-md text-label-md">Setor Sampah</span>
            </a>
            <a class="flex items-center gap-sm text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-all" href="#">
                <span class="material-symbols-outlined">account_balance_wallet</span>
                <span class="font-label-md text-label-md">Mutasi Poin</span>
            </a>
            <a class="flex items-center gap-sm text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-all" href="#">
                <span class="material-symbols-outlined">receipt_long</span>
                <span class="font-label-md text-label-md">Tagihan Iuran</span>
            </a>
            <a class="flex items-center gap-sm text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-all" href="#">
                <span class="material-symbols-outlined">person</span>
                <span class="font-label-md text-label-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto pt-lg border-t border-outline-variant">
            <div class="flex items-center gap-md mb-lg">
                <img alt="Resident Name" class="w-10 h-10 rounded-full bg-surface-variant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPsAPoa4K5kjAIIKbioFe7osFw2X4Gw5H1j42cxSbEZsWQZ8AUrc9G0CR1HX2kieXu7W456tIfJT3OxH7HHW2tBT0VebAPaoUm6lpW5AkGVFiQJQ9IEm9V9aQJ1rxdqxb4dBl4iuxdImPfzY37B3XPWg_MV1WWIrl7SskZIAV-Kdg3nMqoTLmSg9eO1HMLIvOLz0u8TPueKK9QSFArERWs_OY6TqnB-74EVewrl3ae4UKt9ByQX2x3JY6B08luiOtEr7Zadoyq4fw" />
                <div class="overflow-hidden">
                    <p class="font-label-md text-label-md font-bold text-on-surface truncate">Budi Santoso</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">Warga RT 04</p>
                </div>
            </div>
            <button class="w-full flex items-center justify-center gap-sm bg-surface-container text-on-surface-variant px-md py-sm rounded-lg hover:bg-error-container hover:text-error transition-all font-label-md text-label-md">
                <span class="material-symbols-outlined text-[20px]">logout</span>
                Logout
            </button>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-[260px] min-h-screen">
        <!-- TopNavBar (Dashboard Specific) -->
        <header class="sticky top-0 z-40 w-full bg-surface border-b border-outline-variant px-lg py-sm flex justify-between items-center">
            <h1 class="font-title-lg text-title-lg text-primary">Halo, Budi Santoso 👋</h1>
            <div class="flex items-center gap-md">
                <div class="relative">
                    <button class="hover:bg-surface-variant rounded-full p-2 transition-transform active:scale-95">
                        <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-error rounded-full"></span>
                    </button>
                </div>
                <button class="hover:bg-surface-variant rounded-full p-2 transition-transform active:scale-95">
                    <span class="material-symbols-outlined text-on-surface-variant">settings</span>
                </button>
            </div>
        </header>
        <div class="p-lg max-w-container-max mx-auto space-y-lg">
            <!-- Top Row Stats Bento Grid -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-lg">
                <div class="bento-card p-lg rounded-xl relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                    <p class="font-label-md text-label-md text-on-surface-variant mb-xs">Saldo Poin Saat Ini</p>
                    <div class="flex items-baseline gap-xs">
                        <h2 class="font-headline-lg text-headline-lg text-primary">12.450</h2>
                        <span class="font-label-md text-label-md text-on-surface-variant">Poin</span>
                    </div>
                    <p class="text-[11px] text-primary font-semibold mt-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">trending_up</span> +120 poin minggu ini
                    </p>
                </div>
                <div class="bento-card p-lg rounded-xl relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-tertiary"></div>
                    <p class="font-label-md text-label-md text-on-surface-variant mb-xs">Status Iuran Bulanan</p>
                    <div class="flex items-center gap-sm">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Lunas</h2>
                        <span class="bg-primary-fixed text-on-primary-fixed-variant text-[10px] px-2 py-0.5 rounded-full font-bold uppercase">Oktober</span>
                    </div>
                    <p class="text-[11px] text-on-surface-variant mt-2">Jatuh tempo: 10 November 2023</p>
                </div>
                <div class="bento-card p-lg rounded-xl relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-container"></div>
                    <p class="font-label-md text-label-md text-on-surface-variant mb-xs">Total Setoran Sampah</p>
                    <div class="flex items-baseline gap-xs">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">45.2</h2>
                        <span class="font-label-md text-label-md text-on-surface-variant">Kg</span>
                    </div>
                    <p class="text-[11px] text-on-surface-variant mt-2">Setara mitigasi 12kg CO2</p>
                </div>
            </section>
            <!-- Main CTA & Billing -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
                <!-- Large Action Button -->
                <div class="lg:col-span-2 bento-card p-lg rounded-xl flex flex-col gap-lg">
                    <div class="flex items-center justify-between border-b border-outline-variant pb-md">
                        <div class="flex items-center gap-sm">
                            <span class="material-symbols-outlined text-primary">add_circle</span>
                            <h3 class="font-title-lg text-title-lg text-on-surface">Form Pengajuan Setor Sampah</h3>
                        </div>
                        <button class="text-on-surface-variant hover:text-error transition-colors">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <form class="space-y-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                            <div class="space-y-xs">
                                <label class="font-label-md text-label-md text-on-surface-variant">Tanggal Setor</label>
                                <input class="w-full p-md rounded-lg border border-outline-variant bg-surface-container-low focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" type="date" value="2023-10-25" />
                            </div>
                            <div class="space-y-xs">
                                <label class="font-label-md text-label-md text-on-surface-variant">Foto Sampah</label>
                                <div class="w-full h-24 border-2 border-dashed border-outline-variant rounded-lg flex flex-col items-center justify-center gap-xs bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                                    <span class="material-symbols-outlined text-on-surface-variant">add_a_photo</span>
                                    <span class="text-[12px] text-on-surface-variant">Klik untuk unggah foto</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-md">
                            <label class="font-label-md text-label-md text-on-surface-variant">Rincian Sampah</label>
                            <div class="space-y-sm">
                                <div class="flex gap-sm items-end">
                                    <div class="flex-1 space-y-xs">
                                        <select class="w-full p-md rounded-lg border border-outline-variant bg-surface-container-low focus:border-primary outline-none">
                                            <option>Pilih Kategori</option>
                                            <option selected="">Plastik</option>
                                            <option>Kertas</option>
                                            <option>Logam</option>
                                            <option>Minyak Jelantah</option>
                                        </select>
                                    </div>
                                    <div class="w-32 space-y-xs">
                                        <div class="relative">
                                            <input class="w-full p-md pr-10 rounded-lg border border-outline-variant bg-surface-container-low focus:border-primary outline-none" type="number" value="2.5" />
                                            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[12px]">kg</span>
                                        </div>
                                    </div>
                                    <button class="p-md text-error hover:bg-error-container rounded-lg transition-colors" type="button">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </div>
                            </div>
                            <button class="flex items-center gap-xs text-primary font-label-md text-label-md hover:underline" type="button">
                                <span class="material-symbols-outlined text-[18px]">add</span>
                                Tambah Kategori
                            </button>
                        </div>
                        <div class="bg-primary-container/10 p-md rounded-lg flex justify-between items-center">
                            <span class="font-body-md text-body-md text-on-surface-variant">Estimasi Poin</span>
                            <span class="font-title-lg text-title-lg text-primary font-bold">+35 Poin</span>
                        </div>
                        <div class="flex gap-md pt-md">
                            <button class="flex-1 bg-primary text-white py-md rounded-lg font-bold hover:bg-primary-container transition-all active:scale-95" type="submit">Kirim Pengajuan</button>
                            <button class="px-lg py-md border border-outline-variant text-on-surface-variant rounded-lg font-bold hover:bg-surface-container-low transition-all" type="button">Batal</button>
                        </div>
                    </form>
                </div>
                <!-- Billing Card -->
                <div class="bento-card p-lg rounded-xl flex flex-col">
                    <div class="flex justify-between items-start mb-lg">
                        <h3 class="font-title-lg text-title-lg text-on-surface">Tagihan RT</h3>
                        <span class="material-symbols-outlined text-tertiary">receipt</span>
                    </div>
                    <div class="space-y-sm flex-1">
                        <div class="flex justify-between text-on-surface-variant">
                            <span class="font-body-md text-body-md">Periode</span>
                            <span class="font-label-md text-label-md font-bold text-on-surface">November 2023</span>
                        </div>
                        <div class="flex justify-between text-on-surface-variant">
                            <span class="font-body-md text-body-md">Iuran Dasar</span>
                            <span class="font-label-md text-label-md text-on-surface">Rp 50.000</span>
                        </div>
                        <div class="flex justify-between text-on-surface-variant">
                            <span class="font-body-md text-body-md">Diskon Poin</span>
                            <span class="font-label-md text-label-md text-primary">- Rp 10.000</span>
                        </div>
                        <div class="pt-sm border-t border-outline-variant flex justify-between">
                            <span class="font-label-md text-label-md font-bold text-on-surface">Total Tagihan</span>
                            <span class="font-title-lg text-title-lg text-on-surface">Rp 40.000</span>
                        </div>
                    </div>
                    <button class="mt-lg w-full py-sm bg-secondary-container text-primary rounded-lg font-bold flex items-center justify-center gap-sm hover:bg-primary hover:text-white transition-all">
                        <span class="material-symbols-outlined text-[20px]">currency_exchange</span>
                        Tukar Poin
                    </button>
                </div>
            </section>
            <!-- Tables Section -->
            <section class="grid grid-cols-1 xl:grid-cols-2 gap-lg">
                <!-- Waste Submission History -->
                <div class="bento-card rounded-xl overflow-hidden">
                    <div class="px-lg py-md border-b border-outline-variant flex justify-between items-center bg-secondary-fixed/30">
                        <h3 class="font-title-lg text-title-lg text-on-surface">Riwayat Setoran</h3>
                        <a class="text-tertiary font-label-md text-label-md hover:underline" href="#">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-secondary-container/50">
                                    <th class="px-lg py-sm font-label-md text-label-md text-on-secondary-container">Tanggal</th>
                                    <th class="px-lg py-sm font-label-md text-label-md text-on-secondary-container">Detail</th>
                                    <th class="px-lg py-sm font-label-md text-label-md text-on-secondary-container">Status</th>
                                    <th class="px-lg py-sm font-label-md text-label-md text-on-secondary-container text-right">Poin</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant">
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-lg py-md">
                                        <div class="font-label-md text-label-md text-on-surface">24 Okt 2023</div>
                                        <div class="text-[10px] text-on-surface-variant">09:15 WIB</div>
                                    </td>
                                    <td class="px-lg py-md">
                                        <div class="flex items-center gap-sm">
                                            <div class="w-10 h-10 rounded bg-surface-variant overflow-hidden flex-shrink-0">
                                                <img class="w-full h-full object-cover" data-alt="A clean, bright macro shot of sorted plastic bottles and metal cans prepared for recycling. The image uses a high-key lighting setup to create a professional and transparent feeling. The colors are crisp and vibrant, following the corporate eco-centric palette of clinical greens and whites." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdwutFs16WV1__kdL-BedCvl5Lg0M7Ff9G8nk_v-7kiS42phc7YJJAw6X6DDMk_coCAN6YHgM7LIkb4qBPkYQEht-4Vu770xtZdUW8MZ9bDstW4k35CipDwEJXTINBZZnOLBBOTyZpMSK2S0E2lqU6wqzpBpqWRNw9kcgukUvPiZJJE9UvLO5BqLEOL2tCLI7XN4nZkAjFSzgE9fmDOdKoc4ruyn2_9XKHoVU3NG9ZxmDZ1RKb-IBFr6GAqQzczPDCWQ3qmDbLmeo" />
                                            </div>
                                            <span class="font-body-md text-body-md text-on-surface truncate max-w-[120px]">Anorganik (3.5 kg)</span>
                                        </div>
                                    </td>
                                    <td class="px-lg py-md">
                                        <span class="bg-primary-fixed text-on-primary-fixed-variant text-[10px] px-2 py-0.5 rounded-full font-bold">Selesai</span>
                                    </td>
                                    <td class="px-lg py-md text-right font-bold text-primary">+45</td>
                                </tr>
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-lg py-md">
                                        <div class="font-label-md text-label-md text-on-surface">22 Okt 2023</div>
                                        <div class="text-[10px] text-on-surface-variant">16:40 WIB</div>
                                    </td>
                                    <td class="px-lg py-md">
                                        <div class="flex items-center gap-sm">
                                            <div class="w-10 h-10 rounded bg-surface-variant overflow-hidden flex-shrink-0">
                                                <img class="w-full h-full object-cover" data-alt="High quality overhead view of organic waste like fruit peels and vegetable scraps being composted in a clean, modern composting bin. The lighting is natural and bright, emphasizing a clean and sustainable lifestyle. The aesthetic is modern and professional with muted green tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDn3kZE98HS5IOlxgmW53ptZpqs2VEciYlXcOb_7AO7aRCSb-_lkHeq1AnKJH77S9RVM2d6JSK2_7naveLtyCaqZJEmPacelQga02AJRC6ZYpRolXUsi4cNfMQGnsLt0R8azeQ7MZ_N2plUzP2G9mxlK-pVyADvsX6giMGZGl3fQxgsa_zEJenXcjvDZgICOIot91yY_82J_eO7IZP5sju7SC4a1iTQwekiYLRKcFr7--mJQD6e7khZcRM_vpUVGFG07FkGyODltZE" />
                                            </div>
                                            <span class="font-body-md text-body-md text-on-surface truncate max-w-[120px]">Organik (1.2 kg)</span>
                                        </div>
                                    </td>
                                    <td class="px-lg py-md">
                                        <span class="bg-surface-variant text-on-surface-variant text-[10px] px-2 py-0.5 rounded-full font-bold">Proses</span>
                                    </td>
                                    <td class="px-lg py-md text-right font-bold text-on-surface-variant">--</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Point Mutation History -->
                <div class="bento-card rounded-xl overflow-hidden">
                    <div class="px-lg py-md border-b border-outline-variant flex justify-between items-center bg-tertiary-fixed/30">
                        <h3 class="font-title-lg text-title-lg text-on-surface">Mutasi Poin</h3>
                        <button class="p-1 hover:bg-tertiary-container/10 rounded">
                            <span class="material-symbols-outlined text-tertiary">filter_list</span>
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-tertiary-fixed/50">
                                    <th class="px-lg py-sm font-label-md text-label-md text-on-tertiary-fixed-variant">Keterangan</th>
                                    <th class="px-lg py-sm font-label-md text-label-md text-on-tertiary-fixed-variant">Tanggal</th>
                                    <th class="px-lg py-sm font-label-md text-label-md text-on-tertiary-fixed-variant text-right">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant">
                                <tr>
                                    <td class="px-lg py-md">
                                        <div class="font-label-md text-label-md text-on-surface">Pembayaran Iuran RT</div>
                                        <div class="text-[10px] text-on-surface-variant">Redeem Poin - Okt 2023</div>
                                    </td>
                                    <td class="px-lg py-md text-on-surface-variant">10 Okt 2023</td>
                                    <td class="px-lg py-md text-right font-bold text-tertiary">- 500</td>
                                </tr>
                                <tr>
                                    <td class="px-lg py-md">
                                        <div class="font-label-md text-label-md text-on-surface">Reward Setoran</div>
                                        <div class="text-[10px] text-on-surface-variant">Anorganik (ID #8821)</div>
                                    </td>
                                    <td class="px-lg py-md text-on-surface-variant">08 Okt 2023</td>
                                    <td class="px-lg py-md text-right font-bold text-primary">+ 120</td>
                                </tr>
                                <tr>
                                    <td class="px-lg py-md">
                                        <div class="font-label-md text-label-md text-on-surface">Bonus Referral</div>
                                        <div class="text-[10px] text-on-surface-variant">Pendaftaran Tetangga</div>
                                    </td>
                                    <td class="px-lg py-md text-on-surface-variant">01 Okt 2023</td>
                                    <td class="px-lg py-md text-right font-bold text-primary">+ 1.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- Notifications / Feed -->
            <section class="bento-card rounded-xl p-lg">
                <h3 class="font-title-lg text-title-lg text-on-surface mb-lg">Notifikasi Terbaru</h3>
                <div class="space-y-md">
                    <div class="flex gap-md p-md bg-surface-container-low rounded-lg border-l-4 border-primary">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <div>
                            <p class="font-label-md text-label-md text-on-surface">Setoran Sampah Berhasil Disetujui</p>
                            <p class="text-[12px] text-on-surface-variant mt-0.5">Setoran Anda pada 24 Okt telah diverifikasi petugas. +45 poin telah ditambahkan ke saldo Anda.</p>
                            <span class="text-[10px] text-on-surface-variant mt-2 block">2 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="flex gap-md p-md bg-surface-container-low rounded-lg border-l-4 border-tertiary">
                        <span class="material-symbols-outlined text-tertiary" style="font-variation-settings: 'FILL' 1;">info</span>
                        <div>
                            <p class="font-label-md text-label-md text-on-surface">Tagihan Baru Tersedia</p>
                            <p class="text-[12px] text-on-surface-variant mt-0.5">Iuran bulanan untuk periode November 2023 telah diterbitkan. Silakan periksa rincian pembayaran Anda.</p>
                            <span class="text-[10px] text-on-surface-variant mt-2 block">1 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script>
        // Micro-interactions and simple state handling
        document.querySelectorAll('button, a').forEach(el => {
            el.addEventListener('mousedown', () => {
                el.style.transform = 'scale(0.96)';
            });
            el.addEventListener('mouseup', () => {
                el.style.transform = '';
            });
            el.addEventListener('mouseleave', () => {
                el.style.transform = '';
            });
        });

        // Simple mock for "Ajukan Setor Sampah" interaction
        const ctaBtn = document.querySelector('.bg-primary-fixed.text-primary');
        if (ctaBtn) {
            ctaBtn.addEventListener('click', () => {
                alert('Membuka formulir pengajuan setor sampah...');
            });
        }
    </script>
</body>

</html>