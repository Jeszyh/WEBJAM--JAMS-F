<?php get_header(); ?>

    <section class="hero_accueil">
        <div class="wrapper">
            <?php the_post_thumbnail(); ?>
            <h1 data-scrolly="fromLeft"><?php the_title(); ?></h1>
            <p data-scrolly="fromLeft"><?php the_excerpt(); ?></p>
            <div data-scrolly="fromBottom" class="btn">
                <a href="tpl-modeles.html">Acheter</a>
            </div>
        </div>
    </section>

    <section class="description">
        <div class="wrapper">
            <h2 data-scrolly="fromLeft">Hydrobouffe, c'est quoi?</h2>
            <p data-scrolly="fromRight"><?php the_content(); ?></p>
        </div>
    </section>

    <section class="partenaires">
        <div class="wrapper">
            <h2 data-scrolly="fromLeft">Nos partenaires</h2>

            <?php 
            $arg = array(
                'post_type' => 'Partenaires',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($arg);
            ?>


            <div class="cards">
                <?php if ($query->have_posts()) :?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="card" data-scrolly="fromLeft">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>    
        </div>
    </section>

    <section class="modeles">
        <div class="wrapper">
            <h2 data-scrolly="fromLeft">Nos modèles</h2>
            
            <?php 
                $arg = array(
                    'post_type' => 'Models',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                );
                $query = new WP_Query($arg);
                ?>
                <div class="modele" data-scrolly="fromRight">
                <?php if ($query->have_posts()) :?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        
                            <a href="<?php the_permalink(); ?>" >
                                <div class="modele_content">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="modele__text">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_content(); ?></p>
                                        <div class="btn">Voir plus</div>
                                    </div>
                                </div>
                            </a>
                       
                    <?php endwhile; ?>
                <?php endif; ?>
             
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="button_modeles">

            <?php 
                $link = get_field('pw_models_link');
                if ( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" data-scrolly="fromRight" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section class="equipe">
        <div class="wrapper">
            <h2 data-scrolly="fromLeft">Notre équipe</h2>

            <?php 
                $arg = array(
                    'post_type' => 'Equipiers',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                );
                $query = new WP_Query($arg);
                ?>

                
            <div class="card__container">
                <?php if ($query->have_posts()) :?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="card" data-scrolly="fromRight">
                            <?php the_post_thumbnail(); ?>
                            <div class="card__content">
                                <h3><?php the_title(); ?></h3>
                                <?php if (have_rows('pw_description') ): ?>
                                        <?php while(have_rows('pw_description')) : the_row(); ?> 
                                            <?php $titre = the_sub_field('titre'); if( !empty($titre) ): ?>
                                                    <p><?php echo esc_the_content($titre); ?></p>
                                            <?php endif ?>
                                    <?php endwhile ?>
                                <?php endif ?>
                            </div> 
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="button__equipe">
            <?php 
                $link = get_field('pw_team_link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
    
