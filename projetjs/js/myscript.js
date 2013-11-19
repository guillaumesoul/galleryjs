$(document).ready(function() {
	
	//quand on click sur le lien gallerie1 
	$("#gallerie1").click(function(){
		//on insert une image
		$("#paragraphe1").html("<img id='voiture1' src='images/gallerie1/1.jpg'>");
		//redimensionnement de l'image
		$('#voiture1').width(220);
		$("#paragraphe1").append("<img id='voiture2' src='images/gallerie1/2.jpg'>");
		$('#voiture2').width(220);
		$("#paragraphe1").append("<img id='voiture3' src='images/gallerie1/3.jpg'>");
		$('#voiture3').width(220);
		$("#paragraphe1").append("<img id='voiture4' src='images/gallerie1/4.jpg'>");
		$('#voiture4').width(220);	
		$("#paragraphe1").append("<img id='voiture5' src='images/gallerie1/5.jpg'>");
		$('#voiture5').width(220);
		$("#paragraphe1").append("<img id='voiture6' src='images/gallerie1/6.jpg'>");
		$('#voiture6').width(220);	
		//insertion zone de texte
		$('<div id="madiv">Ceci est une div générée !</div>');
		$("#paragraphe2").html("<strong>Plutôt classe les voitures non?</strong>");
	});
});