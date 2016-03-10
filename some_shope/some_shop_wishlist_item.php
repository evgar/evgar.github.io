<?php include_once("parts/head.php") ?>

<?php
$header_bottom_container = <<<END
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                    <li></li>
                </ol>
                <div class="page-header">
                    <h1>Нам будет 1 годик</h1>
                </div>
END;
?>

<?php include_once("components/header/main_header.php") ?>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="margin-element-20"></div>
            <div class="col-md-3 col-sm-3 goods-details">
                <ul class="left-navigate-type-2 cart-nav-list">
                    <li class="cart-menu col-sm-12"><a href="">Персональная информация</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Корзина</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Мои заказы</a></li>    
                    <li class="cart-menu col-sm-12"><a href="">Подписка</a></li>
                    <li class="cart-menu col-sm-12"><a href="" class="Wish-List">Списки желаний</a>
                        <ul class="list-unstyled">
                            <li class="active">
                                <a>
                                    <span class="order-number">Нам будет 1 годик</span>
                                    <span class="order-date">14</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="order-number">Всякое необходимое</span>
                                    <span class="order-date">2</span>
                                </a>
                            </li>
                            <li class="order-number">
                                <a>
                                    <span class="order-number">На будущее</span>
                                    <span class="order-date">9</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="cart-menu col-sm-12"><a href="">Просмотренные товары</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Лист ожидания</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul class="list-inline">
                        <li class="filter-for">Фильтровать по:</li>
                        <li class="select"><a>Цене</a></li>
                        <li><a>Названию</a></li>
                        <li><a>Наличию</a></li>
                        <li>
                            <a class="link-type-1 shareLink">
                                <span class="share-link-icon"></span>
                                <span class="label-link">Поделиться ссылкой</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="clear-list-icon"></span>
                                <span>Очистить список</span>
                            </a>
                        </li>         
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 item-block col-sm-6">
                    <img src="img/carriage_item_1.png" class=" " alt="Responsive image">
                    <a href="" class="col-xs-10">Коляска-трость Everflo SK-165 Green</a>
                    <div class="det-promo">
                        <div id="Stars-input" class="push-left col-xs-12">
                            <form action="" class="col-xs-5">
                                <input id="star-4" type="radio" name="reviewStars" />
                                <label title="gorgeous" for="star-4"></label>
                                <input id="star-3" type="radio" name="reviewStars" />
                                <label title="good" for="star-3"></label>
                                <input id="star-2" type="radio" name="reviewStars" />
                                <label title="regular" for="star-2"></label>
                                <input id="star-1" type="radio" name="reviewStars" />
                                <label title="poor" for="star-1"></label>
                                <input id="star-0" type="radio" name="reviewStars" />
                                <label title="bad" for="star-0"></label>
                            </form>
                        </div>
                        <div class="price-info col-xs-5 col-sm-7">971 грн.
                            <div class="order-status ok">Есть в наличии</div>
                        </div>
                        <button type="button" class=" btn btn-yellow col-xs-3 col-sm-4">Купить</button>
                        <div class="col-xs-12 compare-delete-block">
                            <a class="link-type-1 col-xs-5">
                                <span class="compare"></span><span class="label-link">К сравнению</span>
                            </a>
                            <a class="link-type-1 garbage-link col-xs-5">
                                <span class="icon-link trash-icon"></span><span class="label-link">Удалить</span>
                            </a>
                        </div>
                        <ul class="list-inline choose-color">
                            <li class="col-xs-12"><strong>Другие цвета</strong></li>
                            <ul class="col-xs-12 list-inline">
                                <li><img src="img/color_1.png" alt="color_1"></li>
                                <li><img src="img/color_2.png" alt="color_2"></li>
                                <li><img src="img/color_3.png" alt="color_3"></li>
                                <li><img src="img/color_4.png" alt="color_4"></li>
                            </ul>
                            <li class="col-xs-12"><a href="" class="link-type-1"><span class="label-link">Показать все цвета</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12 item-block col-sm-6">
                    <div class="item-img">
                        <img src="img/carriage_item_1.png" class=" " alt="Responsive image">
                        <div class="sale-label"></div>
                    </div>
                    <a href="" class="col-xs-10">Прогулочная коляска Geoby C201 GX-X 724</a>
                    <div class="det-promo">
                        <div id="Stars-input" class="push-left col-xs-12">
                            <form action="" class="col-xs-5">
                                <input id="star-4" type="radio" name="reviewStars" />
                                <label title="gorgeous" for="star-4"></label>
                                <input id="star-3" type="radio" name="reviewStars" />
                                <label title="good" for="star-3"></label>
                                <input id="star-2" type="radio" name="reviewStars" />
                                <label title="regular" for="star-2"></label>
                                <input id="star-1" type="radio" name="reviewStars" />
                                <label title="poor" for="star-1"></label>
                                <input id="star-0" type="radio" name="reviewStars" />
                                <label title="bad" for="star-0"></label>
                            </form>
                        </div>
                        <div class="price-info col-xs-10 sale"><i>Акция! Мягкая игрушка в подарок!</i></div>
                        <div class="price-info col-xs-5 col-sm-7">10 325 грн.
                            <div class="order-status ok">Есть в наличии</div>
                        </div>
                        <button type="button" class=" btn btn-yellow col-xs-3 col-sm-4">Купить</button>
                        <div class="col-xs-12 compare-delete-block">
                            <a class="link-type-1 col-xs-5">
                                <span class="compare"></span><span class="label-link">К сравнению</span>
                            </a>
                            <a class="link-type-1 garbage-link col-xs-5">
                                <span class="icon-link trash-icon"></span><span class="label-link">Удалить</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12 item-block col-sm-6">
                    <img src="img/carriage_item_3.png" class=" " alt="Responsive image">
                    <a href="" class="col-xs-10">Коляска-трость Geoby D208DR-F JDJ</a>
                    <div class="det-promo">
                        <div id="Stars-input" class="push-left col-xs-12">
                            <form action="" class="col-xs-5">
                                <input id="star-4" type="radio" name="reviewStars" />
                                <label title="gorgeous" for="star-4"></label>
                                <input id="star-3" type="radio" name="reviewStars" />
                                <label title="good" for="star-3"></label>
                                <input id="star-2" type="radio" name="reviewStars" />
                                <label title="regular" for="star-2"></label>
                                <input id="star-1" type="radio" name="reviewStars" />
                                <label title="poor" for="star-1"></label>
                                <input id="star-0" type="radio" name="reviewStars" />
                                <label title="bad" for="star-0"></label>
                            </form>
                        </div>
                        <div class="price-info col-xs-5 col-sm-7">2 365 грн.
                            <div class="order-status ok">Есть в наличии</div>
                        </div>
                        <button type="button" class=" btn btn-yellow col-xs-3 col-sm-4">Купить</button>
                        <div class="col-xs-12 compare-delete-block">
                            <a class="link-type-1 col-xs-5">
                                <span class="compare"></span><span class="label-link">К сравнению</span>
                            </a>
                            <a class="link-type-1 garbage-link col-xs-5">
                                <span class="icon-link trash-icon"></span><span class="label-link">Удалить</span>
                            </a>
                        </div>
                        <ul class="list-inline choose-color">
                            <li class="col-xs-12"><strong>Другие цвета</strong></li>
                            <ul class="col-xs-12 list-inline">
                                <li><img src="img/color_1.png" alt="color_1"></li>
                                <li><img src="img/color_2.png" alt="color_2"></li>
                                <li><img src="img/color_3.png" alt="color_3"></li>
                                <li><img src="img/color_4.png" alt="color_4"></li>
                            </ul>
                            <li class="col-xs-12"><a href="" class="link-type-1"><span class="label-link">Показать все цвета</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-lg-12">
                    <div class="col-lg-4 col-xs-12 item-block col-sm-6">
                        <img src="img/carriage_item_1.png" class=" " alt="Responsive image">
                        <a href="" class="col-xs-10">Коляска-трость Everflo SK-165 Green</a>
                        <div class="det-promo">
                            <div id="Stars-input" class="push-left col-xs-12">
                                <form action="" class="col-xs-5">
                                    <input id="star-4" type="radio" name="reviewStars" />
                                    <label title="gorgeous" for="star-4"></label>
                                    <input id="star-3" type="radio" name="reviewStars" />
                                    <label title="good" for="star-3"></label>
                                    <input id="star-2" type="radio" name="reviewStars" />
                                    <label title="regular" for="star-2"></label>
                                    <input id="star-1" type="radio" name="reviewStars" />
                                    <label title="poor" for="star-1"></label>
                                    <input id="star-0" type="radio" name="reviewStars" />
                                    <label title="bad" for="star-0"></label>
                                </form>
                            </div>
                            <div class="price-info col-xs-5 col-sm-7">971 грн.
                                <div class="order-status ok">Есть в наличии</div>
                            </div>
                            <button type="button" class=" btn btn-yellow col-xs-3 col-sm-4">Купить</button>
                            <div class="col-xs-12 compare-delete-block">
                                <a class="link-type-1 col-xs-5">
                                    <span class="compare"></span><span class="label-link">К сравнению</span>
                                </a>
                                <a class="link-type-1 garbage-link col-xs-5">
                                    <span class="icon-link trash-icon"></span><span class="label-link">Удалить</span>
                                </a>
                            </div>
                            <ul class="list-inline choose-color">
                                <li class="col-xs-12"><strong>Другие цвета</strong></li>
                                <ul class="col-xs-12 list-inline">
                                    <li><img src="img/color_1.png" alt="color_1"></li>
                                    <li><img src="img/color_2.png" alt="color_2"></li>
                                    <li><img src="img/color_3.png" alt="color_3"></li>
                                    <li><img src="img/color_4.png" alt="color_4"></li>
                                </ul>
                                <li class="col-xs-12"><a href="" class="link-type-1"><span class="label-link">Показать все цвета</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="margin-element-65"></div>
            </div>
        </div>
    </div>
</div>


<?php include_once("components/footer/main_footer.php") ?>

<?php include_once("parts/footer.php") ?>



