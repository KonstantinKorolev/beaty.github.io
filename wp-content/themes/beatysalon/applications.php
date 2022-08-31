<?php
session_start();
$install_path = $_SERVER['DOCUMENT_ROOT'];
require_once($install_path. '/wp-includes/server/outputUsers.php');

/*

Template Name: Список всех заявок

*/
?>

<?php get_header(); ?>
<section class="applications">
    <?if (!empty($_SESSION['users'])):?>
        <?foreach ($_SESSION['users'] as $key=>$value):?>
            <div class="applications__wrapper col-xl-4">
                <div class="applications__id col-xl-2">
                    id: <?=$value->id;?>
                </div>
                <div class="applications__fullname col-xl-6">
                    Имя: <?=$value->fullname;?>
                </div>
                <div class="applications__phone col-xl-6">
                    Телефон: <?=$value->phone;?>
                </div>
                <div class="applications__service col-xl-4">
                    Услуга: <?=$value->service;?>
                </div>
                <div class="applications__btn col-xl-1">
                    <button class="applications__btn__icon-delete">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/trash-can.png" alt="trash">
                    </button>
                </div>
                <div class="applications__btn col-xl-1">
                    <button class="applications__btn__icon-correct">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/pen.png" alt="pen">
                    </button>
                </div>
            </div>
        <?endforeach;?>
    <?endif;?>
    <?session_destroy();?>
</section>
<?php get_footer();?>