//Función para check de selección de preferencias en el registro
$(document).on("click", ".boton-brand", function () {
		//Variable que almacena la opción que fue clickeada
		var idCheck = $(this).attr('data-box');
		//Dejar "chulo" activo sobre el elemento
		$(this).addClass("active");
		//console.log(idCheck);
		//Check en la preferencia
		$('#'+idCheck).prop('checked', true);
		//Quitar clases para deseleccionar checkbox
		if($(this).hasClass('active-equis')){
		$(this).removeClass("active");
		$(this).removeClass("active-equis");
		//Quitar seleccion de checkbox
		$('#'+idCheck).prop('checked', false);
		//console.log(idCheck+" adios check");
		}


});
//Funcion que muestra X para quitar selección
$(document).on("mouseover", ".boton-brand", function () {
		if($(this).hasClass('active')){
			$(this).addClass("active-equis");
		}

});
//Funcion que quita X para quitar selección
$(document).on("mouseout", ".boton-brand", function () {
		if($(this).hasClass('active-equis')){
			$(this).addClass("active");
			$(this).removeClass("active-equis");

		}

});

//Funcion para volver arriba
$(document).on("click", "#btn-up", function () {

		// $(window).scrollTop(0);
		var opacity=1.3-($(window).scrollTop()/500);
		if(opacity>1)opacity=1;
		if(opacity<0)opacity=0;$('#btn-up').fadeTo(10,opacity);

		$('html,body').animate({scrollTop:$(window).scrollTop()-5000+'px'},1000);
		$(".up").removeClass('animated fadeInUp');


});



//Funciones y animaciones del sitio web
$(document).on("ready", function () {
	var count=0;
	jQuery('#compartirN').on('click',function(){
		count++;
		console.log(count);
		if(count==1){
			$('.botones-redes-wrapper').show('fade').share({
        networks: ['facebook','googleplus','twitter'],
    	});
			count++;
			console.log(count);
		}else{
			count=2;
		}
		console.log(count);

		jQuery(".pop").on("click", function () {
			count =0;
			$('.botones-redes-wrapper').hide('fade');
			$('.botones-redes-wrapper').html("");
		});

	});

	jQuery('.module-box .fa-share-alt').on('click',function(){




		var link = "http://fbapp.brm.com.co";

	//Clase a la cual se le da el link
		//Variable que recoge el href del módulo donde se está dando click		
		var j= jQuery(this).parent().parent().next().find("a").attr('href');

    
		count++;
		//console.log(count);
		if(count==1){

			/*Generación de los botones para compartir*/

			jQuery(this).parent().prev().show("fade").html('<a href="javascript:;" title="Share this page on facebook" class="pop share-icon share-icon-facebook" data-share="fb" rel="nofollow"></a><a href="javascript:;" title="Share this page on googleplus" class="pop share-icon share-icon-googleplus" data-share="g+"></a><a href="javascript:;" title="Share this page on twitter" class="pop share-icon share-icon-twitter" data-share="tw"></a>');

			var urlShare= link + j;
    		oli=urlShare;

    		var data;
    		

  
				//Share();

			jQuery(".pop").click(function () {

				data = jQuery(this).attr('data-share');
				console.log(data);

				//Funcion compartir facebook
				if(data=='fb'){
					Share();
					$('.botones-redes-wrapper').hide('fade');
					$('.botones-redes-wrapper').html("");
					count=0;
				}else if(data=='tw'){
					urlTw="https://twitter.com/share?url="+oli;
					window.open(urlTw,'toolbar=0,resizable=1,status=0,width=640,height=528');
					$('.botones-redes-wrapper').hide('fade');
					$('.botones-redes-wrapper').html("");
					count=0;
					return false;
				}else if(data=='g+'){
					urlG="https://plusone.google.com/_/+1/confirm?hl=en&url="+oli;
					window.open(urlG,'toolbar=0,resizable=1,status=0,width=640,height=528');
					$('.botones-redes-wrapper').hide('fade');
					$('.botones-redes-wrapper').html("");
					return false;
					count=0;
				}
			});

			//Click sobre los botones de redes sociales
    	
			count++;
			return false;
		}else{
			count=2;
		}
		

		jQuery(".pop").on("click", function () {
			count =0;
			$('.botones-redes-wrapper').hide('fade');
			$('.botones-redes-wrapper').html("");
		});

	});

	//Url que se cambia según el servidor
	
	


			


	//Sticky menu
	 $("#menu").affix({
							offset: {
									top: 100
						}
					});

				//Animacion de entrada para fijar menu

				$("#menu").on('affixed.bs.affix', function () {

						$(this).addClass('animated fadeInDown');


				});

				//removemos animacion
				$("#menu").on("affixed-top.bs.affix", function () {
						$(this).removeClass('animated fadeInDown');
				});

			//slide de login
			// Abrimos el panel de login
			$(".btn-login").on("click", function () {

				$(".login").addClass('animated slideInDown').slideDown();
				// $(".login").slideDown();

			});

			//Cerramos el panel de login

			$(".cerrar-login").on("click", function () {
				 $(".login").removeClass('animated slideInDown').slideUp();
			});

		//Fuciones de scroll
		$(window).scroll(function() {

		//Ocultamos boton volver arriba
		 if (  $(window).scrollTop() >= 980 ) {

		 	$(".up").removeClass('animated fadeInUp');
		 }


		//Mostramos boton volver arriba
		 if ( $(window).scrollTop() > 1500 && !$(".up").hasClass('animated')  ) {

		 		$(".up").addClass('animated fadeInUp');


		 }

		});

});





$(document).ready(function(){

	var currentURL = window.location.pathname;
	 	var nutricion = currentURL.slice(-1);
	 	var lg = currentURL.slice(-9);
	 	//console.log(currentURL);
	 	

	jQuery('.menu-534 > a').html("<img src='/fbappCasaBienestar/sites/all/themes/casabienestar/images/logo-nestle-blanco.svg' alt='NESTLÉ&amp;reg; A gusto con la vida' class='img-responsive'>");

	$(".st_email_custom").addClass("fa fa-paper-plane");
	$(".st_sharethis_custom").addClass("fa fa-share-alt");
	//$(".sharethis-wrapper").addClass("col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action <span class="fa fa-paper-plane" displayText="email">");
	//$(".vermas").appendTo(".wrapper-vermas");
	//$(".sharethis-wrapper").wrap( "<div class='row' >");
	$(".article-action").wrap( "<div class='shareThis' >");
	$(".article-action").html( '</span><span class="fa fa-share-alt" displayText="sharethis"></span>');
	jQuery('.shareThis').prepend('<div class="botones-redes-wrapper" style="display:none"></div>')


	//Se agrega clase responsive a las imagenes de cada box de contenido
	jQuery(".img-wrapper > a > img").addClass("img-article img-responsive");
		jQuery('.item > img').removeAttr('width');
		jQuery('.item > img').removeAttr('height');
	//Se agrega clase responsive a las imagenes grandes de las internas de cada artículo
	jQuery(".img-article img").addClass("img-responsive");

	if(nutricion=='/'){
		$('.module-box-nutricion > h2').wrap('<div class="title">');
		$('.module-box-salud > h2').wrap('<div class="title">');
		$('.module-box-bienestar > h2').wrap('<div class="title">');
		

	}

	jQuery('#edit-field-imagen-perfil-und-0-upload-button').addClass('btn btn-primary');
	jQuery('#edit-submit').addClass('btn btn-warning');

	

});



//Widget de FB
window.fbAsyncInit = function() {
    FB.init({
      appId      : '681271491974457',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=681271491974457";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


//Widget de Twitter
window.twttr = (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0],
		t = window.twttr || {};
	if (d.getElementById(id)) return t;
	js = d.createElement(s);
	js.id = id;
	js.src = "https://platform.twitter.com/widgets.js";
	fjs.parentNode.insertBefore(js, fjs);

	t._e = [];
	t.ready = function(f) {
		t._e.push(f);
	};

	return t;
}(document, "script", "twitter-wjs"));

$("#carrusel-marcas").carousel({
	interval: false

});


/*Funcion para compartir en facebook*/
var oli;
function Share(url) {
  FB.ui({
  method: 'share_open_graph',
  action_type: 'og:share',
  action_properties: JSON.stringify({
      object: oli,
  })
}, function(response){});
}




