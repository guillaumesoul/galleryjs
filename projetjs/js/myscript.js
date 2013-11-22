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

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "displayCategorie.php",   
        data: "categorie=1",       
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#categorie").html(response); 
            }

        });
    });

});