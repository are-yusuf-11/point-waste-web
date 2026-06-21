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
        <div class="mb-xl px-md">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">Sustainable Community</p>
        </div>
        </div>
        <nav class="flex-1 space-y-sm">
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
                <span class="material-symbols-outlined" data-icon="recycling">recycling</span>
                <span class="font-body-md text-body-md">Verifikasi Setoran</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                <span class="font-body-md text-body-md">Manajemen Iuran</span>
            </a>
            <a class="flex items-center gap-md bg-secondary-container text-primary font-semibold rounded-lg px-md py-sm transition-all opacity-80 scale-95" href="/category-sampah-test">
                <span class="material-symbols-outlined" data-icon="category">category</span>
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
    </aside>
    <!-- TopNavBar (Shared Component) -->
    <header class="h-16 fixed top-0 right-0 w-[calc(100%-260px)] z-10 bg-surface-container-lowest border-b border-outline-variant flex items-center justify-between px-lg">
        <div class="flex items-center bg-surface-container-low px-1 py-1 rounded-full w-96 border border-outline-variant focus-within:ring-2 focus-within:ring-primary-container transition-all">
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
            <div class="flex items-center gap-3 px-sm py-2 border-t border-outline-variant">
                <img class="w-10 h-10 rounded-full border-2 border-primary-fixed object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoGwMMgKrU4jBrQiAJ9O79sQ3TyVk8YtGRe3VUUHapjVMCG4Gp9YkslD5jmSQM8HKrksYjtlnuO9UldsLxgiOikU8Kq-f9WazmaUhovRZUJ76kWoCwiCsGzPLzsn-LCUbO7FbFNZLe8YiB_xJA3UhY54E7prS2k6HogYU2JyyCIzqbhWgdRw5mx0-rxvNHsmVl_cCup8l3pNWjL0eTDpRij4JDiF58voSIb6FPYGHm2aeg7B2HuO5tWJiadBr5nIGVN7GLKw0B08Q"
                    alt="RT Administrator" />

                <div class="flex flex-col justify-center overflow-hidden">
                    <p class="font-label-md text-on-surface font-bold truncate leading-none">RT Administrator</p>
                    <p class="font-label-md text-[10px] text-on-surface-variant mt-0.5">Admin Level 1</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-sidebar-width pt-16 min-h-screen">
        <div class="max-w-container-max mx-auto p-lg">
            <div id="view-tabel">.
                <!-- Page Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-xl">
                    <div>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Manajemen Kategori Sampah</h2>
                        <p class="font-body-lg text-on-surface-variant mt-1">Kelola daftar jenis sampah, bobot poin, dan status operasional sistem.</p>
                    </div>
                    <button onclick="toggleForm(true)" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary text-on-primary rounded-xl font-semibold shadow-sm hover:opacity-90 active:scale-95 transition-all">
                        <span class="material-symbols-outlined">add_circle</span>
                        Tambah Kategori Baru
                    </button>
                </div>
                <!-- Statistics Bento Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Total Kategori</p>
                        <h3 class="text-4xl font-bold text-gray-900">12</h3>
                        <div class="flex items-center text-green-700 text-sm mt-2">
                            <span class="mr-1">📈</span>
                            <span>+2 Bulan ini</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Rata-rata Poin / Kg</p>
                        <h3 class="text-4xl font-bold text-gray-900">1,250</h3>
                        <p class="text-sm text-gray-500 mt-2">Poin dasar komoditas global</p>
                    </div>

                    <div class="bg-primary p-6 rounded-xl shadow-sm text-white">
                        <p class="text-xs font-semibold text-green-100 uppercase tracking-wider mb-2">Efisiensi Waste-To-Point</p>
                        <h3 class="text-4xl font-bold">94.2%</h3>
                        <div class="flex items-center text-green-100 text-sm mt-2">
                            <span>Optimal ✅</span>
                        </div>
                    </div>

                </div>
                <!-- Table Container -->
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden mt-6">
                    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="text-lg font-bold text-gray-800">Daftar Master Kategori</h3>
                        <div class="flex gap-2">
                            <button class="px-4 py-2 border border-gray-200 rounded-lg text-sm font-medium hover:bg-gray-50 text-gray-600">Filter</button>
                            <button class="px-4 py-2 border border-gray-200 rounded-lg text-sm font-medium hover:bg-gray-50 text-gray-600">Ekspor</button>
                        </div>
                    </div>

                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-xs text-gray-400 uppercase tracking-wider bg-gray-50">
                                <th class="px-6 py-4">Kategori</th>
                                <th class="px-6 py-4">Kode</th>
                                <th class="px-6 py-4">Bobot Poin (Per Kg)</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-xl">♻️</div>
                                    <span class="font-semibold text-gray-800">Plastik (PET/HDPE)</span>
                                </td>
                                <td class="px-6 py-4"><span class="bg-blue-50 text-blue-600 px-2 py-1 rounded text-xs font-medium">PL-01</span></td>
                                <td class="px-6 py-4 font-bold text-gray-800">1,500 <span class="text-gray-500 font-normal">Poin</span> <span class="bg-green-100 text-green-700 text-[10px] px-1 rounded ml-1">+5%</span></td>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">● Aktif</span></td>
                                <td class="px-6 py-4 text-center text-gray-400">✎ &nbsp; 🗑️</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-xl">📄</div>
                                    <span class="font-semibold text-gray-800">Kertas & Karton</span>
                                </td>
                                <td class="px-6 py-4"><span class="bg-blue-50 text-blue-600 px-2 py-1 rounded text-xs font-medium">KR-02</span></td>
                                <td class="px-6 py-4 font-bold text-gray-800">800 <span class="text-gray-500 font-normal">Poin</span></td>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">● Aktif</span></td>
                                <td class="px-6 py-4 text-center text-gray-400">✎ &nbsp; 🗑️</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-stone-100 rounded-lg flex items-center justify-center text-xl">🍾</div>
                                    <span class="font-semibold text-gray-800">Kaca</span>
                                </td>
                                <td class="px-6 py-4"><span class="bg-blue-50 text-blue-600 px-2 py-1 rounded text-xs font-medium">KC-03</span></td>
                                <td class="px-6 py-4 font-bold text-gray-800">500 <span class="text-gray-500 font-normal">Poin</span></td>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">● Aktif</span></td>
                                <td class="px-6 py-4 text-center text-gray-400">✎ &nbsp; 🗑️</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center text-xl">🥫</div>
                                    <span class="font-semibold text-gray-800">Logam</span>
                                </td>
                                <td class="px-6 py-4"><span class="bg-blue-50 text-blue-600 px-2 py-1 rounded text-xs font-medium">LG-04</span></td>
                                <td class="px-6 py-4 font-bold text-gray-800">3,000 <span class="text-gray-500 font-normal">Poin</span></td>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">● Aktif</span></td>
                                <td class="px-6 py-4 text-center text-gray-400">✎ &nbsp; 🗑️</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="px-6 py-4 border-t border-gray-100 flex justify-between items-center text-sm text-gray-500">
                        <p>Menampilkan 4 dari 4 kategori</p>
                        <button class="bg-primary text-white w-8 h-8 rounded-lg font-bold">1</button>
                    </div>
                </div>
            </div>

            <div id="view-form" class="hidden">
                <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm">
                    <h3 class="text-xl font-bold text-gray-800 mb-8">Tambah Kategori Master</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Kategori</label>
                            <input type="text" placeholder="Contoh: Plastik" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-900/20 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kode Kategori</label>
                            <input type="text" placeholder="Contoh: PL-01" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-900/20 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Bobot Poin per KG</label>
                            <div class="relative">
                                <input type="number" placeholder="0" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-900/20 outline-none transition-all">
                                <span class="absolute right-4 top-2 text-gray-400 text-sm">POIN</span>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-900/20 outline-none transition-all text-gray-700">
                                <option>Aktif</option>
                                <option>Non Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ikon Kategori</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-10 text-center hover:border-green-800 transition-all cursor-pointer bg-gray-50/50">
                            <span class="material-symbols-outlined text-green-900 text-3xl mb-2">cloud_upload</span>
                            <p class="text-sm text-gray-600 font-medium">Klik untuk unggah ikon</p>
                            <p class="text-xs text-gray-400 mt-1">PNG, JPG atau SVG (Maks. 2MB)</p>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 pt-6 border-t border-gray-100">
                        <button onclick="toggleForm(false)" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-all">Batal</button>
                        <button class="px-6 py-2 bg-green-900 text-white rounded-lg font-medium hover:bg-green-800 transition-all">Simpan Kategori</button>
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

        function toggleForm(show) {
            const tabel = document.getElementById('view-tabel');
            const form = document.getElementById('view-form');
            if (show) {
                tabel.classList.add('hidden');
                form.classList.remove('hidden');
            } else {
                tabel.classList.remove('hidden');
                form.classList.add('hidden');
            }
        }
    </script>
</body>

</html>