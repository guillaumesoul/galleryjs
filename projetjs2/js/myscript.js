$(document).ready(function() {

	//Affichage des données de MYSQL
	$("#gallerie1").click(function() {                

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "display3.php", 
        data: "{'action':'display'}",            
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#paragraphe1").html(response); 
        }

    });
});
});