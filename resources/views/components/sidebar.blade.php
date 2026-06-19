<aside class="w-64 bg-white border-r border-slate-200 flex flex-col justify-between fixed h-full z-10">
    <div>
        <div class="p-6">
            <h1 class="text-xl font-bold text-pointwaste-primary tracking-wide">PointWaste</h1>
        </div>

        <nav class="px-4 space-y-1">
            <a href="{{ route('warga.dashboard') }}" 
               class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('warga.dashboard') ? 'bg-emerald-50 text-pointwaste-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path></svg>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('warga.setor-sampah') }}" 
               class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('warga.setor-sampah') ? 'bg-emerald-50 text-pointwaste-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                <span>Setor Sampah</span>
            </a>

            <a href="{{ route('warga.mutasi-poin') }}" 
               class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('warga.mutasi-poin') ? 'bg-emerald-50 text-pointwaste-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                <span>Mutasi Poin</span>
            </a>

            <a href="{{ route('warga.iuran') }}" 
               class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('warga.iuran') ? 'bg-emerald-50 text-pointwaste-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                <span>Tagihan Iuran</span>
            </a>

            <a href="{{ route('warga.profil') }}" 
               class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('warga.profil') ? 'bg-emerald-50 text-pointwaste-primary' : 'text-slate-600 hover:bg-slate-50 hover:text-pointwaste-primary' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span>Profil</span>
            </a>
        </nav>
    </div>

    <div class="p-4 border-t border-slate-100 space-y-3">
        <div class="flex items-center space-x-3 px-2">
            <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden flex-shrink-0">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Avatar User" class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <h4 class="text-xs font-semibold text-slate-800 truncate">{{ Auth::user()->nama }}</h4>
                <p class="text-[10px] text-slate-400 truncate uppercase">{{ Auth::user()->role }}</p>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST" class="block w-full">
            @csrf
            <button type="submit" class="w-full bg-indigo-50 text-indigo-600 hover:bg-indigo-100 font-medium py-2 px-4 rounded-lg text-xs flex items-center justify-center space-x-2 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </div>
</aside>