$(document).ready(function(){
	$("#toggleNav").click(
		function(){
			$("nav").toggleClass("collapsed");
		}
	);
	$("ul.nav a").click(
		function(){
			$("nav").addClass("collapsed");
		}
	);
});