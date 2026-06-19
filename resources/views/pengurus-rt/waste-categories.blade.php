<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>WasteAdmin Portal - Manajemen Kategori Sampah</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface-variant": "#404940",
                        "inverse-primary": "#8bd79b",
                        "surface-container-low": "#eff4ff",
                        "secondary-fixed-dim": "#bdcac1",
                        "on-tertiary-fixed": "#001e2f",
                        "secondary-fixed": "#d9e6dd",
                        "on-secondary-fixed-variant": "#3e4943",
                        "tertiary-fixed": "#c9e6ff",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed-variant": "#005226",
                        "primary-container": "#166534",
                        "background": "#f8f9ff",
                        "surface-tint": "#1f6c3a",
                        "surface-container-high": "#dce9ff",
                        "on-error": "#ffffff",
                        "secondary": "#55615a",
                        "surface": "#f8f9ff",
                        "on-error-container": "#93000a",
                        "outline-variant": "#bfc9bd",
                        "surface-container-highest": "#d3e4fe",
                        "on-surface": "#0b1c30",
                        "inverse-surface": "#213145",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "error": "#ba1a1a",
                        "on-primary-fixed": "#00210b",
                        "secondary-container": "#d9e6dd",
                        "tertiary-fixed-dim": "#89ceff",
                        "surface-dim": "#cbdbf5",
                        "tertiary-container": "#005e87",
                        "surface-bright": "#f8f9ff",
                        "on-primary": "#ffffff",
                        "inverse-on-surface": "#eaf1ff",
                        "surface-container": "#e5eeff",
                        "on-tertiary-container": "#9dd5ff",
                        "surface-variant": "#d3e4fe",
                        "on-background": "#0b1c30",
                        "primary-fixed": "#a6f4b5",
                        "on-secondary": "#ffffff",
                        "primary-fixed-dim": "#8bd79b",
                        "outline": "#707a6f",
                        "on-secondary-fixed": "#131e19",
                        "on-secondary-container": "#5b6760",
                        "on-primary-container": "#93e0a2",
                        "error-container": "#ffdad6",
                        "tertiary": "#004565",
                        "primary": "#004c22"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "xs": "4px",
                        "sidebar-width": "260px",
                        "md": "16px",
                        "base": "4px",
                        "xl": "32px",
                        "sm": "8px",
                        "lg": "24px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "code-sm": ["Inter"],
                        "display-lg": ["Inter"],
                        "title-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "code-sm": ["13px", {
                            "lineHeight": "18px",
                            "fontWeight": "400"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "title-lg": ["20px", {
                            "lineHeight": "28px",
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
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .sidebar-item-active {
            background-color: #d9e6dd;
            color: #004c22;
            font-weight: 600;
        }

        .stat-card-border {
            border-left: 4px solid #166534;
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- SideNavBar (Shared Component) -->
    <aside class="w-sidebar-width h-screen fixed left-0 top-0 bg-surface-container-lowest border-r border-outline-variant flex flex-col py-lg px-md h-full z-20">
        <div class="mb-xl px-sm flex items-center gap-3">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">eco</span>
            </div>
            <div>
                <h1 class="font-headline-md text-headline-md font-bold text-primary">WasteAdmin</h1>
                <p class="font-body-md text-[10px] uppercase tracking-widest text-on-surface-variant opacity-70">SDG 11 Portal</p>
            </div>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-3 px-sm py-3 text-secondary hover:bg-surface-container-low transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-sm py-3 text-secondary hover:bg-surface-container-low transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">fact_check</span>
                <span class="font-body-md">Verification</span>
            </a>
            <a class="flex items-center gap-3 px-sm py-3 text-secondary hover:bg-surface-container-low transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="font-body-md">Dues Management</span>
            </a>
            <!-- Active State: Waste Categories (Kategori Sampah) -->
            <a class="flex items-center gap-3 px-sm py-3 bg-secondary-container text-primary font-semibold rounded-lg" href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">category</span>
                <span class="font-body-md">Waste Categories</span>
            </a>
            <a class="flex items-center gap-3 px-sm py-3 text-secondary hover:bg-surface-container-low transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-body-md">Reports</span>
            </a>
            <a class="flex items-center gap-3 px-sm py-3 text-secondary hover:bg-surface-container-low transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">account_circle</span>
                <span class="font-body-md">Profile</span>
            </a>
        </nav>
        <div class="mt-auto border-t border-outline-variant pt-lg flex items-center gap-3 px-sm">
            <img class="w-10 h-10 rounded-full border-2 border-primary-fixed" data-alt="A professional headshot of a middle-aged male administrator with a friendly expression, wearing a clean white shirt, against a soft blurred office background with subtle green plants, corporate modern photography style, high quality." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoGwMMgKrU4jBrQiAJ9O79sQ3TyVk8YtGRe3VUUHapjVMCG4Gp9YkslD5jmSQM8HKrksYjtlnuO9UldsLxgiOikU8Kq-f9WazmaUhovRZUJ76kWoCwiCsGzPLzsn-LCUbO7FbFNZLe8YiB_xJA3UhY54E7prS2k6HogYU2JyyCIzqbhWgdRw5mx0-rxvNHsmVl_cCup8l3pNWjL0eTDpRij4JDiF58voSIb6FPYGHm2aeg7B2HuO5tWJiadBr5nIGVN7GLKw0B08Q" />
            <div class="overflow-hidden">
                <p class="font-label-md text-on-surface font-bold truncate">RT Administrator</p>
                <p class="font-label-md text-[10px] text-on-surface-variant">Admin Level 1</p>
            </div>
        </div>
    </aside>
    <!-- TopNavBar (Shared Component) -->
    <header class="h-16 fixed top-0 right-0 w-[calc(100%-260px)] z-10 bg-surface-container-lowest border-b border-outline-variant flex items-center justify-between px-lg">
        <div class="flex items-center bg-surface-container-low px-4 py-2 rounded-full w-96 border border-outline-variant focus-within:ring-2 focus-within:ring-primary-container transition-all">
            <span class="material-symbols-outlined text-on-surface-variant mr-2">search</span>
            <input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-on-surface-variant/60" placeholder="Cari kategori atau data..." type="text" />
        </div>
        <div class="flex items-center gap-4">
            <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low transition-colors relative">
                <span class="material-symbols-outlined text-secondary">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-surface-container-lowest"></span>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-secondary">settings</span>
            </button>
            <div class="h-8 w-[1px] bg-outline-variant mx-2"></div>
            <span class="font-label-md text-primary font-bold">WasteAdmin Portal</span>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-sidebar-width pt-16 min-h-screen">
        <div class="max-w-container-max mx-auto p-lg">
            <!-- Page Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-xl">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Manajemen Kategori Sampah</h2>
                    <p class="font-body-lg text-on-surface-variant mt-1">Kelola daftar jenis sampah, bobot poin, dan status operasional sistem.</p>
                </div>
                <button class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary text-on-primary rounded-xl font-semibold shadow-sm hover:opacity-90 active:scale-95 transition-all">
                    <span class="material-symbols-outlined">add_circle</span>
                    Tambah Kategori Baru
                </button>
            </div>
            <!-- Statistics Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-lg mb-xl">
                <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl stat-card-border group hover:bg-surface-container transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-secondary-container rounded-lg flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">inventory_2</span>
                        </div>
                        <span class="text-xs font-bold text-primary bg-primary-fixed px-2 py-1 rounded-full">+2 Bulan ini</span>
                    </div>
                    <p class="font-label-md text-on-surface-variant uppercase tracking-wider mb-1">Total Kategori Aktif</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-surface font-black">12 <span class="text-lg font-normal text-on-surface-variant">Jenis</span></h3>
                </div>
                <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl stat-card-border group hover:bg-surface-container transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-secondary-container rounded-lg flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">loyalty</span>
                        </div>
                        <span class="text-xs font-bold text-on-tertiary-fixed-variant bg-tertiary-fixed px-2 py-1 rounded-full">Stabil</span>
                    </div>
                    <p class="font-label-md text-on-surface-variant uppercase tracking-wider mb-1">Rata-rata Poin/Kg</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-surface font-black">850 <span class="text-lg font-normal text-on-surface-variant">Poin</span></h3>
                </div>
                <div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-xl stat-card-border group hover:bg-surface-container transition-colors">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-secondary-container rounded-lg flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">trending_up</span>
                        </div>
                        <span class="text-xs font-bold text-on-primary-fixed-variant bg-primary-fixed px-2 py-1 rounded-full">Organik</span>
                    </div>
                    <p class="font-label-md text-on-surface-variant uppercase tracking-wider mb-1">Paling Sering Disetor</p>
                    <h3 class="font-headline-lg text-headline-lg text-on-surface font-black">45.2 <span class="text-lg font-normal text-on-surface-variant">kg/minggu</span></h3>
                </div>
            </div>
            <!-- Table Container -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm">
                <div class="px-lg py-4 border-b border-outline-variant flex items-center justify-between bg-surface-container-low/30">
                    <h4 class="font-title-lg text-on-surface">Daftar Kategori Sampah</h4>
                    <div class="flex gap-2">
                        <button class="p-2 hover:bg-surface-container-low rounded-lg transition-colors border border-outline-variant">
                            <span class="material-symbols-outlined text-secondary">filter_list</span>
                        </button>
                        <button class="p-2 hover:bg-surface-container-low rounded-lg transition-colors border border-outline-variant">
                            <span class="material-symbols-outlined text-secondary">download</span>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-secondary-container/30 border-b border-outline-variant">
                                <th class="px-lg py-4 font-label-md text-on-secondary-container uppercase tracking-widest">Nama Kategori</th>
                                <th class="px-lg py-4 font-label-md text-on-secondary-container uppercase tracking-widest text-center">Visual/Warna</th>
                                <th class="px-lg py-4 font-label-md text-on-secondary-container uppercase tracking-widest">Poin per Kg</th>
                                <th class="px-lg py-4 font-label-md text-on-secondary-container uppercase tracking-widest">Status</th>
                                <th class="px-lg py-4 font-label-md text-on-secondary-container uppercase tracking-widest text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <!-- Plastic PET -->
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">water_bottle</span>
                                        </div>
                                        <div>
                                            <p class="font-body-lg font-semibold text-on-surface">Plastic PET</p>
                                            <p class="font-label-md text-on-surface-variant">Botol mineral, wadah plastik bening</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-5 text-center">
                                    <div class="flex justify-center">
                                        <div class="w-6 h-6 rounded-full bg-blue-500 ring-4 ring-blue-100"></div>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-1 font-title-lg text-primary">
                                        <span>1.200</span>
                                        <span class="text-xs font-normal text-on-surface-variant">pts</span>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-xs font-bold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Aktif
                                    </span>
                                </td>
                                <td class="px-lg py-5 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-secondary hover:bg-secondary-container/50 hover:text-primary transition-all">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-error hover:bg-error-container/50 transition-all">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Paper/Cardboard -->
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center text-orange-600">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
                                        </div>
                                        <div>
                                            <p class="font-body-lg font-semibold text-on-surface">Paper/Cardboard</p>
                                            <p class="font-label-md text-on-surface-variant">Kardus, koran, majalah, kertas HVS</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-5 text-center">
                                    <div class="flex justify-center">
                                        <div class="w-6 h-6 rounded-full bg-orange-400 ring-4 ring-orange-100"></div>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-1 font-title-lg text-primary">
                                        <span>800</span>
                                        <span class="text-xs font-normal text-on-surface-variant">pts</span>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-xs font-bold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Aktif
                                    </span>
                                </td>
                                <td class="px-lg py-5 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-secondary hover:bg-secondary-container/50 hover:text-primary transition-all">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-error hover:bg-error-container/50 transition-all">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Metal -->
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-zinc-100 flex items-center justify-center text-zinc-600">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">iron</span>
                                        </div>
                                        <div>
                                            <p class="font-body-lg font-semibold text-on-surface">Metal</p>
                                            <p class="font-label-md text-on-surface-variant">Kaleng soda, besi tua, alumunium</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-5 text-center">
                                    <div class="flex justify-center">
                                        <div class="w-6 h-6 rounded-full bg-zinc-500 ring-4 ring-zinc-200"></div>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-1 font-title-lg text-primary">
                                        <span>2.500</span>
                                        <span class="text-xs font-normal text-on-surface-variant">pts</span>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-xs font-bold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Aktif
                                    </span>
                                </td>
                                <td class="px-lg py-5 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-secondary hover:bg-secondary-container/50 hover:text-primary transition-all">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-error hover:bg-error-container/50 transition-all">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Organic -->
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-green-50 flex items-center justify-center text-green-700">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">compost</span>
                                        </div>
                                        <div>
                                            <p class="font-body-lg font-semibold text-on-surface">Organic</p>
                                            <p class="font-label-md text-on-surface-variant">Sisa makanan, dedaunan, sampah dapur</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-5 text-center">
                                    <div class="flex justify-center">
                                        <div class="w-6 h-6 rounded-full bg-green-600 ring-4 ring-green-100"></div>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-1 font-title-lg text-primary">
                                        <span>300</span>
                                        <span class="text-xs font-normal text-on-surface-variant">pts</span>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-xs font-bold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Aktif
                                    </span>
                                </td>
                                <td class="px-lg py-5 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-secondary hover:bg-secondary-container/50 hover:text-primary transition-all">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-error hover:bg-error-container/50 transition-all">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Electronic Waste -->
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center text-red-600">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">devices</span>
                                        </div>
                                        <div>
                                            <p class="font-body-lg font-semibold text-on-surface">Electronic Waste</p>
                                            <p class="font-label-md text-on-surface-variant">Baterai, kabel, komponen PC, HP rusak</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-lg py-5 text-center">
                                    <div class="flex justify-center">
                                        <div class="w-6 h-6 rounded-full bg-red-500 ring-4 ring-red-100"></div>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <div class="flex items-center gap-1 font-title-lg text-primary">
                                        <span>5.000</span>
                                        <span class="text-xs font-normal text-on-surface-variant">pts</span>
                                    </div>
                                </td>
                                <td class="px-lg py-5">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant text-xs font-bold opacity-60">
                                        <span class="w-1.5 h-1.5 rounded-full bg-on-surface-variant"></span> Non-aktif
                                    </span>
                                </td>
                                <td class="px-lg py-5 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-secondary hover:bg-secondary-container/50 hover:text-primary transition-all">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="w-9 h-9 flex items-center justify-center rounded-lg border border-outline-variant text-error hover:bg-error-container/50 transition-all">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="px-lg py-4 border-t border-outline-variant bg-surface-container-low/20 flex items-center justify-between">
                    <p class="font-label-md text-on-surface-variant">Menampilkan 5 dari 12 kategori</p>
                    <div class="flex gap-1">
                        <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container transition-colors disabled:opacity-30" disabled="">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-on-primary font-bold text-xs">1</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container text-on-surface-variant font-bold text-xs transition-colors">2</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container text-on-surface-variant font-bold text-xs transition-colors">3</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container transition-colors">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Simple micro-interactions for buttons
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (this.classList.contains('active:scale-95')) return;
                this.classList.add('active:scale-95');
                setTimeout(() => this.classList.remove('active:scale-95'), 100);
            });
        });
    </script>
</body>

</html>