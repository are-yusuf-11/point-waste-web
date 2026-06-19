<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Iuran - PointWaste RT</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed": "#d9e6dd",
                        "primary-fixed-dim": "#8bd79b",
                        "primary-fixed": "#a6f4b5",
                        "tertiary-container": "#005e87",
                        "inverse-on-surface": "#eaf1ff",
                        "surface-bright": "#f8f9ff",
                        "tertiary": "#004565",
                        "on-secondary-fixed-variant": "#3e4943",
                        "on-secondary-container": "#5b6760",
                        "on-error": "#ffffff",
                        "on-surface-variant": "#404940",
                        "on-primary-fixed": "#00210b",
                        "surface-container-low": "#eff4ff",
                        "primary": "#004c22",
                        "on-background": "#0b1c30",
                        "primary-container": "#166534",
                        "on-tertiary-container": "#9dd5ff",
                        "surface-dim": "#cbdbf5",
                        "surface-container-highest": "#d3e4fe",
                        "secondary": "#55615a",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#bdcac1",
                        "error": "#ba1a1a",
                        "surface": "#f8f9ff",
                        "outline-variant": "#bfc9bd",
                        "surface-variant": "#d3e4fe",
                        "on-secondary-fixed": "#131e19",
                        "background": "#f8f9ff",
                        "outline": "#707a6f",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "surface-tint": "#1f6c3a",
                        "on-primary-fixed-variant": "#005226",
                        "on-primary": "#ffffff",
                        "inverse-surface": "#213145",
                        "tertiary-fixed-dim": "#89ceff",
                        "on-tertiary-fixed": "#001e2f",
                        "inverse-primary": "#8bd79b",
                        "on-error-container": "#93000a",
                        "tertiary-fixed": "#c9e6ff",
                        "on-surface": "#0b1c30",
                        "on-primary-container": "#93e0a2",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "secondary-container": "#d9e6dd",
                        "surface-container-high": "#dce9ff",
                        "surface-container": "#e5eeff",
                        "error-container": "#ffdad6"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "lg": "24px",
                        "md": "16px",
                        "container-max": "1280px",
                        "base": "4px",
                        "xs": "4px",
                        "xl": "32px",
                        "sm": "8px",
                        "sidebar-width": "260px"
                    },
                    "fontFamily": {
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "title-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "code-sm": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
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
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "title-lg": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "code-sm": ["13px", {
                            "lineHeight": "18px",
                            "fontWeight": "400"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
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

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-background text-on-background">
    <!-- Side Navigation Shell -->
    <aside class="fixed left-0 top-0 h-full w-[260px] bg-surface-container-lowest border-r border-outline-variant flex flex-col p-md z-50">
        <div class="mb-xl px-4">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste RT</h1>
            <p class="text-on-surface-variant font-label-md text-label-md opacity-70">Admin Portal</p>
        </div>
        <nav class="flex flex-col gap-2">
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed transition-colors duration-200 rounded-lg" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed transition-colors duration-200 rounded-lg" href="#">
                <span class="material-symbols-outlined">fact_check</span>
                <span class="font-body-md text-body-md">Verifikasi Setoran</span>
            </a>
            <!-- Active Tab -->
            <a class="flex items-center gap-3 px-4 py-3 text-primary bg-secondary-container rounded-lg font-semibold transition-transform active:scale-95" href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="font-body-md text-body-md">Manajemen Iuran</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed transition-colors duration-200 rounded-lg" href="#">
                <span class="material-symbols-outlined">category</span>
                <span class="font-body-md text-body-md">Kategori Sampah</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed transition-colors duration-200 rounded-lg" href="#">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-body-md text-body-md">Laporan</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-primary hover:bg-secondary-fixed transition-colors duration-200 rounded-lg" href="#">
                <span class="material-symbols-outlined">account_circle</span>
                <span class="font-body-md text-body-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto p-4 border-t border-outline-variant flex items-center gap-3">
            <img class="w-10 h-10 rounded-full object-cover" data-alt="A professional portrait of a senior community administrator for a modern residential complex. The lighting is soft and natural, emphasizing trust and competence. He is wearing a clean, modern corporate-casual outfit. The background is a blurred view of a sustainable, green community park with modern architecture." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQ5vC5HrgUWjK6pW4CNhkKgM4QZZsjVn-VoGdwSJPpOt5HUEGoxrI5IRJ4eCRR9lPNC6XvY2TsEV3YuKpHf2hx2zDqKZBiIOH6q_khrYssWAm17n6nIDZmvZarM0RefNSRi0RtneFz04cfibQYQL2vPHo9rYXQcYRiirzC2f43wvimcT6DlRW2CzpLNWmVMIKuq3IbQSeKVO_pp9r0JoKLVK8IKjyn8tRbShUKO6adI10aDbvg4oOG64IIZuW6XvC_25Q3uPNi-pY" />
            <div>
                <p class="font-label-md text-label-md text-on-surface font-bold">RT Administrator</p>
                <p class="font-label-md text-label-md text-on-surface-variant">Blok A-12</p>
            </div>
        </div>
    </aside>
    <!-- Top App Bar Shell -->
    <header class="fixed top-0 right-0 left-[260px] h-16 bg-surface flex justify-between items-center px-lg z-40">
        <div class="flex items-center gap-4">
            <h2 class="font-title-lg text-title-lg text-primary">Manajemen Iuran</h2>
        </div>
        <div class="flex items-center gap-4">
            <div class="relative group">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-on-surface-variant">
                    <span class="material-symbols-outlined text-[20px]">search</span>
                </span>
                <input class="bg-surface-container-low border-none rounded-full pl-10 pr-4 py-2 text-body-md focus:ring-2 focus:ring-primary w-64 transition-all" placeholder="Cari nama warga..." type="text" />
            </div>
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">settings</span>
            </button>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-[260px] mt-16 p-lg max-w-container-max mx-auto">
        <!-- Summary Header Section (Bento Grid Style) -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-xl">
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-xl flex flex-col justify-between relative overflow-hidden group">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <p class="font-label-md text-label-md text-on-surface-variant mb-2">Total Tagihan Bulan Ini</p>
                <h3 class="font-title-lg text-title-lg text-on-surface">Rp 12.450.000</h3>
                <div class="mt-4 flex items-center text-primary text-[12px] font-bold">
                    <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                    <span>4.2% dari bln lalu</span>
                </div>
            </div>
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-xl flex flex-col justify-between relative overflow-hidden group">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <p class="font-label-md text-label-md text-on-surface-variant mb-2">Iuran Terkumpul</p>
                <h3 class="font-title-lg text-title-lg text-on-surface">Rp 9.800.000</h3>
                <div class="mt-4 flex items-center text-primary text-[12px] font-bold">
                    <span class="material-symbols-outlined text-[14px] mr-1">check_circle</span>
                    <span>Progress: 78.7%</span>
                </div>
            </div>
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-xl flex flex-col justify-between relative overflow-hidden group">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-error"></div>
                <p class="font-label-md text-label-md text-on-surface-variant mb-2">Warga Belum Bayar</p>
                <h3 class="font-title-lg text-title-lg text-on-surface">42 KK</h3>
                <div class="mt-4 flex items-center text-error text-[12px] font-bold">
                    <span class="material-symbols-outlined text-[14px] mr-1">error</span>
                    <span>Segera ingatkan</span>
                </div>
            </div>
            <div class="bg-surface-container-lowest border border-outline-variant p-md rounded-xl flex flex-col justify-between relative overflow-hidden group">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-tertiary"></div>
                <p class="font-label-md text-label-md text-on-surface-variant mb-2">Persentase Pelunasan</p>
                <div class="flex items-end gap-2">
                    <h3 class="font-title-lg text-title-lg text-on-surface">78%</h3>
                    <div class="flex-1 h-2 bg-secondary-fixed rounded-full mb-2 overflow-hidden">
                        <div class="h-full bg-primary w-[78%]"></div>
                    </div>
                </div>
                <p class="mt-2 font-label-md text-label-md text-on-surface-variant">Update: Hari ini, 09:00</p>
            </div>
        </div>
        <!-- Quick Actions & Filters Section -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-md mb-lg">
            <div class="flex flex-wrap items-center gap-3">
                <button class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-lg font-body-md text-body-md font-semibold flex items-center gap-2 transition-all active:scale-95">
                    <span class="material-symbols-outlined">add_circle</span>
                    Generate Tagihan Baru
                </button>
                <button class="border border-outline text-primary hover:bg-secondary-fixed px-6 py-2.5 rounded-lg font-body-md text-body-md font-semibold flex items-center gap-2 transition-all active:scale-95">
                    <span class="material-symbols-outlined">download</span>
                    Ekspor Laporan Iuran
                </button>
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <div class="flex items-center gap-2 bg-surface-container-low px-3 py-1.5 rounded-lg border border-outline-variant">
                    <span class="material-symbols-outlined text-on-surface-variant text-[20px]">filter_list</span>
                    <select class="bg-transparent border-none text-body-md text-on-surface-variant focus:ring-0 cursor-pointer">
                        <option>Semua Status</option>
                        <option>Lunas</option>
                        <option>Belum Lunas</option>
                        <option>Tertunda</option>
                    </select>
                </div>
                <div class="flex items-center gap-2 bg-surface-container-low px-3 py-1.5 rounded-lg border border-outline-variant">
                    <span class="material-symbols-outlined text-on-surface-variant text-[20px]">calendar_month</span>
                    <select class="bg-transparent border-none text-body-md text-on-surface-variant focus:ring-0 cursor-pointer">
                        <option>Oktober 2023</option>
                        <option>September 2023</option>
                        <option>Agustus 2023</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Detailed Table Section -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-secondary-container border-b border-outline-variant">
                        <tr>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-secondary-container uppercase tracking-wider">Nama Warga</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-secondary-container uppercase tracking-wider">Periode</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-secondary-container uppercase tracking-wider">Jumlah Tagihan</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-secondary-container uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-secondary-container uppercase tracking-wider text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        <!-- Row 1 -->
                        <tr class="hover:bg-surface-container transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-[12px]">AS</div>
                                    <div>
                                        <p class="font-body-md text-body-md font-semibold text-on-surface">Ahmad Subarjo</p>
                                        <p class="text-[12px] text-on-surface-variant">Blok A-01</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-body-md text-body-md text-on-surface-variant">Oktober 2023</td>
                            <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Rp 150.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[12px] font-semibold bg-primary-fixed text-on-primary-fixed-variant">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Lunas
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-on-surface-variant hover:text-primary transition-colors p-1" title="Lihat Detail">
                                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-secondary-fixed text-secondary flex items-center justify-center font-bold text-[12px]">BW</div>
                                    <div>
                                        <p class="font-body-md text-body-md font-semibold text-on-surface">Budi Wijaya</p>
                                        <p class="text-[12px] text-on-surface-variant">Blok A-02</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-body-md text-body-md text-on-surface-variant">Oktober 2023</td>
                            <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Rp 150.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[12px] font-semibold bg-error-container text-on-error-container">
                                    <span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                    Belum Lunas
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="bg-primary-container text-on-primary-container px-3 py-1 rounded-lg text-[12px] font-bold flex items-center gap-1 hover:bg-primary hover:text-white transition-all active:scale-95">
                                        <span class="material-symbols-outlined text-[16px]">payments</span>
                                        Catat
                                    </button>
                                    <button class="border border-outline text-on-surface-variant px-3 py-1 rounded-lg text-[12px] font-bold flex items-center gap-1 hover:bg-surface-variant transition-all active:scale-95">
                                        <span class="material-symbols-outlined text-[16px]">mail</span>
                                        Pengingat
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-tertiary-fixed text-tertiary flex items-center justify-center font-bold text-[12px]">CW</div>
                                    <div>
                                        <p class="font-body-md text-body-md font-semibold text-on-surface">Citra Wahyuni</p>
                                        <p class="text-[12px] text-on-surface-variant">Blok A-05</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-body-md text-body-md text-on-surface-variant">Oktober 2023</td>
                            <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Rp 150.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[12px] font-semibold bg-surface-container-high text-on-surface-variant">
                                    <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                    Tertunda
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="bg-primary-container text-on-primary-container px-3 py-1 rounded-lg text-[12px] font-bold flex items-center gap-1 hover:bg-primary hover:text-white transition-all active:scale-95">
                                        <span class="material-symbols-outlined text-[16px]">check</span>
                                        Verifikasi
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- More Rows... (Iterated in UI) -->
                        <tr class="hover:bg-surface-container transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-[12px]">DS</div>
                                    <div>
                                        <p class="font-body-md text-body-md font-semibold text-on-surface">Dedi Setiadi</p>
                                        <p class="text-[12px] text-on-surface-variant">Blok B-03</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-body-md text-body-md text-on-surface-variant">Oktober 2023</td>
                            <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Rp 150.000</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[12px] font-semibold bg-primary-fixed text-on-primary-fixed-variant">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    Lunas
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-on-surface-variant hover:text-primary transition-colors p-1">
                                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="px-6 py-4 bg-surface-container-low border-t border-outline-variant flex items-center justify-between">
                <p class="font-label-md text-label-md text-on-surface-variant">Menampilkan 1-10 dari 124 Warga</p>
                <div class="flex gap-2">
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                    </button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-primary text-white font-bold text-[12px]">1</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container transition-colors font-bold text-[12px]">2</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container transition-colors font-bold text-[12px]">3</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- Floating Toast Notification (Interaction Example) -->
    <div class="fixed bottom-8 right-8 bg-inverse-surface text-inverse-on-surface px-6 py-3 rounded-lg shadow-xl translate-y-24 opacity-0 transition-all duration-300 flex items-center gap-3 z-[100]" id="toast">
        <span class="material-symbols-outlined text-primary-fixed">check_circle</span>
        <span class="font-body-md text-body-md">Tagihan baru berhasil digenerate!</span>
    </div>
    <script>
        // Simple Interaction logic
        function showToast(message) {
            const toast = document.getElementById('toast');
            toast.querySelector('span:last-child').textContent = message;
            toast.classList.remove('translate-y-24', 'opacity-0');
            setTimeout(() => {
                toast.classList.add('translate-y-24', 'opacity-0');
            }, 3000);
        }

        document.querySelectorAll('button').forEach(btn => {
            if (btn.innerText.includes('Generate') || btn.innerText.includes('Catat')) {
                btn.addEventListener('click', () => {
                    const action = btn.innerText.includes('Generate') ? 'Tagihan baru berhasil dibuat!' : 'Pembayaran telah dicatat.';
                    showToast(action);
                });
            }
        });
    </script>
</body>

</html>