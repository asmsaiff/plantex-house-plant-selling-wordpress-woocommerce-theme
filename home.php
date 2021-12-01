<?php
    get_header();
?>

    <main class="main">
        <section class="blog section container" id="blogs">
            <div class="page_section">
                <h2 class="text-center">
                    <?php _e('Blog', 'plantex'); ?>
                </h2>
                <p class="text-center">
                    <?php _e('See latest articles about plants', 'plantex'); ?>
                </p>
            </div>
            <div class="blog__container grid <?php post_class(); ?>">
                <?php
                    if(have_posts()) :
                        while(have_posts()) :
                            the_post(  );
                ?>
                <article class="blog__card">
                    <div class="blog__circle"></div>

                    <?php
                        if(has_post_thumbnail()) {
                            the_post_thumbnail( 'large', array('class'=>'blog__img') );
                        }
                    ?>

                    <a href="<?php the_permalink(); ?>">
                        <h3 class="blog__title"><?php the_title(); ?></h3>
                    </a>

                    <a href="<?php the_permalink(); ?>" class="button--flex blog__button">
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </article>
                <?php
                        endwhile;
                    endif;
                ?>
            </div>
            <div class="pagination text-center">
                <?php the_posts_pagination( array(
                    'screen_reader_text'            =>  ' ',
                    'prev_text'                     =>  '<i class="ri-arrow-left-s-fill"></i>',
                    'next_text'                     =>  '<i class="ri-arrow-right-s-fill"></i>',
                ) ); ?>
            </div>
        </section>
    </main>

<?php
    get_footer();