@extends('layouts.admin') {{-- Sesuaikan dengan nama file layout utama Anda --}}

@section('title', 'Manajemen Pengguna - PointWaste Admin')

{{-- Menyisipkan Search Bar ke dalam Layout Utama secara Otomatis --}}
@section('search-bar')
<div class="flex items-center bg-surface-container-low px-md py-xs rounded-full w-96 border border-outline-variant">
    <span class="material-symbols-outlined text-secondary mr-sm">search</span>
    <input class="bg-transparent border-none focus:ring-0 text-body-md w-full p-0 outline-none text-on-surface" placeholder="Cari pengguna atau NIK..." type="text" />
</div>
@endsection

{{-- Menyisipkan Konten Utama ke dalam Layout Utama --}}
@section('content')
<div class="flex flex-col gap-xl">
    <div class="flex items-end justify-between">
        <div>
            <h2 class="font-headline-lg text-headline-lg text-primary">Manajemen Pengguna</h2>
            <p class="font-body-lg text-body-lg text-secondary">Kelola akses dan otoritas admin sistem serta admin wilayah.</p>
        </div>
        <a href="{{ route('admin.manajemen-pengguna.create') }}" class="bg-primary text-white px-lg py-md rounded-lg flex items-center gap-sm hover:brightness-110 active:scale-95 transition-all font-label-md inline-flex">
            <span class="material-symbols-outlined">add_circle</span>
            Tambah Pengguna Baru
        </a>
    </div>

    <div class="grid grid-cols-12 gap-lg">
        <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
            <div>
                <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Total Pengguna</p>
                <h3 class="font-headline-lg text-headline-lg mt-xs">{{ number_format($totalUsers) }}</h3>
            </div>
            <div class="mt-md flex items-center text-primary gap-xs font-label-md">
                <span class="material-symbols-outlined text-[18px]">trending_up</span>
                <span>12% dari bulan lalu</span>
            </div>
        </div>
        <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
            <div>
                <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Admin RT Aktif</p>
                <h3 class="font-headline-lg text-headline-lg mt-xs">{{ number_format($totalPengurusRt) }}</h3>
            </div>
            <div class="mt-md flex items-center text-primary gap-xs font-label-md">
                <span class="material-symbols-outlined text-[18px]">verified_user</span>
                <span>Seluruh wilayah tercover</span>
            </div>
        </div>
        <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
            <div>
                <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Pertumbuhan Mingguan</p>
                <h3 class="font-headline-lg text-headline-lg mt-xs">{{ number_format($totalWarga) }}</h3>
            </div>
            <div class="mt-md flex items-center text-tertiary gap-xs font-label-md">
                <span class="material-symbols-outlined text-[18px]">group_add</span>
                <span>Pendaftaran baru minggu ini</span>
            </div>
        </div>
    </div>

    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden">
        <div class="p-md border-b border-outline-variant flex flex-wrap gap-md items-center justify-between bg-surface-container-low/30">
            <div class="flex gap-md">
                <div class="relative">
                    <select class="appearance-none bg-white border border-outline-variant pl-md pr-xl py-sm rounded-lg font-body-md text-on-surface-variant focus:ring-primary focus:border-primary">
                        <option>Semua Peran</option>
                        <option>Admin Sistem</option>
                        <option>Admin RT</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-sm top-1/2 -translate-y-1/2 pointer-events-none text-secondary">expand_more</span>
                </div>
                <div class="relative">
                    <select class="appearance-none bg-white border border-outline-variant pl-md pr-xl py-sm rounded-lg font-body-md text-on-surface-variant focus:ring-primary focus:border-primary">
                        <option>Status: Aktif</option>
                        <option>Status: Non-Aktif</option>
                    </select>
                    <span class="material-symbols-outlined absolute right-sm top-1/2 -translate-y-1/2 pointer-events-none text-secondary">expand_more</span>
                </div>
            </div>
            <div class="flex items-center gap-sm">
                <span class="font-label-md text-secondary">Menampilkan 1-10 dari 1,284</span>
                <div class="flex border border-outline-variant rounded-lg overflow-hidden">
                    <button class="p-xs bg-white hover:bg-surface-container-low transition-colors"><span class="material-symbols-outlined">chevron_left</span></button>
                    <button class="p-xs bg-white hover:bg-surface-container-low transition-colors border-l border-outline-variant"><span class="material-symbols-outlined">chevron_right</span></button>
                </div>
            </div>
        </div>

        <div class="table-container overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-outline-variant font-label-lg text-on-surface-variant bg-surface-container-low">
                        <th class="px-lg py-md font-semibold">Nama Pengguna</th>
                        <th class="px-lg py-md font-semibold">Kontak & Alamat</th>
                        <th class="px-lg py-md font-semibold">Wilayah RT</th>
                        <th class="px-lg py-md font-semibold">Peran</th>
                        <th class="px-lg py-md font-semibold">Status</th>
                        <th class="px-lg py-md font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant font-body-md text-on-surface">
                    @foreach($users as $user)
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-lg py-md">
                            <div class="flex items-center gap-md">
                                <img alt="Avatar" class="h-10 w-10 rounded-full object-cover" 
                                    src="{{ $user->foto ? asset('storage/' . $user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80' }}" />
                                <div>
                                    <p class="font-bold text-slate-900">{{ $user->nama }}</p>
                                    <p class="text-xs text-slate-500">{{ $user->email }}</p>
                                </div>
                            </div>
                        </td>
                        
                        <td class="px-lg py-md">
                            <p class="text-slate-700 font-medium">{{ $user->no_hp ?? '-' }}</p>
                            <p class="text-xs text-slate-400 max-w-[200px] truncate" title="{{ $user->alamat }}">{{ $user->alamat ?? '-' }}</p>
                        </td>
                        
                        <td class="px-lg py-md font-medium text-slate-600">
                            @if($user->rt)
                                RT {{ $user->rt->no_rt }} - {{ $user->rt->kelurahan }}
                            @else
                                <span class="text-outline italic text-xs">Tidak Ada Wilayah</span>
                            @endif
                        </td>
                        
                        <td class="px-lg py-md">
                            @if(str_contains(strtolower($user->role), 'admin'))
                                <span class="px-3 py-1 bg-error-container text-error rounded-full text-xs font-bold capitalize">Admin</span>
                            @elseif(str_contains(strtolower($user->role), 'pengurus'))
                                <span class="px-3 py-1 bg-tertiary-fixed text-tertiary rounded-full text-xs font-bold capitalize">Pengurus RT</span>
                            @else
                                <span class="px-3 py-1 bg-primary-container/20 text-primary rounded-full text-xs font-bold capitalize">Warga</span>
                            @endif
                        </td>
                        
                        <td class="px-lg py-md">
                            @if(str_contains(strtolower($user->role), 'admin'))
                                @if($user->status)
                                    <span class="h-8 inline-flex items-center gap-1 px-3 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full text-xs font-bold opacity-75 cursor-not-allowed">
                                        <span class="material-symbols-outlined text-sm">check_circle</span>
                                        Aktif
                                    </span>
                                @else
                                    <span class="h-8 inline-flex items-center gap-1 px-3 bg-rose-50 text-rose-700 border border-rose-200 rounded-full text-xs font-bold opacity-75 cursor-not-allowed">
                                        <span class="material-symbols-outlined text-sm">cancel</span>
                                        Nonaktif
                                    </span>
                                @endif
                            @else
                                <form action="{{ route('admin.manajemen-pengguna.toggle-status', $user->id_user) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    
                                    @if($user->status)
                                        <button type="submit" class="h-8 flex items-center gap-1 px-3 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full text-xs font-bold hover:bg-rose-50 hover:text-rose-600 hover:border-rose-200 transition-colors" title="Klik untuk menonaktifkan pengguna">
                                            <span class="material-symbols-outlined text-sm">check_circle</span>
                                            Aktif
                                        </button>
                                    @else
                                        <button type="submit" class="h-8 flex items-center gap-1 px-3 bg-rose-50 text-rose-700 border border-rose-200 rounded-full text-xs font-bold hover:bg-emerald-50 hover:text-emerald-700 hover:border-emerald-200 transition-colors" title="Klik untuk mengaktifkan pengguna">
                                            <span class="material-symbols-outlined text-sm">cancel</span>
                                            Nonaktif
                                        </button>
                                    @endif
                                </form>
                            @endif
                        </td>
                        
                        <td class="px-lg py-md text-right">
                            <div class="flex items-center justify-end gap-sm">
                                <a href="{{ route('admin.manajemen-pengguna.edit', $user->id_user) }}" 
                                   class="h-8 w-8 flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-container rounded-full transition-colors" 
                                   title="Edit">
                                    <span class="material-symbols-outlined text-md">edit</span>
                                </a>

                                @if(!str_contains(strtolower($user->role), 'admin'))
                                    <form action="{{ route('admin.manajemen-pengguna.destroy', $user->id_user) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="h-8 w-8 flex items-center justify-center text-on-surface-variant hover:text-error hover:bg-error-container/20 rounded-full transition-colors" 
                                                title="Hapus">
                                            <span class="material-symbols-outlined text-md">delete</span>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-md flex items-center justify-between border-t border-outline-variant bg-surface-container-low/30">
            <button class="px-md py-sm border border-outline-variant rounded-lg text-body-md font-label-md hover:bg-white transition-colors">Sebelumnya</button>
            <div class="flex gap-xs">
                <button class="w-8 h-8 flex items-center justify-center bg-primary text-white rounded-lg text-body-md">1</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg text-body-md transition-colors">2</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg text-body-md transition-colors">3</button>
                <span class="w-8 h-8 flex items-center justify-center text-secondary">...</span>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg text-body-md transition-colors">12</button>
            </div>
            <button class="px-md py-sm border border-outline-variant rounded-lg text-body-md font-label-md hover:bg-white transition-colors">Berikutnya</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
        <div class="bg-primary/5 p-lg rounded-xl border border-primary-container/20 flex gap-lg items-center">
            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[32px]">shield</span>
            </div>
            <div>
                <h4 class="font-title-lg text-title-lg text-primary">Keamanan Data Admin</h4>
                <p class="font-body-md text-body-md text-on-surface-variant mt-xs">Seluruh aktivitas admin tercatat secara otomatis dalam log audit sistem untuk menjamin transparansi pengelolaan.</p>
            </div>
        </div>
        <div class="bg-secondary/5 p-lg rounded-xl border border-secondary/20 flex gap-lg items-center">
            <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-[32px]">hub</span>
            </div>
            <div>
                <h4 class="font-title-lg text-title-lg text-secondary">Interkoneksi Wilayah</h4>
                <p class="font-body-md text-body-md text-on-surface-variant mt-xs">Sistem ini saat ini memfasilitasi 24 Kelurahan dengan integrasi data point real-time antar RT.</p>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Menyisipkan Script Interaksi Khusus Halaman ini ke @stack('scripts') di Layout --}}
@push('scripts')
<script>
    // Micro-interactions untuk tombol klik/aktif
    document.querySelectorAll('button, a').forEach(el => {
        el.addEventListener('mousedown', () => { el.style.transform = 'scale(0.97)'; });
        el.addEventListener('mouseup', () => { el.style.transform = 'scale(1)'; });
    });

    // Fitur Live Search Sederhana di Sisi Klien
    const searchInput = document.querySelector('input[placeholder="Cari pengguna atau NIK..."]');
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                const text = row.innerText.toLowerCase();
                row.style.display = text.includes(term) ? '' : 'none';
            });
        });
    }
</script>
@endpush