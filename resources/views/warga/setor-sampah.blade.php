<!DOCTYPE html>
<html lang="en">
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

  <aside class="w-64 bg-white border-r border-slate-200 flex flex-col justify-between fixed h-full z-10">
    <div>
      <div class="p-6">
        <h1 class="text-xl font-bold text-pointwaste-primary tracking-wide">PointWaste</h1>
      </div>

      <nav class="px-4 space-y-1">
        <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path></svg>
          <span>Dashboard</span>
        </a>

        <a href="#" class="flex items-center space-x-3 bg-emerald-50 text-pointwaste-primary px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
          <span>Setor Sampah</span>
        </a>

        <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
          <span>Mutasi Poin</span>
        </a>

        <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
          <span>Tagihan Iuran</span>
        </a>

        <a href="#" class="flex items-center space-x-3 text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
          <span>Profil</span>
        </a>
      </nav>
    </div>

    <div class="p-4 border-t border-slate-100 space-y-3">
      <div class="flex items-center space-x-3 px-2">
        <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden flex-shrink-0">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Avatar User" class="w-full h-full object-cover">
        </div>
        <div class="overflow-hidden">
          <h4 class="text-xs font-semibold text-pointwaste-dark truncate">Budi Santoso</h4>
          <p class="text-[10px] text-slate-400 truncate">WARGA RT 04</p>
        </div>
      </div>
      <button class="w-full bg-indigo-50 text-indigo-600 hover:bg-indigo-100 font-medium py-2 px-4 rounded-lg text-xs flex items-center justify-center space-x-2 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
        <span>Logout</span>
      </button>
    </div>
  </aside>

  <main class="flex-1 pl-64 min-h-screen">
    
    <header class="flex justify-between items-center px-8 py-6 bg-white border-b border-slate-100">
      <div class="flex items-center space-x-1 text-lg font-semibold text-slate-800">
        <span>Halo, Arafly ramdani</span>
        <span class="animate-bounce">👋</span>
      </div>
      <div class="flex items-center space-x-4 text-slate-500">
        <button class="p-2 hover:bg-slate-50 rounded-full relative transition-colors">
          <div class="absolute top-2 right-2.5 w-2 h-2 bg-red-500 rounded-full"></div>
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
        </button>
        <button class="p-2 hover:bg-slate-50 rounded-full transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
        </button>
      </div>
    </header>

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