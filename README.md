# <div align="center"> 🗑️ POINTWASTE WEB </div>
### <div align="center"> Platform Manajemen Pengelolaan Sampah Berbasis Poin </div>

<div align="center">
  <br>
  
  ![Progress](https://img.shields.io/badge/Progress-2%25-green?style=for-the-badge&logo=github)
  ![Tech](https://img.shields.io/badge/Tech-Laravel-777BB4?style=for-the-badge&logo=laravel)
  ![Version](https://img.shields.io/badge/Version-1.0.0-aqua?style=for-the-badge&logo=semver)
  <br>
</div>

---

## 📋 Tentang Project
**PointWaste Web** adalah sebuah sistem manajemen pengolahan sampah/limbah terintegrasi yang menerapkan sistem berbasis poin. Proyek ini dirancang secara bertahap untuk menyediakan solusi digital yang berfokus pada tiga pilar utama pengembangan:

* **📦 Administrasi:** Digitalisasi manajemen data, proses pencatatan, dan persuratan internal.
* **👥 User & Kelompok:** Pengelolaan data pengguna (nasabah/masyarakat) serta hak akses sistem.
* **📸 Dokumentasi & Logistik:** Pengarsipan aktivitas transaksi, pelaporan berkala, dan alur distribusi/logistik data.

Tujuan utama dari proyek ini adalah membangun aplikasi *full-stack* yang stabil, memiliki performa optimal, serta arsitektur kode yang bersih menggunakan **Laravel**.

---

## 👥 Struktur Tim & Peran
Kolaborasi proyek ini dibagi menjadi beberapa peran inti dengan tanggung jawab spesifik:

| Peran | Deskripsi Tugas |
| :--- | :--- |
| **Project Manager** | Pengendali arah proyek, pengawas timeline, dan pengambil keputusan tertinggi. |
| **System Analyst** | Penanggung jawab *User Requirement*, logika alur fitur, dan perancangan sistem. |
| **Database Manager** | Arsitek basis data, bertanggung jawab atas manajemen struktur tabel dan relasi data. |
| **Backend Developer** | Pengembangan logika sisi server (server-side), integrasi API, dan performa Laravel. |
| **Frontend Developer** | Implementasi desain antarmuka (UI/UX) agar responsif, rapi, dan nyaman digunakan. |

---

## 🛠️ Tech Stack & Standarisasi
Teknologi utama yang digunakan dalam masa pengembangan proyek PointWaste:

* **Backend:** Laravel (PHP)
* **Database:** MySQL
* **Frontend:** Tailwind CSS / Bootstrap 5
* **Version Control:** Git & GitHub

> [!IMPORTANT]
> **Catatan Penting & Aturan Arsitektur Pengembangan:**
> * **Aturan Penamaan Tabel Database:** Wajib menggunakan bentuk **tunggal/singular** (contoh: `user`, `product`, `delivery`), **JANGAN PLURAL** saat membuat file migrasi baru[cite: 1].
> * **TIDAK PERLU HOSTING!** Pengembangan dilakukan sepenuhnya di lingkungan *localhost* masing-masing komputer developer.

---

## 🛑 Aturan Emas Git (Golden Rule)
> **JANGAN PERNAH** melakukan `commit` atau `push` langsung ke branch `main`. 
> Branch `main` adalah jalur suci untuk kode produksi yang stabil. Semua fitur baru wajib melalui **Pull Request (PR)**.

---

## 🚀 Alur Kerja Kolaborasi (Cara Mulai Git)

Bagi seluruh developer yang berkontribusi, ikuti alur kerja (*Git Workflow*) harian berikut agar kode antar-tim tidak saling bertubrukan:

### 1. Setup Awal (Hanya Pertama Kali)
Jika baru bergabung ke proyek PointWaste, jalankan perintah ini berurutan di terminal lokal Anda:
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