<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Laporan Poin &amp; Iuran - PointWaste RT</title>
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
                        "on-surface-variant": "#404940",
                        "error": "#ba1a1a",
                        "on-primary-fixed-variant": "#005226",
                        "secondary-fixed": "#d9e6dd",
                        "surface-container-high": "#dce9ff",
                        "tertiary": "#004565",
                        "on-error-container": "#93000a",
                        "surface-variant": "#d3e4fe",
                        "on-primary": "#ffffff",
                        "tertiary-fixed-dim": "#89ceff",
                        "primary-fixed-dim": "#8bd79b",
                        "on-error": "#ffffff",
                        "surface": "#f8f9ff",
                        "on-primary-container": "#93e0a2",
                        "surface-container-low": "#eff4ff",
                        "secondary-container": "#d9e6dd",
                        "on-secondary-container": "#5b6760",
                        "inverse-on-surface": "#eaf1ff",
                        "surface-bright": "#f8f9ff",
                        "on-tertiary-fixed": "#001e2f",
                        "on-surface": "#0b1c30",
                        "on-secondary-fixed": "#131e19",
                        "inverse-primary": "#8bd79b",
                        "surface-container": "#e5eeff",
                        "primary-container": "#166534",
                        "surface-dim": "#cbdbf5",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "on-primary-fixed": "#00210b",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#213145",
                        "tertiary-container": "#005e87",
                        "primary": "#004c22",
                        "background": "#f8f9ff",
                        "surface-tint": "#1f6c3a",
                        "on-tertiary-container": "#9dd5ff",
                        "on-secondary-fixed-variant": "#3e4943",
                        "on-tertiary": "#ffffff",
                        "primary-fixed": "#a6f4b5",
                        "on-background": "#0b1c30",
                        "surface-container-highest": "#d3e4fe",
                        "outline-variant": "#bfc9bd",
                        "secondary": "#55615a",
                        "outline": "#707a6f",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#c9e6ff",
                        "secondary-fixed-dim": "#bdcac1"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "8px",
                        "lg": "24px",
                        "gutter": "24px",
                        "xs": "4px",
                        "sidebar-width": "260px",
                        "container-max": "1280px",
                        "xl": "32px",
                        "base": "4px",
                        "md": "16px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "title-lg": ["Inter"],
                        "display-lg": ["Inter"]
                    },
                    "fontSize": {
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
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
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

        .chart-container {
            position: relative;
            height: 220px;
            width: 100%;
        }

        .sidebar-fixed {
            width: 260px;
        }

        .content-area {
            margin-left: 260px;
            width: calc(100% - 260px);
        }

        .stat-card-accent {
            border-left: 4px solid #166534;
        }

        .glass-header {
            backdrop-filter: blur(8px);
            background-color: rgba(248, 249, 255, 0.8);
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <!-- Sidebar Navigation -->
    <aside class="fixed left-0 top-0 h-full w-sidebar-width bg-surface-container-lowest border-r border-outline-variant flex flex-col gap-2 p-md z-50">
        <div class="mb-lg px-4">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste RT</h1>
            <p class="text-body-md text-on-surface-variant">Admin Portal</p>
        </div>
        <nav class="flex-1 flex flex-col gap-1">
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-secondary-fixed transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-secondary-fixed transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">fact_check</span>
                <span class="font-body-md text-body-md">Verifikasi Setoran</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-secondary-fixed transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="font-body-md text-body-md">Manajemen Iuran</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-secondary-fixed transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">category</span>
                <span class="font-body-md text-body-md">Kategori Sampah</span>
            </a>
            <!-- Active State -->
            <a class="flex items-center gap-3 px-4 py-3 text-primary bg-secondary-container rounded-lg font-semibold shadow-sm" href="#">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-body-md text-body-md">Laporan</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-secondary-fixed transition-colors duration-200 rounded-lg group" href="#">
                <span class="material-symbols-outlined">account_circle</span>
                <span class="font-body-md text-body-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto p-4 bg-secondary-container/30 rounded-xl flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
            </div>
            <div>
                <p class="font-label-md text-label-md text-primary">RT 04 Administrator</p>
                <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">Level 2 Access</p>
            </div>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="content-area min-h-screen">
        <!-- Top App Bar -->
        <header class="h-16 px-lg flex justify-between items-center bg-surface sticky top-0 z-40 border-b border-outline-variant">
            <div class="flex items-center gap-4">
                <h2 class="font-title-lg text-title-lg text-primary">Laporan Poin &amp; Iuran</h2>
            </div>
            <div class="flex items-center gap-6">
                <div class="relative hidden md:block">
                    <input class="bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-body-md w-64 focus:ring-2 focus:ring-primary" placeholder="Cari data laporan..." type="text" />
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                </div>
                <div class="flex items-center gap-3">
                    <button class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors">notifications</button>
                    <button class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors">settings</button>
                    <div class="h-8 w-[1px] bg-outline-variant mx-2"></div>
                    <img class="w-8 h-8 rounded-full border border-primary/20 object-cover" data-alt="A professional headshot of a middle-aged male administrator in a clean office setting, with soft natural light. He is wearing a professional polo shirt, and the image has a bright, modern, and trustworthy corporate aesthetic with high-key lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFjV4fxh6Uo1xRD9cghAT590suYdZHLc38LjRdCUElqidWrxlI9V4fqLn0oEAhe4nSi6aUwojmxTPdPG_DInSwAP2YU67nypSTQd3Kiz5GzEQVNshKb12H_ON2LmRJtQNbcNSFtM0DH02Zgpf2Vr7PJLn5d9PWpf1oQrU0581AbcSxc4U0BuKg1arUory4pjZ8nznt4UApCwBSBRcs3DKiVjbXmett2t_NqYiIJOo4VWqqOKy0CgNJoex4uFcMGS0c8MERFSS98w0" />
                </div>
            </div>
        </header>
        <div class="p-lg max-w-container-max mx-auto space-y-lg">
            <!-- Actions & Filters -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white p-4 rounded-xl border border-outline-variant">
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-2 px-3 py-2 bg-surface-container-low rounded-lg text-body-md border border-outline-variant cursor-pointer hover:bg-surface-container">
                        <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                        <span>01 Jan 2024 - 31 Mar 2024</span>
                    </div>
                    <button class="flex items-center gap-2 px-4 py-2 border border-outline text-primary rounded-lg hover:bg-secondary-fixed transition-colors font-semibold text-body-md">
                        <span class="material-symbols-outlined text-[20px]">filter_list</span>
                        Filter
                    </button>
                </div>
                <div class="flex items-center gap-2">
                    <button class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary rounded-lg hover:bg-primary-container transition-colors font-semibold shadow-sm text-body-md">
                        <span class="material-symbols-outlined text-[20px]">download</span>
                        Ekspor Laporan
                    </button>
                </div>
            </div>
            <!-- Ringkasan Laporan (Bento Style) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
                <div class="bg-white p-lg rounded-xl border border-outline-variant stat-card-accent flex flex-col justify-between">
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-1">Total Poin Komunitas</p>
                        <h3 class="font-display-lg text-headline-lg text-primary">128.450</h3>
                    </div>
                    <div class="mt-4 flex items-center gap-2 text-primary font-semibold text-body-md">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12.5% bln ini</span>
                    </div>
                </div>
                <div class="bg-white p-lg rounded-xl border border-outline-variant stat-card-accent flex flex-col justify-between">
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-1">Total Iuran Terkumpul</p>
                        <h3 class="font-display-lg text-headline-lg text-primary">Rp 12.450.000</h3>
                    </div>
                    <div class="mt-4 flex items-center gap-2 text-primary font-semibold text-body-md">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Target: Rp 15jt</span>
                    </div>
                </div>
                <div class="bg-white p-lg rounded-xl border border-outline-variant stat-card-accent flex flex-col justify-between">
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-1">Partisipasi Warga</p>
                        <h3 class="font-display-lg text-headline-lg text-primary">84.2%</h3>
                    </div>
                    <div class="mt-4 flex flex-col gap-2">
                        <div class="w-full bg-secondary-fixed h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[84.2%]"></div>
                        </div>
                        <span class="text-body-md text-on-surface-variant">212 dari 252 KK Aktif</span>
                    </div>
                </div>
            </div>
            <!-- Visualisasi Data (Asymmetric Layout) -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-lg">
                <!-- Line Chart: Tren Sampah -->
                <div class="lg:col-span-3 bg-white p-lg rounded-xl border border-outline-variant">
                    <div class="flex justify-between items-center mb-lg">
                        <div>
                            <h4 class="font-title-lg text-title-lg text-on-surface">Tren Setoran Sampah</h4>
                            <p class="text-body-md text-on-surface-variant">Volume sampah bulanan (Kg)</p>
                        </div>
                        <div class="flex gap-2">
                            <span class="px-2 py-1 bg-secondary-container text-primary text-[10px] rounded font-bold">2024</span>
                        </div>
                    </div>
                    <div class="chart-container flex items-end justify-between gap-4 px-2">
                        <!-- Simulated Line Chart with DIVs -->
                        <div class="flex-1 flex flex-col items-center group">
                            <div class="w-full relative h-[40%] bg-primary/10 rounded-t-lg transition-all duration-300 hover:bg-primary/20">
                                <div class="absolute -top-6 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-primary text-white text-[10px] px-2 py-1 rounded">120kg</div>
                            </div>
                            <span class="mt-2 text-label-md text-on-surface-variant">Jan</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group">
                            <div class="w-full relative h-[65%] bg-primary/10 rounded-t-lg transition-all duration-300 hover:bg-primary/20">
                                <div class="absolute -top-6 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-primary text-white text-[10px] px-2 py-1 rounded">185kg</div>
                            </div>
                            <span class="mt-2 text-label-md text-on-surface-variant">Feb</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group">
                            <div class="w-full relative h-[90%] bg-primary/20 border-t-2 border-primary rounded-t-lg transition-all duration-300 hover:bg-primary/30">
                                <div class="absolute -top-6 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 bg-primary text-white text-[10px] px-2 py-1 rounded">245kg</div>
                            </div>
                            <span class="mt-2 text-label-md font-bold text-primary">Mar</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group">
                            <div class="w-full relative h-[75%] bg-primary/10 rounded-t-lg transition-all duration-300 hover:bg-primary/20"></div>
                            <span class="mt-2 text-label-md text-on-surface-variant">Apr</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group">
                            <div class="w-full relative h-[60%] bg-primary/10 rounded-t-lg transition-all duration-300 hover:bg-primary/20"></div>
                            <span class="mt-2 text-label-md text-on-surface-variant">Mei</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center group">
                            <div class="w-full relative h-[85%] bg-primary/10 rounded-t-lg transition-all duration-300 hover:bg-primary/20"></div>
                            <span class="mt-2 text-label-md text-on-surface-variant">Jun</span>
                        </div>
                    </div>
                </div>
                <!-- Bar Chart: Perbandingan Iuran -->
                <div class="lg:col-span-2 bg-white p-lg rounded-xl border border-outline-variant">
                    <div class="mb-lg">
                        <h4 class="font-title-lg text-title-lg text-on-surface">Target Iuran</h4>
                        <p class="text-body-md text-on-surface-variant">Realisasi vs Target per Kuartal</p>
                    </div>
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <div class="flex justify-between text-body-md">
                                <span class="font-semibold">Kuartal 1</span>
                                <span class="text-primary font-bold">Rp 4.2jt / 5jt</span>
                            </div>
                            <div class="w-full bg-secondary-fixed h-3 rounded-full">
                                <div class="bg-primary h-full w-[84%] rounded-full"></div>
                            </div>
                        </div>
                        <div class="space-y-2 opacity-50">
                            <div class="flex justify-between text-body-md">
                                <span class="font-semibold">Kuartal 2</span>
                                <span>Estimasi Rp 5jt</span>
                            </div>
                            <div class="w-full bg-secondary-fixed h-3 rounded-full border-2 border-dashed border-outline-variant"></div>
                        </div>
                        <div class="mt-8 p-4 bg-tertiary-fixed rounded-lg flex items-start gap-3">
                            <span class="material-symbols-outlined text-tertiary">info</span>
                            <p class="text-[12px] text-tertiary font-medium">Pengumpulan iuran meningkat 15% sejak program PointWaste diluncurkan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Detail Table -->
            <div class="bg-white rounded-xl border border-outline-variant overflow-hidden">
                <div class="p-lg border-b border-outline-variant flex justify-between items-center">
                    <h4 class="font-title-lg text-title-lg text-on-surface">Rincian Periode Laporan</h4>
                    <button class="text-primary font-semibold text-body-md flex items-center gap-1 hover:underline">
                        Lihat Semua Riwayat
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-secondary-fixed/30">
                                <th class="px-lg py-3 font-label-md text-label-md text-on-surface-variant uppercase">Periode</th>
                                <th class="px-lg py-3 font-label-md text-label-md text-on-surface-variant uppercase">Total Berat (Kg)</th>
                                <th class="px-lg py-3 font-label-md text-label-md text-on-surface-variant uppercase text-right">Poin Terbit</th>
                                <th class="px-lg py-3 font-label-md text-label-md text-on-surface-variant uppercase text-right">Iuran Masuk</th>
                                <th class="px-lg py-3 font-label-md text-label-md text-on-surface-variant uppercase text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <tr class="hover:bg-surface transition-colors cursor-default">
                                <td class="px-lg py-4 font-semibold text-body-md">Maret 2024</td>
                                <td class="px-lg py-4 text-body-md">245.8 Kg</td>
                                <td class="px-lg py-4 text-body-md text-right">12.290 Pts</td>
                                <td class="px-lg py-4 text-body-md text-right font-semibold">Rp 4.120.000</td>
                                <td class="px-lg py-4 text-center">
                                    <span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-[12px] font-bold">BERJALAN</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface transition-colors cursor-default">
                                <td class="px-lg py-4 font-semibold text-body-md">Februari 2024</td>
                                <td class="px-lg py-4 text-body-md">185.2 Kg</td>
                                <td class="px-lg py-4 text-body-md text-right">9.260 Pts</td>
                                <td class="px-lg py-4 text-body-md text-right font-semibold">Rp 3.850.000</td>
                                <td class="px-lg py-4 text-center">
                                    <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed rounded-full text-[12px] font-bold">SELESAI</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface transition-colors cursor-default">
                                <td class="px-lg py-4 font-semibold text-body-md">Januari 2024</td>
                                <td class="px-lg py-4 text-body-md">120.5 Kg</td>
                                <td class="px-lg py-4 text-body-md text-right">6.025 Pts</td>
                                <td class="px-lg py-4 text-body-md text-right font-semibold">Rp 3.250.000</td>
                                <td class="px-lg py-4 text-center">
                                    <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed rounded-full text-[12px] font-bold">SELESAI</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Aesthetic Footer / Bottom Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <div class="relative overflow-hidden rounded-xl h-48 group">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="A macro photography shot of lush green leaves covered in morning dew, with soft sunlight filtering through the foliage. The lighting is ethereal and bright, emphasizing a sustainable and clean environment. High-end editorial photography style with a focus on fresh, eco-friendly vibes and institutional trust." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBe4U-NVqzHdqr3jy1_k6BXdnRXivGLJCi2O5lf1bBZfaBDXJnjyadOGCj2Cyut1TQoJQsCqJ1OoeOBtO_Ywv1uLaFS5g7RTVSZ8J9NOCOitRSi5EWi4tYnE6DZ7Gxqb9NZQGtHs7reGGNV6z9nFYLYSaQ36g9sBMg35gEnfIcPTmW8N7OB5KigrE6QvgFNwOHgodVENUi0SoadFfoZUMs0vpvcBEiZ3RauzXfcUFLy6qkW1P5u7XE9UrAV_oY0_mZaMxA5WcEKEaU')"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-transparent flex items-center p-lg">
                        <div class="max-w-xs">
                            <h5 class="text-white font-title-lg mb-2">Penyaluran Iuran</h5>
                            <p class="text-on-primary-container text-body-md">Lihat rincian pengalokasian iuran untuk kebersihan lingkungan bulan ini.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-primary-container p-lg rounded-xl flex flex-col justify-between text-on-primary">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="material-symbols-outlined text-[32px]">verified</span>
                        <div>
                            <h5 class="font-title-lg">Kepatuhan Warga</h5>
                            <p class="text-on-primary-container text-body-md">Tingkat akurasi pemilahan sampah</p>
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <div class="text-[40px] font-bold">92%</div>
                        <button class="bg-white text-primary px-4 py-2 rounded-lg font-bold text-body-md hover:bg-secondary-fixed transition-colors">Unduh Sertifikat RT</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mt-xl py-lg px-lg border-t border-outline-variant text-center">
            <p class="text-on-surface-variant text-label-md uppercase tracking-widest">© 2024 PointWaste Indonesia • Community Portal</p>
        </footer>
    </main>
    <script>
        // Micro-interactions and Lightweight Atmospheric Effects
        document.querySelectorAll('.stat-card-accent').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-4px)';
                card.style.transition = 'transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1)';
                card.classList.add('shadow-lg');
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0px)';
                card.classList.remove('shadow-lg');
            });
        });

        // Simplified active state pulse for notification
        const notifIcon = document.querySelector('.material-symbols-outlined:first-child');
        setInterval(() => {
            notifIcon.classList.toggle('scale-110');
        }, 2000);
    </script>
</body>

</html>