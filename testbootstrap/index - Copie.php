<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
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
			  echo 'Vous êtes connecté en tant que <span style="color: 0000FF;">' . $_SESSION['pseudo'] . '</span><br>';
			  echo '<a href="membre.php">Accéder à la zone d\'administration</a><br>';
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
				  
              <!-- Menu de navigation -->
			  <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Ma galerie de photos</a>
                </div>              

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#" id="gallerie1" name="gallerie1">Gallerie 1</a></li>
                    <li><a href="#" id="gallerie2" name="gallerie2">Gallerie 2</a></li>
                    <li><a href="#">Gallerie 3</a></li>
                    <li><a href="#" id="createcategorie">Créer catégorie</a></li>
                  </ul>
                  <!-- champ search  -->
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                </div><!-- /.navbar-collapse -->
              </nav>     
            </header>

            <aside>
              <div class="panel panel-default">

                <div id="createcategorie" >
                  <form id="formcategorie">
                    <div>
                      <h3>Création de catégorie</h3>
                      <p><label>nom</label><input type="text" id="nomcategorie"></p>
                      <p><label>galerie id</label><input type="text" id="idgalerie"></p>
                      <p><label>description </label><textarea id="description" name="description">Enter text here...</textarea></p>
                      <input type="submit" value="Créer la catégorie" id="submitcategorie">
                    </div>
                  </form>
                </div>

              </div>
            </aside>   

              <!-- panneau latéral gauche -->
              <section>
                <div class="panel panel-default">
                  <div class="panel-body">
                      <ul class="nav nav-pills">
                        <li><a href="#">catégorie1</a></li>
                        <li><a href="#">catégorie2</a></li>
                        <li><a href="#">catégorie3</a></li>
                      </ul>
                      <article>
                          <h3>Photos de la gallerie</h3>
                          <p id="paragraphe1">Les photos seront affichées ici</p>
                          <p id="paragraphe2">et une petite phrase sera affichée ici</p>
                          <p id="paragraphe3">les infos de DB affichées ici</p>
                      </article>

                      <!-- formulaire de création de catégorie -->
                      <article>

                      </article> 

                  </div>
                </div> 

              </section>

            <footer>
            </footer>
        </div>

  </body>
</html>