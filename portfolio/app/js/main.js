(function() {
	console.log ('Файл main.js успешно загружен')
});
// $(document).ready(function()
// {
// 	$( "#callMe" ).click(function(event)
// 	{
// 		event.preventDefault();
// 		$.ajax(
// 			{
// 				url: 'write_message.html',
// 				success: function(response)
// 				{
// 					$('head').append('<link rel="stylesheet" type="text/css" href="css/write_message.css">');
// 					$('body').append('<div class="pop-up"></div>');
// 					$('.pop-up').append($(response).find('.variable-content'));
// 					$('.pop-up').bPopup();
// 				}
// 			});
// 	})
// })