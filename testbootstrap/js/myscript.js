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

    $("#gallerie1").click(function() {                

      $.ajax({    
        type: "GET",
        url: "displayCategorie.php",   
        data: "categorie=1",       
        dataType: "html",                  
        success: function(response){                    
            $("#categorie").html(response); 
            }

        });
    });

    $("#createcategorie").click(function() {                

      $.ajax({   
        type: "GET",
        url: "createCategorie.php",   
        data: "nom=karting&idGalerie=1&description=listedekartings",                     
        success: function(response){                    
            $("#categorie").html(response); 
            }

        });
    }); 

    $('#formcategorie').submit(function(e){
         
        // On envoi la requête AJAX
        $.getJSON(
            'createCategorie.php',
            {
                nom: $('#nomcategorie').val(),
                idGalerie: $('#idgalerie').val(),
                Description: $('#description').val()
            },
            function(data){
            }
        );
    });    


});