// Aqui vai todo nosso código JavaScript

// Função menu Mobile
$(function() {
	$('nav.mobile').click(function() {
		var listaMenu = $('nav.mobile ul');
		/*
		if(listaMenu.is(':hidden') == true) {
			listaMenu.fadeIn();
		} else {
			listaMenu.fadeOut();
		}
		*/
		//listaMenu.slideToggle(); Abrir ou fechar o menu

		if(listaMenu.is(':hidden') == true){
			//fa fa-times
			//fa fa-bars
			//var icone =  $('.botao-menu-mobile i');
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-circle-xmark');
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-circle-xmark');
			icone.addClass('fa-bars');
			listaMenu.slideToggle();
		}
	})
/*--------------------------------------------------------------------------------------------*/

// função de descida (Scroll dos elementos depoimentos, serviços, contato, etc....)
if($('target').length > 0){
	
	var elemento = '#'+$('target').attr('target');

	var divScroll = $(elemento).offset().top;

	$('html,body').animate({scrollTop:divScroll},2000);
}

/*------------------------------------------------------------------------------------------*/

// Função DO MAPA
async function initMap() {
	const { Map } = await google.maps.importLibrary("maps");
	const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
	const map = new Map(document.getElementById("map"), {
	center: { lat: -23.400591, lng: -45.884715 },
	zoom: 14,
	mapId: "4504f8b37365c3d0",
	});
	
	const draggableMarker = new AdvancedMarkerElement({
	map,
	position: { lat: -23.400591, lng: -45.884715 },
	gmpDraggable: true,
	title: "Meu escritório",
	});

	AdvancedMarkerElement(-23.400591,-45.884715,'', "Meu escritório",undefined,false);
	
	// draggableMarker.addListener("click", (event) => {
	// Remove AdvancedMarkerElement from Map
	// draggableMarker.map = null;
	// });

	
	
	map.addListener("click", (event) => {
	
	draggableMarker.position = event.latLng;
	draggableMarker.map = map;
	});
	}
	
	initMap();
	



}) // Fim Function (Função total) total
