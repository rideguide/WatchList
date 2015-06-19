
var films = [];
var watchlist = [];
var currentId;
function loadFilmList(filter)
{
	var $content = $("#titleContent");
	$content.find(".result").remove();

	$("#backButtonFilm").find("a").attr("href","#titel");
	$("#backButtonFilm").find("a").text("Titel");

	for (var i=0; i<films.length; i++) {

		var id = films[i].Id;
		var img = films[i].img;
		var title = films[i].name;

		if(filter && title && filter.length > 0 && title.toString().toLowerCase().indexOf(filter.toString().toLowerCase()) < 0)
		{
			continue;
		}
		var $row = $('#filmTemp').clone();
		
		$row.find("img").attr("src", "covers/"+img);
		$row.attr("onClick", "loadFilmData("+id+")");
		$row.find("figcaption.filmtitel").text(title);
		$row.addClass("result");
		$content.append($row);

		$row.show();
	}
}

function loadMyFilmList()
{
	var $content = $("#MyContent");
	$content.find(".result").remove();
	$("#backButtonFilm").find("a").attr("href","#mywatchlist");
	$("#backButtonFilm").find("a").text("Watchlist");

	for (var i=0; i<films.length; i++) {


		var id = films[i].Id;
		var img = films[i].img;
		var title = films[i].name;
		var bool = false;

		for (var x=0; x<watchlist.length; x++) {
			var wId = watchlist[x].film_fk;
			if(wId == id)
			{
				bool = true;
			}
		}

		if(!bool)
		{
			continue;
		}

		var $row = $('#filmTemp').clone();
		
		$row.find("img").attr("src", "covers/"+img);
		$row.attr("onClick", "loadFilmData("+id+")");
		$row.find("figcaption.filmtitel").text(title);
		$row.addClass("result");
		$content.append($row);

		$row.show();
	}
}

function loadFilmData(id)
{
	var $filmDetail = $("#filmDetail");


	for (var i=0; i<films.length; i++) {
		if(films[i].Id == id)
		{
			currentId = films[i].Id;
			var img = films[i].img;
			var title = films[i].name;
			var director = films[i].director;
			var genere = films[i].genere;
			var description = films[i].description;

			$filmDetail.find("img.cover").attr("src", "covers/"+img);
			$("#detailTitle").text(title);
			$("#detailDirector").text(director);
			$("#detailGenere").text(genere);
			$("#detailDescription").text(description);

		}
	}
	window.location.replace("#film");
}

$(document).ready(function(){
	var data;
	$.ajax({
  		url: "db/php/movies.php",
  		data: data,
  		method:"GET",
  		dataType: "json"
	}).done(function(data){
		if(data)
		{
			films = data;
		}
	});

	$.ajax({
  		url: "db/php/watchlist.php",
  		data: data,
  		method:"GET",
  		dataType: "json"
	}).done(function(data){
		if(data)
		{
			watchlist = data;
		}
	});

	$("#suchefilm1").keyup(function(){
		var suche = $("#suchefilm1").val();

		loadFilmList(suche.trim());

	});

	$("#menu_titel").click(function(){
		
		loadFilmList();

	});

	$("#menu_watchlist").click(function(){
		
		$("#watchlisthinzu").show();
		loadMyFilmList();
	});

	$("#watchlisthinzu").click(function(){
		var rating;

		if(!$("#star5").attr("checked"))
		{
			if(!$("#star4").attr("checked"))
			{
				if(!$("#star3").attr("checked"))
				{
					if(!$("#star2").attr("checked"))
					{
						if(!$("#star4").attr("checked"))
						{
							rating = 0;
						}
						else
						{
							rating = 1
						}
					}
					else
					{
						rating = 2;
					}
				}
				else
				{
					rating = 3;
				}
			}
			else
			{
				rating = 4;
			}
		}
		else
		{
			rating = 5;
		}

		var data = {user: window.name, filmId: currentId, rating: rating};
		console.log(data.user);
		console.log(data.filmId);
		console.log(data.rating);
		$.ajax({
  		url: "db/php/insertWatchlist.php",
  		data: data,
  		method:"POST",
  		dataType: "json"
		}).done(function(data){
			if(data.success){
				$("#watchlisthinzu").hide();
			}
		});
	});


});
