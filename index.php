<!DOCTYPE html>

<html>
    
    <head>
        
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="js/transition.js"></script>
        <link rel="stylesheet" href="css/menu.css" />
		<link rel="stylesheet" href="css/main.css" />


		
    </head>
    <body>
        
    <div data-role="page" id="login" data-url="login" data-theme="a">  <!-- page login -->
            
            <div data-role="header"data-theme="b">    <!-- header -->
                <h1>WatchList</h1>
            </div>  <!-- header -->
            
            <div data-role="content">   <!-- content -->
				<form action="">
					<p><h4>E-Mail</h4>
					<input type="email" name="email" id="login_email">
					<h4>Passwort</h4>
					<input type="password" name="passwort" id="login_passwort"></p>
					<a href="#menu" data-transition="pop" id="login_absenden"><input value="Anmelden" type="button" name="anmelden" /></a>
					<a href="#registration">Registrieren</a>
				</form>
				
            </div>  <!-- content -->
            
            <div data-role="footer">    <!-- footer -->
                
            </div>  <!-- footer -->
            
	</div>  <!-- page -->
	
	
	<?php
	
		include "inc/menu.html";
		include "inc/watchlist.html";
		include "inc/registration.html";
	
	?>

		
    </body>
    
</html>