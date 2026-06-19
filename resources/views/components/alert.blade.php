{{-- Skenario 1: Notifikasi Berhasil (Success) --}}
@if(session('success'))
<div id="alert-toast" class="fixed bottom-24 right-5 z-[60] flex items-center gap-3 bg-white px-4 py-3 rounded-2xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.2)] border-l-4 border-green-500 transition-all duration-500 transform translate-x-[150%] max-w-[280px]">
    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center text-green-600 shrink-0">
        <span class="material-symbols-outlined text-sm">check_circle</span>
    </div>
    <div>
        <h4 class="font-bold text-[#0F2841] text-xs">Berhasil!</h4>
        <p class="text-[10px] text-gray-500 leading-tight">{{ session('success') }}</p>
    </div>
    <button onclick="closeAlert()" class="ml-2 text-gray-300 hover:text-gray-500">
        <span class="material-symbols-outlined text-xs">close</span>
    </button>
</div>
@endif

{{-- Skenario 2: Notifikasi Gagal (Error Sesi / Error Validasi Form) --}}
@if(session('error') || $errors->any())
<div id="alert-toast" class="fixed bottom-24 right-5 z-[60] flex items-center gap-3 bg-white px-4 py-3 rounded-2xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.2)] border-l-4 border-red-500 transition-all duration-500 transform translate-x-[150%] max-w-[280px]">
    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center text-red-600 shrink-0">
        <span class="material-symbols-outlined text-base">error</span>
    </div>
    <div>
        <h4 class="font-bold text-[#0F2841] text-xs">Gagal!</h4>
        @if(session('error'))
            <p class="text-[10px] text-gray-500 leading-tight">{{ session('error') }}</p>
        @elseif($errors->any())
            <p class="text-[10px] text-gray-500 leading-tight">{{ $errors->first() }}</p>
        @endif
    </div>
    <button onclick="closeAlert()" class="ml-2 text-gray-300 hover:text-gray-500">
        <span class="material-symbols-outlined text-xs">close</span>
    </button>
</div>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const alertToast = document.getElementById('alert-toast');
        
        if (alertToast) {
            // Efek Masuk
            setTimeout(() => {
                alertToast.classList.remove('translate-x-[150%]');
                alertToast.classList.add('translate-x-0');
            }, 100);

            // Keluar Otomatis setelah 4 detik
            setTimeout(() => {
                closeAlert();
            }, 4000);
        }
    });

    function closeAlert() {
        const alertToast = document.getElementById('alert-toast');
        if (alertToast) {
            alertToast.classList.remove('translate-x-0');
            alertToast.classList.add('translate-x-[150%]');
        }
    }
</script>