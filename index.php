<?php get_header(); ?>

    <main>
        <div class='container-fluid'>
            <div class='row'>
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                    <div class='col-sm-6 col-md-4 p-4' style='text-align:center;'>
                        <span class='posts-title'>
                            <?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?>
                        <span>
                        <?php the_post_thumbnail('medium'); ?>                     
                    </div>
                <?php endwhile; endif;?> 
            </div>         
        </div>
    </main>

<?php get_footer(); ?>