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
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm flex flex-col justify-between relative overflow-hidden group border-l-4 border-l-emerald-600">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 bg-emerald-50 text-emerald-700 rounded-xl flex items-center justify-center border border-emerald-100">
                        <span class="material-symbols-outlined text-xl">scale</span>
                    </div>
                    <h3 class="font-bold text-slate-800 text-base">Batas Setoran</h3>
                </div>
                <p class="text-slate-500 text-xs leading-relaxed mb-6">
                    Maksimal berat sampah yang dapat disetorkan per warga setiap harinya.
                </p>
            </div>
            <div>
                <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Batas Harian (kg)</label>
                <div class="flex items-center gap-3">
                    <input type="number" name="batas_setoran" value="{{ $currentBatasSetoran ?? 0 }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 font-bold text-slate-800 focus:outline-none focus:border-emerald-500 focus:bg-white transition-all">
                    <span class="font-extrabold text-slate-700 text-base">kg</span>
                </div>
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm flex flex-col justify-between relative overflow-hidden group border-l-4 border-l-emerald-600">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 bg-emerald-50 text-emerald-700 rounded-xl flex items-center justify-center border border-emerald-100">
                        <span class="material-symbols-outlined text-xl">hub</span>
                    </div>
                    <h3 class="font-bold text-slate-800 text-base">Saluran Notifikasi</h3>
                </div>
                <p class="text-slate-500 text-xs leading-relaxed mb-4">
                    Aktifkan atau nonaktifkan kanal pengiriman pesan otomatis ke warga.
                </p>
            </div>
            <div class="space-y-2.5">
                <div class="flex items-center justify-between border border-slate-200 rounded-xl p-3 bg-white hover:bg-slate-50 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 text-slate-700">
                        <span class="material-symbols-outlined text-lg text-slate-500">mail</span>
                        <span class="text-xs font-bold">E-mail</span>
                    </div>
                    <span class="material-symbols-outlined {{ isset($notificationChannels['email']) && $notificationChannels['email'] ? 'text-emerald-600' : 'text-slate-300' }} font-bold text-xl select-none">
                        {{ isset($notificationChannels['email']) && $notificationChannels['email'] ? 'check_box' : 'check_box_outline_blank' }}
                    </span>
                </div>
                <div class="flex items-center justify-between border border-slate-200 rounded-xl p-3 bg-white hover:bg-slate-50 transition-colors cursor-pointer">
                    <div class="flex items-center gap-3 text-slate-700">
                        <span class="material-symbols-outlined text-lg text-slate-500">chat</span>
                        <span class="text-xs font-bold">WhatsApp</span>
                    </div>
                    <span class="material-symbols-outlined {{ isset($notificationChannels['whatsapp']) && $notificationChannels['whatsapp'] ? 'text-emerald-600' : 'text-emerald-600' }} font-bold text-xl select-none">
                        check_box
                    </span>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden mb-8">
        <div class="p-5 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <div>
                <h3 class="font-bold text-slate-800 text-base">Riwayat Perubahan Konfigurasi</h3>
                <p class="text-xs text-slate-500 mt-0.5">Lacak siapa yang melakukan perubahan dan kapan itu terjadi.</p>
            </div>
            <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 rounded-xl bg-white text-xs font-bold text-slate-700 hover:bg-slate-50 shadow-sm transition-all">
                <span class="material-symbols-outlined text-sm">filter_list</span>
                Filter Riwayat
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#E2ECE9]/50 text-slate-600 font-bold text-xs uppercase tracking-wider border-b border-slate-200">
                        <th class="p-4 pl-6">Tanggal & Waktu</th>
                        <th class="p-4">Administrator</th>
                        <th class="p-4">Parameter</th>
                        <th class="p-4">Nilai Lama</th>
                        <th class="p-4">Nilai Baru</th>
                        <th class="p-4 pr-6 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                    @if(isset($configHistories) && $configHistories->count() > 0)
                        @foreach($configHistories as $history)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="p-4 pl-6 text-slate-500">{{ $history->tanggal }}</td>
                            <td class="p-4">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-6 w-6 rounded-full {{ $history->admin_color ?? 'bg-emerald-100 text-emerald-800' }} flex items-center justify-center font-bold text-[10px] tracking-tighter">
                                        {{ $history->admin_initial }}
                                    </div>
                                    <span class="font-bold text-slate-900">{{ $history->admin_nama }}</span>
                                </div>
                            </td>
                            <td class="p-4 text-slate-600">{{ $history->parameter }}</td>
                            <td class="p-4 text-slate-400 font-mono">{{ $history->nilai_lama }}</td>
                            <td class="p-4 text-emerald-700 font-bold font-mono">{{ $history->nilai_baru }}</td>
                            <td class="p-4 pr-6 text-center">
                                <span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-md font-extrabold text-[10px] tracking-wide border border-emerald-100">
                                    {{ $history->status }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="p-4 pl-6 text-slate-500">24 Okt, 14:20</td>
                            <td class="p-4">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-6 w-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-[10px]">AJ</div>
                                    <span class="font-bold text-slate-900">Adi Jaya</span>
                                </div>
                            </td>
                            <td class="p-4 text-slate-600">Nilai Tukar Poin</td>
                            <td class="p-4 text-slate-400">Rp 80</td>
                            <td class="p-4 text-emerald-700 font-bold">Rp 100</td>
                            <td class="p-4 pr-6 text-center"><span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-md font-extrabold text-[10px] border border-emerald-100">BERHASIL</span></td>
                        </tr>
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="p-4 pl-6 text-slate-500">23 Okt, 09:15</td>
                            <td class="p-4">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-6 w-6 rounded-full bg-sky-100 text-sky-800 flex items-center justify-center font-bold text-[10px]">SR</div>
                                    <span class="font-bold text-slate-900">Siti Rahma</span>
                                </div>
                            </td>
                            <td class="p-4 text-slate-600">Batas Setoran Harian</td>
                            <td class="p-4 text-slate-400">30 kg</td>
                            <td class="p-4 text-emerald-700 font-bold">50 kg</td>
                            <td class="p-4 pr-6 text-center"><span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-md font-extrabold text-[10px] border border-emerald-100">BERHASIL</span></td>
                        </tr>
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="p-4 pl-6 text-slate-500">21 Okt, 23:45</td>
                            <td class="p-4">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-6 w-6 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-[10px]">AJ</div>
                                    <span class="font-bold text-slate-900">Adi Jaya</span>
                                </div>
                            </td>
                            <td class="p-4 text-slate-600">Interval Backup</td>
                            <td class="p-4 text-slate-400">Manual</td>
                            <td class="p-4 text-emerald-700 font-bold">Harian</td>
                            <td class="p-4 pr-6 text-center"><span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-md font-extrabold text-[10px] border border-emerald-100">BERHASIL</span></td>
                        </tr>
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="p-4 pl-6 text-slate-500">19 Okt, 10:10</td>
                            <td class="p-4">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-6 w-6 rounded-full bg-purple-100 text-purple-800 flex items-center justify-center font-bold text-[10px]">BM</div>
                                    <span class="font-bold text-slate-900">Budi M.</span>
                                </div>
                            </td>
                            <td class="p-4 text-slate-600">Kanal WhatsApp</td>
                            <td class="p-4 text-slate-400">Nonaktif</td>
                            <td class="p-4 text-emerald-700 font-bold">Aktif</td>
                            <td class="p-4 pr-6 text-center"><span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-md font-extrabold text-[10px] border border-emerald-100">BERHASIL</span></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="p-4 bg-slate-50/30 border-t border-slate-100 flex justify-center items-center gap-4 text-xs font-bold text-slate-500">
            <button class="p-1 hover:bg-slate-100 rounded-lg text-slate-400"><span class="material-symbols-outlined text-sm flex">chevron_left</span></button>
            <span>Halaman 1 dari 1</span>
            <button class="p-1 hover:bg-slate-100 rounded-lg text-slate-400"><span class="material-symbols-outlined text-sm flex">chevron_right</span></button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-emerald-50/60 border border-emerald-100 rounded-2xl p-5 flex gap-4 items-start shadow-sm">
            <div class="p-3 bg-emerald-700 text-white rounded-xl flex items-center justify-center shadow-md shadow-emerald-700/10">
                <span class="material-symbols-outlined text-xl">verified_user</span>
            </div>
            <div>
                <h4 class="font-extrabold text-slate-800 text-sm mb-1">Keamanan Role</h4>
                <p class="text-slate-600 text-xs leading-relaxed font-medium">
                    Admin Sistem memiliki akses penuh ke konfigurasi global, sementara Admin RT hanya dapat mengelola warga di wilayah cakupan mereka.
                </p>
            </div>
        </div>

        <div class="bg-blue-50/50 border border-blue-100 rounded-2xl p-5 flex gap-4 items-start shadow-sm">
            <div class="p-3 bg-blue-600 text-white rounded-xl flex items-center justify-center shadow-md shadow-blue-600/10">
                <span class="material-symbols-outlined text-xl">analytics</span>
            </div>
            <div>
                <h4 class="font-extrabold text-slate-800 text-sm mb-1">Audit Log</h4>
                <p class="text-slate-600 text-xs leading-relaxed font-medium">
                    Setiap perubahan data pengguna (tambah, edit, hapus) dicatat dalam sistem monitoring untuk transparansi pengelolaan data.
                </p>
            </div>
        </div>
    </div>

</div>
@endsection