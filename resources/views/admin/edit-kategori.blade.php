<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Kategori Sampah - PointWaste Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#004c22",
                        "primary-container": "#166534",
                        "on-primary-container": "#93e0a2",
                        "secondary": "#55615a",
                        "background": "#f8f9ff",
                        "surface": "#f8f9ff",
                        "outline-variant": "#bfc9bd",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#404940",
                        "error": "#ba1a1a"
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #f8f9ff;
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="text-on-surface">
    <aside class="fixed left-0 top-0 h-screen w-[260px] bg-white border-r border-outline-variant flex flex-col py-6 px-4 gap-4 z-50">
        <div class="mb-8 px-4">
            <h1 class="text-2xl font-bold text-primary">PointWaste</h1>
            <p class="text-sm text-secondary">Admin System</p>
        </div>
        <nav class="flex flex-col gap-2">
            <a class="flex items-center gap-4 text-secondary px-4 py-2 hover:bg-slate-100 rounded-lg transition-colors" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="text-sm font-medium">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 text-secondary px-4 py-2 hover:bg-slate-100 rounded-lg transition-colors" href="{{ route('admin.manajemen-pengguna') }}">
                <span class="material-symbols-outlined">group</span>
                <span class="text-sm font-medium">Manajemen Pengguna</span>
            </a>
            <a class="flex items-center gap-4 bg-emerald-50 text-primary font-bold rounded-lg px-4 py-2" href="{{ route('admin.kategori-sampah') }}">
                <span class="material-symbols-outlined">recycling</span>
                <span class="text-sm font-medium">Kategori Sampah</span>
            </a>
            <a class="flex items-center gap-4 text-secondary px-4 py-2 hover:bg-slate-100 rounded-lg transition-colors" href="{{ route('admin.monitoring-sistem') }}">
                <span class="material-symbols-outlined">analytics</span>
                <span class="text-sm font-medium">Monitoring Sistem</span>
            </a>
        </nav>
    </aside>

    <main class="ml-[260px] min-h-screen flex flex-col">
        <header class="fixed top-0 right-0 w-[calc(100%-260px)] h-16 bg-white border-b border-outline-variant flex items-center justify-between px-8 z-40">
            <div class="flex items-center gap-2 text-secondary font-medium text-sm">
                <a href="{{ route('admin.kategori-sampah') }}" class="hover:text-primary transition-colors">Kategori Sampah</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-on-surface">Edit Kategori</span>
            </div>
        </header>

        <section class="mt-16 p-8 max-w-[800px] w-full mx-auto flex flex-col gap-6">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.kategori-sampah') }}" class="h-10 w-10 flex items-center justify-center border border-outline-variant rounded-xl bg-white text-secondary hover:text-primary hover:border-primary transition-all shadow-sm" title="Kembali">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
                <div>
                    <h2 class="text-2xl font-bold text-primary">Edit Kategori Sampah Master</h2>
                    <p class="text-sm text-secondary">Ubah informasi material atau perbarui konversi nilai poin reward.</p>
                </div>
            </div>

            <div class="bg-white border border-outline-variant rounded-xl shadow-sm overflow-hidden">
                <form action="{{ route('admin.kategori-sampah.update', $category->id_kategori) }}" method="POST" class="p-6 flex flex-col gap-5">
                    @csrf
                    @method('PUT') {{-- Directive Laravel untuk proses Update/Edit --}}

                    <div class="flex flex-col gap-2">
                        <label for="nama_kategori" class="text-sm font-bold text-slate-800">Nama Kategori Sampah <span class="text-error">*</span></label>
                        <input type="text" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $category->nama_kategori) }}" required
                            placeholder="Contoh: Plastik PET, Kardus Bekas"
                            class="w-full border border-outline-variant rounded-xl px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary @error('nama_kategori') border-error @enderror">
                        @error('nama_kategori')
                            <p class="text-xs text-error font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="poin_per_kg" class="text-sm font-bold text-slate-800">Nilai Poin per Kilogram (pts/kg) <span class="text-error">*</span></label>
                        <div class="relative flex items-center">
                            <input type="number" id="poin_per_kg" name="poin_per_kg" value="{{ old('poin_per_kg', $category->poin_per_kg) }}" min="0" required
                                placeholder="Contoh: 500"
                                class="w-full border border-outline-variant rounded-xl pl-4 pr-16 py-2.5 text-sm font-bold text-primary focus:ring-2 focus:ring-primary/20 focus:border-primary @error('poin_per_kg') border-error @enderror">
                            <span class="absolute right-4 text-xs font-bold text-slate-400">pts/kg</span>
                        </div>
                        <p class="text-xs text-slate-400">Perubahan poin hanya berlaku untuk setoran baru yang akan datang.</p>
                        @error('poin_per_kg')
                            <p class="text-xs text-error font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="deskripsi" class="text-sm font-bold text-slate-800">Deskripsi & Ketentuan Sampah</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" 
                            placeholder="Berikan catatan jenis sampah yang termasuk serta kondisinya..."
                            class="w-full border border-outline-variant rounded-xl px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary @error('deskripsi') border-error @enderror">{{ old('deskripsi', $category->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="text-xs text-error font-medium mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2 pt-2 border-t border-slate-100">
                        <label class="text-sm font-bold text-slate-800">Status Operasional</label>
                        <div class="flex items-center gap-6 mt-1">
                            <label class="flex items-center gap-2 cursor-pointer text-sm font-medium text-slate-700">
                                <input type="radio" name="status_aktif" value="1" {{ old('status_aktif', $category->status_aktif) == true ? 'checked' : '' }} class="text-primary focus:ring-primary h-4 w-4 border-slate-300">
                                <span class="flex items-center gap-1 text-emerald-700 font-bold bg-emerald-50 px-2.5 py-0.5 border border-emerald-100 rounded-full text-xs">
                                    <span class="material-symbols-outlined text-xs">check_circle</span> Aktif
                                </span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer text-sm font-medium text-slate-700">
                                <input type="radio" name="status_aktif" value="0" {{ old('status_aktif', $category->status_aktif) == false ? 'checked' : '' }} class="text-primary focus:ring-primary h-4 w-4 border-slate-300">
                                <span class="flex items-center gap-1 text-rose-700 font-bold bg-rose-50 px-2.5 py-0.5 border border-rose-100 rounded-full text-xs">
                                    <span class="material-symbols-outlined text-xs">cancel</span> Nonaktif
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-4 flex items-center justify-end gap-3 pt-4 border-t border-outline-variant">
                        <a href="{{ route('admin.kategori-sampah') }}" class="px-5 py-2.5 border border-outline-variant text-slate-700 hover:bg-slate-50 font-bold text-sm rounded-xl transition-all">
                            Batal
                        </a>
                        <button type="submit" class="px-6 py-2.5 bg-primary text-white hover:bg-primary/95 font-bold text-sm rounded-xl shadow-sm transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">save</span>
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>