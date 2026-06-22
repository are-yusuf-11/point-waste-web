<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PointWaste - Dashboard</title>
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
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm border-l-4 border-l-pointwaste-primary">
          <p class="text-xs font-medium text-slate-400">Saldo Poin Saat Ini</p>
          <div class="flex items-baseline space-x-1 mt-2">
            <span class="text-3xl font-bold text-slate-800">{{ number_format($saldoPoin, 0, ',', '.') }}</span>
            <span class="text-xs font-semibold text-slate-400">Poin</span>
          </div>
          <div class="flex items-center text-[11px] text-pointwaste-primary font-medium mt-3">
            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            <span>+{{ number_format($poinMingguIni, 0, ',', '.') }} poin minggu ini</span>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm border-l-4 border-l-sky-800">
          <p class="text-xs font-medium text-slate-400">Status Iuran Bulanan</p>
          <div class="flex items-center space-x-3 mt-2">
            <span class="text-2xl font-bold text-slate-800">
              {{ $iuranTerbaru ? $iuranTerbaru->status : 'Tidak Ada Tagihan' }}
            </span>
            @if($iuranTerbaru)
              <span class="text-white text-[9px] font-bold px-2 py-0.5 rounded uppercase tracking-wider {{ $iuranTerbaru->status === 'Lunas' ? 'bg-green-600' : 'bg-red-500' }}">
                {{ $iuranTerbaru->periode }}
              </span>
            @endif
          </div>
          <p class="text-[11px] text-slate-400 mt-4">
            {{ $iuranTerbaru && $iuranTerbaru->status !== 'Lunas' ? 'Silakan lakukan penyelesaian iuran.' : 'Semua tagihan terpenuhi.' }}
          </p>
        </div>

        <div class="bg-white p-6 rounded-xl border border-slate-100 shadow-sm border-l-4 border-l-emerald-800">
          <p class="text-xs font-medium text-slate-400">Total Setoran Sampah</p>
          <div class="flex items-baseline space-x-1 mt-2">
            <span class="text-3xl font-bold text-slate-800">{{ number_format($totalBeratSampah, 1, ',', '.') }}</span>
            <span class="text-xs font-semibold text-slate-400">Kg</span>
          </div>
          <p class="text-[11px] text-slate-400 mt-4">Setara mitigasi {{ number_format($mitigasiCO2, 2, ',', '.') }}kg CO2</p>
        </div>


            <section class="bg-surface rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
                <h3 class="text-base font-semibold text-on-surface tracking-tight">Notifikasi Terbaru</h3>
                
                <div class="space-y-4">
                    @foreach($notifikasiterbaru as $notif)
                    <div class="p-4 rounded-xl border flex gap-4 items-start {{ $notif['tipe'] == 'warning' ? 'bg-amber-50/40 border-amber-100' : 'bg-blue-50/40 border-blue-100' }}">
                        <span class="material-symbols-outlined text-[18px] mt-[2px] {{ $notif['tipe'] == 'warning' ? 'text-amber-600' : 'text-blue-600' }}">info</span>
                        <div class="space-y-0.5 flex-1">
                            <h4 class="text-sm font-semibold text-on-surface leading-snug">{{ $notif['judul'] }}</h4>
                            <p class="text-xs text-gray-500 leading-relaxed max-w-3xl">{{ $notif['pesan'] }}</p>
                            <span class="text-[10px] text-gray-400 block pt-1">{{ $notif['waktu'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

        </main>
    </div>

      </div>

      @if(count($notifikasi) > 0)
        <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
          <h3 class="text-base font-semibold text-slate-800">Notifikasi Terbaru</h3>
          
          <div class="space-y-3">
            @foreach($notifikasi as $notif)
              @php
                $isPending = Str::contains($notif['judul'], 'Menunggu') || Str::contains($notif['pesan'], 'Menunggu');
                
                $bgClass     = $isPending ? 'bg-amber-50' : 'bg-indigo-50';
                $borderClass = $isPending ? 'border-l-amber-500' : 'border-l-indigo-600';
                $iconBgClass = $isPending ? 'bg-amber-500' : 'bg-indigo-600';
              @endphp

              <div class="{{ $bgClass }} border-l-4 {{ $borderClass }} p-4 rounded-r-lg flex items-start space-x-3">
                <div class="{{ $iconBgClass }} text-white p-1 rounded-full mt-0.5 flex-shrink-0 flex items-center justify-center">
                  @if($isPending)
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  @else
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  @endif
                </div>
                
                <div class="space-y-1">
                  <h4 class="text-xs font-bold text-slate-800">{{ $notif['judul'] }}</h4>
                  <p class="text-xs text-slate-600 leading-relaxed">{{ $notif['pesan'] }}</p>
                  <span class="block text-[10px] text-slate-400 pt-1">Baru saja</span>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endif

    </div>
  </main>
  
  <x-alert />

 

</body>
</html>