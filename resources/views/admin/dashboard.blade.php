@extends('layouts.admin')

@section('title', 'Konfigurasi Sistem - PointWaste Admin')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: '#166534',
          'primary-dark': '#14532d',
          'primary-light': '#16a34a',
          'primary-soft': '#ecfdf3',
          'surface': '#f7faf8',
          'success-bg': '#dcfce7',
          'success-text': '#15803d',
        },
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
        borderRadius: {
          xl: '0.85rem',
        }
      }
    }
  }
</script>
<style>
  body { font-family: 'Inter', sans-serif; }
  .material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    font-size: 20px;
  }
  .active-nav .material-symbols-outlined { font-variation-settings: 'FILL' 1; }
  ::-webkit-scrollbar { width: 6px; height: 6px; }
  ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
</style>
</head>

<div class="flex min-h-screen">

  <!-- SIDEBAR -->
  <aside class="fixed left-0 top-0 h-screen w-64 bg-white border-r border-gray-200 flex flex-col">
    <div class="px-6 py-6">
      <h1 class="text-xl font-extrabold text-primary leading-tight">PointWaste</h1>
      <p class="text-xs text-gray-400 mt-0.5">Admin Portal</p>
    </div>

    <nav class="flex-1 px-3 mt-2 space-y-1">
      <a href="#" class="active-nav flex items-center gap-3 rounded-lg px-3 py-2.5 bg-primary-soft text-primary font-semibold text-sm">
        <span class="material-symbols-outlined">dashboard</span>
        Dashboard
      </a>
      <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700 text-sm font-medium transition-colors">
        <span class="material-symbols-outlined">group</span>
        User Management
      </a>
      <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700 text-sm font-medium transition-colors">
        <span class="material-symbols-outlined">recycling</span>
        Waste Categories
      </a>
      <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700 text-sm font-medium transition-colors">
        <span class="material-symbols-outlined">monitoring</span>
        System Monitoring
      </a>
      <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700 text-sm font-medium transition-colors">
        <span class="material-symbols-outlined">settings</span>
        System Configuration
      </a>
    </nav>

    <div class="px-3 pb-6 mt-auto">
      <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-red-500 hover:bg-red-50 text-sm font-medium transition-colors">
        <span class="material-symbols-outlined">logout</span>
        Logout
      </a>
    </div>
  </aside>

  <!-- MAIN -->
  <div class="flex-1 ml-64 flex flex-col">

    <!-- HEADER -->
    <header class="sticky top-0 z-30 h-16 bg-white/90 backdrop-blur border-b border-gray-200 flex items-center justify-end px-8 gap-5">
      <button class="p-2 rounded-full text-gray-400 hover:bg-gray-100 hover:text-gray-600 transition-colors">
        <span class="material-symbols-outlined">notifications</span>
      </button>
      <button class="p-2 rounded-full text-gray-400 hover:bg-gray-100 hover:text-gray-600 transition-colors">
        <span class="material-symbols-outlined">help</span>
      </button>
      <div class="flex items-center gap-3 pl-4 border-l border-gray-200">
        <div class="text-right">
          <p class="text-sm font-semibold text-gray-800 leading-tight">Budi Santoso</p>
          <p class="text-[11px] text-primary font-bold uppercase tracking-wide leading-tight">Super Admin</p>
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

    <!-- CONTENT -->
    <main class="flex-1 px-8 py-7 max-w-[1280px] w-full">

      <!-- Page title -->
      <div class="mb-7">
        <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">Selamat Datang Atmin <span>👋</span></h2>
        <p class="text-gray-500 mt-1 text-sm">Mari kelola efisiensi pengelolaan sampah hari ini</p>
      </div>

      <!-- Top 3 cards -->
      <section class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-7">

        <!-- Nilai Tukar Poin -->
        <div class="bg-white border border-gray-200 rounded-xl p-5">
          <div class="flex items-center gap-2.5 mb-2">
            <div class="w-9 h-9 rounded-lg bg-primary-soft flex items-center justify-center text-primary">
              <span class="material-symbols-outlined" style="font-size:18px;">payments</span>
            </div>
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Active RT Units</span>
                <div class="flex items-end gap-xs">
                    <span class="font-display-lg text-headline-lg font-bold text-on-surface">{{ $activeRtCount }}</span>
                    <span class="text-on-surface-variant font-bold text-sm mb-2">/ {{ $totalRtTarget }} total</span>
                </div>
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
            <div class="flex flex-col gap-2.5">
                <div class="flex items-center justify-between border border-slate-200 rounded-xl p-3 bg-white shadow-sm">
                    <div class="flex items-center gap-3 text-slate-700">
                        <span class="material-symbols-outlined text-lg text-slate-500">mail</span>
                        <span class="text-xs font-bold">E-mail</span>
                    </div>
                    <span class="material-symbols-outlined {{ $notificationChannels['email'] ? 'text-emerald-800' : 'text-slate-300' }} font-bold text-xl cursor-pointer" style="font-variation-settings: 'FILL' {{ $notificationChannels['email'] ? 1 : 0 }}">
                        {{ $notificationChannels['email'] ? 'select_check_box' : 'check_box_outline_blank' }}
                    </span>
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