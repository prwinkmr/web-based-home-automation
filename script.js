$(document).ready(function () {
	$(window).resize(function(){
		adjustBackground();
	});
	$(window).on("load",function(){
		adjustBackground();
	});
	function adjustBackground()
	{
		var height = $("#title").css("height");
		var y = "0 " + height;
		$("body").css("background-position",y);
	}
	var bulb = true;
	setInterval(function() {
		$(".fa-lightbulb-o").css("color","yellow");
		if(bulb)
		{
			$(".fa-lightbulb-o").css("color","yellow");
			$(".fa-wifi").css("color","rgba(255, 255 ,255 , 1)");
		}
		else
		{
			$(".fa-lightbulb-o").css("color","black");
			$(".fa-wifi").css("color","rgba(255, 255 ,255 , 0.5)");
		}
		bulb = ! bulb;
	},2000);
});