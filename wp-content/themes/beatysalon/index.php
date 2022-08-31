<?php get_header(); ?>
    <section class="navigation">
        <div class="container">
            <a href="<?php echo get_home_url(); ?>" class="navigation__logo">
                <?php
                    $header_logo = get_theme_mod('header_logo');
                    $img = wp_get_attachment_image_src($header_logo, 'full');
                    if ($img) :
                        ?>
                        <img src="<?php echo $img[0]; ?>" class ="logo-icon" alt="header-logo">
                    <?php endif; ?>
            </a>
            <a href="#main" class="navigation__home">Главная</a>
            <a href="#services" class="navigation__about">Компетенция</a>
            <a href="#addition" class="navigation__professionals">Услуги</a>
            <a href="#contacts" class="navigation__contact">Контакты</a>
        </div>
    </section>
    <section class="promo" id="main">
        <div class="container">
            <div class="promo__img">
                <!-- <img src="<?php the_field('promo_img'); ?>" alt="promo-img"> -->
                <?php
                    $image = get_field('promo_img');

                    if (!empty($image)): ?>
                        <img 
                        src="<?php echo $image['url']; ?>"
                        alt="<?php echo $image['alt']; ?>"?>
                <?php endif; ?>
            </div>
            <div class="promo__bubbles">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/navigate/bubbles.png" alt="promo-bubbles">
            </div>
            <div class="promo__information">
                <div class="promo__information__title">
                    <h1><?php the_field('promo_title'); ?></h1>
                </div>
                <div class="promo__information__subtitle">
                    <h2>
                    <?php the_field('promo_subtitle'); ?>
                    </h2>
                </div>
                <button class="promo__information__btn">
                    <a href="#feedbackForm">Записаться</a>
                </button>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <div class="services__descr">
                <h3 class="services__title"><?php the_field('services_title', 2); ?></h3>
                <div class="services__subtitle">
                    <?php the_field('services_subtitle', 2); ?>
                </div>
            </div>
            <div class="services__items">
                <div class="services__item">
                    <div class="skills__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/promo/salon.svg" alt="salon">
                    </div>
                    <div class="services__item-title">
                        <?php the_field('services_item1', 2); ?>
                        <div class="services__item-subtitle">
                            <?php the_field('services_item1-subtitle', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="services__item">
                    <div class="skills__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/promo/hair-cutting.svg" alt="hair-cutting">
                    </div>
                    <div class="services__item-title">
                        <?php the_field('services_item2', 2); ?>
                        <div class="services__item-subtitle">
                            <?php the_field('services_item2-subtitle', 2); ?>
                        </div>
                    </div> 
                </div>
                <div class="services__item">
                    <div class="skills__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/promo/toiletries.svg" alt="toiletries">
                    </div>
                    <div class="services__item-title">
                        <?php the_field('services_item3', 2); ?>
                        <div class="services__item-subtitle">
                            <?php the_field('services_item3-subtitle', 2); ?>
                        </div>
                    </div>
                </div>
                <div class="services__item">
                    <div class="skills__item-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/promo/shampoo.svg" alt="shampoo">
                    </div>
                    <div class="services__item-title">
                        <?php the_field('services_item4', 2); ?>
                        <div class="services__item-subtitle">
                            <?php the_field('services_item4-subtitle', 2); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services__hairdresser">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/promo/hairdresser.png" alt="hair-brushing">
            </div>
            <div class="services__brushing">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/promo/haibrush.png" alt="hairbrush">
            </div>
            <div class="services__addition offset-xl-0 offset-sm-0" id="addition">
                <div class="services__addition-title offset-xl-6 offset-lg-4 offset-md-5 offset-sm-2 offset-col-0">
                    Услуги
                </div>
                <div class="services__addition__items offset-xl-2 offset-lg-2 offset-md-0 offset-sm-2">
                    <div class="services__addition__items__item">
                        <div class="services__addition__items__item-title">
                            Lorem ipsum
                        </div>
                        <div class="services__addition__items__item-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                        <div class="services__addition__items__item-price">
                            350 RUB
                        </div>
                        <!-- <div class="services__addition__items__item-btn">
                            <div class="services__addition__items__item-btn__text">
                                Оставить заявку
                            </div>
                        </div> -->
                    </div>
                    <div class="services__addition__items__item">
                        <div class="services__addition__items__item-title">
                            Lorem ipsum
                        </div>
                        <div class="services__addition__items__item-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                        <div class="services__addition__items__item-price">
                            350 RUB
                        </div>
                    </div>
                    <div class="services__addition__items__item">
                        <div class="services__addition__items__item-title">
                            Lorem ipsum
                        </div>
                        <div class="services__addition__items__item-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                        <div class="services__addition__items__item-price">
                            350 RUB
                        </div>
                    </div>
                    <div class="services__addition__items__item">
                        <div class="services__addition__items__item-title">
                            Lorem ipsum
                        </div>
                        <div class="services__addition__items__item-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                        <div class="services__addition__items__item-price">
                            350 RUB
                        </div>
                    </div>
                    <div class="services__addition__items__item">
                        <div class="services__addition__items__item-title">
                            Lorem ipsum
                        </div>
                        <div class="services__addition__items__item-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                        <div class="services__addition__items__item-price">
                            350 RUB
                        </div>
                    </div>
                    <div class="services__addition__items__item">
                        <div class="services__addition__items__item-title">
                            Lorem ipsum
                        </div>
                        <div class="services__addition__items__item-subtitle">
                            Lorem ipsum dolor sit amet
                        </div>
                        <div class="services__addition__items__item-price">
                            350 RUB
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container">
            <div class="newsletter__title">
                Новости
            </div>
            <div class="newsletter__subtitle">
                Подпишитесь на новости нашего Салона Красоты и следите за акциями, новостями, конкурсами 
            </div>
            <div class="newsletter__wrapper">
                <div class="newsletter__input">
                    <input placeholder="Введите свой e-mail" type="text">
                </div>
                <button class="newsletter__btn">
                    <div class="newsletter__btn-text">
                        Подписаться
                    </div>
                </button>
                <div class="newsletter__line">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/newsletter/line.png" alt="line">
                </div>
            </div>
        </div>
    </section>
    <section class="professionals">
        <div class="professionals__descr">
            <h3 class="professionals__descr-title">
                <?php the_field('professionals_title', 2); ?>
            </h3>
            <div class="professionals__descr-subtitle">
                <?php the_field('professionals_subtitle', 2); ?>
            </div>
        </div>
        <div class="container">
            <div class="professionals__workers">
                <div class="professionals__workers__item">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/professionals/spec1.png" alt="specialist1">
                    <div class="professionals__workers__item-title">
                        Мария Иванова
                    </div>
                    <div class="professionals__workers__item-spec">
                        Парикмахер
                    </div>
                    <div class="divider"></div>
                </div>
                <div class="professionals__workers__item">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/professionals/spec2.png" alt="specialist2">
                    <div class="professionals__workers__item-title">
                        Варвара Сидорова
                    </div>
                    <div class="professionals__workers__item-spec">
                        Мастер ногтевого сервиса
                    </div>
                    <div class="divider"></div>
                </div>
                <div class="professionals__workers__item">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/professionals/spec3.png" alt="specialist3">
                    <div class="professionals__workers__item-title">
                        Анастасия Воронова
                    </div>
                    <div class="professionals__workers__item-spec">
                        Мастер ногтевого сервиса
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <div class="feedback__contacts offset-xl-0 offset-lg-3 offset-md-2">
                <h3 class="feedback__contacts__title">
                    Запись
                </h3>
                <div class="feedback__contacts__subtitle">
                    Позвоните или напишите и мы вам обязательно ответим!<br>
                    Так же можете оставить заявку через форму обратной связи
                </div>
                <div class="feedback__wrapper">
                    <div class="feedback__contacts__contact">
                        <div class="feedback__contacts__contact__phone">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/phone.png" alt="phone">
                            <a href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a>
                        </div>
                    </div>
                    <div class="feedback__contacts__contact">
                        <div class="feedback__contacts__contact__whatsapp">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/whatsapp.png" alt="whatsapp">
                            <a href="tel:<?php the_field('whatsapp', 2); ?>"><?php the_field('whatsapp', 2); ?></a>
                        </div>
                    </div>
                    <div class="feedback__contacts__contact">
                        <div class="feedback__contacts__contact__email">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/email.png" alt="email">
                            <a href="mailto:<?php the_field('mail', 2); ?>subject=Вопрос"><?php the_field('mail', 2); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <form class="feedback__form offset-xl-0 offset-lg-3 offset-md-2" id="feedbackForm">
                <div class="feedback__form-title">Для записи заполните форму</div>
                    <input class="feedback__form-name" type="text" name="name" placeholder="Введите имя">
                        <div class="feedback__wrapper">
                        <input class="feedback__form-phone" name="form_phone" id="form_phone" type="phone" placeholder="Введите номер/Whatsapp" required>
                        <input class="feedback__form-email" name="form_email" id="form_email" type="email" placeholder="E-mail" required>
                        <select class="feedback__form-service" size="3" name="form_service" id="form_service" type="text" placeholder="Введите услугу" required>
                            <option selected style= "text-align: center" value="Стрижка">Стрижка</option>
                            <option style= "text-align: center" value="Укладка волос">Укладка волос</option>
                            <option style= "text-align: center" value="Маникюр">Маникюр</option>
                        </select>
                    </div>
                    <button class="feedback__form__btn">
                        <div class="feedback__form__btn-text">
                            Отправить
                        </div>
                    </button>
            </form>
        </div>
    </section>
<?php get_footer(); ?>