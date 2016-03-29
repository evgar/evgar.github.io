					// Объявление модуля
					var validation = (function () {

					    // Инициализирует модуль
					    function init() {
					        _setUpListners();
					    }

					    // Прослушивает события 
					    function _setUpListners() {
					        // $('#contact-me').on('subbmit', _doSome);
					        $('form').on('keydown','.qtip-red',_removeError);
					        $('form').on('reset', _clearForm);
					    }
					    //Очистка стиля "ошибка" в инпуте при вводе
					    function _removeError() {
					    	$(this).removeClass('qtip-red');
					    }
					    //Очистка стиля "ошибка" в инпуте при нажатии на кнопку "Очистить"
					    function _clearForm(form) {
					    	var form = $(this);
					    	form.find('.input, .textarea').trigger('hideTooltip');
					    	form.find('.qtip-red').removeClass('qtip-red');
					    }
					    //Тултип
					    function _createQtip(element, position) {
					        //Позиционирование тултипа
					        if (position === 'right') {
					            position = {
					                my: 'left center',
					                at: 'right center'
					            };
					        } else {
					            position = {
					                my: 'right center',
					                at: 'left center',
					                adjust: {
					                    method: 'shift none'
					                }
					            };
					        }
					        //Инициализация тултипа
					        element.qtip({
					            content: {
					                text: function () {
					                    return $(this).attr('qtip-content');
					                }
					            },
					            show: {
					                event: 'show'
					            },
					            hide: {
					                event: 'keydown hideTooltip'
					            },
					            position: position,
					            style: {
					                classes: 'qtip-mystyle qtip-rounded',
					                tip: {
					                    height: 10,
					                    width: 16
					                }
					            }
					        }).trigger('show');
					    }
					    // Универсальная функция
					    var validateForm = function (form) {
					        console.log('Проверка валидации формы');

					        var elements = form.find('input, textarea').not('input[type="file"], input[type="hidden"]');
					        valid = true;

					        //Проверка всех элементов флрмы
					        $.each(elements, function (index, val) {
					        	// console.log(index);
					        	console.log(val);
					        	var element = $(val),
						            val = element.val(),
						            pos = element.attr('qtip-position');

					            if (val.length === 0){
					            	element.addClass('qtip-red');
					            	// $("input").css("background-color:red");
					            	_createQtip(element, pos);
					            	valid = false;
					          }
					        });
					        return valid;
					    };
					    // Работает с модальным окном
					    function _doSome(e) {
					        e.preventDefault();
					    }

					    // Возвращаем объект (публичные методы) 
					    return {
					        init: init,
					        validateForm: validateForm
					    };

					})();

					// Вызов модуля
					validation.init();