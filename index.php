<!DOCTYPE html>

<html>
    
    <head>
	    <meta http-equiv="cleartype" content="on">
		<meta name="MobileOptimized" content="320">
		<meta name="HandheldFriendly" content="True">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="js/star-rating/jquery.form.js"></script>
		<script src="js/star-rating/jquery.MetaData.js"></script>
		<script src="js/star-rating/jquery.rating.pack.js"></script>
		<script src="js/star-rating/jquery.rating.js"></script>
		
		<link rel="stylesheet" href="js/star-rating/jquery.rating.css" />

		<script type="text/javascript" src="js/login.js"></script>
		<script type="text/javascript" src="js/film.js"></script>
		<script type="text/javascript" src="js/registrate.js"></script>
        <link rel="stylesheet" href="css/menu.css" />
		<link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/menu.css" />

		
    </head>
    <body>
        
    <div data-role="page" id="login" data-url="login" data-theme="a">  <!-- page login -->
            
            <div data-role="header"data-theme="b">    <!-- header -->
                <h1>WatchList</h1>				
            </div>  <!-- header -->
            
            <div data-role="content">   <!-- content -->
				<form action="">
					<p><h4>Username</h4>
					<input type="text" name="username" id="username">
					<h4>Passwort</h4>
					<input type="password" name="passwort" id="login_passwort"></p>
					<a href="#" data-transition="pop" id="login_absenden"><input data-corners="true" data-shadow="false" value="Anmelden" type="button" name="anmelden" /></a>
					<a href="#registration">Registrieren</a>
				</form>
				
            </div>  <!-- content -->
            
            <div data-role="footer">    <!-- footer -->
                
            </div>  <!-- footer -->
            
	</div>  <!-- page -->
	
	
	<?php
	
		$alle = glob('inc/*.html');
		foreach($alle as $datei) include $datei;
		
	
	?>

		
    </body>
    
</html>