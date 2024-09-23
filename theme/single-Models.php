<?php get_header(); ?>

<section class="hero_single-modele">
    <?php the_post_thumbnail(); ?>
    <div class="content wrapper">
        <h1 data-scrolly="fromLeft"><?php the_title(); ?></h1>
        <p data-scrolly="fromLeft"><?php the_excerpt(); ?></p>

        <?php if (get_field('pw_prix')) : ?>
            <p><?php the_field('pw_prix'); ?></p>
        <?php endif; ?>
        
        <div class="btn" data-scrolly="fromBottom">
            <a href="single-modele.html">Acheter</a>
        </div>
    </div>
</section>
<section class="descriptions wrapper">
    <div class="description">
        <h2 data-scrolly="fromLeft">Description</h2>
        <p data-scrolly="fromRight"><?php the_content(); ?></p>
    </div>
    
    <?php if (have_rows('pw_caracteristiques') ): ?>
        <?php while(have_rows('pw_caracteristiques')) : the_row(); ?>        
            <div class="caracteristiques">
                <h2 data-scrolly="fromLeft">Les Caractéristiques</h2>
                
                <ul>
                    <li><?php the_sub_field('caracteristiques'); ?></li>
                </ul>
            </div>
        <?php endwhile ?>
    <?php endif; ?>

    <?php if (have_rows('pw_fonctionalites') ): ?>
        <?php while(have_rows('pw_fonctionalites')) : the_row(); ?>
            <div class="fonctionalites">
                <h2 data-scrolly="fromLeft">Les Fonctionnalités</h2>
                <ul>
                    <li><?php the_sub_field('fonctionalites'); ?></li>
                </ul>
            </div>
        <?php endwhile ?>
    <?php endif; ?>

</section>

<section class="specificite">
    <div class="wrapper">
        <h2 data-scrolly="fromLeft">Les spécifications de ce produit</h2>

        <div class="cards">
            <?php if (have_rows('pw_specification') ): ?>
                <?php while(have_rows('pw_specification')) : the_row(); ?> 
                    <?php if (have_rows('dimension') ): ?>
                        <?php while(have_rows('dimension')) : the_row(); ?>
                            <div class="card">
                                <h3 data-scrolly="fromLeft">Dimension:</h3>
                                <ul>
                                    <li><?php the_sub_field('largeur'); ?></li>
                                    <li><?php the_sub_field('profondeur'); ?></li>
                                    <li><?php the_sub_field('hauteur'); ?></li>
                                    <li><?php the_sub_field('poids'); ?></li>
                                </ul>
                            </div>
                        <?php endwhile ?>
                    <?php endif; ?>    

                    <?php if (have_rows('puissance') ): ?>
                        <?php while(have_rows('puissance')) : the_row(); ?>        
                            <div class="card">
                                <h3 data-scrolly="fromTop">Puissance:</h3>
                                <ul>
                                    <li><?php the_sub_field('tension'); ?></li>
                                    <li><?php the_sub_field('frequence'); ?></li>
                                </ul>
                            </div>
                        <?php endwhile ?>
                    <?php endif; ?>

                    <?php if (have_rows('minuterie') ): ?>
                        <?php while(have_rows('minuterie')) : the_row(); ?>
                            <div class="card">
                                <h3 data-scrolly="fromRight">Minuterie:</h3>
                                <ul>
                                    <li><?php the_sub_field('temps'); ?></li>
                                    <li><?php the_sub_field('arret_automatique_'); ?></li>      
                                </ul>
                            </div>
                        <?php endwhile ?>
                    <?php endif; ?>
                                        
                    <?php if (get_field('pw_materiaux')) : ?>
                        <div class="card">
                            <h3 data-scrolly="fromLeft">Matériaux:</h3>
                            <ul>
                                <li><?php the_field('pw_materiaux'); ?></li>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('pw_polyvalence')) : ?>
                        <div class="card">
                            <h3 data-scrolly="fromBottom">Polyvalence:</h3>
                            <ul>
                                <li>
                                    <?php the_field('pw_polyvalence'); ?>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>

                <?php endwhile ?>
            <?php endif ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>