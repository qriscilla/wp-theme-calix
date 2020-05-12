<?php get_header(); ?>

    <div class='container-fluid posts'>
        <div class='row'>
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
                <div class='col-sm-6 col-md-4 p-4' style='text-align:center;'>
                    <span class='posts-title'><?php the_title(); ?><span>
                    <?php the_post_thumbnail('medium'); ?>                     
                </div>
            <?php endwhile; endif;?> 
        </div>         
    </div>

<?php get_footer(); ?>