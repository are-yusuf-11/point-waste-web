{{-- Skenario 1: Notifikasi Berhasil (Success) --}}
@if(session('success'))
<div id="alert-toast" class="fixed bottom-24 right-5 z-[60] flex items-center gap-4 bg-white px-5 py-4 rounded-2xl shadow-[0_15px_50px_-10px_rgba(0,0,0,0.2)] border-l-4 border-green-500 transition-all duration-500 transform translate-x-[150%] max-w-md w-full sm:w-[380px]">
    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 shrink-0">
        <span class="material-symbols-outlined text-xl">check_circle</span>
    </div>
    <div class="flex-1 min-w-0">
        <h4 class="font-bold text-[#0F2841] text-sm">Berhasil!</h4>
        <p class="text-xs text-gray-500 leading-relaxed mt-0.5 break-words">{{ session('success') }}</p>
    </div>
    <button onclick="closeAlert()" class="ml-1 text-gray-400 hover:text-gray-600 transition-colors shrink-0">
        <span class="material-symbols-outlined text-sm">close</span>
    </button>
</div>
@endif

{{-- Skenario 2: Notifikasi Gagal (Error Sesi / Error Validasi Form) --}}
@if(session('error') || $errors->any())
<div id="alert-toast" class="fixed bottom-24 right-5 z-[60] flex items-center gap-4 bg-white px-5 py-4 rounded-2xl shadow-[0_15px_50px_-10px_rgba(0,0,0,0.2)] border-l-4 border-red-500 transition-all duration-500 transform translate-x-[150%] max-w-md w-full sm:w-[380px]">
    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center text-red-600 shrink-0">
        <span class="material-symbols-outlined text-xl">error</span>
    </div>
    <div class="flex-1 min-w-0">
        <h4 class="font-bold text-[#0F2841] text-sm">Gagal!</h4>
        @if(session('error'))
            <p class="text-xs text-gray-500 leading-relaxed mt-0.5 break-words">{{ session('error') }}</p>
        @elseif($errors->any())
            <p class="text-xs text-gray-500 leading-relaxed mt-0.5 break-words">{{ $errors->first() }}</p>
        @endif
    </div>
    <button onclick="closeAlert()" class="ml-1 text-gray-400 hover:text-gray-600 transition-colors shrink-0">
        <span class="material-symbols-outlined text-sm">close</span>
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

            // Keluar Otomatis setelah 5 detik
            setTimeout(() => {
                closeAlert();
            }, 5000);
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