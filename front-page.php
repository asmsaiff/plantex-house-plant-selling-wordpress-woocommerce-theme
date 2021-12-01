<?php
    get_header();
?>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="<?php echo plantex_get_option('hero_featured_image')['url']; ?>" alt="" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">
                        <?php echo plantex_get_option('hero_title'); ?>
                    </h1>
                    <p class="home__description">
                        <?php echo plantex_get_option('hero_description'); ?>
                    </p>
                    <?php if(plantex_get_option('is_show_hero_button')) : ?>
                    <a href="<?php echo plantex_get_option('button_link'); ?>" class="button button--flex">
                        <?php echo plantex_get_option('hero_button_label'); ?> <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                    <?php endif; ?>
                </div>

                <div class="home__social">
                    <span class="home__social-follow">
                        <?php echo plantex_get_option('social_media_follow_title'); ?>
                    </span>

                    <div class="home__social-links">
                        <?php if(plantex_get_option('plantex_facebook')) : ?>
                        <a href="<?php echo plantex_get_option('plantex_facebook'); ?>" target="_blank" class="home__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <?php
                            endif;

                            if(plantex_get_option('plantex_instagram')) :
                        ?>
                        <a href="<?php echo plantex_get_option('plantex_instagram'); ?>" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <?php
                            endif;

                            if(plantex_get_option('plantex_twitter')) :
                        ?>
                        <a href="<?php echo plantex_get_option('plantex_twitter'); ?>" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <?php
                            endif;

                            if(plantex_get_option('plantex_linkedin')) :
                        ?>
                        <a href="<?php echo plantex_get_option('plantex_linkedin'); ?>" target="_blank" class="home__social-link">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                        <?php
                            endif;

                            if(plantex_get_option('plantex_whatsapp')) :
                        ?>
                        <a href="<?php echo plantex_get_option('plantex_whatsapp'); ?>" target="_blank" class="home__social-link">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section container" id="about">
            <div class="about__container grid">
                <img src="<?php echo plantex_get_option('about_section_featured_image')['url']; ?>" alt="" class="about__img">

                <div class="about__data">
                    <h2 class="section__title about__title">
                        <?php echo plantex_get_option('about_section_title'); ?>
                    </h2>

                    <p class="about__description">
                        <?php echo plantex_get_option('about_section_description'); ?>
                    </p>

                    <div class="about__details">
                        <?php
                            $about_section_details_lists = plantex_get_option('about_section_details_lists');
                            for($i = 0; $i < count($about_section_details_lists); $i++) {
                        ?>
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            <?php echo $about_section_details_lists[$i]['about_details_list_item']; ?>
                        </p>
                        <?php
                            }
                        ?>
                    </div>

                    <?php
                        if(plantex_get_option('is_show_about_section_button')) :
                    ?>
                    <a href="<?php echo plantex_get_option('about_section_button_link'); ?>" class="button--link button--flex">
                        <?php echo plantex_get_option('about_section_button_label'); ?>
                        <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!--==================== STEPS ====================-->
        <section class="steps section container">
            <div class="steps__bg">
                <h2 class="section__title-center steps__title">
                    <?php echo plantex_get_option('step_section_title'); ?>
                </h2>

                <div class="steps__container grid">
                    <?php
                        $steps = plantex_get_option('step_section');

                        for($i = 0; $i < count($steps); $i++) :
                    ?>
                    <div class="steps__card">
                        <div class="steps__card-number"><?php echo '0' . $i + 1; ?></div>
                        <h3 class="steps__card-title">
                            <?php echo $steps[$i]['step_item_title']; ?>
                        </h3>
                        <p class="steps__card-description">
                            <?php echo $steps[$i]['step_item_description']; ?>
                        </p>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!--==================== PRODUCTS ====================-->
        <section class="product section container" id="products">
            <h2 class="section__title-center">
                <?php echo plantex_get_option('product_section_title'); ?>
            </h2>

            <p class="product__description">
                <?php echo plantex_get_option('product_section_description'); ?>
            </p>

            <?php echo do_shortcode(plantex_get_option('product_section_shortcode')); ?>
        </section>

        <!--==================== QUESTIONS ====================-->
        <section class="questions section" id="faqs">
            <h2 class="section__title-center questions__title container">
                <?php echo plantex_get_option('faq_section_title'); ?>
            </h2>
            <?php
                $faqs = plantex_get_option('faqs');

                if($faqs) :
            ?>
            <div class="questions__container container grid">
                <div class="questions__group">
                    <?php for($i = 0; $i < count($faqs); $i++) : ?>
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                <?php echo $faqs[$i]['faq_item_title']; ?>
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                <?php echo $faqs[$i]['faq_item_description']; ?>
                            </p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <?php endif; ?>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section container" id="contact">                
            <div class="contact__container grid">
                <div class="contact__box">
                    <h2 class="section__title">
                        <?php echo plantex_get_option('contact_section_title'); ?>
                    </h2>

                    <div class="contact__data">
                        <div class="contact__information">
                            <h3 class="contact__subtitle">
                                <?php echo plantex_get_option('call_area_title'); ?>
                            </h3>
                            <span class="contact__description">
                                <i class="ri-phone-line contact__icon"></i>
                                <?php echo plantex_get_option('phone_number'); ?>
                            </span>
                        </div>

                        <div class="contact__information">
                            <h3 class="contact__subtitle">
                                <?php echo plantex_get_option('email_area_title'); ?>
                            </h3>
                            <span class="contact__description">
                                <i class="ri-mail-line contact__icon"></i>
                                <?php echo plantex_get_option('email_address'); ?>
                            </span>
                        </div>
                    </div>
                </div>

                <?php
                    $plantex_form = plantex_get_option('cf7_shortcode');
                    echo do_shortcode($plantex_form);
                ?>
            </div>
        </section>
    </main>

<?php
    get_footer();