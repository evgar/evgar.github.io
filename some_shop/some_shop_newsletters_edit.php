<?php include_once("parts/head.php") ?>

<?php
$header_bottom_container = <<<END
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                    <li></li>
                </ol>
                <div class="page-header">
                    <h1>Подписка</h1>
                </div>
END;
?>

<?php include_once("components/header/main_header.php") ?>




<div class="container-fluid">
    <div class="container">
        <div class="row">
	        <div class="margin-element-30"></div>
	        <div class="col-sm-3 goods-details">
                <ul class="left-navigate-type-2 cart-nav-list">
                    <li class="cart-menu"><a href="">Персональная информация</a></li>
                    <li class="cart-menu"><a href="">Корзина</a></li>
                    <li class="cart-menu"><a href="">Мои заказы</a></li>
                    <li class="cart-menu active"><a href="">Подписка</a></li>
                    <li class="cart-menu"><a href="">Списки желаний</a></li>
                    <li class="cart-menu"><a href="">Просмотренные товары</a></li>
                    <li class="cart-menu"><a href="">Лист ожидания</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 subscription">
                <div class="col-md-12 col-sm-12 hidden-xs">
                	<p>Не пропустите ничего интересного!<br>
        			   Получайте уведомления о новых событиях на электронный адрес: 
        			</p>
        			<form class="form-inline">
                        <input type="email" class="form-control" id="InputEmail2" placeholder="vasilisa@mail.ru">
                        <button type="submit" class="btn btn-purple btn-sm save-Email">Сохранить</button>
                        <a href="" class="cancel">Отменить</a>   
                    </form>
                </div>
                <div class="margin-element-15"></div>
                <div class="col-md-12 col-sm-12">
                    <h2>Последние акции</h2>
                    <div class="margin-element-20"></div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="col-xs-2">
                                <img src="img/clown_hat.jpg">
                            </div>
                            <div class="col-xs-10">
                                <p class="col-xs-10"><a href="">Наши искренние поздравления! В день
                                   рождения вашего ребенка мы дарим вам
                                   скидку 15% на любой товар в нашем магазине.</a>
                                </p>
                                <a href="#" class="col-xs-12">Все акции</a>
                            </div>
                        </div>    
                        <div class="col-sm-4 col-xs-12 subscribeWindow">
                            <div class="subsWindowText">
                                <p>У вас оформлена подписка на уведомления о новых акциях</p>
                                <p><a href="#">Отписаться</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="margin-element-70"></div>
                <div>
                    <h2>Последние новости</h2>
                    <div class="margin-element-20"></div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="col-xs-2">
                                <img src="img/carriage_small_4.jpg">
                            </div>
                            <div class="col-xs-10">
                                <p class="col-xs-10"><a href="">Практически все элементы конструкции
                                    детской коляски трансформер подвижны,
                                    так как подобная гибкость элементов и
                                    обеспечивает ее функционал.</a>
                                </p>
                                <a href="#" class="col-xs-12">Все новости</a>
                            </div>
                        </div>    
                        <div class="col-sm-3 col-xs-4">
                            <button type="button" class="btn btn-purple btn-sm">Подписаться на новости</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="margin-element-75"></div>
		</div>
    </div>
</div>







<?php include_once("components/footer/main_footer.php") ?>

<?php include_once("parts/footer.php") ?>

