$(function() {
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
			  
	$(document).click(function (e) {
		if (($(e.target).closest("#wrapper").length === 0) && (!$(e.target).hasClass("navbar-toggle")) && (!$(e.target).hasClass("icon-bar")) && ($("#wrapper").hasClass("toggled"))) {
			$("#wrapper").toggleClass("toggled");
		}
	});
	
	$("#secretary-dropdown-toggle").click(function(e) {
		e.preventDefault();
		$("#secretary-menu").toggleClass("toggled");
	});
	
	$("#historian-dropdown-toggle").click(function(e) {
		e.preventDefault();
		$("#historian-menu").toggleClass("toggled");
	});
});