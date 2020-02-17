$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 75) {
        $(".logo").css("margin-top" , "-10px");
        $(".logo").css("z-index" , "300");
        $(".logo").css("position" , "fixed");
        $(".logo").css("height" , "75px");
        $(".logo").css("width" , "75px");
	  }
      
      
    
	  else{
        $(".logo").css("margin-top" , "-22px");
        $(".logo").css("position" , "absolute");
        $(".logo").css("height" , "125px");
        $(".logo").css("width" , "125px");  	
	  }
      
      if (scroll > 680) {
          $("form").css("box-shadow" , "0px 4px 11px 3px rgba(0,0,0,0.75)"); 
      }
      else{
          $("form").css("box-shadow" , "none"); 
      }
  })
})