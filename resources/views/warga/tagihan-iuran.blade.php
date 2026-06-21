<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PointWaste - Tagihan Iuran</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
        <h1 class="text-2xl font-bold text-[#15803D]">Tagihan Iuran</h1>
        <p class="text-xs text-slate-500 mt-1">Kelola semua tagihan iuran RT Anda dan riwayat pembayaran.</p>
      </div>

      @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg text-sm">
          {{ session('success') }}
        </div>
      @endif

      @if(session('error'))
        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg text-sm">
          {{ session('error') }}
        </div>
      @endif

      <!-- Tagihan Belum Lunas -->
      @if($iuranBelumLunas->count() > 0)
        <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6">
          <h3 class="text-base font-semibold text-slate-800 mb-4">Tagihan Belum Lunas</h3>

          <div class="space-y-4">
            @foreach($iuranBelumLunas as $tagihan)
              <div class="flex justify-between items-start p-4 bg-red-50 border border-red-200 rounded-lg">
                <div class="flex-1">
                  <p class="font-semibold text-slate-800">{{ $tagihan->judul ?? 'Iuran RT' }}</p>
                  <p class="text-xs text-slate-500 mt-1">Periode: {{ $tagihan->periode }}</p>
                  @if($tagihan->deskripsi)
                    <p class="text-xs text-slate-600 mt-1">{{ $tagihan->deskripsi }}</p>
                  @endif
                </div>
                <div class="text-right ml-4">
                  <p class="text-sm font-bold text-red-600">Rp {{ number_format($tagihan->total_bayar, 0, ',', '.') }}</p>
                  <span class="inline-block text-[9px] font-bold text-red-700 bg-red-100 px-2 py-1 rounded mt-1">BELUM BAYAR</span>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endif

      <!-- Riwayat Tagihan -->
      <div class="bg-white rounded-xl border border-slate-100 shadow-sm overflow-hidden">

        <div class="p-5 border-b border-slate-100 flex flex-wrap gap-3 items-center justify-between">
          <h3 class="text-base font-semibold text-slate-800">Riwayat Tagihan</h3>
        </div>

        <div class="overflow-x-auto">
          @if($riwayatIuran->count() > 0)
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-[#EBF5EE] text-slate-600 text-[11px] uppercase tracking-wider font-semibold">
                  <th class="px-6 py-3.5">Periode</th>
                  <th class="px-6 py-3.5">Judul</th>
                  <th class="px-6 py-3.5">Nominal Iuran</th>
                  <th class="px-6 py-3.5">Diskon Poin</th>
                  <th class="px-6 py-3.5 text-right">Total Bayar</th>
                  <th class="px-6 py-3.5">Status</th>
                  <th class="px-6 py-3.5">Tanggal Bayar</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-100 text-xs text-slate-700">
                @foreach($riwayatIuran as $tagihan)
                  <tr class="hover:bg-slate-50/70 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $tagihan->periode }}</td>
                    <td class="px-6 py-4">
                      <p class="font-semibold text-slate-800">{{ $tagihan->judul ?? 'Iuran RT' }}</p>
                      @if($tagihan->deskripsi)
                        <p class="text-[10px] text-slate-500 mt-0.5">{{ Str::limit($tagihan->deskripsi, 50) }}</p>
                      @endif
                    </td>
                    <td class="px-6 py-4">Rp {{ number_format($tagihan->nominal_iuran, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                      @if($tagihan->diskon_poin > 0)
                        <span class="text-green-600 font-semibold">-Rp {{ number_format($tagihan->diskon_poin, 0, ',', '.') }}</span>
                      @else
                        <span class="text-slate-400">-</span>
                      @endif
                    </td>
                    <td class="px-6 py-4 text-right font-bold">Rp {{ number_format($tagihan->total_bayar, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                      @if($tagihan->status_bayar === 'Sudah Bayar' || $tagihan->status_bayar === 'Lunas')
                        <span class="bg-green-100 text-green-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Lunas</span>
                      @else
                        <span class="bg-red-100 text-red-700 text-[9px] font-bold px-2 py-0.5 rounded-md uppercase tracking-wide">Belum Bayar</span>
                      @endif
                    </td>
                    <td class="px-6 py-4 text-slate-600">
                      @if($tagihan->tanggal_bayar)
                        {{ $tagihan->tanggal_bayar->translatedFormat('d M Y') }}
                      @else
                        <span class="text-slate-400">-</span>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            <!-- Pagination -->
            @if($riwayatIuran->hasPages())
              <div class="p-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400 font-medium">
                <div>
                  Menampilkan {{ $riwayatIuran->firstItem() }}-{{ $riwayatIuran->lastItem() }} dari {{ $riwayatIuran->total() }} tagihan
                </div>
                <div>
                  {{ $riwayatIuran->links() }}
                </div>
              </div>
            @endif
          @else
            <div class="p-8 text-center text-slate-500">
              <p class="text-sm">Belum ada riwayat tagihan iuran</p>
            </div>
          @endif
        </div>

      </div>

    </div>
  </main>

</body>
</html>