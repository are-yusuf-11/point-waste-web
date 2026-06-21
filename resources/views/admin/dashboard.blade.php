<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>PointWaste - System Configuration</title>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
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
<body class="bg-surface text-gray-800">

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
        <img src="https://i.pravatar.cc/80?img=12" alt="Avatar Budi Santoso" class="w-10 h-10 rounded-full object-cover border border-gray-200" />
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
            <h3 class="font-bold text-gray-800 text-sm">Nilai Tukar Poin</h3>
          </div>
          <p class="text-xs text-gray-500 mb-4 leading-relaxed">Atur berapa nilai Rupiah yang didapatkan warga untuk setiap 1 poin sampah.</p>
          <label class="text-xs font-semibold text-gray-600 mb-1.5 block">1 Poin = ... Rupiah</label>
          <div class="flex items-center rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-primary/30 focus-within:border-primary">
            <span class="px-3 text-sm font-bold text-gray-600 bg-gray-50 border-r border-gray-300 py-2.5">Rp</span>
            <input type="number" value="0" class="w-full px-3 py-2.5 text-sm outline-none border-none" />
          </div>
        </div>

        <!-- Batas Setoran -->
        <div class="bg-white border border-gray-200 rounded-xl p-5">
          <div class="flex items-center gap-2.5 mb-2">
            <div class="w-9 h-9 rounded-lg bg-primary-soft flex items-center justify-center text-primary">
              <span class="material-symbols-outlined" style="font-size:18px;">scale</span>
            </div>
            <h3 class="font-bold text-gray-800 text-sm">Batas Setoran</h3>
          </div>
          <p class="text-xs text-gray-500 mb-4 leading-relaxed">Maksimal berat sampah yang dapat disetorkan per warga setiap harinya.</p>
          <label class="text-xs font-semibold text-gray-600 mb-1.5 block">Batas Harian (kg)</label>
          <div class="flex items-center rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-primary/30 focus-within:border-primary">
            <input type="number" value="0" class="w-full px-3 py-2.5 text-sm outline-none border-none" />
            <span class="px-3 text-sm font-bold text-gray-600 bg-gray-50 border-l border-gray-300 py-2.5">kg</span>
          </div>
        </div>

        <!-- Saluran Notifikasi -->
        <div class="bg-white border border-gray-200 rounded-xl p-5">
          <div class="flex items-center gap-2.5 mb-2">
            <div class="w-9 h-9 rounded-lg bg-primary-soft flex items-center justify-center text-primary">
              <span class="material-symbols-outlined" style="font-size:18px;">campaign</span>
            </div>
            <h3 class="font-bold text-gray-800 text-sm">Saluran Notifikasi</h3>
          </div>
          <p class="text-xs text-gray-500 mb-4 leading-relaxed">Aktifkan atau nonaktifkan opsi pengiriman pesan otomatis ke warga.</p>
          <div class="space-y-2">
            <div class="flex items-center justify-between rounded-lg border border-gray-200 px-3 py-2.5">
              <div class="flex items-center gap-2 text-sm text-gray-700">
                <span class="material-symbols-outlined text-gray-400" style="font-size:18px;">mail</span>
                E-mail
              </div>
              <span class="w-9 h-5 rounded-full bg-primary-light relative inline-flex items-center px-0.5">
                <span class="w-4 h-4 rounded-full bg-white block ml-auto"></span>
              </span>
            </div>
            <div class="flex items-center justify-between rounded-lg border border-gray-200 px-3 py-2.5">
              <div class="flex items-center gap-2 text-sm text-gray-700">
                <span class="material-symbols-outlined text-gray-400" style="font-size:18px;">chat</span>
                WhatsApp
              </div>
              <span class="w-9 h-5 rounded-full bg-primary-light relative inline-flex items-center px-0.5">
                <span class="w-4 h-4 rounded-full bg-white block ml-auto"></span>
              </span>
            </div>
          </div>
        </div>
      </section>

      <!-- Riwayat Perubahan Konfigurasi -->
      <section class="bg-white border border-gray-200 rounded-xl mb-7">
        <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
          <div>
            <h3 class="font-bold text-gray-800 text-base">Riwayat Perubahan Konfigurasi</h3>
            <p class="text-xs text-gray-500 mt-0.5">Lacak siapa yang melakukan perubahan dan kapan itu terjadi</p>
          </div>
          <button class="flex items-center gap-1.5 text-sm font-semibold text-gray-600 border border-gray-300 rounded-lg px-3.5 py-2 hover:bg-gray-50 transition-colors">
            <span class="material-symbols-outlined" style="font-size:16px;">filter_list</span>
            Filter Riwayat
          </button>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-left text-sm">
            <thead>
              <tr class="text-[11px] uppercase tracking-wide text-gray-400 font-bold">
                <th class="px-6 py-3">Tanggal &amp; Waktu</th>
                <th class="px-6 py-3">Administrator</th>
                <th class="px-6 py-3">Parameter</th>
                <th class="px-6 py-3">Nilai Lama</th>
                <th class="px-6 py-3">Nilai Baru</th>
                <th class="px-6 py-3">Status</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">

              <tr class="hover:bg-gray-50/60 transition-colors">
                <td class="px-6 py-3.5 text-gray-500">24 Okt, 14:20</td>
                <td class="px-6 py-3.5">
                  <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-green-100 text-green-700 text-[10px] font-bold flex items-center justify-center">AJ</span>
                    <span class="font-medium text-gray-700">Adi Jaya</span>
                  </div>
                </td>
                <td class="px-6 py-3.5 text-gray-600">Nilai Tukar Poin</td>
                <td class="px-6 py-3.5 text-gray-400">Rp 80</td>
                <td class="px-6 py-3.5 font-semibold text-gray-800">Rp 100</td>
                <td class="px-6 py-3.5">
                  <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-success-bg text-success-text text-[11px] font-bold uppercase">Berhasil</span>
                </td>
              </tr>

              <tr class="hover:bg-gray-50/60 transition-colors">
                <td class="px-6 py-3.5 text-gray-500">23 Okt, 09:15</td>
                <td class="px-6 py-3.5">
                  <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-700 text-[10px] font-bold flex items-center justify-center">SR</span>
                    <span class="font-medium text-gray-700">Siti Rahma</span>
                  </div>
                </td>
                <td class="px-6 py-3.5 text-gray-600">Batas Setoran Harian</td>
                <td class="px-6 py-3.5 text-gray-400">30 kg</td>
                <td class="px-6 py-3.5 font-semibold text-gray-800">50 kg</td>
                <td class="px-6 py-3.5">
                  <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-success-bg text-success-text text-[11px] font-bold uppercase">Berhasil</span>
                </td>
              </tr>

              <tr class="hover:bg-gray-50/60 transition-colors">
                <td class="px-6 py-3.5 text-gray-500">21 Okt, 23:45</td>
                <td class="px-6 py-3.5">
                  <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-green-100 text-green-700 text-[10px] font-bold flex items-center justify-center">AJ</span>
                    <span class="font-medium text-gray-700">Adi Jaya</span>
                  </div>
                </td>
                <td class="px-6 py-3.5 text-gray-600">Interval Backup</td>
                <td class="px-6 py-3.5 text-gray-400">Manual</td>
                <td class="px-6 py-3.5 font-semibold text-gray-800">Harian</td>
                <td class="px-6 py-3.5">
                  <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-success-bg text-success-text text-[11px] font-bold uppercase">Berhasil</span>
                </td>
              </tr>

              <tr class="hover:bg-gray-50/60 transition-colors">
                <td class="px-6 py-3.5 text-gray-500">19 Okt, 10:10</td>
                <td class="px-6 py-3.5">
                  <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-purple-100 text-purple-700 text-[10px] font-bold flex items-center justify-center">BM</span>
                    <span class="font-medium text-gray-700">Budi M.</span>
                  </div>
                </td>
                <td class="px-6 py-3.5 text-gray-600">Kanal WhatsApp</td>
                <td class="px-6 py-3.5 text-gray-400">Nonaktif</td>
                <td class="px-6 py-3.5 font-semibold text-gray-800">Aktif</td>
                <td class="px-6 py-3.5">
                  <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-success-bg text-success-text text-[11px] font-bold uppercase">Berhasil</span>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="flex items-center justify-between px-6 py-4 border-t border-gray-100">
          <span class="text-xs text-gray-400">Halaman 1 dari 1</span>
          <div class="flex items-center gap-1">
            <button class="w-7 h-7 flex items-center justify-center rounded-md text-gray-300 cursor-not-allowed">
              <span class="material-symbols-outlined" style="font-size:16px;">chevron_left</span>
            </button>
            <button class="w-7 h-7 flex items-center justify-center rounded-md text-gray-300 cursor-not-allowed">
              <span class="material-symbols-outlined" style="font-size:16px;">chevron_right</span>
            </button>
          </div>
        </div>
      </section>

      <!-- Bottom info cards -->
      <section class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="bg-primary-soft border border-green-100 rounded-xl p-5 flex gap-4">
          <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center text-primary shrink-0">
            <span class="material-symbols-outlined">shield</span>
          </div>
          <div>
            <h4 class="font-bold text-gray-800 text-sm mb-1">Keamanan Role</h4>
            <p class="text-xs text-gray-600 leading-relaxed">Admin Sistem memiliki akses penuh ke konfigurasi global, sementara Admin RT hanya dapat mengelola warga di wilayah cakupannya.</p>
          </div>
        </div>
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-5 flex gap-4">
          <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center text-blue-600 shrink-0">
            <span class="material-symbols-outlined">fact_check</span>
          </div>
          <div>
            <h4 class="font-bold text-gray-800 text-sm mb-1">Audit Log</h4>
            <p class="text-xs text-gray-600 leading-relaxed">Setiap perubahan data pengguna (tambah, edit, hapus) dicatat dalam sistem monitoring untuk transparansi pengelolaan.</p>
          </div>
        </div>
      </section>

    </main>
  </div>
</div>

</body>
</html>