# Desa Wisata Kaduela — WordPress Theme

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

1. Buka **Tampilan → Tema → Tambah Tema Baru**.
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

1. Buka **Pos → Tambah Baru**.
2. Isi judul berita.
3. Tambahkan isi berita.
4. Atur tanggal publikasi.
5. Tambahkan **Gambar Unggulan**.
6. Klik **Terbitkan**.

Berita akan otomatis muncul di bagian Berita pada Beranda dan halaman Berita. Tidak perlu membuat halaman atau card berita secara manual.

## Struktur Theme

```text
desa-wisata-kaduela/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── single.php
├── index.php
├── page-*.php
├── template-parts/
│   └── news-card.php
├── assets/
│   ├── css/theme.css
│   ├── js/theme.js
│   └── images/
└── README.md
```

## Pengembangan melalui GitHub

GitHub digunakan sebagai tempat menyimpan source code dan riwayat perubahan. GitHub tidak menjalankan PHP atau WordPress.

Untuk memasukkan theme ke repository, extract ZIP lalu push isi folder `desa-wisata-kaduela` sebagai source code repository. ZIP dapat disimpan sebagai file rilis atau backup.

Contoh:

```bash
git init
git add .
git commit -m "Initial Desa Wisata Kaduela WordPress theme"
git branch -M main
git remote add origin https://github.com/USERNAME/NAMA-REPOSITORY.git
git push -u origin main
```

Ganti `USERNAME/NAMA-REPOSITORY` sesuai repository GitHub yang digunakan.

## Catatan Update

- Mengubah file theme tidak menghapus berita karena berita tersimpan di database WordPress.
- Aktivasi ulang theme tidak menggandakan halaman yang sudah ada.
- Gambar website sudah disimpan lokal di dalam folder `assets/images`.
- Jika mengganti gambar, gunakan nama file dan format yang sama agar path tidak perlu diubah.
- Buat backup database dan folder `wp-content` sebelum melakukan perubahan besar pada website aktif.
