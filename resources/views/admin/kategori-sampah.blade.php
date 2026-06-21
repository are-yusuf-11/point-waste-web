@extends('layouts.admin')

@section('title', 'Manajemen Kategori Sampah | PointWaste Admin')

@section('search-bar')
    <div class="relative w-full max-w-md">
        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary">search</span>
        <input id="table-search" class="w-full pl-10 pr-4 py-2 rounded-lg border border-outline-variant bg-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-body-md" placeholder="Cari kategori atau parameter..." type="text" />
    </div>
@endsection

@section('content')
    <div class="flex justify-between items-end mb-xl">
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-background">Manajemen Kategori Sampah</h2>
            <p class="font-body-md text-body-md text-secondary mt-xs">Konfigurasi master data kategori limbah dan parameter insentif poin.</p>
        </div>
        <a href="{{ route('admin.kategori-sampah.create') }}" class="bg-primary text-white px-lg py-md rounded-lg flex items-center gap-sm hover:brightness-110 active:scale-95 transition-all font-label-md inline-flex">
            <span class="material-symbols-outlined">add_circle</span>
            Tambah Kategori Master
        </a>
    </div>

    <div class="bento-grid mb-xl">
        <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant rounded-xl p-lg flex flex-col justify-between relative overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
            <div>
                <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Total Kategori</p>
                <h3 class="font-display-lg text-display-lg text-primary mt-sm">{{ $totalKategori }} Kategori</h3>
            </div>
            <div class="flex items-center gap-xs text-primary text-body-md font-bold mt-md">
                <span class="material-symbols-outlined text-[18px]">trending_up</span>
                <span>+2 Bulan ini</span>
            </div>
        </div>
        <div class="col-span-12 md:col-span-4 bg-white border border-outline-variant rounded-xl p-lg flex flex-col justify-between relative overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary-container"></div>
            <div>
                <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Rata-rata Poin / Kg</p>
                <h3 class="font-display-lg text-display-lg text-primary mt-sm">{{ number_format($totalPoinBeredar) }} Poin</h3>
            </div>
            <p class="text-body-md text-secondary mt-md">Poin dasar komoditas global</p>
        </div>
        <div class="col-span-12 md:col-span-4 bg-primary text-white border border-primary rounded-xl p-lg flex flex-col justify-between relative">
            <div class="relative z-10">
                <p class="font-label-md text-label-md text-primary-fixed uppercase tracking-wider">Efisiensi Waste-to-Point</p>
                <h3 class="font-display-lg text-display-lg text-white mt-sm">94.2%</h3>
            </div>
            <div class="relative z-10 flex items-center gap-xs text-primary-fixed text-body-md font-bold mt-md">
                <span>Optimal</span>
                <span class="material-symbols-outlined text-[18px]">check_circle</span>
            </div>
        </div>
    </div>

    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden">
        <div class="p-lg border-b border-outline-variant flex justify-between items-center bg-secondary-container/10">
            <h4 class="font-title-lg text-title-lg text-on-surface">Daftar Master Kategori</h4>
            <div class="flex gap-md">
                <button class="px-md py-sm border border-outline-variant rounded-lg text-body-md flex items-center gap-sm hover:bg-surface transition-colors">
                    <span class="material-symbols-outlined">filter_list</span> Filter
                </button>
                <button class="px-md py-sm border border-outline-variant rounded-lg text-body-md flex items-center gap-sm hover:bg-surface transition-colors">
                    <span class="material-symbols-outlined">download</span> Ekspor
                </button>
            </div>
        </div>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-secondary-container/30">
                    <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase">Kategori</th>
                    <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase text-center">Kode</th>
                    <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase">Bobot Poin (Per Kg)</th>
                    <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase">Status</th>
                    <th class="px-lg py-md font-label-md text-label-md text-secondary uppercase text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant font-body-md text-on-surface">
                @foreach($kategori as $item)
                <tr class="hover:bg-surface-container-low transition-colors">
                    <td class="px-lg py-md font-bold">
                        {{ $item->nama_kategori }}
                    </td>
                    <td class="px-lg py-md text-center text-secondary font-mono">
                        #{{ $item->id_kategori }}
                    </td>
                    <td class="px-lg py-md text-primary font-bold">
                        {{ number_format($item->poin_per_kg) }} pts/kg
                    </td>
                    <td class="px-lg py-md">
                        @if($item->status_aktif)
                            <span class="px-3 py-1 bg-primary/10 text-primary border border-primary/20 rounded-full text-xs font-bold uppercase tracking-wider">Aktif</span>
                        @else
                            <span class="px-3 py-1 bg-error-container text-error border border-error/20 rounded-full text-xs font-bold uppercase tracking-wider">Nonaktif</span>
                        @endif
                    </td>
                    <td class="px-lg py-md text-right">
                        <div class="flex gap-sm justify-end">
                            <a href="{{ route('admin.kategori-sampah.edit', $item->id_kategori) }}" class="h-8 w-8 flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-container rounded-full transition-colors" title="Edit Kategori">
                                <span class="material-symbols-outlined text-md">edit</span>
                            </a>
                            <button class="h-8 w-8 flex items-center justify-center text-on-surface-variant hover:text-error hover:bg-error-container/20 rounded-full transition-colors" title="Hapus Kategori">
                                <span class="material-symbols-outlined text-md">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-lg bg-surface flex justify-between items-center border-t border-outline-variant">
            <span class="text-body-md text-secondary">Menampilkan 4 dari 12 kategori</span>
            <div class="flex gap-sm">
                <button class="w-10 h-10 border border-outline-variant rounded-lg flex items-center justify-center disabled:opacity-50" disabled="">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="w-10 h-10 bg-primary text-white rounded-lg flex items-center justify-center font-bold">1</button>
                <button class="w-10 h-10 border border-outline-variant rounded-lg flex items-center justify-center hover:bg-surface-variant transition-colors">2</button>
                <button class="w-10 h-10 border border-outline-variant rounded-lg flex items-center justify-center hover:bg-surface-variant transition-colors">3</button>
                <button class="w-10 h-10 border border-outline-variant rounded-lg flex items-center justify-center hover:bg-surface-variant transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </div>

    <div class="mt-xl grid grid-cols-1 md:grid-cols-2 gap-lg">
        <div class="p-lg bg-surface-container rounded-xl border border-outline-variant flex gap-lg">
            <div class="w-16 h-16 shrink-0 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
                <span class="material-symbols-outlined text-[32px]">info</span>
            </div>
            <div>
                <h5 class="font-title-lg text-title-lg text-primary">Penyesuaian Nilai Komoditas</h5>
                <p class="text-body-md text-secondary mt-xs">Nilai poin per kg disesuaikan secara otomatis berdasarkan rata-rata harga pasar komoditas daur ulang nasional setiap awal bulan.</p>
            </div>
        </div>
        <div class="p-lg bg-surface-container rounded-xl border border-outline-variant flex gap-lg">
            <div class="w-16 h-16 shrink-0 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
                <span class="material-symbols-outlined text-[32px]">verified</span>
            </div>
            <div>
                <h5 class="font-title-lg text-title-lg text-primary">Standar SDG 11</h5>
                <p class="text-body-md text-secondary mt-xs">Sistem klasifikasi ini mematuhi protokol Waste Management global untuk mendukung terwujudnya Kota dan Komunitas Berkelanjutan.</p>
            </div>
        </div>
    </div>
@endsection

@section('fab')
    <button class="md:hidden fixed bottom-6 right-6 w-14 h-14 bg-primary text-white rounded-full shadow-lg flex items-center justify-center z-50 active:scale-90 transition-transform">
        <span class="material-symbols-outlined">add</span>
    </button>
@endsection

@push('scripts')
    <script>
        // Micro-interaction for hover effects on cards
        document.querySelectorAll('.bento-grid > div').forEach(card => {
            card.addEventListener('mouseenter', () => { card.classList.add('shadow-md'); });
            card.addEventListener('mouseleave', () => { card.classList.remove('shadow-md'); });
        });

        // Search highlight logic
        const searchInput = document.getElementById('table-search');
        if(searchInput) {
            searchInput.addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                const rows = document.querySelectorAll('tbody tr');
                rows.forEach(row => {
                    const text = row.innerText.toLowerCase();
                    if (text.includes(term)) {
                        row.style.display = '';
                        row.style.opacity = '1';
                    } else {
                        row.style.display = 'none';
                        row.style.opacity = '0';
                    }
                });
            });
        }
    </script>
@endpush