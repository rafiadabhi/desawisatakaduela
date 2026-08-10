<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <img data-photo-slot="budaya-hero" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_hero.jpg' ) ); ?>" alt="Suasana budaya masyarakat" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-4xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 whitespace-nowrap font-display text-[clamp(1.4rem,7vw,4.5rem)] font-extrabold leading-none tracking-[-0.03em]">Budaya Desa <span class="text-sun-400">Kaduela</span></h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <section id="tradisi" class="scroll-mt-20 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-5xl">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Tradisi desa</span>
          <h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Warisan Budaya dan Tradisi</h2>
        </div>
        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-3">
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="sedekah-bumi" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_sedekah_bumi.jpg' ) ); ?>" alt="Dokumentasi Sedekah Bumi" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Sedekah Bumi</h3>
              <div class="mt-4 space-y-4 text-justify leading-7 text-slate-600">
                <p>Menurut penuturan para tokoh masyarakat, Sedekah Bumi dilaksanakan setahun sekali pada bulan Sya’ban di alun-alun Desa Kaduela. Alun-alun menjadi titik berkumpul warga dari berbagai wilayah desa untuk menjalankan upacara bersama.</p>
                <p>Kegiatan tersebut dimaknai sebagai ungkapan rasa syukur atas hasil bumi dan kehidupan desa. Selain menjalankan tradisi, pertemuan ini juga menjaga hubungan antarwarga dan meneruskan kebiasaan desa kepada generasi berikutnya.</p>
              </div>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="sedekah-munjung" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_sedekah_munjung.jpg' ) ); ?>" alt="Dokumentasi Sedekah Munjung" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Sedekah Munjung</h3>
              <div class="mt-4 space-y-4 text-justify leading-7 text-slate-600">
                <p>Sedekah Munjung merupakan ziarah tahunan untuk mengunjungi makam leluhur atau karuhun. Tujuan ziarah mengikuti lokasi makam keluarga: warga yang leluhurnya dimakamkan di Depok berkunjung ke pemakaman Depok, sedangkan keluarga dengan makam leluhur di Pajaratan menuju pemakaman Pajaratan.</p>
                <p>Dalam kunjungan tersebut, keluarga membawa tetenong berisi makanan dan lauk-pauk. Makanan itu dibagikan sebagai bagian dari penghormatan kepada leluhur sekaligus menjaga hubungan kekeluargaan dalam tradisi yang dilaksanakan satu kali setiap tahun.</p>
              </div>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="dogdog" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_dogdog.jpg' ) ); ?>" alt="Dokumentasi Dogdog" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Dogdog</h3>
              <div class="mt-4 space-y-4 text-justify leading-7 text-slate-600">
                <p>Dogdog merupakan kesenian tradisional khas Kaduela yang tercatat dalam lampiran dokumentasi sejarah dan budaya desa. Kesenian ini dikenal sebagai bagian dari warisan lokal yang telah hadir selama beberapa generasi.</p>
                <p>Keberadaannya melengkapi tradisi Kaduela yang tidak hanya hadir melalui upacara adat dan ziarah, tetapi juga melalui kesenian yang diwariskan di lingkungan masyarakat.</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="legenda" class="scroll-mt-20 bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-5xl">
          <span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Cerita turun-temurun</span>
          <h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Legenda dan Cerita Rakyat</h2>
        </div>
        <div class="mt-10 grid items-stretch gap-7 lg:grid-cols-2">
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="legenda-talaga-remis-nilem" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_legenda_talaga_remis_nilem.jpg' ) ); ?>" alt="Dokumentasi Legenda Talaga Remis dan Talaga Nilem" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Legenda Talaga Remis dan Talaga Nilem</h3>
              <div class="mt-4 space-y-4 text-justify leading-7 text-slate-600">
                <p>Menurut cerita yang berkembang secara lisan, legenda ini berkaitan dengan masa Sultan Giri Laya atau Sultan Matangaji, penguasa Cirebon yang menghadapi ketegangan dengan Mataram. Elang Sutajaya kemudian terlibat membantu Pangeran Selingsingan ketika peperangan melawan Pangeran Purbaya meluas hingga wilayah sekitar Kaduela.</p>
                <p>Pangeran Selingsingan diceritakan mundur melalui Cikalahang, Mandala, lalu Kaduela. Dalam kesedihannya karena peperangan tidak kunjung berakhir, air matanya jatuh ke tanah dan dipercaya membentuk Talaga Nilem yang berada di sebelah Talaga Remis.</p>
                <p>Elang Sutajaya akhirnya mengalahkan Pangeran Purbaya dan memberinya nasihat tentang hidup bermasyarakat, saling menghormati, serta larangan membuat kekacauan. Dalam kelanjutan cerita, tangisan Pangeran Selingsingan dipercaya membentuk Talaga Remis, sedangkan Pangeran Purbaya berubah menjadi seekor bulus bernama Si Mendung Purbaya.</p>
              </div>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="asal-usul-kaduela" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_asal_usul_kaduela.jpg' ) ); ?>" alt="Dokumentasi Asal Usul Nama Kaduela" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Asal Usul Nama Kaduela</h3>
              <div class="mt-4 space-y-4 text-justify leading-7 text-slate-600">
                <p>Dalam naskah sejarah desa, Pangeran Kuningan tetap memimpin penyerangan terhadap Kerajaan Galuh meskipun rencana tersebut sebelumnya tidak disetujui oleh Prabu Ewangga dan Mbah Kuwu Cirebon. Pertempuran terjadi di Gunung Pola, lalu pasukan Kuningan dipukul mundur dan Pangeran Kuningan dikejar hingga Bukit Janggala.</p>
                <p>Dalam keadaan terdesak, Pangeran Kuningan bersembunyi di rerimbunan oyong. Seekor kijang yang terusik keluar dari tempat tersebut dan kemudian dianggap pasukan Galuh sebagai jelmaan Pangeran Kuningan. Peristiwa itu membuat Pangeran Kuningan tidak ditemukan dan selamat dari pengejaran.</p>
                <p>Setelah keadaan aman, wilayah Bukit Janggala dan sekitarnya dinamai Kaduela, dari ungkapan Ado Saking Blai yang dimaknai sebagai jauh dari mara bahaya. Pangeran Kuningan kemudian membuka kembali kawasan tersebut dengan dukungan Pangeran Cakrabuana dan Syekh Maulana Makhdum Ibrahim. Padepokan Astana dipimpin Syekh Abdullah Iman, sedangkan padepokan di Bukit Janggala dipimpin Syekh Makhdum yang bergelar Prabu Anom Janggala Manik.</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="situs-budaya" class="scroll-mt-20 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal max-w-5xl"><span class="text-sm font-bold uppercase tracking-[.2em] text-water-600">Peninggalan desa</span><h2 class="mt-3 font-display text-4xl font-extrabold tracking-tight text-forest-900 sm:text-5xl">Situs Cagar Budaya</h2></div>
        <div class="mt-10 grid items-stretch gap-7 md:grid-cols-2 xl:grid-cols-3">
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="batu-asahan" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_batu_asahan.jpg' ) ); ?>" alt="Dokumentasi Batu Asahan" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Batu Asahan</h3>
              <p class="mt-4 text-justify leading-7 text-slate-600">Situs peninggalan zaman logam yang memuat jejak tapak tangan manusia dan bekas asahan. Situs ini diperkirakan digunakan oleh manusia purba untuk mengasah benda logam berbentuk senjata.</p>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="batu-sandaan" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_batu_sandaan.jpg' ) ); ?>" alt="Dokumentasi Batu Sandaan" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Batu Sandaan</h3>
              <p class="mt-4 text-justify leading-7 text-slate-600">Salah satu situs batu bersejarah yang menjadi bagian dari peninggalan masa lampau di wilayah Desa Kaduela. Fungsi dan makna situs ini masih memerlukan pendokumentasian lebih lanjut.</p>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="batu-saheng" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_batu_saheng.jpg' ) ); ?>" alt="Dokumentasi Batu Saheng" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Batu Saheng</h3>
              <p class="mt-4 text-justify leading-7 text-slate-600">Situs batu bersejarah yang terdokumentasi sebagai bagian dari warisan budaya desa. Asal-usul dan kegunaannya masih dalam proses penggalian informasi.</p>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="batu-tumpeng" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_batu_tumpeng.jpg' ) ); ?>" alt="Dokumentasi Batu Tumpeng" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Batu Tumpeng</h3>
              <p class="mt-4 text-justify leading-7 text-slate-600">Situs batu peninggalan masa lampau yang turut menjadi bagian dari kekayaan cagar budaya Desa Kaduela. Informasi lebih rinci mengenai situs ini masih memerlukan dokumentasi lanjutan.</p>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="batu-kidama" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_batu_kidama.jpg' ) ); ?>" alt="Dokumentasi Batu Kidama" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Batu Kidama</h3>
              <p class="mt-4 text-justify leading-7 text-slate-600">Situs batu bersejarah yang menjadi bagian dari rangkaian peninggalan purbakala di wilayah desa. Deskripsi lengkap mengenai situs ini masih perlu digali lebih lanjut dari sumber setempat.</p>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="makam-syekh-abdullah-iman" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_makam_syekh_abdullah_iman.jpg' ) ); ?>" alt="Dokumentasi Makam Syekh Abdullah Iman" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Makam Syekh Abdullah Iman</h3>
              <p class="mt-4 text-justify leading-7 text-slate-600">Makam tokoh ulama yang berperan penting dalam penataan wilayah dan penyebaran agama Islam di kawasan Kaduela dan sekitarnya pada masa lampau.</p>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="makam-syekh-maulana-makhdum-ibrahim" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_makam_syekh_maulana_makhdum_ibrahim.jpg' ) ); ?>" alt="Dokumentasi Makam Syekh Maulana Makhdum Ibrahim" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Makam Syekh Maulana Makhdum Ibrahim</h3>
              <p class="mt-4 text-justify leading-7 text-slate-600">Makam seorang ulama asal Baghdad yang memimpin padepokan Janggala Manik, cikal bakal berdirinya Desa Kaduela, dan berperan besar dalam sejarah awal desa.</p>
            </div>
          </article>
          <article class="group reveal flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-card transition duration-300 hover:-translate-y-1 hover:shadow-soft">
            <figure class="aspect-[16/10] overflow-hidden bg-forest-900">
              <img data-photo-slot="makam-prabu-arya-kamuning" src="<?php echo esc_url( kaduela_asset_uri( 'budaya_makam_prabu_arya_kamuning.jpg' ) ); ?>" alt="Dokumentasi Makam Prabu Arya Kamuning" loading="lazy" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]">
            </figure>
            <div class="flex flex-1 flex-col p-6 sm:p-7">
              <h3 class="font-display text-2xl font-extrabold tracking-tight text-forest-900">Makam Prabu Arya Kamuning</h3>
              <p class="mt-4 text-justify leading-7 text-slate-600">Situs makam tokoh sejarah yang memiliki keterkaitan erat dengan sejarah wilayah Kuningan dan Desa Kaduela.</p>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
