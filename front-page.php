<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <!-- ========================= HERO ========================= -->
    <section id="home" class="relative isolate flex min-h-[680px] items-end overflow-hidden pt-20 text-white sm:min-h-[720px]">
      <!-- Path gambar utama beranda: assets/index_hero.jpg -->
      <img data-photo-slot="index-hero" src="<?php echo esc_url( kaduela_asset_uri( 'index_hero.jpg' ) ); ?>" alt="Pemandangan alam Desa Wisata Kaduela" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-4xl">
          <h1 class="max-w-4xl font-display text-[clamp(2.6rem,8vw,5.25rem)] font-extrabold leading-[1.02] tracking-[-0.04em]">Jelajahi Desa Wisata Kaduela</h1>
          <p class="mt-6 max-w-2xl text-base leading-8 text-white/75 sm:text-lg">Informasi destinasi, paket wisata, homestay, budaya, dan produk lokal Desa Kaduela dalam satu tempat.</p>
          <div class="mt-8 flex flex-col gap-3 sm:flex-row">
            <a href="<?php echo esc_url( kaduela_page_url( 'destinasi', '' ) ); ?>" class="inline-flex min-h-[52px] items-center justify-center rounded-2xl bg-sun-400 px-6 py-3.5 font-extrabold text-forest-900 transition hover:bg-sun-500">Lihat Destinasi</a>
            <a href="<?php echo esc_url( kaduela_page_url( 'paketwisata', '' ) ); ?>" class="inline-flex min-h-[52px] items-center justify-center rounded-2xl border border-white/30 bg-white/10 px-6 py-3.5 font-bold text-white backdrop-blur transition hover:bg-white/20">Pilih Paket Wisata</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <!-- ========================= PROFIL SINGKAT ========================= -->
    <section id="profil-singkat" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto grid max-w-7xl items-stretch gap-7 lg:grid-cols-[.92fr_1.08fr]">
        <figure class="reveal relative min-h-[360px] overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft sm:min-h-[460px] lg:min-h-0">
          <!-- Menggunakan aset yang sama dengan halaman profil. -->
          <img data-photo-slot="index-profil" src="<?php echo esc_url( kaduela_asset_uri( 'profil_suasana.jpg' ) ); ?>" alt="Pemandangan alam dan suasana Desa Kaduela" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover">
        </figure>

        <article class="reveal rounded-[2rem] border border-slate-200 bg-white p-7 shadow-card sm:p-10">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Tentang desa</span>
          <h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Mengenal Desa Kaduela</h2>
          <p class="copy-justify mt-6 text-lg leading-8 text-slate-600">Desa Kaduela adalah pelarian dari hiruk-pikuk kota, menghadirkan suasana pedesaan yang autentik dengan pesona alam yang memikat. Dikelilingi perbukitan dan aliran air alami, desa ini mengajak Anda untuk berhenti sejenak, menarik napas dalam-dalam, dan merasakan kedamaian. Tempat ini cocok untuk melepas penat, baik bersama keluarga maupun sendirian. Suasana desa yang asri membuat setiap waktu terasa lebih santai dan menyegarkan.</p>
          <a href="<?php echo esc_url( kaduela_page_url( 'profil', '' ) ); ?>" class="mt-8 inline-flex min-h-[50px] items-center justify-center rounded-2xl bg-forest-700 px-6 py-3 font-bold text-white transition hover:bg-forest-800">Lihat Profil Desa</a>
        </article>
      </div>
    </section>

    <!-- ========================= DESTINASI ========================= -->
    <section id="destinasi" class="bg-forest-900 px-5 py-20 text-white lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
          <div>
            <span class="text-sm font-bold uppercase tracking-[.2em] text-sun-400">Pilihan wisata</span>
            <h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">Destinasi Wisata</h2>
          </div>
          <a href="<?php echo esc_url( kaduela_page_url( 'destinasi', '' ) ); ?>" class="font-bold text-sun-400 transition hover:text-white">Lihat Semua Destinasi</a>
        </div>

        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-2">
          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="index-telaga" src="<?php echo esc_url( kaduela_asset_uri( 'destinasi_telaga.jpg' ) ); ?>" alt="Telaga Biru Cicerem" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900 sm:text-3xl">Telaga Biru Cicerem</h3>
              <a href="<?php echo esc_url( kaduela_page_url( 'telaga', '' ) ); ?>" class="mt-auto pt-7">
                <span class="flex min-h-[52px] items-center justify-center rounded-2xl bg-forest-700 px-5 py-3.5 text-center font-extrabold text-white transition hover:bg-forest-800">Lihat Selengkapnya</span>
              </a>
            </div>
          </article>

          <article class="reveal group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="index-sideland" src="<?php echo esc_url( kaduela_asset_uri( 'destinasi_sideland.jpg' ) ); ?>" alt="Wisata Side Land Kaduela" loading="lazy" decoding="async" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900 sm:text-3xl">Wisata Side Land Kaduela</h3>
              <a href="<?php echo esc_url( kaduela_page_url( 'sideland', '' ) ); ?>" class="mt-auto pt-7">
                <span class="flex min-h-[52px] items-center justify-center rounded-2xl bg-forest-700 px-5 py-3.5 text-center font-extrabold text-white transition hover:bg-forest-800">Lihat Selengkapnya</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ========================= PAKET WISATA ========================= -->
    <section id="paket-wisata" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Pilihan paket</span>
          <h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Paket Wisata Kaduela</h2>
        </div>

        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-2">
          <article class="reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <figure class="aspect-[16/10] overflow-hidden bg-slate-200">
              <img data-photo-slot="index-paket-sehari" src="<?php echo esc_url( kaduela_asset_uri( 'paketwisata_sehari.jpg' ) ); ?>" alt="Kegiatan paket wisata Kaduela Sehari" loading="lazy" decoding="async" class="h-full w-full object-cover">
            </figure>
            <div class="flex flex-1 flex-col p-7 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900 sm:text-3xl">Kaduela Sehari</h3>
              <p class="mt-4 leading-7 text-slate-600">Kunjungan satu hari untuk rombongan yang ingin menikmati dua destinasi wisata, Jeep Tour, dan dokumentasi perjalanan.</p>
              <div class="mt-7 grid grid-cols-2 gap-3 sm:grid-cols-3">
                <div class="rounded-2xl bg-forest-100 p-4 text-forest-900"><strong class="block font-display text-base sm:text-lg">1 Hari</strong><span class="mt-1 block text-xs text-forest-800/60">durasi</span></div>
                <div class="rounded-2xl bg-forest-100 p-4 text-forest-900"><strong class="block font-display text-base sm:text-lg">20–50</strong><span class="mt-1 block text-xs text-forest-800/60">peserta</span></div>
                <div class="col-span-2 rounded-2xl bg-forest-100 p-4 text-forest-900 sm:col-span-1"><strong class="block font-display text-base sm:text-lg">Rp165.000</strong><span class="mt-1 block text-xs text-forest-800/60">mulai/orang</span></div>
              </div>
              <a href="<?php echo esc_url( kaduela_page_url( 'paketwisata', '#kaduela-sehari' ) ); ?>" class="mt-7 flex min-h-[52px] items-center justify-center rounded-2xl bg-forest-700 px-5 py-3.5 font-extrabold text-white transition hover:bg-forest-800">Lihat Selengkapnya</a>
            </div>
          </article>

          <article class="reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-forest-800 bg-forest-900 text-white shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-water-900">
              <img data-photo-slot="index-paket-bermalam" src="<?php echo esc_url( kaduela_asset_uri( 'paketwisata_bermalam.jpg' ) ); ?>" alt="Homestay untuk paket Kaduela Bermalam" loading="lazy" decoding="async" class="h-full w-full object-cover">
            </figure>
            <div class="flex flex-1 flex-col p-7 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-white sm:text-3xl">Kaduela Bermalam</h3>
              <p class="mt-4 leading-7 text-white/70">Kunjungan dengan satu malam di homestay, sarapan, dua destinasi wisata, Jeep Tour, dan dokumentasi perjalanan.</p>
              <div class="mt-7 grid grid-cols-2 gap-3 sm:grid-cols-3">
                <div class="rounded-2xl bg-sun-400 p-4 text-forest-900"><strong class="block font-display text-sm sm:text-lg">1 Hari + 1 Malam</strong><span class="mt-1 block text-xs text-forest-900/65">durasi</span></div>
                <div class="rounded-2xl bg-sun-400 p-4 text-forest-900"><strong class="block font-display text-base sm:text-lg">20–50</strong><span class="mt-1 block text-xs text-forest-900/65">peserta</span></div>
                <div class="col-span-2 rounded-2xl bg-sun-400 p-4 text-forest-900 sm:col-span-1"><strong class="block font-display text-base sm:text-lg">Rp240.000</strong><span class="mt-1 block text-xs text-forest-900/65">mulai/orang</span></div>
              </div>
              <a href="<?php echo esc_url( kaduela_page_url( 'paketwisata', '#kaduela-bermalam' ) ); ?>" class="mt-7 flex min-h-[52px] items-center justify-center rounded-2xl bg-sun-400 px-5 py-3.5 font-extrabold text-forest-900 transition hover:bg-sun-500">Lihat Selengkapnya</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ========================= INFORMASI KUNJUNGAN ========================= -->
    <section id="informasi-kunjungan" class="bg-forest-900 px-5 py-20 text-white lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-sun-400">Informasi desa</span>
          <h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">Lengkapi Kunjungan</h2>
        </div>

        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-2">
          <article class="reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <figure class="aspect-[4/3] overflow-hidden bg-slate-200">
              <img data-photo-slot="index-homestay" src="<?php echo esc_url( kaduela_asset_uri( 'homestay_askam_depan.jpg' ) ); ?>" alt="Tampak depan salah satu homestay warga Desa Kaduela" loading="lazy" decoding="async" class="h-full w-full object-cover">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Homestay Warga</h3>
              <p class="mt-4 leading-7 text-slate-600">Enam homestay warga tersedia dengan tarif Rp75.000 per orang per malam, termasuk sarapan.</p>
              <a href="<?php echo esc_url( kaduela_page_url( 'akomodasi', '' ) ); ?>" class="mt-auto pt-6 font-bold text-water-700 transition hover:text-water-600">Lihat Akomodasi</a>
            </div>
          </article>

          <article class="reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <figure class="aspect-[4/3] overflow-hidden bg-[#f4ebdf]">
              <img data-photo-slot="index-suvenir" src="<?php echo esc_url( kaduela_asset_uri( 'snack_dodol.png' ) ); ?>" alt="Produk dodol Kaduela" loading="lazy" decoding="async" class="h-full w-full object-cover">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Suvenir</h3>
              <p class="mt-4 leading-7 text-slate-600">Pilihan snack olahan lokal, gantungan kunci, dan baju Kaduela tersedia untuk pengunjung.</p>
              <a href="<?php echo esc_url( kaduela_page_url( 'suvenir', '' ) ); ?>" class="mt-auto pt-6 font-bold text-water-700 transition hover:text-water-600">Lihat Suvenir</a>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- ========================= BUDAYA ========================= -->
    <section id="budaya-kaduela" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto grid max-w-7xl items-stretch gap-7 lg:grid-cols-[.95fr_1.05fr]">
        <figure class="reveal relative min-h-[360px] overflow-hidden rounded-[2rem] bg-slate-200 shadow-soft sm:min-h-[460px] lg:min-h-0">
          <img data-photo-slot="index-budaya" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_sedekah_bumi.jpg' ) ); ?>" alt="Pelaksanaan tradisi Sedekah Bumi di Desa Kaduela" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover">
        </figure>

        <article class="reveal flex flex-col justify-center rounded-[2rem] border border-slate-200 bg-white p-7 shadow-card sm:p-10">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Warisan desa</span>
          <h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Budaya Desa Kaduela</h2>
          <p class="copy-justify mt-6 text-lg leading-8 text-slate-600">Sedekah Bumi, Sedekah Munjung, Dogdog, legenda dan cerita rakyat, serta situs cagar budaya menjadi bagian dari warisan Desa Kaduela yang tetap dikenal oleh masyarakat hingga sekarang.</p>
          <a href="<?php echo esc_url( kaduela_page_url( 'budaya', '' ) ); ?>" class="mt-8 inline-flex min-h-[50px] self-start items-center justify-center rounded-2xl bg-forest-700 px-6 py-3 font-bold text-white transition hover:bg-forest-800">Lihat Budaya Desa</a>
        </article>
      </div>
    </section>

    <!-- ========================= BUMDES ========================= -->
    <section id="bumdes" class="bg-forest-900 px-5 py-20 text-white lg:px-8 lg:py-24">
      <div class="mx-auto grid max-w-7xl items-stretch gap-7 lg:grid-cols-[1.05fr_.95fr]">
        <article class="reveal flex flex-col justify-center rounded-[2rem] border border-white/10 bg-white/10 p-7 shadow-soft backdrop-blur sm:p-10">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-sun-400">Pengelola usaha desa</span>
          <h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">BUMDes Arya Kamuning</h2>
          <p class="copy-justify mt-6 text-lg leading-8 text-white/70">BUMDes Arya Kamuning mengelola unit usaha wisata, layanan simpan pinjam, dan PPOB sebagai bagian dari pengembangan ekonomi serta pelayanan masyarakat Desa Kaduela.</p>
          <a href="<?php echo esc_url( kaduela_page_url( 'bumdes', '' ) ); ?>" class="mt-8 inline-flex min-h-[50px] self-start items-center justify-center rounded-2xl bg-sun-400 px-6 py-3 font-extrabold text-forest-900 transition hover:bg-sun-500">Lihat Profil BUMDes</a>
        </article>
        <figure class="reveal relative min-h-[360px] overflow-hidden rounded-[2rem] bg-water-900 shadow-soft sm:min-h-[460px] lg:min-h-0">
          <img data-photo-slot="index-bumdes" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_unit_wisata.jpg' ) ); ?>" alt="Kawasan wisata yang dikelola BUMDes Arya Kamuning" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover">
        </figure>
      </div>
    </section>
    <!-- ========================= BERITA ========================= -->
    <section id="berita" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
          <div>
            <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Informasi terbaru</span>
            <h2 class="mt-3 font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Berita Desa Kaduela</h2>
          </div>
          <a href="<?php echo esc_url( kaduela_page_url( 'berita' ) ); ?>" class="font-bold text-water-700 transition hover:text-water-600">Buka Halaman Berita</a>
        </div>

        <?php
        $kaduela_home_news = new WP_Query(
          array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'posts_per_page'      => 3,
            'ignore_sticky_posts' => true,
            'no_found_rows'       => true,
          )
        );
        ?>
        <?php if ( $kaduela_home_news->have_posts() ) : ?>
          <div class="mt-10 grid items-stretch gap-7 md:grid-cols-2 lg:grid-cols-3">
            <?php while ( $kaduela_home_news->have_posts() ) : $kaduela_home_news->the_post(); ?>
              <?php get_template_part( 'template-parts/news', 'card' ); ?>
            <?php endwhile; ?>
          </div>
        <?php else : ?>
          <div class="reveal mt-10 rounded-[2rem] border border-slate-200 bg-white px-6 py-12 text-center shadow-card sm:px-10">
            <p class="font-display text-xl font-extrabold text-forest-900 sm:text-2xl">Belum ada berita yang dipublikasikan.</p>
          </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </section>


    <!-- ========================= KONTAK SINGKAT ========================= -->
    <section class="bg-white px-5 py-12 lg:px-8 lg:py-14">
      <div class="relative mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-water-800 px-6 py-8 text-white shadow-soft sm:px-10 sm:py-9 lg:px-12">
        <div class="relative flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
          <h2 class="reveal font-display text-2xl font-extrabold sm:text-3xl">Informasi dan Reservasi</h2>
          <a href="https://wa.me/6281387666671" target="_blank" rel="noopener noreferrer" class="reveal inline-flex shrink-0 items-center justify-center rounded-2xl bg-sun-400 px-6 py-3.5 font-extrabold text-forest-900 transition hover:bg-sun-500">0813-8766-6671</a>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
