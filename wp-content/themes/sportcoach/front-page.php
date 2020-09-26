<?php get_header(); ?>

    <!-- Including Home Page content templates -->
        <!-- Main Top Section -->
        <?php get_template_part('/includes/section', 'maintop');?>
        <main>
            <!-- Blog Section -->
            <?php get_template_part('/includes/section', 'blog');?>
            <!-- Oferta trenerska Section -->
            <?php get_template_part('/includes/section', 'oferta');?>
            <!-- O mnie Section -->
            <?php get_template_part('/includes/section', 'partnerzy');?>
            <!-- Rekomendacje Section -->
            <?php get_template_part('/includes/section', 'rekomendacje');?>
        </main>
        <!-- Kontakt Section -->
        <?php get_template_part('/includes/section', 'kontakt');?>

<?php get_footer(); ?>