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
<div class="flex flex-col gap-xl p-2">
    <div class="flex items-end justify-between">
        <div>
            <h2 class="font-headline-lg text-headline-lg text-primary font-bold text-2xl">Manajemen Pengguna</h2>
            <p class="font-body-lg text-body-lg text-secondary text-sm">Kelola akses dan otoritas admin sistem serta admin wilayah.</p>
        </div>
        <a href="{{ route('admin.manajemen-pengguna.create') }}" class="bg-primary text-white px-lg py-md rounded-lg flex items-center gap-sm hover:brightness-110 active:scale-95 transition-all font-label-md inline-flex text-sm font-semibold">
            <span class="material-symbols-outlined mr-1">add_circle</span>
            Tambah Pengguna Baru
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
        <div class="bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden shadow-sm p-5">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
            <div>
                <p class="font-label-md text-label-md text-secondary uppercase tracking-wider text-xs">Total Pengguna</p>
                <h3 class="font-headline-lg text-headline-lg mt-xs text-xl font-bold">{{ number_format($totalUsers) }}</h3>
            </div>
            <div class="mt-md flex items-center text-primary gap-xs font-label-md text-xs">
                <span class="material-symbols-outlined text-[18px] mr-1">trending_up</span>
                <span>12% dari bulan lalu</span>
            </div>
        </div>
        
        <div class="bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden shadow-sm p-5">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
            <div>
                <p class="font-label-md text-label-md text-secondary uppercase tracking-wider text-xs">Admin RT Aktif</p>
                <h3 class="font-headline-lg text-headline-lg mt-xs text-xl font-bold">{{ number_format($totalPengurusRt) }}</h3>
            </div>
            <div class="mt-md flex items-center text-primary gap-xs font-label-md text-xs">
                <span class="material-symbols-outlined text-[18px] mr-1">verified_user</span>
                <span>Seluruh wilayah tercover</span>
            </div>
        </div>
        
        <div class="bg-white border border-outline-variant p-lg rounded-xl flex flex-col justify-between relative overflow-hidden shadow-sm p-5">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
            <div>
                <p class="font-label-md text-label-md text-secondary uppercase tracking-wider text-xs">Total Warga</p>
                <h3 class="font-headline-lg text-headline-lg mt-xs text-xl font-bold">{{ number_format($totalWarga) }}</h3>
            </div>
            <div class="mt-md flex items-center text-tertiary gap-xs font-label-md text-xs">
                <span class="material-symbols-outlined text-[18px] mr-1">group_add</span>
                <span>Pendaftaran baru minggu ini</span>
            </div>
        </div>
    </div>

    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden shadow-sm">
        <div class="p-md p-4 border-b border-outline-variant flex flex-wrap gap-md items-center justify-between bg-surface-container-low/30">
            <div class="flex gap-md">
                <div class="relative">
                    <select class="appearance-none bg-white border border-outline-variant pl-md pr-xl py-sm p-2 rounded-lg font-body-md text-on-surface-variant focus:ring-primary focus:border-primary text-xs">
                        <option>Semua Peran</option>
                        <option>Admin Sistem</option>
                        <option>Admin RT</option>
                    </select>
                </div>
                <div class="relative">
                    <select class="appearance-none bg-white border border-outline-variant pl-md pr-xl py-sm p-2 rounded-lg font-body-md text-on-surface-variant focus:ring-primary focus:border-primary text-xs">
                        <option>Status: Aktif</option>
                        <option>Status: Non-Aktif</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center gap-sm text-xs text-secondary">
                <span class="font-label-md">Menampilkan 1-10 dari {{ number_format($totalUsers) }}</span>
                <div class="flex border border-outline-variant rounded-lg overflow-hidden ml-2">
                    <button class="p-xs bg-white hover:bg-surface-container-low p-1 transition-colors"><span class="material-symbols-outlined text-sm flex">chevron_left</span></button>
                    <button class="p-xs bg-white hover:bg-surface-container-low p-1 transition-colors border-l border-outline-variant"><span class="material-symbols-outlined text-sm flex">chevron_right</span></button>
                </div>
            </div>
        </div>

        <div class="table-container overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="border-b border-outline-variant font-label-lg text-on-surface-variant bg-surface-container-low/50">
                        <th class="px-lg py-md p-3 font-semibold">Nama Pengguna</th>
                        <th class="px-lg py-md p-3 font-semibold">Kontak & Alamat</th>
                        <th class="px-lg py-md p-3 font-semibold">Wilayah RT</th>
                        <th class="px-lg py-md p-3 font-semibold">Peran</th>
                        <th class="px-lg py-md p-3 font-semibold">Status</th>
                        <th class="px-lg py-md p-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant font-body-md text-on-surface">
                    @foreach($users as $user)
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-lg py-md p-3">
                            <div class="flex items-center gap-md">
                                <img alt="Avatar" class="h-8 w-8 rounded-full object-cover mr-2" 
                                    src="{{ $user->foto ? asset('storage/' . $user->foto) : 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80' }}" />
                                <div>
                                    <p class="font-bold text-slate-900">{{ $user->nama }}</p>
                                    <p class="text-[11px] text-slate-500">{{ $user->email }}</p>
                                </div>
                            </div>
                        </td>
                        
                        <td class="px-lg py-md p-3">
                            <p class="text-slate-700 font-semibold">{{ $user->no_hp ?? '-' }}</p>
                            <p class="text-[11px] text-slate-400 max-w-[200px] truncate" title="{{ $user->alamat }}">{{ $user->alamat ?? '-' }}</p>
                        </td>
                        
                        <td class="px-lg py-md p-3 font-medium text-slate-600">
                            @if($user->rt)
                                RT {{ $user->rt->no_rt }} - {{ $user->rt->kelurahan }}
                            @else
                                <span class="text-outline italic text-[11px] text-slate-400">Tidak Ada Wilayah</span>
                            @endif
                        </td>
                        
                        <td class="px-lg py-md p-3">
                            @if(str_contains(strtolower($user->role), 'admin'))
                                <span class="px-2 py-0.5 bg-rose-50 text-rose-700 border border-rose-200 rounded-full text-[10px] font-bold uppercase">Admin</span>
                            @elseif(str_contains(strtolower($user->role), 'pengurus'))
                                <span class="px-2 py-0.5 bg-amber-50 text-amber-700 border border-amber-200 rounded-full text-[10px] font-bold uppercase">Pengurus RT</span>
                            @else
                                <span class="px-2 py-0.5 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full text-[10px] font-bold uppercase">Warga</span>
                            @endif
                        </td>
                        
                        <td class="px-lg py-md p-3">
                            @if(str_contains(strtolower($user->role), 'admin'))
                                @if($user->status)
                                    <span class="h-6 inline-flex items-center gap-1 px-2.5 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full text-[11px] font-bold opacity-75 cursor-not-allowed">
                                        <span class="material-symbols-outlined text-xs">check_circle</span> Aktif
                                    </span>
                                @else
                                    <span class="h-6 inline-flex items-center gap-1 px-2.5 bg-rose-50 text-rose-700 border border-rose-200 rounded-full text-[11px] font-bold opacity-75 cursor-not-allowed">
                                        <span class="material-symbols-outlined text-xs">cancel</span> Nonaktif
                                    </span>
                                @endif
                            @else
                                <form action="{{ route('admin.manajemen-pengguna.toggle-status', $user->id_user) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    @if($user->status)
                                        <button type="submit" class="h-6 flex items-center gap-1 px-2.5 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-full text-[11px] font-bold hover:bg-rose-50 hover:text-rose-600 hover:border-rose-200 transition-colors" title="Klik untuk menonaktifkan pengguna">
                                            <span class="material-symbols-outlined text-xs">check_circle</span> Aktif
                                        </button>
                                    @else
                                        <button type="submit" class="h-6 flex items-center gap-1 px-2.5 bg-rose-50 text-rose-700 border border-rose-200 rounded-full text-[11px] font-bold hover:bg-emerald-50 hover:text-emerald-700 hover:border-emerald-200 transition-colors" title="Klik untuk mengaktifkan pengguna">
                                            <span class="material-symbols-outlined text-xs">cancel</span> Nonaktif
                                        </button>
                                    @endif
                                </form>
                            @endif
                        </td>
                        
                        <td class="px-lg py-md p-3 text-right">
                            <div class="flex items-center justify-end gap-1">
                                <a href="{{ route('admin.manajemen-pengguna.edit', $user->id_user) }}" 
                                   class="h-7 w-7 flex items-center justify-center text-slate-500 hover:text-primary hover:bg-slate-100 rounded-full transition-colors" 
                                   title="Edit">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                </a>

                                @if(!str_contains(strtolower($user->role), 'admin'))
                                <form action="{{ route('admin.manajemen-pengguna.destroy', $user->id_user) }}" 
                                      method="POST" 
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="h-7 w-7 flex items-center justify-center text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-full transition-colors" 
                                            title="Hapus">
                                        <span class="material-symbols-outlined text-sm">delete</span>
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

        <div class="p-md p-4 flex items-center justify-between border-t border-outline-variant bg-surface-container-low/30 text-xs text-slate-500 font-semibold">
            <button class="px-3 py-1.5 border border-outline-variant rounded-lg hover:bg-white transition-colors">Sebelumnya</button>
            <div class="flex gap-1">
                <button class="w-7 h-7 flex items-center justify-center bg-primary text-white rounded-lg">1</button>
                <button class="w-7 h-7 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg transition-colors">2</button>
                <button class="w-7 h-7 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg transition-colors">3</button>
                <span class="w-7 h-7 flex items-center justify-center text-secondary">...</span>
                <button class="w-7 h-7 flex items-center justify-center hover:bg-white border border-transparent hover:border-outline-variant rounded-lg transition-colors">12</button>
            </div>
            <button class="px-3 py-1.5 border border-outline-variant rounded-lg hover:bg-white transition-colors">Berikutnya</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-lg mb-6">
        <div class="bg-blue-50/50 p-lg p-5 rounded-xl border border-blue-100 flex gap-4 items-center">
            <div class="w-12 h-12 bg-blue-600/10 rounded-full flex items-center justify-center text-blue-600 shrink-0">
                <span class="material-symbols-outlined text-xl">shield</span>
            </div>
            <div>
                <h4 class="font-title-lg text-sm font-bold text-slate-800">Keamanan Data Admin</h4>
                <p class="font-body-md text-xs text-slate-500 mt-1">Seluruh aktivitas admin tercatat secara otomatis dalam log audit sistem untuk menjamin transparansi pengelolaan.</p>
            </div>
        </div>
        <div class="bg-emerald-50/50 p-lg p-5 rounded-xl border border-emerald-100 flex gap-4 items-center">
            <div class="w-12 h-12 bg-emerald-600/10 rounded-full flex items-center justify-center text-emerald-600 shrink-0">
                <span class="material-symbols-outlined text-xl">hub</span>
            </div>
            <div>
                <h4 class="font-title-lg text-sm font-bold text-slate-800">Interkoneksi Wilayah</h4>
                <p class="font-body-md text-xs text-slate-500 mt-1">Sistem ini saat ini memfasilitasi 24 Kelurahan dengan integrasi data point real-time antar RT.</p>
            </div>
        </div>
    </div>
</div>

<footer class="p-4 border-t border-slate-200 flex justify-between items-center text-slate-400 text-xs font-semibold mt-auto">
    <p>© 2024 PointWaste System Dashboard. All Rights Reserved.</p>
    <div class="flex gap-4">
        <a class="hover:underline" href="#">Syarat & Ketentuan</a>
        <a class="hover:underline" href="#">Kebijakan Privasi</a>
    </div>
</footer>
@endsection

@push('scripts')
<script>
    // Simple Micro-interactions
    document.querySelectorAll('button, a').forEach(el => {
        el.addEventListener('mousedown', () => {
            el.style.transform = 'scale(0.97)';
        });
        el.addEventListener('mouseup', () => {
            el.style.transform = 'scale(1)';
        });
    });
</script>
@endpush