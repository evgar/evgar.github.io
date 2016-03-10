<?php include_once("parts/head.php") ?>

<?php
$header_bottom_container = <<<END
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                </ol>
                <div class="page-header">
                    <h1>Заказ #192356 от 28 марта 2012 г.</h1>
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
                    <li class="cart-menu col-sm-12"><a href="" class="active-nav-item">Мои заказы</a>
	                    <ul class="list-unstyled">
	                        <li><a><span class="order-number">Заказ #2313658</span>
	                            <span class="order-date">04.04.2012</span></a>
	                        </li>
	                        <li><a><span class="order-number">Заказ #2326658</span>
	                            <span class="order-date">04.04.2012</span></a>
	                        </li>
	                        <li class="active"><a><span class="order-number">Заказ #2313658</span>
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
            <div class="col-sm-9 cart-items-block">
				<dl class="dl-horizontal">
					<dt>Статус заказа:</dt><dd class="order-status">Обработан</dd>
					<dt>Адрес доставки:</dt><dd>Харьков, Московский проспект, д. 121, кв. 57</dd>
					<dt>Номер декларации:</dt><dd>3454564апр</dd>
					<div class="margin-element-30"></div>
					<h3><strong>Статус посылки:</strong></h3>
					<dt>Маршрут вантажу:</dt><dd>Київ - Харьков</dd>
					<dt>Дата прибуття:</dt><dd>Дата прибуття</dd>
					<dt>Поточне місцезнаходження:</dt><dd>відправлення знаходиться в місті Київ</dd>
					<p><i>Коли вантаж буде доставлено до місця призначення, на номер телефону Одержувача надійде SMS-повідомлення.</i></p>
					<dt>Адреса доставки:</dt><dd>відділення №9 (до 30 кг) вул. Вітрука, 9а</dd>
					<dt>Інформація про оплату:</dt><dd>Платник послуг доставки: Відправник</dd>
					<dt>Документи для отримання вантажу:</dt><dd>оригінал паспорту + довіреність (для юридичних осіб).</dd>
				</dl>
				<div class="margin-element-20"></div>
                <div class="my-basket">
                    <h2><strong>Список товаров</div></strong></h2>
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
                                    <p class="item-counter">1 <span>шт</span>.</p>
                                    <p class="price-ammount">1 325</p><small class="curency">грн.</small></div>
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
                                    <p class="item-counter">1 <span>шт</span>.</p>
                                    <p class="price-ammount">1 325</p><small class="curency">грн.</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-sm-offset-5 col-md-5 col-md-offset-7">
                        <div class="price-info"><span class="middle-font zero-bold">Итого за заказ:</span> 1 325 <small>грн.</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once("components/footer/main_footer.php") ?>

<?php include_once("parts/footer.php") ?>