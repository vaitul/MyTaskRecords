$(document).ready(function(){
	menuLoader("home");
	$("#header #menu ul li").click(function(){
		menuLoader($(this).attr("id"));
	});

	function menuLoader(load)
	{
		$("#RESULTS").html("");
		$("#main-page #loader").fadeIn(100);
		$("#header #menu ul li a").removeClass("menu-active");
		switch(load)
		{
			case "home":
				$("#header #menu ul #home a").addClass("menu-active");
				menu_home();
				break;
			case "about":
				$("#header #menu ul #about a").addClass("menu-active");
				menu_about();
				break;
			case "account":
				$("#header #menu ul #account a").addClass("menu-active");
				menu_account();
				break;
		}
	}

	function menu_home()
	{
		$.post( "action.php",{menu_home:1}, function( data ) {
  			$("#main-page #loader").fadeOut(100,function(){
				$("#RESULTS").html(data);
			});
		});
	}
	function menu_about()
	{
		$.post( "action.php",{menu_about:1}, function( data ) {
  			$("#main-page #loader").fadeOut(100,function(){
				$("#RESULTS").html(data);
			});
		});
		
	}
	function menu_account()
	{
		$.post( "action.php",{menu_account:1}, function( data ) {
  			$("#main-page #loader").fadeOut(100,function(){
				$("#RESULTS").html(data);
			});
		});
		
	}

	$("#result-tabs").tabs();
});