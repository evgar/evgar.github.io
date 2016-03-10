<?php include_once("parts/head.php") ?>

<?php
$header_bottom_container = <<<END
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                    <li></li>
                </ol>
                <div class="page-header">
                    <h1>Списки желаний</h1>
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
                    <li class="cart-menu col-sm-12 active"><a href="">Списки желаний</a>
                        <ul class="list-unstyled">
                            <li><a><span class="order-number">Нам будет 1 годик</span>
                                <span class="order-date">14</span></a>
                            </li>
                            <li><a><span class="order-number">Всякое необходимое</span>
                                <span class="order-date">2</span></a>
                            </li>
                            <li class="order-number"><a><span class="order-number">На будущее</span>
                                <span class="order-date">9</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="cart-menu col-sm-12"><a href="">Просмотренные товары</a></li>
                    <li class="cart-menu col-sm-12"><a href="">Лист ожидания</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 UserWishList">
                <div class="col-sm-12 col-xs-12">
                    <span class="Title">Нам будет 1 годик</span>
                    <span class="text-color-muted">14 товаров</span>
                </div>      
                <div class="margin-element-5"></div>
                <div class="col-sm-12 col-xs-12">
                    <ul class="list-inline">
                        <li><a href="">Переименовать список</a></li>
                        <li><a href="">Удалить список</a></li>
                    </ul>
                </div>
                <div class="margin-element-60"></div>
                <form>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <input name="wishes" type="text" class="form-control" id="GoodsWishes">
                    </div>
                    <div class="margin-element-10"></div>
                    <div class="col-sm-4 col-xs-12">
                        <button type="submit" class="btn btn-purple btn-sm">Сохранить</button>
                        <button type="reset" class="btn btn-link Cancel-Contacts">Отмена</button>
                    </div>
                </form>
                <div class="margin-element-50"></div>
                <div class="col-sm-12 col-xs-12">
                    <span class="Title">На будущее</span>
                    <span class="text-color-muted">9 товаров</span>
                </div>      
                <div class="margin-element-5"></div>
                <div class="col-sm-12 col-xs-12">
                    <ul class="list-inline">
                        <li><a href="">Переименовать список</a></li>
                        <li><a href="">Удалить список</a></li>
                    </ul>
                </div>
                <div class="margin-element-55"></div>
                <div class="col-sm-4  col-xs-12">
                        <button type="submit" class="btn btn-purple btn-sm">Добавить список</button>
                </div>



            </div>



            <div class="margin-element-75"></div>
        </div>
    </div>
</div>


<?php include_once("components/footer/main_footer.php") ?>

<?php include_once("parts/footer.php") ?>
