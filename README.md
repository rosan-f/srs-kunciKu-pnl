<div align="center">

<img src="https://cdn-icons-png.flaticon.com/512/6499/6499731.png" width="120" alt="Logo KunciKu" />

#  **Web KunciKu**
### _Sistem Peminjaman & Pengembalian Kunci Ruangan Berbasis Web dengan Pengenalan Gambar (YOLO)_

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.4-38B2AC?logo=tailwindcss)
![Python](https://img.shields.io/badge/Python-3.13-3776AB?logo=python)
![YOLOv8](https://img.shields.io/badge/YOLOv8-8.0-yellow?logo=ai)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql)
![NodeJS](https://img.shields.io/badge/Node.js-18+-339933?logo=node.js)
![Composer](https://img.shields.io/badge/Composer-2.7-885630?logo=composer)
![License](https://img.shields.io/badge/License-Academic-lightgrey)

---

###  **Anggota Kelompok**

| No | Nama             | NIM           | Peran   |
|----|------------------|---------------|---------|
| 1  | **Rausyanul Fikri** | 2024573010122 | Leader |
| 2  | Tri Akmal        | 2024573010074 | Anggota |
| 3  | Naiza Fitri      | 2024573010104 | Anggota |
| 4  | Zuhratul Fazla   | 2024573010107 | Anggota |

</div>

---

##  **Stack Teknologi**

 **Framework & UI:** Laravel `v12.x`, TailwindCSS `v3.4`  
 **Backend:** PHP `v8.2`  
 **AI & ML:** Python `v3.13`, YOLOv8 `v8.0`, OpenCV `v4.x`, ONNXRuntime  
 **Database:** MySQL / PostgreSQL  
 **Tools & Dev Env:** Composer `v2.7`, Node.js `v18+`, VSCode, Git, GitHub  

---

## 📚 Deskripsi Singkat

**Web KunciKu** adalah aplikasi berbasis **Laravel 12 + TailwindCSS** yang digunakan untuk mendigitalisasi proses **peminjaman dan pengembalian kunci ruang kelas serta proyektor di kampus**.  
Mahasiswa dapat login, memilih kelas, meminjam kunci, mengembalikan dengan **foto bukti**, serta mencatat kondisi proyektor dan kebersihan ruang.

>  Sistem ini juga dilengkapi fitur opsional **pengenalan gambar (AI YOLOv8)** berbasis **Python 3.13**, yang berfungsi untuk memverifikasi otomatis apakah kunci benar-benar sudah dikembalikan ke tempatnya di papan kunci.

---

##  Fitur Utama

| Fitur | Deskripsi |
|:------|:-----------|
|  **Login Mahasiswa & Dosen** | Autentikasi pengguna dengan role berbeda |
|  **Pilih Kelas Otomatis** | Kelas yang dipilih menentukan kunci ruangan |
|  **Catatan Waktu Otomatis** | Catat waktu peminjaman dan pengembalian |
|  **Verifikasi Foto (AI YOLO)** | Sistem mengenali posisi kunci di papan |
|  **Status Proyektor** | Catat kondisi: Baik / Rusak / Perlu Perbaikan |
|  **Bukti Kebersihan Lab** | Upload foto kebersihan ruangan |
|  **Deteksi Keterlambatan** | Tandai otomatis jika lebih dari 10 menit dari jadwal |
|  **Audit Log Aktivitas** | Semua aktivitas tercatat otomatis |
|  **Dashboard Laporan** | Rekap data peminjaman & kondisi alat |

---

## ⚙️ Teknologi yang Digunakan

- **Backend:** Laravel `v12.x` (PHP `v8.2`)
- **Frontend:** TailwindCSS `v3.4`, Blade Template Engine
- **AI & ML:** YOLOv8 (Ultralytics), OpenCV, ONNXRuntime, Python `v3.13`
- **Database:** MySQL / PostgreSQL
- **Tools:** Composer, Node.js, Git, GitHub, VSCode

---

##  Struktur Folder &  Cara Menjalankan Proyek

```bash
# ────────────────────────────────
# 📂 STRUKTUR FOLDER PROYEK
# ────────────────────────────────
kunciku/
├─ app/
│  ├─ Console/
│  ├─ Exceptions/
│  ├─ Http/
│  ├─ Models/
│  ├─ Providers/
│  ├─ Services/
│  └─ Rules/
│
├─ bootstrap/
├─ config/
├─ database/
│  ├─ factories/
│  ├─ migrations/
│  └─ seeders/
│
├─ public/
│  ├─ images/
│  └─ build/
│
├─ resources/
│  ├─ views/
│  ├─ css/
│  └─ js/
│
├─ routes/
│  ├─ web.php
│  └─ api.php
│
├─ ai_model/
│  ├─ models/
│  └─ scripts/
│
├─ storage/
├─ tests/
├─ docs/
│  ├─ 01-project-overview.md
│  ├─ 02-srs.md
│  ├─ 03-usecases.md
│  ├─ 04-activity-diagrams.md
│  ├─ 05-erd.md
│  └─ 06-api-spec.md
│
├─ .env.example
├─ artisan
├─ composer.json
├─ package.json
└─ README.md


# ────────────────────────────────
# 💻 CARA MENJALANKAN PROYEK
# ────────────────────────────────

# 1️ Jalankan Laravel
# Pastikan sudah terinstal PHP ≥ 8.2, Composer, MySQL/PostgreSQL
git clone https://github.com/username/kunciku.git
cd kunciku

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
# Akses: http://127.0.0.1:8000

# 2️ Jalankan npm serve dan artisan serve
composer run dev


# 3️ (Opsional) Jalankan Model AI
cd ai_model
python -m venv venv
source venv/bin/activate    # (Linux/Mac)
# atau
venv\Scripts\activate       # (Windows)
pip install -r requirements.txt
python scripts/yolo_inference.py sample.jpg