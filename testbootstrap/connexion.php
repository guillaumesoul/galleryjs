<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://code.jquery.com/jquery.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <SCRIPT  TYPE="text/javascript" SRC="js/jQuery.js"></SCRIPT> 
    <SCRIPT  TYPE="text/javascript" SRC="js/myscript.js"></SCRIPT>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div id="bloc_page">
		<header>

			<!-- sessions -->
			<?php
			session_start();  // démarrage de la session
			// si la variable de session "pseudo" existe
			if(isset($_SESSION['pseudo']))
			{
			  
			  echo '<div>';
			  echo 'from connexion : Vous êtes connecté en tant que <span style="color: 0000FF;">' . $_SESSION['pseudo'] . '</span><br>';
			  echo '<a href="log.php?action=logout">Logout</a><br>';
			  echo '</div>';	

			}
			else
			{
			  // si la variable erreur est dans l'url
			  if(isset($_GET['erreur']))
			  {
				// le compte n'existe pas
				if($_GET['erreur'] == 1)
				  echo '<span style="color: FF0000;">Le compte n\'existe pas</span>';
				// mot de passe invalide
				else if($_GET['erreur'] == 2)
				  echo '<span style="color: FF0000;">Le mot-de-passe que vous avec entré est faux</span>';
			  }
			  ?>
			  <div class="right">

        <!-- Test 2 formulaire -->
          <form id="sessionform" action="displayUser.php" method="post">
              <label for="pseudo">Pseudo</label>
              <input type="text" id="pseudo" name="pseudo" />
           
              <label for="password">Password</label>
              <input type="text" id="password" name="password" />
           
              <input type="submit" id="envoyer" value="Envoyer" />
          </form>
				    <div id="userinfo"></div> 
			  </div>
		  
			 <?php
				} 
			?>		
		</header>
	</div>
	<div id="paragraphe1"> </div>
  </body>
</html>