# Sewa PlayStation - Sistem Manajemen Penyewaan PlayStation

## Deskripsi
Website sistem manajemen penyewaan PlayStation interaktif dengan fitur JavaScript dan PHP Laravel untuk tugas praktikum Sistem Informasi Berbasis Web.

**Study Case:** Sistem Penyewaan PlayStation (PS Rental)

---

## Tugas Pertemuan 4 - Sistem Autentikasi Laravel (Session)

### Deskripsi Tugas
Melanjutkan study case sebelumnya dengan mengubah website menjadi dinamis menggunakan Laravel PHP Framework serta menambahkan sistem autentikasi berbasis Session.

### Fitur yang Diimplementasikan

#### 1. Sistem Login Menggunakan Session (`AuthController@login`)
- Form login dengan field username dan password
- Validasi login (hardcode credentials)
- Menyimpan status login menggunakan Laravel Session (`session()`)
- Redirect ke halaman utama setelah login berhasil
- Menolak akses dengan pesan error jika login gagal
- **BONUS:** Menggunakan Bootstrap Alert untuk error (bukan JavaScript alert)

#### 2. Logout (`AuthController@logout`)
- Tombol logout tersedia di navbar
- Menghapus data session menggunakan `session()->forget()`
- Redirect ke halaman utama setelah logout

#### 3. Fitur Dark Mode / Light Mode
- Toggle button di navbar untuk mengubah tema
- Menyimpan preferensi tema menggunakan `localStorage`
- Tema otomatis di-load saat halaman dibuka

#### 4. Fitur Wishlist (JavaScript)
- Tombol wishlist pada setiap produk PlayStation
- Data wishlist disimpan menggunakan `localStorage`
- Modal popup untuk menampilkan daftar wishlist
- Counter wishlist di navbar

#### 5. Fitur Sewa PlayStation
- Tombol sewa pada setiap produk
- Mengurangi stok secara dinamis menggunakan JavaScriptg
- Notifikasi alert saat berhasil menyewa
- Tombol disabled saat stok habis

### Akun Demo (Hardcode)
| Username | Password |
|----------|----------|
| admin | 123 |

### Struktur File Utama
```
├── app/Http/Controllers/
│   └── AuthController.php      # Controller untuk autentikasi
├── resources/views/
│   ├── index.blade.php         # Halaman utama
│   └── login.blade.php         # Halaman login
├── routes/
│   └── web.php                 # Routing aplikasi
├── public/
│   ├── css/style.css           # Stylesheet custom
│   ├── js/script.js            # JavaScript untuk fitur interaktif
│   └── assets/                 # Gambar PlayStation
```

### Teknologi yang Digunakan
- **Backend:** Laravel 11 (PHP)
- **Frontend:** HTML5, CSS3, JavaScript
- **CSS Framework:** Bootstrap 5
- **Icons:** Font Awesome 6
- **Storage:** Laravel Session, localStorage
