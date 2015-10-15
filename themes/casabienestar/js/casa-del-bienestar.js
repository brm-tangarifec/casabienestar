//Función para check de selección de preferencias en el registro

jQuery(document).on('click','.tipoc',function(){
	
	var Tcontenido = $(this).attr('data-contenido');
	var chequea = jQuery(this).attr('data-iden');
	

	/*Selecciona y selecciona las preferencias padre*/
	
		/*console.log(chequea);*/
		var chequear=jQuery('#edit-field-contenido-preferencias-und-'+chequea);
		if(jQuery(chequear).prop('checked')==true){
			jQuery('.show-'+Tcontenido).addClass('hidden');
			jQuery('#edit-field-contenido-preferencias-und-'+chequea).prop('checked',false);
						
		}else{
			jQuery('#edit-field-contenido-preferencias-und-'+chequea).prop('checked',true);
			jQuery('.show-'+Tcontenido).removeClass('hidden');
		}

		if(jQuery('.show-'+Tcontenido).hasClass('hidden')){
			jQuery( '.show-'+Tcontenido + ' input' ).prop("checked", false);
			//console.log("me quite ");
			$("div").find('input:checkbox').each(function() {
   			 $(this).prop("checked", false);
   			 $(".boton-brand").removeClass("active");
			});
		}
	
});
$(document).on("click", ".boton-brand", function () {
		//Variable que almacena la opción que fue clickeada
		var idCheck = $(this).attr('data-box');
		var chequea = jQuery(this).attr('data-iden');
		var chequear=jQuery('#edit-field-contenido-preferencias-und-'+chequea);		
		//Dejar "chulo" activo sobre el elemento
		$(this).addClass("active");
		//console.log(chequea);
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


		if(jQuery(chequear).prop('checked')==true){
			jQuery('#edit-field-contenido-preferencias-und-'+chequea).prop('checked',false);
		}else{
			jQuery('#edit-field-contenido-preferencias-und-'+chequea).prop('checked',true);
		}

});
/*Se preseleccionan las preferencias en el perfil de usuario*/
jQuery(document).ready(function(){
	jQuery('.preferenciasO').find('input:checkbox').each(function(){
		 var input = $(this).attr('id');
    	 var parte = input.split('-');
    	 if(jQuery('#'+input).prop("checked")==true){
    	 	jQuery('.tipoc').removeClass('active');
    	 	jQuery('div[data-iden="'+parte[5]+'"]').addClass('active');
    	 	/*Activa las categorias*/
    	 	if(jQuery(parte[5]=='1')){
    	 		jQuery('.show-nutricion').removeClass('hidden');
    	 	}
    	 	if(jQuery(parte[5]=='2')){
    	 		jQuery('.show-salud').removeClass('hidden');
    	 	}
    	 	if(jQuery(parte[5]=='3')){
    	 		jQuery('.show-bienestar').removeClass('hidden');
    	 	}
    	 }

		 
	});
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
	var dominio= window.location.protocol+'//'+window.location.hostname;
	//console.log(dominio);
	var count=0;
	jQuery('#compartirN').on('click',function(){
		count++;
		console.log(count);
		if(count==1){
			$('.botones-redes-wrapper').show('fade').share({
        networks: ['facebook','googleplus','twitter','email'],
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




		//var link = "http://fbapp.brm.com.co";

		var link = dominio;
		

	//Clase a la cual se le da el link
		//Variable que recoge el href del módulo donde se está dando click		
		var j= jQuery(this).parent().parent().next().find("a").attr('href');
		var tituloArticle= jQuery(this).parent().parent().parent().find("h3").text();
		tituloArticle=jQuery.trim(tituloArticle);
    
		count++;
		//console.log(count);
		if(count==1){

			/*Generación de los botones para compartir*/

			jQuery(this).parent().prev().show("fade").html('<a href="javascript:;" title="Share this page on facebook" class="pop share-icon share-icon-facebook" data-share="fb" rel="nofollow"></a><a href="javascript:;" title="Share this page on googleplus" class="pop share-icon share-icon-googleplus" data-share="g+"></a><a href="javascript:;" title="Share this page on twitter" class="pop share-icon share-icon-twitter" data-share="tw"></a><a href="javascript:;" title="Share this on email" class="pop share-icon share-icon-email" data-share="mail"></a> ');
			
			var urlShare= link + j;
    		oli=urlShare;

    		var data;
    		var gmail;

    		var meta = $(document).find("");
		    		var sendGmail = function(opts){
		   			 var recipient = '',
    					 subject   = 'Mira éste contenido en NESTLÉ&reg; Colombia',
     					message  = tituloArticle+ '\n' + ' '+oli;



						gmail= 'http://mail.google.com/mail/?view=cm&fs=1'+
               			 '&to=' + recipient +
               			 '&su=' + subject +
                			'&body=' + message + 
                			'&ui=1';
					}
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
				}else if(data=='mail'){
					sendGmail();
					window.open(gmail,'toolbar=0,resizable=1,status=0,width=640,height=528')
					
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
	var url = jQuery('.view-recetario-videos li:first .cod_youtube .field-name-field-codigo-video').text();
	jQuery('.view-recetario-videos .view-header #repro_youtube').html('<div class="embed-responsive embed-responsive-16by9"><iframe id="ytplayer" type="text/html" width="500" height="390"src=//www.youtube.com/embed/'+url+'?autoplay=1"frameborder="0" class="embed-responsive-item"></iframe></div>');

	$('.content_video_biges').html('<iframe id="ytplayer" type="text/html" width="500" height="390"src=//www.youtube.com/embed/'+url+'?autoplay=1"frameborder="0"/>');

	jQuery('.view-recetario-videos li').click(function(){
		var cod = jQuery(".field-name-field-codigo-video",this).text();
		jQuery('.view-recetario-videos .view-header #repro_youtube').html('<div class="embed-responsive embed-responsive-16by9"><iframe id="ytplayer" type="text/html" width="500" height="390"src=//www.youtube.com/embed/'+cod+'?autoplay=1"frameborder="0" class="embed-responsive-item"></iframe></div>');
	});

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


	jQuery('.image-widget-data input[type="submit"]').addClass('btn btn-primary');
	jQuery('#edit-submit').addClass('btn btn-warning');

	/*Funciones que se va a utilizar para el multiplicador de receta*/

	var cant = $(".field-name-field-receta-ingrediente-cantida");
	var medida= jQuery('.field-name-field-receta-ingrediente-lista');
	
	//console.log(medida);

	
   jQuery('#cantReceta').change(function(){
   	var cantidad = jQuery('#cantReceta').val();
   	var cantIni = jQuery('#cantInicial').val();
   	/*Toma la medida*/



   	$(".table-responsive div div").each(function(){

		var text=$(this).text();
		//console.log(text.replace(/\s+/g, ''));

		textClean=text.replace(/\s+/g, '');

		//console.log(textClean);
		var divi = textClean/cantIni;
		//console.log(cantIni);
		//console.log(divi);

		var mult=(divi*cantidad);

		if(mult % 1 === 0){
			$(this).text(mult);
			
		}else{
			$(this).text(mult.toFixed(2));
		}

		
	 	jQuery('#cantInicial').val(cantidad);

	});
   });
	

	

	

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

/*Validación de formularios*/

jQuery(document).ready(function(){

jQuery('form').each(function(){
    jQuery(this).validate({

    	errorClass: "text-danger",
	errorPlacement: function(error, element) {
    	error.insertAfter(element);
    	element.focus();
		},
			rules: {
				name: {
					required: true,
				},

				pass: {
					required: true,
				},
				mail : {
					required: true,
					email: true
				}

			},
			messages: {
				name: {
					required: 'El campo no debe estar vacío',
				},
				pass: {
					required: 'El campo no debe estar vacío',
				},
				mail : {
					required: 'El campo no debe estar vacío',
					email: 'Ingrese un formato de e-mail válido'
					
				}
			}

    });

   
});

 jQuery("#edit-keys-6").rules("add", {
         required:true,
         messages: {
                required: "Ingrese un valor para su búsqueda"
         }
 });


var currentURL = window.location.href;
	 	var hs = currentURL.slice(-8);
	 	console.log(hs);
if(hs=='register'){

/*se agrega un metodo de validacion llamdo string; se encarga de
	* validar que las cadenas de caracteres ingresadas no contengan
	* caracteres especiales.
	*/
	jQuery.validator.addMethod("string", function(value, element)
    {
        return this.optional(element) || /^[a-z" "ñÑáéíóúÁÉÍÓÚ,.;]+$/i.test(value);
    });
 jQuery("#edit-field-nombres-und-0-value").rules("add", {
         required:true,
         string: true,
         messages: {
                required: "El campo no debe estar vacio",
                string: "El nombre no debe contener caracteres numéricos o especiales",
         }
 });
 jQuery("#edit-field-apellidos-und-0-value").rules("add", {
         required:true,
         string: true,
         messages: {
                required: "El campo no debe estar vacio",
                string: "El nombre no debe contener caracteres numéricos o especiales",
         }
 });

}
 



/*Clases para filtros*/
$("#edit-reset").addClass('btn btn-primary');

/*CAmbios en el filtro*/
$(".form-select").change(function () {

	

	window.setTimeout(function () {
		$(".view-recetario-1er-tiempo").addClass('hidden');
		$(".view-id-recetario .view-content").addClass('show');
		$("#edit-reset").addClass('btn btn-primary');
	console.log("oli");
	},10000);
});

/*var textOption = jQuery("#edit-field-momentos-tid option:first").text();
var textTitu = jQuery("#edit-field-momentos-tid-wrapper label:first").text();
if(textOption == "- Any -"){
	jQuery("#edit-field-momentos-tid option:first").text(textTitu);
}
var textOption1 = jQuery("#edit-field-tipo-tid option:first").text();
var textTitu1 = jQuery("#edit-field-tipo-tid-wrapper label:first").text();
if(textOption1 == "- Any -"){
	jQuery("#edit-field-tipo-tid option:first").text(textTitu1);
}
var textOption2 = jQuery("#edit-field-marcas-tid option:first").text();
var textTitu2 = jQuery("#edit-field-marcas-tid-wrapper label:first").text();
console.log(textTitu2);
if(textOption2 == "- Any -"){
	jQuery("#edit-field-marcas-tid option:first").text(textTitu2);
}

var textOption2 = jQuery("#edit-field-tiempo-rango-tid option:first").text();
var textTitu2 = jQuery("#edit-field-tiempo-rango-tid-wrapper label:first").text();
console.log(textTitu2);
if(textOption2 == "- Any -"){
	jQuery("#edit-field-tiempo-rango-tid option:first").text(textTitu2);
}*/

/*jQuery(".view-id-recetario view-content").css('display','none');
jQuery(".form-item-field-momentos-tid select").delegate( "option", "change", function() {
  jQuery(".view-id-recetario view-content").css('display','block');
  jQuery(".view-recetario-1er-tiempo").css('display','none');
  
});*/


/*Contador redes sociales*/
var graph = window.location.href;
var conteoFB;
var conteoTW;
var contGeneral;
		
		/*Contador Facebook*/
      var urlFB='http://graph.facebook.com/';
      $.ajax({
        url: urlFB,
        dataType: 'json',
        data: 'id='+graph,
        success: function (data) {
        	
        	countFB=data.shares;

        	if(countFB!=0){
        		jQuery('.contFb').html(countFB);


        	}else{
        		jQuery('.contFb').html('0');
        	}
        	

        }

          
      });



      /*Contador Twitter*/
      var urlTw='http://cdn.api.twitter.com/1/urls/count.json';
      jQuery.ajax({

      	 url: urlTw,
        dataType: 'jsonp',
        data: 'url='+graph,
        success: function (data) {
        	
        	countTW=data.count;

        	if(countTW!=0){
        		jQuery('.contTw').html(countTW);

        	}else{
        		jQuery('.contTw').html('0');
        	}
        	

        }

      });


/*Boton imprimir receta*/
$(".fa-print").on("click", function () {
	window.print();
});



/*Funcion para obtener las palabras bloqueadas en la contraseña*/
var dominio= window.location.protocol+'//'+window.location.hostname;

		/*var urlBn=dominio;
      	jQuery.ajax({

      	url: urlBn,
        dataType: 'jsonp',
        data: dominio+'/lalistabanea',
        success: function (data) {
        	console.log(data);
        	

        }

      });*/




var baneoesto;

$.getJSON( dominio+'/fbappCasaBienestar/lalistabanea', function( data ) {
  
  baneoesto = data;
		
}); 
	jQuery('.password-field').on('blur',function(){
		
		var pass=jQuery('input[name="pass[pass1]"]').val();
		
		if(jQuery.inArray(pass,baneoesto) !== -1) {
			
		   	jQuery('input[name="pass[pass1]"]').val('');
		    jQuery('.form-type-password').append('<label class="error">La contraseña no es válida</label>');

		}

	}); 

});



/*Sumador general de compartidos*/
jQuery(document).ajaxComplete(function( event,request, settings ) {
  	  setTimeout(function(){
  	  conteoFB=jQuery('.contFb').text();
      conteoTW=jQuery('.contTw').text();
      conteoFB = parseInt(conteoFB);
      conteoTW = parseInt(conteoTW);
 		contGeneral=conteoFB+conteoTW;
      	jQuery('.contador-general').html(contGeneral);
		}, 500);
           
      
});
