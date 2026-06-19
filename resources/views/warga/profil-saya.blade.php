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

  <main class="flex-1 pl-64 min-h-screen">
    
    <x-header />

    <div class="p-8 grid grid-cols-1 lg:grid-cols-12 gap-6 items-start max-w-6xl">
      
      <div class="lg:col-span-8 space-y-6">
        
        @if(session('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl text-xs">
              {{ session('success') }}
          </div>
        @endif

        @if(session('error'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl text-xs">
              {{ session('error') }}
          </div>
        @endif

        <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 flex items-center space-x-5">
          <div class="relative w-20 h-20 rounded-full bg-slate-100 overflow-hidden group flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Avatar Profil" class="w-full h-full object-cover">
          </div>
          <div>
            <h2 class="text-lg font-bold text-slate-800">{{ $user->nama }}</h2>
            <p class="text-xs text-slate-400 mt-1">Anggota Lingkungan Aktif • ID: PW-{{ $user->id_user }}</p>
          </div>
        </div>

        <form action="{{ route('warga.profil.update') }}" method="POST" class="space-y-6">
          @csrf
          @method('PUT')
          
          <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
            <h3 class="text-sm font-bold text-slate-800 border-b border-slate-50 pb-2">Informasi Pribadi</h3>
            
            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Nama Lengkap</label>
              <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
              @error('nama') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Email Utama</label>
              <input type="email" name="email" value="{{ old('email', $user->email) }}" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
              @error('email') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Nomor HP</label>
              <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
              @error('no_hp') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Pilih Wilayah RT</label>
              <select name="id_rt" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
                  <option value="">-- Pilih RT --</option>
                  @foreach($daftarRT as $rt)
                      <option value="{{ $rt->id_rt }}" {{ old('id_rt', $user->id_rt) == $rt->id_rt ? 'selected' : '' }}>
                          {{ $rt->nama_rt ?? 'RT '.$rt->id_rt }}
                      </option>
                  @endforeach
              </select>
              @error('id_rt') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Alamat Lengkap</label>
              <textarea name="alamat" rows="2" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary resize-none">{{ old('alamat', $user->alamat) }}</textarea>
              @error('alamat') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
            </div>
          </div>

          <div class="flex items-center space-x-3">
            <button type="submit" class="flex-1 bg-[#064E3B] hover:bg-emerald-950 text-white font-semibold text-xs py-3.5 rounded-xl transition-colors text-center">
              Simpan Perubahan Profil
            </button>
          </div>
        </form>

        <form action="{{ route('warga.profil.password') }}" method="POST" class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
          @csrf
          @method('PUT')
          
          <h3 class="text-sm font-bold text-slate-800 border-b border-slate-50 pb-2">Ubah Kata Sandi</h3>
          
          <div class="space-y-1.5">
            <label class="text-[11px] font-medium text-slate-400">Kata Sandi Saat Ini</label>
            <input type="password" name="current_password" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
            @error('current_password') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
          </div>

          <div class="space-y-1.5">
            <label class="text-[11px] font-medium text-slate-400">Kata Sandi Baru</label>
            <input type="password" name="password" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
            @error('password') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
          </div>

          <div class="space-y-1.5">
            <label class="text-[11px] font-medium text-slate-400">Konfirmasi Kata Sandi Baru</label>
            <input type="password" name="password_confirmation" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:outline-none focus:ring-1 focus:ring-pointwaste-primary">
          </div>

          <button type="submit" class="w-full bg-slate-800 hover:bg-slate-900 text-white font-semibold text-xs py-3.5 rounded-xl transition-colors text-center">
            Perbarui Kata Sandi
          </button>
        </form>

      </div>

      <div class="lg:col-span-4 bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
        <h3 class="text-sm font-bold text-slate-800 border-b border-slate-50 pb-2">Detail Lingkungan</h3>
        
        <div class="flex justify-between items-center text-xs">
          <span class="text-slate-400">Wilayah Terdaftar</span>
          <span class="font-bold text-slate-800">RT {{ $user->id_rt ?? '--' }}</span>
        </div>

        <div class="flex justify-between items-center text-xs">
          <span class="text-slate-400">Total Tabungan Poin</span>
          <span class="font-bold text-pointwaste-primary">{{ number_format($user->total_poin, 0, ',', '.') }} Poin</span>
        </div>

        <div class="flex justify-between items-center text-xs">
          <span class="text-slate-400">Status Sesi Akun</span>
          <span class="bg-emerald-100 text-emerald-700 text-[9px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wide">Aktif</span>
        </div>

        <div class="space-y-1.5 pt-2">
          <span class="text-[11px] font-medium text-slate-400">Visualisasi Wilayah Ekologis</span>
          <div class="w-full h-40 rounded-xl bg-slate-100 overflow-hidden border border-slate-100 shadow-inner">
            <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=400&q=80" alt="Foto Wilayah Real Estate" class="w-full h-full object-cover">
          </div>
        </div>
      </div>

    </div>
  </main>

</body>
</html>