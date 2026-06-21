@extends('layouts.admin')

@section('title', 'Edit Pengguna - PointWaste Admin')

@section('content')
<!-- Load Google Font & Icons jika belum di-load di layout utama -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<div class="flex flex-col gap-lg p-2 font-sans antialiased text-slate-800">
    
    <!-- Breadcrumb & Header Title -->
    <div class="mb-4">
        <div class="flex items-center gap-1 text-xs text-slate-400 font-medium mb-1">
            <a href="{{ route('admin.manajemen-pengguna') }}" class="hover:text-primary transition-colors">User Management</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-600 font-semibold">Edit Pengguna</span>
        </div>
        <h2 class="text-2xl font-bold text-slate-900 tracking-tight">Edit pengguna</h2>
        <p class="text-xs text-slate-500 mt-0.5">Perbarui informasi formulir di bawah ini untuk memperbarui data anggota PointWaste.</p>
    </div>

    <!-- Main Grid Content (Form Kiri, Info Kanan) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-xl items-start">
        
        <!-- Kolom Kiri: Card Form Utama -->
        <div class="lg:col-span-2 bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
            <!-- Header Card -->
            <div class="p-lg border-b border-slate-100 flex items-center gap-2 bg-slate-50/50 p-4">
                <span class="material-symbols-outlined text-slate-700 text-lg">person_add</span>
                <h3 class="font-bold text-sm text-slate-800">Informasi Profil Pengguna</h3>
            </div>

            <!-- Isi Form -->
            <form action="{{ route('admin.manajemen-pengguna.update', $user->id_user) }}" method="POST" class="p-lg space-y-md p-6">
                @csrf
                @method('PUT')

                <!-- Input Nama Lengkap -->
                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-700">Nama Lengkap</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-3 text-slate-400 text-md">badge</span>
                        <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" required placeholder="Masukkan nama sesuai identitas"
                            class="w-full text-xs rounded-lg border-slate-200 pl-9 pr-4 py-2.5 focus:border-emerald-600 focus:ring-emerald-600 transition-colors">
                    </div>
                    @error('nama') <p class="text-[11px] text-rose-500 mt-0.5">{{ $message }}</p> @enderror
                </div>

                <!-- Input Password -->
                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-700">Password</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-3 text-slate-400 text-md">vpn_key</span>
                        <input type="password" id="passwordInput" name="password" placeholder="Masukkan password baru (kosongkan jika tidak diubah)"
                            class="w-full text-xs rounded-lg border-slate-200 pl-9 pr-10 py-2.5 focus:border-emerald-600 focus:ring-emerald-600 transition-colors">
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute right-3 text-slate-400 hover:text-slate-600 transition-colors flex items-center">
                            <span class="material-symbols-outlined text-md" id="passwordIcon">visibility</span>
                        </button>
                    </div>
                    @error('password') <p class="text-[11px] text-rose-500 mt-0.5">{{ $message }}</p> @enderror
                </div>

                <!-- Input Email & Peran (Grid Row) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-md">
                    <div class="space-y-1">
                        <label class="block text-xs font-bold text-slate-700">Alamat Email</label>
                        <div class="relative flex items-center">
                            <span class="material-symbols-outlined absolute left-3 text-slate-400 text-md">mail</span>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}" required placeholder="contoh@domain.com"
                                class="w-full text-xs rounded-lg border-slate-200 pl-9 pr-4 py-2.5 focus:border-emerald-600 focus:ring-emerald-600 transition-colors">
                        </div>
                        @error('email') <p class="text-[11px] text-rose-500 mt-0.5">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-1">
                        <label class="block text-xs font-bold text-slate-700">Peran (Role)</label>
                        <div class="relative flex items-center">
                            <span class="material-symbols-outlined absolute left-3 text-slate-400 text-md">manage_accounts</span>
                            <select name="role" required class="w-full text-xs rounded-lg border-slate-200 pl-9 pr-8 py-2.5 bg-white appearance-none focus:border-emerald-600 focus:ring-emerald-600 transition-colors">
                                <option value="warga" {{ old('role', $user->role) == 'warga' ? 'selected' : '' }}>Warga</option>
                                <option value="pengurus-rt" {{ old('role', $user->role) == 'pengurus-rt' ? 'selected' : '' }}>Pengurus RT</option>
                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin Sistem</option>
                            </select>
                        </div>
                        @error('role') <p class="text-[11px] text-rose-500 mt-0.5">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Input Wilayah RT -->
                <div class="space-y-1">
                    <label class="block text-xs font-bold text-slate-700">Area / Wilayah (RT/RW)</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-3 text-slate-400 text-md">location_on</span>
                        <select name="id_rt" class="w-full text-xs rounded-lg border-slate-200 pl-9 pr-8 py-2.5 bg-white appearance-none focus:border-emerald-600 focus:ring-emerald-600 transition-colors">
                            <option value="">Pilih Wilayah Operasional (Atau kosongkan jika Admin)</option>
                            @foreach($daftarRt as $rt)
                                <option value="{{ $rt->id_rt }}" {{ old('id_rt', $user->id_rt) == $rt->id_rt ? 'selected' : '' }}>
                                    RT {{ $rt->no_rt }} / RW {{ $rt->no_rw ?? '005' }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('id_rt') <p class="text-[11px] text-rose-500 mt-0.5">{{ $message }}</p> @enderror
                </div>

                <!-- Input Tambahan (No HP & Alamat) tetap ada agar data terjaga -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-md pt-1">
                    <div class="space-y-1">
                        <label class="block text-xs font-bold text-slate-700">Nomor HP</label>
                        <input type="text" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}" placeholder="Contoh: 08123456789"
                            class="w-full text-xs rounded-lg border-slate-200 py-2.5 focus:border-emerald-600 focus:ring-emerald-600">
                    </div>
                    <div class="space-y-1">
                        <label class="block text-xs font-bold text-slate-700">Alamat Rumah</label>
                        <input type="text" name="alamat" value="{{ old('alamat', $user->alamat) }}" placeholder="Nama jalan, nomor rumah, blok..."
                            class="w-full text-xs rounded-lg border-slate-200 py-2.5 focus:border-emerald-600 focus:ring-emerald-600">
                    </div>
                </div>

                <!-- Tombol Action -->
                <div class="flex items-center justify-end gap-sm pt-4 border-t border-slate-100 mt-4">
                    <a href="{{ route('admin.manajemen-pengguna') }}" 
                       class="px-5 py-2 text-xs font-semibold text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-5 py-2 text-xs font-semibold text-white bg-[#14532d] hover:bg-emerald-800 rounded-lg shadow-sm transition-colors flex items-center gap-1">
                        Simpan <span class="material-symbols-outlined text-xs">save</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Kolom Kanan: Panduan Cepat (Sesuai Persis Gambar) -->
        <div class="space-y-lg">
            <div class="bg-white border-l-4 border-[#14532d] border border-slate-200 p-lg rounded-r-xl shadow-sm flex gap-3 p-5">
                <span class="material-symbols-outlined text-slate-600 text-lg mt-0.5">info</span>
                <div class="space-y-2">
                    <h4 class="text-xs font-bold text-slate-800">Panduan Cepat</h4>
                    <ul class="text-[11px] text-slate-500 space-y-1.5 list-none pl-0 leading-relaxed">
                        <li>Pastikan email valid untuk pengiriman kredensial.</li>
                        <li>Admin RT hanya dapat melihat data di wilayahnya.</li>
                        <li>Warga akan otomatis mendapatkan 10 poin selamat datang.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    // Fungsi interaktif memperlihatkan/menyembunyikan password
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('passwordInput');
        const passwordIcon = document.getElementById('passwordIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordIcon.textContent = 'visibility_off';
        } else {
            passwordInput.type = 'password';
            passwordIcon.textContent = 'visibility';
        }
    }
</script>
@endpush