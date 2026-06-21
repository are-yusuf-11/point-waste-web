<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Profil Pengguna</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#004c22",
                        "primary-container": "#166534",
                        "background": "#f8f9ff",
                        "surface": "#ffffff",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#404940",
                        "outline-variant": "#bfc9bd",
                    },
                    fontFamily: { sans: ["Inter", "sans-serif"] }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .icon-unfilled { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-[#fdfdfd] text-on-surface font-sans min-h-screen flex p-4 gap-4" 
      x-data="{ modalFoto: false, modalSandi: false, modalEmail: false }">

    <aside class="w-[260px] bg-surface border border-gray-100 flex flex-col justify-between p-6 h-[calc(100vh-2rem)] sticky top-4 z-30 rounded-2xl shadow-sm">
        <div class="space-y-10">
            <div class="flex items-center gap-3 px-2 py-2">
                <span class="material-symbols-outlined text-primary text-[32px]">recycling</span>
                <span class="font-bold text-xl text-primary tracking-tight">PointWaste</span>
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

    <div class="flex-1 flex flex-col min-h-screen">
        
        <header class="h-[60px] bg-transparent flex items-center justify-between px-6 mb-4">
            <h1 class="text-xl font-bold text-primary">Profil Pengguna</h1>
            <div class="flex items-center gap-4 text-gray-600">
                <button class="relative p-1 hover:bg-gray-100 rounded-full transition">
                    <span class="material-symbols-outlined icon-unfilled text-[24px]">notifications</span>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <a href="{{ route('warga.profil') }}" class="p-1 hover:bg-gray-100 rounded-full transition block">
                    <span class="material-symbols-outlined icon-unfilled text-[24px]">settings</span>
                </a>
            </div>
        </header>

        <main class="flex-1 px-6 pb-12">
            <x-alert />

            <form action="{{ route('warga.profil.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <input type="hidden" name="hapus_foto_flag" id="hapus-foto-flag" value="0">

                <section class="bg-surface rounded-2xl border border-gray-100 shadow-sm p-6 flex items-center gap-6">
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

                <section class="bg-surface rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
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

                <section class="bg-surface rounded-2xl border border-gray-100 shadow-sm p-6 space-y-6">
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
        </main>
    </div>

    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40" 
         x-show="modalFoto" x-transition x-cloak>
        <div class="bg-white w-full max-w-[400px] rounded-3xl shadow-xl overflow-hidden flex flex-col" @click.away="modalFoto = false">
            
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="font-bold text-lg text-gray-800">Ubah Foto Profil</h3>
                <button @click="modalFoto = false" class="text-gray-400 hover:text-gray-600 transition flex items-center">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <div class="p-8 flex flex-col items-center justify-center bg-white">
                <div class="w-48 h-48 rounded-full border-2 border-primary bg-gray-100 flex items-center justify-center overflow-hidden mb-6 relative">
                    <img id="modal-preview-img" src="{{ $user->foto ? asset('storage/'.$user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80' }}" class="w-full h-full object-cover rounded-full transition-transform duration-200" alt="Preview">
                </div>

                <div class="flex items-center bg-gray-50 rounded-2xl px-4 py-2 border border-gray-100 divide-x divide-gray-200 gap-4 mb-8 text-sm text-gray-600">
                    <button type="button" onclick="rotatePreview()" class="flex items-center gap-1.5 hover:text-primary transition pr-1">
                        <span class="material-symbols-outlined text-[18px] icon-unfilled">rotate_right</span>
                        Rotate
                    </button>
                    <button type="button" onclick="zoomInPreview()" class="flex items-center gap-1.5 hover:text-primary transition pl-4">
                        <span class="material-symbols-outlined text-[18px] icon-unfilled">zoom_in</span>
                        Zoom
                    </button>
                </div>

                <div class="w-full space-y-3">
                    <button type="button" onclick="triggerFileBrowser()" class="w-full py-3 bg-primary hover:bg-emerald-900 text-white font-semibold rounded-xl text-sm flex items-center justify-center gap-2 transition">
                        <span class="material-symbols-outlined text-[20px]">upload</span>
                        Unggah Foto Baru
                    </button>
                    <button type="button" onclick="resetToDefaultPhoto()" class="w-full py-3 bg-white border border-gray-200 hover:bg-red-50 text-red-600 font-semibold rounded-xl text-sm flex items-center justify-center gap-2 transition">
                        <span class="material-symbols-outlined text-[20px] icon-unfilled">delete</span>
                        Hapus Foto
                    </button>
                </div>
            </div>

            <div class="bg-gray-50 px-6 py-4 flex items-center justify-end gap-3 border-t border-gray-100">
                <button @click="modalFoto = false" type="button" class="text-sm font-semibold text-gray-500 hover:text-gray-700 px-3 py-2 transition">
                    Batal
                </button>
                <button type="button" onclick="applyPhotoSelection()" class="px-6 py-2 bg-primary hover:bg-emerald-900 text-white text-sm font-semibold rounded-lg transition">
                    Simpan
                </button>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40" 
         x-show="modalEmail" x-transition x-cloak>
        <div class="bg-[#F8F9FA] rounded-3xl shadow-xl w-full max-w-sm overflow-hidden border border-slate-100 flex flex-col font-sans" @click.away="modalEmail = false">
            <div class="px-6 py-4 bg-[#F8F9FA] border-b border-gray-100 flex justify-between items-center">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 leading-tight">Ubah Alamat Email</h3>
                    <p class="text-[11px] text-gray-400 mt-0.5">Perbarui email korespondensi akun warga Anda</p>
                </div>
                <button @click="modalEmail = false" class="text-gray-400 hover:text-gray-600 transition flex items-center">
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
        </div>
    </div>

    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40" 
         x-show="modalSandi" x-transition x-cloak>
        <div class="bg-white w-full max-w-[460px] rounded-3xl shadow-xl overflow-hidden flex flex-col" @click.away="modalSandi = false">
            
            <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
                <div>
                    <h3 class="font-bold text-lg text-gray-800 leading-tight">Ubah Kata Sandi</h3>
                    <p class="text-xs text-gray-400 mt-0.5">Amankan akun Anda dengan kata sandi baru</p>
                </div>
                <button @click="modalSandi = false" class="text-gray-400 hover:text-gray-600 transition flex items-center">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <form action="{{ route('warga.profil.password') }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="p-6 space-y-5">
                    
                    <div class="space-y-2 relative" x-data="{ show: false }">
                        <label class="text-xs font-bold text-gray-700 block">Kata Sandi Saat Ini</label>
                        <input :type="show ? 'text' : 'password'" name="current_password" required class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:ring-emerald-600 focus:border-emerald-600 placeholder-gray-300 pr-10" placeholder="Masukan kata sandi">
                        <button type="button" @click="show = !show" class="absolute bottom-3 right-3 text-gray-400 hover:text-gray-600 flex items-center">
                            <span class="material-symbols-outlined text-[20px]" x-text="show ? 'visibility_off' : 'visibility'"></span>
                        </button>
                    </div>

                    <div class="w-full border-t border-gray-100 my-1"></div>

                    <div class="space-y-2 relative" x-data="{ show: false }">
                        <label class="text-xs font-bold text-gray-700 block">Kata Sandi Baru</label>
                        <input :type="show ? 'text' : 'password'" name="password" required class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:ring-emerald-600 focus:border-emerald-600 placeholder-gray-300 pr-10" placeholder="Masukan kata sandi baru">
                        <button type="button" @click="show = !show" class="absolute bottom-3 right-3 text-gray-400 hover:text-gray-600 flex items-center">
                            <span class="material-symbols-outlined text-[20px]" x-text="show ? 'visibility_off' : 'visibility'"></span>
                        </button>
                    </div>

                    <div class="space-y-2 relative" x-data="{ show: false }">
                        <label class="text-xs font-bold text-gray-700 block">Konfirmasi Kata Sandi Baru</label>
                        <input :type="show ? 'text' : 'password'" name="password_confirmation" required class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:ring-emerald-600 focus:border-emerald-600 placeholder-gray-300 pr-10" placeholder="Ulangi kata sandi baru">
                        <button type="button" @click="show = !show" class="absolute bottom-3 right-3 text-gray-400 hover:text-gray-600 flex items-center">
                            <span class="material-symbols-outlined text-[20px]" x-text="show ? 'visibility_off' : 'visibility'"></span>
                        </button>
                    </div>

                    <div class="bg-emerald-50/50 border border-emerald-100 rounded-xl p-3 flex gap-2.5 items-start">
                        <span class="material-symbols-outlined text-primary text-[18px] mt-0.5 icon-unfilled">info</span>
                        <p class="text-[11px] text-emerald-800 leading-normal font-medium">
                            Kata sandi harus terdiri dari kombinasi huruf besar, huruf kecil, angka, dan simbol untuk keamanan maksimal.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-50 px-6 py-4 flex items-center justify-end gap-3 border-t border-gray-100">
                    <button @click="modalSandi = false" type="button" class="px-4 py-2 border border-gray-200 bg-white hover:bg-gray-50 text-gray-700 font-semibold rounded-xl text-xs transition">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2 bg-primary hover:bg-emerald-900 text-white font-bold rounded-xl text-xs transition shadow-sm">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const hiddenFileInput = document.getElementById('hidden-file-input');
        const modalPreviewImg = document.getElementById('modal-preview-img');
        const avatarDisplay = document.getElementById('avatar-display');
        const hapusFotoFlag = document