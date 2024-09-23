<?php /*Template Name: tpl-Modeles */ get_header(); ?>
    <section class="hero_accueil">
        <div class="wrapper">
            <?php the_post_thumbnail(); ?>
            <div class="content">
                <h1 data-scrolly='fromLeft'><?php the_title(); ?></h1>
                <p data-scrolly='fromLeft'><?php the_excerpt(); ?></p>
                <div class="btn" data-scrolly="fromBottom">
                    <a href="<?php the_permalink(); ?>">Acheter</a>
                </div>

        </div>
    </section>

    <section class="autre_modeles">
        <div class="wrapper">
            <h2  data-scrolly='fromLeft'>Autres Modèles</h2>

            <?php 
            $arg = array(
                'post_type' => 'Models',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($arg);
            ?>


            <div class="cards">
                <?php if ($query->have_posts()) :?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                    <div class="card" data-scrolly='fromBottom'>
                        <?php the_post_thumbnail(); ?>
                                <div class="content">
                                    <div class="wrapper-card">
                                        <h3 data-scrolly='fromBottom'><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                        <div class="btn" data-scrolly='fromBottom'>
                                            Voir plus
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                            <?php endwhile; ?>
                    <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>