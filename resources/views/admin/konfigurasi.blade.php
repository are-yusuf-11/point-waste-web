<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Konfigurasi Sistem - PointWaste Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind Configuration -->
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
            vertical-align: middle;
        }

        .sidebar-active {
            @apply flex items-center gap-md bg-secondary-container dark:bg-primary-container text-primary dark:text-on-primary-container rounded-lg px-md py-sm;
        }

        .sidebar-inactive {
            @apply flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 dark:hover:bg-primary-container/30 transition-colors cursor-pointer active:scale-95 duration-200;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid #E2E8F0;
        }

        input:focus {
            outline: none;
            border-color: #004c22;
            box-shadow: 0 0 0 2px rgba(166, 244, 181, 0.5);
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <!-- Side Navigation Bar -->
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width bg-white dark:bg-surface-container-low border-r border-outline-variant dark:border-outline z-50 flex flex-col h-full py-lg px-md gap-md">
        <div class="mb-xl px-md">
            <h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">PointWaste</h1>
            <p class="font-body-md text-body-md text-secondary">Admin System</p>
        </div>
        <nav class="flex flex-col gap-sm flex-grow">
            <div class="sidebar-inactive">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </div>
            <div class="sidebar-inactive">
                <span class="material-symbols-outlined">group</span>
                <span class="font-body-md text-body-md">Manajemen Pengguna</span>
            </div>
            <div class="sidebar-inactive">
                <span class="material-symbols-outlined">recycling</span>
                <span class="font-body-md text-body-md">Kategori Sampah</span>
            </div>
            <div class="sidebar-inactive">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-body-md text-body-md">Monitoring Sistem</span>
            </div>
            <div class="sidebar-active">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-body-md text-body-md">Konfigurasi</span>
            </div>
            <div class="sidebar-inactive">
                <span class="material-symbols-outlined">person</span>
                <span class="font-body-md text-body-md">Profil</span>
            </div>
        </nav>
        <div class="mt-auto px-md pt-md border-t border-outline-variant">
            <div class="flex items-center gap-md">
                <img class="w-10 h-10 rounded-full object-cover" data-alt="Professional headshot of a system administrator in a clean office setting, soft corporate lighting, high quality digital photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0AE9_HPz-Jsyrw1lZt9JH76QrLd3RShxe391De5jlF-lPKl1vRMbvZhxTJ50Ba8Py_SIxEbRirJeRRKsT11WHzDKXQVUVStoWQoUV7KhvcogMFoMDeBlBMoQ3oAtRQ7L7xUtxoP4PxzZSRKJik9JU4kBQiNpZJc9zC-PYBx6sTeuv8wAOb79Myk_r8Vkuz_0kWu5AnypiufE0FTRjeFcMJEmH2RLVcP_wqTICUlOMvyQMBNA6TZH-G_t_5SOsbu8cW6hQClYa9FM" />
                <div>
                    <p class="font-label-md text-label-md text-on-surface">Admin Utama</p>
                    <p class="text-[10px] text-secondary">ID: PW-001-ADM</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Top App Bar -->
    <header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 bg-white dark:bg-surface-container-low border-b border-outline-variant dark:border-outline z-40 flex items-center justify-between px-xl">
        <div class="flex items-center gap-md bg-surface-container-low px-md py-xs rounded-full border border-outline-variant w-96">
            <span class="material-symbols-outlined text-secondary">search</span>
            <input class="bg-transparent border-none focus:ring-0 text-body-md w-full" placeholder="Cari konfigurasi..." type="text" />
        </div>
        <div class="flex items-center gap-lg">
            <div class="relative cursor-pointer">
                <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
            </div>
            <span class="material-symbols-outlined text-on-surface-variant cursor-pointer">settings</span>
            <div class="h-8 w-px bg-outline-variant"></div>
            <span class="font-title-lg text-title-lg text-primary">PointWaste Admin</span>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-sidebar-width pt-16 min-h-screen p-xl">
        <div class="max-w-container-max mx-auto">
            <!-- Page Header Section -->
            <div class="flex items-center justify-between mb-xl">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Konfigurasi Sistem</h2>
                    <p class="font-body-lg text-body-lg text-secondary">Kelola parameter global dan preferensi operasional infrastruktur PointWaste.</p>
                </div>
                <div class="flex gap-md">
                    <button class="px-lg py-sm border border-outline text-primary font-label-md rounded-lg hover:bg-surface-container transition-all active:scale-95">Reset Default</button>
                    <button class="px-lg py-sm bg-primary text-white font-label-md rounded-lg flex items-center gap-xs hover:bg-opacity-90 shadow-sm active:scale-95 transition-all">
                        <span class="material-symbols-outlined text-[18px]">save</span>
                        Simpan Perubahan
                    </button>
                </div>
            </div>
            <!-- Bento Grid Layout for Configuration -->
            <div class="grid grid-cols-12 gap-gutter">
                <!-- Financial Settings Card -->
                <section class="col-span-12 lg:col-span-7 glass-card rounded-xl p-lg flex flex-col gap-lg shadow-sm">
                    <div class="flex items-center gap-sm pb-md border-b border-outline-variant">
                        <span class="material-symbols-outlined text-primary">payments</span>
                        <h3 class="font-title-lg text-title-lg">Pengaturan Ekonomi &amp; Batas</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-xl">
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-secondary">NILAI TUKAR POIN (PER 1 KG)</label>
                            <div class="relative">
                                <span class="absolute left-md top-1/2 -translate-y-1/2 font-body-md text-on-surface-variant">Rp</span>
                                <input class="w-full pl-xl pr-md py-sm border border-outline-variant rounded-lg font-body-md" type="number" value="5000" />
                            </div>
                            <p class="text-[11px] text-on-surface-variant italic mt-1">*Nilai standar untuk kategori sampah plastik/kertas.</p>
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-secondary">BATAS MAKSIMAL SETORAN / HARI</label>
                            <div class="relative">
                                <input class="w-full pl-md pr-xl py-sm border border-outline-variant rounded-lg font-body-md" type="number" value="50" />
                                <span class="absolute right-md top-1/2 -translate-y-1/2 font-body-md text-on-surface-variant">kg</span>
                            </div>
                            <p class="text-[11px] text-on-surface-variant italic mt-1">*Membatasi penyalahgunaan oleh akun non-residensial.</p>
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-secondary">MINIMUM PENCAIRAN SALDO</label>
                            <div class="relative">
                                <span class="absolute left-md top-1/2 -translate-y-1/2 font-body-md text-on-surface-variant">Rp</span>
                                <input class="w-full pl-xl pr-md py-sm border border-outline-variant rounded-lg font-body-md" type="number" value="25000" />
                            </div>
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-secondary">BIAYA ADMIN REDEMPTION</label>
                            <div class="relative">
                                <span class="absolute left-md top-1/2 -translate-y-1/2 font-body-md text-on-surface-variant">Rp</span>
                                <input class="w-full pl-xl pr-md py-sm border border-outline-variant rounded-lg font-body-md" type="number" value="1500" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Quick Stats / Visualization -->
                <section class="col-span-12 lg:col-span-5 h-full">
                    <div class="bg-primary-container text-on-primary-container p-lg rounded-xl h-full flex flex-col justify-between relative overflow-hidden shadow-md">

                        <div class="relative z-10">
                            <h4 class="font-title-lg text-title-lg mb-xs">Integritas Sistem</h4>
                            <p class="font-body-md text-body-md opacity-80">Terakhir diperiksa: 12 Menit yang lalu</p>
                        </div>
                        <div class="flex items-end justify-between relative z-10">
                            <div class="flex flex-col">
                                <span class="font-display-lg text-display-lg">99.9%</span>
                                <span class="font-label-md text-label-md uppercase tracking-wider">Uptime Server</span>
                            </div>
                            <div class="p-sm bg-white/20 rounded-lg backdrop-blur-sm">
                                <span class="material-symbols-outlined text-[32px]">security</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Notification Settings Card -->
                <section class="col-span-12 lg:col-span-6 glass-card rounded-xl p-lg shadow-sm">
                    <div class="flex items-center gap-sm pb-md border-b border-outline-variant mb-md">
                        <span class="material-symbols-outlined text-primary">notifications_active</span>
                        <h3 class="font-title-lg text-title-lg">Saluran Notifikasi</h3>
                    </div>
                    <div class="flex flex-col gap-md">
                        <!-- Email Toggle -->
                        <div class="flex items-center justify-between p-md bg-surface-container-low rounded-lg border border-outline-variant/30">
                            <div class="flex items-center gap-md">
                                <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                                <div>
                                    <p class="font-body-lg font-bold">Notifikasi Email</p>
                                    <p class="text-body-md text-secondary">Kirim laporan mingguan &amp; reset password via email.</p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input checked="" class="sr-only peer" type="checkbox" />
                                <div class="w-11 h-6 bg-outline-variant rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            </label>
                        </div>
                        <!-- WA Toggle -->
                        <div class="flex items-center justify-between p-md bg-surface-container-low rounded-lg border border-outline-variant/30">
                            <div class="flex items-center gap-md">
                                <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined">chat</span>
                                </div>
                                <div>
                                    <p class="font-body-lg font-bold">Notifikasi WhatsApp</p>
                                    <p class="text-body-md text-secondary">Kirim update status setoran langsung ke HP pengguna.</p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input checked="" class="sr-only peer" type="checkbox" />
                                <div class="w-11 h-6 bg-outline-variant rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            </label>
                        </div>
                        <!-- System Broadcast Toggle -->
                        <div class="flex items-center justify-between p-md bg-surface-container-low rounded-lg border border-outline-variant/30 opacity-60">
                            <div class="flex items-center gap-md">
                                <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined">campaign</span>
                                </div>
                                <div>
                                    <p class="font-body-lg font-bold">Push Notification</p>
                                    <p class="text-body-md text-secondary">Notifikasi browser untuk admin (Maintenance).</p>
                                </div>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input class="sr-only peer" type="checkbox" />
                                <div class="w-11 h-6 bg-outline-variant rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            </label>
                        </div>
                    </div>
                </section>
                <!-- Data Backup Card -->
                <section class="col-span-12 lg:col-span-6 glass-card rounded-xl p-lg shadow-sm border-l-4 border-l-tertiary">
                    <div class="flex items-center gap-sm pb-md border-b border-outline-variant mb-md">
                        <span class="material-symbols-outlined text-tertiary">backup</span>
                        <h3 class="font-title-lg text-title-lg">Backup &amp; Keamanan Data</h3>
                    </div>
                    <div class="flex flex-col gap-lg">
                        <div class="flex flex-col gap-sm">
                            <label class="font-label-md text-label-md text-secondary">FREKUENSI BACKUP OTOMATIS</label>
                            <select class="w-full px-md py-sm border border-outline-variant rounded-lg font-body-md bg-white">
                                <option>Setiap 6 Jam</option>
                                <option selected="">Setiap 24 Jam (Tengah Malam)</option>
                                <option>Mingguan (Setiap Hari Minggu)</option>
                                <option>Manual Only</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-sm">
                            <label class="font-label-md text-label-md text-secondary">TUJUAN CLOUD STORAGE</label>
                            <div class="flex items-center gap-md border border-outline-variant p-sm rounded-lg">
                                <div class="bg-surface-container-high p-xs rounded">
                                    <span class="material-symbols-outlined text-[20px]">cloud_done</span>
                                </div>
                                <span class="font-body-md flex-grow">Google Cloud Bucket (pw-prod-backup)</span>
                                <span class="text-primary font-label-md cursor-pointer hover:underline">Ubah</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-md pt-md">
                            <button class="py-sm bg-tertiary-container text-on-tertiary-container font-label-md rounded-lg hover:bg-opacity-90 active:scale-95 transition-all flex items-center justify-center gap-xs">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                                Download Log
                            </button>
                            <button class="py-sm bg-tertiary text-white font-label-md rounded-lg hover:bg-opacity-90 active:scale-95 transition-all flex items-center justify-center gap-xs">
                                <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                                Jalankan Backup
                            </button>
                        </div>
                        <div class="mt-xs p-sm bg-error-container/10 border border-error/20 rounded-lg flex gap-md">
                            <span class="material-symbols-outlined text-error text-[20px]">warning</span>
                            <p class="text-[11px] text-on-error-container">Data pengguna dienkripsi dengan standar AES-256. Backup otomatis hanya mencakup database operasional, bukan media fisik.</p>
                        </div>
                    </div>
                </section>
                <!-- System Meta Card (Audit Trail) -->
                <section class="col-span-12 glass-card rounded-xl p-lg shadow-sm overflow-hidden">
                    <div class="flex items-center justify-between mb-md">
                        <div class="flex items-center gap-sm">
                            <span class="material-symbols-outlined text-secondary">history</span>
                            <h3 class="font-title-lg text-title-lg">Riwayat Perubahan Konfigurasi</h3>
                        </div>
                        <span class="text-primary font-label-md cursor-pointer hover:underline">Lihat Semua</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="bg-secondary-container/30">
                                    <th class="p-md font-label-md text-secondary">WAKTU</th>
                                    <th class="p-md font-label-md text-secondary">ADMIN</th>
                                    <th class="p-md font-label-md text-secondary">PARAMETER</th>
                                    <th class="p-md font-label-md text-secondary">NILAI LAMA</th>
                                    <th class="p-md font-label-md text-secondary">NILAI BARU</th>
                                    <th class="p-md font-label-md text-secondary">STATUS</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant/30">
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="p-md font-body-md">24 Okt, 14:20</td>
                                    <td class="p-md font-body-md">Admin Utama</td>
                                    <td class="p-md font-body-md">Nilai Tukar Poin</td>
                                    <td class="p-md font-body-md text-secondary">Rp 4.500</td>
                                    <td class="p-md font-body-md text-primary font-bold">Rp 5.000</td>
                                    <td class="p-md"><span class="px-sm py-xs bg-primary-fixed text-on-primary-fixed rounded text-[10px] font-bold">SUKSES</span></td>
                                </tr>
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="p-md font-body-md">22 Okt, 09:15</td>
                                    <td class="p-md font-body-md">Sub-Admin 02</td>
                                    <td class="p-md font-body-md">Notif WA</td>
                                    <td class="p-md font-body-md text-secondary">OFF</td>
                                    <td class="p-md font-body-md text-primary font-bold">ON</td>
                                    <td class="p-md"><span class="px-sm py-xs bg-primary-fixed text-on-primary-fixed rounded text-[10px] font-bold">SUKSES</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- Success Toast Notification (Hidden by default) -->
    <div class="fixed bottom-xl right-xl translate-y-20 opacity-0 transition-all duration-300 z-[100] flex items-center gap-md bg-on-background text-white px-lg py-md rounded-xl shadow-2xl" id="toast">
        <span class="material-symbols-outlined text-primary-fixed">check_circle</span>
        <div class="flex flex-col">
            <p class="font-label-md">Berhasil!</p>
            <p class="text-body-md text-white/70">Konfigurasi telah diperbarui secara global.</p>
        </div>
    </div>
    <script>
        // Simple Micro-interaction for the "Save" button
        document.querySelector('button.bg-primary').addEventListener('click', function() {
            const btn = this;
            const originalContent = btn.innerHTML;

            // Loading state
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin text-[18px]">progress_activity</span> Menyimpan...';
            btn.disabled = true;

            setTimeout(() => {
                // Show toast
                const toast = document.getElementById('toast');
                toast.classList.remove('translate-y-20', 'opacity-0');

                // Revert button
                btn.innerHTML = originalContent;
                btn.disabled = false;

                // Hide toast after 3s
                setTimeout(() => {
                    toast.classList.add('translate-y-20', 'opacity-0');
                }, 3000);
            }, 1200);
        });

        // Numeric input formatting simulation
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('change', (e) => {
                if (e.target.value < 0) e.target.value = 0;
            });
        });
    </script>
</body>

</html>