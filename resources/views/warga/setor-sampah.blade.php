<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PointWaste - Setor Sampah</title>
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
      
      <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-8 max-w-5xl">
        
        <div class="flex items-center space-x-2 text-slate-800 font-semibold border-b border-slate-100 pb-4 mb-6">
          <svg class="w-5 h-5 text-pointwaste-primary" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <h2 class="text-base font-bold">Form Pengajuan Setor Sampah</h2>
        </div>

        <form class="space-y-6">
          
          <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <div class="md:col-span-5 space-y-2">
              <label class="block text-xs font-medium text-slate-500">Tanggal Setor</label>
              <div class="relative">
                <input type="date" class="w-full bg-[#EEF2F6] border-0 text-slate-600 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-pointwaste-primary appearance-none cursor-pointer">
              </div>
            </div>

            <div class="md:col-span-1"></div>

            <div class="md:col-span-6 space-y-2">
              <label class="block text-xs font-medium text-slate-500">Foto Sampah</label>
              <label class="flex flex-col items-center justify-center w-full h-24 border-2 border-dashed border-slate-200 rounded-xl bg-white hover:bg-slate-50 cursor-pointer transition-colors">
                <div class="flex flex-col items-center justify-center pt-2">
                  <svg class="w-6 h-6 text-slate-400 mb-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                  <p class="text-[10px] text-slate-400">Klik untuk unggah foto</p>
                </div>
                <input type="file" class="hidden" accept="image/*" />
              </label>
            </div>
          </div>

          <div class="space-y-3">
            <label class="block text-xs font-medium text-slate-500">Rincian Sampah</label>
            
            <div class="flex items-center space-x-3">
              <div class="flex-1">
                <select class="w-full bg-[#EEF2F6] border-0 text-slate-500 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-pointwaste-primary appearance-none cursor-pointer">
                  <option value="" disabled selected>Pilih Kategori Sampah</option>
                  <option value="plastik">Plastik (Botol / Ember)</option>
                  <option value="kertas">Kertas / Kardus</option>
                  <option value="logam">Logam / Besi</option>
                </select>
              </div>

              <div class="w-32 flex items-center bg-[#EEF2F6] rounded-xl px-3 py-3">
                <input type="number" placeholder="-" class="w-full bg-transparent border-0 text-center text-sm text-slate-700 focus:outline-none focus:ring-0">
                <span class="text-xs text-slate-400 ml-1 font-medium">kg</span>
              </div>

              <button type="button" class="p-2.5 text-red-500 hover:bg-red-50 rounded-xl transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
              </button>
            </div>

            <button type="button" class="inline-flex items-center text-xs font-bold text-pointwaste-primary hover:text-emerald-800 transition-colors pt-1">
              <span class="text-base mr-1">+</span> Tambah Kategori
            </button>
          </div>

          <div class="bg-[#EBF5EE] rounded-xl px-5 py-3.5 flex justify-between items-center">
            <span class="text-xs font-medium text-slate-500">Estimasi Poin</span>
            <span class="text-sm font-bold text-pointwaste-primary">0 Poin</span>
          </div>

          <div class="flex items-center space-x-3 pt-4">
            <button type="submit" class="flex-1 bg-[#064E3B] hover:bg-emerald-950 text-white font-semibold text-sm py-3 px-6 rounded-xl transition-colors text-center">
              Kirim Pengajuan
            </button>
            <button type="button" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold text-sm py-3 px-6 rounded-xl transition-colors min-w-[100px]">
              Batal
            </button>
          </div>

        </form>

      </div>

    </div>
  </main>

</body>
</html>