<!--==================== FOOTER ====================-->
<footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="<?php echo esc_url(home_url()); ?>" class="footer__logo">
                    <i class="ri-leaf-line footer__logo-icon"></i> 
                    <?php bloginfo( 'title-tag' ); ?>
                </a>

                <p class="footer_desc">
                    <?php echo plantex_get_option('footer_description'); ?>
                </p>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    <?php echo plantex_get_option('address_area_title'); ?>
                </h3>

                <?php echo plantex_get_option('address'); ?>
            </div>

            <div class="footer__content">
                <h3 class="footer__title"><?php echo plantex_get_option('contact_area_title'); ?></h3>

                <ul class="footer__data">
                    <li class="footer__information">
                        <?php echo plantex_get_option('contact_phone_number'); ?>
                    </li>
                    
                    <div class="footer__social">
                        <?php if(plantex_get_option('plantex_facebook')) : ?>
                        <a href="<?php echo plantex_get_option('plantex_facebook'); ?>" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <?php
                            endif;

                            if(plantex_get_option('plantex_instagram')) :
                        ?>
                        <a href="<?php echo plantex_get_option('plantex_instagram'); ?>" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <?php
                            endif;

                            if(plantex_get_option('plantex_twitter')) :
                        ?>
                        <a href="<?php echo plantex_get_option('plantex_twitter'); ?>" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <?php
                            endif;

                            if(plantex_get_option('plantex_linkedin')) :
                        ?>
                        <a href="<?php echo plantex_get_option('plantex_linkedin'); ?>" target="_blank" class="footer__social-link">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                        <?php
                            endif;

                            if(plantex_get_option('plantex_whatsapp')) :
                        ?>
                        <a href="<?php echo plantex_get_option('plantex_whatsapp'); ?>" target="_blank" class="footer__social-link">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    <?php echo plantex_get_option('credit_card_area_title'); ?>
                </h3>

                <div class="footer__cards">
                    <?php
                        $card_thumbs = plantex_get_option('card_thumbs');

                        for($i = 0; $i < count($card_thumbs); $i++) :
                    ?>
                    <img src="<?php print_r( $card_thumbs[$i]['thumb_img']['url']); ?>" alt="" class="footer__card">
                    <?php
                        endfor;
                    ?>
                </div>
            </div>
        </div>

        <p class="footer__copy">
            <?php echo plantex_get_option('footer_credit'); ?>
        </p>
    </footer>
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <?php wp_footer(); ?>
</body>
</html>