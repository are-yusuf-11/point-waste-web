<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PointWaste - Profil Pengguna</title>
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
              primary: '#004c22',
              secondary: '#166534',
              white: '#FFFFFF',
              dark: '#0b1c30',
              bg: '#f8f9ff'
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
          </div>

          <div class="space-y-1.5 pt-1">
            <label class="text-[11px] font-medium text-slate-400">Kata Sandi</label>
            <div class="flex justify-between items-center bg-[#EEF2F6] rounded-xl px-4 py-3 w-full">
              <span class="text-xs text-slate-400 tracking-widest select-none">••••••••••••</span>
              <button type="button" onclick="openPasswordModal()" class="text-xs font-bold text-[#004c22] hover:underline shrink-0 ml-2">
                Ubah Kata Sandi
              </button>
            </div>
          </div>
        </div>

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
  </main>

  <div id="photo-modal" class="hidden fixed inset-0 z-[100] items-center justify-center bg-black/50 backdrop-blur-sm p-4">
    <div class="bg-[#F8F9FA] rounded-2xl shadow-xl w-full max-w-xs overflow-hidden border border-slate-100 flex flex-col font-sans">
      <div class="px-5 py-4 bg-[#F8F9FA] border-b border-gray-100 flex justify-between items-center">
        <h3 class="text-sm font-bold text-gray-900 tracking-tight">Ubah Foto Profil</h3>
        <button type="button" onclick="closePhotoModal()" class="text-gray-400 hover:text-gray-600">
          <span class="material-symbols-outlined text-sm">close</span>
        </button>
      </div>
      <div class="p-6 bg-white flex flex-col items-center space-y-5">
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
      <div class="bg-[#F8F9FA] px-5 py-3.5 flex justify-end space-x-2 border-t border-gray-100">
        <button type="button" onclick="closePhotoModal()" class="px-4 py-2 text-[11px] font-semibold text-slate-500 hover:bg-slate-200 rounded-lg">Batal</button>
        <button type="button" onclick="applyPhotoSelection()" class="px-4 py-2 bg-slate-900 text-white text-[11px] font-semibold rounded-lg hover:bg-black">Simpan</button>
      </div>
    </div>
  </div>

  <div id="email-modal" class="hidden fixed inset-0 z-[100] items-center justify-center bg-black/50 backdrop-blur-sm p-4">
    <div class="bg-[#F8F9FA] rounded-2xl shadow-xl w-full max-w-sm overflow-hidden border border-slate-100 flex flex-col font-sans">
      <div class="px-5 py-4 bg-[#F8F9FA] border-b border-gray-100 flex justify-between items-center">
        <div>
          <h3 class="text-sm font-bold text-gray-900 tracking-tight">Ubah Alamat Email</h3>
          <p class="text-[10px] text-gray-400 mt-0.5">Perbarui email korespondensi akun warga Anda</p>
        </div>
        <button type="button" onclick="closeEmailModal()" class="text-gray-400 hover:text-gray-600">
          <span class="material-symbols-outlined text-sm">close</span>
        </button>
      </div>
      <form action="{{ route('warga.profil.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="p-6 bg-white space-y-4">
          <div class="space-y-1.5">
            <label class="block text-sm font-semibold text-gray-700">Email Baru</label>
            <input type="email" name="email" required placeholder="nama.baru@email.com" class="block w-full px-4 py-3 bg-[#F8F9FA] border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 focus:bg-white text-gray-900 placeholder-gray-400 text-xs font-medium transition-all">
          </div>
          <div class="space-y-1.5">
            <label class="block text-sm font-semibold text-gray-700">Konfirmasi Kata Sandi Akun</label>
            <input type="password" name="password_verification" required class="block w-full px-4 py-3 bg-[#F8F9FA] border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 focus:bg-white text-gray-900 text-xs font-medium transition-all">
          </div>
        </div>
        <div class="bg-[#F8F9FA] px-6 py-4 flex justify-end space-x-3 border-t border-gray-100">
          <button type="button" onclick="closeEmailModal()" class="px-5 py-2 bg-white border border-gray-300 text-gray-700 text-xs font-medium rounded-xl hover:bg-gray-50 transition-colors">Batal</button>
          <button type="submit" class="px-5 py-2 bg-[#004c22] hover:bg-emerald-950 text-white text-xs font-medium rounded-xl shadow-sm transition-colors">Simpan Email</button>
        </div>
      </form>
    </div>
  </div>

  <div id="password-modal" class="hidden fixed inset-0 z-[100] items-center justify-center bg-black/50 backdrop-blur-sm p-4">
    <div class="bg-[#F8F9FA] rounded-2xl border border-gray-200 shadow-xl w-full max-w-lg overflow-hidden font-sans">
      
      <div class="p-6 bg-[#F8F9FA] flex justify-between items-start border-b border-gray-100">
        <div>
          <h3 class="text-xl font-bold text-gray-900 tracking-tight">Ubah Kata Sandi</h3>
          <p class="text-xs text-gray-500 mt-1">Amankan akun Anda dengan kata sandi baru</p>
        </div>
        <button type="button" onclick="closePasswordModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <span class="material-symbols-outlined text-lg">close</span>
        </button>
      </div>

      <form action="{{ route('warga.profil.password') }}" method="POST" class="p-6 bg-white space-y-6">
        @csrf
        @method('PUT')

        <div class="space-y-2">
          <label for="current_password" class="block text-sm font-semibold text-gray-700">Kata Sandi Saat Ini</label>
          <div class="relative rounded-xl shadow-sm">
            <input type="password" name="current_password" id="current_password" 
                class="block w-full px-4 py-3 bg-[#F8F9FA] border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 focus:bg-white text-gray-900 text-xs font-medium placeholder-gray-400 transition-all duration-200 pr-10" 
                placeholder="••••••••" required>
            <button type="button" onclick="togglePasswordVisibility('current_password', this)" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
              <span class="material-symbols-outlined text-lg select-none">visibility</span>
            </button>
          </div>
        </div>

        <hr class="border-gray-100">

        <div class="space-y-2">
          <label for="password" class="block text-sm font-semibold text-gray-700">Kata Sandi Baru</label>
          <div class="relative rounded-xl shadow-sm">
            <input type="password" name="password" id="password" 
                class="block w-full px-4 py-3 bg-[#F8F9FA] border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 focus:bg-white text-gray-900 text-xs font-medium placeholder-gray-400 transition-all duration-200 pr-10" 
                placeholder="••••••••" required>
            <button type="button" onclick="togglePasswordVisibility('password', this)" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
              <span class="material-symbols-outlined text-lg select-none">visibility</span>
            </button>
          </div>
        </div>

        <div class="space-y-2">
          <label for="password_confirmation" class="block text-sm font-semibold text-gray-700">Konfirmasi Kata Sandi Baru</label>
          <div class="relative rounded-xl shadow-sm">
            <input type="password" name="password_confirmation" id="password_confirmation" 
                class="block w-full px-4 py-3 bg-[#F8F9FA] border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 focus:bg-white text-gray-900 text-xs font-medium placeholder-gray-400 transition-all duration-200 pr-10" 
                placeholder="Ulangi kata sandi baru" required>
            <button type="button" onclick="togglePasswordVisibility('password_confirmation', this)" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
              <span class="material-symbols-outlined text-lg select-none">visibility</span>
            </button>
          </div>
        </div>

        <div class="bg-[#F0FDF4] border border-[#DCFCE7] rounded-xl p-4 flex items-start space-x-3">
          <div class="text-[#004c22] mt-0.5 shrink-0">
            <span class="material-symbols-outlined text-lg">info</span>
          </div>
          <p class="text-xs text-gray-600 leading-normal">
            Kata sandi harus terdiri dari kombinasi huruf besar, huruf kecil, angka, dan simbol untuk keamanan maksimal.
          </p>
        </div>

        <div class="pt-4 border-t border-gray-100 flex justify-end space-x-3 bg-[#F8F9FA] -mx-6 -mb-6 p-6">
          <button type="button" onclick="closePasswordModal()" class="px-6 py-2.5 bg-white border border-gray-300 text-gray-700 text-xs font-medium rounded-xl hover:bg-gray-50 transition-colors">
            Batal
          </button>
          <button type="submit" class="px-6 py-2.5 bg-[#0A3622] text-white text-xs font-medium rounded-xl hover:bg-[#082c1b] transition-colors shadow-sm">
            Simpan Perubahan
          </button>
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

    // Trigger Modals
    function openPhotoModal() { photoModal.classList.replace('hidden', 'flex'); }
    function closePhotoModal() { photoModal.classList.replace('flex', 'hidden'); }
    
    function openEmailModal() { emailModal.classList.replace('hidden', 'flex'); }
    function closeEmailModal() { emailModal.classList.replace('flex', 'hidden'); }

    function openPasswordModal() { passwordModal.classList.replace('hidden', 'flex'); }
    function closePasswordModal() { passwordModal.classList.replace('flex', 'hidden'); }

    // Photo Management
    function triggerFileBrowser() { hiddenFileInput.click(); }
    
    function syncModalPreview(input) {
        if (input.files && input.files[0]) {
            hapusFotoFlag.value = "0";
            const reader = new FileReader();
            reader.onload = function(e) {
                modalPreviewImg.src = e.target.result;
                currentRotation = 0; currentScale = 1;
                modalPreviewImg.style.transform = `rotate(0deg) scale(1)`;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    function rotatePreview() { currentRotation += 90; updateTransform(); }
    function zoomInPreview() { currentScale = currentScale === 1 ? 1.3 : 1; updateTransform(); }
    function updateTransform() { modalPreviewImg.style.transform = `rotate(${currentRotation}deg) scale(${currentScale})`; }
    
    function applyPhotoSelection() { 
        avatarDisplay.src = modalPreviewImg.src; 
        closePhotoModal(); 
    }

    function resetToDefaultPhoto() {
        hiddenFileInput.value = "";
        hapusFotoFlag.value = "1";
        modalPreviewImg.src = "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80";
        modalPreviewImg.style.transform = `rotate(0deg) scale(1)`;
        avatarDisplay.src = modalPreviewImg.src;
    }

    // Interactive Show/Hide Password Controller
    function togglePasswordVisibility(inputId, buttonEl) {
      const input = document.getElementById(inputId);
      const icon = buttonEl.querySelector('.material-symbols-outlined');
      
      if (input.type === 'password') {
        input.type = 'text';
        icon.textContent = 'visibility_off';
      } else {
        input.type = 'password';
        icon.textContent = 'visibility';
      }
    }
  </script>
</body>
</html>