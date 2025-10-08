# Web KunciKu

## 02 - Spesifikasi Kebutuhan Perangkat Lunak (Software Requirement Specification)

---

## 1. Pendahuluan

### 1.1 Tujuan Dokumen

Dokumen ini disusun untuk menjelaskan secara rinci kebutuhan fungsional dan non-fungsional dari sistem **Web KunciKu**. Tujuan utama dari dokumen ini adalah menjadi acuan bagi tim pengembang, penguji, dan pihak terkait dalam proses pembangunan, implementasi, dan evaluasi sistem.

### 1.2 Ruang Lingkup

**Web KunciKu** merupakan sistem berbasis web yang digunakan untuk mengelola proses peminjaman dan pengembalian kunci ruang kelas serta peralatan pendukung seperti proyektor. Sistem ini ditujukan untuk digunakan oleh mahasiswa, dosen, dan pihak administrasi kampus.

Sistem memiliki dua komponen utama:

1. **Aplikasi Web (Laravel + TailwindCSS):** menangani antarmuka pengguna, logika bisnis, dan manajemen data.
2. **Modul AI (Python + YOLOv8):** digunakan untuk melakukan verifikasi visual terhadap foto pengembalian kunci.

### 1.3 Definisi dan Singkatan

* **AI (Artificial Intelligence):** Kecerdasan buatan yang digunakan untuk verifikasi gambar.
* **YOLOv8:** Algoritma deteksi objek yang digunakan dalam modul verifikasi.
* **User:** Pengguna sistem, terdiri dari mahasiswa dan dosen.
* **Admin:** Pengguna dengan hak akses penuh untuk memantau dan mengelola data sistem.

### 1.4 Referensi

* IEEE Std 830-1998 – Recommended Practice for Software Requirements Specifications.
* Panduan Dokumentasi Proyek Rekayasa Perangkat Lunak (Universitas).
* Dokumentasi resmi Laravel 12 dan YOLOv8.

---

## 2. Deskripsi Umum Sistem

### 2.1 Perspektif Sistem

Sistem Web KunciKu menggantikan metode manual dalam peminjaman kunci dengan pendekatan digital. Prosesnya dimulai dari login pengguna, pemilihan kelas, peminjaman kunci, hingga pengembalian yang diverifikasi secara visual melalui foto.

Komponen utama sistem meliputi:

* **Frontend:** Antarmuka pengguna berbasis web responsif.
* **Backend:** API dan logika bisnis yang diimplementasikan menggunakan Laravel.
* **Database:** Menyimpan data pengguna, ruangan, jadwal, dan transaksi.
* **AI Module:** Menangani pengenalan gambar dan validasi pengembalian.

### 2.2 Fungsi Utama Sistem

1. Autentikasi pengguna dan manajemen peran.
2. Peminjaman kunci berdasarkan jadwal dan kelas.
3. Pencatatan waktu pinjam dan pengembalian secara otomatis.
4. Verifikasi foto pengembalian kunci menggunakan AI.
5. Pencatatan kondisi proyektor dan alat lainnya.
6. Laporan aktivitas dan rekap data untuk admin atau dosen.

### 2.3 Karakteristik Pengguna

| Jenis Pengguna | Deskripsi                                                 | Tingkat Akses                   |
| -------------- | --------------------------------------------------------- | ------------------------------- |
| Mahasiswa      | Pengguna yang melakukan peminjaman dan pengembalian kunci | Terbatas pada kelas yang diampu |
| Dosen          | Memantau dan memverifikasi data peminjaman di kelasnya    | Sedang                          |
| Admin          | Mengelola data pengguna, ruangan, dan laporan keseluruhan | Penuh                           |

### 2.4 Batasan Sistem

* Sistem hanya berjalan di peramban modern (Chrome, Edge, Firefox, Safari).
* Modul AI memerlukan instalasi Python lokal.
* Pengguna harus memiliki koneksi kamera untuk melakukan pengembalian.
* Tidak tersedia mode offline penuh.
* Sistem hanya ditujukan untuk lingkungan akademik (kampus).

### 2.5 Asumsi dan Ketergantungan

* Pengguna memiliki akun terdaftar di sistem.
* Server Laravel dan modul AI dapat berjalan bersamaan.
* Kamera pengguna berfungsi dengan baik saat verifikasi dilakukan.
* Basis data menggunakan koneksi yang stabil dan aman.

---

## 3. Kebutuhan Fungsional

### 3.1 Autentikasi dan Manajemen Pengguna

* Sistem harus menyediakan fitur login dan logout.
* Hanya pengguna terdaftar yang dapat mengakses sistem.
* Role pengguna menentukan hak akses (mahasiswa, dosen, admin).
* Admin dapat menambah, mengubah, dan menghapus data pengguna.

### 3.2 Peminjaman Kunci

* Mahasiswa dapat memilih kelas sesuai jadwal yang berlaku.
* Sistem secara otomatis menampilkan kunci sesuai kelas.
* Sistem mencatat waktu peminjaman saat transaksi dilakukan.
* Sistem memberi notifikasi saat batas waktu hampir tercapai.

### 3.3 Pengembalian Kunci

* Pengguna wajib mengunggah foto saat mengembalikan kunci.
* Sistem mengirimkan foto ke modul AI untuk verifikasi.
* Hasil deteksi menentukan status pengembalian (valid/tidak valid).
* Jika pengembalian tidak valid, pengguna harus mengulangi proses.

### 3.4 Manajemen Proyektor dan Alat Tambahan

* Pengguna dapat mencatat kondisi alat (baik/rusak/perlu perbaikan).
* Admin dapat melihat laporan kondisi alat.
* Sistem menyimpan riwayat kondisi setiap alat.

### 3.5 Laporan dan Monitoring

* Admin dapat mengakses laporan peminjaman dan pengembalian.
* Dosen dapat melihat status peminjaman kelas yang dia ampu.
* Sistem menghasilkan laporan bulanan dalam format digital (PDF/Excel).

### 3.6 Pelaporan Kebersihan Ruangan

* Mahasiswa dapat mengunggah foto bukti kebersihan ruangan.
* Sistem mencatat waktu dan lokasi upload.
* Admin dapat memverifikasi laporan kebersihan.

---

## 4. Kebutuhan Non-Fungsional

### 4.1 Kinerja (Performance)

* Waktu respon sistem maksimum 3 detik untuk setiap permintaan.
* Sistem mampu menangani minimal 100 pengguna aktif secara bersamaan.

### 4.2 Keamanan (Security)

* Sistem menggunakan enkripsi data untuk penyimpanan kredensial.
* Autentikasi menggunakan token Laravel Sanctum.
* Upload foto dibatasi ukuran maksimal 5 MB per file.

### 4.3 Keandalan (Reliability)

* Sistem harus memiliki tingkat ketersediaan (uptime) minimal 95%.
* Kesalahan input pengguna harus ditangani dengan notifikasi yang jelas.

### 4.4 Kemudahan Penggunaan (Usability)

* Antarmuka harus mudah dipahami oleh pengguna baru.
* Semua menu utama dapat diakses maksimal dalam tiga klik.

### 4.5 Portabilitas (Portability)

* Sistem dapat dijalankan pada perangkat desktop dan laptop.
* Dapat diakses melalui sistem operasi Windows, macOS, dan Linux.

---

## 5. Antarmuka Sistem

### 5.1 Antarmuka Pengguna

Sistem menyediakan antarmuka berbasis web dengan komponen utama:

* Halaman login.
* Dashboard pengguna (mahasiswa/dosen).
* Halaman peminjaman kunci.
* Halaman pengembalian dengan upload foto.
* Dashboard admin untuk laporan dan monitoring.

### 5.2 Antarmuka Perangkat Keras

* Kamera pada perangkat pengguna (untuk upload foto).
* Server lokal atau cloud untuk menjalankan backend dan modul AI.

### 5.3 Antarmuka Perangkat Lunak

* Komunikasi antara Laravel dan modul Python menggunakan REST API lokal.
* Database menggunakan MySQL atau PostgreSQL.
* Framework frontend menggunakan TailwindCSS.

---

## 6. Diagram Konteks Sistem

```mermaid
graph TD
    U[Mahasiswa/Dosen] -->|Login, Pinjam, Kembalikan| W[Web KunciKu]
    W -->|Verifikasi Gambar| AI[Modul AI (Python YOLOv8)]
    W -->|Simpan/Retrive Data| DB[(Basis Data)]
    A[Admin] -->|Monitoring dan Laporan| W
```

---

## 7. Batasan dan Risiko Pengembangan

* Risiko keterlambatan dalam pelatihan model AI jika dataset belum lengkap.
* Performa sistem dapat menurun jika server tidak memenuhi spesifikasi.
* Verifikasi gambar dapat gagal apabila pencahayaan kurang baik.
* Penggunaan kamera eksternal harus dikonfigurasi manual.

---

## 8. Kesimpulan

Dokumen SRS ini menjabarkan kebutuhan sistem Web KunciKu secara menyeluruh baik dari sisi fungsional maupun non-fungsional.
Dokumen ini menjadi acuan utama dalam proses desain, pengembangan, dan pengujian sistem agar hasil akhir sesuai dengan tujuan awal proyek.

---

**Versi Dokumen:** 1.0
**Tanggal Pembaruan Terakhir:** Oktober 2025
**Disusun oleh:** Tim Pengembang Web KunciKu
