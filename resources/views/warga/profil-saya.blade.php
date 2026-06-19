<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PointWaste - Profil Pengguna</title>
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

  @yield('content')

  <main class="flex-1 pl-64 min-h-screen">
    
    <header class="flex justify-between items-center px-8 py-6 bg-white border-b border-slate-100">
      <div class="text-base font-bold text-pointwaste-primary">
        Profil Pengguna
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

    <div class="p-8 grid grid-cols-1 lg:grid-cols-12 gap-6 items-start max-w-6xl">
      
      <div class="lg:col-span-8 space-y-6">
        
        <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 flex items-center space-x-5">
          <div class="relative w-20 h-20 rounded-full bg-slate-100 overflow-hidden group flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Avatar Profil" class="w-full h-full object-cover">
            <button class="absolute bottom-0 right-0 left-0 bg-black/40 text-white text-[10px] text-center py-0.5 opacity-0 group-hover:opacity-100 transition-opacity">Ubah</button>
          </div>
          <div>
            <h2 class="text-lg font-bold text-slate-800">Arafly ramdani</h2>
            <p class="text-xs text-slate-400 mt-1">Warga RT 04 • Bergabung Januari 2023</p>
            <button type="button" class="mt-2 text-[11px] font-semibold border border-slate-200 text-slate-600 px-3 py-1.5 rounded-lg hover:bg-slate-50 transition-colors">Ubah Foto Profil</button>
          </div>
        </div>

        <form class="space-y-6">
          
          <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
            <h3 class="text-sm font-bold text-slate-800 border-b border-slate-50 pb-2">Informasi Pribadi</h3>
            
            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Nama Lengkap</label>
              <input type="text" value="Arafly ramdani" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
            </div>

            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Nomor HP</label>
              <input type="text" value="0812-3456-7890" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
            </div>

            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Alamat Lengkap</label>
              <textarea rows="2" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary resize-none">Jl. Hijau Lestari No. 42, RT 04/RW 02, Kelurahan Pondok Gede</textarea>
            </div>
          </div>

          <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
            <h3 class="text-sm font-bold text-slate-800 border-b border-slate-50 pb-2">Keamanan Akun</h3>
            
            <div class="flex justify-between items-center bg-[#EEF2F6] rounded-xl px-4 py-3.5">
              <div class="space-y-0.5">
                <span class="block text-[10px] text-slate-400 font-medium">Email</span>
                <span class="text-xs font-medium text-slate-700">Araflyramdani@email.com</span>
              </div>
              <button type="button" class="text-[11px] font-bold text-sky-700 hover:underline">Ubah Email</button>
            </div>

            <div class="flex justify-between items-center bg-[#EEF2F6] rounded-xl px-4 py-3.5">
              <div class="space-y-0.5">
                <span class="block text-[10px] text-slate-400 font-medium">Kata Sandi</span>
                <span class="text-xs font-medium text-slate-700 tracking-widest">••••••••••••</span>
              </div>
              <button type="button" class="text-[11px] font-bold text-sky-700 hover:underline">Ubah Kata Sandi</button>
            </div>
          </div>

          <div class="flex items-center space-x-3">
            <button type="submit" class="flex-1 bg-[#064E3B] hover:bg-emerald-950 text-white font-semibold text-xs py-3.5 rounded-xl transition-colors text-center">
              Simpan Perubahan
            </button>
            <button type="button" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold text-xs py-3.5 rounded-xl transition-colors px-6">
              Batal
            </button>
          </div>

        </form>
      </div>

      <div class="lg:col-span-4 bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
        <h3 class="text-sm font-bold text-slate-800 border-b border-slate-50 pb-2">Detail Lingkungan</h3>
        
        <div class="flex justify-between items-center text-xs">
          <span class="text-slate-400">Wilayah</span>
          <span class="font-bold text-slate-800">RT 04 / RW 02</span>
        </div>

        <div class="flex justify-between items-center text-xs">
          <span class="text-slate-400">ID Warga</span>
          <span class="font-bold text-slate-800">PW-2023-0488</span>
        </div>

        <div class="flex justify-between items-center text-xs">
          <span class="text-slate-400">Status Akun</span>
          <span class="bg-emerald-100 text-emerald-700 text-[9px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wide">Aktif</span>
        </div>

        <div class="space-y-1.5 pt-2">
          <span class="text-[11px] font-medium text-slate-400">Foto Wilayah RT 04</span>
          <div class="w-full h-40 rounded-xl bg-slate-100 overflow-hidden border border-slate-100 shadow-inner">
            <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=400&q=80" alt="Foto Wilayah Real Estate" class="w-full h-full object-cover">
          </div>
        </div>
      </div>

    </div>
  </main>

</body>
</html>