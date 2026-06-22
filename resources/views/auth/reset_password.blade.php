<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PointWaste - Buat Password Baru</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#004c22",
                        "primary-container": "#166534",
                        "on-surface": "#0b1c30",
                        "surface": "#f8f9ff"
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-surface text-on-surface min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-[400px] bg-white p-8 rounded-2xl shadow-md border border-slate-100">
        <div class="mb-6 text-center">
            <h2 class="text-xl font-bold text-slate-900 mb-1">Password Baru</h2>
            <p class="text-slate-500 text-sm">Silakan buat password baru yang kuat untuk akun Anda.</p>
        </div>

        <form class="space-y-4" method="POST" action="{{ route('auth.update-password') }}">
            @csrf
            
            <div class="space-y-1">
                <label class="text-xs font-semibold text-slate-600 uppercase">Password Baru</label>
                <input class="w-full px-4 py-2 border border-slate-200 rounded-xl outline-none focus:ring-1 focus:ring-primary focus:border-primary shadow-sm" type="password" name="password" required placeholder="Minimal 8 karakter" />
            </div>

            <div class="space-y-1">
                <label class="text-xs font-semibold text-slate-600 uppercase">Konfirmasi Password</label>
                <input class="w-full px-4 py-2 border border-slate-200 rounded-xl outline-none focus:ring-1 focus:ring-primary focus:border-primary shadow-sm" type="password" name="password_confirmation" required placeholder="Ulangi password baru" />
                @error('password')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button class="w-full bg-primary-container text-white hover:bg-primary transition-all py-3 rounded-xl font-semibold text-center tracking-wide shadow-md mt-2" type="submit">
                Perbarui Password
            </button>
        </form>
    </div>
</body>
</html>