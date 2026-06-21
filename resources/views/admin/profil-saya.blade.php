@extends('layouts.admin')

@section('title', 'Profil Saya - PointWaste Admin')

{{-- Jika layout admin Anda mendukung penempatan search bar khusus --}}

@section('content')
<div class="max-w-[1280px] mx-auto p-xl">
    
    <div class="mb-xl">
        <h2 class="text-2xl font-bold text-on-background">Profil Saya</h2>
        <p class="text-sm text-secondary mt-xs">Kelola data personal Anda, foto profil, beserta keamanan kredensial akun administrator.</p>
    </div>

    @if(session('success'))
        <div class="mb-lg p-md bg-primary/10 border border-primary/30 text-primary rounded-xl flex items-center gap-sm">
            <span class="material-symbols-outlined">check_circle</span>
            <span class="text-sm font-bold">{{ session('success') }}</span>
        </div>
    @endif

    @if($errors->any())
        <div class="mb-lg p-md bg-error-container/30 border border-error/30 text-error rounded-xl flex flex-col gap-xs">
            @foreach($errors->all() as $error)
                <div class="flex items-center gap-sm text-sm font-bold">
                    <span class="material-symbols-outlined text-sm">error</span>
                    <span>{{ $error }}</span>
                </div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('admin.profil-saya.update') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-xl">
        @csrf
        @method('PUT')

        <div class="lg:col-span-4 bg-white border border-outline-variant rounded-xl p-lg flex flex-col items-center text-center h-fit">
            <div class="relative w-32 h-32 rounded-full bg-surface-container flex items-center justify-center overflow-hidden border border-outline-variant mb-md">
                <img id="avatar-preview" class="w-full h-full object-cover" 
                     src="{{ $admin->foto ? (str_contains($admin->foto, 'http') ? $admin->foto : asset('storage/' . $admin->foto)) : 'https://lh3.googleusercontent.com/aida-public/AB6AXuC-e-TMVqsftkDP4Wlizop1m-_8E9M8iSggutpsb9PfO6t_JVTLBe_JstJf7vvXIG0kPVWIjFzjJqNASElXjIw-R65n8aNbDGcmSJ3JpqWLju0HXA8CiQQKx-VsJyk6s3QCH-5gmSrObM7kpECfo-blKQ75xQQ4ZfAZfcoeb_8JkGJo5hQwItAfPT4Jly3UHilKMktBoV13mtQMi6einNwS4vVUze5cebd5xgeLGb9qBF2s79dpDShlfo_ssDq5m88HEAvvX2Ln074' }}" 
                     alt="Avatar Admin" />
            </div>
            <h4 class="text-md font-bold text-on-surface">{{ $admin->nama }}</h4>
            <span class="px-3 py-1 bg-primary/10 text-primary border border-primary/20 rounded-full text-xs font-bold uppercase tracking-wider mt-xs">{{ $admin->role }}</span>
            
            <div class="mt-xl w-full">
                <label for="foto" class="w-full inline-flex justify-center items-center gap-sm px-md py-sm border border-outline-variant rounded-lg text-sm font-semibold hover:bg-surface cursor-pointer transition-all">
                    <span class="material-symbols-outlined text-md">upload_file</span>
                    Pilih Foto Baru
                </label>
                <input type="file" name="foto" id="foto" class="hidden" accept="image/*" onchange="previewImage(event)" />
                <p class="text-[11px] text-secondary mt-sm">Format: JPG, JPEG, PNG. Maksimal ukuran file 2MB.</p>
            </div>
        </div>

        <div class="lg:col-span-8 flex flex-col gap-lg">
            
            <div class="bg-white border border-outline-variant rounded-xl p-lg flex flex-col gap-md">
                <h3 class="text-md font-bold text-primary border-b border-outline-variant pb-xs flex items-center gap-xs">
                    <span class="material-symbols-outlined text-md">badge</span> Informasi Personal
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div class="flex flex-col gap-xs">
                        <label for="nama" class="text-xs font-bold text-secondary">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama', $admin->nama) }}" class="w-full rounded-lg border border-outline-variant bg-surface px-md py-sm text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" required />
                    </div>
                    <div class="flex flex-col gap-xs">
                        <label for="email" class="text-xs font-bold text-secondary">Alamat Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $admin->email) }}" class="w-full rounded-lg border border-outline-variant bg-surface px-md py-sm text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" required />
                    </div>
                    <div class="flex flex-col gap-xs">
                        <label for="no_hp" class="text-xs font-bold text-secondary">Nomor Telepon / HP</label>
                        <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $admin->no_hp) }}" class="w-full rounded-lg border border-outline-variant bg-surface px-md py-sm text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Contoh: 08123456789" />
                    </div>
                </div>

                <div class="flex flex-col gap-xs">
                    <label for="alamat" class="text-xs font-bold text-secondary">Alamat Tinggal</label>
                    <textarea name="alamat" id="alamat" rows="3" class="w-full rounded-lg border border-outline-variant bg-surface px-md py-sm text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Tuliskan alamat domisili lengkap Anda...">{{ old('alamat', $admin->alamat) }}</textarea>
                </div>
            </div>

            <div class="bg-white border border-outline-variant rounded-xl p-lg flex flex-col gap-md">
                <h3 class="text-md font-bold text-primary border-b border-outline-variant pb-xs flex items-center gap-xs">
                    <span class="material-symbols-outlined text-md">lock</span> Ganti Password Keamanan
                </h3>
                <p class="text-xs text-secondary -mt-xs">Kosongkan kolom-kolom password di bawah ini jika Anda tidak berniat mengganti password lama.</p>
                
                <div class="flex flex-col gap-xs">
                    <label for="current_password" class="text-xs font-bold text-secondary">Password Lama Saat Ini</label>
                    <input type="password" name="current_password" id="current_password" class="w-full rounded-lg border border-outline-variant bg-surface px-md py-sm text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="••••••••" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div class="flex flex-col gap-xs">
                        <label for="new_password" class="text-xs font-bold text-secondary">Password Baru (Minimal 8 Karakter)</label>
                        <input type="password" name="new_password" id="new_password" class="w-full rounded-lg border border-outline-variant bg-surface px-md py-sm text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="••••••••" />
                    </div>
                    <div class="flex flex-col gap-xs">
                        <label for="new_password_confirmation" class="text-xs font-bold text-secondary">Konfirmasi Ulang Password Baru</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="w-full rounded-lg border border-outline-variant bg-surface px-md py-sm text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="••••••••" />
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-md">
                <button type="reset" class="px-lg py-md border border-outline-variant rounded-lg font-semibold text-sm hover:bg-surface active:scale-95 transition-all">
                    Batalkan Perubahan
                </button>
                <button type="submit" class="bg-primary text-white px-xl py-md rounded-lg font-bold text-sm hover:brightness-110 active:scale-95 transition-all flex items-center gap-xs shadow-sm">
                    <span class="material-symbols-outlined text-md">save</span> Simpan Pembaruan Profil
                </button>
            </div>

        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    // Script untuk melakukan live preview foto profil sesaat setelah dipilih oleh user
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('avatar-preview');
            output.src = reader.result;
        }
        if(event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>
@endpush