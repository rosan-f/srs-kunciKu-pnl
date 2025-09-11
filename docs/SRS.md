# Software Requirement Specification (SRS)

**Produk:** Kunciku  
**Versi:** 2.3  
**Tanggal:** 10 September 2025  

**Anggota Kelompok:**  
1. Rausyanul fikri 
2. Fazla
3. Akmal  
4. Naiza

---


## DAFTAR ISI

- [Software Requirement Specification (SRS)](#software-requirement-specification-srs)
  - [DAFTAR ISI](#daftar-isi)
    - [1.1 Tujuan Dokumen](#11-tujuan-dokumen)
    - [1.2 Ruang Lingkup Produk](#12-ruang-lingkup-produk)
    - [1.3 Definisi, Akronim, \& Singkatan](#13-definisi-akronim--singkatan)

---



### 1.1 Tujuan Dokumen
Dokumen **SRS** ini menjelaskan kebutuhan perangkat lunak sistem **Kunciku**, platform digital untuk mempermudah peminjaman **kunci ruangan/lab** dan **proyektor** di lingkungan kampus. Tujuannya:

- Panduan lengkap untuk pengembang & pemangku kepentingan.  
- Definisi fungsionalitas, performa, batasan, dan kualitas sistem.  
- Menjamin kesepahaman yang sama terkait ruang lingkup sistem.  

### 1.2 Ruang Lingkup Produk
- **Fitur Utama:**
  - Autentikasi dengan email kampus
  - Peminjaman kunci ruangan/lab (wajib).  
  - Peminjaman proyektor (opsional, biasanya bersamaan dengan kunci).  
  - Status kunci menunjukkan apakah kelas sedang digunakan.  
  - Proyektor memiliki status fungsi / tidak berfungsi
  - informasi kabel yang tersedia (HDMI, VGA, dll).  
  - Notifikasi peminjaman & pengembalian.  
  - Dasbor real-time untuk Admin.  
  - Pelaporan transaksi peminjaman.  

- **Pengguna:** Mahasiswa/Staf (Peminjam), Admin (Petugas).  
- **Lingkup Aset:** Kunci ruangan/lab & proyektor.  

### 1.3 Definisi, Akronim, & Singkatan
| Singkatan | Definisi                               |
| --------- | -------------------------------------- |
| SRS       | Software Requirement Specification     |
| FR        | Functional Requirement                 |
| NFR       | Non-Functional Requirement             |
| API       | Application Programming Interface      |
| Admin     | Petugas sistem                         |
| Peminjam  | Mahasiswa/staf peminjam aset           |
| Kabel     | Jenis kabel proyektor (HDMI, VGA, dll) |