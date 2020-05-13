<!DOCTYPE html>
<html>

    <head>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >

        <?php wp_body_open(); ?>

        <header>
            <div class="d-flex justify-content-between">

            <p>
                <span>
                    <?php
                        if ( is_home() ) {
                            bloginfo('name');
                        }
                    ?>
                </span>
                <span>
                    <?php
                        if ( !is_home() ) {
                            the_title();
                        }
                    ?>
                </span>
                <br>
                <?php
                    if ( is_home() ) {
                        bloginfo('description');
                    }
                ?>
            </p>

            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu',
                    )
                ); 
            ?>
                  
            </div>
        </header>