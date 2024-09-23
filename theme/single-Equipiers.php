<?php get_header(); ?>
<section class="video-presentation">
    <div class="wrapper">
        <h2><?php the_title(); ?></h2>

        <?php if (get_field('pw_id')) : ?>
        <div class="video wrapper">
            <div class="youtube" data-component="Youtube" data-video-id="<?php the_field('pw_id'); ?>" data-controls="">
                <div class="youtube__media js-video">
                <?php $image = get_field('pw_image'); ?>
            <?php  if( !empty($image) ): ?>
            <img class="js-poster" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif ?>
        </div>
                    
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<section class="bio">
    <div class="wrapper">
        <div class="media">
            <?php $image = get_field('pw_image'); ?>
            <?php  if( !empty($image) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif ?>
        </div>
        <div class="content">
            <div class="wrapper-card">
                <h3>Description</h3>
                <ul>
                    <?php if (have_rows('pw_description') ): ?>
                        <?php while(have_rows('pw_description')) : the_row(); ?>
                            <li>
                                <?php if (get_sub_field('titre')) : ?>
                                    <h4>Poste</h4>
                                    <p><?php the_sub_field('titre'); ?></p>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if (get_sub_field('anciennete')) : ?>
                                    <h4>Anciennete</h4>
                                    <p><?php the_sub_field('anciennete'); ?></p>
                                <?php endif; ?>
                            </li>
                            <?php if (get_sub_field('autre')) : ?>
                                <li>
                               
                                    <h4>Autre</h4>
                                    <p><?php the_sub_field('autre'); ?></p>
                                
                                </li>
                            <?php endif; ?>
                        <?php endwhile ?>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>