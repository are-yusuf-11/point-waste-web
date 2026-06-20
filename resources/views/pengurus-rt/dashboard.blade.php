<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                        "code-sm": ["13px", {
                            "lineHeight": "18px",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
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
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
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
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .chart-bar {
            transition: height 1s ease-in-out;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen">
    <!-- Side Navigation Bar (Anchored Component) -->
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface-container-lowest border-r border-outline-variant flex flex-col py-lg px-md z-50">
        <div class="mb-xl px-md">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">Sustainable Community</p>
        </div>
        <nav class="flex-1 space-y-sm">
            <!-- Dashboard (Active) -->
            <a class="flex items-center gap-md bg-secondary-container text-primary font-semibold rounded-lg px-md py-sm transition-all opacity-80 scale-95" href="{{ route('pengurus-rt.dashboard') }}">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="{{ route('pengurus-rt.setor-sampah') }}">
                <span class="material-symbols-outlined" data-icon="recycling">recycling</span>
                <span class="font-body-md text-body-md">Verifikasi Setoran</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="{{ route('pengurus-rt.manajemen-iuran') }}">
                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                <span class="font-body-md text-body-md">Manajemen Iuran</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="{{ route('pengurus-rt.waste-categories') }}">
                <span class="material-symbols-outlined" data-icon="category">category</span>
                <span class="font-body-md text-body-md">Kategori Sampah</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="{{ route('pengurus-rt.laporan') }}">
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
    <!-- Top Navigation Bar (Anchored Component) -->
    <header class="flex justify-between items-center h-16 px-lg ml-sidebar-width w-[calc(100%-var(--sidebar-width))] bg-surface-container-lowest border-b border-outline-variant fixed top-0 z-40">
        <div class="flex items-center gap-md">
            <div class="relative">
                <span class="absolute inset-y-0 left-3 flex items-center text-on-surface-variant">
                    <span class="material-symbols-outlined" data-icon="search">search</span>
                </span>
                <input class="bg-surface rounded-full py-sm pl-10 pr-md border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary text-body-md w-64" placeholder="Cari data warga..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-lg">
            <button class="relative text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                <span class="absolute -top-1 -right-1 bg-error text-white text-[10px] rounded-full w-4 h-4 flex items-center justify-center">3</span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
            </button>
            <div class="flex items-center gap-sm">
                <div class="text-right">
                    <p class="font-label-md text-label-md text-on-surface">Budi Santoso</p>
                    <p class="text-[10px] text-on-surface-variant uppercase">Pengurus RT 04</p>
                </div>
                <img class="w-10 h-10 rounded-full border border-outline-variant object-cover" data-alt="A professional portrait of a middle-aged Indonesian man wearing a neat office shirt, representing a community leader. The background is a clean, modern office setting with soft green accents reflecting an eco-friendly institutional environment. The lighting is bright and professional, emphasizing trust and civic responsibility." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvp77FnINR4Y3rgOHQpm0OaJw6OyqCyKT1Z7iKvSwnxEd_tdja-L8cN7QpnX_G84JM2d7mUdDB8cMY7ya6_qLkMVZkpkgbnIlTZ-SHxyvHaajfQYRxFHqwUphugbt0R7uZC_Yo_Kv1CGAM9Y38pbSuPOqz-eAO88pxfdswmH8egc262cgp393_-TOhDcwG-SrRjNU5Da4BRQo1gV1v92ENRBXoyWrx10RWYq4a1p73Dln4CT8ndkSj9a4RnYkKv88PvHcGDTnNLbg" />
            </div>
        </div>
    </header>
    <!-- Main Canvas -->
    <main class="ml-sidebar-width pt-24 pb-xl px-lg">
        <div class="max-w-container-max mx-auto space-y-lg">
            <!-- Header Section -->
            <div class="flex justify-between items-end">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Dashboard Pengurus</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Selamat datang kembali, pantau aktivitas warga hari ini.</p>
                </div>
                <div class="flex gap-md">
                    <button class="flex items-center gap-xs bg-primary text-on-primary px-lg py-sm rounded-lg hover:opacity-90 transition-all font-label-md text-label-md">
                        <span class="material-symbols-outlined text-[18px]" data-icon="add">add</span>
                        Setor Sampah Sekarang
                    </button>
                </div>
            </div>
            <!-- Statistics Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
                <!-- Stat 1 -->
                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg relative overflow-hidden group">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary rounded-l-xl"></div>
                    <p class="font-label-md text-label-md text-on-surface-variant uppercase mb-xs">Total Warga Aktif</p>
                    <div class="flex items-baseline gap-xs">
                        <h3 class="font-title-lg text-headline-md text-on-surface">142</h3>
                        <span class="text-[12px] text-primary font-bold">+4 bln ini</span>
                    </div>
                    <span class="material-symbols-outlined absolute top-lg right-lg text-surface-variant text-[48px] opacity-30 group-hover:opacity-60 transition-opacity" data-icon="groups">groups</span>
                </div>
                <!-- Stat 2 -->
                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg relative overflow-hidden group">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-tertiary-container rounded-l-xl"></div>
                    <p class="font-label-md text-label-md text-on-surface-variant uppercase mb-xs">Verifikasi Pending</p>
                    <div class="flex items-baseline gap-xs">
                        <h3 class="font-title-lg text-headline-md text-on-surface">12</h3>
                        <span class="text-[12px] text-error font-bold">Butuh Tindakan</span>
                    </div>
                    <span class="material-symbols-outlined absolute top-lg right-lg text-surface-variant text-[48px] opacity-30 group-hover:opacity-60 transition-opacity" data-icon="pending_actions">pending_actions</span>
                </div>
                <!-- Stat 3 -->
                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg relative overflow-hidden group">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-secondary rounded-l-xl"></div>
                    <p class="font-label-md text-label-md text-on-surface-variant uppercase mb-xs">Total Poin Komunitas</p>
                    <div class="flex items-baseline gap-xs">
                        <h3 class="font-title-lg text-headline-md text-on-surface">24.5k</h3>
                        <span class="text-[12px] text-primary font-bold">Poin</span>
                    </div>
                    <span class="material-symbols-outlined absolute top-lg right-lg text-surface-variant text-[48px] opacity-30 group-hover:opacity-60 transition-opacity" data-icon="token">token</span>
                </div>
                <!-- Stat 4 -->
                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg relative overflow-hidden group">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary-container rounded-l-xl"></div>
                    <p class="font-label-md text-label-md text-on-surface-variant uppercase mb-xs">Koleksi Iuran Bulanan</p>
                    <div class="flex items-baseline gap-xs">
                        <h3 class="font-title-lg text-headline-md text-on-surface">85%</h3>
                        <span class="text-[12px] text-on-surface-variant">Lunas</span>
                    </div>
                    <span class="material-symbols-outlined absolute top-lg right-lg text-surface-variant text-[48px] opacity-30 group-hover:opacity-60 transition-opacity" data-icon="account_balance">account_balance</span>
                </div>
            </div>
            <!-- Main Content Area: Recent Activity & Quick Actions -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
                <!-- Left: Recent Activity Table -->
                <div class="lg:col-span-2 space-y-lg">
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                        <div class="px-lg py-md border-b border-outline-variant flex justify-between items-center">
                            <h4 class="font-title-lg text-title-lg text-on-surface">Verifikasi Setoran Terbaru</h4>
                            <a class="text-primary font-label-md text-label-md hover:underline" href="#">Lihat Semua</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse">
                                <thead class="bg-secondary-container">
                                    <tr>
                                        <th class="px-lg py-sm text-left font-label-md text-label-md text-on-secondary-container">WARGA</th>
                                        <th class="px-lg py-sm text-left font-label-md text-label-md text-on-secondary-container">JENIS SAMPAH</th>
                                        <th class="px-lg py-sm text-left font-label-md text-label-md text-on-secondary-container">BERAT</th>
                                        <th class="px-lg py-sm text-center font-label-md text-label-md text-on-secondary-container">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-outline-variant">
                                    <!-- Row 1 -->
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="px-lg py-md">
                                            <div class="flex items-center gap-sm">
                                                <div class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-primary font-bold text-xs">AS</div>
                                                <span class="font-body-md text-body-md text-on-surface">Andi Saputra</span>
                                            </div>
                                        </td>
                                        <td class="px-lg py-md">
                                            <span class="bg-primary-fixed text-on-primary-fixed px-sm py-1 rounded-full text-[11px] font-bold">Plastik PET</span>
                                        </td>
                                        <td class="px-lg py-md font-body-md text-body-md">4.5 Kg</td>
                                        <td class="px-lg py-md text-center">
                                            <div class="flex justify-center gap-sm">
                                                <button class="w-8 h-8 rounded-lg bg-primary-container text-white flex items-center justify-center hover:opacity-80 transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="check">check</span></button>
                                                <button class="w-8 h-8 rounded-lg border border-error text-error flex items-center justify-center hover:bg-error-container transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="close">close</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 2 -->
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="px-lg py-md">
                                            <div class="flex items-center gap-sm">
                                                <div class="w-8 h-8 rounded-full bg-tertiary-container text-white flex items-center justify-center font-bold text-xs">SM</div>
                                                <span class="font-body-md text-body-md text-on-surface">Siti Maryam</span>
                                            </div>
                                        </td>
                                        <td class="px-lg py-md">
                                            <span class="bg-secondary-fixed text-on-secondary-fixed px-sm py-1 rounded-full text-[11px] font-bold">Kertas/Karton</span>
                                        </td>
                                        <td class="px-lg py-md font-body-md text-body-md">12.2 Kg</td>
                                        <td class="px-lg py-md text-center">
                                            <div class="flex justify-center gap-sm">
                                                <button class="w-8 h-8 rounded-lg bg-primary-container text-white flex items-center justify-center hover:opacity-80 transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="check">check</span></button>
                                                <button class="w-8 h-8 rounded-lg border border-error text-error flex items-center justify-center hover:bg-error-container transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="close">close</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 3 -->
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="px-lg py-md">
                                            <div class="flex items-center gap-sm">
                                                <div class="w-8 h-8 rounded-full bg-primary-fixed-dim text-on-primary-fixed flex items-center justify-center font-bold text-xs">RW</div>
                                                <span class="font-body-md text-body-md text-on-surface">Raka Wijaya</span>
                                            </div>
                                        </td>
                                        <td class="px-lg py-md">
                                            <span class="bg-tertiary-fixed text-on-tertiary-fixed px-sm py-1 rounded-full text-[11px] font-bold">Logam/Besi</span>
                                        </td>
                                        <td class="px-lg py-md font-body-md text-body-md">2.1 Kg</td>
                                        <td class="px-lg py-md text-center">
                                            <div class="flex justify-center gap-sm">
                                                <button class="w-8 h-8 rounded-lg bg-primary-container text-white flex items-center justify-center hover:opacity-80 transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="check">check</span></button>
                                                <button class="w-8 h-8 rounded-lg border border-error text-error flex items-center justify-center hover:bg-error-container transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="close">close</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 4 -->
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="px-lg py-md">
                                            <div class="flex items-center gap-sm">
                                                <div class="w-8 h-8 rounded-full bg-outline-variant text-on-surface-variant flex items-center justify-center font-bold text-xs">BP</div>
                                                <span class="font-body-md text-body-md text-on-surface">Bambang Pam</span>
                                            </div>
                                        </td>
                                        <td class="px-lg py-md">
                                            <span class="bg-primary-fixed text-on-primary-fixed px-sm py-1 rounded-full text-[11px] font-bold">Plastik HD</span>
                                        </td>
                                        <td class="px-lg py-md font-body-md text-body-md">0.8 Kg</td>
                                        <td class="px-lg py-md text-center">
                                            <div class="flex justify-center gap-sm">
                                                <button class="w-8 h-8 rounded-lg bg-primary-container text-white flex items-center justify-center hover:opacity-80 transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="check">check</span></button>
                                                <button class="w-8 h-8 rounded-lg border border-error text-error flex items-center justify-center hover:bg-error-container transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="close">close</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row 5 -->
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="px-lg py-md">
                                            <div class="flex items-center gap-sm">
                                                <div class="w-8 h-8 rounded-full bg-secondary-fixed-dim text-on-secondary-fixed flex items-center justify-center font-bold text-xs">DL</div>
                                                <span class="font-body-md text-body-md text-on-surface">Dewi Lestari</span>
                                            </div>
                                        </td>
                                        <td class="px-lg py-md">
                                            <span class="bg-secondary-fixed text-on-secondary-fixed px-sm py-1 rounded-full text-[11px] font-bold">Kertas/Karton</span>
                                        </td>
                                        <td class="px-lg py-md font-body-md text-body-md">5.5 Kg</td>
                                        <td class="px-lg py-md text-center">
                                            <div class="flex justify-center gap-sm">
                                                <button class="w-8 h-8 rounded-lg bg-primary-container text-white flex items-center justify-center hover:opacity-80 transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="check">check</span></button>
                                                <button class="w-8 h-8 rounded-lg border border-error text-error flex items-center justify-center hover:bg-error-container transition-all"><span class="material-symbols-outlined text-[18px]" data-icon="close">close</span></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Right: Quick Actions & Dues Chart -->
                <div class="space-y-lg">
                    <!-- Quick Actions -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg">
                        <h4 class="font-title-lg text-title-lg text-on-surface mb-md">Aksi Cepat</h4>
                        <div class="grid grid-cols-1 gap-sm">
                            <button class="flex items-center gap-md p-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all text-left group">
                                <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined" data-icon="verified">verified</span>
                                </div>
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface">Verifikasi Setoran</p>
                                    <p class="text-[11px] text-on-surface-variant">Cek timbangan &amp; foto warga</p>
                                </div>
                            </button>
                            <button class="flex items-center gap-md p-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all text-left group">
                                <div class="w-10 h-10 rounded-full bg-tertiary-container text-white flex items-center justify-center">
                                    <span class="material-symbols-outlined" data-icon="post_add">post_add</span>
                                </div>
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface">Generate Tagihan</p>
                                    <p class="text-[11px] text-on-surface-variant">Kirim iuran RT bulan ini</p>
                                </div>
                            </button>
                            <button class="flex items-center gap-md p-md border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all text-left group">
                                <div class="w-10 h-10 rounded-full bg-outline-variant text-on-surface flex items-center justify-center">
                                    <span class="material-symbols-outlined" data-icon="playlist_add">playlist_add</span>
                                </div>
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface">Tambah Kategori</p>
                                    <p class="text-[11px] text-on-surface-variant">Atur nilai poin jenis sampah</p>
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Dues Status Chart -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg">
                        <div class="flex justify-between items-center mb-lg">
                            <h4 class="font-title-lg text-title-lg text-on-surface">Status Iuran</h4>
                            <span class="font-label-md text-label-md text-on-surface-variant">Oktober 2023</span>
                        </div>
                        <div class="flex items-end justify-around h-40 gap-sm pb-lg relative border-b border-outline-variant">
                            <!-- Paid Bar -->
                            <div class="flex flex-col items-center w-full">
                                <div class="chart-bar w-12 bg-primary rounded-t-lg" style="height: 85%;">
                                    <div class="text-center -top-6 relative text-[10px] font-bold text-primary">85%</div>
                                </div>
                                <span class="font-label-md text-[10px] mt-2 text-on-surface-variant">Lunas</span>
                            </div>
                            <!-- Pending Bar -->
                            <div class="flex flex-col items-center w-full">
                                <div class="chart-bar w-12 bg-surface-variant rounded-t-lg" style="height: 15%;">
                                    <div class="text-center -top-6 relative text-[10px] font-bold text-on-surface-variant">15%</div>
                                </div>
                                <span class="font-label-md text-[10px] mt-2 text-on-surface-variant">Tertunda</span>
                            </div>
                        </div>
                        <div class="mt-md space-y-sm">
                            <div class="flex justify-between items-center">
                                <span class="font-label-md text-label-md text-on-surface-variant">Target</span>
                                <span class="font-body-md text-body-md font-bold text-on-surface">Rp 3.500.000</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-label-md text-label-md text-on-surface-variant">Terkumpul</span>
                                <span class="font-body-md text-body-md font-bold text-primary">Rp 2.975.000</span>
                            </div>
                        </div>
                        <button class="w-full mt-lg py-sm border border-primary text-primary rounded-lg font-label-md text-label-md hover:bg-primary hover:text-white transition-all">
                            Ingatkan Warga Belum Bayar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Bottom Section: Map or Community Impact (Bento) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden h-64 relative">
                    <div class="w-full h-full bg-cover bg-center opacity-80" data-alt="A clean, minimalist 2D illustrative map of a modern residential neighborhood in Jakarta, with highlighted recycling points and clean green streets. The map style is corporate-modern with professional iconography for waste collection centers. Soft pastel colors and professional strokes reflect urban efficiency." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB_cnf2m8lyqpYYpJ2-3y4-h4Wuj1XJNdlcSP2ii5_l46Pk-gqGwyi91oSvxXEKIZgVU_HmqBiwZoCvK3EeAwSSt1WSYbd2R-h6mzvcbI9s0bENLQvNgOnU0TRf6Jh6RVCteEobGNRONaecx9S4F1qnTClHBbh14OjcPPYCy4l3vmd5LzQDcvcQ9KFKFPlQK0F5r-Prc_SvPPZOKWXslrFIAS4AS19-dnJ5zsLnyC6VvU_uylxJfyZX6Zcf1WjfVn2fleNw_Y_FVCs')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest to-transparent"></div>
                    <div class="absolute bottom-md left-md">
                        <h5 class="font-title-lg text-title-lg text-on-surface">Sebaran Penjemputan</h5>
                        <p class="font-label-md text-label-md text-on-surface-variant">4 Titik aktif hari ini</p>
                    </div>
                </div>
                <div class="bg-primary-container text-on-primary-container rounded-xl p-lg flex flex-col justify-between">
                    <div>
                        <h5 class="font-headline-md text-headline-md font-bold">Dampak Lingkungan</h5>
                        <p class="font-body-md text-body-md opacity-90 mt-xs">Total sampah yang berhasil dikelola oleh warga RT 04 dalam 3 bulan terakhir.</p>
                    </div>
                    <div class="flex items-center gap-lg mt-lg">
                        <div class="text-center">
                            <p class="text-[32px] font-bold">1.2</p>
                            <p class="text-[12px] uppercase tracking-wider opacity-80">Ton Plastik</p>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <p class="text-[32px] font-bold">450</p>
                            <p class="text-[12px] uppercase tracking-wider opacity-80">Kg Kertas</p>
                        </div>
                        <div class="w-px h-12 bg-white/20"></div>
                        <div class="text-center">
                            <p class="text-[32px] font-bold">3.4</p>
                            <p class="text-[12px] uppercase tracking-wider opacity-80">Ton Karbon</p>
                        </div>
                    </div>
                    <button class="mt-lg bg-white/10 hover:bg-white/20 px-md py-sm rounded-lg text-center transition-all font-label-md text-label-md self-start">
                        Lihat Laporan Lengkap
                    </button>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Simple animation trigger for chart bars on load
        window.addEventListener('load', () => {
            const bars = document.querySelectorAll('.chart-bar');
            bars.forEach(bar => {
                const height = bar.style.height;
                bar.style.height = '0';
                setTimeout(() => {
                    bar.style.height = height;
                }, 100);
            });
        });

        // Hover scale effect for stats cards
        const statsCards = document.querySelectorAll('.group');
        statsCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-4px)';
                card.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.05)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = 'none';
            });
        });
    </script>
</body>

</html>