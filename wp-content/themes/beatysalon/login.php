<?php

/*
Template Name: Страница входа для администраторов
*/

?>

<?php 
get_header();
?>
    <section class="login">
        <form class="login__form" action="#" id="loginForm">
            <div class="login__form__title">Личный кабинет Администратора</div>
            <input class="login__form__nickname" id="admin_login" type="text" placeholder="Введите логин" required>
            <input class="login__form__password" name="admin_pass" id="admin_pass" type="password" placeholder="Введите пароль" required>
            <button class="login__form__btn" id="admin_btn">
                <div class="feedback__form__btn-text">
                    Войти
                </div>
            </button>
        </form>
    </section>
<?php
get_footer();
?>