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

## Mengubah Informasi Harga pada Theme

Informasi harga halaman statis tersimpan langsung di file PHP theme. Untuk mengganti harga, cari file halaman yang sesuai berikut:

| Halaman | File yang perlu diperiksa |
|---|---|
| Telaga Biru Cicerem | `page-telaga.php` atau file PHP dengan nama `telaga` |
| Wisata Side Land | `page-sideland.php` atau file PHP dengan nama `sideland` |
| Paket Wisata | `page-paketwisata.php` atau file PHP dengan nama `paketwisata` |
| Akomodasi/Homestay | `page-akomodasi.php` atau file PHP dengan nama `akomodasi` |
| Suvenir, snack, dan merchandise | `page-suvenir.php` atau file PHP dengan nama `suvenir` |

Nama file dapat sedikit berbeda tergantung hasil konversi theme. Jika tidak yakin, gunakan pencarian teks di seluruh folder theme. Di VS Code tekan **Ctrl + Shift + F**, lalu cari angka harga seperti `15.000`, `75.000`, `165.000`, `65.000`, atau `100.000`.

Contoh kode harga yang mungkin ditemukan:

```php
<span>Rp15.000</span>
<p>Rp75.000/malam/orang</p>
```

Ganti hanya angka atau keterangan harga yang diperlukan. Jangan menghapus kode PHP seperti `<?php`, `get_header()`, `get_footer()`, `the_content()`, atau fungsi WordPress lainnya.

### Alur update harga

1. Simpan salinan/backup folder theme yang sedang aktif.
2. Edit file PHP di komputer.
3. Cari harga lama menggunakan **Ctrl + Shift + F**.
4. Ganti harga, lalu simpan file.
5. Uji halaman secara lokal jika memungkinkan.
6. Buat ZIP ulang folder theme dengan struktur yang benar. Folder utama ZIP harus langsung berisi `style.css`, `functions.php`, `header.php`, dan file theme lainnya.
7. Upload ZIP baru melalui WordPress atau cPanel.
8. Bersihkan cache WordPress, plugin cache, CDN jika ada, dan cache browser.
9. Buka halaman menggunakan mode incognito untuk memastikan harga terbaru tampil.

### Update melalui cPanel

1. Buka **cPanel → File Manager**.
2. Masuk ke:

```text
public_html/wp-content/themes/nama-folder-theme/
```

3. Untuk perubahan satu atau dua file, upload file PHP baru langsung ke folder theme dan gunakan nama file yang sama.
4. Jika mengganti seluruh theme, upload ZIP ke folder `themes`, lalu extract ke folder sementara, misalnya `desa-wisata-kaduela-update`.
5. Periksa isi folder hasil extract. Pastikan file theme tidak berada satu tingkat terlalu dalam, contohnya `nama-theme/nama-theme/style.css`.
6. Setelah yakin, backup folder theme lama sebelum menggantinya dengan versi baru.
7. Aktifkan theme melalui **WordPress → Tampilan → Tema** jika nama folder theme berubah.

Jangan menghapus atau menimpa folder `wp-content/uploads/` dan jangan menghapus database WordPress. Berita, media WordPress, pengguna, dan pengaturan tersimpan di luar file theme. Mengganti file theme hanya mengubah tampilan serta konten statis yang ditulis di dalam theme.

Untuk perubahan kecil seperti harga, mengunggah file PHP yang berubah saja biasanya lebih cepat dan lebih aman daripada mengunggah ulang seluruh ZIP.

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
