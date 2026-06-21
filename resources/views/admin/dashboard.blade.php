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
            <div>
                <label class="text-[11px] font-bold text-slate-400 block mb-2 tracking-wide">1 Poin = ... Rupiah</label>
                <div class="flex items-center gap-3">
                    <span class="text-lg font-extrabold text-[#166534]">Rp</span>
                    <input type="number" id="input-poin-exchange" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm font-bold text-slate-800 outline-none focus:border-[#166534] focus:ring-1 focus:ring-[#166534] transition-all" value="{{ $currentPoinExchange }}" />
                </div>
            </div>
        </div>

        <div class="bg-white p-6 border border-slate-200 rounded-2xl flex flex-col justify-between relative overflow-hidden shadow-sm min-h-[260px]">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#166534]"></div>
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-9 w-9 bg-emerald-50 text-[#166534] rounded-xl flex items-center justify-center border border-emerald-100/70">
                        <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1">speed</span>
                    </div>
                    <h4 class="font-bold text-sm text-slate-700 tracking-wide">Batas Setoran</h4>
                </div>
                <p class="text-xs font-medium text-slate-500 leading-relaxed mb-6">
                    Maksimal berat sampah yang dapat disetorkan per warga setiap harinya.
                </p>
            </div>
            <div>
                <label class="text-[11px] font-bold text-slate-400 block mb-2 tracking-wide">Batas Harian (kg)</label>
                <div class="flex items-center gap-3">
                    <input type="number" id="input-batas-setoran" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm font-bold text-slate-800 outline-none focus:border-[#166534] focus:ring-1 focus:ring-[#166534] transition-all" value="{{ $currentBatasSetoran }}" />
                    <span class="text-lg font-extrabold text-slate-700">kg</span>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 border border-slate-200 rounded-2xl flex flex-col justify-between relative overflow-hidden shadow-sm min-h-[260px]">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-[#166534]"></div>
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-9 w-9 bg-emerald-50 text-[#166534] rounded-xl flex items-center justify-center border border-emerald-100/70">
                        <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1">hub</span>
                    </div>
                    <h4 class="font-bold text-sm text-slate-700 tracking-wide">Saluran Notifikasi</h4>
                </div>
                <p class="text-xs font-medium text-slate-500 leading-relaxed mb-4">
                    Aktifkan atau nonaktifkan kanal pengiriman pesan otomatis ke warga.
                </p>
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
                
                <div class="flex items-center justify-between border border-slate-200 rounded-xl p-3 bg-white shadow-sm">
                    <div class="flex items-center gap-3 text-slate-700">
                        <span class="material-symbols-outlined text-lg text-slate-500">chat</span>
                        <span class="text-xs font-bold">WhatsApp</span>
                    </div>
                    <span class="material-symbols-outlined {{ $notificationChannels['whatsapp'] ? 'text-emerald-800' : 'text-slate-300' }} font-bold text-xl cursor-pointer" style="font-variation-settings: 'FILL' {{ $notificationChannels['whatsapp'] ? 1 : 0 }}">
                        {{ $notificationChannels['whatsapp'] ? 'select_check_box' : 'check_box_outline_blank' }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm mb-8">
        <div class="p-5 flex justify-between items-center border-b border-slate-200/60">
            <div>
                <h4 class="font-bold text-sm text-slate-800 tracking-wide">Riwayat Perubahan Konfigurasi</h4>
                <p class="text-xs font-medium text-slate-400 mt-1">Lacak siapa yang melakukan perubahan dan kapan itu terjadi.</p>
            </div>
            <button class="flex items-center gap-2 px-3 py-1.5 bg-transparent border border-slate-200 rounded-lg text-xs font-bold text-slate-700 hover:bg-slate-50 transition-colors shadow-sm">
                <span class="material-symbols-outlined text-sm font-bold">filter_list</span> Filter Riwayat
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 text-slate-400 font-bold text-[10px] uppercase tracking-wider border-b border-slate-200/60">
                    <tr>
                        <th class="px-6 py-3.5">Tanggal & Waktu</th>
                        <th class="px-6 py-3.5">Administrator</th>
                        <th class="px-6 py-3.5">Parameter</th>
                        <th class="px-6 py-3.5">Nilai Lama</th>
                        <th class="px-6 py-3.5">Nilai Baru</th>
                        <th class="px-6 py-3.5">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-xs font-semibold text-slate-700">
                    @foreach($configHistories as $log)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-4 text-slate-400 font-medium">{{ $log->tanggal }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="h-6 w-6 rounded-full {{ $log->admin_color }} flex items-center justify-center font-bold text-[10px]">{{ $log->admin_initial }}</span>
                                <span class="font-bold text-slate-800">{{ $log->admin_nama }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-slate-600 font-medium">{{ $log->parameter }}</td>
                        <td class="px-6 py-4 text-slate-400 font-medium">{{ $log->nilai_lama }}</td>
                        <td class="px-6 py-4 font-bold text-emerald-700">{{ $log->nilai_baru }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-0.5 bg-emerald-50 text-emerald-700 border border-emerald-100 rounded text-[10px] font-bold tracking-wider">{{ $log->status }}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-4 bg-white border-t border-slate-100 flex items-center justify-center gap-4 text-xs font-bold text-slate-400">
            <button class="material-symbols-outlined text-lg cursor-pointer opacity-30 hover:opacity-100 transition-opacity">chevron_left</button>
            <span class="tracking-wide text-slate-500 font-medium">Halaman 1 dari 1</span>
            <button class="material-symbols-outlined text-lg cursor-pointer opacity-30 hover:opacity-100 transition-opacity">chevron_right</button>
        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-emerald-50/40 p-5 border border-emerald-100/70 rounded-2xl flex gap-4 items-start">
            <div class="h-10 w-10 rounded-xl bg-[#166534] text-white flex items-center justify-center flex-shrink-0 shadow-sm">
                <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1">shield</span>
            </div>
            <div>
                <h5 class="font-bold text-sm text-[#166534] mb-1.5 tracking-wide">Keamanan Role</h5>
                <p class="text-xs font-medium text-slate-500 leading-relaxed">
                    Admin Sistem memiliki akses penuh ke konfigurasi global, sementara Admin RT hanya dapat mengelola warga di wilayah cakupan mereka.
                </p>
            </div>
        </div>

        <div class="bg-[#f0f6fa]/70 p-5 border border-blue-100/70 rounded-2xl flex gap-4 items-start">
            <div class="h-10 w-10 rounded-xl bg-[#004c6e] text-white flex items-center justify-center flex-shrink-0 shadow-sm">
                <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1">assignment</span>
            </div>
            <div>
                <h5 class="font-bold text-sm text-[#004c6e] mb-1.5 tracking-wide">Audit Log</h5>
                <p class="text-xs font-medium text-slate-500 leading-relaxed">
                    Setiap perubahan data pengguna (tambah, edit, hapus) dicatat dalam sistem monitoring untuk transparansi pengelolaan data.
                </p>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const poinInput = document.getElementById('input-poin-exchange');
    const batasInput = document.getElementById('input-batas-setoran');

    function sendData(payload) {
        // Mengirim request data ke route update backend admin
        fetch("{{ route('admin.dashboard.update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json"
            },
            body: JSON.stringify(payload)
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                console.log('Berhasil disimpan:', data.message);
                // Opsional: Kamu bisa memunculkan animasi toast/notifikasi kecil sukses di pojok layar
            } else {
                alert('Gagal menyimpan: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Terjadi error saat autosave:', error);
        });
    }

    // Event 'blur' mendeteksi ketika kursor keluar dari kolom input (selesai mengetik)
    poinInput.addEventListener('blur', function() {
        sendData({
            nilai_poin: this.value,
            batas_setoran: batasInput.value // Kirimkan kedua parameter agar validasi controller lolos
        });
    });

    batasInput.addEventListener('blur', function() {
        sendData({
            nilai_poin: poinInput.value,
            batas_setoran: this.value
        });
    });
});
</script>
@endsection