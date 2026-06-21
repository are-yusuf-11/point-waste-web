<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Pengguna - PointWaste Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
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
            background-color: #f8f9ff;
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .sidebar-active {
            background-color: #d9e6dd;
            color: #004c22;
            border-radius: 0.5rem;
        }

        .table-container::-webkit-scrollbar {
            height: 8px;
        }

        .table-container::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        .table-container::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- SideNavBar Shell -->
    <aside class="fixed left-0 top-0 h-screen w-sidebar-width bg-white border-r border-outline-variant flex flex-col py-lg px-md gap-md z-50">
        <div class="mb-xl px-md">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste</h1>
            <p class="font-body-md text-body-md text-secondary">Admin System</p>
        </div>
        <nav class="flex flex-col gap-sm">
            <a class="flex items-center gap-md text-secondary px-md py-sm hover:bg-secondary-container/50 transition-colors cursor-pointer active:scale-95 duration-200" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-md bg-secondary-container text-primary rounded-lg px-md py-sm cursor-pointer active:scale-95 duration-200" href="{{ route('admin.manajemen-pengguna') }}">
                <span class="material-symbols-outlined">group</span>
                <span class="font-body-md text-body-md">Manajemen Pengguna</span>
            </a>
            <a class="flex items-center gap-md text-secondary px-md py-sm hover:bg-secondary-container/50 transition-colors cursor-pointer active:scale-95 duration-200" href="{{ route('admin.kategori-sampah') }}">
                <span class="material-symbols-outlined">recycling</span>
                <span class="font-body-md text-body-md">Kategori Sampah</span>
            </a>
            <a class="flex items-center gap-md text-secondary px-md py-sm hover:bg-secondary-container/50 transition-colors cursor-pointer active:scale-95 duration-200" href="{{ route('admin.monitoring-sistem') }}">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-body-md text-body-md">Monitoring Sistem</span>
            </a>
            <a class="flex items-center gap-md text-secondary px-md py-sm hover:bg-secondary-container/50 transition-colors cursor-pointer active:scale-95 duration-200" href="{{ route('admin.konfigurasi') }}">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-body-md text-body-md">Konfigurasi</span>
            </a>
            <a class="flex items-center gap-md text-secondary px-md py-sm hover:bg-secondary-container/50 transition-colors cursor-pointer active:scale-95 duration-200" href="#">
                <span class="material-symbols-outlined">person</span>
                <span class="font-body-md text-body-md">Profil</span>
            </a>
        </nav>
        <div class="mt-auto p-md border-t border-outline-variant flex items-center gap-md">
            <img class="w-10 h-10 rounded-full object-cover" data-alt="A professional headshot of a middle-aged male administrator with a friendly expression. He is wearing a clean white shirt against a soft, eco-friendly green background. The lighting is bright and corporate, emphasizing trust and institutional reliability within the PointWaste management system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDA3nIgkNxR1Ty6Jqi0wCgJledyPEnsFkHXmohkCSIJhFYiGyIsi8QIjdtfP0WPINJMPr8-x3P6EwZd7NPljbDdDT4QnkHmk4rbXT9LW6vXcm0fVvtuLnEL8CZMzbHKg3yTvmVrL_NuzOIm8RhJuBpzgCKcN0rYloK22dyP37jN2bqlsvsK_56f7Dz-5oOCtmje-f3kS3oVK25jKxyBAiiGip61qmibdIZ_8bBtj0x6srsloAaJipLNQrh_OioldQEWQJkC89mIub8" />
            <div>
                <p class="font-label-md text-label-md text-on-surface">Admin Utama</p>
                <p class="text-[10px] text-secondary">admin@pointwaste.id</p>
            </div>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-[260px] min-h-screen flex flex-col">
        <!-- TopAppBar Shell -->
        <header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 bg-white border-b border-outline-variant flex items-center justify-between px-xl z-40">
            <div class="flex items-center bg-surface-container-low px-md py-xs rounded-full w-96 border border-outline-variant">
                <span class="material-symbols-outlined text-secondary mr-sm">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-body-md w-full" placeholder="Cari pengguna atau NIK..." type="text" />
            </div>
            <div class="flex items-center gap-lg">
                <button class="relative p-xs text-secondary hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <button class="p-xs text-secondary hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">settings</span>
                </button>
            </div>
        </header>
        <!-- Canvas Content -->
        <section class="mt-16 p-xl flex flex-col gap-xl max-w-[1280px] w-full mx-auto">
            <!-- Page Header -->
            <div class="flex items-end justify-between">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-primary">Manajemen Pengguna</h2>
                    <p class="font-body-lg text-body-lg text-secondary">Kelola akses dan otoritas admin sistem serta admin wilayah.</p>
                </div>
                <a href="{{ route('admin.manajemen-pengguna.create') }}" class="bg-primary text-white px-lg py-md rounded-lg flex items-center gap-sm hover:brightness-110 active:scale-95 transition-all font-label-md inline-flex">
                    <span class="material-symbols-outlined">add_circle</span>
                    Tambah Pengguna Baru
                </a>
            </div>
            <!-- Bento Statistics Grid -->
            <div class="grid grid-cols-12 gap-lg">
                <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Total Pengguna</p>
                        <h3 class="font-headline-lg text-headline-lg mt-xs">{{ number_format($totalUsers) }}</h3>
                    </div>
                    <div class="mt-md flex items-center text-primary gap-xs font-label-md">
                        <span class="material-symbols-outlined text-[18px]">trending_up</span>
                        <span>12% dari bulan lalu</span>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Admin RT Aktif</p>
                        <h3 class="font-headline-lg text-headline-lg mt-xs">{{ number_format($totalPengurusRt) }}</h3>
                    </div>
                    <div class="mt-md flex items-center text-primary gap-xs font-label-md">
                        <span class="material-symbols-outlined text-[18px]">verified_user</span>
                        <span>Seluruh wilayah tercover</span>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                    <div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Pertumbuhan Mingguan</p>
                        <h3 class="font-headline-lg text-headline-lg mt-xs">{{ number_format($totalWarga) }}</h3>
                    </div>
                    <div class="mt-md flex items-center text-tertiary gap-xs font-label-md">
                        <span class="material-symbols-outlined text-[18px]">group_add</span>
                        <span>Pendaftaran baru minggu ini</span>
                    </div>
                </div>
            </div>
            <!-- Table Section -->
            <div class="bg-white border border-outline-variant rounded-xl overflow-hidden">
                <!-- Table Filters -->
                <div class="p-md border-b border-outline-variant flex flex-wrap gap-md items-center justify-between bg-surface-container-low/30">
                    <div class="flex gap-md">
                        <div class="relative">
                            <select class="appearance-none bg-white border border-outline-variant pl-md pr-xl py-sm rounded-lg font-body-md text-on-surface-variant focus:ring-primary focus:border-primary">
                                <option>Semua Peran</option>
                                <option>Admin Sistem</option>
                                <option>Admin RT</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-sm top-1/2 -translate-y-1/2 pointer-events-none text-secondary">expand_more</span>
                        </div>
                        <div class="relative">
                            <select class="appearance-none bg-white border border-outline-variant pl-md pr-xl py-sm rounded-lg font-body-md text-on-surface-variant focus:ring-primary focus:border-primary">
                                <option>Status: Aktif</option>
                                <option>Status: Non-Aktif</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-sm top-1/2 -translate-y-1/2 pointer-events-none text-secondary">expand_more</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-sm">
                        <span class="font-label-md text-secondary">Menampilkan 1-10 dari 1,284</span>
                        <div class="flex border border-outline-variant rounded-lg overflow-hidden">
                            <button class="p-xs bg-white hover:bg-surface-container-low transition-colors"><span class="material-symbols-outlined">chevron_left</span></button>
                            <button class="p-xs bg-white hover:bg-surface-container-low transition-colors border-l border-outline-variant"><span class="material-symbols-outlined">chevron_right</span></button>
                        </div>
                    </div>
                </div>
                <!-- Table Content -->
                <div class="table-container overflow-x-auto">
                    <table class="w-full text-left border-collapse">
    <thead>
        <tr class="border-b border-outline-variant font-label-lg text-on-surface-variant bg-surface-container-low">
            <th class="px-lg py-md font-semibold">Nama Pengguna</th>
            <th class="px-lg py-md font-semibold">Kontak & Alamat</th>
            <th class="px-lg py-md font-semibold">Wilayah RT</th>
            <th class="px-lg py-md font-semibold">Peran</th>
            <th class="px-lg py-md font-semibold">Status</th> {{-- Kolom Status Mandiri --}}
            <th class="px-lg py-md font-semibold text-right">Aksi</th> {{-- Kolom Aksi Mandiri --}}
        </tr>
    </thead>
    <tbody class="divide-y divide-outline-variant font-body-md text-on-surface">
        @foreach($users as $user)
        <tr class="hover:bg-surface-container-low transition-colors">
            <td class="px-lg py-md">
                <div class="flex items-center gap-md">
                    <img alt="Avatar" class="h-10 w-10 rounded-full object-cover" 
                        src="{{ $user->foto ? asset('storage/' . $user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80' }}" />
                    <div>
                        <p class="font-bold text-slate-900">{{ $user->nama }}</p>
                        <p class="text-xs text-slate-500">{{ $user->email }}</p>
                    </div>
                </div>
            </td>
            
            <td class="px-lg py-md">
                <p class="text-slate-700 font-medium">{{ $user->no_hp ?? '-' }}</p>
                <p class="text-xs text-slate-400 max-w-[200px] truncate" title="{{ $user->alamat }}">{{ $user->alamat ?? '-' }}</p>
            </td>
            
            <td class="px-lg py-md font-medium text-slate-600">
                @if($user->rt)
                    RT {{ $user->rt->no_rt }} - {{ $user->rt->kelurahan }}
                @else
                    <span class="text-outline italic text-xs">Tidak Ada Wilayah</span>
                @endif
            </td>
            
            <td class="px-lg py-md">
                @if(str_contains(strtolower($user->role), 'admin'))
                    <span class="px-3 py-1 bg-error-container text-error rounded-full text-xs font-bold capitalize">Admin</span>
                @elseif(str_contains(strtolower($user->role), 'pengurus'))
                    <span class="px-3 py-1 bg-tertiary-fixed text-tertiary rounded-full text-xs font-bold capitalize">Pengurus RT</span>
                @else
                    <span class="px-3 py-1 bg-primary-container/20 text-primary rounded-full text-xs font-bold capitalize">Warga</span>
                @endif
            </td>
            
            <td class="px-lg py-md">
                @if(str_contains(strtolower($user->role), 'admin'))
                    {{-- Status Admin: Hanya teks badge statis --}}
                    @if($user->status)
                        <span class="h-8 inline-flex items-center gap-1 px-3 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full text-xs font-bold opacity-75 cursor-not-allowed">
                            <span class="material-symbols-outlined text-sm">check_circle</span>
                            Aktif
                        </span>
                    @else
                        <span class="h-8 inline-flex items-center gap-1 px-3 bg-rose-50 text-rose-700 border border-rose-200 rounded-full text-xs font-bold opacity-75 cursor-not-allowed">
                            <span class="material-symbols-outlined text-sm">cancel</span>
                            Nonaktif
                        </span>
                    @endif
                @else
                    {{-- Status Warga/Pengurus: Tombol Sakelar Interaktif --}}
                    <form action="{{ route('admin.manajemen-pengguna.toggle-status', $user->id_user) }}" method="POST" class="inline">
                        @csrf
                        @method('PATCH')
                        
                        @if($user->status)
                            <button type="submit" class="h-8 flex items-center gap-1 px-3 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full text-xs font-bold hover:bg-rose-50 hover:text-rose-600 hover:border-rose-200 transition-colors" title="Klik untuk menonaktifkan pengguna">
                                <span class="material-symbols-outlined text-sm">check_circle</span>
                                Aktif
                            </button>
                        @else
                            <button type="submit" class="h-8 flex items-center gap-1 px-3 bg-rose-50 text-rose-700 border border-rose-200 rounded-full text-xs font-bold hover:bg-emerald-50 hover:text-emerald-700 hover:border-emerald-200 transition-colors" title="Klik untuk mengaktifkan pengguna">
                                <span class="material-symbols-outlined text-sm">cancel</span>
                                Nonaktif
                            </button>
                        @endif
                    </form>
                @endif
            </td>
            
            <td class="px-lg py-md text-right">
                <div class="flex items-center justify-end gap-sm">
                    <a href="{{ route('admin.manajemen-pengguna.edit', $user->id_user) }}" 
                       class="h-8 w-8 flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-container rounded-full transition-colors" 
                       title="Edit">
                        <span class="material-symbols-outlined text-md">edit</span>
                    </a>

                    @if(!str_contains(strtolower($user->role), 'admin'))
                        <form action="{{ route('admin.manajemen-pengguna.destroy', $user->id_user) }}" 
                              method="POST" 
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');"
                              class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="h-8 w-8 flex items-center justify-center text-on-surface-variant hover:text-error hover:bg-error-container/20 rounded-full transition-colors" 
                                    title="Hapus">
                                <span class="material-symbols-outlined text-md">delete</span>
                            </button>
                        </form>
                    @endif
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
                </div>
                <!-- Pagination footer -->
                <div class="p-md flex items-center justify-between border-t border-outline-variant bg-surface-container-low/30">
                    <button class="px-md py-sm border border-outline-variant rounded-lg text-body-md font-label-md hover:bg-white transition-colors">Sebelumnya</button>
                    <div class="flex gap-xs">
                        <button class="w-8 h-8 flex items-center justify-center bg-primary text-white rounded-lg text-body-md">1</button>
                        <button class="w-8 h-8 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg text-body-md transition-colors">2</button>
                        <button class="w-8 h-8 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg text-body-md transition-colors">3</button>
                        <span class="w-8 h-8 flex items-center justify-center text-secondary">...</span>
                        <button class="w-8 h-8 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg text-body-md transition-colors">12</button>
                    </div>
                    <button class="px-md py-sm border border-outline-variant rounded-lg text-body-md font-label-md hover:bg-white transition-colors">Berikutnya</button>
                </div>
            </div>
            <!-- Additional Context Section (Bottom) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <div class="bg-primary/5 p-lg rounded-xl border border-primary-container/20 flex gap-lg items-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[32px]">shield</span>
                    </div>
                    <div>
                        <h4 class="font-title-lg text-title-lg text-primary">Keamanan Data Admin</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-xs">Seluruh aktivitas admin tercatat secara otomatis dalam log audit sistem untuk menjamin transparansi pengelolaan.</p>
                    </div>
                </div>
                <div class="bg-secondary/5 p-lg rounded-xl border border-secondary/20 flex gap-lg items-center">
                    <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-[32px]">hub</span>
                    </div>
                    <div>
                        <h4 class="font-title-lg text-title-lg text-secondary">Interkoneksi Wilayah</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-xs">Sistem ini saat ini memfasilitasi 24 Kelurahan dengan integrasi data point real-time antar RT.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="mt-auto p-xl border-t border-outline-variant flex justify-between items-center text-secondary font-label-md">
            <p>© 2024 PointWaste System Dashboard. All Rights Reserved.</p>
            <div class="flex gap-lg">
                <a class="hover:underline" href="#">Syarat & Ketentuan</a>
                <a class="hover:underline" href="#">Kebijakan Privasi</a>
                <a class="hover:underline" href="#">Pusat Bantuan</a>
            </div>
        </footer>
    </main>
    <!-- FAB Suppression Logic: Not rendered on Management screens -->
    <script>
        // Simple Micro-interactions
        document.querySelectorAll('button, a').forEach(el => {
            el.addEventListener('mousedown', () => {
                el.style.transform = 'scale(0.97)';
            });
            el.addEventListener('mouseup', () => {
                el.style.transform = 'scale(1)';
            });
        });

        // Search Bar Focus Effect
        const searchInput = document.querySelector('input[type="text"]');
        const searchContainer = searchInput.parentElement;

        searchInput.addEventListener('focus', () => {
            searchContainer.classList.add('border-primary');
            searchContainer.classList.add('ring-2');
            searchContainer.classList.add('ring-primary/20');
        });

        searchInput.addEventListener('blur', () => {
            searchContainer.classList.remove('border-primary');
            searchContainer.classList.remove('ring-2');
            searchContainer.classList.remove('ring-primary/20');
        });
    </script>
</body>

</html>