<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tambah Pengguna Baru - PointWaste</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body class="bg-slate-50 font-['Inter'] min-h-screen flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-sm border border-slate-200 p-8">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-slate-900">Tambah Pengguna Baru</h2>
            <p class="text-sm text-slate-500 mt-1">Silakan isi formulir di bawah untuk mendaftarkan akun ke dalam sistem.</p>
        </div>

        <form action="{{ route('admin.manajemen-pengguna.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="Masukkan nama lengkap"
                    class="w-full rounded-xl border-slate-300 text-sm focus:border-emerald-500 focus:ring-emerald-500">
                @error('nama') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Email</label>
                    <input type="email" name="email" required placeholder="name@domain.com"
                        class="w-full rounded-xl border-slate-300 text-sm focus:border-emerald-500 focus:ring-emerald-500">
                    @error('email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Password</label>
                    <input type="password" name="password" required placeholder="Minimal 6 karakter"
                        class="w-full rounded-xl border-slate-300 text-sm focus:border-emerald-500 focus:ring-emerald-500">
                    @error('password') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Peran / Hak Akses</label>
                    <select name="role" required class="w-full rounded-xl border-slate-300 text-sm focus:border-emerald-500 focus:ring-emerald-500">
                        <option value="warga">Warga</option>
                        <option value="pengurus rt">Pengurus RT</option>
                        <option value="admin">Admin Sistem</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">Wilayah RT</label>
                    <select name="id_rt" class="w-full rounded-xl border-slate-300 text-sm focus:border-emerald-500 focus:ring-emerald-500">
                        <option value="">-- Tanpa Wilayah (Admin) --</option>
                        @foreach($daftarRt as $rt)
                            <option value="{{ $rt->id_rt }}">RT {{ $rt->no_rt }} - {{ $rt->kelurahan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Nomor HP</label>
                <input type="text" name="no_hp" placeholder="Contoh: 08123456789"
                    class="w-full rounded-xl border-slate-300 text-sm focus:border-emerald-500 focus:ring-emerald-500">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Alamat Rumah</label>
                <textarea name="alamat" rows="2" placeholder="Nama jalan, nomor rumah, blok..."
                    class="w-full rounded-xl border-slate-300 text-sm focus:border-emerald-500 focus:ring-emerald-500"></textarea>
            </div>

            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                <a href="{{ route('admin.manajemen-pengguna') }}" 
                   class="px-4 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100 rounded-xl transition-colors">
                    Batal
                </a>
                <button type="submit" 
                        class="px-5 py-2 text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl shadow-sm transition-colors">
                    Simpan Pengguna
                </button>
            </div>
        </form>
    </div>

</body>
</html>