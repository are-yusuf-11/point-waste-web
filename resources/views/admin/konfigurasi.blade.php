@extends('layouts.admin')

@section('title', 'Konfigurasi Sistem - PointWaste Admin')

{{-- Section Khusus Search Bar untuk disalurkan ke Navbar Utama --}}
@section('search-bar')
<div class="flex items-center gap-md bg-surface-container-low px-md py-xs rounded-full border border-outline-variant w-96">
    <span class="material-symbols-outlined text-secondary">search</span>
    <input class="bg-transparent border-none focus:ring-0 text-body-md w-full focus:outline-none placeholder:text-secondary/60" placeholder="Cari konfigurasi..." type="text" />
</div>
@endsection

@section('content')
<div class="max-w-container-max mx-auto">
    <div class="flex items-center justify-between mb-xl">
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface">Konfigurasi Sistem</h2>
            <p class="font-body-lg text-body-lg text-secondary">Kelola parameter global dan preferensi operasional infrastruktur PointWaste.</p>
        </div>
        <div class="flex gap-md">
            <button class="px-lg py-sm border border-outline text-primary font-label-md rounded-lg hover:bg-surface-container transition-all active:scale-95">Reset Default</button>
            <button class="px-lg py-sm bg-primary text-white font-label-md rounded-lg flex items-center gap-xs hover:bg-opacity-90 shadow-sm active:scale-95 transition-all">
                <span class="material-symbols-outlined text-[18px]">save</span>
                Simpan Perubahan
            </button>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-gutter">
        <section class="col-span-12 lg:col-span-7 glass-card rounded-xl p-lg flex flex-col gap-lg shadow-sm">
            <div class="flex items-center gap-sm pb-md border-b border-outline-variant">
                <span class="material-symbols-outlined text-primary">payments</span>
                <h3 class="font-title-lg text-title-lg">Pengaturan Ekonomi & Batas</h3>
            </div>
            <div class="grid grid-cols-2 gap-xl">
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-secondary">NILAI TUKAR POIN (PER 1 KG)</label>
                    <div class="relative">
                        <span class="absolute left-md top-1/2 -translate-y-1/2 font-body-md text-on-surface-variant">Rp</span>
                        <input class="w-full pl-xl pr-md py-sm border border-outline-variant rounded-lg font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary-fixed/50" type="number" value="5000" />
                    </div>
                    <p class="text-[11px] text-on-surface-variant italic mt-1">*Nilai standar untuk kategori sampah plastik/kertas.</p>
                </div>
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-secondary">BATAS MAKSIMAL SETORAN / HARI</label>
                    <div class="relative">
                        <input class="w-full pl-md pr-xl py-sm border border-outline-variant rounded-lg font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary-fixed/50" type="number" value="50" />
                        <span class="absolute right-md top-1/2 -translate-y-1/2 font-body-md text-on-surface-variant">kg</span>
                    </div>
                    <p class="text-[11px] text-on-surface-variant italic mt-1">*Membatasi penyalahgunaan oleh akun non-residensial.</p>
                </div>
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-secondary">MINIMUM PENCAIRAN SALDO</label>
                    <div class="relative">
                        <span class="absolute left-md top-1/2 -translate-y-1/2 font-body-md text-on-surface-variant">Rp</span>
                        <input class="w-full pl-xl pr-md py-sm border border-outline-variant rounded-lg font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary-fixed/50" type="number" value="25000" />
                    </div>
                </div>
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-secondary">BIAYA ADMIN REDEMPTION</label>
                    <div class="relative">
                        <span class="absolute left-md top-1/2 -translate-y-1/2 font-body-md text-on-surface-variant">Rp</span>
                        <input class="w-full pl-xl pr-md py-sm border border-outline-variant rounded-lg font-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary-fixed/50" type="number" value="1500" />
                    </div>
                </div>
            </div>
        </section>

        <section class="col-span-12 lg:col-span-5 h-full">
            <div class="bg-primary-container text-on-primary-container p-lg rounded-xl h-full flex flex-col justify-between relative overflow-hidden shadow-md min-h-[220px]">
                <div class="relative z-10">
                    <h4 class="font-title-lg text-title-lg mb-xs">Integritas Sistem</h4>
                    <p class="font-body-md text-body-md opacity-80">Terakhir diperiksa: 12 Menit yang lalu</p>
                </div>
                <div class="flex items-end justify-between relative z-10">
                    <div class="flex flex-col">
                        <span class="font-display-lg text-display-lg text-white">99.9%</span>
                        <span class="font-label-md text-label-md uppercase tracking-wider">Uptime Server</span>
                    </div>
                    <div class="p-sm bg-white/20 rounded-lg backdrop-blur-sm">
                        <span class="material-symbols-outlined text-[32px]">security</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="col-span-12 lg:col-span-6 glass-card rounded-xl p-lg shadow-sm">
            <div class="flex items-center gap-sm pb-md border-b border-outline-variant mb-md">
                <span class="material-symbols-outlined text-primary">notifications_active</span>
                <h3 class="font-title-lg text-title-lg">Saluran Notifikasi</h3>
            </div>
            <div class="flex flex-col gap-md">
                <div class="flex items-center justify-between p-md bg-surface-container-low rounded-lg border border-outline-variant/30">
                    <div class="flex items-center gap-md">
                        <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div>
                            <p class="font-body-lg font-bold">Notifikasi Email</p>
                            <p class="text-body-md text-secondary">Kirim laporan mingguan & reset password via email.</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-outline-variant rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between p-md bg-surface-container-low rounded-lg border border-outline-variant/30">
                    <div class="flex items-center gap-md">
                        <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">chat</span>
                        </div>
                        <div>
                            <p class="font-body-lg font-bold">Notifikasi WhatsApp</p>
                            <p class="text-body-md text-secondary">Kirim update status setoran langsung ke HP pengguna.</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-outline-variant rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between p-md bg-surface-container-low rounded-lg border border-outline-variant/30 opacity-60">
                    <div class="flex items-center gap-md">
                        <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">campaign</span>
                        </div>
                        <div>
                            <p class="font-body-lg font-bold">Push Notification</p>
                            <p class="text-body-md text-secondary">Notifikasi browser untuk admin (Maintenance).</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input class="sr-only peer" type="checkbox" />
                        <div class="w-11 h-6 bg-outline-variant rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    </label>
                </div>
            </div>
        </section>

        <section class="col-span-12 lg:col-span-6 glass-card rounded-xl p-lg shadow-sm border-l-4 border-l-tertiary">
            <div class="flex items-center gap-sm pb-md border-b border-outline-variant mb-md">
                <span class="material-symbols-outlined text-tertiary">backup</span>
                <h3 class="font-title-lg text-title-lg">Backup & Keamanan Data</h3>
            </div>
            <div class="flex flex-col gap-lg">
                <div class="flex flex-col gap-sm">
                    <label class="font-label-md text-label-md text-secondary">FREKUENSI BACKUP OTOMATIS</label>
                    <select class="w-full px-md py-sm border border-outline-variant rounded-lg font-body-md bg-white focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary-fixed/50">
                        <option>Setiap 6 Jam</option>
                        <option selected>Setiap 24 Jam (Tengah Malam)</option>
                        <option>Mingguan (Setiap Hari Minggu)</option>
                        <option>Manual Only</option>
                    </select>
                </div>
                <div class="flex flex-col gap-sm">
                    <label class="font-label-md text-label-md text-secondary">TUJUAN CLOUD STORAGE</label>
                    <div class="flex items-center gap-md border border-outline-variant p-sm rounded-lg bg-white">
                        <div class="bg-surface-container-high p-xs rounded">
                            <span class="material-symbols-outlined text-[20px]">cloud_done</span>
                        </div>
                        <span class="font-body-md flex-grow">Google Cloud Bucket (pw-prod-backup)</span>
                        <span class="text-primary font-label-md cursor-pointer hover:underline">Ubah</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-md pt-md">
                    <button class="py-sm bg-tertiary-container text-on-tertiary-container font-label-md rounded-lg hover:bg-opacity-90 active:scale-95 transition-all flex items-center justify-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">download</span>
                        Download Log
                    </button>
                    <button class="py-sm bg-tertiary text-white font-label-md rounded-lg hover:bg-opacity-90 active:scale-95 transition-all flex items-center justify-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">cloud_upload</span>
                        Jalankan Backup
                    </button>
                </div>
                <div class="mt-xs p-sm bg-error-container/10 border border-error/20 rounded-lg flex gap-md">
                    <span class="material-symbols-outlined text-error text-[20px]">warning</span>
                    <p class="text-[11px] text-on-error-container">Data pengguna dienkripsi dengan standar AES-256. Backup otomatis hanya mencakup database operasional, bukan media fisik.</p>
                </div>
            </div>
        </section>

        <section class="col-span-12 glass-card rounded-xl p-lg shadow-sm overflow-hidden">
            <div class="flex items-center justify-between mb-md">
                <div class="flex items-center gap-sm">
                    <span class="material-symbols-outlined text-secondary">history</span>
                    <h3 class="font-title-lg text-title-lg">Riwayat Perubahan Konfigurasi</h3>
                </div>
                <span class="text-primary font-label-md cursor-pointer hover:underline">Lihat Semua</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-secondary-container/30">
                            <th class="p-md font-label-md text-secondary">WAKTU</th>
                            <th class="p-md font-label-md text-secondary">ADMIN</th>
                            <th class="p-md font-label-md text-secondary">PARAMETER</th>
                            <th class="p-md font-label-md text-secondary">NILAI LAMA</th>
                            <th class="p-md font-label-md text-secondary">NILAI BARU</th>
                            <th class="p-md font-label-md text-secondary">STATUS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/30">
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="p-md font-body-md">24 Okt, 14:20</td>
                            <td class="p-md font-body-md">Admin Utama</td>
                            <td class="p-md font-body-md">Nilai Tukar Poin</td>
                            <td class="p-md font-body-md text-secondary">Rp 4.500</td>
                            <td class="p-md font-body-md text-primary font-bold">Rp 5.000</td>
                            <td class="p-md"><span class="px-sm py-xs bg-primary-fixed text-on-primary-fixed rounded text-[10px] font-bold">SUKSES</span></td>
                        </tr>
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="p-md font-body-md">22 Okt, 09:15</td>
                            <td class="p-md font-body-md">Sub-Admin 02</td>
                            <td class="p-md font-body-md">Notif WA</td>
                            <td class="p-md font-body-md text-secondary">OFF</td>
                            <td class="p-md font-body-md text-primary font-bold">ON</td>
                            <td class="p-md"><span class="px-sm py-xs bg-primary-fixed text-on-primary-fixed rounded text-[10px] font-bold">SUKSES</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

<div class="fixed bottom-xl right-xl translate-y-20 opacity-0 transition-all duration-300 z-[100] flex items-center gap-md bg-on-background text-white px-lg py-md rounded-xl shadow-2xl" id="toast">
    <span class="material-symbols-outlined text-primary-fixed">check_circle</span>
    <div class="flex flex-col">
        <p class="font-label-md">Berhasil!</p>
        <p class="text-body-md text-white/70">Konfigurasi telah diperbarui secara global.</p>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Micro-interaction for the "Save" button
    document.querySelector('button.bg-primary').addEventListener('click', function() {
        const btn = this;
        const originalContent = btn.innerHTML;

        btn.innerHTML = '<span class="material-symbols-outlined animate-spin text-[18px]">progress_activity</span> Menyimpan...';
        btn.disabled = true;

        setTimeout(() => {
            const toast = document.getElementById('toast');
            toast.classList.remove('translate-y-20', 'opacity-0');

            btn.innerHTML = originalContent;
            btn.disabled = false;

            setTimeout(() => {
                // FIXED: .add() diubah menjadi .classList.add() agar tidak memicu error JS
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }, 1200);
    });

    // Numeric input formatting simulation
    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('change', (e) => {
            if (e.target.value < 0) e.target.value = 0;
        });
    });
</script>
@endpush