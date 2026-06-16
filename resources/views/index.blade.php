<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PointWaste - Kelola Sampah, Ringankan Iuran</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Mengaktifkan efek scroll halus saat link menu diklik */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F8FAFC] text-slate-800 antialiased">

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="text-2xl font-bold text-[#0F5132]">Point<span class="text-[#198754]">Waste</span></span>
            </div>
            <div id="navbar-menu" class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-600">
                <a href="#cara-kerja" class="nav-link hover:text-[#0F5132] transition pb-1">Fitur</a>
                <a href="#cara-kerja" class="nav-link hover:text-[#0F5132] transition pb-1">Cara Kerja</a>
                <a href="#tentang-kami" class="nav-link hover:text-[#0F5132] transition pb-1">Tentang Kami</a>
            </div>
            <div class="flex items-center space-x-4 text-sm font-medium">
                <a href="#" class="text-slate-700 hover:text-[#0F5132] transition">Login</a>
                <a href="#" class="bg-[#0F5132] hover:bg-[#0B3D25] text-white px-5 py-2.5 rounded-lg transition shadow-sm">Daftar</a>
            </div>
        </div>
    </nav>

    <section class="max-w-7xl mx-auto px-6 pt-12 pb-20 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-6 space-y-6">
            <div class="inline-flex items-center space-x-2 bg-[#E8F5E9] text-[#0F5132] text-xs font-semibold px-3 py-1.5 rounded-full">
                <span class="w-1.5 h-1.5 bg-[#198754] rounded-full animate-pulse"></span>
                <span>Platform Pengelolaan Sampah</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                Kelola Sampah, <span class="text-[#198754]">Ringankan Iuran</span>
            </h1>
            <p class="text-slate-500 text-base md:text-lg leading-relaxed max-w-xl">
                Digitalisasi pengelolaan sampah rumah tangga yang terintegrasi yang dapat mengurangi tagihan iuran bulanan warga secara otomatis ketika menukar sampah berkala.
            </p>
            <div>
                <a href="#" class="inline-flex items-center space-x-2 bg-[#0F5132] hover:bg-[#0B3D25] text-white font-medium px-6 py-3.5 rounded-xl transition shadow-lg shadow-[#0F5132]/20 group">
                    <span>Mulai Sekarang</span>
                    <i class="fa-solid fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>
        <div class="lg:col-span-6 relative flex justify-center">
            <div class="w-full max-w-lg aspect-4/3 bg-[#072F1D] rounded-3xl overflow-hidden shadow-2xl relative group border-4 border-white">
                <div class="absolute inset-0 bg-gradient-to-tr from-[#0F5132]/40 to-transparent mix-blend-overlay"></div>
                <div class="w-full h-full flex flex-col justify-between p-8 text-white/20">
                    <div class="flex justify-between items-center">
                        <div class="w-8 h-8 rounded-full bg-white/10"></div>
                        <div class="flex space-x-2">
                            <div class="w-12 h-2 bg-white/10 rounded"></div>
                            <div class="w-6 h-2 bg-white/10 rounded"></div>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4 my-auto">
                        <div class="w-16 h-28 bg-white/10 rounded-xl border border-white/10 flex flex-col justify-end p-2 items-center">
                            <div class="w-4 h-4 rounded-full bg-emerald-400/40 mb-2"></div>
                        </div>
                        <div class="w-16 h-28 bg-white/10 rounded-xl border border-white/10 flex flex-col justify-end p-2 items-center">
                            <div class="w-4 h-4 rounded-full bg-emerald-400/40 mb-2"></div>
                        </div>
                        <div class="w-16 h-28 bg-white/10 rounded-xl border border-white/10 flex flex-col justify-end p-2 items-center">
                            <div class="w-4 h-4 rounded-full bg-emerald-400/40 mb-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute -bottom-6 left-6 bg-white p-4 rounded-2xl shadow-xl border border-slate-50 flex flex-col space-y-1.5 max-w-[180px]">
                <div class="flex items-center space-x-2 text-[#198754]">
                    <i class="fa-solid fa-chart-line text-sm"></i>
                    <span class="text-[10px] uppercase tracking-wider font-bold text-slate-400">Sampah Recycled</span>
                </div>
                <span class="text-xl font-bold text-slate-800">45.2 kg</span>
                <span class="text-[10px] text-slate-400">Tersalurkan bulan ini</span>
            </div>
        </div>
    </section>

    <div class="bg-[#0F5132] text-white py-4 overflow-hidden border-y border-emerald-800">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row justify-between items-center text-xs md:text-sm gap-4">
            <div class="flex items-center space-x-3">
                <div class="bg-amber-400 text-slate-900 px-2 py-0.5 rounded font-bold text-[10px]">INFO REPUBLIK</div>
                <p class="font-medium text-emerald-100">Mendukung SDG's 11: Kota & Pemukiman Berkelanjutan</p>
            </div>
            <p class="text-emerald-200/80 text-center sm:text-right text-xs">
                Platform terintegrasi untuk pengelolaan sampah lokal yang efisien, transparan, dan terukur.
            </p>
        </div>
    </div>

    <section id="cara-kerja" class="max-w-7xl mx-auto px-6 py-20 scroll-mt-24">
        <div class="text-center max-w-2xl mx-auto space-y-3 mb-16">
            <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Solusi Modern Untuk Lingkungan</h2>
            <p class="text-slate-500 text-sm md:text-base">
                Kami menyediakan sistem pengelolaan sampah rumah tangga dan instansi demi kemudahan bersama yang berorientasi pada pelestarian tempat Anda.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition duration-300 space-y-4">
                <div class="w-10 h-10 bg-[#E8F5E9] text-[#198754] rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-dumpster text-lg"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base">Setor Sampah</h3>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Setor sampah dari bak/liar di rumah dan kumpulkan poin dari setiap jenis berat sampah yang disetorkan secara rinci.
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition duration-300 space-y-4">
                <div class="w-10 h-10 bg-[#E8F5E9] text-[#198754] rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-coins text-lg"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base">Konversi Poin</h3>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Akumulasi poin hasil setoran akan dikonversi otomatis menjadi saldo untuk memotong tagihan iuran sampah warga yang aktif.
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition duration-300 space-y-4">
                <div class="w-10 h-10 bg-[#E8F5E9] text-[#198754] rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-receipt text-lg"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base">Potongan Iuran</h3>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Warga mendapatkan subsidi/potongan langsung pada tagihan bulanan iuran pengelolaan lingkungan (IPL/RT) hingga Rp 0 rupiah.
                </p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition duration-300 space-y-4">
                <div class="w-10 h-10 bg-[#E8F5E9] text-[#198754] rounded-xl flex items-center justify-center">
                    <i class="fa-solid fa-chart-pie text-lg"></i>
                </div>
                <h3 class="font-bold text-slate-800 text-base">Transparansi Data</h3>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Warga maupun pengelola lingkungan mendapatkan dashboard grafik analitik total sampah yang keluar-masuk secara real-time.
                </p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 pb-20">
        <div class="bg-[#0F5132] rounded-3xl p-12 text-center text-white space-y-8 shadow-xl relative overflow-hidden">
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-emerald-800/40 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -right-24 w-48 h-48 bg-emerald-800/40 rounded-full blur-3xl"></div>

            <div class="max-w-xl mx-auto space-y-4 relative z-10">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Siap Berkontribusi Untuk Lingkungan?</h2>
                <p class="text-emerald-100/80 text-sm leading-relaxed">
                    Semua langkah awal pengelolaan sampah lokal bersama masyarakat dimulai di sini. Pilih peran langkah bantumu untuk bumi yang lebih hijau sejak hari ini.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 relative z-10 text-sm font-semibold">
                <a href="#" class="w-full sm:w-auto bg-[#20C997] hover:bg-[#1baa80] text-slate-900 px-6 py-3.5 rounded-xl transition shadow-md">
                    Daftar Sebagai Warga
                </a>
                <a href="#" class="w-full sm:w-auto border border-white/30 hover:bg-white/10 text-white px-6 py-3.5 rounded-xl transition">
                    Kerjasama Instansi
                </a>
            </div>
        </div>
    </section>

    <footer id="tentang-kami" class="bg-[#0B1520] text-slate-400 pt-16 pb-8 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-10 mb-12">
            <div class="md:col-span-4 space-y-4">
                <span class="text-xl font-bold text-white">Point<span class="text-[#20C997]">Waste</span></span>
                <p class="text-xs leading-relaxed max-w-sm">
                    Solusi pengelolaan sampah digital komprehensif penunjang kemandirian ekosistem warga dan komunitas lokal.
                </p>
            </div>
            <div class="md:col-span-2 space-y-3">
                <h4 class="text-white text-sm font-semibold tracking-wide">Layanan</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#" class="hover:text-white transition">Setor Sampah</a></li>
                    <li><a href="#" class="hover:text-white transition">Tukar Poin</a></li>
                    <li><a href="#" class="hover:text-white transition">Iuran Bulanan</a></li>
                    <li><a href="#" class="hover:text-white transition">Laporan Detail</a></li>
                </ul>
            </div>
            <div class="md:col-span-2 space-y-3">
                <h4 class="text-white text-sm font-semibold tracking-wide">Perusahaan</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-white transition">Karir Intern</a></li>
                    <li><a href="#" class="hover:text-white transition">Mitra</a></li>
                    <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div class="md:col-span-4 space-y-3 text-xs">
                <h4 class="text-white text-sm font-semibold tracking-wide">Kontak</h4>
                <p class="flex items-center space-x-2"><i class="fa-regular fa-envelope text-emerald-400"></i> <span>support@pointwaste.id</span></p>
                <p class="flex items-center space-x-2"><i class="fa-solid fa-phone text-emerald-400"></i> <span>+62 1234 5678 910</span></p>
                <p class="flex items-center space-x-2"><i class="fa-solid fa-location-dot text-emerald-400"></i> <span class="leading-relaxed">Jakarta, Indonesia</span></p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 pt-6 border-t border-slate-950 flex flex-col sm:flex-row justify-between items-center text-[11px] gap-4">
            <p>&copy; 2026 PointWaste. All Rights Reserved. Terintegrasi Lingkungan.</p>
            <div class="flex space-x-4 text-slate-500 text-sm">
                <a href="#" class="hover:text-[#20C997] transition"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="#" class="hover:text-[#20C997] transition"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-[#20C997] transition"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <script>
        const navLinks = document.querySelectorAll('#navbar-menu .nav-link');

        // Fungsi untuk mengatur kelas aktif
        function setActiveLink(clickedLink) {
            navLinks.forEach(link => {
                // Hapus style aktif dari semua menu
                link.classList.remove('text-[#0F5132]', 'font-semibold', 'border-b-2', 'border-[#0F5132]');
                link.classList.add('text-slate-600');
            });

            // Pasang style aktif (Hijau + Garis Bawah) ke menu yang diklik
            clickedLink.classList.remove('text-slate-600');
            clickedLink.classList.add('text-[#0F5132]', 'font-semibold', 'border-b-2', 'border-[#0F5132]');
        }

        // Jalankan fungsi saat menu diklik
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                setActiveLink(this);
            });
        });

        // Setel menu pertama (Fitur) sebagai menu aktif bawaan saat pertama load
        if(navLinks.length > 0) {
            setActiveLink(navLinks[0]);
        }
    </script>
</body>

</html>