
$( document ).ready(function() {
	$('.slider-for').slick({
	   slidesToShow: 1,
	   slidesToScroll: 1,
	   arrows: false,
	   fade: true,
	   asNavFor: '.slider-nav'
	 });
	 $('.slider-nav').slick({
	   slidesToShow: 3,
	   slidesToScroll: 1,
	   asNavFor: '.slider-for',
	   dots: true,
	   focusOnSelect: true
	 });
	
	 $('a[data-slide]').click(function(e) {
	   e.preventDefault();
	   var slideno = $(this).data('slide');
	   $('.slider-nav').slick('slickGoTo', slideno - 1);
	 });
	 
	 
	 
	 
	 
	 
	 
	 $("#ex12b").slider({ id: "slider12b", min: 0, max: 10, range: true, value: [3, 7] });
	 $('#ex1').slider({
			formatter: function(value) {
				return 'Current value: ' + value;
			}
		});
	 $("#ex2").slider({});

});
$("#ex12b").slider({ id: "slider12b", min: 0, max: 10, range: true, value: [3, 7] });
$('#ex1').slider({
		formatter: function(value) {
			return 'Current value: ' + value;
		}
	});
$("#ex2").slider({});
