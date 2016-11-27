$(function() {

  /*
	Activation d'isotope pour l'alignement automatique
  */

  $('#contenu').isotope({

		itemSelector: '.col-lg-12',
		layoutMode: 'masonry',
		filter:'*',
			animationOptions: {
				duration:500,
				easing:'linear',
				queue:false
			}

	});




  // Filtre projets/vignettes
	//système de menu à remplacer avec la bonne div
	$('#controls li a').click(function() {
	//système de classe selecta
	$('#controls li').removeClass('SELECTA2');
	$(this).parent().addClass('SELECTA2');



	var MONPTIT_TOTO = $(this).attr('data-filtre');

	//.CARTE à remplacer avec le nom de classe choisie pour chaque vignette
	$('#contenu').isotope({
		itemSelector: '.col-lg-12',
		layoutMode: 'masonry',
		filter:MONPTIT_TOTO,
			animationOptions: {
				duration:500,
				easing:'linear',
				queue:false
			}
	});




	return false;

	});



});
