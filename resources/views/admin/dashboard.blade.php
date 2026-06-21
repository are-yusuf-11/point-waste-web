<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste System Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#c9e6ff",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#131e19",
                        "error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#89ceff",
                        "on-secondary-fixed-variant": "#3e4943",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#404940",
                        "secondary-fixed-dim": "#bdcac1",
                        "surface-variant": "#d3e4fe",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-container": "#93e0a2",
                        "surface-container": "#e5eeff",
                        "inverse-surface": "#213145",
                        "tertiary": "#004565",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#eaf1ff",
                        "on-background": "#0b1c30",
                        "primary": "#004c22",
                        "secondary-fixed": "#d9e6dd",
                        "surface": "#f8f9ff",
                        "on-secondary-container": "#5b6760",
                        "primary-fixed": "#a6f4b5",
                        "on-tertiary-fixed": "#001e2f",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed": "#00210b",
                        "surface-tint": "#1f6c3a",
                        "tertiary-container": "#005e87",
                        "secondary": "#55615a",
                        "primary-fixed-dim": "#8bd79b",
                        "on-primary-fixed-variant": "#005226",
                        "outline-variant": "#bfc9bd",
                        "on-error-container": "#93000a",
                        "primary-container": "#166534",
                        "background": "#f8f9ff",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#dce9ff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "on-tertiary-container": "#9dd5ff",
                        "surface-container-highest": "#d3e4fe",
                        "surface-dim": "#cbdbf5",
                        "surface-bright": "#f8f9ff",
                        "secondary-container": "#d9e6dd",
                        "outline": "#707a6f",
                        "error": "#ba1a1a",
                        "surface-container-low": "#eff4ff",
                        "inverse-primary": "#8bd79b"
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
                        "sm": "8px",
                        "md": "16px",
                        "lg": "24px",
                        "sidebar-width": "260px",
                        "gutter": "24px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "code-sm": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "title-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
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
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
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
                        "title-lg": ["20px", {
                            "lineHeight": "28px",
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
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .active-nav-item {
            font-variation-settings: 'FILL' 1;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid #E2E8F0;
        }

        .chart-bar {
            transition: height 1s ease-in-out;
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- SideNavBar Shell -->
    <aside class="w-sidebar-width h-screen fixed left-0 top-0 bg-surface-container-lowest border-r border-outline-variant flex flex-col p-md z-50">
        <div class="mb-xl px-sm">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">System Administrator</p>
        </div>
        <nav class="flex-1 space-y-sm overflow-y-auto">
            <!-- Dashboard (Active) -->
            <a class="flex items-center gap-md p-md bg-secondary-container text-primary rounded-xl font-bold transition-transform active:scale-95" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined active-nav-item" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="{{ route('admin.manajemen-pengguna') }}">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                <span class="font-body-md text-body-md">Manajemen Pengguna</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="{{ route('admin.kategori-sampah') }}">
                <span class="material-symbols-outlined" data-icon="category">category</span>
                <span class="font-body-md text-body-md">Kategori Sampah</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="{{ route('admin.monitoring-sistem') }}">
                <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                <span class="font-body-md text-body-md">Monitoring Sistem</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="{{ route('admin.konfigurasi') }}">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-body-md text-body-md">Konfigurasi</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span class="font-body-md text-body-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto border-t border-outline-variant pt-md space-y-sm">
            <button class="w-full flex items-center justify-center gap-sm bg-primary text-white py-md rounded-xl font-bold hover:opacity-90 transition-opacity">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                <span>New Report</span>
            </button>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="font-body-md text-body-md">Help Center</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-body-md text-body-md">Logout</span>
            </a>
        </div>
    </aside>
    <!-- TopNavBar Shell -->
    <header class="h-16 w-[calc(100%-260px)] sticky top-0 z-40 bg-surface flex justify-between items-center px-lg ml-sidebar-width border-b border-outline-variant">
        <div class="flex items-center gap-lg">
            <div class="relative w-64">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
                <input class="w-full pl-10 pr-4 py-1.5 bg-surface-container text-body-md border-none rounded-full focus:ring-2 focus:ring-primary" placeholder="Search system logs..." type="text" />
            </div>
            <h2 class="font-headline-md text-headline-md font-extrabold text-primary">PointWaste Admin</h2>
        </div>
        <div class="flex items-center gap-md">
            <button class="p-2 hover:bg-surface-container rounded-full text-on-surface-variant"><span class="material-symbols-outlined" data-icon="notifications">notifications</span></button>
            <button class="p-2 hover:bg-surface-container rounded-full text-on-surface-variant"><span class="material-symbols-outlined" data-icon="settings_suggest">settings_suggest</span></button>
            <button class="p-2 hover:bg-surface-container rounded-full text-on-surface-variant"><span class="material-symbols-outlined" data-icon="apps">apps</span></button>
            <div class="h-10 w-10 rounded-full overflow-hidden border border-outline-variant">
                <img class="w-full h-full object-cover" data-alt="A professional headshot of a system administrator in their 30s, dressed in business casual attire with a focused and friendly expression. The background is a clean, modern corporate office with soft natural lighting and subtle green plants to represent sustainability. The image style is sharp, professional photography with a shallow depth of field." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLZFvA6DHznuSrtSycfDbBdbMS_vcSrXodAwwxTYiWkOq60ZYetBQWlSR038KhZRaFyWoYLBgeKk6HIa1yQHr9Nci9IFPQkrS_SRfm6pPWL5PI-bjHv5zJfd1QDGe8rS4C4FZOhnssPyPw0u2pV8WPSWKtbl90FQ2rMQRGV_SrKDXCfEFZyC3EeOD1Se4i8foDgdODpfGjUTVblC2j264Yn_Pin6e99HPf7cwXej3-ra0phN7dauYQll1u-LcdVhQ63-vdJ_Nodzk" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-sidebar-width p-lg max-w-[1280px] mx-auto min-h-screen">
        <!-- Header Section -->
        <section class="mb-lg">
            <h3 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Platform Performance</h3>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Real-time oversight of waste management across all regional units.</p>
        </section>
        <!-- Global Stats Bento Grid -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-lg mb-xl">
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Registered Users</span>
                <div class="flex items-end gap-xs">
                    <span class="font-display-lg text-headline-lg font-bold text-on-surface">{{ number_format($totalUsers) }}</span>
                    <span class="text-primary font-bold text-sm mb-2 flex items-center"><span class="material-symbols-outlined text-sm" data-icon="arrow_upward">arrow_upward</span> 4.2%</span>
                </div>
                <p class="text-xs text-on-surface-variant mt-2 italic">Global platform count</p>
            </div>
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Active RT Units</span>
                <div class="flex items-end gap-xs">
                    <span class="font-display-lg text-headline-lg font-bold text-on-surface">{{ $activeRtCount }}</span>
                    <span class="text-on-surface-variant font-bold text-sm mb-2">/ {{ $totalRtTarget }} total</span>
                </div>
                <p class="text-xs text-on-surface-variant mt-2 italic">86% participation rate</p>
            </div>
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Waste Processed</span>
                <div class="flex items-end gap-xs">
                    <span class="font-display-lg text-headline-lg font-bold text-on-surface">{{ $totalTonnes }}</span>
                    <span class="text-on-surface-variant font-bold text-sm mb-2">Tonnes</span>
                </div>
                <p class="text-xs text-on-surface-variant mt-2 italic">Past 30 days global average</p>
            </div>
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-container"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">System Health</span>
                <div class="flex items-center gap-sm mt-2">
                    <div class="flex items-center gap-2 px-3 py-1 bg-primary-container/10 text-primary border border-primary/20 rounded-full">
                        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                        <span class="font-bold text-sm uppercase">Operational</span>
                    </div>
                </div>
                <p class="text-xs text-on-surface-variant mt-3 italic">Uptime: 99.98% (Last 24h)</p>
            </div>
        </section>
        <!-- Middle Row: Chart & Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg mb-xl">
            <!-- Performance Chart Card -->
            <section class="lg:col-span-2 bg-white border border-outline-variant rounded-xl p-lg">
                <div class="flex justify-between items-center mb-lg">
                    <div>
                        <h4 class="font-title-lg text-title-lg text-on-surface">Waste Collection Growth</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">6-month trend analysis (Tonnes vs Points)</p>
                    </div>
                    <select class="bg-surface-container border-none text-body-md rounded-lg py-1 px-4 focus:ring-primary">
                        <option>Last 6 Months</option>
                        <option>Last Year</option>
                    </select>
                </div>
                <!-- Simple Bar Chart Mockup -->
                <div class="h-64 flex items-end justify-between gap-sm px-4 border-b border-outline-variant pb-2">
                    @php
                        // Daftar nama bulan manual untuk menjamin teks Januari - Desember selalu muncul
                        $daftarBulan = [
                            1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 
                            5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 
                            9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec'
                        ];
                        $bulanSekarang = (int) date('m');
                    @endphp

                    @foreach($daftarBulan as $angka => $nama)
                        @php
                            // Ambil berat dari database jika ada, jika tidak ada set ke 0
                            $berat = $monthlyData[$angka] ?? 0; 
                            
                            // Hitung tinggi grafik (contoh target maksimal 1000 kg per bulan untuk tinggi 100%)
                            $percentage = $berat > 0 ? min(($berat / 1000) * 100, 100) : 0;
                            
                            // Cek apakah iterasi ini merupakan bulan berjalan saat ini
                            $isBulanSekarang = ($angka === $bulanSekarang);
                        @endphp
                        <div class="flex flex-col items-center gap-2 w-full">
                            <div class="w-full {{ $isBulanSekarang ? 'bg-primary shadow-lg' : 'bg-primary-fixed' }} rounded-t chart-bar" 
                                style="height: {{ $percentage > 0 ? $percentage : 2 }}%"
                                title="{{ $nama }}: {{ $berat }} kg"></div>
                            
                            <span class="text-xs {{ $isBulanSekarang ? 'text-primary font-bold' : 'text-on-surface-variant font-medium' }}">
                                {{ $nama }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- Quick Management Actions -->
            <section class="bg-white border border-outline-variant rounded-xl p-lg">
                <h4 class="font-title-lg text-title-lg text-on-surface mb-lg">System Commands</h4>
                <div class="grid grid-cols-1 gap-md">
                    <button class="flex items-center gap-md p-md bg-secondary-mint/10 border border-secondary-mint text-primary rounded-xl hover:bg-primary hover:text-white transition-all group">
                        <div class="h-10 w-10 flex items-center justify-center bg-primary/10 group-hover:bg-white/20 rounded-lg">
                            <span class="material-symbols-outlined" data-icon="domain_add">domain_add</span>
                        </div>
                        <div class="text-left">
                            <p class="font-bold text-body-md">Add New RT Unit</p>
                            <p class="text-xs opacity-70">Expand platform coverage</p>
                        </div>
                    </button>
                    <button class="flex items-center gap-md p-md bg-tertiary-fixed/30 border border-tertiary-fixed text-tertiary rounded-xl hover:bg-tertiary hover:text-white transition-all group">
                        <div class="h-10 w-10 flex items-center justify-center bg-tertiary/10 group-hover:bg-white/20 rounded-lg">
                            <span class="material-symbols-outlined" data-icon="campaign">campaign</span>
                        </div>
                        <div class="text-left">
                            <p class="font-bold text-body-md">Broadcast Message</p>
                            <p class="text-xs opacity-70">Notify all system users</p>
                        </div>
                    </button>
                    <button class="flex items-center gap-md p-md bg-surface-container border border-outline-variant text-on-surface-variant rounded-xl hover:bg-on-surface hover:text-white transition-all group">
                        <div class="h-10 w-10 flex items-center justify-center bg-outline/10 group-hover:bg-white/20 rounded-lg">
                            <span class="material-symbols-outlined" data-icon="edit_calendar">edit_calendar</span>
                        </div>
                        <div class="text-left">
                            <p class="font-bold text-body-md">Update Master Data</p>
                            <p class="text-xs opacity-70">Modify waste categories</p>
                        </div>
                    </button>
                </div>
                <div class="mt-lg pt-lg border-t border-dashed border-outline-variant">
                    <div class="flex items-center justify-between text-on-surface-variant text-sm">
                        <span>Last backup:</span>
                        <span class="font-bold">2h ago</span>
                    </div>
                </div>
            </section>
        </div>
        <!-- Bottom Row: Regional Table & System Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
            <!-- Regional Overview Table -->
            <section class="lg:col-span-2 bg-white border border-outline-variant rounded-xl overflow-hidden">
                <div class="p-lg border-b border-outline-variant bg-surface-container/50 flex justify-between items-center">
                    <h4 class="font-title-lg text-title-lg text-on-surface">Top-Performing RT Units</h4>
                    <button class="text-primary font-bold text-sm flex items-center gap-xs hover:underline">View All <span class="material-symbols-outlined text-sm" data-icon="open_in_new">open_in_new</span></button>
                </div>
                <table class="w-full text-left">
                    <thead class="bg-[#F0FDF4] text-on-surface-variant font-label-md text-label-md">
                        <tr>
                            <th class="px-lg py-md">Neighborhood (RT)</th>
                            <th class="px-lg py-md">Active Residents</th>
                            <th class="px-lg py-md">Waste Collected</th>
                            <th class="px-lg py-md">Sustainability Score</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant font-body-md">
                        @foreach($topRt as $rt)
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-lg py-md font-bold">{{ $rt->no_rt }} - {{ $rt->kelurahan }}</td>
                            <td class="px-lg py-md">{{ $rt->warga_count }} Users</td>
                            <td class="px-lg py-md">{{ $rt->total_waste_ton }} Tons</td>
                            <td class="px-lg py-md">
                                <span class="px-3 py-1 bg-primary text-white rounded-full text-xs">95.0</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
            <!-- Recent System Activity -->
            <section class="bg-white border border-outline-variant rounded-xl flex flex-col">
                <div class="p-lg border-b border-outline-variant">
                    <h4 class="font-title-lg text-title-lg text-on-surface">System Activity Log</h4>
                </div>
                <div class="flex-1 p-lg space-y-lg overflow-y-auto max-h-[400px]">
                    @foreach($recentActivities as $activity)
                    <div class="flex gap-md">
                        <div class="flex flex-col items-center">
                            <div class="h-8 w-8 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-sm" data-icon="add_circle">add_circle</span>
                            </div>
                            @if(!$loop->last)
                                <div class="w-0.5 h-full bg-outline-variant mt-2"></div>
                            @endif
                        </div>
                        <div>
                            <p class="font-bold text-body-md text-on-surface">Setor Sampah</p>
                            <p class="text-xs text-on-surface-variant">
                                {{ $activity->user->nama ?? 'Warga' }} telah menyetor sampah dengan status <strong class="capitalize">{{ $activity->status }}</strong>.
                            </p>
                            <span class="text-[10px] text-outline uppercase font-bold mt-1 block">
                                {{ $activity->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="p-md bg-surface-container-low border-t border-outline-variant text-center">
                    <button class="text-on-surface-variant text-xs font-bold hover:text-primary transition-colors">LOAD MORE LOGS</button>
                </div>
            </section>
        </div>
    </main>
    <script>
        // Micro-interactions for chart bars
        document.addEventListener('DOMContentLoaded', () => {
            const bars = document.querySelectorAll('.chart-bar');
            bars.forEach(bar => {
                const targetHeight = bar.style.height;
                bar.style.height = '0px';
                setTimeout(() => {
                    bar.style.height = targetHeight;
                }, 100);
            });
        });

        // Hover animation for dashboard cards
        const cards = document.querySelectorAll('.bg-white.p-lg');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-4px)';
                card.style.transition = 'transform 0.3s ease';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0px)';
            });
        });
    </script>
</body>

</html>