<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>PastiWaste - Kelola Sampah, Ringankan Iuran</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                brand: {
                  dark: '#14452F',
                  primary: '#1B5E3F',
                  secondary: '#288056',
                  light: '#A7F3D0',
                  accent: '#D1FAE5'
                },
                neutral: {
                  darkest: '#0F172A',
                  card: '#F8FAFC'
                }
              }
            }
          }
        }
    </script>
    <style data-purpose="custom-typography">
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
          font-family: 'Inter', sans-serif;
        }
        /* Menambahkan smooth scroll global */
        html {
          scroll-behavior: smooth;
        }
    </style>
    <style data-purpose="layout-refinements">
        .hero-gradient-text {
          background: linear-gradient(to right, #1B5E3F, #288056);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }
        .floating-badge {
          box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
    </head>
<body class="bg-white text-slate-800">
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-100">
        <nav class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center gap-8">
                <div class="text-brand-primary font-bold text-xl tracking-tight cursor-pointer" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">PastiWaste</div>
                <div class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-600" id="navbar-links">
                    <a class="nav-link hover:text-brand-primary transition-colors duration-200 py-1 border-b-2 border-transparent" href="#fitur">Fitur</a>
                    <a class="nav-link hover:text-brand-primary transition-colors duration-200 py-1 border-b-2 border-transparent" href="#cara-kerja">Cara Kerja</a>
                    <a class="nav-link hover:text-brand-primary transition-colors duration-200 py-1 border-b-2 border-transparent" href="#tentang-kami">Tentang Kami</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a class="text-sm font-semibold text-slate-700 px-4 py-2 hover:text-brand-primary transition-colors" href="#">Login</a>
                <a class="bg-brand-dark text-white text-sm font-semibold px-5 py-2.5 rounded-md hover:bg-brand-primary transition-all shadow-md active:scale-95" href="#">Sign Up</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="relative py-16 md:py-24 overflow-hidden" data-purpose="hero-container">
            <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 gap-12 items-center">
                <div data-purpose="hero-content">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accent text-brand-dark text-xs font-bold mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-primary animate-pulse"></span>
                        Pelayanan Publik Berkelanjutan
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark leading-[1.1] mb-6">
                        Kelola Sampah, <span class="text-brand-secondary">Ringankan Iuran</span>
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 max-w-lg leading-relaxed">
                        Sistem manajemen sampah terintegrasi pertama yang dapat mengurangi tagihan iuran kebersihan melalui skema pemilahan yang terukur.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-brand-dark hover:bg-brand-primary text-white font-semibold py-4 px-8 rounded-lg flex items-center gap-2 transition-all active:scale-95">
                            Mulai Sekarang 
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="relative group" data-purpose="hero-visual">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img alt="Modern smart waste management station" class="w-full object-cover aspect-[4/3] scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFm41tgSY9lyB7LSLemgeoojEclM9GpOzgfDU1br3xOVJbjI16z-snGOpppcBhbXQ0duHYIbUCm5mirFhugy6aeoHeFtwTUM5W_B2EobDUeaoxkcbo-I6txpEJSzSqAp23R4yBkqj-SCGAdY53ab9XvTEXFhZtoppVdqGJm9RqdnNLGv_UIs8Z-e16Oq-CinQxVNwo43jABsZ8JwLiCHGqs0LpceYakenjivgSx_sCrejedYSbrJhit-F21pvS0uy3e4Gfh9nKNM_v"/>
                        <div class="absolute inset-0 bg-brand-dark/10"></div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white p-5 rounded-2xl floating-badge border border-slate-100 hidden sm:block">
                        <p class="text-xs text-slate-500 font-medium mb-1 flex items-center gap-1">
                            <svg class="h-3 w-3 text-brand-primary" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" fill-rule="evenodd"></path>
                            </svg>
                            Total Reduksi Sampah
                        </p>
                        <p class="text-2xl font-bold text-brand-dark">45.2 <span class="text-sm font-normal text-slate-400">ton</span></p>
                        <p class="text-[10px] text-green-600 font-bold mt-1">Minggu ini +12%</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="fitur" class="scroll-mt-20"></section>

        <section class="bg-brand-dark py-6">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center">
                        <span class="text-white text-xl">●</span>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase tracking-widest text-brand-accent/60 font-bold">Kolaborasi Publik</p>
                        <p class="text-white font-semibold">Mendukung SDGs 11: Kota & Pemukiman Berkelanjutan</p>
                    </div>
                </div>
                <div class="text-brand-accent/70 text-xs text-center md:text-right max-w-xs">
                    Terintegrasi dengan sistem pemetaan nasional untuk monitoring real-time dari tingkat RT hingga Kota.
                </div>
            </div>
        </section>
        <section id="cara-kerja" class="scroll-mt-20 py-24 bg-white" data-purpose="features-overview">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-brand-dark mb-4">Solusi Modern Untuk Lingkungan</h2>
                    <p class="text-slate-500 max-w-2xl mx-auto">Kami menyusun sistem pengelolaan sampah terbaik dengan dukungan teknologi yang dapat menguntungkan warga yang berpartisipasi aktif.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-8 rounded-2xl bg-neutral-card border border-slate-100 hover:shadow-lg transition-all group cursor-pointer">
                        <div class="w-12 h-12 bg-brand-accent rounded-xl flex items-center justify-center mb-6 text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-3">Setor Sampah</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Kelola sampah harian secara terukur dan nikmati poin yang dapat digunakan di berbagai platform penukaran.</p>
                    </div>
                    <div class="p-8 rounded-2xl bg-neutral-card border border-slate-100 hover:shadow-lg transition-all group cursor-pointer">
                        <div class="w-12 h-12 bg-brand-accent rounded-xl flex items-center justify-center mb-6 text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-3">Konversi Poin</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Tukar poin yang terkumpul dengan saldo dompet digital atau kupon belanja di merchant rekanan.</p>
                    </div>
                    <div class="p-8 rounded-2xl bg-neutral-card border border-slate-100 hover:shadow-lg transition-all group cursor-pointer">
                        <div class="w-12 h-12 bg-brand-accent rounded-xl flex items-center justify-center mb-6 text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-3">Potongan Iuran</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Poin yang terkumpul bisa ditarik langsung untuk memotong tagihan iuran kebersihan secara otomatis.</p>
                    </div>
                    <div class="p-8 rounded-2xl bg-neutral-card border border-slate-100 hover:shadow-lg transition-all group cursor-pointer">
                        <div class="w-12 h-12 bg-brand-accent rounded-xl flex items-center justify-center mb-6 text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-3">Transparansi Data</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Melihat riwayat setoran, berat sampah, serta pemanfaatan poin secara real-time melalui dashboard.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="bg-brand-primary rounded-[2.5rem] p-12 md:p-20 text-center relative overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 opacity-10 pointer-events-none">
                        <svg class="w-full h-full" preserveaspectratio="none" viewbox="0 0 100 100">
                            <circle cx="0" cy="0" fill="white" r="40"></circle>
                            <circle cx="100" cy="100" fill="white" r="40"></circle>
                        </svg>
                    </div>
                    <div class="relative z-10">
                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Berkontribusi Untuk Lingkungan?</h2>
                        <p class="text-brand-light/80 text-lg mb-10 max-w-2xl mx-auto">Bersinergi bersama masyarakat demi menciptakan lingkungan berkelanjutan yang lebih bersih bagi kita semua.</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button class="bg-brand-light text-brand-dark font-bold py-4 px-8 rounded-xl hover:bg-white transition-all shadow-lg active:scale-95">
                                Daftar Sebagai Warga
                            </button>
                            <button class="border-2 border-brand-accent/30 text-white font-bold py-4 px-8 rounded-xl hover:bg-brand-dark transition-all active:scale-95">
                                Kerjasama Instansi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

    <footer id="tentang-kami" class="scroll-mt-20 bg-neutral-darkest text-slate-300 py-16" data-purpose="main-footer">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div>
                <div class="text-brand-light font-bold text-2xl mb-6">PastiWaste</div>
                <p class="text-sm leading-relaxed text-slate-400">
                    Solusi pengelolaan sampah digital terintegrasi untuk masyarakat modern dan cerdas lingkungan.
                </p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Layanan</h4>
                <ul class="space-y-4 text-sm">
                    <li><a class="hover:text-brand-light" href="#">Setor Sampah</a></li>
                    <li><a class="hover:text-brand-light" href="#">Cek Poin</a></li>
                    <li><a class="hover:text-brand-light" href="#">Iuran Sampah</a></li>
                    <li><a class="hover:text-brand-light" href="#">Laporan Publik</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Perusahaan</h4>
                <ul class="space-y-4 text-sm">
                    <li><a class="hover:text-brand-light" href="#">Tentang Kami</a></li>
                    <li><a class="hover:text-brand-light" href="#">Karir (Hiring)</a></li>
                    <li><a class="hover:text-brand-light" href="#">Mitra</a></li>
                    <li><a class="hover:text-brand-light" href="#">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Kontak</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-center gap-3">
                        <svg class="h-5 w-5 text-brand-light" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        hello@pastiwaste.id
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="h-5 w-5 text-brand-light" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        +62 821-4433-2211
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-brand-light mt-1" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        Jl. Sudirman No. 123, Jakarta, Indonesia
                    </li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 mt-16 pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-xs text-slate-500">© 2024 PastiWaste. Agent of Clean, Partnering for Sustainability.</div>
            <div class="flex items-center gap-6">
                <a class="text-slate-500 hover:text-white transition-colors" href="#">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                </a>
                <a class="text-slate-500 hover:text-white transition-colors" href="#">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-8.784h-2.953v-3.425h2.953v-2.524c0-2.921 1.783-4.516 4.394-4.516 1.251 0 2.326.093 2.639.135v3.059h-1.81c-1.417 0-1.692.674-1.692 1.663v2.183h3.388l-.441 3.425h-2.947v8.784h6.065c.733 0 1.325-.593 1.325-1.324v-21.351c0-.732-.592-1.325-1.325-1.325z"></path></svg>
                </a>
            </div>
        </div>
    </footer>

    <script>
        const links = document.querySelectorAll('.nav-link');
        let isScrolling = false; // Mengunci pelacak otomatis sewaktu menu diklik

        // 1. Efek Klik Navbar Menu
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Matikan aksi lompat bawaan anchor tag
                
                isScrolling = true; // Kunci fungsi deteksi scroll scrollama
                
                // Reset semua kelas aktif kata
                links.forEach(l => {
                    l.classList.remove('text-brand-primary', 'border-brand-primary');
                    l.classList.add('text-slate-600', 'border-transparent');
                });
                
                // Nyalakan efek hijau & border bawah khusus kata yang diklik
                this.classList.remove('text-slate-600', 'border-transparent');
                this.classList.add('text-brand-primary', 'border-brand-primary');
                
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    // Geser layar ke section target (dikurangi tinggi area header navbar)
                    window.scrollTo({
                        top: targetSection.offsetTop - 75,
                        behavior: 'smooth'
                    });
                    
                    // Buka kembali kunci deteksi scroll setelah animasi scroll selesai (~800ms)
                    setTimeout(() => {
                        isScrolling = false;
                    }, 800);
                }
            });
        });

        // 2. Efek Pelacak Posisi Layar Alami (Ketika di-scroll pakai mouse wheel)
        window.addEventListener('scroll', () => {
            if (isScrolling) return; // Jika dipicu oleh klik menu, abaikan baris di bawah ini
            
            let current = '';
            const sections = document.querySelectorAll('section, footer');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 120) {
                    current = section.getAttribute('id');
                }
            });

            // Update kata aktif di navbar mengikuti perpindahan layar secara real-time
            links.forEach(link => {
                link.classList.remove('text-brand-primary', 'border-brand-primary');
                link.classList.add('text-slate-600', 'border-transparent');
                
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.remove('text-slate-600', 'border-transparent');
                    link.classList.add('text-brand-primary', 'border-brand-primary');
                }
            });
        });
    </script>
</body>
</html>