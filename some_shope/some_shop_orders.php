<?php include_once("parts/head.php") ?>

<?php
$header_bottom_container = <<<END
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                </ol>
                <div class="page-header">
                    <h1>Мои заказы</h1>
                </div>
END;
?>

<?php include_once("components/header/main_header.php") ?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="margin-element-20"></div>
            <div class="col-sm-3 goods-details">
                <ul class="left-navigate-type-2 cart-nav-list">
                    <li class="cart-menu col-sm-12"><a href="">Персональная информация</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Корзина</a></li>
                    <li class="cart-menu col-sm-12 active"><a href="" class="active-nav-item">Мои заказы</a>
                        <ul class="list-unstyled">
                            <li><a><span class="order-number">Заказ #2313658</span>
                                <span class="order-date">04.04.2012</span></a>
                            </li>
                            <li><a><span class="order-number">Заказ #2326658</span>
                                <span class="order-date">04.04.2012</span></a>
                            </li>
                            <li><a><span class="order-number">Заказ #2313658</span>
                                <span class="order-date">04.04.2012</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="cart-menu col-sm-12"><a href="">Подписка</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Списки желаний</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Просмотренные товары</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Лист ожидания</a></li>
                </ul>
            </div>
            <div class="col-sm-9 orders-list">
                <h2 class="col-sm-12">Отложенные заказы</h2>
                <div class="row">
                    <div class="col-sm-6 order-info">
                        <a href="">Заказ #293658 от 4 апреля 2012 г.</a>
                        <p><strong>5 товаров</strong> на сумму <strong> 4 500 грн.</strong></p>
                    </div>
                    <button type="button" class="btn btn-purple btn-sm col-sm-2">Оформить заказ</button>
                    <a href="" class="col-sm-2">Удалить заказ</a>
                </div>
                <div class="margin-element-60"></div>
                <h2 class="col-sm-12">Текущие заказы</h2>
                <div class="row">
                    <div class="col-sm-6 order-info">
                        <a href="">Заказ #293658 от 1 апреля 2012 г.</a>
                        <p><strong>2 товара</strong> на сумму <strong> 6 500 грн.</strong></p>
                    </div>
                    <p class="col-sm-3">Доставляется</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 order-info">
                        <a href="">Заказ #293658 от 1 апреля 2012 г.</a>
                        <p><strong>2 товара</strong> на сумму <strong> 2 650 грн.</strong></p>
                    </div>
                    <p class="col-sm-2 order-status">Доставлен</p>
                    <a href="" class="col-sm-2">Удалить заказ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("components/footer/main_footer.php") ?>

<?php include_once("parts/footer.php") ?>