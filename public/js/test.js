$(function () {


/********************************Scroll to skills*************************/
$(".scroll").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
      $('html,body').animate({
        scrollTop: $(hash).offset().top
      }, 800);
	}
});
/*******************************SCROLL TO TOP EFFECTS**************************/

    $("#circle,#scrollTopSmallRes").click(function () {
        $('html,body').animate({ scrollTop: 0 }, 'slow');
    });



/*******************************Start Scroll Code*******************************************************/
    var navbarVisible = false;
	var BarBool = false;
	var skillsHeight = null;
	if($("#skills").length){
      skillsHeight = $("#skills").offset().top;

	}
	
    $(window).scroll(function () {
        
         /********Activate progress bar*****/		
		 if ($(this).scrollTop() > skillsHeight-40) {
			 
			 if(!BarBool){
			   activateProgressBar();
			   BarBool=true;
			 }
		 }
		 
         if ($(this).width() > 768 && $(this).scrollTop() > 300) { //show and hide scroll icon
            $('#circle').css('right','40px');
         } else {
            $('#circle').css('right', '-60px');
         }

        /*
         Stick navbar on top while scrolling down
        */
        		
		
        if ($(this).scrollTop() > 50) {
            
            if (!navbarVisible) {
              
                $("#navb").addClass("navbar-fixed-top").css({'border-bottom':'1px solid blue',
				                                             'background-color':'#000066'
															 });
                
				$('#welcome').css("margin-top", "50px");
                navbarVisible = true;
            }
        } else {
            $("#navb").removeClass("navbar-fixed-top").removeAttr('style');
            $("#welcome").css("margin-top", "0px");
			
            navbarVisible = false;
        }

    });

    
/***********************Updates date and time each 30 seconds**********************************/

    function showDateTime() {
        var dt = new Date();

        var day = dt.getDate();
        var month = dt.getMonth();
        var year = dt.getFullYear();

        var txt;

        switch (dt.getDay()) {
            case 1: { txt = "Monday"; break; }
            case 2: { txt = "Tuesday"; break; }
            case 3: { txt = "Wednesday"; break; }
            case 4: { txt = "Thursday"; break; }
            case 5: { txt = "Friday"; break; }
            case 6: { txt = "Saturday"; break; }
            case 0: { txt = "Sunday"; break; }
        }
        $('#dt').html("<i class='glyphicon glyphicon-time'></i>&nbsp;"+txt);
        $('#tm').html(dt.toLocaleTimeString());

    }

    setInterval(function () { showDateTime() }, 1000);
    
	
/*********************Progress Bar Function********************/	
	function activateProgressBar(){
	  var PHPprogress = "85%",MySQLprogress="90%",ASPprogress="85%",CSHARPprogress="85%";
	  var JAVAprogress = "90%",HTMLprogress = "90%",CSS3progress = "90%",Jqueryprogress = "90%",nodejs = "70%";
	  $('#PHP-progress-bar').animate({width:PHPprogress},500);
	  $('#JAVA-progress-bar').animate({width:JAVAprogress},500);
	  $('#HTML-progress-bar').animate({width:HTMLprogress},500);
	  $('#CSS3-progress-bar').animate({width:CSS3progress},500);
	  $('#Jquery-progress-bar').animate({width:Jqueryprogress},500);
	  $('#NodeJs-progress-bar').animate({width:nodejs},500);
	  $('#MYSQL-progress-bar').animate({width:MySQLprogress},500);
	  $('#ASP-progress-bar').animate({width:ASPprogress},500);
	  $('#CSHARP-progress-bar').animate({width:CSHARPprogress},500);
    }
	
	/*$(".fancybox").fancybox({
		'autoSize' : false,
		'autoDimensions': false,
		'fitToView': false,
		beforeShow: function () {
			this.width = 800;
			this.height = 600;
		}
	});*/
	
});
