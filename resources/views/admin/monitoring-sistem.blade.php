<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Monitoring Sistem | PointWaste Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            display: inline-block;
        }

        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .5;
            }
        }

        /* Custom scrollbar for log area */
        .log-container::-webkit-scrollbar {
            width: 6px;
        }

        .log-container::-webkit-scrollbar-track {
            background: transparent;
        }

        .log-container::-webkit-scrollbar-thumb {
            background: #bfc9bd;
            border-radius: 10px;
        }
    </style>
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
                        "title-lg": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-background text-on-surface">
    <!-- Sidebar Navigation -->
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width border-r border-outline-variant bg-white dark:bg-surface-container-low flex flex-col h-full py-lg px-md gap-md z-50">
        <div class="mb-lg px-md">
            <h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">PointWaste</h1>
            <p class="text-body-md text-secondary">Admin System</p>
        </div>
        <nav class="flex flex-col gap-sm flex-grow">
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="{{ route('admin.manajemen-pengguna') }}">
                <span class="material-symbols-outlined">group</span>
                <span class="font-body-md">Manajemen Pengguna</span>
            </a>
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="{{ route('admin.kategori-sampah') }}">
                <span class="material-symbols-outlined">recycling</span>
                <span class="font-body-md">Kategori Sampah</span>
            </a>
            <!-- Active State: Monitoring Sistem -->
            <a class="flex items-center gap-md bg-secondary-container dark:bg-primary-container text-primary dark:text-on-primary-container rounded-lg px-md py-sm cursor-pointer active:scale-95 duration-200" href="{{ route('admin.monitoring-sistem') }}">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-body-md font-semibold">Monitoring Sistem</span>
            </a>
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="{{ route('admin.konfigurasi') }}">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-body-md">Konfigurasi</span>
            </a>
            <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200" href="#">
                <span class="material-symbols-outlined">person</span>
                <span class="font-body-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto px-md py-md border-t border-outline-variant flex items-center gap-md">
            <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center overflow-hidden">
                <img class="w-full h-full object-cover" data-alt="A professional studio portrait of a system administrator, a middle-aged Indonesian man with a kind smile, wearing a clean corporate polo shirt with a small green leaf logo. The lighting is soft and professional against a neutral, high-key office background, reflecting the modern eco-systemic utility brand identity of PointWaste." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCydTD-evQra8hxN3PvfT1NxYlTBxZy-a5QIPncUCY-6GTOc8JnPRxe5vUdT0ZSwB4GG0eZSpTfJ18ymITTJk2puql1Yen0YI1bM_RbRt0qK4URt-Q_lq0oFy7NjlyWx77FgW1Jy9QVzeF9xQT1v64FJpHxXjIevNryhD18KfVRP8_d0igyQyEJWn1iusleakkQVomqf3lvEPhe1UyW6LahKFx_yE60kC40B7TE0waDFh8VFQk0Ub7Z-3R8uqEs51TbcAaf66J__Y" />
            </div>
            <div>
                <p class="text-label-md text-on-surface">Admin Utama</p>
                <p class="text-[10px] text-secondary uppercase tracking-wider">System Root</p>
            </div>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-sidebar-width min-h-screen">
        <!-- Top App Bar -->
        <header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 bg-white dark:bg-surface-container-low border-b border-outline-variant flex items-center justify-between px-xl z-40">
            <div class="flex items-center gap-md bg-surface-container-low px-md py-xs rounded-full border border-outline-variant w-96">
                <span class="material-symbols-outlined text-secondary">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-body-md w-full" placeholder="Cari log atau metrik..." type="text" />
            </div>
            <div class="flex items-center gap-lg">
                <div class="flex items-center gap-xs text-primary">
                    <span class="status-dot bg-primary animate-pulse"></span>
                    <span class="text-label-md">Sistem Online</span>
                </div>
                <div class="flex gap-md">
                    <button class="material-symbols-outlined text-secondary hover:text-primary transition-colors cursor-pointer active:opacity-80">notifications</button>
                    <button class="material-symbols-outlined text-secondary hover:text-primary transition-colors cursor-pointer active:opacity-80">settings</button>
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="pt-24 pb-12 px-xl max-w-[1280px] mx-auto">
            <div class="mb-lg">
                <h2 class="font-headline-md text-headline-md text-primary mb-xs">Monitoring Sistem</h2>
                <p class="text-body-md text-secondary">Pantau performa infrastruktur PointWaste secara real-time.</p>
            </div>
            <!-- Metrics Row (Level 1 Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-lg mb-xl">
                <!-- Uptime Card -->
                <div class="bg-white border border-outline-variant rounded-xl p-lg relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-label-md text-secondary uppercase mb-xs">Uptime Sistem</p>
                            <h3 class="text-headline-lg font-bold text-on-surface">99.9%</h3>
                        </div>
                        <span class="material-symbols-outlined text-primary text-3xl">timer</span>
                    </div>
                    <div class="mt-md flex items-center gap-xs">
                        <span class="text-primary text-xs font-semibold">Tinggi</span>
                        <span class="text-secondary text-xs">• Terakhir diperbarui 2 menit yang lalu</span>
                    </div>
                </div>
                <!-- Response Speed Card -->
                <div class="bg-white border border-outline-variant rounded-xl p-lg relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-label-md text-secondary uppercase mb-xs">Kecepatan Respon</p>
                            <h3 class="text-headline-lg font-bold text-on-surface">124 ms</h3>
                        </div>
                        <span class="material-symbols-outlined text-primary text-3xl">speed</span>
                    </div>
                    <div class="mt-md flex items-center gap-xs">
                        <span class="text-primary text-xs font-semibold">Optimal</span>
                        <span class="text-secondary text-xs">• Rata-rata 24 jam terakhir</span>
                    </div>
                </div>
                <!-- System Load Card -->
                <div class="bg-white border border-outline-variant rounded-xl p-lg relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-label-md text-secondary uppercase mb-xs">Beban Sistem</p>
                            <h3 class="text-headline-lg font-bold text-on-surface">42%</h3>
                        </div>
                        <span class="material-symbols-outlined text-primary text-3xl">memory</span>
                    </div>
                    <div class="mt-md flex items-center gap-xs">
                        <span class="text-primary text-xs font-semibold">Normal</span>
                        <span class="text-secondary text-xs">• Penggunaan CPU &amp; RAM gabungan</span>
                    </div>
                </div>
            </div>
            <!-- Bento Grid Layout -->
            <div class="bento-grid">
                <!-- Server Health Real-time Graph (Span 8) -->
                <div class="col-span-12 lg:col-span-8 bg-white border border-outline-variant rounded-xl p-lg">
                    <div class="flex justify-between items-center mb-lg">
                        <h4 class="font-title-lg text-title-lg text-on-surface">Kesehatan Server (Real-time)</h4>
                        <div class="flex gap-sm">
                            <button class="text-xs px-sm py-1 rounded bg-secondary-container text-primary font-semibold">CPU</button>
                            <button class="text-xs px-sm py-1 rounded hover:bg-secondary-container transition-colors">RAM</button>
                            <button class="text-xs px-sm py-1 rounded hover:bg-secondary-container transition-colors">Traffic</button>
                        </div>
                    </div>
                    <div class="relative h-64 w-full bg-surface-container-low rounded-lg overflow-hidden flex items-end px-md gap-1">
                        <!-- Simulated Chart Bars -->
                        <div class="flex-1 bg-primary/20 rounded-t h-[30%] animate-pulse"></div>
                        <div class="flex-1 bg-primary/30 rounded-t h-[45%]"></div>
                        <div class="flex-1 bg-primary/25 rounded-t h-[35%]"></div>
                        <div class="flex-1 bg-primary/40 rounded-t h-[50%]"></div>
                        <div class="flex-1 bg-primary/60 rounded-t h-[75%] animate-pulse"></div>
                        <div class="flex-1 bg-primary/45 rounded-t h-[55%]"></div>
                        <div class="flex-1 bg-primary/35 rounded-t h-[40%]"></div>
                        <div class="flex-1 bg-primary/20 rounded-t h-[25%]"></div>
                        <div class="flex-1 bg-primary/30 rounded-t h-[45%]"></div>
                        <div class="flex-1 bg-primary/50 rounded-t h-[60%]"></div>
                        <div class="flex-1 bg-primary/65 rounded-t h-[80%]"></div>
                        <div class="flex-1 bg-primary/40 rounded-t h-[50%]"></div>
                        <div class="flex-1 bg-primary/30 rounded-t h-[45%]"></div>
                        <div class="flex-1 bg-primary/25 rounded-t h-[35%]"></div>
                        <div class="flex-1 bg-primary/40 rounded-t h-[50%] animate-pulse"></div>
                        <div class="flex-1 bg-primary/55 rounded-t h-[70%]"></div>
                        <!-- Shader Background Overlay -->

                    </div>
                    <div class="flex justify-between mt-sm text-label-md text-secondary">
                        <span>10:00 AM</span>
                        <span>10:15 AM</span>
                        <span>10:30 AM</span>
                        <span>Sekarang</span>
                    </div>
                </div>
                <!-- Database Usage (Span 4) -->
                <div class="col-span-12 lg:col-span-4 bg-white border border-outline-variant rounded-xl p-lg flex flex-col">
                    <h4 class="font-title-lg text-title-lg text-on-surface mb-lg">Status Database</h4>
                    <div class="flex-grow flex flex-col justify-center gap-md">
                        <div class="flex justify-between items-end mb-xs">
                            <span class="text-body-md text-secondary">Penyimpanan Terpakai</span>
                            <span class="text-title-lg font-bold">12.4 / 50 GB</span>
                        </div>
                        <div class="w-full bg-surface-container-highest h-4 rounded-full overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: 24.8%"></div>
                        </div>
                        <div class="mt-lg grid grid-cols-2 gap-md">
                            <div class="p-md bg-surface-container-low rounded-lg">
                                <p class="text-xs text-secondary uppercase font-semibold">Total Koneksi</p>
                                <p class="text-title-lg font-bold text-primary">1,420</p>
                            </div>
                            <div class="p-md bg-surface-container-low rounded-lg">
                                <p class="text-xs text-secondary uppercase font-semibold">Latensi DB</p>
                                <p class="text-title-lg font-bold text-primary">8ms</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Error Log Section (Span 7) -->
                <div class="col-span-12 lg:col-span-7 bg-white border border-outline-variant rounded-xl p-lg">
                    <div class="flex justify-between items-center mb-md">
                        <h4 class="font-title-lg text-title-lg text-on-surface">Log Error Sistem</h4>
                        <button class="text-label-md text-primary flex items-center gap-xs hover:underline">
                            Lihat Semua <span class="material-symbols-outlined text-sm">open_in_new</span>
                        </button>
                    </div>
                    <div class="log-container overflow-y-auto max-h-80 border border-outline-variant rounded-lg bg-on-background p-md font-mono text-code-sm">
                        <div class="mb-sm flex gap-md">
                            <span class="text-red-400">[ERROR]</span>
                            <span class="text-gray-400">10:42:15</span>
                            <span class="text-white">API Gateway: Timeout connecting to Auth Service</span>
                        </div>
                        <div class="mb-sm flex gap-md">
                            <span class="text-yellow-400">[WARN]</span>
                            <span class="text-gray-400">10:40:02</span>
                            <span class="text-white">Database: High memory pressure detected in Node-A</span>
                        </div>
                        <div class="mb-sm flex gap-md">
                            <span class="text-red-400">[ERROR]</span>
                            <span class="text-gray-400">10:38:44</span>
                            <span class="text-white">User Redemptions: Failed to process transaction #TX128</span>
                        </div>
                        <div class="mb-sm flex gap-md">
                            <span class="text-blue-400">[INFO]</span>
                            <span class="text-gray-400">10:35:20</span>
                            <span class="text-white">System: Automatic backup completed successfully</span>
                        </div>
                        <div class="mb-sm flex gap-md">
                            <span class="text-yellow-400">[WARN]</span>
                            <span class="text-gray-400">10:32:11</span>
                            <span class="text-white">Storage: Bucket 'user-uploads' reaching 80% capacity</span>
                        </div>
                        <div class="mb-sm flex gap-md">
                            <span class="text-red-400">[ERROR]</span>
                            <span class="text-gray-400">10:30:59</span>
                            <span class="text-white">SSL: Certificate expiration warning (in 14 days)</span>
                        </div>
                        <div class="mb-sm flex gap-md">
                            <span class="text-blue-400">[INFO]</span>
                            <span class="text-gray-400">10:25:00</span>
                            <span class="text-white">Maintenance: Cron job 'daily-points-calc' executed</span>
                        </div>
                    </div>
                </div>
                <!-- API Status (Span 5) -->
                <div class="col-span-12 lg:col-span-5 bg-white border border-outline-variant rounded-xl p-lg">
                    <h4 class="font-title-lg text-title-lg text-on-surface mb-md">Status API &amp; Endpoint</h4>
                    <div class="space-y-sm">
                        <!-- API Item -->
                        <div class="flex items-center justify-between p-md bg-secondary-container/20 rounded-lg border border-transparent hover:border-primary-container/30 transition-all">
                            <div class="flex items-center gap-md">
                                <span class="status-dot bg-green-500 animate-pulse-slow"></span>
                                <span class="font-body-md font-semibold text-on-surface">Core API v2</span>
                            </div>
                            <div class="text-right">
                                <span class="text-label-md text-primary bg-primary-fixed px-sm py-0.5 rounded">99.98%</span>
                                <p class="text-[10px] text-secondary mt-1">Sangat Stabil</p>
                            </div>
                        </div>
                        <!-- API Item -->
                        <div class="flex items-center justify-between p-md bg-secondary-container/20 rounded-lg border border-transparent hover:border-primary-container/30 transition-all">
                            <div class="flex items-center gap-md">
                                <span class="status-dot bg-green-500 animate-pulse-slow"></span>
                                <span class="font-body-md font-semibold text-on-surface">Auth Service</span>
                            </div>
                            <div class="text-right">
                                <span class="text-label-md text-primary bg-primary-fixed px-sm py-0.5 rounded">100%</span>
                                <p class="text-[10px] text-secondary mt-1">Stabil</p>
                            </div>
                        </div>
                        <!-- API Item -->
                        <div class="flex items-center justify-between p-md bg-secondary-container/20 rounded-lg border border-transparent hover:border-primary-container/30 transition-all">
                            <div class="flex items-center gap-md">
                                <span class="status-dot bg-yellow-500"></span>
                                <span class="font-body-md font-semibold text-on-surface">Payment Gateway</span>
                            </div>
                            <div class="text-right">
                                <span class="text-label-md text-yellow-800 bg-yellow-100 px-sm py-0.5 rounded">98.5%</span>
                                <p class="text-[10px] text-secondary mt-1">Latensi Tinggi</p>
                            </div>
                        </div>
                        <!-- API Item -->
                        <div class="flex items-center justify-between p-md bg-secondary-container/20 rounded-lg border border-transparent hover:border-primary-container/30 transition-all">
                            <div class="flex items-center gap-md">
                                <span class="status-dot bg-green-500 animate-pulse-slow"></span>
                                <span class="font-body-md font-semibold text-on-surface">IoT Connector</span>
                            </div>
                            <div class="text-right">
                                <span class="text-label-md text-primary bg-primary-fixed px-sm py-0.5 rounded">99.7%</span>
                                <p class="text-[10px] text-secondary mt-1">Stabil</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-lg p-md border border-dashed border-outline rounded-lg text-center">
                        <button class="text-body-md text-primary font-bold flex items-center justify-center gap-sm w-full">
                            <span class="material-symbols-outlined">add_circle</span>
                            Tambah Endpoint Monitoring
                        </button>
                    </div>
                </div>
            </div>
            <!-- Footer Stats -->
            <footer class="mt-xl pt-lg border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-md">
                <div class="flex items-center gap-lg">
                    <div class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-secondary text-sm">public</span>
                        <span class="text-label-md text-secondary">Region: Jakarta (JKT-01)</span>
                    </div>
                    <div class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-secondary text-sm">update</span>
                        <span class="text-label-md text-secondary">Uptime Global: 342 Hari</span>
                    </div>
                </div>
                <div class="text-label-md text-secondary italic">
                    Sistem PointWaste © 2024 - SDG 11 Sustainable Cities and Communities
                </div>
            </footer>
        </div>
    </main>
    <script>
        // Micro-interactions and real-time feel
        document.addEventListener('DOMContentLoaded', () => {
            const logs = document.querySelector('.log-container');

            // Auto-scroll logs to bottom simulation
            setInterval(() => {
                const colors = ['text-blue-400', 'text-white', 'text-yellow-400'];
                const prefixes = ['[INFO]', '[SYS]', '[WARN]'];
                const msg = [
                    "Checking connection to IoT Node-23...",
                    "Background worker cleanup finished",
                    "User #4102 triggered point redemption notification",
                    "Log rotations successfully archived"
                ];

                const randomIdx = Math.floor(Math.random() * msg.length);
                const time = new Date().toLocaleTimeString('en-GB');

                const newLog = document.createElement('div');
                newLog.className = 'mb-sm flex gap-md opacity-0 transform translate-y-2 transition-all duration-500';
                newLog.innerHTML = `
                    <span class="${colors[Math.floor(Math.random() * colors.length)]}">${prefixes[Math.floor(Math.random() * prefixes.length)]}</span>
                    <span class="text-gray-400">${time}</span>
                    <span class="text-white">${msg[randomIdx]}</span>
                `;

                logs.appendChild(newLog);
                setTimeout(() => {
                    newLog.classList.remove('opacity-0', 'translate-y-2');
                }, 10);

                // Keep only last 20 logs to avoid DOM bloat
                if (logs.children.length > 20) {
                    logs.removeChild(logs.firstChild);
                }

                logs.scrollTop = logs.scrollHeight;
            }, 5000);
        });
    </script>
</body>

</html>