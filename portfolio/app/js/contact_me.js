// Объявление модуля
var contactMe = (function () {
    // Инициализирует наш модуль
    function init() {
        _setUpListners();
    }

    // Прослушивает события 
    function _setUpListners() {
        $('#contact-me').on('submit',_submitForm);
        console.log('Отправка формы реализована');
    }

    var _submitForm = function (ev) {
        ev.preventDefault();

        var form = $(this);
        url = 'some.php';
        defObj = _ajaxForm(form, url);
        //Ответ с сервера (defObj)
    };

    var _ajaxForm = function (form, url) {
        console.log('Проверка AJAX');
         if (!validation.validateForm(form)) return false;
        // при false код ниже не читается
    };
    // Работает с модальным окном
    function _doSome(e) {
        console.log('Отправка формы');
        ev.preventDefault();
    }

    // Возвращаем объект (публичные методы) 
    return {
        init: init
    };

})();

// Вызов модуля
contactMe.init();