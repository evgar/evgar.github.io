$('.navbar-nav > li.top-menu').click(function(e) {
  var $this = $(this);
  if (!$this.hasClass('active')) {
  	$('.navbar-nav > li.top-menu').removeClass('active');
    $this.addClass('active');

  }
  e.preventDefault();
});

