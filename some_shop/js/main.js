//Close open basket-block
$(document).on('click','.basket-block .basket-img-left',function(){
    $('.basket-block').toggleClass('open');
});
$(document).ready(function(){
    $( ".custom_select" ).customSelect();


    jQuery.extend(jQuery.validator.messages, {

        required: "Это поле необходимо заполнить",
        remote: "Исправьте это поле чтобы продолжить",
        email: "Введите правильный email адрес.",
        url: "Введите верный URL.",
        date: "Введите правильную дату.",
        dateISO: "Введите правильную дату (ISO).",
        number: "Введите число.",
        digits: "Введите только цифры.",
        creditcard: "Введите правильный номер вашей кредитной карты.",
        equalTo: "Повторите ввод значения еще раз.",
        accept: "Пожалуйста, введите значение с правильным расширением.",
        maxlength: jQuery.validator.format("Нельзя вводить более {0} символов."),
        minlength: jQuery.validator.format("Должно быть не менее {0} символов."),
        rangelength: jQuery.validator.format("Введите от {0} до {1} символов."),
        range: jQuery.validator.format("Введите число от {0} до {1}."),
        max: jQuery.validator.format("Введите число меньше или равное {0}."),
        min: jQuery.validator.format("Введите число больше или равное {0}.")
    });

    jQuery.validator.addMethod("phoneUA", function(phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/^[0-9]{10}/);
    }, "Введите номер телефона в формате 050 111 11 11 ");
    $("form.validate").validate({
        highlight: function(element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(errorClass).removeClass(validClass);
            } else {
                $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
            }
        },
        unhighlight: function(element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).removeClass(errorClass).addClass(validClass);
            } else {
                $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
            }
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    (function() {
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime(''
                    + '<span class="item_time"><span class="time">%D&nbsp;:</span></span>'
                    + '<span class="item_time"><span class="time">%H&nbsp;:</span></span>'
                    + '<span class="item_time"><span class="time">%M&nbsp;:</span></span>'
                    + '<span class="item_time"><span class="time">%S</span></span>'));
            });
        });

    })();
});
