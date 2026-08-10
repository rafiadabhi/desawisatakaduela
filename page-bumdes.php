<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <!-- ========================= HERO BUMDES ========================= -->
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <!-- Ganti dengan dokumentasi asli kantor atau kegiatan BUMDes Arya Kamuning. -->
      <img data-photo-slot="bumdes-hero" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_hero.jpg' ) ); ?>" alt="Kegiatan pengelolaan usaha bersama" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-5xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 font-display text-[clamp(2rem,6.3vw,4.5rem)] font-extrabold leading-[1.05] tracking-[-0.03em]">BUMDes Arya Kamuning</h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <!-- ========================= PROFIL BUMDES ========================= -->
    <section id="profil-bumdes" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Profil BUMDes</h2>
        </div>

        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-[minmax(0,1.7fr)_minmax(280px,.8fr)]">
          <article class="reveal overflow-hidden rounded-[2rem] border border-slate-200 bg-white px-6 shadow-card sm:px-9 lg:px-11">
            <dl class="divide-y divide-slate-100">
              <div class="grid gap-2 py-6 sm:grid-cols-[13rem_1fr] sm:gap-8 sm:py-7">
                <dt class="text-base font-semibold text-slate-600">Tanggal pendirian</dt>
                <dd class="text-base font-semibold leading-7 text-forest-900">26 Mei 2017</dd>
              </div>
              <div class="grid gap-2 py-6 sm:grid-cols-[13rem_1fr] sm:gap-8 sm:py-7">
                <dt class="text-base font-semibold text-slate-600">Dasar hukum</dt>
                <dd class="copy-justify text-base font-semibold leading-7 text-forest-900">Peraturan Desa Nomor 4 Tahun 2022 tentang Pendirian BUM Desa, yang mencabut Peraturan Desa Nomor 6 Tahun 2020 tentang Perubahan Peraturan Desa Nomor 03 Tahun 2017 tentang Pendirian BUM Desa &ldquo;Arya Kamuning&rdquo;.</dd>
              </div>
              <div class="grid gap-2 py-6 sm:grid-cols-[13rem_1fr] sm:gap-8 sm:py-7">
                <dt class="text-base font-semibold text-slate-600">Badan Hukum Kemenkumham</dt>
                <dd class="break-all text-base font-semibold leading-7 text-forest-900 sm:break-normal">AHU-03508.AH.01.33.TAHUN.2022</dd>
              </div>
              <div class="grid gap-2 py-6 sm:grid-cols-[13rem_1fr] sm:gap-8 sm:py-7">
                <dt class="text-base font-semibold text-slate-600">Modal awal</dt>
                <dd class="text-base font-semibold leading-7 text-forest-900">Rp100.000.000</dd>
              </div>
            </dl>
          </article>

          <figure class="reveal flex min-h-[300px] items-center justify-center overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-8 shadow-card" aria-label="Logo BUMDes Arya Kamuning">
            <img data-photo-slot="logo-bumdes" src="<?php echo esc_url( kaduela_asset_uri( 'logo_bumdes.png' ) ); ?>" alt="Logo BUMDes Arya Kamuning" class="h-full max-h-[310px] w-full object-contain" onerror="this.hidden=true">
          </figure>
        </div>
      </div>
    </section>

    <!-- ========================= TUJUAN BUMDES ========================= -->
    <section id="tujuan" class="bg-forest-900 px-5 py-20 text-white lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">Tujuan dan Peran BUMDes</h2>
        </div>

        <ol class="mt-10 grid gap-x-12 border-b border-white/15 md:grid-cols-2">
          <li class="reveal flex gap-5 border-t border-white/15 py-6">
            <span class="shrink-0 font-display text-sm font-extrabold text-sun-400">01</span>
            <p class="leading-7 text-white/75">Meningkatkan perekonomian desa.</p>
          </li>
          <li class="reveal flex gap-5 border-t border-white/15 py-6">
            <span class="shrink-0 font-display text-sm font-extrabold text-sun-400">02</span>
            <p class="leading-7 text-white/75">Mengoptimalkan aset desa dan pemberdayaan masyarakat agar bermanfaat untuk kesejahteraan desa.</p>
          </li>
          <li class="reveal flex gap-5 border-t border-white/15 py-6">
            <span class="shrink-0 font-display text-sm font-extrabold text-sun-400">03</span>
            <p class="leading-7 text-white/75">Meningkatkan usaha masyarakat dalam pengelolaan potensi ekonomi desa.</p>
          </li>
          <li class="reveal flex gap-5 border-t border-white/15 py-6">
            <span class="shrink-0 font-display text-sm font-extrabold text-sun-400">04</span>
            <p class="leading-7 text-white/75">Mengembangkan rencana kerja sama antar desa dan/atau dengan pihak ketiga.</p>
          </li>
          <li class="reveal flex gap-5 border-t border-white/15 py-6">
            <span class="shrink-0 font-display text-sm font-extrabold text-sun-400">05</span>
            <p class="leading-7 text-white/75">Menciptakan peluang dan jaringan pasar yang mendukung kebutuhan layanan umum warga.</p>
          </li>
          <li class="reveal flex gap-5 border-t border-white/15 py-6">
            <span class="shrink-0 font-display text-sm font-extrabold text-sun-400">06</span>
            <p class="leading-7 text-white/75">Membuka lapangan kerja.</p>
          </li>
          <li class="reveal flex gap-5 border-t border-white/15 py-6">
            <span class="shrink-0 font-display text-sm font-extrabold text-sun-400">07</span>
            <p class="leading-7 text-white/75">Meningkatkan kesejahteraan masyarakat melalui perbaikan pelayanan umum, pertumbuhan, dan pemerataan ekonomi desa.</p>
          </li>
          <li class="reveal flex gap-5 border-t border-white/15 py-6">
            <span class="shrink-0 font-display text-sm font-extrabold text-sun-400">08</span>
            <p class="leading-7 text-white/75">Meningkatkan pendapatan masyarakat desa dan Pendapatan Asli Desa.</p>
          </li>
        </ol>
      </div>
    </section>

    <!-- ========================= UNIT USAHA ========================= -->
    <section id="unit-usaha" class="bg-white px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Unit Usaha</h2>
        </div>

        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-3">
          <article class="reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <figure class="aspect-[4/3] overflow-hidden bg-slate-100">
              <img data-photo-slot="unit-wisata" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_unit_wisata.jpg' ) ); ?>" alt="Kawasan wisata yang dikelola BUMDes" class="h-full w-full object-cover">
            </figure>
            <div class="flex flex-1 flex-col p-7 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Unit Usaha Wisata</h3>
              <p class="copy-justify mt-5 leading-8 text-slate-600">Mengelola dua destinasi wisata alam unggulan desa, yaitu Telaga Biru Cicerem dan Wisata Sideland. Unit ini bergerak di bidang pengelolaan kolam renang dan camping ground, menjadikan potensi alam desa sebagai sumber pendapatan sekaligus daya tarik wisata bagi masyarakat luar.</p>
            </div>
          </article>

          <article class="reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <figure class="aspect-[4/3] overflow-hidden bg-slate-100">
              <img data-photo-slot="unit-simpan-pinjam" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_unit_simpan_pinjam.jpg' ) ); ?>" alt="Kegiatan layanan usaha dan pemberdayaan warga" class="h-full w-full object-cover">
            </figure>
            <div class="flex flex-1 flex-col p-7 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Unit Usaha Simpan Pinjam</h3>
              <p class="copy-justify mt-5 leading-8 text-slate-600">Menyediakan layanan simpan pinjam bagi masyarakat desa, mendukung permodalan usaha kecil dan kebutuhan ekonomi warga sebagai bagian dari upaya pemberdayaan ekonomi lokal.</p>
            </div>
          </article>

          <article class="reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card">
            <figure class="aspect-[4/3] overflow-hidden bg-slate-100">
              <img data-photo-slot="unit-ppob" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_unit_ppob.jpg' ) ); ?>" alt="Pelayanan transaksi keuangan BUMDes" class="h-full w-full object-cover">
            </figure>
            <div class="flex flex-1 flex-col p-7 sm:p-8">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Unit PPOB</h3>
              <p class="copy-justify mt-5 leading-8 text-slate-600">Bergerak di bidang layanan perbankan dan pembayaran, bekerja sama dengan Bank BJB dan Bank BNI, serta mempermudah akses masyarakat desa terhadap layanan transaksi keuangan.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ========================= LEGALITAS ========================= -->
    <section id="legalitas" class="bg-forest-900 px-5 py-20 text-white lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-4xl">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">Legalitas</h2>
        </div>

        <article class="reveal mt-10 overflow-hidden rounded-[2rem] bg-sun-400 px-6 text-forest-900 shadow-soft sm:px-9 lg:px-11">
          <dl class="divide-y divide-forest-900/15">
            <div class="grid gap-2 py-6 sm:grid-cols-[14rem_1fr] sm:gap-8">
              <dt class="text-sm font-semibold text-forest-900/60">Nomor Badan Hukum</dt>
              <dd class="break-all font-semibold text-forest-900 sm:break-normal">AHU-03508.AH.01.33.TAHUN.2022</dd>
            </div>
            <div class="grid gap-2 py-6 sm:grid-cols-[14rem_1fr] sm:gap-8">
              <dt class="text-sm font-semibold text-forest-900/60">Nomor Registrasi BUMDes</dt>
              <dd class="font-semibold text-forest-900">3208192002-1-002188</dd>
            </div>
            <div class="grid gap-2 py-6 sm:grid-cols-[14rem_1fr] sm:gap-8">
              <dt class="text-sm font-semibold text-forest-900/60">NPWP</dt>
              <dd class="font-semibold text-forest-900">42.986.945.6-438.000</dd>
            </div>
            <div class="grid gap-2 py-6 sm:grid-cols-[14rem_1fr] sm:gap-8">
              <dt class="text-sm font-semibold text-forest-900/60">Nomor SK Pengurus</dt>
              <dd class="font-semibold text-forest-900">141.3/KPTS.34-Sekret/2020</dd>
            </div>
            <div class="grid gap-2 py-6 sm:grid-cols-[14rem_1fr] sm:gap-8">
              <dt class="text-sm font-semibold text-forest-900/60">Nomor Peraturan Desa</dt>
              <dd class="font-semibold text-forest-900">Perdes No. 4 Tahun 2022</dd>
            </div>
          </dl>
        </article>
      </div>
    </section>

    <!-- ========================= GALERI BUMDES ========================= -->
    <section id="galeri-bumdes" class="bg-white py-20 lg:py-24">
      <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="reveal mx-auto max-w-3xl text-center">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Galeri BUMDes</h2>
        </div>
      </div>

      <div class="gallery-marquee reveal mt-10 w-full" data-gallery-marquee>
        <div class="gallery-marquee-track" data-gallery-marquee-track>
          <div class="flex shrink-0 gap-5 pr-5" data-gallery-marquee-set>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-01" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_01.jpg' ) ); ?>" alt="Kegiatan pengelolaan BUMDes" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-02" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_02.jpg' ) ); ?>" alt="Kegiatan bersama pengurus BUMDes" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-03" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_03.jpg' ) ); ?>" alt="Pertemuan pengelola unit usaha" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-04" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_04.jpg' ) ); ?>" alt="Koordinasi pengembangan usaha desa" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-05" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_05.jpg' ) ); ?>" alt="Kerja bersama dalam kegiatan BUMDes" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-06" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_06.jpg' ) ); ?>" alt="Ruang pelayanan dan pengelolaan usaha" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-07" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_07.jpg' ) ); ?>" alt="Ruang kerja pengurus BUMDes" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-08" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_08.jpg' ) ); ?>" alt="Diskusi pengembangan layanan desa" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-09" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_09.jpg' ) ); ?>" alt="Aktivitas tim pengelola BUMDes" class="h-full w-full object-cover">
            </figure>
            <figure class="aspect-[4/3] w-[82vw] max-w-[460px] shrink-0 overflow-hidden rounded-[2rem] bg-forest-900 shadow-soft">
              <img data-photo-slot="galeri-bumdes-10" src="<?php echo esc_url( kaduela_asset_uri( 'bumdes_galeri_10.jpg' ) ); ?>" alt="Rapat pengurus dan unit usaha BUMDes" class="h-full w-full object-cover">
            </figure>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
