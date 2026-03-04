# Sistem Manajemen Sepatu - CIBADUYUT SHOES

Website sistem manajemen sepatu dengan fitur interaktif menggunakan JavaScript dan PHP.

---

## Deskripsi

Project latihan praktikum SIWEB yang menampilkan katalog sepatu dengan kemampuan pembelian, wishlist, pengaturan tema, dan sistem login.

---

## Fitur Utama

### 1. Sistem Login
Autentikasi pengguna menggunakan **Session** dan **Cookie**. Fitur "Remember Me" menyimpan username menggunakan Cookie selama 1 jam.

### 2. Wishlist
Menyimpan produk favorit ke dalam daftar wishlist menggunakan **SessionStorage**. Data akan tersimpan selama sesi browser aktif.

### 3. Dark Mode
Mengubah tampilan antara tema terang dan gelap. Preferensi disimpan di **LocalStorage** sehingga tetap ada saat browser dibuka kembali.

### 4. Pembelian
Mengurangi stok produk saat tombol beli diklik. Tombol akan nonaktif ketika stok habis.

---

## Teknologi

| Teknologi | Fungsi |
|-----------|--------|
| PHP | Backend dan autentikasi |
| HTML5 | Struktur halaman |
| CSS3 | Styling |
| JavaScript | Logika interaktif |
| Bootstrap 5 | Komponen UI |
| Session | Menyimpan status login |
| Cookie | Fitur Remember Me |
| LocalStorage | Simpan preferensi tema |
| SessionStorage | Simpan data wishlist |

---

## Struktur File

```
latihan 2/
├── index.php              # Halaman utama
├── login.php              # Halaman login
├── README.md
├── controller/
│   ├── proses_login.php   # Validasi login
│   └── logout.php         # Proses logout
├── css/
│   ├── style.css          # CSS utama
│   └── login.css          # CSS halaman login
├── js/
│   └── script.js          # JavaScript interaktif
└── assets/                # Gambar produk
```

---

## Cara Menjalankan

1. Pastikan XAMPP/Laragon sudah terinstall
2. Clone repository ke folder `htdocs`
3. Jalankan Apache
4. Buka `http://localhost/latihan 2/`

---

## Login Credentials

| Username | Password |
|----------|----------|
| admin    | 123      |

---

## Author

- **Nama**: [Nama Anda]
- **NIM**: [NIM Anda]
- **Mata Kuliah**: Praktikum ISB-310 SIWEB

