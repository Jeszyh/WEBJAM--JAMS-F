<?php /*Template Name: tpl-Equipiers */ get_header(); ?>

<section class="notre-equipe">
    <div class="wrapper">
        <h2>Notre équipe</h2>
        <div class="content">
            <div class="video">
                <div class="youtube" data-component="Youtube" data-youtube-id="m6Tcf5PGqy8" data-controls="">
                    <div class="youtube__media js-youtube">
                        <img class="js-poster" src="assets/images/imageModele1.png" alt="music" />
                        <svg class="icon icon--xl">
                            <use xlink:href="#icon-play"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <p class="description"><p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="membres">
    <div class="wrapper">
        <h3><?php the_title(); ?></p>
</h3>

        <div class="carousel swiper" data-component="Carousel" data-variant="split">
            <div class="swiper-wrapper">
                <?php 
                $arg = array(
                    'post_type' => 'Equipiers',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($arg);
                ?>


                <?php if ($query->have_posts()) :?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="swiper-slide">
                            <?php if (have_rows('pw_description') ): ?>
                                <?php while(have_rows('pw_description')) : the_row(); ?> 
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="wrapper">
                                            <div class="media">
                                                <?php $image = get_field('pw_image'); ?>
                                                <?php  if( !empty($image) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif ?>
                                            </div>
                                            <div class="content wrapper-card">
                                                <h4><?php the_title(); ?></h4>
                                                <?php 
                                                    $titre = the_sub_field('titre');
                                                if( !empty($titre) ): ?>
                                                            <p><?php echo esc_the_content($titre); ?></p>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </a>
                                <?php endwhile ?>
                            <?php endif ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>         
            </div>
                <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>