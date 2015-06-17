$(document).ready(function(){

	$("#registration_username").focusout(function(){
		var un = $("#registration_username").val();
		var pw = "";
		var validun = false;
		var data = {username: un, check: true};
			$.ajax({
	  		url: "db/php/user.php",
	  		data: data,
	  		method:"POST",
	  		dataType: "json"
			}).done(function(){
				if(data.success){
					validun = true;
					$("#registration_username").css("box-shadow", "0 0 12px #74FF05");
				}
				else
				{
					validun = false;
					$("#registration_username").css("box-shadow", "0 0 12px #FF0000");
				}
			});
	});

	$("#registration_absenden").click(function(){
		var un = $("#registration_username").val();
		var pw = $("#registration_passwort").val();
		var pw_re =$("#registration_wiederholen").val();
		if(pw == pw_re)
		{
			var data = {username: un, password: pw};
			$.ajax({
	  		url: "db/php/insertUser.php",
	  		data: data,
	  		method:"POST",
	  		dataType: "json"
			}).done(function(){
				if(data.success){
					window.location.replace("");
				}
				else
				{

				}

			});
		}
	});

});