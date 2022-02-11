<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="about">

    <h1><?php the_title();?></h1>

    <?php the_excerpt();?>

    <a href="<?php the_permalink();?>">Read more..</a>

</div>

<?php endwhile; else: endif;?>