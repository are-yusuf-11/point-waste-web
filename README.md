# <div align="center"> 🚀 WEBSITE HIMSI CIKARANG </div>
### <div align="center"> Universitas Bina Sarana Informatika </div>

<div align="center">
  <img src="public/logo/himsi.png" alt="Logo HIMSI" width="180">
  <br><br>
  
  ![Progress](https://img.shields.io/badge/Progress-2%25-green?style=for-the-badge&logo=github)
  ![Tech](https://img.shields.io/badge/Tech-Laravel-777BB4?style=for-the-badge&logo=laravel)
  ![Version](https://img.shields.io/badge/Version-1.0.0-aqua?style=for-the-badge&logo=semver)
  <br>

  **"ONE ORGANIZATION, ONE FAMILY, ONE GOAL. GOLD!"**
</div>

---

## 📋 Tentang Project
**Web Project** ini adalah program kerja jangka panjang **HIMSI UBSI Cikarang**. Sistem ini dirancang sebagai solusi digital terintegrasi untuk memudahkan pengurus dalam mengelola organisasi secara bertahap melalui tiga pilar utama:

* **📦 Administrasi:** Digitalisasi proses administrasi dan persuratan organisasi.
* **👥 Kaderisasi:** Manajemen data anggota dan pengembangan sumber daya manusia (SDM).
* **📸 Dokumentasi:** Pengarsipan dokumentasi kegiatan dan publikasi informasi resmi.

Projek ini bertujuan untuk meningkatkan keterampilan teknis pengurus dalam membangun aplikasi web berbasis **Laravel** sekaligus meningkatkan kekuatan **branding digital** HIMSI UBSI Cikarang ke publik.

---

## 👥 Struktur Tim & Peran
Kolaborasi proyek ini dibagi menjadi 5 tim inti dengan tanggung jawab spesifik:

| Tim | Peran | Deskripsi Tugas |
| :--- | :--- | :--- |
| **BPH** | **Project Manager** | Pengendali arah proyek, pengawas timeline, dan pengambil keputusan tertinggi. |
| **Pendidikan** | **System Analyst** | Penanggung jawab *User Requirement*, logika alur fitur, dan perancangan sistem. |
| **RSDM** | **Database Manager** | Arsitek basis data, bertanggung jawab atas manajemen struktur tabel dan relasi data. |
| **Litbang** | **Backend Developer** | Pengembangan logika sisi server (server-side), integrasi API, dan performa Laravel. |
| **Kominfo** | **Frontend Developer** | Implementasi desain antarmuka (UI/UX) agar responsif, rapi, dan nyaman digunakan. |

---

## 🛠️ Tech Stack & Standarisasi
Teknologi utama yang disepakati untuk digunakan dalam masa pengembangan:

* **Backend:** Laravel (PHP)
* **Database:** MySQL
* **Frontend:** Bootstrap 5 / Tailwind CSS
* **Version Control:** Git & GitHub

> [!IMPORTANT]
> **Catatan Penting Pengembangan:**
> * Sangat direkomendasikan menggunakan kombinasi utama **Laravel + MySQL + Bootstrap 5**.
> * Lihat folder `teams/tim-contoh/` sebagai referensi standarisasi penulisan struktur kode Anda.
> * **TIDAK PERLU HOSTING!** Pengembangan dilakukan sepenuhnya di lingkungan *localhost* masing-masing.

---

## 🛑 Aturan Emas Git (Golden Rule)
> **JANGAN PERNAH** melakukan `commit` atau `push` langsung ke branch `main`. 
> Branch `main` adalah jalur suci untuk kode produksi yang stabil. Semua fitur baru wajib melalui **Pull Request (PR)**.

---

## 🚀 Alur Kerja Kolaborasi (Cara Mulai Git)

Bagi anggota tim, ikuti alur kerja (*Git Workflow*) harian berikut agar kode antar-tim tidak saling bertubrukan:

### 1. Setup Awal (Hanya Pertama Kali)
Jika baru bergabung, jalankan perintah ini berurutan di terminal lokal Anda:
```bash
# Clone repositori ke komputer lokal
git clone [https://github.com/are-yusuf-11/point-waste-web.git](https://github.com/are-yusuf-11/point-waste-web.git)
cd point-waste-web

# Install package PHP & JavaScript
composer install
npm install && npm run dev

# Setup konfigurasi lingkungan (.env)
cp .env.example .env
php artisan key:generate

# Jalankan migrasi database lokal
php artisan migrate