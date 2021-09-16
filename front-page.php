<?php get_header();?>

<div class="container pt-5 pb-5">

    <!-- <h1><?php the_title();?></h1> -->

    <?php if (have_posts()): while (have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>


</div>



<div class="typewriter center">
    <h1 style=font-size:100px><?php the_title();?></h1>
</div>

<?php get_footer();?>
