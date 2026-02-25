# 📝 SOAL LATIHAN PRAKTIKUM RPL — WEEK 2
## HTML Form Lanjutan, CSS Basic & Bootstrap

---

## Tujuan Praktikum:
Praktikan mampu mengimplementasikan elemen-elemen HTML Form lanjutan dengan berbagai jenis input dan atribut, menerapkan properti dasar CSS untuk styling, serta memanfaatkan Bootstrap untuk membuat layout dan komponen yang responsif.

---

## Studi Kasus: Form Pendaftaran Pasien Klinik 🏥

Anda diminta untuk membuat halaman web **Form Pendaftaran Pasien** untuk sebuah klinik kesehatan. Halaman ini akan digunakan oleh pasien baru untuk mendaftarkan diri sebelum melakukan konsultasi dengan dokter.

---

## Instruksi Pengerjaan:

### A. Persiapan Lingkungan Kerja (10 Poin)

1. Buat sebuah folder proyek baru dengan format nama: `latihan2_[NIM]`  
   (Contoh: `latihan2_162024000`)

2. Di dalam folder proyek tersebut, buat **2 file**:
   - `index.html` — untuk struktur HTML
   - `style.css` — untuk custom CSS

3. Tuliskan kerangka dasar HTML (boilerplate) pada file `index.html` dan hubungkan dengan:
   - File `style.css` yang Anda buat
   - Bootstrap CSS melalui CDN

---

### B. HTML Form — Elemen dan Atribut (45 Poin)

Buat sebuah form pendaftaran pasien dengan elemen-elemen berikut:

| No | Elemen | Jenis Input | Atribut yang Wajib Digunakan |
|----|--------|-------------|------------------------------|
| 1 | Nama Lengkap | `text` | `required`, `placeholder`, `maxlength` |
| 2 | Email | `email` | `required`, `placeholder` |
| 3 | Nomor Telepon | `tel` | `required`, `placeholder` |
| 4 | Tanggal Lahir | `date` | `required` |
| 5 | Umur | `number` | `required`, `min`, `max` |
| 6 | Jenis Kelamin | `radio` | `name` (sama), `value`, `checked` (default) |
| 7 | Golongan Darah | `select` | `required`, dengan minimal 4 `<option>` |
| 8 | Alamat | `textarea` | `rows`, `placeholder` |
| 9 | Keluhan | `textarea` | `rows`, `placeholder`, `required` |
| 10 | Persetujuan Data | `checkbox` | `required` |
| 11 | Tombol | `submit` dan `reset` | - |

**Ketentuan Tambahan:**
- Setiap input harus memiliki `<label>` yang terhubung dengan atribut `for` dan `id`
- Gunakan atribut `name` pada setiap input untuk identifikasi data

---

### C. CSS Basic — Styling (25 Poin)

Pada file `style.css`, terapkan **minimal 6 properti CSS** berikut untuk mempercantik tampilan:

| No | Properti | Keterangan |
|----|----------|------------|
| 1 | `background-color` | Warna latar belakang (body atau card) |
| 2 | `color` | Warna teks |
| 3 | `font-family` | Jenis huruf |
| 4 | `padding` | Jarak dalam elemen |
| 5 | `border-radius` | Sudut melengkung |
| 6 | `box-shadow` | Bayangan pada elemen |

**Ketentuan:**
- Buat minimal **3 class custom** di CSS (contoh: `.custom-card`, `.custom-header`, dll)
- Berikan komentar pada setiap properti untuk menjelaskan fungsinya

---

### D. Bootstrap — Layout & Komponen (20 Poin)

Implementasikan fitur Bootstrap berikut:

| No | Fitur Bootstrap | Keterangan |
|----|-----------------|------------|
| 1 | **Grid System** | Gunakan `container`, `row`, dan `col` untuk layout |
| 2 | **Form Classes** | Gunakan `form-control`, `form-label`, `form-select`, `form-check` |
| 3 | **Component Card** | Bungkus form dalam komponen `card` dengan `card-header` dan `card-body` |
| 4 | **Component Alert** | Tampilkan pesan informasi menggunakan `alert` |
| 5 | **Button Classes** | Gunakan class `btn` dan variannya (`btn-primary`, `btn-outline-secondary`, dll) |
| 6 | **Utilities** | Gunakan minimal 3 utility class (contoh: `mt-`, `mb-`, `text-center`, `d-flex`, `gap-`) |

---

## Kriteria Penilaian:

| Bagian | Komponen | Poin |
|--------|----------|------|
| A | Persiapan (folder, file, boilerplate, link CSS & Bootstrap) | 10 |
| B | HTML Form (11 elemen dengan atribut yang benar) | 45 |
| C | CSS Basic (minimal 6 properti, 3 class custom, ada komentar) | 25 |
| D | Bootstrap (grid, form classes, card, alert, button, utilities) | 20 |
| | **TOTAL** | **100** |

---

## Ketentuan Pengerjaan:

1. Kerjakan secara **individu**
2. Waktu pengerjaan sesuai durasi praktikum
3. **Dilarang** meng-copy paste secara penuh — pahami setiap baris kode yang ditulis
4. Boleh mengacu pada contoh kode yang sudah diberikan untuk memahami struktur dan penggunaan komponen

---

**Selamat Mengerjakan! 💪**
