<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Dashboard Warga</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#004c22",
                        "primary-container": "#166534",
                        "background": "#f8f9ff",
                        "surface": "#ffffff",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#404940",
                        "outline-variant": "#bfc9bd",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                    }
                },
            },

        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .icon-unfilled {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-[#fdfdfd] text-on-surface font-sans min-h-screen flex p-4 gap-4">

    <aside class="w-[260px] bg-surface border border-gray-100 flex flex-col justify-between p-6 h-[calc(100vh-2rem)] sticky top-4 z-30 rounded-2xl shadow-sm">
        <div class="space-y-10">
            <div class="flex items-center gap-3 px-2 py-2">
                <span class="material-symbols-outlined text-primary text-[32px]">recycling</span>
                <span class="font-bold text-xl text-primary tracking-tight">PointWaste</span>
            </div>

            <nav class="space-y-1">
                <a href="#" class="flex items-center gap-4 px-4 py-3 bg-emerald-50 text-primary font-semibold rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">dashboard</span>
                    <span class="text-sm">Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">delete</span>
                    <span class="text-sm">Setor Sampah</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">receipt_long</span>
                    <span class="text-sm">Mutasi Poin</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">credit_card</span>
                    <span class="text-sm">Tagihan Iuran</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">person</span>
                    <span class="text-sm">Profil</span>
                </a>
            </nav>
        </div>

        <div class="border-t border-gray-100 pt-5 space-y-4">
            <div class="flex items-center gap-3 px-1">
                <img class="w-10 h-10 rounded-full object-cover border" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150" alt="Avatar User">
                <div>
                    <h4 class="text-sm font-semibold text-on-surface leading-tight">{{ $warga['nama'] }}</h4>
                    <span class="text-xs text-gray-400">Warga RT 01</span>
                </div>
            </div>
            <a href="#" class="w-full flex items-center justify-center gap-2 px-4 py-2.5 border border-gray-200 text-gray-700 bg-gray-50 hover:bg-gray-100 font-medium rounded-xl text-xs transition-all">
                <span class="material-symbols-outlined icon-unfilled text-[18px]">logout</span>
                Logout
            </a>
        </div>
    </aside>

    <div class="flex-1 flex flex-col min-h-screen">
        
        <header class="h-[60px] bg-transparent flex items-center justify-between px-6 mb-4">
            <div class="flex items-center gap-1.5">
                <span class="text-lg font-semibold text-on-surface">Halo, {{ $warga['nama_panggilan'] }}</span>
                <span>👋</span>
            </div>
            <div class="flex items-center gap-3 text-on-surface-variant">
                <button class="p-2 hover:bg-gray-100 rounded-full relative transition-colors">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">notifications</span>
                    <span class="absolute top-2 right-2 w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                </button>
                <button class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">settings</span>
                </button>
            </div>
        </header>

        <main class="flex-1 px-6 space-y-6 w-full mx-auto">
            
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="bg-surface p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4 relative overflow-hidden before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1.5 before:bg-emerald-600">
                    <span class="text-xs font-medium text-gray-400 block tracking-wide">Saldo Poin Saat Ini</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="text-3xl font-bold text-on-surface tracking-tight">{{ number_format($warga['saldo_poin'], 0, ',', '.') }}</span>
                        <span class="text-xs font-semibold text-gray-400">Poin</span>
                    </div>
                    <div class="flex items-center gap-1 text-xs text-emerald-600 font-medium pt-1">
                        <span class="material-symbols-outlined text-[16px]">check_circle</span>
                        <span>+{{ $warga['poin_minggu_ini'] }} poin minggu ini</span>
                    </div>
                </div>

                <div class="bg-surface p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4 relative overflow-hidden before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1.5 {{ $warga['status_iuran_lunas'] ? 'before:bg-emerald-600' : 'before:bg-red-500' }}">
                    <span class="text-xs font-medium text-gray-400 block tracking-wide">Status Iuran Bulanan</span>
                    
                    <div class="flex items-center flex-row gap-2 whitespace-nowrap min-w-max">
                        <span class="text-3xl font-bold text-on-surface tracking-tight">
                            {{ $warga['status_iuran_lunas'] ? 'Lunas' : 'Belum Lunas' }}
                        </span>
                        <span class="inline-block px-2 py-0.5 text-[10px] font-bold rounded uppercase tracking-wider {{ $warga['status_iuran_lunas'] ? 'bg-emerald-100 text-emerald-800' : 'bg-red-100 text-red-600' }}">
                            {{ $warga['bulan_tagihan'] }}
                        </span>
                    </div>
                    
                    <div class="text-xs text-gray-400 font-medium pt-1">
                        {{ $warga['status_iuran_lunas'] ? 'Terbayar pada ' . $warga['tgl_bayar'] : 'Jatuh tempo tgl ' . $warga['tgl_jatuh_tempo'] }}
                    </div>
                </div>

                <div class="bg-surface p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4 relative overflow-hidden before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1.5 before:bg-emerald-800">
                    <span class="text-xs font-medium text-gray-400 block tracking-wide">Total Setoran Sampah</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="text-3xl font-bold text-on-surface tracking-tight">{{ $warga['total_setoran_kg'] }}</span>
                        <span class="text-xs font-semibold text-gray-400">Kg</span>
                    </div>
                    <div class="text-xs text-gray-400 font-medium pt-1">
                        Selama minggu ini {{ $warga['setoran_minggu_ini_kg'] }} Kg
                    </div>
                </div>
              @endforeach
            </div>
          </div>
        @endif


            <section class="bg-surface rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
                <h3 class="text-base font-semibold text-on-surface tracking-tight">Notifikasi Terbaru</h3>
                
                <div class="space-y-4">
                    @foreach($notifikasiterbaru as $notif)
                    <div class="p-4 rounded-xl border flex gap-4 items-start {{ $notif['tipe'] == 'warning' ? 'bg-amber-50/40 border-amber-100' : 'bg-blue-50/40 border-blue-100' }}">
                        <span class="material-symbols-outlined text-[18px] mt-[2px] {{ $notif['tipe'] == 'warning' ? 'text-amber-600' : 'text-blue-600' }}">info</span>
                        <div class="space-y-0.5 flex-1">
                            <h4 class="text-sm font-semibold text-on-surface leading-snug">{{ $notif['judul'] }}</h4>
                            <p class="text-xs text-gray-500 leading-relaxed max-w-3xl">{{ $notif['pesan'] }}</p>
                            <span class="text-[10px] text-gray-400 block pt-1">{{ $notif['waktu'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

        </main>
    </div>

      </div>
  </main>
  <x-alert />

 

</body>
</html>