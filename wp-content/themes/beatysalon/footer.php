<section class="footer" id="contacts">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__descr offset-xl-0 offset-sm-3 offset-md-2">
                    <a href="<?php echo get_home_url(); ?>" class="footer__descr-icon">
                        <img src="<?php 
                            // получаем ссылку на логотип
                            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                            // выводим
                            echo $custom_logo__url[0]; 
                        ?>" alt="Красота & Стиль">
                    </a alt="Красота & Стиль">
                    <div class="footer__descr-text">
                        Основное направление работы – косметология. 
                        Мы проводим уникальные процедуры для лица и тела с использованием средств и аппаратов французского бренда 
                        и комплексы для омоложения, поддержания здоровья кожи.
                    </div>
                </div>
                <div class="footer__contact offset-xl-3 offset-lg-3 offset-md-2 offset-sm-3">
                    <div class="footer__contact-title">
                        Контакты
                    </div>
                    <address class="footer__contact-address">
                    <?php the_field('address', 2); ?>
                    </address>
                    <a href="http://beatysalon/wp-login.php" class="footer__contact-admin">
                        Администраторам
                    </a>
                    <div class="footer__contact-phone">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/phone.png" alt="phone">
                        <a href="<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a>
                    </div>
                    <div class="footer__contact-whatsapp">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/whatsapp.png" alt="whatsapp">
                        <a href="tel:<?php the_field('whatsapp', 2); ?>"><?php the_field('whatsapp', 2); ?></a>
                    </div>
                </div>            
            </div>
        </div>
    </section>
    <footer class="confidence">
        <div class="container">
            <div class="confidence__copyright">
                © Copyright 2022 Салон красоты Красота & Стиль в г. Барнаул, ул.Партизанская, д.105а 
            </div>
        </div>
    </footer>
    <?php
        wp_footer();
    ?>
</body>
</html>