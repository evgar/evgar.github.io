	// Объявление модуля
	var myModule = (function () {

	    // Инициализация модуля
	    function init() {
	        _setUpListners();
	    };

	    // Прослушка событий
	    function _setUpListners() {
	        $('#add-link').on('click', _showModal); // открыть модальное окно
	        $('#add-new-project').on('submit', _addProject); // добавление проекта
	    };
	    //Модальное окно
	    var _showModal = function (ev) {
	        ev.preventDefault();

	        var divPopup = $('#project-add'),
	            form = divPopup.find('.form');

	        // $('#project-add').bPopup({
	        divPopup.bPopup({
	            fadeSpeed: 'slow',
	            followSpeed: 1500,
	            modalColor: '#EEEEEE',
	            onClose: function () {
	                // console.log('Скрытие'),
	                form.find('.error-mes').text('').hide();
	            }
	        });
	    };
	    //Добавление проекта
	    var _addProject = function (ev) {
	        console.log("Добавление проекта");
	        ev.preventDefault();
	        // var form = this; Проверка формы добавления проекта
	        // console.log(form);
	        // console.log(this);

	        //Объявление переменных
	        var form = $(this),
	            url = 'js/add_project.php',
	            MyServerGiveMeAnAnswer = _ajaxForm(form, url);

	        console.log(data);
	        //запрос на сервер

	        MyServerGiveMeAnAnswer.done(function (ans) {
	            console.log(ans);

	            var successBox = form.find('.success-mes'),
	                errorBox = form.find('.error-mes');

	            if (ans.status === 'OK') {
	                // console.log("ИМЯ ЗАПОЛНЕНО КОРРЕКТНО");
	                errorBox.hide();
	                successBox.text(ans.text).show();
	                // form.find('.success-mes').text(ans.text).show();
	            } else {
	                // console.log("ИМЯ НЕ ЗАПОЛНЕНО");
	                successBox.hide;
	                errorBox.text(ans.text).show();
	                // form.find('.error-mes').text(ans.text).show();
	            }
	        })
	        // 	.fail(function() {
	        // 		console.log("error");
	        // 	})
	        // 	.always(function() {
	        // 		console.log("complete");
	        // });
	    };
	    // Гист-функция(@form-форма модульного окна, @url-php-документ, с которым работает функция):	
	    // 1. проверяет форму
	    // 2. собирает данные из формы
	    // 3. возвращает ответ с сервера
	    var _ajaxForm = function (form, url) {
	        if (!validation.validateForm(form)) return false;
	        data = form.serialize();
	        var result = $.ajax({
	            url: url,
	            type: 'POST',
	            dataType: 'json',
	            data: data,
	        }).fail(function (ans) {
	            console.log('Проблемы с PHP');
	            form.find('.error-mes').text('На сервере произошла ошибка').show();
	        });
	        return result;
	    };

	    // Возвращаем объект (публичные методы) 
	    return {
	        init: init
	    };
	})();


	// Вызов модуля
	myModule.init();