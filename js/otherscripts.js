	// Define our selectors
	var $clock 		= $("#clock");
	var $timer 		= $("#timer");
	var $start 		= $("#start");
	var $pause 		= $("#pause");
	var $continue 	= $("#continue");
	// Enable start / pause / continue buttons
	$(function(){
		$start.on("click",function(e){
			e.preventDefault();
			beginTimer(60000); // 60 seconds
		});
	});
	// Change timer face colour
	function colourChanger(intAngle)
	{
		intAngle = 6.29 - intAngle;
		if(Math.floor(72+55*intAngle) < 255 || Math.floor(214+14*intAngle) < 255)
		{
			// Animate from green to amber
			return 'rgb(51,51,51)';	
		} else {
			// Animate from amber to red
			return 'rgb(255,0,0)';
		}
	}
	// Get the ball rolling...
	function beginTimer(timer)
	{
		// Get our start time
		var dteStart = new Date();
		dteStart = dteStart.getTime();
		// Call countdown clock function
		countDownClock(dteStart,timer);
		// Reset elements to their defaults
		$clock.show();
		$timer.show();
	}
	// Build our countdown clock
	function countDownClock(dteStart,timer)
	{
		// Time started, minus time now, subtracked from 60 seconds
		var d = new Date();
		window.intOffset = timer - (d.getTime() - dteStart);
		// Whole number to use as countdown time
		$timer.html(Math.ceil(window.intOffset / 1000));
		// Angle to use, defined by 1 millisecond
		window.intAngle = 0.1048335*0.001*window.intOffset;
		// Set up our canvas
		var canvas = document.getElementById("clock");
		if (canvas.getContext) // Does the browser support canvas?
		{
			var ctx = canvas.getContext("2d");
			// Clear canvas before re-drawing
			ctx.clearRect(0,0,300,300);
			// Grey background ring
			ctx.beginPath();
			ctx.globalAlpha = 1;
			ctx.arc(150,150,140,0,6.283,false);
			ctx.arc(150,150,105,6.283,((Math.PI*2)),true);
			ctx.fillStyle = "#fde800";
			ctx.fill();
			ctx.closePath();
			// Clock face ring
			ctx.beginPath();
			ctx.globalAlpha = 1;
			ctx.arc(150,150,120.1,-1.57,(-1.57 + window.intAngle),false);
			ctx.arc(150,150,105,(-1.57 + window.intAngle),((Math.PI*2) -1.57),true);
			ctx.fillStyle = colourChanger(window.intAngle);
			ctx.fill();
			ctx.closePath();
			// Centre circle
			ctx.beginPath();
			ctx.arc(150,150,105,0,6.283,false);
			ctx.fillStyle = "#fde800";
			ctx.fill();
			ctx.closePath();
		} else {
			// Put fallback for browsers that don't support canvas here...
		}
		if(window.intOffset <= 0) // If time is up
			timeUp();	
		else // Resersive ahoy!
			window.t = setTimeout("countDownClock(" + dteStart + "," + timer + ")",50);
	}
	// Pause clock and animate our centre circle
	function clockPause(timeElapsed,pause)
	{		
		// Duration of pause animation
		pauseTime = 100;
		diff = timeElapsed / pauseTime;
		if(pause) // Pause the clock
		{
			percentage = 1 - diff;
			if(percentage < 0)
				percentage = 0;
		} else { // Resume the clock
			percentage = diff;
			if(percentage > 1)
				percentage = 1;
		}				
		// Set up our canvas
		var canvas = document.getElementById("clock");
		if (canvas.getContext) // Does the browser support canvas?
		{
			var ctx = canvas.getContext("2d");
			// Clear canvas before re-drawing
			ctx.clearRect(0,0,300,300);
			// Grey background ring
			ctx.beginPath();
			ctx.globalAlpha = 1;
			ctx.arc(150,150,140,0,6.283,false);
			ctx.arc(150,150,105,6.283,((Math.PI*2)),true);
			ctx.fillStyle = "#fde800";
			ctx.fill();
			ctx.closePath();
			// Clock face ring
			ctx.beginPath();
			ctx.globalAlpha = 1;
			ctx.arc(150,150,140.1,-1.57,(-1.57 + window.intAngle),false);
			ctx.arc(150,150,105,(-1.57 + window.intAngle),((Math.PI*2) -1.57),true);
			ctx.fillStyle = colourChanger(window.intAngle);
			ctx.fill();
			ctx.closePath();
			// Centre circle
			ctx.beginPath();
			ctx.arc(150,150,(105 * percentage),0,6.283,false);
			ctx.fillStyle = "#fde800";
			ctx.fill();
			ctx.closePath();
			// Recursive until time has elapsed
			if(timeElapsed < pauseTime)
			{
				setTimeout(function(){
					clockPause((timeElapsed + 10),pause);
				},10);
			}
		} else {
			// Put fallback for browsers that don't support canvas here...
		}
	}
	// Time up
	function timeUp()
	{
		$('#happy').modal('hide');
	}
	
	

	jQuery(document).ready(function() {
	var today = new Date();
	var nowminute = today.getMinutes();
	if ($.cookie('show_popup_okna_tseny4')) { 
		var raznitsavr = nowminute - $.cookie('show_popup_okna_tseny4');
		if (raznitsavr > 0) { setTimeout(show_popup_100kupon, 10000); }
	 }
	 else
	 { 
			$.cookie('show_popup_okna_tseny4', nowminute, {  
				expires: 1,  
				path: '/'  
			}); 
	}
		function show_popup_100kupon() 
		{			
			if (noHappy == "false") {	
				if (!$.cookie('show_popup_100_tseny4')) {  
					
					$('#happy').modal('show');
					
					beginTimer(60000);
				}  

				  $.cookie('show_popup_100_tseny4', true, {  
					expires: 1,  
					path: '/'  
				  });   
			}
		}
		
	});



	var noHappy = "false";

		//открытие формы НЕ УХОДИТЕ БЕЗ ПОДАРКА
	jQuery(document).ready(function() {
		var todaygift = new Date();
		var nowminutegift = todaygift.getMinutes();
		/*
	if ($.cookie('show_popup_okna_tseny_gift1')) 
		{}
		else
		{ 
			$(".topclose5px").hover( function () {
					$('#gift').modal('show');
				
			
					//Устанавливаем куки на 720 минут (12 часов)
					var datecookie = new Date();
				var minutescookie = 720;
				datecookie.setTime(datecookie.getTime() + (minutescookie * 60 * 1000));
			
				$.cookie('show_popup_okna_tseny_gift1', nowminutegift, {  
					expires: datecookie,  
					path: '/'  
				});
			}, 
			function () {
			});
		}
	*/
$('.thanky li').css("display","block");


		$('#gift').on('hide.bs.modal', function (e) {
			$(".topclose5px").remove();
		});

			
		if ($.cookie('show_popup_okna_gift4')) { 
			var raznitsavr = nowminutegift - $.cookie('show_popup_okna_gift4');
			if (raznitsavr > 0) { setTimeout(show_popup_100gift, 2000); }
		}
		else { 
			$.cookie('show_popup_okna_gift4', nowminutegift, {  
				expires: 1,  
				path: '/'  
			}); 
		}
		
		

		function show_popup_100gift() {			
			if (!$.cookie('show_popup_100_gift4')) {  
				$(".topclose5px").hover( function () {
				
					$('#gift').modal('show');
					noHappy = "true";
				
				}, 
				function () {
				});
			}  
			
			$.cookie('show_popup_100_gift4', true, {  
				expires: 1,  
				path: '/'  
			});   
		}
		
		
	});