<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PointWaste - Mutasi Poin</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            pointwaste: {
              primary: '#15803D',
              secondary: '#22C55E',
              white: '#FFFFFF',
              dark: '#1F2937',
              bg: '#F8FAFC'
            }
          },
          fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
          }
        }
      }
    }
  </script>
</head>

<body class="bg-[#fdfdfd] text-on-surface font-sans min-h-screen flex p-4 gap-4" 
      x-data="{ 
        kategoriFilter: 'semua',
        // Data dilempar langsung secara aman dari Controller Backend berupa JSON Array
        transaksi: {{ json_encode($transaksi ?? [
            ['tgl' => '25 Juni 2026, 10:15', 'judul' => 'Reward Setoran Sampah #2', 'detail' => 'Setoran Plastik PET & Kardus (3.5 Kg)', 'kat' => 'setoran', 'poin' => '+450', 'tipe' => 'plus'],
            ['tgl' => '20 Juni 2026, 08:00', 'judul' => 'Pembayaran Iuran RT Juni 2026', 'detail' => 'Potongan otomatis iuran bulanan', 'kat' => 'iuran', 'poin' => '-850', 'tipe' => 'minus'],
            ['tgl' => '18 Juni 2026, 09:40', 'judul' => 'Reward Setoran Sampah #1', 'detail' => 'Logam (Aluminium) & Kaca (2.0 Kg)', 'kat' => 'setoran', 'poin' => '+820', 'tipe' => 'plus'],
            ['tgl' => '15 Juni 2026, 11:20', 'judul' => 'Bonus Program Pilih Sampah Mandiri', 'detail' => 'Bonus insentif keaktifan 3 bulan berturut-turut', 'kat' => 'bonus', 'poin' => '+1.000', 'tipe' => 'plus']
        ]) }},
        get filteredTransaksi() {
            if (this.kategoriFilter === 'semua') return this.transaksi;
            return this.transaksi.filter(t => t.kat === this.kategoriFilter);
        }
      }">

    <aside class="w-[260px] bg-surface border border-gray-100 flex flex-col justify-between p-6 h-[calc(100vh-2rem)] sticky top-4 z-30 rounded-2xl shadow-sm">
        <div class="space-y-10">
            <div class="flex items-center gap-3 px-2 py-2">
                <span class="material-symbols-outlined text-primary text-[32px]">recycling</span>
                <span class="font-bold text-xl text-primary tracking-tight">PointWaste</span>
            </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <div class="bg-white p-5 rounded-xl border border-slate-100 shadow-sm relative overflow-hidden">
          <p class="text-[11px] font-medium text-slate-400">Total Poin Saat Ini</p>
          <p class="text-2xl font-bold text-slate-800 mt-1">12.450</p>
          <span class="inline-flex items-center text-[9px] font-bold text-[#15803D] bg-emerald-50 px-2 py-0.5 rounded-full mt-3">
            <svg class="w-2.5 h-2.5 mr-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            +12% dari bulan lalu
          </span>
          <div class="absolute right-4 bottom-2 opacity-5 text-slate-400">
            <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M21 18V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H19C20.1 3 21 3.9 21 5V6H12C10.9 6 10 6.9 10 8V16C10 17.1 10.9 18 12 18H21ZM12 16H22V8H12V16ZM16 13.5C15.17 13.5 14.5 12.83 14.5 12C14.5 11.17 15.17 10.5 16 10.5C16.83 10.5 17.5 11.17 17.5 12C17.5 12.83 16.83 13.5 16 13.5Z"/></svg>
          </div>
        </div>

        <div class="bg-white p-5 rounded-xl border border-slate-100 shadow-sm">
          <div class="flex items-center space-x-1.5">
            <div class="w-1.5 h-3 bg-emerald-600 rounded-full"></div>
            <p class="text-[11px] font-medium text-slate-400">Poin Diperoleh (Bulan Ini)</p>
          </div>
          <p class="text-2xl font-bold text-slate-800 mt-1">+2.840</p>
          <p class="text-[10px] text-slate-400 mt-4">Dari 14 setoran sampah anorganik</p>
        </div>

        <div class="bg-white p-5 rounded-xl border border-slate-100 shadow-sm">
          <div class="flex items-center space-x-1.5">
            <div class="w-1.5 h-3 bg-red-500 rounded-full"></div>
            <p class="text-[11px] font-medium text-slate-400">Poin Digunakan (Bulan Ini)</p>
          </div>
          <p class="text-2xl font-bold text-slate-800 mt-1">-850</p>
          <p class="text-[10px] text-slate-400 mt-4">Digunakan untuk iuran RT & voucher</p>
        </div>

                <div class="bg-surface p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3 relative overflow-hidden before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1.5 before:bg-blue-500">
                    <span class="text-xs font-medium text-gray-400 block tracking-wide">Poin Diperoleh ({{ $bulanSekarang ?? 'Juni' }})</span>
                    <div class="flex items-baseline gap-1.5">
                        <span class="text-3xl font-bold text-on-surface">+{{ number_format($poinMasuk ?? 2270, 0, ',', '.') }}</span>
                    </div>
                    <div class="text-xs text-gray-400 font-medium">Dari {{ $totalAktivitasMasuk ?? 3 }} aktivitas masuk</div>
                </div>

      <div class="bg-white rounded-xl border border-slate-100 shadow-sm overflow-hidden">
        
        <div class="p-5 border-b border-slate-100 flex flex-wrap gap-3 items-center justify-between">
          <div class="flex flex-wrap gap-3 items-center">
            <button class="inline-flex items-center space-x-2 bg-white border border-slate-200 text-slate-600 px-4 py-2 rounded-xl text-xs font-medium hover:bg-slate-50 transition-colors">
              <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              <span>01 Mei 2024 - 31 Mei 2024</span>
            </button>

            <div class="relative">
              <select class="bg-white border border-slate-200 text-slate-600 pl-4 pr-8 py-2 rounded-xl text-xs font-medium appearance-none focus:outline-none focus:ring-1 focus:ring-pointwaste-primary cursor-pointer">
                <option>Semua Kategori</option>
                <option>Setoran</option>
                <option>Tukar Poin</option>
                <option>Iuran</option>
                <option>Bonus</option>
              </select>
              <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-slate-400">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
              </div>
            </div>
          </div>

          <button class="inline-flex items-center space-x-1.5 border border-[#15803D] text-[#15803D] hover:bg-emerald-50 px-4 py-2 rounded-xl text-xs font-semibold transition-colors">
            <span>▲</span>
            <span>Ekspor Laporan</span>
          </button>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-[#EBF5EE] text-slate-600 text-[11px] uppercase tracking-wider font-semibold">
                <th class="px-6 py-3.5">Tanggal</th>
                <th class="px-6 py-3.5">Keterangan</th>
                <th class="px-6 py-3.5">Kategori</th>
                <th class="px-6 py-3.5 text-right">Jumlah (Poin)</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-xs text-slate-700">
              
              <tr class="hover:bg-slate-50/70 transition-colors">
                <td class="px-6 py-4 text-slate-400">28 Mei 2024, 10:15</td>
                <td class="px-6 py-4">
                  <p class="font-bold text-slate-800">Reward Setoran Anorganik #2204</p>
                  <p class="text-[10px] text-slate-400 mt-0.5">Setoran Botol Plastik PET & Kardus (4.5kg)</p>
                </td>
                <td class="px-6 py-4">
                  <span class="bg-emerald-100 text-emerald-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Setoran</span>
                </td>
                <td class="px-6 py-4 text-right font-bold text-emerald-600">+450</td>
              </tr>

              <tr class="hover:bg-slate-50/70 transition-colors">
                <td class="px-6 py-4 text-slate-400">25 Mei 2024, 14:20</td>
                <td class="px-6 py-4">
                  <p class="font-bold text-slate-800">Penukaran Voucher Belanja</p>
                  <p class="text-[10px] text-slate-400 mt-0.5">Voucher Alfamart Rp 25.000</p>
                </td>
                <td class="px-6 py-4">
                  <span class="bg-sky-100 text-sky-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Tukar Poin</span>
                </td>
                <td class="px-6 py-4 text-right font-bold text-red-500">-500</td>
              </tr>

              <tr class="hover:bg-slate-50/70 transition-colors">
                <td class="px-6 py-4 text-slate-400">20 Mei 2024, 08:00</td>
                <td class="px-6 py-4">
                  <p class="font-bold text-slate-800">Pembayaran Iuran RT Mei 2024</p>
                  <p class="text-[10px] text-slate-400 mt-0.5">Auto-debet iuran warga RT 04</p>
                </td>
                <td class="px-6 py-4">
                  <span class="bg-indigo-100 text-indigo-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Iuran</span>
                </td>
                <td class="px-6 py-4 text-right font-bold text-red-500">-350</td>
              </tr>

              <tr class="hover:bg-slate-50/70 transition-colors">
                <td class="px-6 py-4 text-slate-400">18 Mei 2024, 09:45</td>
                <td class="px-6 py-4">
                  <p class="font-bold text-slate-800">Reward Setoran Anorganik #2190</p>
                  <p class="text-[10px] text-slate-400 mt-0.5">Logam Aluminium & Kaca (3.1kg)</p>
                </td>
                <td class="px-6 py-4">
                  <span class="bg-emerald-100 text-emerald-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Setoran</span>
                </td>
                <td class="px-6 py-4 text-right font-bold text-emerald-600">+620</td>
              </tr>

              <tr class="hover:bg-slate-50/70 transition-colors">
                <td class="px-6 py-4 text-slate-400">15 Mei 2024, 11:30</td>
                <td class="px-6 py-4">
                  <p class="font-bold text-slate-800">Bonus Program Pilah Sampah Mandiri</p>
                  <p class="text-[10px] text-slate-400 mt-0.5">Bonus konsistensi 3 bulan berturut-turut</p>
                </td>
                <td class="px-6 py-4">
                  <span class="bg-light text-emerald-600 bg-emerald-50 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Bonus</span>
                </td>
                <td class="px-6 py-4 text-right font-bold text-emerald-600">+1.000</td>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="p-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400 font-medium">
          <div>
            Menampilkan 1-5 dari 24 transaksi
          </div>
          <div class="flex items-center space-x-1">
            <button class="p-1 px-2 rounded-md hover:bg-slate-50 text-slate-300">‹</button>
            <button class="w-6 h-6 bg-[#15803D] text-white rounded font-bold">1</button>
            <button class="w-6 h-6 hover:bg-slate-100 text-slate-600 rounded">2</button>
            <button class="w-6 h-6 hover:bg-slate-100 text-slate-600 rounded">3</button>
            <span class="px-1 text-slate-300">...</span>
            <button class="w-6 h-6 hover:bg-slate-100 text-slate-600 rounded">5</button>
            <button class="p-1 px-2 rounded-md hover:bg-slate-50 text-slate-600">›</button>
          </div>
        </div>

      </div>

    </div>

</body>
</html>