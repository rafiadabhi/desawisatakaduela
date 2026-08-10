<?php
/**
 * Static page template generated from the completed Kaduela website.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="konten-utama">
    <!-- ========================= HERO BERITA ========================= -->
    <section class="relative isolate flex min-h-[620px] items-end overflow-hidden pt-20 text-white">
      <!-- Saat menjadi theme WordPress, gambar ini dapat diganti dengan hero berita milik theme. -->
      <img data-photo-slot="berita-hero" src="<?php echo esc_url( kaduela_asset_uri( 'berita_hero.jpg' ) ); ?>" alt="Lanskap hijau Desa Kaduela" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <div class="hero-overlay absolute inset-0 -z-10"></div>
      <div class="absolute -bottom-24 right-[-5%] -z-10 h-80 w-80 rounded-full bg-sun-400/20 blur-3xl"></div>
      <div class="mx-auto w-full max-w-7xl px-5 pb-16 lg:px-8 lg:pb-20">
        <div class="reveal max-w-5xl">
          <a href="<?php echo esc_url( kaduela_page_url( 'beranda', '#home' ) ); ?>" class="inline-block text-sm font-semibold text-white/70 transition hover:text-white">Kembali ke Beranda</a>
          <h1 class="mt-7 whitespace-nowrap font-display text-[clamp(1.35rem,6.5vw,4.5rem)] font-extrabold leading-none tracking-[-0.03em]">Berita Desa <span class="text-sun-400">Kaduela</span></h1>
        </div>
      </div>
      <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
    </section>

    <section id="berita-terbaru" class="bg-slate-50 px-5 py-20 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-7xl">
        <div class="reveal">
          <h2 class="font-display text-3xl font-extrabold tracking-tight text-forest-900 sm:text-4xl lg:text-5xl">Berita Terbaru</h2>
        </div>

        <?php
        $kaduela_paged = max( 1, (int) get_query_var( 'paged' ), (int) get_query_var( 'page' ) );
        $kaduela_news  = new WP_Query(
          array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'posts_per_page'      => 9,
            'paged'               => $kaduela_paged,
            'ignore_sticky_posts' => true,
          )
        );
        ?>

        <?php if ( $kaduela_news->have_posts() ) : ?>
          <div class="mt-10 grid items-stretch gap-7 md:grid-cols-2 lg:grid-cols-3">
            <?php while ( $kaduela_news->have_posts() ) : $kaduela_news->the_post(); ?>
              <?php get_template_part( 'template-parts/news', 'card' ); ?>
            <?php endwhile; ?>
          </div>

          <?php
          $kaduela_pagination = paginate_links(
            array(
              'current'   => $kaduela_paged,
              'total'     => (int) $kaduela_news->max_num_pages,
              'mid_size'  => 1,
              'prev_text' => 'Sebelumnya',
              'next_text' => 'Berikutnya',
              'type'      => 'list',
            )
          );
          ?>
          <?php if ( $kaduela_pagination ) : ?>
            <nav class="kaduela-pagination mt-12" aria-label="Navigasi halaman berita"><?php echo wp_kses_post( $kaduela_pagination ); ?></nav>
          <?php endif; ?>
        <?php else : ?>
          <div class="reveal mt-10 flex min-h-[240px] items-center justify-center rounded-[2rem] border border-slate-200 bg-white px-6 py-12 text-center shadow-card">
            <p class="font-display text-xl font-extrabold text-forest-900 sm:text-2xl">Belum ada berita yang dipublikasikan.</p>
          </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
