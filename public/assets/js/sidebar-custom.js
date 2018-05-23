$(document).ready(function () {
	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
		$('.main').toggleClass('active');
		$('.footer').toggleClass('active');
	});
});