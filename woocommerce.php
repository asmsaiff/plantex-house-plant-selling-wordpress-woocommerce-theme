<?php
    get_header();

    the_post(  );
?>

    <main class="main">
        <section class="blog section container" id="blogs">
            <div class="page_section">
                <h2 class="text-center">
                    <?php woocommerce_page_title(); ?>
                </h2>
            </div>
            <div class="single__container">
                <div class="content">
                    <?php
                        woocommerce_content();
                    ?>
                </div>
            </div>
        </section>
    </main>

<?php
    get_footer();