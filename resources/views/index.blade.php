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
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
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
    
    <header class="fixed top-0 left-0 right-0 z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant transition-all duration-300">
        <nav class="flex justify-between items-center w-full px-lg py-sm max-w-container-max mx-auto h-16">
            <div class="text-2xl font-bold text-primary tracking-tight cursor-pointer" onclick="window.scrollTo(0,0)">PointWaste</div>
            <div class="hidden md:flex gap-lg">
                <a class="nav-link font-label-md text-label-md text-primary font-bold border-b-2 border-primary pb-1 transition-all" href="#fitur">Fitur</a>
                <a class="nav-link font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors pb-1" href="#cara-kerja">Cara Kerja</a>
                <a class="nav-link font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors pb-1" href="#tentang-kami">Tentang Kami</a>
            </div>
            <div class="flex items-center gap-md">
                <a href="{{ route('login') }}" class="font-label-md text-label-md text-primary px-md py-sm hover:opacity-80 transition-opacity inline-block">Login</a>
                <a href="{{ route('register') }}" class="font-label-md text-label-md bg-primary text-on-primary px-lg py-sm rounded-lg hover:opacity-90 transition-all shadow-sm inline-block">Register</a>
            </div>
        </nav>
    </header>

    <main class="pt-16">
        
        <section class="relative overflow-hidden py-24 md:py-32 hero-gradient">
            <div class="max-w-container-max mx-auto px-lg">
                <div class="flex flex-col md:flex-row items-center gap-xl">
                    <div class="flex-1 space-y-lg text-center md:text-left">
                        <div class="inline-flex items-center gap-xs px-sm py-1 bg-secondary-container text-primary rounded-full font-label-md text-label-md">
                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">eco</span>
                            Menuju Kota Berkelanjutan
                        </div>
                        <h1 class="text-4xl md:text-5xl font-bold text-on-surface leading-tight">
                            Kelola Sampah, <span class="text-primary">Ringankan Iuran</span>
                        </h1>
                        <p class="text-base md:text-lg text-on-surface-variant max-w-xl mx-auto md:mx-0 leading-relaxed">
                            Ubah kebiasaan membuang sampah menjadi poin yang dapat mengurangi tagihan iuran kebersihan bulanan Anda secara otomatis dan transparan.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-md justify-center md:justify-start pt-md">
                            <a href="{{ route('register') }}" class="bg-primary text-on-primary px-xl py-lg rounded-xl font-semibold flex items-center justify-center gap-sm hover:scale-[1.02] transition-transform active:scale-95 shadow-md">
                                Mulai Sekarang
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                            <a href="#cara-kerja" class="bg-white border border-outline-variant text-on-surface px-xl py-lg rounded-xl font-semibold flex items-center justify-center gap-sm hover:bg-surface-container-low transition-colors">
                                Lihat Cara Kerja
                            </a>
                        </div>
                    </div>
                    <div class="flex-1 relative w-full max-w-md md:max-w-none">
                        <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-2xl border border-white/50">
                            <img alt="Modern Waste Management" class="w-full h-auto object-cover aspect-[4/3]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1Qw5o7hMzGkY5J08CFcyrvamN1g_hvfJ9KOWs4dN7Vecw_vL012a-uxI44duIBurNebsBSltAITwe-79fsDch6g4fYzEtj46-aMl7xrf3p3NhnD0Vwp3QvMdWlNwnhTcIpcqoG2R2BgscgvFKtlppXL4Qc2TmNNlw7daxxDtAumRODQ964XqnijJJe914h40jyXd__MIxt6Vz6EtKgQW7THX1IGbX0b_ffWlmMk210LztoZHu4MoGwFUG3FgVbU0TMpUY9IOSs5Q" />
                        </div>
                        <div class="absolute -bottom-6 -left-6 z-20 eco-glass p-lg rounded-2xl shadow-xl max-w-[220px]">
                            <div class="flex items-center gap-sm mb-xs">
                                <span class="material-symbols-outlined text-primary">trending_up</span>
                                <span class="font-label-md text-label-md text-primary font-bold">Dampak Hari Ini</span>
                            </div>
                            <div class="text-2xl font-bold text-on-surface">45.2 <span class="text-sm font-normal text-slate-500">kg</span></div>
                            <p class="text-xs text-on-surface-variant mt-1">Sampah anorganik terolah warga lingkungan RT</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-primary text-on-primary py-6">
            <div class="max-w-container-max mx-auto px-lg flex flex-col md:flex-row items-center justify-between gap-md">
                <div class="flex items-center gap-md">
                    <span class="material-symbols-outlined text-4xl text-primary-fixed">domain</span>
                    <div>
                        <p class="text-[10px] font-bold opacity-80 uppercase tracking-widest">Global Goals Contribution</p>
                        <h2 class="text-lg font-bold">Mendukung SDGs 11: Kota & Pemukiman Berkelanjutan</h2>
                    </div>
                </div>
                <p class="text-xs max-w-md text-emerald-100 text-left md:text-right">
                    Bersama membangun sistem sanitasi dan pengelolaan limbah sirkular tingkat rukun tetangga yang cerdas, inklusif, dan ramah lingkungan.
                </p>
            </div>
        </section>

        <section id="fitur" class="py-24 bg-surface scroll-mt-16">
            <div class="max-w-container-max mx-auto px-lg">
                <div class="text-center mb-20 space-y-md">
                    <h2 class="text-3xl font-bold text-on-surface">Solusi Modern Untuk Lingkungan</h2>
                    <p class="text-sm md:text-base text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                        Kami menyederhanakan pengelolaan sampah rumah tangga melalui platform terintegrasi yang memberi manfaat langsung bagi dompet Anda.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
                    <div class="bg-white p-lg rounded-2xl border border-outline-variant hover:border-primary transition-all group shadow-sm">
                        <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-primary mb-lg group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">recycling</span>
                        </div>
                        <h3 class="text-lg font-bold text-on-surface mb-sm">Setor Sampah</h3>
                        <p class="text-xs md:text-sm text-on-surface-variant leading-relaxed">
                            Warga dapat mengajukan setoran sampah pilahan mandiri (plastik, kertas, botol) secara online kapan saja.
                        </p>
                    </div>
                    <div class="bg-white p-lg rounded-2xl border border-outline-variant hover:border-primary transition-all group shadow-sm">
                        <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-primary mb-lg group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
                        </div>
                        <h3 class="text-lg font-bold text-on-surface mb-sm">Konversi Poin</h3>
                        <p class="text-xs md:text-sm text-on-surface-variant leading-relaxed">
                            Dapatkan poin digital untuk setiap kilogram sampah berdasarkan timbangan valid dan persetujuan Pengurus RT.
                        </p>
                    </div>
                    <div class="bg-white p-lg rounded-2xl border border-outline-variant hover:border-primary transition-all group shadow-sm">
                        <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-primary mb-lg group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">receipt_long</span>
                        </div>
                        <h3 class="text-lg font-bold text-on-surface mb-sm">Potongan Iuran</h3>
                        <p class="text-xs md:text-sm text-on-surface-variant leading-relaxed">
                            Poin yang terkumpul dikonversi otomatis menjadi saldo pengurang tagihan wajib iuran kebersihan RT bulanan Anda.
                        </p>
                    </div>
                    <div class="bg-white p-lg rounded-2xl border border-outline-variant hover:border-primary transition-all group shadow-sm">
                        <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-primary mb-lg group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">monitoring</span>
                        </div>
                        <h3 class="text-lg font-bold text-on-surface mb-sm">Transparansi Data</h3>
                        <p class="text-xs md:text-sm text-on-surface-variant leading-relaxed">
                            Pantau riwayat mutasi tabungan poin, berkas pengajuan setoran, serta status keuangan iuran warga secara *real-time*.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="cara-kerja" class="py-24 bg-white scroll-mt-16">
            <div class="max-w-container-max mx-auto px-lg">
                <div class="text-center mb-16 space-y-md">
                    <h2 class="text-3xl font-bold text-on-surface">Bagaimana PointWaste Bekerja?</h2>
                    <p class="text-sm md:text-base text-on-surface-variant max-w-xl mx-auto">
                        Hanya butuh 4 langkah mudah untuk mulai menyulap limbah rumah tangga menjadi keuntungan finansial lingkungan.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                    <div class="text-center flex flex-col items-center space-y-4">
                        <div class="w-16 h-16 bg-emerald-50 text-primary rounded-full flex items-center justify-center text-xl font-bold border border-emerald-100 shadow-sm">
                            1
                        </div>
                        <h3 class="text-base font-bold text-slate-800">Pilah Sampah</h3>
                        <p class="text-xs text-slate-500 leading-relaxed max-w-xs">Pisahkan sampah anorganik Anda seperti kertas, kardus, plastik, logam, atau minyak jelantah.</p>
                    </div>
                    <div class="text-center flex flex-col items-center space-y-4">
                        <div class="w-16 h-16 bg-emerald-50 text-primary rounded-full flex items-center justify-center text-xl font-bold border border-emerald-100 shadow-sm">
                            2
                        </div>
                        <h3 class="text-base font-bold text-slate-800">Ajukan di Aplikasi</h3>
                        <p class="text-xs text-slate-500 leading-relaxed max-w-xs">Buka form setor sampah, masukkan tanggal, rincian estimasi berat, dan lampirkan foto fisik sampah.</p>
                    </div>
                    <div class="text-center flex flex-col items-center space-y-4">
                        <div class="w-16 h-16 bg-emerald-50 text-primary rounded-full flex items-center justify-center text-xl font-bold border border-emerald-100 shadow-sm">
                            3
                        </div>
                        <h3 class="text-base font-bold text-slate-800">Verifikasi RT</h3>
                        <p class="text-xs text-slate-500 leading-relaxed max-w-xs">Bawa sampah ke titik pengumpulan, Pengurus RT akan memvalidasi berat riil dan menyetujui poin masuk.</p>
                    </div>
                    <div class="text-center flex flex-col items-center space-y-4">
                        <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center text-xl font-bold shadow-md">
                            4
                        </div>
                        <h3 class="text-base font-bold text-slate-800">Iuran Terpotong</h3>
                        <p class="text-xs text-slate-500 leading-relaxed max-w-xs">Poin otomatis memotong total akumulasi tagihan iuran bulanan kebersihan Anda secara instan.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="tentang-kami" class="py-24 bg-surface scroll-mt-16">
            <div class="max-w-container-max mx-auto px-lg">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="flex-1 space-y-6">
                        <h2 class="text-3xl font-bold text-on-surface">Misi Kami Menciptakan Ekosistem Rukun Tetangga Digital Peduli Lingkungan</h2>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            PointWaste lahir sebagai wadah inovasi digital untuk mengatasi isu pembuangan akhir sampah perkotaan yang berlebihan. Kami percaya bahwa perubahan besar dimulai dari insentif kecil yang konsisten di tingkat komunitas terkecil: keluarga dan lingkungan Rukun Tetangga (RT).
                        </p>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            Melalui integrasi manajemen sirkular ekonomi antara warga dan pengurus wilayah, kita tidak hanya melestarikan kelayakan bumi, namun juga membangun transparansi keuangan iuran kebersihan masyarakat yang modern dan akuntabel.
                        </p>
                        <div class="grid grid-cols-2 gap-4 pt-2">
                            <div class="p-4 bg-white rounded-xl border border-outline-variant">
                                <h4 class="text-2xl font-bold text-primary">100%</h4>
                                <p class="text-[11px] text-slate-500 mt-1">Transparansi Aliran Kas Iuran</p>
                            </div>
                            <div class="p-4 bg-white rounded-xl border border-outline-variant">
                                <h4 class="text-2xl font-bold text-primary">>1.2 Ton</h4>
                                <p class="text-[11px] text-slate-500 mt-1">Limbah Plastik Tereduksi</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 w-full">
                        <div class="rounded-2xl overflow-hidden shadow-lg">
                            <img alt="Community Team Action" class="w-full h-auto object-cover aspect-[16/10]" src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-white">
            <div class="max-w-container-max mx-auto px-lg">
                <div class="bg-primary-container rounded-[2rem] p-xl md:p-20 text-center text-on-primary-container relative overflow-hidden shadow-md">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary opacity-20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-primary opacity-20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
                    <div class="relative z-10 max-w-2xl mx-auto space-y-lg">
                        <h2 class="text-2xl md:text-3xl font-bold text-on-primary">Siap Berkontribusi Untuk Lingkungan?</h2>
                        <p class="text-sm md:text-base opacity-90 leading-relaxed">
                            Bergabunglah dengan ratusan keluarga lainnya yang telah memulai langkah kecil untuk dampak sirkular ekonomi bagi wilayah pemukiman kita.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-md justify-center pt-md">
                            <a href="{{ route('register') }}" class="bg-primary-fixed text-on-primary-fixed px-xl py-lg rounded-xl font-semibold hover:bg-primary-fixed-dim transition-colors flex items-center justify-center shadow-sm">
                                Daftar Sebagai Warga
                            </a>
                            <button type="button" class="bg-transparent border border-on-primary-container text-on-primary px-xl py-lg rounded-xl font-semibold hover:bg-white/10 transition-colors">
                                Hubungi Pengurus Wilayah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-on-surface text-white pt-24 pb-12">
        <div class="max-w-container-max mx-auto px-lg">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-xl mb-16">
                <div class="space-y-md">
                    <div class="text-xl font-bold text-primary-fixed">PointWaste</div>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Solusi digital integrasi tabungan sampah sirkular dan pengurangan beban tagihan wajib iuran lingkungan pemukiman cerdas.
                    </p>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-white mb-4">Layanan</h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a class="hover:text-primary-fixed transition-colors" href="#fitur">Setor Sampah</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#fitur">Tukar Poin</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#fitur">Iuran Sampah</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-white mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a class="hover:text-primary-fixed transition-colors" href="#tentang-kami">Tentang Kami</a></li>
                        <li><a class="hover:text-primary-fixed transition-colors" href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-white mb-4">Kontak</h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li class="flex items-center gap-sm">
                            <span class="material-symbols-outlined text-[16px]">mail</span>
                            hello@pointwaste.id
                        </li>
                        <li class="flex items-center gap-sm">
                            <span class="material-symbols-outlined text-[16px]">location_on</span>
                            Bekasi, Indonesia
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-md">
                <p class="text-xs text-slate-500">
                    © 2026 PointWaste. Hak Cipta Dilindungi Undang-Undang.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // 1. Fungsi Smooth Scroll & Highlight Menu Aktif
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            
            // Deteksi posisi scroll saat ini
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });

            // Ganti kelas border hijau aktif di navbar secara dinamis
            navLinks.forEach(link => {
                link.classList.remove('text-primary', 'font-bold', 'border-b-2', 'border-primary');
                link.classList.add('text-on-surface-variant');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.remove('text-on-surface-variant');
                    link.classList.add('text-primary', 'font-bold', 'border-b-2', 'border-primary');
                }
            });

            // 2. Efek Transisi Bayangan Sticky Header
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('shadow-md', 'bg-white');
                header.classList.remove('bg-surface/80');
            } else {
                header.classList.remove('shadow-md', 'bg-white');
                header.classList.add('bg-surface/80');
            }
        });
    </script>
</body>

</html>