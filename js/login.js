$(document).ready(function(){
if(window.name == "login")
{
	window.location.replace("#menu");
} 
else 
{
	$("#login_passwort").focusout(function(){
		var un = $("#username").val();
		var pw = $("#login_passwort").val();
		var data = {username: un, password: pw};
		$.ajax({
  		url: "db/php/user.php",
  		data: data,
  		method:"POST",
  		dataType: "json"
		}).done(function(data){
			if(data.success){
				$("#login_absenden").attr("href", "#menu");
				window.name = "login";
			}
		});
	});
}
window.name = "";
});