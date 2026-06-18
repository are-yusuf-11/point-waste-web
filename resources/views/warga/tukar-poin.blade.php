<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tukar Poin - PointWaste</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed": "#00210b",
                        "inverse-on-surface": "#eaf1ff",
                        "tertiary-fixed-dim": "#89ceff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "on-tertiary-container": "#9dd5ff",
                        "secondary-fixed-dim": "#bdcac1",
                        "primary-fixed-dim": "#8bd79b",
                        "outline": "#707a6f",
                        "inverse-primary": "#8bd79b",
                        "tertiary-container": "#005e87",
                        "tertiary-fixed": "#c9e6ff",
                        "secondary-fixed": "#d9e6dd",
                        "on-secondary": "#ffffff",
                        "primary-container": "#166534",
                        "on-secondary-container": "#5b6760",
                        "on-secondary-fixed-variant": "#3e4943",
                        "on-tertiary-fixed": "#001e2f",
                        "surface-dim": "#cbdbf5",
                        "inverse-surface": "#213145",
                        "surface-container-low": "#eff4ff",
                        "on-background": "#0b1c30",
                        "surface-container": "#e5eeff",
                        "primary": "#004c22",
                        "outline-variant": "#bfc9bd",
                        "surface-container-highest": "#d3e4fe",
                        "surface-container-high": "#dce9ff",
                        "on-primary-container": "#93e0a2",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#d9e6dd",
                        "surface-variant": "#d3e4fe",
                        "on-primary": "#ffffff",
                        "on-surface": "#0b1c30",
                        "error-container": "#ffdad6",
                        "secondary": "#55615a",
                        "tertiary": "#004565",
                        "primary-fixed": "#a6f4b5",
                        "on-surface-variant": "#404940",
                        "on-tertiary": "#ffffff",
                        "background": "#f8f9ff",
                        "surface": "#f8f9ff",
                        "on-secondary-fixed": "#131e19",
                        "on-primary-fixed-variant": "#005226",
                        "surface-bright": "#f8f9ff",
                        "surface-tint": "#1f6c3a",
                        "on-error": "#ffffff",
                        "on-error-container": "#93000a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "8px",
                        "xl": "12px",
                        "full": "9999px"
                    },
                    "spacing": {
                        "lg": "24px",
                        "xs": "4px",
                        "md": "16px",
                        "xl": "32px",
                        "sm": "8px",
                        "container-max": "1280px",
                        "sidebar-width": "260px",
                        "gutter": "24px",
                        "base": "4px"
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-surface text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed min-h-screen">
    <!-- Sidebar Navigation -->
    <aside class="fixed left-0 top-0 h-screen w-[260px] bg-surface-container-lowest border-r border-outline-variant flex flex-col z-50">
        <div class="p-lg flex items-center gap-sm">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
                <span class="material-symbols-outlined font-bold" data-icon="eco">eco</span>
            </div>
            <span class="font-black text-title-lg text-primary tracking-tight">PointWaste</span>
        </div>
        <nav class="flex-1 flex flex-col gap-xs px-md mt-md">
            <a class="flex items-center gap-md text-secondary hover:text-primary hover:bg-secondary-fixed-dim/20 px-md py-sm rounded-lg transition-all" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">grid_view</span>
                <span class="font-medium">Dashboard</span>
            </a>
            <a class="flex items-center gap-md text-secondary hover:text-primary hover:bg-secondary-fixed-dim/20 px-md py-sm rounded-lg transition-all" href="#">
                <span class="material-symbols-outlined" data-icon="delete">delete_sweep</span>
                <span class="font-medium">Setor Sampah</span>
            </a>
            <a class="flex items-center gap-md bg-secondary-container text-primary rounded-lg px-md py-sm" href="#">
                <span class="material-symbols-outlined font-bold" data-icon="account_balance_wallet">account_balance_wallet</span>
                <span class="font-bold">Mutasi Poin</span>
            </a>
            <a class="flex items-center gap-md text-secondary hover:text-primary hover:bg-secondary-fixed-dim/20 px-md py-sm rounded-lg transition-all" href="#">
                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                <span class="font-medium">Tagihan Iuran</span>
            </a>
            <a class="flex items-center gap-md text-secondary hover:text-primary hover:bg-secondary-fixed-dim/20 px-md py-sm rounded-lg transition-all" href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span class="font-medium">Profil</span>
            </a>
        </nav>
        <div class="p-md border-t border-outline-variant flex flex-col gap-md">
            <div class="flex items-center gap-md p-sm">
                <img alt="Resident Profile Avatar" class="w-10 h-10 rounded-full object-cover border border-outline-variant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGT7bbXjkB_mTKpAc19FP0mPhtkhVa1eIgHZC_lohSffFA0kx_ie9I9A_uyJln4kWMVWr1SAHyQ7MMGu3DTXRBceKToypMTtELxrqExxNXABMIxQ-9tk3Y6SMkgNzsKUvL3IIQ0umG5TvDOpyrabJurxZZNBoY40vwnyrfuumJ-ulb3vGebOvDrlQkn-P6J2ACZHBXpyrYVBn-m8nE7iyg0LxrEZ0HATqTje_WGuOo_MOzTn7YxfxpM2VZ9BeSSw_x42Y7UGO7vFU" />
                <div class="flex-1 min-w-0">
                    <p class="font-bold text-body-md text-on-surface truncate">Budi Santoso</p>
                    <p class="text-[10px] text-secondary font-bold uppercase tracking-wider">WARGA RT 04</p>
                </div>
            </div>
            <button class="flex items-center gap-md text-error px-md py-sm hover:bg-error-container/10 rounded-lg transition-all w-full text-left">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-medium">Keluar</span>
            </button>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-[260px] min-h-screen flex flex-col">
        <!-- Top Navigation Bar -->
        <header class="w-full h-16 sticky top-0 z-40 bg-surface/80 backdrop-blur-md border-b border-outline-variant flex justify-between items-center px-lg">
            <div class="flex items-center gap-md">
                <h2 class="font-bold text-title-lg text-on-surface">Halo, Budi Santoso 👋</h2>
            </div>
            <div class="flex items-center gap-md">
                <div class="relative hidden lg:block mr-md">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]" data-icon="search">search</span>
                    <input class="bg-surface-container-low border-none rounded-full py-1.5 pl-10 pr-4 text-body-md w-64 focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-outline" placeholder="Cari reward..." type="text" />
                </div>
                <button class="relative p-2 rounded-full hover:bg-secondary-container transition-colors cursor-pointer active:scale-95 text-on-surface-variant">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border border-surface"></span>
                </button>
                <button class="p-2 rounded-full hover:bg-secondary-container transition-colors cursor-pointer active:scale-95 text-on-surface-variant">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                </button>
            </div>
        </header>
        <!-- Page Content -->
        <div class="p-lg max-w-container-max mx-auto w-full grid grid-cols-12 gap-lg">
            <!-- Left Column: Catalog and Filters -->
            <div class="col-span-12 xl:col-span-8 flex flex-col gap-lg">
                <!-- Points Summary Card -->
                <section class="relative overflow-hidden bg-primary-container rounded-xl p-xl text-on-primary-container flex justify-between items-center shadow-sm">
                    <div class="relative z-10">
                        <p class="text-label-md uppercase tracking-widest opacity-80 mb-xs font-bold">TOTAL POIN SAAT INI</p>
                        <h2 class="font-bold text-[44px] leading-tight mb-xs">12.450 <span class="text-headline-md font-medium">Poin</span></h2>
                        <div class="flex items-center gap-sm bg-white/15 backdrop-blur-md rounded-full px-md py-1.5 w-fit border border-white/10">
                            <span class="material-symbols-outlined text-[18px]" data-icon="monetization_on">monetization_on</span>
                            <span class="font-bold text-body-md">Setara Rp 124.500</span>
                        </div>
                    </div>
                    <div class="relative z-10 hidden md:flex flex-col items-end">
                        <span class="material-symbols-outlined text-[72px] opacity-20" data-icon="auto_awesome">auto_awesome</span>
                        <p class="text-label-md text-right max-w-[180px] mt-md opacity-80 italic">Tukarkan poin Anda dengan berbagai manfaat eksklusif WasteGuard.</p>
                    </div>
                    <!-- Abstract circles background -->
                    <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
                </section>
                <!-- Categories -->
                <nav class="flex items-center gap-sm overflow-x-auto pb-2 hide-scrollbar">
                    <button class="bg-primary text-white px-lg py-sm rounded-full font-bold whitespace-nowrap shadow-sm">Semua</button>
                    <button class="bg-white border border-outline-variant text-secondary hover:border-primary hover:text-primary px-lg py-sm rounded-full font-bold transition-all whitespace-nowrap">Saldo Digital</button>
                    <button class="bg-white border border-outline-variant text-secondary hover:border-primary hover:text-primary px-lg py-sm rounded-full font-bold transition-all whitespace-nowrap">Tagihan RT</button>
                    <button class="bg-white border border-outline-variant text-secondary hover:border-primary hover:text-primary px-lg py-sm rounded-full font-bold transition-all whitespace-nowrap">Voucher Belanja</button>
                    <button class="bg-white border border-outline-variant text-secondary hover:border-primary hover:text-primary px-lg py-sm rounded-full font-bold transition-all whitespace-nowrap">Donasi</button>
                </nav>
                <!-- Reward Catalog Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-lg">
                    <!-- Reward Card 1 -->
                    <div class="bg-white rounded-xl border border-outline-variant overflow-hidden hover:shadow-md transition-shadow group flex flex-col h-full">
                        <div class="h-44 overflow-hidden relative">
                            <img alt="Gopay top up" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlrszo9WRHFYC6cMDG_PaBamCqrvbD2Z36TPZ6HIYOHLG8lAIUrbNs7q4w1mWEvV83VBQQIPIGUB72ohjMwQb3R9dTxmFKxuuCeePWLpcJnOVrcoMffbotj6WKng0lkXviYCNwtKVV0NT_f6VyjPAKhtErUgexXe7T-RFtAn1NJccG3usMiciQC6m0j5P9BEQM5E5tm0nC8duNf54S4fgEXptcW7yLQGaU5wkNFJyJrPu4XqaU4yaLMwvBplTVlkTJbCymcRnO3no" />
                            <div class="absolute top-sm right-sm bg-tertiary text-white text-[10px] px-2 py-1 rounded font-bold uppercase tracking-wider">Populer</div>
                        </div>
                        <div class="p-md flex flex-col gap-md flex-1">
                            <div>
                                <h3 class="font-bold text-body-lg text-on-surface">Gopay Rp 50.000</h3>
                                <p class="text-label-md text-secondary">Saldo Digital</p>
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="font-bold text-primary">5.000 Poin</span>
                                <button class="bg-secondary-container text-primary hover:bg-primary hover:text-white px-md py-2 rounded-lg font-bold text-body-md transition-all active:scale-95">Tukarkan</button>
                            </div>
                        </div>
                    </div>
                    <!-- Reward Card 2 -->
                    <div class="bg-white rounded-xl border border-outline-variant overflow-hidden hover:shadow-md transition-shadow group flex flex-col h-full">
                        <div class="h-44 overflow-hidden relative bg-primary/5 flex items-center justify-center">
                            <div class="text-center">
                                <span class="material-symbols-outlined text-[64px] text-primary/40 mb-2" data-icon="house_siding">house_siding</span>
                                <div class="font-black text-primary text-headline-lg">-50%</div>
                            </div>
                        </div>
                        <div class="p-md flex flex-col gap-md flex-1">
                            <div>
                                <h3 class="font-bold text-body-lg text-on-surface">Potongan Iuran RT 50%</h3>
                                <p class="text-label-md text-secondary">Tagihan Bulanan</p>
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="font-bold text-primary">7.500 Poin</span>
                                <button class="bg-secondary-container text-primary hover:bg-primary hover:text-white px-md py-2 rounded-lg font-bold text-body-md transition-all active:scale-95">Tukarkan</button>
                            </div>
                        </div>
                    </div>
                    <!-- Reward Card 3 -->
                    <div class="bg-white rounded-xl border border-outline-variant overflow-hidden hover:shadow-md transition-shadow group flex flex-col h-full">
                        <div class="h-44 overflow-hidden relative">
                            <img alt="Alfamart voucher" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6aAiZL2OQtN-VLRANMgCefM3CcRsgN2i81B5byljT9g9KShwSUIorqFrnjsWDXayjJ8oaQyPIlUq4o5Z7h5nGSjsikPNQPw1Vig1FIywrYJHKOvVb6i1wMPLiqVLuFIjfbry3_HcWJrMpdNMFaOeO-Ll-cDNQHe8sdVgRUYTFxoAwIP9_5l4LA2hQSazsaCKFOq9gR2-nQKqUMoNvETwTnx2h4VIMTCewOxyVm76yB5DKJmP9LhFRP9vGOB9VzMPDTD_k9IB6xYI" />
                        </div>
                        <div class="p-md flex flex-col gap-md flex-1">
                            <div>
                                <h3 class="font-bold text-body-lg text-on-surface">Voucher Alfamart 25rb</h3>
                                <p class="text-label-md text-secondary">Voucher Belanja</p>
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="font-bold text-primary">2.500 Poin</span>
                                <button class="bg-secondary-container text-primary hover:bg-primary hover:text-white px-md py-2 rounded-lg font-bold text-body-md transition-all active:scale-95">Tukarkan</button>
                            </div>
                        </div>
                    </div>
                    <!-- Reward Card 4 -->
                    <div class="bg-white rounded-xl border border-outline-variant overflow-hidden hover:shadow-md transition-shadow group flex flex-col h-full">
                        <div class="h-44 overflow-hidden relative">
                            <img alt="Tree planting" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcY4fC2IbM1C5K0a96WNcilS9tWcrughO-fQQPYi4AOLhzb6lGcSUvBzLcY7qhEeISWw0gVcerwKQ9n91A0zT7fbAxEZN9-1QydGcR0-rKAciSsqPGUDME5RAizWbb8N_qllvR6LhBHxVLaQZfH3GpcGDlQsfRHoPI5Re_0Ia9xS9gKHmn7yhYJ9OByv0R6BGOO2Y8Ea4dzmz7RCHf3UxtHfe83W6seEzn1TSwUqQqszunsehA7ohb4eLyRtWlD2IZqb1zTmbk2Jk" />
                        </div>
                        <div class="p-md flex flex-col gap-md flex-1">
                            <div>
                                <h3 class="font-bold text-body-lg text-on-surface">Donasi Tanam Pohon</h3>
                                <p class="text-label-md text-secondary">Eco-Donasi</p>
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="font-bold text-primary">1.000 Poin</span>
                                <button class="bg-secondary-container text-primary hover:bg-primary hover:text-white px-md py-2 rounded-lg font-bold text-body-md transition-all active:scale-95">Tukarkan</button>
                            </div>
                        </div>
                    </div>
                    <!-- Reward Card 5 -->
                    <div class="bg-white rounded-xl border border-outline-variant overflow-hidden hover:shadow-md transition-shadow group flex flex-col h-full">
                        <div class="h-44 overflow-hidden relative bg-surface-container-high flex items-center justify-center">
                            <span class="material-symbols-outlined text-[64px] text-tertiary/40" data-icon="account_balance">account_balance</span>
                        </div>
                        <div class="p-md flex flex-col gap-md flex-1">
                            <div>
                                <h3 class="font-bold text-body-lg text-on-surface">OVO Rp 100.000</h3>
                                <p class="text-label-md text-secondary">Saldo Digital</p>
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="font-bold text-primary">10.000 Poin</span>
                                <button class="bg-secondary-container text-primary hover:bg-primary hover:text-white px-md py-2 rounded-lg font-bold text-body-md transition-all active:scale-95">Tukarkan</button>
                            </div>
                        </div>
                    </div>
                    <!-- Reward Card 6 (Out of Stock) -->
                    <div class="bg-white rounded-xl border border-outline-variant overflow-hidden opacity-75 group flex flex-col h-full">
                        <div class="h-44 overflow-hidden relative grayscale">
                            <img alt="PLN voucher" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDt2M-mCyxaYkoNyjbUVoUb2esMu_IXaqG7gu02P_aZo3IEQAZ7L0BmNHQgL7Q0HujDeFFgqjrSHOj7M0uI6-cfenvZz6n_5Zu7Kjq7hmWzk7irwLzufJeNin50f5wiZdwcYcKqAlvmtWvB3fpALRHrZ61PNhgUWW2FP_9_Un8w2sjQrJHoTT6w3ETErTfycZ1OOqGL2AtJJH44JkutIuGWzKAiwTMcnJVytPT8Z3F-KlgSxCOcTyKds05dfyDYXamUmjYvtmv8NJ8" />
                            <div class="absolute inset-0 bg-on-surface/40 flex items-center justify-center">
                                <span class="bg-white text-on-surface font-bold px-md py-1 rounded-full text-label-md shadow-sm">Stok Habis</span>
                            </div>
                        </div>
                        <div class="p-md flex flex-col gap-md flex-1">
                            <div>
                                <h3 class="font-bold text-body-lg text-on-surface">Voucher PLN Rp 20rb</h3>
                                <p class="text-label-md text-secondary">Tagihan Listrik</p>
                            </div>
                            <div class="flex items-center justify-between mt-auto">
                                <span class="font-bold text-primary">2.100 Poin</span>
                                <button class="bg-outline-variant text-secondary cursor-not-allowed px-md py-2 rounded-lg font-bold text-body-md transition-all" disabled="">Habis</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column: History & Information -->
            <div class="col-span-12 xl:col-span-4 flex flex-col gap-lg">
                <!-- Recent Transactions History -->
                <section class="bg-white border border-outline-variant rounded-xl p-lg flex flex-col gap-md shadow-sm">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-title-lg text-on-surface">Riwayat Tukar</h3>
                        <a class="text-primary font-bold text-label-md hover:underline" href="#">Lihat Semua</a>
                    </div>
                    <div class="flex flex-col gap-sm">
                        <!-- History Item 1 -->
                        <div class="flex items-center gap-md p-sm rounded-lg hover:bg-surface-container-low transition-colors group cursor-default border border-transparent hover:border-outline-variant">
                            <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[20px] font-bold" data-icon="account_balance_wallet">account_balance_wallet</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-bold text-body-md text-on-surface truncate">Redeem Gopay 50rb</p>
                                <p class="text-label-md text-secondary">10 Okt 2023 • 14:20</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-error text-body-md">- 5.000</p>
                                <p class="text-[10px] text-tertiary font-bold uppercase tracking-tighter">Berhasil</p>
                            </div>
                        </div>
                        <!-- History Item 2 -->
                        <div class="flex items-center gap-md p-sm rounded-lg hover:bg-surface-container-low transition-colors group cursor-default border border-transparent hover:border-outline-variant">
                            <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[20px] font-bold" data-icon="home">home</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-bold text-body-md text-on-surface truncate">Diskon Iuran RT 50%</p>
                                <p class="text-label-md text-secondary">02 Okt 2023 • 09:15</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-error text-body-md">- 7.500</p>
                                <p class="text-[10px] text-tertiary font-bold uppercase tracking-tighter">Berhasil</p>
                            </div>
                        </div>
                        <!-- History Item 3 -->
                        <div class="flex items-center gap-md p-sm rounded-lg hover:bg-surface-container-low transition-colors group cursor-default border border-transparent hover:border-outline-variant">
                            <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[20px] font-bold" data-icon="shopping_bag">shopping_bag</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-bold text-body-md text-on-surface truncate">Voucher Alfamart</p>
                                <p class="text-label-md text-secondary">25 Sep 2023 • 18:45</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-error text-body-md">- 2.500</p>
                                <p class="text-[10px] text-tertiary font-bold uppercase tracking-tighter">Berhasil</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Promo Banner -->
                <div class="bg-tertiary-fixed text-on-tertiary-fixed-variant p-lg rounded-xl flex flex-col gap-md relative overflow-hidden shadow-sm">
                    <div class="absolute -right-6 -bottom-6 opacity-10">
                        <span class="material-symbols-outlined text-[120px]" data-icon="recycling">recycling</span>
                    </div>
                    <h4 class="font-bold text-title-lg">Setor Lebih, Dapat Lebih!</h4>
                    <p class="text-body-md leading-relaxed">Setorkan sampah plastik selama minggu ini dan dapatkan bonus 20% poin tambahan.</p>
                    <button class="bg-white text-tertiary font-bold py-2.5 px-md rounded-lg mt-sm w-fit text-label-md hover:shadow-md transition-all active:scale-95">Setor Sekarang</button>
                </div>
                <!-- Helpful Tips Card -->
                <section class="bg-surface-container-high/50 border border-outline-variant rounded-xl p-lg flex flex-col gap-md">
                    <div class="flex items-center gap-sm text-primary">
                        <span class="material-symbols-outlined font-bold" data-icon="info">info</span>
                        <h3 class="font-bold text-body-lg">Tips Mengumpulkan Poin</h3>
                    </div>
                    <ul class="flex flex-col gap-sm text-body-md text-on-surface-variant">
                        <li class="flex gap-sm">
                            <span class="text-primary font-bold">•</span>
                            <span>Pastikan sampah dalam keadaan bersih dan kering.</span>
                        </li>
                        <li class="flex gap-sm">
                            <span class="text-primary font-bold">•</span>
                            <span>Pisahkan berdasarkan kategori (Plastik, Kertas, Logam).</span>
                        </li>
                        <li class="flex gap-sm">
                            <span class="text-primary font-bold">•</span>
                            <span>Ajak tetangga menggunakan PointWaste untuk bonus referral.</span>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <!-- Footer -->
        <footer class="mt-auto py-lg px-xl bg-surface-container-lowest border-t border-outline-variant">
            <div class="max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-md">
                <div class="flex flex-col items-center md:items-start">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]" data-icon="eco">eco</span>
                        <span class="font-black text-title-lg text-primary">PointWaste</span>
                    </div>
                    <p class="text-label-md text-secondary">Inisiatif Lingkungan Berbasis Masyarakat v2.4</p>
                </div>
                <div class="flex gap-xl text-label-md font-bold text-secondary">
                    <a class="hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
                    <a class="hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
                    <a class="hover:text-primary transition-colors" href="#">Hubungi Kami</a>
                </div>
                <p class="text-label-md text-outline">© 2023 PointWaste. Sustainable Cities SDG 11.</p>
            </div>
        </footer>
    </main>
    <!-- Floating Action Button - Mobile Only -->
    <div class="fixed bottom-lg right-lg md:hidden z-50">
        <button class="bg-primary text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center active:scale-90 transition-transform">
            <span class="material-symbols-outlined text-[28px]" data-icon="add">add</span>
        </button>
    </div>
    <!-- Scripts for simple interactions -->
    <script>
        // Tab switching simulation
        const filterButtons = document.querySelectorAll('nav button');
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white', 'shadow-sm');
                    b.classList.add('bg-white', 'border', 'border-outline-variant', 'text-secondary');
                });
                btn.classList.remove('bg-white', 'border', 'border-outline-variant', 'text-secondary');
                btn.classList.add('bg-primary', 'text-white', 'shadow-sm');
            });
        });
    </script>
</body>

</html>