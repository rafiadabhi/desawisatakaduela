# Desa Wisata Kaduela â€” WordPress Theme

Theme WordPress klasik untuk website resmi Desa Wisata Kaduela, Kecamatan Pasawahan, Kabupaten Kuningan.

Theme ini berisi seluruh tampilan dan aset untuk halaman statis website. Konten yang dikelola melalui WordPress hanya bagian **Berita**, menggunakan fitur **Posts** bawaan WordPress.

## Fitur

- Halaman statis otomatis: Beranda, Profil, Destinasi, Telaga Biru Cicerem, Wisata Side Land, Paket Wisata, Akomodasi, Suvenir, Budaya, dan BUMDes.
- Seluruh menu, header, footer, style, galeri, animasi, dan gambar sudah termasuk di dalam theme.
- Theme otomatis membuat halaman yang belum tersedia ketika diaktifkan.
- Beranda menampilkan maksimal tiga berita terbaru.
- Halaman Berita menampilkan daftar berita dengan pagination.
- Setiap berita memiliki halaman detail, tanggal publikasi, isi artikel, dan Gambar Unggulan.
- Jika belum ada berita, halaman menampilkan pesan kosong.
- Tidak menggunakan page builder atau pengaturan menu manual.

## Instalasi melalui WordPress

1. Buka **Tampilan â†’ Tema â†’ Tambah Tema Baru**.
2. Pilih **Unggah Tema**.
3. Pilih file `desa-wisata-kaduela-wordpress-theme.zip`.
4. Klik **Install Now**, kemudian **Activate**.
5. Setelah theme aktif, halaman website dibuat otomatis dan Beranda ditetapkan sebagai halaman depan.

Jika upload melalui WordPress ditolak karena ukuran file, upload ZIP melalui cPanel ke:

```text
public_html/wp-content/themes/
```

Kemudian extract ZIP di folder tersebut dan aktifkan theme melalui WordPress.

## Mengelola Berita

1. Buka **Pos â†’ Tambah Baru**.
2. Isi judul berita.
3. Tambahkan isi berita.
4. Atur tanggal publikasi.
5. Tambahkan **Gambar Unggulan**.
6. Klik **Terbitkan**.

Berita akan otomatis muncul di bagian Berita pada Beranda dan halaman Berita. Tidak perlu membuat halaman atau card berita secara manual.

## Struktur Theme

```text
desa-wisata-kaduela/
â”œâ”€â”€ style.css
â”œâ”€â”€ functions.php
â”œâ”€â”€ header.php
â”œâ”€â”€ footer.php
â”œâ”€â”€ front-page.php
â”œâ”€â”€ single.php
â”œâ”€â”€ index.php
â”œâ”€â”€ page-*.php
â”œâ”€â”€ template-parts/
â”‚   â””â”€â”€ news-card.php
â”œâ”€â”€ assets/
â”‚   â”œâ”€â”€ css/theme.css
â”‚   â”œâ”€â”€ js/theme.js
â”‚   â””â”€â”€ images/
â””â”€â”€ README.md
```
