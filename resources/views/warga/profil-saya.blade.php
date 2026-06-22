<!DOCTYPE html>
<html lang="id">

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
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .icon-unfilled {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    [x-cloak] {
      display: none !important;
    }
  </style>
</head>

<<<<<<< HEAD
<body class="bg-[#fdfdfd] text-on-surface font-sans min-h-screen flex p-4 gap-4"
  x-data="{ modalFoto: false, modalSandi: false }">

  <main class="flex-1 pl-64 min-h-screen flex flex-col">

    <x-header />

    <div class="p-8 w-full space-y-6">

      <h1 class="text-base font-bold text-slate-800">Profil Pengguna</h1>

      <x-alert />

      <form action="{{ route('warga.profil.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <input type="hidden" name="hapus_foto_flag" id="hapus-foto-flag" value="0">

        <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 flex items-center space-x-6">
          <div class="relative w-20 h-20 rounded-full bg-slate-100 border-2 border-emerald-800 flex-shrink-0">
            <img id="avatar-display" src="{{ $user->foto ? asset('storage/'.$user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80' }}" alt="Avatar" class="w-full h-full object-cover rounded-full">
            <button type="button" onclick="openPhotoModal()" class="absolute bottom-0 right-0 w-6 h-6 bg-[#004c22] text-white rounded-full flex items-center justify-center shadow hover:bg-emerald-950 transition-transform active:scale-90">
              <span class="material-symbols-outlined text-[14px]">edit</span>
            </button>
          </div>
          <div class="flex-1 space-y-1">
            <h2 class="text-base font-bold text-slate-800 leading-tight">{{ $user->nama }}</h2>
            <p class="text-xs text-slate-400">Warga • Bergabung {{ $user->created_at ? $user->created_at->translatedFormat('F Y') : date('F Y') }}</p>
            <button type="button" onclick="openPhotoModal()" class="mt-1 text-xs border border-slate-200 hover:bg-slate-50 text-slate-600 px-3 py-1.5 rounded-lg font-medium transition-colors">
              Ubah Foto Profil
            </button>
          </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
          <h3 class="text-xs font-bold text-slate-500 tracking-wide uppercase border-b border-slate-50 pb-2">Informasi Pribadi</h3>

          <div class="space-y-1.5">
            <label class="text-[11px] font-medium text-slate-400">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary">
            @error('nama') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
          </div>

          <div class="space-y-1.5">
            <label class="text-[11px] font-medium text-slate-400">Nomor HP</label>
            <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary">
            @error('no_hp') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
          </div>

          <div class="space-y-1.5">
            <label class="text-[11px] font-medium text-slate-400">RT/RW</label>
            <select name="id_rt" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary">
              <option value="">-- Pilih Wilayah RT --</option>
              @foreach($daftarRT as $rt)
              <option value="{{ $rt->id_rt }}" {{ old('id_rt', $user->id_rt) == $rt->id_rt ? 'selected' : '' }}>
                RT 0{{ $rt->id_rt }}/RW 02
              </option>
              @endforeach
            </select>
            @error('id_rt') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
          </div>

          <div class="space-y-1.5">
            <label class="text-[11px] font-medium text-slate-400">Alamat Lengkap</label>
            <textarea name="alamat" rows="3" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary resize-none">{{ old('alamat', $user->alamat) }}</textarea>
            @error('alamat') <p class="text-red-500 text-[10px] mt-1">{{ $message }}</p> @enderror
          </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-6 space-y-4">
          <h3 class="text-xs font-bold text-slate-500 tracking-wide uppercase border-b border-slate-50 pb-2">Keamanan Akun</h3>

          <div class="space-y-1.5">
            <label class="text-[11px] font-medium text-slate-400">Email Utama</label>
            <div class="flex justify-between items-center bg-[#EEF2F6] rounded-xl px-4 py-3 w-full">
              <span class="text-xs font-semibold text-slate-700 select-all">{{ $user->email }}</span>
              <button type="button" onclick="openEmailModal()" class="text-xs font-bold text-[#004c22] hover:underline shrink-0 ml-2">
                Ubah Email
              </button>
            </div>

            <nav class="space-y-1">
                <a href="{{ route('warga.dashboard') }}" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">dashboard</span>
                    <span class="text-sm">Dashboard</span>
                </a>
                <a href="{{ route('warga.setor-sampah') }}" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">delete</span>
                    <span class="text-sm">Setor Sampah</span>
                </a>
                <a href="{{ route('warga.mutasi-poin') }}" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">receipt_long</span>
                    <span class="text-sm">Mutasi Poin</span>
                </a>
                <a href="{{ route('warga.iuran') }}" class="flex items-center gap-4 px-4 py-3 text-on-surface-variant hover:bg-gray-50 hover:text-on-surface rounded-xl transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[22px]">credit_card</span>
                    <span class="text-sm">Tagihan Iuran</span>
                </a>
                <a href="{{ route('warga.profil') }}" class="flex items-center gap-4 px-4 py-3 bg-emerald-50 text-primary font-semibold rounded-xl transition-all">
                    <span class="material-symbols-outlined text-[22px]">person</span>
                    <span class="text-sm">Profil</span>
                </a>
            </nav>
        </div>

        <div class="border-t border-gray-100 pt-5 space-y-4">
            <div class="flex items-center gap-3 px-1">
                <img class="w-10 h-10 rounded-full object-cover border" src="{{ $user->foto ? asset('storage/'.$user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150' }}" alt="Avatar">
                <div>
                    <h4 class="text-sm font-semibold text-on-surface leading-tight">{{ $user->nama }}</h4>
                    <span class="text-xs text-gray-400">Warga RT 0{{ $user->id_rt ?? '1' }}</span>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-2.5 border border-gray-200 text-gray-700 bg-gray-50 hover:bg-gray-100 font-medium rounded-xl text-xs transition-all">
                    <span class="material-symbols-outlined icon-unfilled text-[18px]">logout</span>
                    Logout
                </button>
            </form>
        </div>
    </aside>

        <div class="flex items-center space-x-3 pt-2">
          <button type="submit" class="flex-1 bg-[#004c22] hover:bg-emerald-950 text-white font-semibold text-xs py-3.5 rounded-xl transition-colors text-center shadow-sm">
            Simpan Perubahan
          </button>
          <a href="{{ route('warga.dashboard') }}" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 font-semibold text-xs py-3.5 px-6 rounded-xl transition-colors min-w-[100px] text-center">
            Batal
          </a>
        </div>

        <input type="file" name="foto_profil" id="hidden-file-input" class="hidden" accept="image/*" onchange="syncModalPreview(this)">
      </form>
    </div>

    <div id="photo-modal" class="hidden fixed inset-0 z-[100] items-center justify-center bg-black/50 backdrop-blur-sm p-4">
      <div class="bg-white rounded-2xl shadow-xl w-full max-w-xs overflow-hidden border border-slate-100 flex flex-col">
        <div class="px-5 py-4 border-b border-slate-100 flex justify-between items-center">
          <h3 class="text-xs font-bold text-slate-800">Ubah Foto Profil</h3>
          <button type="button" onclick="closePhotoModal()" class="text-slate-400 hover:text-slate-600">
            <span class="material-symbols-outlined text-sm">close</span>
          </button>
=======
<body class="font-sans bg-[#fdfdfd] text-on-surface min-h-screen flex" 
      x-data="{ modalFoto: false, modalSandi: false, modalEmail: false }"
      @close-photo-modal.window="modalFoto = false">

    <x-sidebar />

    <main class="flex-1 pl-64 min-h-screen">
        
        <x-header />

        <div class="p-8 space-y-6">
            <x-alert />

            <form action="{{ route('warga.profil.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6" id="main-profile-form">
                @csrf
                @method('PUT')

                <input type="hidden" name="hapus_foto_flag" id="hapus-foto-flag" value="0">

                <section class="bg-surface rounded-2xl border border-slate-100 shadow-sm p-6 flex items-center gap-6">
                    <div class="relative">
                        <div class="w-24 h-24 rounded-full overflow-hidden border border-gray-300">
                            <img id="avatar-display" src="{{ $user->foto ? asset('storage/'.$user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80' }}" alt="Avatar" class="w-full h-full object-cover rounded-full">
                        </div>
                        <button type="button" @click="modalFoto = true" class="absolute bottom-0 right-0 bg-primary text-white p-1 rounded-full border-2 border-white shadow hover:bg-emerald-800 transition flex items-center justify-center">
                            <span class="material-symbols-outlined text-[16px]">edit</span>
                        </button>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-[#0f2942]">{{ $user->nama }}</h2>
                        <p class="text-sm text-gray-500 mt-1">Warga • Bergabung {{ $user->created_at ? $user->created_at->translatedFormat('F Y') : date('F Y') }}</p>
                        <button type="button" @click="modalFoto = true" class="mt-3 px-4 py-1.5 border border-gray-200 text-xs font-semibold rounded-xl bg-white hover:bg-gray-50 text-gray-700 transition">
                            Ubah Foto Profil
                        </button>
                    </div>
                </section>

                <section class="bg-surface rounded-2xl border border-slate-100 shadow-sm p-6 space-y-6">
                    <h3 class="text-base font-bold text-[#0f2942]">Informasi Pribadi</h3>
                    
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-gray-600 block">Nama Lengkap</label>
                            <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" required class="w-full px-4 py-3 bg-[#f0f4f9] border-none rounded-xl text-sm text-[#0f2942] focus:ring-2 focus:ring-emerald-600 font-medium">
                            @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-gray-600 block">Nomor HP</label>
                            <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" class="w-full px-4 py-3 bg-[#f0f4f9] border-none rounded-xl text-sm text-[#0f2942] focus:ring-2 focus:ring-emerald-600 font-medium">
                            @error('no_hp') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-gray-600 block">Wilayah RT/RW</label>
                            <select name="id_rt" class="w-full px-4 py-3 bg-[#f0f4f9] border-none rounded-xl text-sm text-[#0f2942] focus:ring-2 focus:ring-emerald-600 font-medium">
                                <option value="">-- Pilih Wilayah RT --</option>
                                @foreach($daftarRT as $rt)
                                    <option value="{{ $rt->id_rt }}" {{ old('id_rt', $user->id_rt) == $rt->id_rt ? 'selected' : '' }}>
                                        RT 0{{ $rt->id_rt }}/RW 02
                                    </option>
                                @endforeach
                            </select>
                            @error('id_rt') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-semibold text-gray-600 block">Alamat Lengkap</label>
                            <textarea name="alamat" rows="3" class="w-full px-4 py-3 bg-[#f0f4f9] border-none rounded-xl text-sm text-[#0f2942] focus:ring-2 focus:ring-emerald-600 font-medium resize-none">{{ old('alamat', $user->alamat) }}</textarea>
                            @error('alamat') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </section>

                <section class="bg-surface rounded-2xl border border-slate-100 shadow-sm p-6 space-y-6">
                    <h3 class="text-base font-bold text-[#0f2942]">Keamanan Akun</h3>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between items-center bg-[#f0f4f9] rounded-xl px-4 py-3.5 w-full">
                            <div class="space-y-0.5">
                                <span class="block text-[10px] text-gray-400 font-medium uppercase tracking-wide">Email Utama</span>
                                <span class="text-sm font-semibold text-[#0f2942] select-all">{{ $user->email }}</span>
                            </div>
                            <button type="button" @click="modalEmail = true" class="text-xs font-bold text-primary hover:underline shrink-0 ml-2">
                                Ubah Email
                            </button>
                        </div>

                        <div class="flex items-center justify-between bg-[#f0f4f9] p-4 rounded-xl">
                            <div>
                                <span class="text-[11px] font-semibold text-gray-400 block tracking-wide uppercase">Kata Sandi</span>
                                <span class="text-sm font-medium text-[#0f2942] tracking-widest select-none">•••••••••••••</span>
                            </div>
                            <button type="button" @click="modalSandi = true" class="text-xs font-bold text-primary hover:underline">Ubah Kata Sandi</button>
                        </div>
                    </div>
                </section>

                <div class="flex items-center gap-3">
                    <button type="submit" class="flex-1 py-3.5 bg-[#004c22] hover:bg-emerald-900 text-white font-bold rounded-xl text-sm tracking-wide transition shadow-sm">
                        Simpan Perubahan
                    </button>
                    <a href="{{ route('warga.dashboard') }}" class="px-6 py-3.5 border border-gray-200 bg-white hover:bg-gray-50 text-gray-700 font-bold rounded-xl text-sm transition">
                        Batal
                    </a>
                </div>

                <input type="file" name="foto_profil" id="hidden-file-input" class="hidden" accept="image/*" onchange="syncModalPreview(this)">
            </form>
        </div>
    </main>

    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40" x-show="modalFoto" x-transition x-cloak>
        <div class="bg-white w-full max-w-[400px] rounded-3xl shadow-xl overflow-hidden flex flex-col" @click.away="modalFoto = false">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="font-bold text-lg text-gray-800">Ubah Foto Profil</h3>
                <button @click="modalFoto = false" type="button" class="text-gray-400 hover:text-gray-600 transition flex items-center">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <div class="p-8 flex flex-col items-center justify-center bg-white">
                <div class="w-48 h-48 rounded-full border-2 border-primary bg-gray-100 flex items-center justify-center overflow-hidden mb-6 relative">
                    <img id="modal-preview-img" src="{{ $user->foto ? asset('storage/'.$user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80' }}" class="w-full h-full object-cover rounded-full transition-transform duration-200" alt="Preview">
                </div>
                <div class="flex items-center bg-gray-50 rounded-2xl px-4 py-2 border border-gray-100 divide-x divide-gray-200 gap-4 mb-8 text-sm text-gray-600">
                    <button type="button" onclick="rotatePreview()" class="flex items-center gap-1.5 hover:text-primary transition pr-1">
                        <span class="material-symbols-outlined text-[18px] icon-unfilled">rotate_right</span> Rotate
                    </button>
                    <button type="button" onclick="zoomInPreview()" class="flex items-center gap-1.5 hover:text-primary transition pl-4">
                        <span class="material-symbols-outlined text-[18px] icon-unfilled">zoom_in</span> Zoom
                    </button>
                </div>
                <div class="w-full space-y-3">
                    <button type="button" onclick="triggerFileBrowser(event)" class="w-full py-3 bg-primary hover:bg-emerald-900 text-white font-semibold rounded-xl text-sm flex items-center justify-center gap-2 transition">
                        <span class="material-symbols-outlined text-[20px]">upload</span> Unggah Foto Baru
                    </button>
                    <button type="button" onclick="resetToDefaultPhoto()" class="w-full py-3 bg-white border border-gray-200 hover:bg-red-50 text-red-600 font-semibold rounded-xl text-sm flex items-center justify-center gap-2 transition">
                        <span class="material-symbols-outlined text-[20px] icon-unfilled">delete</span> Hapus Foto
                    </button>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-4 flex items-center justify-end gap-3 border-t border-gray-100">
                <button @click="modalFoto = false" type="button" class="text-sm font-semibold text-gray-500 hover:text-gray-700 px-3 py-2 transition">Batal</button>
                <button type="button" onclick="applyPhotoSelection()" class="px-6 py-2 bg-primary hover:bg-emerald-900 text-white text-sm font-semibold rounded-lg transition">Simpan</button>
            </div>
>>>>>>> dcdd877d6d870fcb2b8ae3e6feb723137eb8e378
        </div>
        <div class="p-6 flex flex-col items-center space-y-5">
          <div class="w-32 h-32 rounded-full border-2 border-emerald-800 bg-slate-50 overflow-hidden flex items-center justify-center relative">
            <img id="modal-preview-img" src="{{ $user->foto ? asset('storage/'.$user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80' }}" class="w-full h-full object-cover rounded-full transition-transform duration-200" alt="Preview">
          </div>
          <div class="flex items-center justify-center space-x-6 text-slate-400 text-[11px] font-medium w-full border-t border-b border-slate-50 py-2.5">
            <button type="button" onclick="rotatePreview()" class="flex items-center space-x-1 hover:text-[#004c22]">
              <span class="material-symbols-outlined text-base">rotate_right</span>
              <span>Rotate</span>
            </button>
            <button type="button" onclick="zoomInPreview()" class="flex items-center space-x-1 hover:text-[#004c22]">
              <span class="material-symbols-outlined text-base">zoom_in</span>
              <span>Zoom</span>
            </button>
          </div>
          <div class="w-full space-y-2">
            <button type="button" onclick="triggerFileBrowser()" class="w-full bg-[#004c22] hover:bg-emerald-950 text-white text-xs font-medium py-2.5 px-4 rounded-xl flex items-center justify-center space-x-2">
              <span class="material-symbols-outlined text-base">upload</span>
              <span>Unggah Foto Baru</span>
            </button>
            <button type="button" onclick="resetToDefaultPhoto()" class="w-full bg-white border border-slate-200 text-red-500 hover:bg-red-50 text-xs font-medium py-2.5 px-4 rounded-xl flex items-center justify-center space-x-2">
              <span class="material-symbols-outlined text-base">delete</span>
              <span>Hapus Foto</span>
            </button>
          </div>
        </div>
        <div class="bg-slate-50 px-5 py-3.5 flex justify-end space-x-2 border-t border-slate-100">
          <button type="button" onclick="closePhotoModal()" class="px-4 py-2 text-[11px] font-semibold text-slate-500 hover:bg-slate-200 rounded-lg">Batal</button>
          <button type="button" onclick="applyPhotoSelection()" class="px-4 py-2 bg-slate-900 text-white text-[11px] font-semibold rounded-lg hover:bg-black">Simpan</button>
        </div>
      </div>
    </div>

<<<<<<< HEAD
    <div id="email-modal" class="hidden fixed inset-0 z-[100] items-center justify-center bg-black/50 backdrop-blur-sm p-4">
      <div class="bg-white rounded-2xl shadow-xl w-full max-w-sm overflow-hidden border border-slate-100 flex flex-col">
        <div class="px-5 py-4 border-b border-slate-100 flex justify-between items-center">
          <h3 class="text-xs font-bold text-slate-800">Ubah Email Hubungan Warga</h3>
          <button type="button" onclick="closeEmailModal()" class="text-slate-400 hover:text-slate-600">
            <span class="material-symbols-outlined text-sm">close</span>
          </button>
=======
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40" x-show="modalEmail" x-transition x-cloak>
        <div class="bg-[#F8F9FA] rounded-3xl shadow-xl w-full max-w-sm overflow-hidden border border-slate-100 flex flex-col" @click.away="modalEmail = false">
            <div class="px-6 py-4 bg-[#F8F9FA] border-b border-gray-100 flex justify-between items-center">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 leading-tight">Ubah Alamat Email</h3>
                    <p class="text-[11px] text-gray-400 mt-0.5">Perbarui email korespondensi akun warga Anda</p>
                </div>
                <button @click="modalEmail = false" type="button" class="text-gray-400 hover:text-gray-600 transition flex items-center">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form action="{{ route('warga.profil.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="p-6 bg-white space-y-4">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-700 block">Email Baru</label>
                        <input type="email" name="email" required placeholder="nama.baru@email.com" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:ring-emerald-600 focus:border-emerald-600 placeholder-gray-300">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-700 block">Konfirmasi Kata Sandi Akun</label>
                        <input type="password" name="password_verification" required class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:ring-emerald-600 focus:border-emerald-600">
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-4 flex items-center justify-end gap-3 border-t border-gray-100">
                    <button @click="modalEmail = false" type="button" class="px-4 py-2 border border-gray-200 bg-white hover:bg-gray-50 text-gray-700 font-semibold rounded-xl text-xs transition">Batal</button>
                    <button type="submit" class="px-5 py-2 bg-primary hover:bg-emerald-900 text-white font-bold rounded-xl text-xs transition shadow-sm">Simpan Email</button>
                </div>
            </form>
>>>>>>> dcdd877d6d870fcb2b8ae3e6feb723137eb8e378
        </div>
        <form action="{{ route('warga.profil.update') }}" method="POST">
          @csrf
          @method('PUT')
          <div class="p-6 space-y-4">
            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Email Baru</label>
              <input type="email" name="email" required placeholder="nama.baru@email.com" class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary">
            </div>
            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Konfirmasi Kata Sandi Akun</label>
              <input type="password" name="password_verification" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary">
            </div>
          </div>
          <div class="bg-slate-50 px-5 py-3.5 flex justify-end space-x-2 border-t border-slate-100">
            <button type="button" onclick="closeEmailModal()" class="px-4 py-2 text-[11px] font-semibold text-slate-500 hover:bg-slate-200 rounded-lg">Batal</button>
            <button type="submit" class="px-4 py-2 bg-[#004c22] hover:bg-emerald-950 text-white text-[11px] font-semibold rounded-lg shadow-sm">Simpan Email</button>
          </div>
        </form>
      </div>
    </div>

    <div id="password-modal" class="hidden fixed inset-0 z-[100] items-center justify-center bg-black/50 backdrop-blur-sm p-4">
      <div class="bg-white rounded-2xl shadow-xl w-full max-w-sm overflow-hidden border border-slate-100 flex flex-col">
        <div class="px-5 py-4 border-b border-slate-100 flex justify-between items-center">
          <h3 class="text-xs font-bold text-slate-800">Ubah Kata Sandi Akun</h3>
          <button type="button" onclick="closePasswordModal()" class="text-slate-400 hover:text-slate-600">
            <span class="material-symbols-outlined text-sm">close</span>
          </button>
        </div>
        <form action="{{ route('warga.profil.password') }}" method="POST">
          @csrf
          @method('PUT')
          <div class="p-6 space-y-4">
            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Kata Sandi Saat Ini</label>
              <input type="password" name="current_password" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary">
            </div>
            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Kata Sandi Baru</label>
              <input type="password" name="password" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary">
            </div>
            <div class="space-y-1.5">
              <label class="text-[11px] font-medium text-slate-400">Konfirmasi Kata Sandi Baru</label>
              <input type="password" name="password_confirmation" required class="w-full bg-[#EEF2F6] border-0 text-slate-700 rounded-xl px-4 py-3 text-xs font-medium focus:ring-1 focus:ring-pointwaste-primary">
            </div>
          </div>
          <div class="bg-slate-50 px-5 py-3.5 flex justify-end space-x-2 border-t border-slate-100">
            <button type="button" onclick="closePasswordModal()" class="px-4 py-2 text-[11px] font-semibold text-slate-500 hover:bg-slate-200 rounded-lg">Batal</button>
            <button type="submit" class="px-4 py-2 bg-[#004c22] hover:bg-emerald-950 text-white text-[11px] font-semibold rounded-lg shadow-sm">Perbarui Sandi</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      const photoModal = document.getElementById('photo-modal');
      const emailModal = document.getElementById('email-modal');
      const passwordModal = document.getElementById('password-modal');
      const hiddenFileInput = document.getElementById('hidden-file-input');
      const modalPreviewImg = document.getElementById('modal-preview-img');
      const avatarDisplay = document.getElementById('avatar-display');
      const hapusFotoFlag = document.getElementById('hapus-foto-flag');

      let currentRotation = 0;
      let currentScale = 1;

      function openPhotoModal() {
        photoModal.classList.replace('hidden', 'flex');
      }

      function closePhotoModal() {
        photoModal.classList.replace('flex', 'hidden');
      }

      function triggerFileBrowser() {
        hiddenFileInput.click();
      }

      function syncModalPreview(input) {
        if (input.files && input.files[0]) {
          hapusFotoFlag.value = "0"; // Batalkan flag hapus jika memilih file baru
          const reader = new FileReader();
          reader.onload = function(e) {
            modalPreviewImg.src = e.target.result;
            currentRotation = 0;
            currentScale = 1;
            modalPreviewImg.style.transform = `rotate(0deg) scale(1)`;
          }
          reader.readAsDataURL(input.files[0]);

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
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
              </svg>
            </button>
            <button class="p-2 hover:bg-slate-50 rounded-full transition-colors">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
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
