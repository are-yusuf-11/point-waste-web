<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'PointWaste Admin')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
                        "body-md": ["Inter"], "label-md": ["Inter"], "code-sm": ["Inter"], "headline-lg": ["Inter"], "headline-md": ["Inter"], "headline-lg-mobile": ["Inter"], "body-lg": ["Inter"], "display-lg": ["Inter"], "title-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "code-sm": ["13px", {"lineHeight": "18px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "title-lg": ["20px", {"lineHeight": "28px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .bento-grid { display: grid; grid-template-columns: repeat(12, 1fr); gap: 24px; }
        .waste-card-hover:hover { transform: translateY(-4px); transition: all 0.3s ease; }
    </style>
    @stack('styles')
</head>

<body class="bg-background text-on-background min-h-screen">

    <!-- SIDEBAR -->
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width bg-white dark:bg-surface-container-low border-r border-outline-variant dark:border-outline flex flex-col py-lg px-md justify-between z-50">
        <div class="flex flex-col gap-md">
            <!-- Brand Heading sesuai image_4e38dd.png -->
            <div class="mb-md px-md">
                <h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">PointWaste</h1>
                <p class="font-body-md text-body-md text-secondary">Admin Portal</p>
            </div>
            
            <!-- Navigasi Menu -->
            <nav class="flex flex-col gap-sm">
                <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-secondary-container dark:bg-primary-container text-primary dark:text-on-primary-container font-semibold' : '' }}" href="{{ route('admin.dashboard') }}">
                    <span class="material-symbols-outlined" style="{{ request()->routeIs('admin.dashboard') ? 'font-variation-settings: \'FILL\' 1' : '' }}">dashboard</span>
                    <span class="font-body-md text-body-md">Dashboard</span>
                </a>
                <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200 {{ request()->routeIs('admin.manajemen-pengguna*') ? 'bg-secondary-container dark:bg-primary-container text-primary dark:text-on-primary-container font-semibold' : '' }}" href="{{ route('admin.manajemen-pengguna') }}">
                    <span class="material-symbols-outlined">group</span>
                    <span class="font-body-md text-body-md">User Management</span>
                </a>
                <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200 {{ request()->routeIs('admin.kategori-sampah*') ? 'bg-secondary-container dark:bg-primary-container text-primary dark:text-on-primary-container font-semibold' : '' }}" href="{{ route('admin.kategori-sampah') }}">
                    <span class="material-symbols-outlined">recycling</span>
                    <span class="font-body-md text-body-md">Waste Categories</span>
                </a>
                <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200 {{ request()->routeIs('admin.monitoring-sistem') ? 'bg-secondary-container dark:bg-primary-container text-primary dark:text-on-primary-container font-semibold' : '' }}" href="{{ route('admin.monitoring-sistem') }}">
                    <span class="material-symbols-outlined">analytics</span>
                    <span class="font-body-md text-body-md">System Monitoring</span>
                </a>
                <a class="flex items-center gap-md text-secondary dark:text-secondary-fixed-dim px-md py-sm hover:bg-secondary-container/50 transition-colors rounded-lg cursor-pointer active:scale-95 duration-200 {{ request()->routeIs('admin.konfigurasi') ? 'bg-secondary-container dark:bg-primary-container text-primary dark:text-on-primary-container font-semibold' : '' }}" href="{{ route('admin.konfigurasi') }}">
                    <span class="material-symbols-outlined">settings</span>
                    <span class="font-body-md text-body-md">System Configuration</span>
                </a>
            </nav>
        </div>

        <!-- Bagian Bawah: Aksi Logout Sesuai Gambar -->
        <div class="pt-lg border-t border-outline-variant flex flex-col gap-sm px-md">
            <form method="POST" action="{{ route('logout') }}" id="logout-form" class="hidden">
                @csrf
            </form>
            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center gap-md text-red-600 hover:bg-red-50 dark:hover:bg-red-950/30 px-md py-sm transition-all rounded-lg cursor-pointer font-semibold duration-200">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-body-md text-body-md">Logout</span>
            </a>
        </div>
    </aside>

    <!-- TOP BAR (HEADER) -->
    <header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 bg-white dark:bg-surface-container-low border-b border-outline-variant dark:border-outline flex items-center justify-between px-xl z-40">
        <div class="flex items-center gap-md w-1/2">
            @yield('search-bar')
        </div>
        
        <!-- Sisi Kanan: Utilitas & Identitas Pengguna -->
        <div class="flex items-center gap-lg">
            <div class="flex items-center gap-sm">
                <button class="w-10 h-10 flex items-center justify-center text-secondary hover:text-primary transition-colors active:opacity-80 rounded-full hover:bg-gray-50">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <button class="w-10 h-10 flex items-center justify-center text-secondary hover:text-primary transition-colors active:opacity-80 rounded-full hover:bg-gray-50">
                    <span class="material-symbols-outlined">help</span>
                </button>
            </div>
            
            <div class="h-8 w-[1px] bg-outline-variant"></div>
            
            <!-- Penempatan Nama di Kiri & Foto di Kanan Ujung -->
            <div class="flex items-center gap-md">
                <div class="flex flex-col text-right">
                    <span class="font-label-md text-label-md font-bold text-on-surface leading-tight">{{ auth()->user()->nama ?? 'Budi Santoso' }}</span>
                    <span class="text-[10px] text-secondary font-bold uppercase tracking-wider mt-0.5">{{ auth()->user()->role ?? 'SUPER ADMIN' }}</span>
                </div>
                <div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center overflow-hidden border border-outline-variant shadow-sm">
                    <img class="w-full h-full object-cover" src="{{ auth()->user()->foto ? (str_contains(auth()->user()->foto, 'http') ? auth()->user()->foto : asset('storage/' . auth()->user()->foto)) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop' }}" alt="User Profile" />
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="ml-sidebar-width pt-16 min-h-screen">
        <div class="max-w-[1280px] mx-auto p-xl">
            @yield('content')
        </div>
    </main>

    @yield('fab')
    @stack('scripts')
</body>
</html>