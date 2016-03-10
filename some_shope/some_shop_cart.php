<?php include_once("parts/head.php") ?>

<?php
$header_bottom_container = <<<END
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                </ol>
                <div class="page-header">
                    <h1>Корзина</h1>
                </div>
END;
?>

<?php include_once("components/header/main_header.php") ?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="margin-element-15"></div>
            <div class="col-sm-3 goods-details">
                <ul class="left-navigate-type-2 cart-nav-list">
                    <li class="cart-menu col-sm-12"><a href="">Персональная информация</a></li>
                    <li class="cart-menu col-sm-12 active"><a href="">Корзина</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Мои заказы</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Подписка</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Списки желаний</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Просмотренные товары</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Лист ожидания</a></li>
                </ul>
            </div>
            <div class="col-sm-9 cart-items-block">
                <div class="my-basket">
                    <h2><strong class="col-sm-offset-1">Список товаров</div></strong></h2>
                    <div class="basket-list">
                        <div class="row basket-items">
                            <div class="col-sm-2 basket-img">
                                <img src="dist/img/carriage_small_1.jpg" alt="carriage">
                            </div>
                            <div class="col-sm-4 col-sm-offset-1">
                                <div class="item-link">
                                    <a href="#">Прогулочная коляска Geoby C539K-X C78</a>
                                </div>
                                <a class="link-type-1 garbage-link">
                                    <span class="icon-link trash-icon"></span><span class="label-link">Удалить</span>
                                </a>
                            </div>
                            <div class="col-sm-5 col-sm-offset-0 col-xs-offset-0 text-right">
                                <div class="price-info price-info-block">
                                    <form class="input-group spinner">
                                        <input type="text" class="form-control cart-input" value="1">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default btn-counter" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default btn-counter" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                        
                                    </form><p class="item-counter">шт.</p><p class="price-ammount">1 325</p><small class = "curency">грн.</small></div>
                            </div>
                        </div>
                        <div class="row basket-items">
                            <div class="col-sm-2 basket-img">
                                <img src="dist/img/carriage_small_2.jpg" alt="carriage">
                            </div>
                            <div class="col-sm-4 col-sm-offset-1">
                                <div class="item-link">
                                    <a href="#">Коляска-трость Everflo SK-165 Green</a>
                                </div>
                                <a class="link-type-1 garbage-link">
                                    <span class="icon-link trash-icon"></span><span class="label-link">Удалить</span>
                                </a>
                            </div>
                            <div class="col-sm-5 col-sm-offset-0 col-xs-offset-0 text-right">
                                <div class="price-info price-info-block">
                                    <form class="input-group spinner">
                                        <input type="text" class="form-control cart-input" value="1">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default btn-counter" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default btn-counter" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </form><p class="item-counter">шт.</p><p class="price-ammount">1 325</p><small class = "curency">грн.</small></div>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-5 col-sm-offset-7 delivery-chosen">Доставка в
                    <div class="dropdown">
                        <a data-target="#" href="page.html" data-toggle="dropdown" class="dropdown-toggle dropdown-item">Ивано-Франковск<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Киев</a></li>
                            <li><a href="#">Харьков</a></li>
                            <li><a href="#">Одесса</a></li>
                            <li><a href="#">Львов</a></li>
                        </ul>
                    </div><p class="price-ammount">125</p><small class = "curency">грн.</small></div>
                    <div class="margin-element-10"></div>
                    <p class="col-sm-5 col-sm-offset-7 ">Расчетная стоимость является приблизительной. Точную стоимость доставки Вы можете узнать непосредственно у перевозчика. Доставка оплачивается при получении товара.</p>
                    <div class="margin-element-35"></div>
                    <div class="col-sm-5 col-sm-offset-7"><div class="price-info"><span class="middle-font zero-bold">Итого за заказ:</span> 1 325 <small>грн.</small></div></div>
                    <div class="margin-element-5"></div>
                    <button type="submit" class="col-sm-5 col-sm-offset-7 btn btn-lg btn-pink">Оформить заказ</button>
                                    </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("components/footer/main_footer.php") ?>

<?php include_once("parts/footer.php") ?>