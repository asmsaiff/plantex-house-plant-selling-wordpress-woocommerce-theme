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
                Check out our <br> products
            </h2>

            <p class="product__description">
                Here are some selected plants from our showroom, all are in excellent 
                shape and has a long life span. Buy and enjoy best quality.
            </p>

            <div class="product__container grid">
                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product1.png" alt="" class="product__img">

                    <h3 class="product__title">Cacti Plant</h3>
                    <span class="product__price">$19.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product2.png" alt="" class="product__img">

                    <h3 class="product__title">Cactus Plant</h3>
                    <span class="product__price">$11.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product3.png" alt="" class="product__img">

                    <h3 class="product__title">Aloe Vera Plant</h3>
                    <span class="product__price">$7.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product4.png" alt="" class="product__img">

                    <h3 class="product__title">Succulent Plant</h3>
                    <span class="product__price">$5.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product5.png" alt="" class="product__img">

                    <h3 class="product__title">Succulent Plant</h3>
                    <span class="product__price">$10.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/product6.png" alt="" class="product__img">

                    <h3 class="product__title">Green Plant</h3>
                    <span class="product__price">$8.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>
            </div>
        </section>

        <!--==================== QUESTIONS ====================-->
        <section class="questions section" id="faqs">
            <h2 class="section__title-center questions__title container">
                Some common questions <br> were often asked
            </h2>

            <div class="questions__container container grid">
                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                My flowers are falling off or dying?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your 
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes leaves to become pale?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your 
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes brown crispy leaves?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your 
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do i choose a plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your 
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do I change the pots?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your 
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Why are gnats flying around my plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your 
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section container" id="contact">                
            <div class="contact__container grid">
                <div class="contact__box">
                    <h2 class="section__title">
                        Reach out to us today <br> via any of the given <br> information
                    </h2>

                    <div class="contact__data">
                        <div class="contact__information">
                            <h3 class="contact__subtitle">Call us for instant support</h3>
                            <span class="contact__description">
                                <i class="ri-phone-line contact__icon"></i>
                                +999 888 777
                            </span>
                        </div>

                        <div class="contact__information">
                            <h3 class="contact__subtitle">Write us by mail</h3>
                            <span class="contact__description">
                                <i class="ri-mail-line contact__icon"></i>
                                user@email.com
                            </span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact__form">
                    <div class="contact__inputs">
                        <div class="contact__content">
                            <input type="email" placeholder=" " class="contact__input">
                            <label for="" class="contact__label">Email</label>
                        </div>

                        <div class="contact__content">
                            <input type="text" placeholder=" " class="contact__input">
                            <label for="" class="contact__label">Subject</label>
                        </div>

                        <div class="contact__content contact__area">
                            <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                            <label for="" class="contact__label">Message</label>
                        </div>
                    </div>

                    <button class="button button--flex">
                        Send Message
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </form>
            </div>
        </section>
    </main>

<?php
    get_footer();