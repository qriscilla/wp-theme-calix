<?php get_header(); ?>

<main>
    <div class='container-fluid' style='margin-top:50px;'>
        <div class='row justify-content-center'>
            <div class='col-sm-11'>
                <?php the_post(); ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
