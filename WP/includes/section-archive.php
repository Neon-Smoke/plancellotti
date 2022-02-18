<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="about">

    <h2><?php the_title();?></h2>

    <?php the_excerpt();?>


    <a href="<?php the_permalink();?>" class="blog-btn">Read more..</a>


</div>

<?php endwhile; else: endif;?>