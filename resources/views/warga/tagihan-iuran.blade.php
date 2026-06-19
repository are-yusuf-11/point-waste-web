<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PointWaste - Tagihan Iuran</title>
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

    <div class="p-8">
      
      <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-8 max-w-5xl flex flex-col justify-between min-h-[400px]">
        
        <div>
          <div class="flex justify-between items-center border-b border-slate-100 pb-4 mb-6">
            <h2 class="text-sm font-bold text-slate-800">Tagihan RT</h2>
            <div class="text-slate-400 p-1 bg-slate-50 rounded-md">
              <svg class="w-5 h-5 text-sky-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
            </div>
          </div>

          <div class="space-y-4 text-xs">
            <div class="flex justify-between items-center text-slate-500">
              <span>Periode</span>
              <span class="font-semibold uppercase tracking-wider text-slate-700">Juli 2026</span>
            </div>

            <div class="flex justify-between items-center text-slate-500">
              <span>Iuran Dapur</span>
              <span class="font-medium text-slate-700">Rp 50.000</span>
            </div>

            <div class="border-t border-slate-100 my-2"></div>

            <div class="flex justify-between items-center pt-2">
              <span class="font-medium text-slate-800 text-sm">Total Tagihan</span>
              <span class="text-base font-bold text-slate-900">Rp 50.000</span>
            </div>
          </div>
        </div>

        <div class="pt-8">
          <button type="button" class="w-full bg-[#EBF5EE] hover:bg-emerald-100 text-pointwaste-primary font-semibold text-xs py-3.5 px-6 rounded-xl transition-all flex items-center justify-center space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2zm0 0h4m-4 0H8m12 3a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V11z"></path>
            </svg>
            <span>Tukar Poin</span>
          </button>
        </div>

      </div>

    </div>
  </main>

</body>
</html>