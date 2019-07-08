$(document).ready(function(){ 

	// afficher/cacher les sous-menus au survol de la souris
	$(".nav-item.dropdown").mouseover(function(){
		$(this).addClass("show");
		$(this).children(".dropdown-menu").addClass("show");
	}).mouseout(function(){
		$(this).removeClass("show");
		$(this).children(".dropdown-menu").removeClass("show");
	});

	// ORGANISATION clic sur service 
	$("#orga-services li").click(function(){
		$("#orga-services li").removeClass("selected");
		$(this).addClass("selected");
		$(".orga-user").addClass("d-none");// desactive tous les evenements
		var serviceSelect = ".orga-user[data-service='" + this.id +"']";
		$(serviceSelect).removeClass("d-none"); // active les evenements du module selectionné
	});

	// ACTUALITE clic sur catégorie 
	$("#actu-list li").click(function(){
		if(this.id == "all"){
			$(".un-article").removeClass("d-none");// active toutes les actualites
		}else{
			$(".un-article").addClass("d-none");// desactive toutes les actualites
			var categorieSelect = ".un-article[data-categorie='" + this.id +"']";
			$(categorieSelect).removeClass("d-none"); // active les actualites de la categorie selectionnée
		}
	});

	//$(".popin").removeClass("d-none");

	// HEBERGEMENT afficher la fiche hebergement clic sur En savoir plus
	$(".hebergement-photo-hover button").click(function(){
		//$(".popin").addClass("popin-visible");
		$(".popin").removeClass("d-none");
		setTimeout(function(){$(".popin").addClass("popin-visible")}, 100);
	});

	// FORMATION afficher la fiche formation clic sur EN SAVOIR +
	$(".ma-formation-photo-hover button").click(function(e){
		//$(".popin").addClass("popin-visible");
		$(".popin").removeClass("d-none");
		setTimeout(function(){$(".popin").addClass("popin-visible")}, 100);
		e.stopPropagation();
	});
	// FORMATION mobile afficher "en savoir +" au clic
	$(".ma-formation").click(function(){
		$(this).find(".ma-formation-photo-hover").toggleClass("visible");
	}).mouseleave(function(){
		$(this).find(".ma-formation-photo-hover").removeClass("visible");
	});

	// cacher les fiches popin - btn close
	$(".popin .fiche button.close ").click(function(){
		$(this).parents(".popin").removeClass("popin-visible");
		setTimeout(function(){$(".popin").addClass("d-none")}, 300);
	});
	// cacher les fiches popin - clic hors fiche
	$(".popin .popin-bg").click(function(){
		$(this).parents(".popin").removeClass("popin-visible");
		setTimeout(function(){$(".popin").addClass("d-none")}, 300);
	});
	// cacher les fiches popin - glisser vers la gauche jquery mobile
	$(".popin").on("swipeleft", function(){
		$(this).removeClass("popin-visible");
		setTimeout(function(){$(".popin").addClass("d-none")}, 300);
	});

	// img-clic pour la galerie des installations sportives
	$(".install-sport .img-clic").click(function(){
		var src = $(this).children("img").attr("src");
		$(this).parent().find("img").first().attr("src", src);
	});

	// selection d'un critere
	$(".choix-pole li").click(function(){
		$(this).toggleClass("selected");
	});

	// slick-normal 
	$(".slick-normal").slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: 
		[
			{
				breakpoint: 991.5,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 575.5,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false
				}
			},
		]
	});

	// slick-normal 
	$(".slick-4").slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		variableWidth: true,
		responsive: 
		[
			{
				breakpoint: 991.5,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 575.5,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false
				}
			},
		]
	});

});

// calcul la position du menu lors du resize de page
// fixe le menu en haut de page
positionNavbar();
$(window).resize(function(){
	positionNavbar();
}).scroll(function(){
	if(!$('#header-nav').hasClass("fixed-nav") && ($(window).scrollTop() > $('#header-nav').data("top"))){
		$('#header-nav').addClass("fixed-nav");
	}else if($('#header-nav').hasClass("fixed-nav") && ($(window).scrollTop() < $('#header-nav').data("top"))){
		$('#header-nav').removeClass("fixed-nav");
	}
});

function positionNavbar(){
	if($(window).width() < 767.5){
		$('#header-nav').data("top", 305);
	}else{
		$('#header-nav').data("top", 125);
	}
}