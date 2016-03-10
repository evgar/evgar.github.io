<?php include_once("parts/head.php") ?>

<?php
$header_bottom_container = <<<END
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                    <li></li>
                </ol>
                <div class="page-header">
                    <h1>Персональная информация</h1>
                </div>
END;
?>

<?php include_once("components/header/main_header.php") ?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
	        <div class="margin-element-20 .add-margin"></div>
	        <div class="col-md-3 col-sm-3 goods-details add-margin">
                <ul class="left-navigate-type-2 cart-nav-list">
                    <li class="cart-menu active"><a href="">Персональная информация</a></li>
                    <li class="cart-menu"><a href="">Корзина</a></li>
                    <li class="cart-menu"><a href="">Мои заказы</a></li>
                    <li class="cart-menu"><a href="">Подписка</a></li>
                    <li class="cart-menu"><a href="">Списки желаний</a></li>
                    <li class="cart-menu"><a href="">Просмотренные товары</a></li>
                    <li class="cart-menu"><a href="">Лист ожидания</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9">
	            <div class="col-sm-12 person-contacts">
	            	<h2 class="col-sm-12">Контактные данные</h2>
	            	<div class="margin-element-5"></div>
					<p class="col-sm-2">Имя:</p>
					<p class="col-sm-10"><strong>Василиса</strong></p>
					<div class="margin-element-5"></div>
					<p class="col-sm-2">Электронная почта:</p>
					<p class="col-sm-10"><strong>vasilisa@mail.ru</strong></p>
					<div class="margin-element-5"></div>	
					<p class="col-sm-2">Телефон:</p>
					<p class="col-sm-10"><strong>+38 (050) 256 35 87</strong></p>
					<div class="margin-element-5"></div>	
					<p class="col-sm-12"><a href="" class="dashed-link">Изменить контактные данные</a></p>
					<div class="margin-element-5"></div>
					<p class="col-sm-12"><a href="" class="dashed-link">Изменить пароль</a></p>  
	            </div>
	            <div class="margin-element-25"></div>
	            <div class="col-sm-12">
	            	<h2 class="col-sm-12">Адрес доставки</h2>
	            	<div class="margin-element-5"></div>
	            	<p class="col-sm-12">Харьков, Московский проспект, д. 121, кв. 57</p>
		            <div class="margin-element-10"></div>
		            <p class="col-sm-12"><a href="" class="dashed-link">Изменить адрес</a></p>  
	            </div>
	            <div class="margin-element-35"></div>
	            <div class="col-sm-12">
	            	<h2 class="col-sm-12">Мои дети</h2>
	            	<p class="col-sm-12">В день рождения вашего ребенка  мы с радостью предложим  вам ценные подарки!</p>
	            	<p class="col-sm-12 text-color-muted">(укажите имя и дату рождения вашего ребенка)</p>
		            <div class="margin-element-10"></div>
		            <p class="col-sm-12"><a href="" class="dashed-link">Добавить информацию</a></p>  
	            </div>
            </div>
            <div class="margin-element-75"></div>
		</div>
    </div>
</div>



<?php include_once("components/footer/main_footer.php") ?>

<?php include_once("parts/footer.php") ?>

