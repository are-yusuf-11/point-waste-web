<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Kategori Sampah | PointWaste Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-container": "#5b6760",
                        "primary-container": "#166534",
                        "on-error": "#ffffff",
                        "on-primary-container": "#93e0a2",
                        "on-primary": "#ffffff",
                        "surface-tint": "#1f6c3a",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#dce9ff",
                        "surface": "#f8f9ff",
                        "secondary-fixed-dim": "#bdcac1",
                        "outline-variant": "#bfc9bd",
                        "tertiary-fixed-dim": "#89ceff",
                        "on-primary-fixed-variant": "#005226",
                        "on-background": "#0b1c30",
                        "inverse-on-surface": "#eaf1ff",
                        "secondary-container": "#d9e6dd",
                        "on-surface": "#0b1c30",
                        "inverse-surface": "#213145",
                        "surface-bright": "#f8f9ff",
                        "primary": "#004c22",
                        "surface-container-low": "#eff4ff",
                        "secondary": "#55615a",
                        "primary-fixed": "#a6f4b5",
                        "secondary-fixed": "#d9e6dd",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#d3e4fe",
                        "on-secondary": "#ffffff",
                        "background": "#f8f9ff",
                        "tertiary-container": "#005e87",
                        "on-error-container": "#93000a",
                        "surface-container": "#e5eeff",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-container": "#9dd5ff",
                        "on-secondary-fixed-variant": "#3e4943",
                        "surface-variant": "#d3e4fe",
                        "on-primary-fixed": "#00210b",
                        "outline": "#707a6f",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "inverse-primary": "#8bd79b",
                        "error-container": "#ffdad6",
                        "primary-fixed-dim": "#8bd79b",
                        "on-secondary-fixed": "#131e19",
                        "surface-dim": "#cbdbf5",
                        "tertiary-fixed": "#c9e6ff",
                        "tertiary": "#004565",
                        "on-tertiary-fixed": "#001e2f",
                        "on-surface-variant": "#404940"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "md": "16px",
                        "xl": "32px",
                        "sidebar-width": "260px",
                        "lg": "24px",
                        "xs": "4px",
                        "sm": "8px",
                        "base": "4px",
                        "gutter": "24px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "label-md": ["Inter"],
                        "code-sm": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "title-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "code-sm": ["13px", {
                            "lineHeight": "18px",
                            "fontWeight": "400"
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
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
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
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .waste-card-hover:hover {
            transform: translateY(-4px);
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen">
    <!-- SideNavBar (Authority: JSON & Design System) -->
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width bg-white dark:bg-surface-container-low border-r border-outline-variant dark:border-outline flex flex-col py-lg px-md gap-md z-50">
        <div class="mb-xl px-md">
            <h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">PointWaste</h1>
            <p class="font-body-md text-body-md text-secondary">Admin System</p>
        </div>
        <nav class="flex flex-col gap-sm">
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="{{ route('admin.manajemen-pengguna') }}">
                <span class="material-symbols-outlined">group</span>
                <span class="font-body-md text-body-md">Manajemen Pengguna</span>
            </a>
            <!-- Active Tab: Kategori Sampah -->
            <a class="flex items-center gap-md bg-secondary-container dark:bg-primary-container text-primary dark:text-on-primary-container rounded-lg px-md py-sm cursor-pointer active:scale-95 duration-200" href="{{ route('admin.kategori-sampah') }}">
                <span class="material-symbols-outlined">recycling</span>
                <span class="font-body-md text-body-md">Kategori Sampah</span>
            </a>
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="{{ route('admin.monitoring-sistem') }}">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-body-md text-body-md">Monitoring Sistem</span>
            </a>
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="{{ route('admin.konfigurasi') }}">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-body-md text-body-md">Konfigurasi</span>
            </a>
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="#">
                <span class="material-symbols-outlined">person</span>
                <span class="font-body-md text-body-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto pt-lg border-t border-outline-variant flex items-center gap-md px-md">
            <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center overflow-hidden">
                <img class="w-full h-full object-cover" data-alt="A professional headshot of a middle-aged male administrator in a clean office setting, featuring a friendly smile and professional attire. The lighting is soft and natural, emphasizing a trustworthy and efficient persona consistent with a corporate eco-systemic utility brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-e-TMVqsftkDP4Wlizop1m-_8E9M8iSggutpsb9PfO6t_JVTLBe_JstJf7vvXIG0kPVWIjFzjJqNASElXjIw-R65n8aNbDGcmSJ3JpqWLju0HXA8CiQQKx-VsJyk6s3QCH-5gmSrObM7kpECfo-blKQ75xQQ4ZfAZfcoeb_8JkGJo5hQwItAfPT4Jly3UHilKMktBoV13mtQMi6einNwS4vVUze5cebd5xgeLGb9qBF2s79dpDShlfo_ssDq5m88HEAvvX2Ln074" />
            </div>
            <div class="flex flex-col">
                <span class="font-label-md text-label-md font-bold text-on-surface">Admin Utama</span>
                <span class="text-[10px] text-secondary">admin@pointwaste.gov</span>
            </div>
        </div>
    </aside>
    <!-- TopAppBar -->
    <header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 bg-white dark:bg-surface-container-low border-b border-outline-variant dark:border-outline flex items-center justify-between px-xl z-40">
        <div class="flex items-center gap-md w-1/2">
            <div class="relative w-full max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary">search</span>
                <input class="w-full pl-10 pr-4 py-2 rounded-lg border border-outline-variant bg-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-body-md" placeholder="Cari kategori atau parameter..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-lg">
            <div class="flex items-center gap-sm">
                <button class="w-10 h-10 flex items-center justify-center text-secondary hover:text-primary transition-colors active:opacity-80">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <button class="w-10 h-10 flex items-center justify-center text-secondary hover:text-primary transition-colors active:opacity-80">
                    <span class="material-symbols-outlined">settings</span>
                </button>
            </div>
            <div class="h-8 w-[1px] bg-outline-variant"></div>
            <div class="flex items-center gap-md">
                <span class="font-title-lg text-title-lg text-primary">PointWaste Admin</span>
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-sidebar-width pt-16 min-h-screen">
        <div class="max-w-[1280px] mx-auto p-xl">
            <!-- Page Header -->
            <div class="flex justify-between items-end mb-xl">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-background">Manajemen Kategori Sampah</h2>
                    <p class="font-body-md text-body-md text-secondary mt-xs">Konfigurasi master data kategori limbah dan parameter insentif poin.</p>
                </div>
                <a href="{{ route('admin.kategori-sampah.create') }}" class="bg-primary text-white px-lg py-md rounded-lg flex items-center gap-sm hover:brightness-110 active:scale-95 transition-all font-label-md inline-flex">
                    <span class="material-symbols-outlined">add_circle</span>
                    Tambah Kategori Master
                </a>
            </div>
            <!-- Bento Stats Grid -->
            <div class="bento-grid mb-xl">
                <!-- Stat Card 1 -->
                <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant rounded-xl p-lg flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Total Kategori</p>
                        <h3 class="font-display-lg text-display-lg text-primary mt-sm">{{ $totalKategori }} Kategori</h3>
                    </div>
                    <div class="flex items-center gap-xs text-primary text-body-md font-bold mt-md">
                        <span class="material-symbols-outlined text-[18px]">trending_up</span>
                        <span>+2 Bulan ini</span>
                    </div>
                </div>
                <!-- Stat Card 2 -->
                <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant rounded-xl p-lg flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-container"></div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Rata-rata Poin / Kg</p>
                        <h3 class="font-display-lg text-display-lg text-primary mt-sm">{{ number_format($totalPoinBeredar) }} Poin</h3>
                    </div>
                    <p class="text-body-md text-secondary mt-md">Poin dasar komoditas global</p>
                </div>
                <!-- Stat Card 3 -->
                <div class="col-span-12 md:col-span-4 bg-primary text-white border border-primary rounded-xl p-lg flex flex-col justify-between relative">

                    <div class="relative z-10">
                        <p class="font-label-md text-label-md text-primary-fixed uppercase tracking-wider">Efisiensi Waste-to-Point</p>
                        <h3 class="font-display-lg text-display-lg text-white mt-sm">94.2%</h3>
                    </div>
                    <div class="relative z-10 flex items-center gap-xs text-primary-fixed text-body-md font-bold mt-md">
                        <span>Optimal</span>
                        <span class="material-symbols-outlined text-[18px]">check_circle</span>
                    </div>
                </div>
            </div>
            <!-- Data Table Section -->
            <div class="bg-white border border-outline-variant rounded-xl overflow-hidden">
                <div class="p-lg border-b border-outline-variant flex justify-between items-center bg-secondary-container/10">
                    <h4 class="font-title-lg text-title-lg text-on-surface">Daftar Master Kategori</h4>
                    <div class="flex gap-md">
                        <button class="px-md py-sm border border-outline-variant rounded-lg text-body-md flex items-center gap-sm hover:bg-surface transition-colors">
                            <span class="material-symbols-outlined">filter_list</span> Filter
                        </button>
                        <button class="px-md py-sm border border-outline-variant rounded-lg text-body-md flex items-center gap-sm hover:bg-surface transition-colors">
                            <span class="material-symbols-outlined">download</span> Ekspor
                        </button>
                    </div>
                </div>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-secondary-container/30">
                            <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase">Kategori</th>
                            <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase text-center">Kode</th>
                            <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase">Bobot Poin (Per Kg)</th>
                            <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase">Status</th>
                            <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant font-body-md text-on-surface">
                        @foreach($kategori as $item)
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-lg py-md font-bold">
                                {{ $item->nama_kategori }}
                            </td>
                            
                            <td class="px-lg py-md text-center text-secondary font-mono">
                                #{{ $item->id_kategori }}
                            </td>
                            
                            <td class="px-lg py-md text-primary font-bold">
                                {{ number_format($item->poin_per_kg) }} pts/kg
                            </td>
                            
                            <td class="px-lg py-md">
                                @if($item->status_aktif)
                                    <span class="px-3 py-1 bg-primary/10 text-primary border border-primary/20 rounded-full text-xs font-bold uppercase tracking-wider">Aktif</span>
                                @else
                                    <span class="px-3 py-1 bg-error-container text-error border border-error/20 rounded-full text-xs font-bold uppercase tracking-wider">Nonaktif</span>
                                @endif
                            </td>
                            
                            <td class="px-lg py-md text-right">
                                <div class="flex gap-sm justify-end">
                                    <a 
                                        href="{{ route('admin.kategori-sampah.edit', $item->id_kategori) }}" 
                                        class="h-8 w-8 flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-container rounded-full transition-colors" 
                                        title="Edit Kategori">
                                        <span class="material-symbols-outlined text-md">edit</span>
                                    </a>
                                    <button class="h-8 w-8 flex items-center justify-center text-on-surface-variant hover:text-error hover:bg-error-container/20 rounded-full transition-colors" title="Hapus Kategori">
                                        <span class="material-symbols-outlined text-md">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="p-lg bg-surface flex justify-between items-center border-t border-outline-variant">
                    <span class="text-body-md text-secondary">Menampilkan 4 dari 12 kategori</span>
                    <div class="flex gap-sm">
                        <button class="w-10 h-10 border border-outline-variant rounded-lg flex items-center justify-center disabled:opacity-50" disabled="">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <button class="w-10 h-10 bg-primary text-white rounded-lg flex items-center justify-center font-bold">1</button>
                        <button class="w-10 h-10 border border-outline-variant rounded-lg flex items-center justify-center hover:bg-surface-variant transition-colors">2</button>
                        <button class="w-10 h-10 border border-outline-variant rounded-lg flex items-center justify-center hover:bg-surface-variant transition-colors">3</button>
                        <button class="w-10 h-10 border border-outline-variant rounded-lg flex items-center justify-center hover:bg-surface-variant transition-colors">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Contextual Information -->
            <div class="mt-xl grid grid-cols-1 md:grid-cols-2 gap-lg">
                <div class="p-lg bg-surface-container rounded-xl border border-outline-variant flex gap-lg">
                    <div class="w-16 h-16 shrink-0 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
                        <span class="material-symbols-outlined text-[32px]">info</span>
                    </div>
                    <div>
                        <h5 class="font-title-lg text-title-lg text-primary">Penyesuaian Nilai Komoditas</h5>
                        <p class="text-body-md text-secondary mt-xs">Nilai poin per kg disesuaikan secara otomatis berdasarkan rata-rata harga pasar komoditas daur ulang nasional setiap awal bulan.</p>
                    </div>
                </div>
                <div class="p-lg bg-surface-container rounded-xl border border-outline-variant flex gap-lg">
                    <div class="w-16 h-16 shrink-0 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
                        <span class="material-symbols-outlined text-[32px]">verified</span>
                    </div>
                    <div>
                        <h5 class="font-title-lg text-title-lg text-primary">Standar SDG 11</h5>
                        <p class="text-body-md text-secondary mt-xs">Sistem klasifikasi ini mematuhi protokol Waste Management global untuk mendukung terwujudnya Kota dan Komunitas Berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- FAB for Quick Actions (Mobile Only) -->
    <button class="md:hidden fixed bottom-6 right-6 w-14 h-14 bg-primary text-white rounded-full shadow-lg flex items-center justify-center z-50 active:scale-90 transition-transform">
        <span class="material-symbols-outlined">add</span>
    </button>
    <script>
        // Micro-interaction for hover effects on cards
        document.querySelectorAll('.bento-grid > div').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('shadow-md');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('shadow-md');
            });
        });

        // Search highlight logic
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                const text = row.innerText.toLowerCase();
                if (text.includes(term)) {
                    row.style.display = '';
                    row.style.opacity = '1';
                } else {
                    row.style.display = 'none';
                    row.style.opacity = '0';
                }
            });
        });
    </script>
</body>

</html>