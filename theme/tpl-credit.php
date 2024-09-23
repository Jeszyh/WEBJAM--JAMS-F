<?php /*Template Name: tpl-credit */ get_header(); ?>

<div class="credit">
    <div class="wrapper">
        <h2 data-scrolly="fromLeft"><?php the_title(); ?></h2>
        
          

            <?php 
                $arg = array(
                    'post_type' => 'Equipiers',
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
                );
                $query = new WP_Query($arg);
                ?>
           
            <?php if ($query->have_posts()) :?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <div class="equipier"> 
                      <h3 data-scrolly="fromLeft"><?php the_title(); ?></h3>
            <ul>
            <?php $categories = array();?>
               <?php foreach(get_the_category() as $category): ?>
                <?php array_push($categories, $category->name); ?>
                <?php endforeach; ?>
                    <?php  if ($categories) : ?>
                        <li data-scrolly="fromLeft"><p><?php echo implode (',  ', $categories); ?></p></li>
                    <?php endif; ?>
                    </ul>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            
    </div>
</div>
<?php get_footer(); ?>