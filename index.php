<?php get_header(); ?>

<main>
    <!-- Hero/Banner Section -->
    <section class="hero-banner">
        <div class="banner-content">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
            <a href="<?php echo get_permalink( get_page_by_path('ambassador') ); ?>" class="cta-button">Message from the Ambassador</a>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="intro">
        <h2>Eritrea: Land of Resilience</h2>
        <p>Eritrea, situated in the Horn of Africa, is known for its rich culture and stunning landscapes along the Red Sea. After achieving independence in 1993, the nation has fostered a strong sense of pride and resilience among its people, working towards development and community unity.</p>
        <p>The capital, Asmara, is renowned for its Italian colonial architecture and is a UNESCO World Heritage site. The Eritrean Embassy in South Africa is committed to strengthening ties among Eritreans abroad and promoting our cultural identity.</p>
    </section>

    <!-- Latest News or Blog Posts -->
    <section class="latest-posts">
        <h2>Latest News</h2>
        <div class="posts-grid">
            <?php
            // Query the latest posts
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $latest_posts = new WP_Query($args);

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                    <article class="post-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                        </a>
                    </article>
                <?php endwhile;
            else : ?>
                <p>No recent news available.</p>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <h2>Gallery of Eritrean Cities</h2>
        <div class="gallery-grid">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/asmara.jpg" alt="Asmara - Modernist Architecture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/massawa.jpg" alt="Massawa - Historic Port City">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/keren.jpg" alt="Keren - Scenic Town">
        </div>
    </section>

</main>

<?php get_footer(); ?>
