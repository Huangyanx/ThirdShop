 
 
 	//监听左边的导航选项，锚链接 
 	$('#left_nav').scrollspy({ target: '#left_nav' });
 	//滚动条监听左侧显示/隐藏
 	$(window).scroll(function(){ 
 		var scrollBotton=Number($("#footer").offset().top)-Number($(this).scrollTop())-700;
 		if($(this).scrollTop() > 750 && scrollBotton > 0){
 			$("#left_nav").slideDown();	
 		}else{
 			$("#left_nav").slideUp();	
 		}
 	}) 
 	//当手机屏幕时
 		if($(window).width()<=768){
 			$(".catebox .catebox_list").hide();
 			$(".catebox").click(function() {  
 				$(".catebox .catebox_list").slideToggle();
	 		});
 		} 
 
 		
 