$(document).ready(function(){

	$("#main-page").css("paddingTop",$("#header").height()-20);
	if($(window).width()<720)
		$("#section").hide();
	else{
		$(".fa-bars").parent().hide();
	}

	$(".fa-bars").click(function(){
		$("#section").slideToggle(100);
	});


	$(window).scroll(function(event){
			var st = $(this).scrollTop();
			if (st > 0){
				//$("#downArrow").hide();
				$("#upArrow").show();
			} else {
				$("#downArrow").show();
				$("#upArrow").hide();					
			}
   			lastScrollTop = st;
	});
	$("#downArrow a").click(function(){
		$("#downArrow").hide();
	});



	$("#viewby").change(function(){
		$("#main-page #loader").fadeIn(100);
		menu_home(this.value);
	});

	LOAD='';
	$("#search-query").keyup(function(){
		if(LOAD!='home')
			menuLoader("home");
		var query = this.value.toLowerCase();
		var keywords = query.split(" ");
		j='';
		for(i=1;j!=null;i++)
		{
			j = $("#taskid-"+i).html().toLowerCase();
			if(query==j || i==query)
			{
				$("#main-page_tag").html("Results : ");
				$("#taskid-"+i).parent().parent().show();
			}
			else if(query=='')
			{
				$("#main-page_tag").html("");
				$("#taskid-"+i).parent().parent().show();
			}
			else
			{
				$("#taskid-"+i).parent().parent().hide();
			}
		}
	});


	menuLoader("home");
	$("#header #menu ul li").click(function(){
		menuLoader($(this).attr("id"));
	});

	function menuLoader(load)
	{
		LOAD = load;
		$("#RESULTS").html("");
		$("#main-page #loader").fadeIn(100);
		$("#header #menu ul li a").removeClass("menu-active");
		switch(load)
		{
			case "home":
				$("#header #menu ul #home a").addClass("menu-active");
				$("#main-page #pannel").show(1);
				menu_home("all");
				break;
			case "about":
				$("#header #menu ul #about a").addClass("menu-active");
				$("#main-page #pannel").slideUp(500);
				menu_about();
				break;
			case "account":
				$("#header #menu ul #account a").addClass("menu-active");
				$("#main-page #pannel").slideUp(500);	
				menu_account();
				break;
		}
	}
	function menu_home(viewby)
	{
		$.post( "action.php",{menu_home:viewby}, function( data ) {
  			$("#main-page #loader").fadeOut(100,function(){
				if(data!=0)
				{
					$("#RESULTS").html(data);
					var index = null;
					$("#RESULTS #result-tabs #home_result #wraper-tasks-list").click(function(){
						if(index != $(this).index())
						{
							$("#RESULTS #result-tabs #home_result #wraper-tasks-list").eq(index).css({
							"cursor":"pointer",
							"boxShadow":"0px 0px 0px #aaa",
							"background": "#f0f5f5"
							});
							$("#RESULTS #result-tabs #home_result #wraper-tasks-list #task_description").slideUp();
							$("#RESULTS #result-tabs #home_result #wraper-tasks-list").eq($(this).index()).find("#task_description").slideDown();
							$("#RESULTS #result-tabs #home_result #wraper-tasks-list").eq($(this).index()).css({
								"cursor":"auto",
								"boxShadow":"1px 2px 3px #aaa",
								"background": "#fefefe"
							});
							index = $(this).index();
						}
					});
				}
				else
				{
					$("#RESULTS").html("<center><h1><i class='fas fa-frown-open'> No data available yet</i></h1></center>");
				}
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
});
