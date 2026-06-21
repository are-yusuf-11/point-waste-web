<!DOCTYPE html>
<html lang="en">
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
<body class="font-poppins bg-pointwaste-bg text-pointwaste-dark min-h-screen flex">

  <x-sidebar />

  <main class="flex-1 pl-64 min-h-screen">
      
    <x-header />
    
    <div class="p-8 space-y-6">
      
      <div>
        <h1 class="text-2xl font-bold text-[#15803D]">Mutasi Poin</h1>
        <p class="text-xs text-slate-500 mt-1">Pantau riwayat perolehan dan penggunaan poin Anda dari aktivitas pengelolaan sampah mandiri.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <div class="bg-white p-5 rounded-xl border border-slate-100 shadow-sm relative overflow-hidden">
          <p class="text-[11px] font-medium text-slate-400">Total Poin Saat Ini</p>
          <p class="text-2xl font-bold text-slate-800 mt-1">{{ number_format($totalPoinSaatIni, 0, ',', '.') }}</p>
          <span class="inline-flex items-center text-[9px] font-bold text-[#15803D] bg-emerald-50 px-2 py-0.5 rounded-full mt-3">
            <svg class="w-2.5 h-2.5 mr-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            Aktif digunakan
          </span>
          <div class="absolute right-4 bottom-2 opacity-5 text-slate-400">
            <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M21 18V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H19C20.1 3 21 3.9 21 5V6H12C10.9 6 10 6.9 10 8V16C10 17.1 10.9 18 12 18H21ZM12 16H22V8H12V16ZM16 13.5C15.17 13.5 14.5 12.83 14.5 12C14.5 11.17 15.17 10.5 16 10.5C16.83 10.5 17.5 11.17 17.5 12C17.5 12.83 16.83 13.5 16 13.5Z"/></svg>
          </div>
        </div>

        <div class="bg-white p-5 rounded-xl border border-slate-100 shadow-sm">
          <div class="flex items-center space-x-1.5">
            <div class="w-1.5 h-3 bg-emerald-600 rounded-full"></div>
            <p class="text-[11px] font-medium text-slate-400">Poin Diperoleh ({{ Carbon\Carbon::now()->translatedFormat('F Y') }})</p>
          </div>
          <p class="text-2xl font-bold text-slate-800 mt-1">+{{ number_format($poinDiperoleh, 0, ',', '.') }}</p>
          <p class="text-[10px] text-slate-400 mt-4">Akumulasi tabungan masuk berjalan</p>
        </div>

        <div class="bg-white p-5 rounded-xl border border-slate-100 shadow-sm">
          <div class="flex items-center space-x-1.5">
            <div class="w-1.5 h-3 bg-red-500 rounded-full"></div>
            <p class="text-[11px] font-medium text-slate-400">Poin Digunakan ({{ Carbon\Carbon::now()->translatedFormat('F Y') }})</p>
          </div>
          <p class="text-2xl font-bold text-slate-800 mt-1">-{{ number_format($poinDigunakan, 0, ',', '.') }}</p>
          <p class="text-[10px] text-slate-400 mt-4">Digunakan untuk iuran lingkungan & klaim</p>
        </div>

      </div>

      <div class="bg-white rounded-xl border border-slate-100 shadow-sm overflow-hidden">
        
        <div class="p-5 border-b border-slate-100 flex flex-wrap gap-3 items-center justify-between">
          <div class="flex flex-wrap gap-3 items-center">
            <button class="inline-flex items-center space-x-2 bg-white border border-slate-200 text-slate-600 px-4 py-2 rounded-xl text-xs font-medium hover:bg-slate-50 transition-colors">
              <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              <span>Periode: Transaksi Keseluruhan</span>
            </button>

            <div class="relative">
              <select class="bg-white border border-slate-200 text-slate-600 pl-4 pr-8 py-2 rounded-xl text-xs font-medium appearance-none focus:outline-none focus:ring-1 focus:ring-pointwaste-primary cursor-pointer">
                <option value="">Semua Kategori</option>
                <option value="Setoran">Setoran</option>
                <option value="Tukar Poin">Tukar Poin</option>
                <option value="Iuran">Iuran</option>
                <option value="Bonus">Bonus</option>
              </select>
              <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-slate-400">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
              </div>
            </div>
          </div>

          <a href="{{ route('warga.mutasi-poin.cetak') }}" class="inline-flex items-center space-x-1.5 border border-[#15803D] text-[#15803D] hover:bg-emerald-50 px-4 py-2 rounded-xl text-xs font-semibold transition-colors">
            <span>▲</span>
            <span>Ekspor Laporan</span>
          </a>
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
              
              @forelse($riwayatMutasi as $mutasi)
                <tr class="hover:bg-slate-50/70 transition-colors">
                  <td class="px-6 py-4 text-slate-400">
                    {{ $mutasi->tanggal ? $mutasi->tanggal->translatedFormat('d M Y, H:i') : '-' }}
                  </td>
                  
                  <td class="px-6 py-4">
                    <p class="font-bold text-slate-800">{{ $mutasi->keterangan }}</p>
                    @if($mutasi->deskripsi_tambahan)
                      <p class="text-[10px] text-slate-400 mt-0.5">{{ $mutasi->deskripsi_tambahan }}</p>
                    @endif
                  </td>
                  
                  <td class="px-6 py-4">
                    @if(strtolower($mutasi->kategori) == 'setoran')
                      <span class="bg-emerald-100 text-emerald-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Setoran</span>
                    @elseif(strtolower($mutasi->kategori) == 'tukar poin')
                      <span class="bg-sky-100 text-sky-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Tukar Poin</span>
                    @elseif(strtolower($mutasi->kategori) == 'iuran')
                      <span class="bg-indigo-100 text-indigo-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Iuran</span>
                    @else
                      <span class="bg-emerald-50 text-emerald-600 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Bonus</span>
                    @endif
                  </td>
                  
                  <td class="px-6 py-4 text-right font-bold {{ $mutasi->jenis_transaksi == 'Masuk' ? 'text-emerald-600' : 'text-red-500' }}">
                    {{ $mutasi->jenis_transaksi == 'Masuk' ? '+' : '-' }}{{ number_format($mutasi->nominal_poin, 0, ',', '.') }}
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="px-6 py-8 text-center text-slate-400 font-medium">
                    Belum ditemukan riwayat mutasi tabungan poin pada akun Anda.
                  </td>
                </tr>
              @endforelse

            </tbody>
          </table>
        </div>

        @if($riwayatMutasi->hasPages())
          <div class="p-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400 font-medium">
            <div>
              Menampilkan {{ $riwayatMutasi->firstItem() }}-{{ $riwayatMutasi->lastItem() }} dari {{ $riwayatMutasi->total() }} transaksi
            </div>
            <div>
              {{ $riwayatMutasi->links() }}
            </div>
          </div>
        @endif

      </div>

    </div>
  </main>

</body>
</html>