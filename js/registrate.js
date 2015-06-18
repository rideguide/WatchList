$(document).ready(function(){
	var validun = false;

	$("#registration_username").focusout(function(){
		var un = $("#registration_username").val();

		
		var data = {username: un};
			$.ajax({
	  		url: "db/php/registrate.php",
	  		data: data,
	  		method:"POST",
	  		dataType: "json"
			}).done(function(){
				if(data.success){
					validun = true;
				}
				else
				{
					validun = false;
				}
			});
	});

	$("#registration_wiederholen" || "#registration_passwort").focusout(function(){
		var pw1 = $("#registration_passwort").val();
		var pw2 = $("#registration_wiederholen").val();

		if(pw1 == pw2)
		{
			validun = true;
		}
		else
		{
			validun = false;
		}
	});

	$("#registration_absenden").click(function(){
		var un = $("#registration_username").val();
		var pw = $("#registration_passwort").val();
		var pw_re =$("#registration_wiederholen").val();
		if(validun){
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
			});
		}
	});
});