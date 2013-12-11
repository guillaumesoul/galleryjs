$(document).ready(function() {

	//Affichage des données de MYSQL
	$("#gallerie1").click(function() {                

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "displayGalerie1.php",          
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#paragraphe1").html(response); 
            }

        });
    });

    //creation de nouvelles categories
    $("#testcat").click(function() {                

      $.ajax({   
        type: "GET",
        url: "createCategorie.php",   
        data: "nom=karting&idGalerie=1&description=listedekartings",                     
        success: function(response){                    
            $("#categorie").html(response); 
            }

        });
    }); 

    // formulaire de creation de categories
    $('#formcategorie').on('submit', function() {
         
        // je récupère les valeurs
        var nomcategorie = $('#nomcategorie').val();
        var idgalerie = $('#idgalerie').val();
        var descriptioncategorie = $('#descriptioncategorie').val();
 
        // je vérifie une première fois pour ne pas lancer la requête 
        if(nomcategorie == '' || idgalerie == '' || descriptioncategorie == '') {
            alert('Les champs doivent êtres remplis');
        } else {
            // appel Ajax
            $.ajax({
                url: $(this).attr('action'), // le nom du fichier indiqué dans le formulaire
                type: $(this).attr('method'), // la méthode indiquée dans le formulaire
                data: $(this).serialize(), // je sérialise les données 
                success: function(response) {
                    $("#test").html(response);               
                }
            });
        }
        return false; // j'empêche le navigateur de soumettre lui-même le formulaire
    }); 

    // formulaire de connexion utilisateur
    $('#sessionform').on('submit', function() {
 
        var pseudo = $('#pseudo').val();
        var password = $('#password').val();
 
        if(pseudo == '' || password == '') {
            alert('Les champs doivent êtres remplis');
        } else {
            $.ajax({
                url: $(this).attr('action'), // le nom du fichier indiqué dans le formulaire
                type: $(this).attr('method'), // la méthode indiquée dans le formulaire
                data: $(this).serialize(), // je sérialise les données 
                success: function(response) { // je récupère la réponse du fichier PHP
                    $("#paragraphe1").html(response); 
                    // an fonction de la réponse admin ou user je redirige vers la page adequat
                    if (response == "admin") {
                        window.location = "indexadmin.php";
                    }
                    else if (response == "toto") {
                        window.location = "index.php";
                    }                 
                }
            });
        }
        return false; // j'empêche le navigateur de soumettre lui-même le formulaire
    });
  
    

});

