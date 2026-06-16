# <div align="center"><img src="public/images/logo-point-waste.png"></div>
# <div align="center"> 🗑️ POINT-WASTE-WEB </div>
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
**PointWaste Web** adalah sebuah sistem manajemen pengolahan sampah/limbah terintegrasi yang menerapkan sistem berbasis poin untuk potongan iuran RT. Proyek ini dirancang secara bertahap untuk menyediakan solusi digital yang berfokus pada tiga pilar utama pengembangan:

* **📦 Administrasi:** Digitalisasi manajemen data, proses pencatatan iuran dan mutasi poin.
* **👥 Hak Akses/Role:** Admin Sistem, Pengurus RT dan Warga
* **📸 Dokumentasi & Logistik:** Pengarsipan aktivitas iuran RT, Mutasi Poin dan pelaporan berkala.

Tujuan utama dari proyek ini adalah membangun aplikasi *full-stack* yang stabil, memiliki performa optimal, serta arsitektur kode yang bersih menggunakan **Laravel**.

---

## 👥 Struktur Tim & Peran
Kolaborasi proyek ini dibagi menjadi beberapa peran inti dengan tanggung jawab spesifik:

| Peran | Deskripsi Tugas |
| :--- | :--- |
| **Project Manager** | Galang |
| **System Analyst** | Suci, Apiw |
| **Design & Content** | Arafly, Egy |
| **Backend Developer** | Are, Galang |
| **Deploymet** | Azra |
| **Frontend Developer** |Zaidan |
| **Testing & QA** | Ariel, Sam |

---

## 🛠️ Tech Stack & Standarisasi
Teknologi utama yang digunakan dalam masa pengembangan proyek PointWaste:

* **Backend:** Laravel 12 (PHP 8.4)
* **Database:** MySQL
* **Frontend:** Tailwind CSS / Bootstrap 5
* **Version Control:** Git & GitHub

> [!IMPORTANT]
> **Catatan Penting & Aturan Arsitektur Pengembangan:**
> * **Aturan Penamaan Tabel Database:** Wajib menggunakan bentuk **tunggal/singular** (contoh: `user`, `product`, `delivery`), **JANGAN PLURAL** saat membuat file migrasi baru[cite: 1].

---

## 🛑 Aturan Emas Git (Golden Rule)
> **JANGAN PERNAH** melakukan `commit` atau `push` langsung ke branch `main`. 
> Branch `main` adalah jalur suci untuk kode produksi yang stabil. Semua fitur baru wajib melalui **Pull Request (PR)**.

| Branch | PIC |
| :--- | :--- |
| **auth-migration-model** | Galang |
| **routing-controlling** | Are |
| **frontend-view** | Zaidan |
| **deployment** | Azra |

---

## 🚀 Alur Kerja Kolaborasi (Cara Mulai Git)

Bagi seluruh developer yang berkontribusi, ikuti alur kerja (*Git Workflow*) harian berikut agar kode antar-tim tidak saling bertubrukan:

### 1. Setup Awal (Hanya Pertama Kali)
Jika baru bergabung ke proyek PointWaste, jalankan perintah ini berurutan di terminal lokal/VS CODE Anda:
```bash
# Clone repositori ke komputer lokal
git clone https://github.com/are-yusuf-11/point-waste-web
cd point-waste-web

# Install package PHP & JavaScript
composer install

# Setup konfigurasi lingkungan (.env)
cp .env.example .env
php artisan key:generate

# Jalankan migrasi database lokal
php artisan migrate
```

### 2. Pull Project (Update Terbaru File Project)
Setiap mulai ngoding, jangan lupa ya gess!! 
```bash
# Pull repositori ke komputer lokal
git pull origin main
git fetch origin
git checkout <branch anda>
php artisan migrate
```

### 3. Push Project (Upload Update File Project)
Jika ingin mengupload repo lokal proyek PointWaste anda pada repo Github, jalankan perintah ini di terminal lokal/VS CODE Anda:
CODE Anda:
```bash
# Push repositori ke komputer lokal
git add <file/folder yang ditambakan>
git commit -m "keterangan"
git push origin <branch anda>

```