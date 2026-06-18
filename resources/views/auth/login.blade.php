<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PointWaste</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#fafafa] min-h-screen flex m-0 p-0 box-border">

    <div class="w-full min-h-screen flex flex-row">
        
        <div class="hidden md:flex md:w-1/2 relative bg-cover bg-center items-center justify-center p-12" 
             style="background-image: linear-gradient(to bottom, rgba(21, 87, 56, 0.85), rgba(12, 53, 34, 0.9)), url('https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?q=80&w=1000&auto=format&fit=crop');">
            
            <div class="max-w-md text-white z-10">
                <div class="bg-[#115e3b] w-14 h-14 rounded-2xl flex items-center justify-center mb-6 shadow-lg border border-[#1b7249]">
                    <svg class="w-8 h-8 text-[#4ade80]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.21 10H17M9 21H3m0 0v-6m0 6h6"></path>
                    </svg>
                </div>
                
                <h1 class="text-4xl font-bold tracking-tight mb-4">PointWaste</h1>
                <p class="text-gray-200 text-sm leading-relaxed mb-8">
                    Mengelola sampah jadi lebih bernilai. Bergabunglah dengan komunitas kami untuk mewujudkan lingkungan yang lebih bersih dan berkelanjutan.
                </p>

                <div class="flex gap-4">
                    <div class="flex-1 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-xl">
                        <span class="block text-2xl font-bold">45.2k</span>
                        <span class="text-xs text-gray-300 uppercase font-medium tracking-wider">Ton Sampah Terolah</span>
                    </div>
                    <div class="flex-1 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-xl">
                        <span class="block text-2xl font-bold">12.8k</span>
                        <span class="text-xs text-gray-300 uppercase font-medium tracking-wider">Warga Aktif</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex items-center justify-center p-8 bg-white">
            <div class="w-full max-w-md">
                
                <h2 class="text-3xl font-bold text-[#112233] mb-2">Selamat Datang</h2>
                <p class="text-gray-500 text-sm mb-6">Masuk ke akun Anda untuk mengelola setoran sampah.</p>

                <div class="bg-gray-100 p-1 rounded-xl flex mb-6">
                    <button class="flex-1 py-2 text-sm font-semibold rounded-lg bg-white text-[#155738] shadow-sm transition">Login</button>
                    <button class="flex-1 py-2 text-sm font-medium rounded-lg text-gray-500 hover:text-gray-700 transition">Register</button>
                </div>

                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <div class="relative">
                            <input type="email" placeholder="Masukkan Email" 
                                   class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#155738] focus:border-transparent transition">
                            <span class="absolute right-4 top-3.5 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-xs font-semibold text-[#155738] hover:underline">Lupa Password?</a>
                        </div>
                        <div class="relative">
                            <input type="password" placeholder="Masukkan password" 
                                   class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#155738] focus:border-transparent transition">
                            <span class="absolute right-4 top-3.5 text-gray-400 cursor-pointer">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" class="h-4 w-4 text-[#155738] focus:ring-[#155738] border-gray-300 rounded-md">
                        <label for="remember_me" class="ml-2 block text-xs text-gray-600">Ingat saya</label>
                    </div>

                    <button type="submit" 
                            class="w-full bg-[#155738] hover:bg-[#0f4028] text-white py-3.5 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2 transition shadow-md shadow-emerald-900/10">
                        Login Sekarang
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l7 7m-7-7H3"></path></svg>
                    </button>
                </form>

                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-gray-200"></div></div>
                    <div class="relative flex justify-center text-xs uppercase"><span class="bg-white px-3 text-gray-400 font-medium">Atau masuk dengan</span></div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <button class="flex items-center justify-center gap-2 py-2.5 border border-gray-200 rounded-xl text-xs font-semibold text-gray-700 hover:bg-gray-50 transition">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-4 h-4" alt="Google">
                        Google
                    </button>
                    <button class="flex items-center justify-center gap-2 py-2.5 border border-gray-200 rounded-xl text-xs font-semibold text-gray-700 hover:bg-gray-50 transition">
                        <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" class="w-4 h-4" alt="Facebook">
                        Facebook
                    </button>
                </div>

                <p class="text-center text-xs text-gray-500 mt-8">
                    Butuh bantuan? <a href="#" class="text-[#155738] font-semibold hover:underline">Hubungi Admin</a>
                </p>

            </div>
        </div>

    </div>

</body>
</html>