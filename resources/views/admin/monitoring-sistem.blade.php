@extends('layouts.admin')

@section('search-bar')
    <div class="relative w-full max-w-md">
        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary">search</span>
        <input id="table-search" class="w-full pl-10 pr-4 py-2 rounded-lg border border-outline-variant bg-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-body-md" placeholder="Cari log atau metrik..." type="text" />
    </div>
@endsection

@section('content')
<div class="pt-8 pb-12 px-xl max-w-[1280px] mx-auto text-on-surface">
    <div class="mb-lg">
        <h2 class="font-headline-md text-headline-md text-primary mb-xs font-bold">Monitoring Sistem</h2>
        <p class="text-body-md text-secondary">Pantau performa infrastruktur PointWaste secara real-time.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-lg mb-xl">
        <div class="bg-white border border-outline-variant rounded-xl p-lg relative overflow-hidden shadow-sm">
            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-label-md text-secondary uppercase mb-xs font-semibold">Uptime Sistem</p>
                    <h3 class="text-headline-lg font-bold text-on-surface">99.9%</h3>
                </div>
                <span class="material-symbols-outlined text-primary text-3xl">timer</span>
            </div>
            <div class="mt-md flex items-center gap-xs">
                <span class="text-primary text-xs font-semibold">Tinggi</span>
                <span class="text-secondary text-xs">• Terakhir diperbarui 2 menit yang lalu</span>
            </div>
        </div>

        <div class="bg-white border border-outline-variant rounded-xl p-lg relative overflow-hidden shadow-sm">
            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-label-md text-secondary uppercase mb-xs font-semibold">Kecepatan Respon</p>
                    <h3 class="text-headline-lg font-bold text-on-surface">124 ms</h3>
                </div>
                <span class="material-symbols-outlined text-primary text-3xl">speed</span>
            </div>
            <div class="mt-md flex items-center gap-xs">
                <span class="text-primary text-xs font-semibold">Optimal</span>
                <span class="text-secondary text-xs">• Rata-rata 24 jam terakhir</span>
            </div>
        </div>

        <div class="bg-white border border-outline-variant rounded-xl p-lg relative overflow-hidden shadow-sm">
            <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-label-md text-secondary uppercase mb-xs font-semibold">Beban Sistem</p>
                    <h3 class="text-headline-lg font-bold text-on-surface">42%</h3>
                </div>
                <span class="material-symbols-outlined text-primary text-3xl">memory</span>
            </div>
            <div class="mt-md flex items-center gap-xs">
                <span class="text-primary text-xs font-semibold">Normal</span>
                <span class="text-secondary text-xs">• Penggunaan CPU & RAM gabungan</span>
            </div>
        </div>
    </div>

    <div class="bento-grid grid grid-cols-12 gap-lg">
        <div class="col-span-12 lg:col-span-8 bg-white border border-outline-variant rounded-xl p-lg shadow-sm">
            <div class="flex justify-between items-center mb-lg">
                <h4 class="font-title-lg text-title-lg text-on-surface font-bold">Kesehatan Server (Real-time)</h4>
                <div class="flex gap-sm">
                    <button class="text-xs px-sm py-1 rounded bg-secondary-container text-primary font-semibold">CPU</button>
                    <button class="text-xs px-sm py-1 rounded hover:bg-secondary-container transition-colors">RAM</button>
                    <button class="text-xs px-sm py-1 rounded hover:bg-secondary-container transition-colors">Traffic</button>
                </div>
            </div>
            <div class="relative h-64 w-full bg-surface-container-low rounded-lg overflow-hidden flex items-end px-md gap-1">
                <div class="flex-1 bg-primary/20 rounded-t h-[30%] animate-pulse"></div>
                <div class="flex-1 bg-primary/30 rounded-t h-[45%]"></div>
                <div class="flex-1 bg-primary/25 rounded-t h-[35%]"></div>
                <div class="flex-1 bg-primary/40 rounded-t h-[50%]"></div>
                <div class="flex-1 bg-primary/60 rounded-t h-[75%] animate-pulse"></div>
                <div class="flex-1 bg-primary/45 rounded-t h-[55%]"></div>
                <div class="flex-1 bg-primary/35 rounded-t h-[40%]"></div>
                <div class="flex-1 bg-primary/20 rounded-t h-[25%]"></div>
                <div class="flex-1 bg-primary/30 rounded-t h-[45%]"></div>
                <div class="flex-1 bg-primary/50 rounded-t h-[60%]"></div>
                <div class="flex-1 bg-primary/65 rounded-t h-[80%]"></div>
                <div class="flex-1 bg-primary/40 rounded-t h-[50%]"></div>
                <div class="flex-1 bg-primary/30 rounded-t h-[45%]"></div>
                <div class="flex-1 bg-primary/25 rounded-t h-[35%]"></div>
                <div class="flex-1 bg-primary/40 rounded-t h-[50%] animate-pulse"></div>
                <div class="flex-1 bg-primary/55 rounded-t h-[70%]"></div>
            </div>
            <div class="flex justify-between mt-sm text-label-md text-secondary">
                <span>10:00 AM</span>
                <span>10:15 AM</span>
                <span>10:30 AM</span>
                <span>Sekarang</span>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-4 bg-white border border-outline-variant rounded-xl p-lg flex flex-col shadow-sm">
            <h4 class="font-title-lg text-title-lg text-on-surface mb-lg font-bold">Status Database</h4>
            <div class="flex-grow flex flex-col justify-center gap-md">
                <div class="flex justify-between items-end mb-xs">
                    <span class="text-body-md text-secondary">Penyimpanan Terpakai</span>
                    <span class="text-title-lg font-bold">12.4 / 50 GB</span>
                </div>
                <div class="w-full bg-surface-container-highest h-4 rounded-full overflow-hidden">
                    <div class="bg-primary h-full rounded-full" style="width: 24.8%"></div>
                </div>
                <div class="mt-lg grid grid-cols-2 gap-md">
                    <div class="p-md bg-surface-container-low rounded-lg">
                        <p class="text-xs text-secondary uppercase font-semibold">Total Koneksi</p>
                        <p class="text-title-lg font-bold text-primary">1,420</p>
                    </div>
                    <div class="p-md bg-surface-container-low rounded-lg">
                        <p class="text-xs text-secondary uppercase font-semibold">Latensi DB</p>
                        <p class="text-title-lg font-bold text-primary">8ms</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-7 bg-white border border-outline-variant rounded-xl p-lg shadow-sm">
            <div class="flex justify-between items-center mb-md">
                <h4 class="font-title-lg text-title-lg text-on-surface font-bold">Log Error Sistem</h4>
                <button class="text-label-md text-primary flex items-center gap-xs hover:underline">
                    Lihat Semua <span class="material-symbols-outlined text-sm">open_in_new</span>
                </button>
            </div>
            <div class="log-container overflow-y-auto max-h-80 border border-outline-variant rounded-lg bg-on-background p-md font-mono text-code-sm">
                <div class="mb-sm flex gap-md">
                    <span class="text-red-400">[ERROR]</span>
                    <span class="text-gray-400">10:42:15</span>
                    <span class="text-white">API Gateway: Timeout connecting to Auth Service</span>
                </div>
                <div class="mb-sm flex gap-md">
                    <span class="text-yellow-400">[WARN]</span>
                    <span class="text-gray-400">10:40:02</span>
                    <span class="text-white">Database: High memory pressure detected in Node-A</span>
                </div>
                <div class="mb-sm flex gap-md">
                    <span class="text-red-400">[ERROR]</span>
                    <span class="text-gray-400">10:38:44</span>
                    <span class="text-white">User Redemptions: Failed to process transaction #TX128</span>
                </div>
                <div class="mb-sm flex gap-md">
                    <span class="text-blue-400">[INFO]</span>
                    <span class="text-gray-400">10:35:20</span>
                    <span class="text-white">System: Automatic backup completed successfully</span>
                </div>
                <div class="mb-sm flex gap-md">
                    <span class="text-yellow-400">[WARN]</span>
                    <span class="text-gray-400">10:32:11</span>
                    <span class="text-white">Storage: Bucket 'user-uploads' reaching 80% capacity</span>
                </div>
                <div class="mb-sm flex gap-md">
                    <span class="text-red-400">[ERROR]</span>
                    <span class="text-gray-400">10:30:59</span>
                    <span class="text-white">SSL: Certificate expiration warning (in 14 days)</span>
                </div>
                <div class="mb-sm flex gap-md">
                    <span class="text-blue-400">[INFO]</span>
                    <span class="text-gray-400">10:25:00</span>
                    <span class="text-white">Maintenance: Cron job 'daily-points-calc' executed</span>
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-5 bg-white border border-outline-variant rounded-xl p-lg shadow-sm">
            <h4 class="font-title-lg text-title-lg text-on-surface mb-md font-bold">Status API & Endpoint</h4>
            <div class="space-y-sm">
                <div class="flex items-center justify-between p-md bg-secondary-container/20 rounded-lg border border-transparent hover:border-primary-container/30 transition-all">
                    <div class="flex items-center gap-md">
                        <span class="status-dot bg-green-500 animate-pulse-slow"></span>
                        <span class="font-body-md font-semibold text-on-surface">Core API v2</span>
                    </div>
                    <div class="text-right">
                        <span class="text-label-md text-primary bg-primary-fixed px-sm py-0.5 rounded">99.98%</span>
                        <p class="text-[10px] text-secondary mt-1">Sangat Stabil</p>
                    </div>
                </div>
                <div class="flex items-center justify-between p-md bg-secondary-container/20 rounded-lg border border-transparent hover:border-primary-container/30 transition-all">
                    <div class="flex items-center gap-md">
                        <span class="status-dot bg-green-500 animate-pulse-slow"></span>
                        <span class="font-body-md font-semibold text-on-surface">Auth Service</span>
                    </div>
                    <div class="text-right">
                        <span class="text-label-md text-primary bg-primary-fixed px-sm py-0.5 rounded">100%</span>
                        <p class="text-[10px] text-secondary mt-1">Stabil</p>
                    </div>
                </div>
                <div class="flex items-center justify-between p-md bg-secondary-container/20 rounded-lg border border-transparent hover:border-primary-container/30 transition-all">
                    <div class="flex items-center gap-md">
                        <span class="status-dot bg-yellow-500"></span>
                        <span class="font-body-md font-semibold text-on-surface">Payment Gateway</span>
                    </div>
                    <div class="text-right">
                        <span class="text-label-md text-yellow-800 bg-yellow-100 px-sm py-0.5 rounded">98.5%</span>
                        <p class="text-[10px] text-secondary mt-1">Latensi Tinggi</p>
                    </div>
                </div>
                <div class="flex items-center justify-between p-md bg-secondary-container/20 rounded-lg border border-transparent hover:border-primary-container/30 transition-all">
                    <div class="flex items-center gap-md">
                        <span class="status-dot bg-green-500 animate-pulse-slow"></span>
                        <span class="font-body-md font-semibold text-on-surface">IoT Connector</span>
                    </div>
                    <div class="text-right">
                        <span class="text-label-md text-primary bg-primary-fixed px-sm py-0.5 rounded">99.7%</span>
                        <p class="text-[10px] text-secondary mt-1">Stabil</p>
                    </div>
                </div>
            </div>
            <div class="mt-lg p-md border border-dashed border-outline rounded-lg text-center">
                <button class="text-body-md text-primary font-bold flex items-center justify-center gap-sm w-full">
                    <span class="material-symbols-outlined">add_circle</span>
                    Tambah Endpoint Monitoring
                </button>
            </div>
        </div>
    </div>

    <footer class="mt-xl pt-lg border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-md">
        <div class="flex items-center gap-lg">
            <div class="flex items-center gap-xs">
                <span class="material-symbols-outlined text-secondary text-sm">public</span>
                <span class="text-label-md text-secondary">Region: Jakarta (JKT-01)</span>
            </div>
            <div class="flex items-center gap-xs">
                <span class="material-symbols-outlined text-secondary text-sm">update</span>
                <span class="text-label-md text-secondary">Uptime Global: 342 Hari</span>
            </div>
        </div>
        <div class="text-label-md text-secondary italic">
            Sistem PointWaste © 2026 - SDG 11 Sustainable Cities and Communities
        </div>
    </footer>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const logs = document.querySelector('.log-container');
        if (!logs) return;

        setInterval(() => {
            const colors = ['text-blue-400', 'text-white', 'text-yellow-400'];
            const prefixes = ['[INFO]', '[SYS]', '[WARN]'];
            const msg = [
                "Checking connection to IoT Node-23...",
                "Background worker cleanup finished",
                "User #4102 triggered point redemption notification",
                "Log rotations successfully archived"
            ];

            const randomIdx = Math.floor(Math.random() * msg.length);
            const time = new Date().toLocaleTimeString('en-GB');

            const newLog = document.createElement('div');
            // Menambahkan efek animasi translate & opacity saat log baru masuk
            newLog.className = 'mb-sm flex gap-md opacity-0 transform translate-y-2 transition-all duration-500';
            newLog.innerHTML = `
                <span class="${colors[Math.floor(Math.random() * colors.length)]}">${prefixes[Math.floor(Math.random() * prefixes.length)]}</span>
                <span class="text-gray-400">${time}</span>
                <span class="text-white">${msg[randomIdx]}</span>
            `;

            logs.appendChild(newLog);
            
            setTimeout(() => {
                newLog.classList.remove('opacity-0', 'translate-y-2');
            }, 10);

            if (logs.children.length > 20) {
                logs.removeChild(logs.firstChild);
            }
            logs.scrollTop = logs.scrollHeight;
        }, 5000);
    });
</script>
@endpush