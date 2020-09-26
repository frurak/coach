<!-- <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; else: endif; ?> -->

<div class="maintop_basic_container">
    
    <div class="cont_topbar_content">
        <div class="cont_tobar_logo">
            <div class="logo">
                <p>Piotr Strzelecki</p>
                <p>RUNNING TRAINING SYSTEM</p>
            </div>
            <div class="mobile_burger">
                <span class="toggle_circle circle1"></span>
                <!-- <span class="toggle_circle circle2"></span>
                <span class="toggle_circle circle3"></span> -->
            </div>
        </div>
        <nav class="cont_topbar_nav">
            <?php wp_nav_menu(
                array (
                    'theme_location' => 'main-menu',
                    'menu_class' => 'cont_topbar_nav_menu',
                    'container' => false,
                )
            );?>
        </nav>
    </div>

    <div class="cont_topbar"></div>

    <div class="cont_header_text">
        <div class="cont_header_text_content">
            <h3 class="cont_header_header">Trenuj profesjonalnie.</h3>
            <p class="cont_header_subcont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula pellentesque tempus. Proin ac vulputate nibh.</p>
            <?php get_template_part('/includes/section', 'buttonlarge');?>
        </div>
    </div>

    <div class="cont_baner_image">
        <div class="cont_baner_image_wraper">
            <img src="<?php echo get_template_directory_uri() . '/assets/Main-photo-prod-version.jpg'?>" alt="Piotr Strzelecki Trener biegania Warszawa">
            <img src="<?php echo get_template_directory_uri() . '/assets/Main-photo-3-prod-version.jpg'?>" alt="Piotr Strzelecki Trener biegania Warszawa">
            <img src="<?php echo get_template_directory_uri() . '/assets/Main-photo-2-prod-version.jpg'?>" alt="Piotr Strzelecki Trener biegania Warszawa">
        </div>
    </div>

    <div class="baner_image_nav">
        <div class="nav_circle c1"></div>
        <div class="nav_circle c2"></div>
        <div class="nav_circle c3"></div>
    </div>
</div>