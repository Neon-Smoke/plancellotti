<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <?php the_content();?>
<br>
    By: <?php the_author();?>
    <br>
    <br>

    <a href="https://peterlancellotti.com/category/blog/" class="blog-btn">Back to Blogs</a>

    <br>
    <br>


    <?php comments_template();?>


<?php endwhile; else: endif;?>
