<?php
    get_header();
?>

    <main class="main">
        <section class="blog section container" id="blogs">
            <div class="page_section">
                <h2 class="text-center">
                    <?php the_title(); ?>
                </h2>
            </div>
            <div class="single__container">
                <?php
                    if(have_posts()) :
                        while(have_posts()) :
                            the_post(  );
                ?>
                <div class="content">
                    <?php
                        woocommerce_content();
                    ?>
                </div>
                <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </section>
    </main>

<?php
    get_footer();