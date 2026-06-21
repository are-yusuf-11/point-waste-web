@extends('layouts.admin')

@section('title', 'Konfigurasi Sistem - PointWaste Admin')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<main class="font-sans antialiased text-slate-800 p-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">
    <section class="mb-8 bg-transparent">
        <h3 class="text-3xl font-extrabold tracking-tight text-slate-900 mb-1 flex items-center gap-2">
            Selamat Datang Atmin 👋
        </h3>
        <p class="text-sm font-medium text-slate-500">
            Mari kelola efisiensi pengelolaan sampah hari ini.
        </p>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 border border-slate-200 rounded-2xl flex flex-col justify-between relative overflow-hidden shadow-sm min-h-[260px]">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#166534]"></div>
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-9 w-9 bg-emerald-50 text-[#166534] rounded-xl flex items-center justify-center border border-emerald-100/70">
                        <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1">payments</span>
                    </div>
                    <h4 class="font-bold text-sm text-slate-700 tracking-wide">Nilai Tukar Poin</h4>
                </div>
                <p class="text-xs font-medium text-slate-500 leading-relaxed mb-6">
                    Atur berapa nilai Rupiah yang didapatkan warga untuk setiap 1 poin sampah.
                </p>
            </div>
            <h2 class="font-headline-md text-headline-md font-extrabold text-primary">PointWaste Admin</h2>
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
    <!-- Main Content Canvas -->
    <main class="ml-sidebar-width p-lg max-w-[1280px] mx-auto min-h-screen">
        <!-- Header Section -->
        <section class="mb-lg">
            <h3 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Platform Performance</h3>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Real-time oversight of waste management across all regional units.</p>
        </section>
        <!-- Global Stats Bento Grid -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-lg mb-xl">
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Registered Users</span>
                <div class="flex items-end gap-xs">
                    <span class="font-display-lg text-headline-lg font-bold text-on-surface">{{ number_format($totalUsers) }}</span>
                    <span class="text-primary font-bold text-sm mb-2 flex items-center"><span class="material-symbols-outlined text-sm" data-icon="arrow_upward">arrow_upward</span> 4.2%</span>
                </div>
                <p class="text-xs text-on-surface-variant mt-2 italic">Global platform count</p>
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