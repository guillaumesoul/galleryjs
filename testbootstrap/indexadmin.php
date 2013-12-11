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
			  echo '<a href="log.php?action=logout">Logout</a><br>';
			  echo '</div>';
			}
			else
			{
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
                    <li><a href="#" id="gallerie1" name="gallerie1">Gallerie 1</a></li>
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

              <!-- panneau latéral gauche -->
              <!-- formulaire creation galerie -->
              <section>
                <div class="panel panel-default">
                  <div id="creategalerie" >
                    <form id="formgalerie">
                      <div>
                        <h3>Création de galerie</h3>
                        <p><label>nom</label><input type="text" name="nomgalerie"></p>
                        <p><label>description </label><textarea name="descriptiongalerie"></textarea></p>
                        <input type="submit" value="Créer la galerie" name="submitcategorie">
                      </div>
                    </form>
                  </div>
                <!-- formulaire creation catégorie -->  
                <div id="createcategorie" >
                  <form id="formcategorie" action="createCategorie.php" method="post">
                      <h3>Création de catégorie</h3>
                      <p><label>nom</label><input type="text" name="nomcategorie"></p>
                      <p><label>galerie id</label><input type="text" name="idgalerie"></p>
                      <p><label>description </label><textarea name="descriptioncategorie"></textarea></p>
                      <input type="submit" value="Créer la catégorie" id="createcategorie">
                  </form>
                </div>
                <div id="test"></div>

                </div> 

              </section>

            <footer>
            </footer>
        </div>

  </body>
</html>