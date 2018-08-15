<?php do_action("philosphy_category_page",single_cat_title('',false)); ?>
<?php get_header(); ?>

    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <?php echo apply_filters("philosophy_text","hello Wordlf","oiii","yyy"); ?>
                <?php do_action("philosphy_before_category_title"); ?>

                <h2><?php _e("New Transelation Text"); ?></h2>

                <h1>Category: <?php single_cat_title(); ?></h1>

                <?php do_action("philosphy_after_category_title"); ?>


                <?php do_action("philosphy_before_category_description"); ?>
                <p class="lead"><?php echo category_description(); ?></p>
                <?php do_action("philosphy_after_category_description"); ?>

            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <?php if(!have_posts() ) :?>
                    <h2>Sorry No Post at this category</h2>
                <?php endif; ?>

                <?php
                while( have_posts() ){
                    the_post();
                    get_template_part("template-parts/post-formats/post",get_post_format());
                }
                ?>

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->


        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <?php philosophy_pagination(); ?>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->


<?php get_footer(); ?>