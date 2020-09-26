<div class="blog_basic_container">
    <div class="blog_section_header">
        <h3>Najnowsze wpisy.</h3>
    </div>
    <div class="blog_section_content">
        
        <div class="blog_content_overlay">
            <?php 
                $args = [
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ];
                $guery = new WP_Query($args);
            ?>
            <?php 
                if( $guery->have_posts() ) : 
                $post = $posts[0]; 
                $nr = 0;
                while( $guery->have_posts() ) : $guery->the_post(); 
            ?>

            <div class="content_box <?php $nr++; 
                    if($nr === 1) {
                        echo 'big_box ';
                        echo 'content_box1 ';
                    };
                    if($nr === 2) {
                        echo 'big_box '; 
                        echo 'content_box2 ';
                        echo 'content_box_bottom ';
                    };
                    if($nr === 3) {
                        echo 'small_box ';
                        echo 'content_box3 ';
                        echo 'content_box_bottom ';
                    };
                    if($nr === 4) {
                        echo 'small_box '; 
                        echo 'content_box4 ';
                        echo 'content_box_bottom ';
                    };
                ?>">
                <?php if($nr === 1) echo '<div class="content_box_1_image_layout">'; ?>
                    <?php if($nr === 1) echo '<div class="box_1_image">'; ?>
                        <?php if($nr === 1) echo '<div class="image_1_overlay">'; ?>
                            <img class="blog_1_thumbnail<?php if($nr !== 1) echo ' blog_thumbnail'; ?>" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php if($nr === 1) echo '</div>'; ?> 
                        
                        <div class="content_box_post_content<?php if($nr === 1) echo ' post_top_content'; if($nr !== 1) echo ' post_bottom_content'; if($nr === 2) echo ' post_bottom_content_rbottom'; ?>">
                        
                            <h2><?php the_title(); ?></h2>
                            <h3 class="<?php if($nr !== 1) echo 'bottom_excerpt'; ?>"><?php the_excerpt(); ?></h3>

                            <?php 
                                if($nr === 1) {
                                    echo '<div class="button_small_black box_article_button button_rtop">
                                            <p>Czytaj więcej</p>
                                        </div>';
                                };
                                if($nr !== 1) {
                                    echo '<div class="button_small_white box_article_button button_bottom">
                                            <p>Czytaj więcej</p>
                                        </div>';
                                };
                            ?>
                        </div>

                    <?php if($nr === 1) echo '</div>'; ?>
                <?php if($nr === 1) echo '</div>'; ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
        
    </div>
    <div class="blog_section_showmore">
        <p><a href="#">Zobacz wszystkie publikacje</a></p>
    </div>
</div>















<!-- <div class="blog_basic_container">
    <div class="blog_section_header">
        <h3>Najnowsze wpisy.</h3>
    </div>
    <div class="blog_section_content">
            
            <div class="content_box big_box content_box1">
                <img class="blog_homepage_photo" src="<?php echo get_template_directory_uri() . '/assets/blog-4.jpg'?>" alt="">
            </div>

            <div class="content_box big_box content_box2">
                <div class="blog_box_article_name article_name article_name_rtop">
                    <h2>Przepracuj sezon zimowy z głową.</h2>
                    <div class="test"><h2></h2></div>
                    
                    <p>Opublikowano w sekcji: XXXX dnia DD/MM/YYYY</p>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum semper ut mi id imperdiet. Curabitur lacus quam, viverra eu volutpat ac, fermentum at risus...</h3>
                </div>
                <div class="button_small_black box_article_button button_rtop">
                    <p>Czytaj więcej</p>
                </div>
            </div>

            <div class="content_box big_box content_box3">
                <img class="blog_homepage_photo" src="<?php echo get_template_directory_uri() . '/assets/blog-1.jpg'?>" alt="">
                <div class="blog_box_article_name article_name article_name_rbottom">
                    
                    <h2>Rolowanie to podstawa regeneracji.</h2>
                    <!-- <h2></h2>
                </div>
                <div class="button_small_white box_article_button button_rbottom">
                    <p>Czytaj więcej</p>
                </div>
            </div>

            <div class="content_box small_box content_box4">
                <img class="blog_homepage_photo" src="<?php echo get_template_directory_uri() . '/assets/blog-2.jpg'?>" alt="">
                <div class="blog_box_article_name article_name">
                    <h2>Pamiętaj o rozciąganiu!</h2>
                    <h2></h2>
                </div>
                <div class="button_small_white box_article_button">
                    <p>Czytaj więcej</p>
                </div>
            </div>

            <div class="content_box small_box content_box5">
                
                <div class="blog_box_article_name article_name">
                    <h2>Moje podsumowanie startów w sezonie.</h2>
                    <h2></h2>
                </div>
                <div class="button_small_white box_article_button">
                    <p>Czytaj więcej</p>
                </div>
            </div>
            
    </div>
    <div class="blog_section_showmore">
        <p><a href="#">Zobacz wszystkie publikacje</a></p>
    </div>
</div> -->