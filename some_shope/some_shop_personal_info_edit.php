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
	        <div class="margin-element-20"></div>
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
            <div class="col-md-9">
	            <div class="col-sm-8 col-xs-10 person-contacts">
	            	<h2 class="col-sm-12">Контактные данные</h2>
	            	<div class="margin-element-5"></div>
	            	<form class="form-horizontal UserInfoForm">
	            	    <div class="form-group">
							<label for="InputUserName" class="col-sm-3 col-xs-4 control-label">Имя</label>
							<div class="col-sm-6 col-xs-8">
								<input name="UserName" type="text" class="form-control" id="InputUserName" placeholder="Василиса" required tabindex="1">
							</div>
						</div>
						<div class="form-group">
						    <label for="inputUserEmail" class="col-sm-3 col-xs-4 control-label">Электронная почта</label>
						    <div class="col-sm-6 col-xs-8">
						        <input name="Email" type="email" class="form-control" id="inputUserEmail" placeholder="vasilisa@mail.ru" required tabindex="2">
						    </div>
						</div>
						<div class="form-group">
							<label for="InputUserTel" class="col-sm-3 col-xs-4 control-label">Телефон</label>
							<div class="col-sm-6 col-xs-8">
								<input name="Number" type="tel" class="form-control" id="InputUserTel" placeholder="+38 (050) 256 35 87" required tabindex="3">
							</div>
						</div>
						<div class="margin-element-5"></div>
						<div class="form-group">
						    <div class="col-sm-offset-3 col-sm-6 col-xs-offset-4 col-xs-8">
							    <button type="submit" class="btn btn-purple btn-sm" tabindex="4">Сохранить</button>
							    <button type="reset" class="btn btn-link Cancel-Contacts">Отменить</button>
						    </div>
						</div>
					</form>
					<div class="margin-element-25"></div>
					<form class="form-horizontal UserInfoForm"> 
						<div class="form-group">
						    <label for="inputNewPass" class="col-sm-3 col-xs-4 control-label">Новый пароль</label>
						    <div class="col-sm-6 col-xs-8">
						        <input name="pwd" type="password" class="form-control" id="inputNewPass" required tabindex="5">
						    </div>
						</div>
						<div class="form-group">
						    <label for="confirmNewPass" class="col-sm-3 col-xs-4 control-label">Еще раз</label>
						    <div class="col-sm-6 col-xs-8">
						        <input name="ConfirmPwd" type="password" class="form-control" id="confirmNewPass"required tabindex="6">
						    </div>
						</div>
						<div class="margin-element-5"></div>
						<div class="form-group">
						    <div class="col-sm-offset-3 col-sm-6 col-xs-offset-4 col-xs-8">
							    <button type="submit" class="btn btn-purple btn-sm" tabindex="7">Сохранить</button>
							    <button type="reset" class="btn btn-link Cancel-Contacts">Отменить</button>
						    </div>
						</div>
					</form>
					<div class="margin-element-50"></div>
					<h2 class="col-sm-12">Адрес доставки</h2>
					<div class="margin-element-15"></div>
					<form class="form-horizontal UserInfoForm"> 
						<div class="form-group">
						    <label for="Cities" class="col-sm-3 col-xs-4 control-label">Город</label>
						    <div class="col-sm-6 col-xs-8">
	                            <select name="Cities" class="custom_select form-control" tabindex="7">
									<option>Киев</option>
									<option>Харьков</option>
									<option>Одесса</option>
									<option>Днепропетровск</option>
									<option>Львов</option>
	                            </select>
	                        </div>
						</div>
						<div class="form-group">
						    <label for="InputAdress" class="col-sm-3 col-xs-4 control-label">Адрес</label>
						    <div class="col-sm-8 col-xs-8">
						        <input name="YourAdress" type="text" class="form-control" id="InputAdress" tabindex="8">
						    </div>
						</div>
						<div class="form-group">
						    <div class="col-sm-offset-3 col-sm-6 col-xs-offset-4 col-xs-8">
							    <button type="submit" class="btn btn-purple btn-sm" tabindex="9">Сохранить</button>
							    <button type="reset" class="btn btn-link Cancel-Contacts">Отменить</button>
						    </div>
						</div>
					</form>
					<div class="margin-element-65"></div>
					<h2 class="col-sm-12">Мои дети</h2>
					<div class="margin-element-15"></div>
	            	<p class="col-sm-12">В день рождения вашего ребенка  мы с радостью предложим  вам ценные подарки!</p>
	            	<p class="col-sm-12 text-color-muted">(укажите имя и дату рождения вашего ребенка)</p>
	            	<div class="margin-element-5"></div>
	            	<form class="form-horizontal UserInfoForm"> 
						<div class="form-group">
						    <label for="ChildName" class="col-sm-3 col-xs-4 control-label">Имя  ребенка</label>
						    <div class="col-sm-6 col-xs-5">
						        <input name="YourAdress" type="text" class="form-control" id="ChildName" tabindex="9">
						    </div>
						    <div class="col-sm-2 col-xs-3">
						    	<a class="link-type-1">
                                    <span class="icon-link trash-icon"></span>
                                    <span class="label-link">Удалить</span>
                                </a>
						    </div>
						</div>
						<div class="form-group">
						    <label for="InputAdress" class="col-sm-3 control-label">Дата</label>
						    <div class="col-sm-2">
							    <select name="NumberOfBirth" class="custom_select form-control" tabindex="10">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
	                            </select>  	
						    </div>
						    <div class="col-sm-4">
							    <select name="MonthOfBirth" class="custom_select form-control" tabindex="11">
									<option>Январь</option>
									<option>Февраль</option>
									<option>Март</option>
									<option>Апрель</option>
									<option>Май</option>
	                            </select>  	
						    </div>
						    <div class="col-sm-2">
							    <select name="YearOfBirth" class="custom_select form-control" tabindex="12">
									<option>2015</option>
									<option>2014</option>
									<option>2013</option>
									<option>2012</option>
									<option>2011</option>
	                            </select>  	
						    </div>
						    <div class="margin-element-10"></div>
						    <div class="col-sm-offset-3 col-sm-6">
							    <a class="link-type-1">
								    <span class="add-child-icon"></span>
                                    <span class="label-link">Добавить ребенка</span>
                                </a>
						    </div>
						</div>
						<div class="margin-element-10"></div>
						<div class="form-group">
						    <div class="col-sm-offset-3 col-sm-6 col-xs-offset-4 col-xs-8">
							    <button type="submit" class="btn btn-purple btn-sm" tabindex="9">Сохранить</button>
							    <button type="reset" class="btn btn-link Cancel-Contacts">Отменить</button>
						    </div>
						</div>
					</form>
	            </div>
            </div>
            <div class="margin-element-75"></div>
		</div>
    </div>
</div>





<?php include_once("components/footer/main_footer.php") ?>

<?php include_once("parts/footer.php") ?>
