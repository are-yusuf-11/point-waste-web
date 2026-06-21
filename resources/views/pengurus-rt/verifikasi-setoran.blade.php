<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
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
                        "code-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "title-lg": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
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
            font-variant-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen">
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface-container-lowest border-r border-outline-variant flex flex-col py-lg px-md z-50">
        <div class="mb-xl px-md">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">Sustainable Community</p>
        </div>
        <nav class="flex-1 space-y-sm">
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="/dashboard-pengurus-test">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            
            <a class="flex items-center gap-md bg-secondary-container text-primary font-semibold rounded-lg px-md py-sm transition-all opacity-80 scale-95" href="#">
                <span class="material-symbols-outlined" data-icon="recycling" style="font-variation-settings: 'FILL' 1">recycling</span>
                <span class="font-body-md text-body-md">Verifikasi Setoran</span>
            </a>
            
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                <span class="font-body-md text-body-md">Manajemen Iuran</span>
            </a>
            <a class="flex items-center gap-md text-on-surface-variant px-md py-sm hover:bg-surface-container-low transition-colors duration-200" href="#">
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

    <header class="flex justify-between items-center h-16 px-lg ml-[260px] md:ml-[var(--sidebar-width,260px)] w-[calc(100%-260px)] md:w-[calc(100%-var(--sidebar-width,260px))] bg-surface-container-lowest border-b border-outline-variant fixed top-0 right-0 z-40">
        <div class="flex items-center gap-md">
            <div class="relative">
                <span class="absolute inset-y-0 left-3 flex items-center text-on-surface-variant">
                    <span class="material-symbols-outlined" data-icon="search">search</span>
                </span>
                <input class="bg-surface rounded-full py-sm pl-10 pr-md border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary text-body-md w-64" placeholder="Cari data warga..." type="text" />
            </div>
        </div>
        
        <div class="flex items-center gap-md ml-auto">
            <button class="relative text-on-surface-variant hover:text-primary transition-colors p-sm">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                <span class="absolute top-1 right-1 bg-error text-white text-[10px] rounded-full w-4 h-4 flex items-center justify-center">3</span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors p-sm mr-sm">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
            </button>
            <div class="flex items-center gap-sm border-l border-outline-variant pl-md">
                <div class="text-right">
                    <p class="font-label-md text-label-md text-on-surface whitespace-nowrap">Budi Santoso</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-wider">Pengurus RT 04</p>
                </div>
                <img class="w-10 h-10 rounded-full border border-outline-variant object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvp77FnINR4Y3rgOHQpm0OaJw6OyqCyKT1Z7iKvSwnxEd_tdja-L8cN7QpnX_G84JM2d7mUdDB8cMY7ya6_qLkMVZkpkgbnIlTZ-SHxyvHaajfQYRxFHqwUphugbt0R7uZC_Yo_Kv1CGAM9Y38pbSuPOqz-eAO88pxfdswmH8egc262cgp393_-TOhDcwG-SrRjNU5Da4BRQo1gV1v92ENRBXoyWrx10RWYq4a1p73Dln4CT8ndkSj9a4RnYkKv88PvHcGDTnNLbg" alt="Budi Santoso" />
            </div>
        </div>
    </header>

    <main class="ml-sidebar-width pt-24 pb-xl px-lg">
        <div class="max-w-container-max mx-auto space-y-lg">
            
            @php
                $state = request()->query('state');

                if ($state === 'kosong') {
                    $setoran = [];
                } else {
                    $setoran = [
                        ['warga' => 'Andi Saputra', 'inisial' => 'AS', 'bg' => 'bg-surface-variant text-primary', 'jenis' => 'Plastik PET', 'badge' => 'bg-primary-fixed text-on-primary-fixed', 'berat' => '4.5 Kg'],
                        ['warga' => 'Siti Maryam', 'inisial' => 'SM', 'bg' => 'bg-tertiary-container text-white', 'jenis' => 'Kertas/Karton', 'badge' => 'bg-secondary-fixed text-on-secondary-fixed', 'berat' => '12.2 Kg'],
                        ['warga' => 'Raka Wijaya', 'inisial' => 'RW', 'bg' => 'bg-primary-fixed-dim text-on-primary-fixed', 'jenis' => 'Logam/Besi', 'badge' => 'bg-tertiary-fixed text-on-tertiary-fixed', 'berat' => '2.1 Kg'],
                        ['warga' => 'Dewi Lestari', 'inisial' => 'DL', 'bg' => 'bg-secondary-fixed-dim text-on-secondary-fixed', 'jenis' => 'Kertas/Karton', 'badge' => 'bg-secondary-fixed text-on-secondary-fixed', 'berat' => '5.5 Kg']
                    ];
                }
            @endphp

            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                <div class="px-lg py-md border-b border-outline-variant flex justify-between items-center">
                    <h4 class="font-title-lg text-title-lg text-on-surface">Verifikasi Setoran Terbaru</h4>
                </div>

                @if(count($setoran) > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead class="bg-secondary-container">
                                <tr>
                                    <th class="px-lg py-sm text-left font-label-md text-label-md text-on-secondary-container">WARGA</th>
                                    <th class="px-lg py-sm text-left font-label-md text-label-md text-on-secondary-container">JENIS SAMPAH</th>
                                    <th class="px-lg py-sm text-left font-label-md text-label-md text-on-secondary-container">BERAT</th>
                                    <th class="px-lg py-sm text-left font-label-md text-label-md text-on-secondary-container">FOTO</th>
                                    <th class="px-lg py-sm text-center font-label-md text-label-md text-on-secondary-container">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant">
                                @foreach($setoran as $item)
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-lg py-md">
                                        <div class="flex items-center gap-sm">
                                            <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-xs {{ $item['bg'] }}">
                                                {{ $item['inisial'] }}
                                            </div>
                                            <span class="font-body-md text-body-md text-on-surface">{{ $item['warga'] }}</span>
                                        </div>
                                    </td>
                                    <td class="px-lg py-md">
                                        <span class="px-sm py-1 rounded-full text-[11px] font-bold {{ $item['badge'] }}">
                                            {{ $item['jenis'] }}
                                        </span>
                                    </td>
                                    <td class="px-lg py-md font-body-md text-body-md text-on-surface">{{ $item['berat'] }}</td>
                                    <td class="px-lg py-md">
                                        <a href="#" class="text-tertiary-container hover:underline font-semibold text-[13px]">Lihat Gambar</a>
                                    </td>
                                    <td class="px-lg py-md text-center">
                                        <div class="flex justify-center gap-sm">
                                            <button class="w-8 h-8 rounded-lg bg-primary-container text-white flex items-center justify-center hover:opacity-80 transition-all">
                                                <span class="material-symbols-outlined text-[18px]" data-icon="check">check</span>
                                            </button>
                                            <button class="w-8 h-8 rounded-lg border border-error text-error flex items-center justify-center hover:bg-error-container transition-all">
                                                <span class="material-symbols-outlined text-[18px]" data-icon="close">close</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="flex flex-col items-center justify-center py-xl px-lg">
                        <div class="w-12 h-12 bg-secondary-container text-primary rounded-full flex items-center justify-center mb-md border border-outline-variant shadow-sm">
                            <span class="material-symbols-outlined text-[24px] font-bold">verified</span>
                        </div>
                        <h4 class="font-title-lg text-body-lg text-on-surface font-bold mb-xs">Semua sudah terverifikasi</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant text-center max-w-xs">Tidak ada antrean setoran baru saat ini. Kerja bagus!</p>
                    </div>
                @endif
            </div>

        </div>
    </main>
</body>

</html>         