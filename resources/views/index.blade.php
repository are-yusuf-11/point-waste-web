<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Kelola Sampah, Ringankan Iuran</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed-variant": "#005226",
                        "tertiary": "#004565",
                        "on-tertiary-container": "#9dd5ff",
                        "primary-fixed": "#a6f4b5",
                        "on-surface": "#0b1c30",
                        "on-background": "#0b1c30",
                        "error-container": "#ffdad6",
                        "surface-tint": "#1f6c3a",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#d3e4fe",
                        "secondary-container": "#d9e6dd",
                        "outline": "#707a6f",
                        "primary-fixed-dim": "#8bd79b",
                        "tertiary-fixed": "#c9e6ff",
                        "secondary-fixed": "#d9e6dd",
                        "surface": "#f8f9ff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "surface-container-low": "#eff4ff",
                        "inverse-surface": "#213145",
                        "surface-bright": "#f8f9ff",
                        "on-primary": "#ffffff",
                        "background": "#f8f9ff",
                        "primary-container": "#166534",
                        "inverse-primary": "#8bd79b",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#d3e4fe",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#89ceff",
                        "primary": "#004c22",
                        "surface-container-high": "#dce9ff",
                        "error": "#ba1a1a",
                        "secondary": "#55615a",
                        "outline-variant": "#bfc9bd",
                        "on-secondary-fixed-variant": "#3e4943",
                        "on-tertiary-fixed": "#001e2f",
                        "on-primary-container": "#93e0a2",
                        "surface-container": "#e5eeff",
                        "on-primary-fixed": "#00210b",
                        "surface-dim": "#cbdbf5",
                        "inverse-on-surface": "#eaf1ff",
                        "on-secondary-container": "#5b6760",
                        "secondary-fixed-dim": "#bdcac1",
                        "on-surface-variant": "#404940",
                        "tertiary-container": "#005e87",
                        "on-secondary-fixed": "#131e19",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff"
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
                        "lg": "24px",
                        "sm": "8px",
                        "sidebar-width": "260px",
                        "md": "16px",
                        "container-max": "1280px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "code-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "title-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "code-sm": ["13px", {
                            "lineHeight": "18px",
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
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
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
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .hero-gradient {
            background: radial-gradient(circle at 70% 30%, #F0FDF4 0%, transparent 70%);
        }

        .eco-glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(22, 101, 52, 0.1);
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <header class="fixed top-0 left-0 right-0 z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant">
        <nav class="flex justify-between items-center w-full px-lg py-sm max-w-container-max mx-auto h-16">
            <div class="font-headline-md text-headline-md font-bold text-primary">PointWaste</div>
            <div class="hidden md:flex gap-lg">
                <a class="font-label-md text-label-md text-primary font-bold border-b-2 border-primary pb-1" href="#">Fitur</a>
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Cara Kerja</a>
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Tentang Kami</a>
            </div>
            <div class="flex items-center gap-md">
                <a href="{{ route('login') }}" class="font-label-md text-label-md text-primary px-md py-sm hover:opacity-80 transition-opacity inline-block">Login</a>
                <a href="#" class="font-label-md text-label-md bg-primary text-on-primary px-lg py-sm rounded-lg hover:opacity-90 transition-all shadow-sm inline-block">Register</a>
            </div>
        </nav>
    </header>
    <main class="pt-20">
        <section class="relative overflow-hidden py-24 md:py-32 hero-gradient">
            <div class="max-w-container-max mx-auto px-lg">
                <div class="flex flex-col md:flex-row items-center gap-xl">
                    <div class="flex-1 space-y-lg text-center md:text-left">
                        <div class="inline-flex items-center gap-xs px-sm py-1 bg-secondary-container text-primary rounded-full font-label-md text-label-md">
                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">eco</span>
                            Menuju Kota Berkelanjutan
                        </div>
                        <h1 class="font-display-lg text-display-lg text-on-surface leading-tight">
                            Kelola Sampah, <span class="text-primary">Ringankan Iuran</span>
                        </h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mx-auto md:mx-0">
                            Ubah kebiasaan membuang sampah menjadi poin yang dapat mengurangi tagihan iuran kebersihan bulanan Anda secara otomatis dan transparan.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-md justify-center md:justify-start pt-md">
                            <a href="{{ route('login') }}" class="bg-primary text-on-primary px-xl py-lg rounded-xl font-title-lg text-title-lg flex items-center justify-center gap-sm hover:scale-[1.02] transition-transform active:scale-95">
                                Mulai Sekarang
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                            <button class="bg-white border border-outline-variant text-on-surface px-xl py-lg rounded-xl font-title-lg text-title-lg flex items-center justify-center gap-sm hover:bg-surface-container-low transition-colors">
                                Lihat Demo
                            </button>
                        </div>
                    </div>
                    <div class="flex-1 relative">
                        <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-2xl border border-white/50">
                            <img alt="Modern Waste Management" class="w-full h-auto object-cover aspect-[4/3]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1Qw5o7hMzGkY5J08CFcyrvamN1g_hvfJ9KOWs4dN7Vecw_vL012a-uxI44duIBurNebsBSltAITwe-79fsDch6g4fYzEtj46-aMl7xrf3p3NhnD0Vwp3QvMdWlNwnhTcIpcqoG2R2BgscgvFKtlppXL4Qc2TmNNlw7daxxDtAumRODQ964XqnijJJe914h40jyXd__MIxt6Vz6EtKgQW7THX1IGbX0b_ffWlmMk210LztoZHu4MoGwFUG3FgVbU0TMpUY9IOSs5Q" />
                        </div>
                        <div class="absolute -bottom-6 -left-6 z-20 eco-glass p-lg rounded-2xl shadow-xl max-w-[200px]">
                            <div class="flex items-center gap-sm mb-xs">
                                <span class="material-symbols-outlined text-primary">trending_up</span>
                                <span class="font-label-md text-label-md text-primary">Dampak Hari Ini</span>
                            </div>
                            <div class="font-headline-md text-headline-md text-on-surface">45.2 <span class="text-body-md">kg</span></div>
                            <p class="font-label-md text-label-md text-on-surface-variant">Sampah terolah</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-primary text-on-primary py-lg">
            <div class="max-w-container-max mx-auto px-lg flex flex-col md:flex-row items-center justify-between gap-md">
                <div class="flex items-center gap-md">
                    <img alt="SDG 11" class="w-12 h-12 rounded-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOhWS8xB53xhu-eWMIWWq84m9GIAHZ0kiki0bzxp97dpryp753GrW_jk8f8HGZs2QmMLkNTqr2vPv7B8n9PXqrh0dyCfDkmkpyLwHPojDUu95d00xQeO1YQh5Q8roylT747uPuwlxO2atjW59bQC-KYtsluXHOXX0p97rc1I94_800RtfbTfdJiIBoUd9POq_i_pkxX_BnQ-9gP0G19YsJHmu81fW6C779g3yFzrRZMStT7dhbH773tV_SdAnEHol1C2WNjegTNXk" />
                    <div>
                        <p class="font-label-md text-label-md opacity-80 uppercase tracking-widest">Global Goals</p>
                        <h2 class="font-title-lg text-title-lg">Mendukung SDGs 11: Kota & Pemukiman Berkelanjutan</h2>
                    </div>
                </div>
                <p class="font-body-md text-body-md max-w-md text-on-primary-container text-right hidden md:block">
                    Bersama membangun sistem sanitasi and pengelolaan limbah perkotaan yang cerdas, inklusif, dan ramah lingkungan.
                </p>
            </div>
        </section>

        <section class="py-24 bg-surface">
            <div class="max-w-container-max mx-auto px-lg">
                <div class="text-center mb-20 space-y-md">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Solusi Modern Untuk Lingkungan</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
                        Kami menyederhanakan pengelolaan sampah rumah tangga melalui platform terintegrasi yang memberi manfaat langsung bagi dompet Anda.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
                    <div class="bg-white p-lg rounded-2xl border border-outline-variant hover:border-primary transition-all group">
                        <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-primary mb-lg group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">recycling</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface mb-sm">Setor Sampah</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Sistem penjemputan sampah terpilah terjadwal langsung dari depan rumah Anda setiap minggunya.
                        </p>
                    </div>
                    <div class="bg-white p-lg rounded-2xl border border-outline-variant hover:border-primary transition-all group">
                        <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-primary mb-lg group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface mb-sm">Konversi Poin</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Dapatkan poin untuk setiap kilogram sampah yang Anda setor berdasarkan kategori dan berat yang akurat.
                        </p>
                    </div>
                    <div class="bg-white p-lg rounded-2xl border border-outline-variant hover:border-primary transition-all group">
                        <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-primary mb-lg group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">receipt_long</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface mb-sm">Potongan Iuran</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Poin yang terkumpul akan langsung memotong tagihan iuran sampah bulanan Anda secara otomatis di aplikasi.
                        </p>
                    </div>
                    <div class="bg-white p-lg rounded-2xl border border-outline-variant hover:border-primary transition-all group">
                        <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-primary mb-lg group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">monitoring</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface mb-sm">Transparansi Data</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Pantau riwayat setoran, pergerakan poin, dan jejak karbon Anda melalui dashboard real-time yang detail.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24">
            <div class="max-w-container-max mx-auto px-lg">
                <div class="bg-primary-container rounded-[2rem] p-xl md:p-32 text-center text-on-primary-container relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary opacity-20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-primary opacity-20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
                    <div class="relative z-10 max-w-2xl mx-auto space-y-lg">
                        <h2 class="font-headline-lg text-headline-lg text-on-primary">Siap Berkontribusi Untuk Lingkungan?</h2>
                        <p class="font-body-lg text-body-lg opacity-90">
                            Bergabunglah dengan ribuan warga lainnya yang telah memulai langkah kecil untuk dampak besar bagi kota kita.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-md justify-center pt-md">
                            <a href="#" class="bg-primary-fixed text-on-primary-fixed px-xl py-lg rounded-xl font-title-lg text-title-lg hover:bg-primary-fixed-dim transition-colors flex items-center justify-center">
                                Daftar Sebagai Warga
                            </a>
                            <button class="bg-transparent border border-on-primary-container text-on-primary px-xl py-lg rounded-xl font-title-lg text-title-lg hover:bg-white/10 transition-colors">
                                Kerjasama Instansi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-on-surface text-white pt-24 pb-12">
        <div class="max-w-container-max mx-auto px-lg">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-xl mb-24">
                <div class="col-span-1 md:col-span-1 space-y-md">
                    <div class="font-headline-md text-headline-md font-bold text-primary-fixed">PointWaste</div>
                    <p class="font-body-md text-body-md text-surface-variant">
                        Solusi pengelolaan sampah digital terintegrasi untuk pemukiman cerdas dan berkelanjutan.
                    </p>
                </div>
                <div>
                    <h4 class="font-title-lg text-title-lg mb-lg">Layanan</h4>
                    <ul class="space-y-sm font-body-md text-body-md text-surface-variant">
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Setor Sampah</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Tukar Poin</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Iuran Sampah</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Laporan RT/RW</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-title-lg text-title-lg mb-lg">Perusahaan</h4>
                    <ul class="space-y-sm font-body-md text-body-md text-surface-variant">
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Tentang Kami</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Hubungi Kami</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Karir</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-title-lg text-title-lg mb-lg">Kontak</h4>
                    <ul class="space-y-sm font-body-md text-body-md text-surface-variant">
                        <li class="flex items-center gap-sm">
                            <span class="material-symbols-outlined text-[18px]">mail</span>
                            hello@pointwaste.id
                        </li>
                        <li class="flex items-center gap-sm">
                            <span class="material-symbols-outlined text-[18px]">call</span>
                            (021) 555-0123
                        </li>
                        <li class="flex items-center gap-sm">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            Jakarta, Indonesia
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pt-12 border-t border-outline/20 flex flex-col md:flex-row justify-between items-center gap-md">
                <p class="font-label-md text-label-md text-surface-variant opacity-60">
                    © 2024 PointWaste. Hak Cipta Dilindungi Undang-Undang.
                </p>
                <div class="flex gap-lg">
                    <a class="text-surface-variant hover:text-primary-fixed transition-colors" href="#">
                        <span class="material-symbols-outlined">public</span>
                    </a>
                    <a class="text-surface-variant hover:text-primary-fixed transition-colors" href="#">
                        <span class="material-symbols-outlined">share</span>
                    </a>
                    <a class="text-surface-variant hover:text-primary-fixed transition-colors" href="#">
                        <span class="material-symbols-outlined">smartphone</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll implementation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if(targetId !== "#") {
                    e.preventDefault();
                    document.querySelector(targetId).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Sticky header background transition on scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('shadow-md');
                header.classList.remove('bg-surface/80');
                header.classList.add('bg-white');
            } else {
                header.classList.remove('shadow-md');
                header.classList.add('bg-surface/80');
                header.classList.remove('bg-white');
            }
        });
    </script>
</body>

</html>