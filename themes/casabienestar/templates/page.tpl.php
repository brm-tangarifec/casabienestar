<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['banner']: Items for the banner content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */

?>
<?php
 render($page['content']['metatags']); 
?>
<header>

  <!--Header CB-->
   <!-- <div class="container-fluid login">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-2 hidden-xs"></div>
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
          <h2>Inicio de sesión</h2>
          <form id="login" method="">
            Usuario
            <div class="form-group">
              <label for="login-usuario">Usuario:</label>
              <input type="text" id="login-usuario" name="login-usuario" class="form-control">
            </div>
            Contraseña
            <div class="form-group">
              <label for="login-password">Contraseña: </label>
              <input type="text" id="login-password" name="login-password" class="form-control">
            </div>
            Recordarme
            <div class="checkbox">
              <label><input type="checkbox"> Recordar mi cuenta</label>
            </div>
            <button id="login-submit" type="button" class="btn btn-warning">Ingresar</button>
            <p>
              <a href="#">¿Olvidaste tu contraseña?</a> / Eres nuevo, <a href="registro.html">regístrate</a>


            </p>
          </form>
          <button type="button" class="btn btn-warning cerrar-login"><span class="glyphicon glyphicon-chevron-up"></span></button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-2 hidden-xs"></div>
      </div>
    </div> -->
    <!--/-Wrapper login-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <!--Logo-->
          <h1><a href="/fbappCasaBienestar/"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo-nestle.svg" alt="NESTLÉ&amp;reg; A gusto con la vida" class="img-responsive"></a></h1>
          <!--/-Logo-->
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
         <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
         <!--  Registro y Login -->
          <p class="helpers-registro">
            <a href="user/register">Registrarse</a> <!-- /  <a href="#" class="btn-login"> Iniciar sesión</a> -->

          </p>
          <!-- /-Registro y Login -->
        </div> 
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <!--País y buscador-->
          <p class="pais">
            Estás en el sitio de NESTLÉ&reg; Colombia

          </p>
         
            <div class="form-group">
              <!-- <input type="search" class="form-control"><span class="glyphicon glyphicon-search"></span>-->
              <?php print render($page['buscador']);?> 
             
            </div>
         
          <!--/-País y buscador-->
        </div>
      </div>
    </div>
  <!--Fin Header-->
    <!-- Menú home-->


    <div id="menu" class="container-fluid shadow-z-2 menu u-no-border">
     <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle button</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/"><img src="images/logo-nestle-blanco.svg" alt="NESTLÉ&amp;reg; A gusto con la vida" class="img-responsive logo-franja"></a>
              </div>
                <div id="navbar" aria-expanded="false" class="navbar-collapse collapse">



                    <?php $menu = menu_navigation_links('menu-casabienestar');
                      print theme('links__menu_casabienestar', array('links' => $menu,'attributes' => array('class' => array('nav navbar-nav'))));
                    ?>
                   <ul class="nav navbar-nav navbar-right">
                       <li class="social-link social-links-facebok"><a href="https://www.facebook.com/nestle.colombia" rel="nofollow" target="_blank"><span class="fa fa-facebook"></span></a></li>
                       <li class="social-link social-links-twitter"><a href="https://twitter.com/NestleColombia" rel="nofollow" target="_blank"><span class="fa fa-twitter"></span></a></li>
                       <li class="social-link social-links-youtube"><a href="https://www.youtube.com/user/Nestlecol" rel="nofollow" target="_blank"><span class="fa fa-youtube"></span></a></li>
                    </ul>

                       </div>
                     </div> <!-- .section, /#navigation -->

          </div>
        </nav>
      </div>

    </div>


    <!--Fin del menú del home-->

    </header>

<!--Banners-->
<section>
    <!--Slider-->
    <div class="container-fluid u-no-border">
      <div class="row max-width">
        <div class="col-lg-12 carrusel">
          <div id="carrusel-ppal" data-ride="carousel" class="carousel slide">
            <!--bullets-->
            <!-- <ol class="carousel-indicators">
              <li data-target="#carrusel-ppal" data-slide-to="0" class="active"></li>
              <li data-target="#carrusel-ppal" data-slide-to="1"></li>
              <li data-target="#carrusel-ppal" data-slide-to="2"></li>
            </ol> -->
            <!--wrapper -->
            <div role="listbox" class="carousel-inner">
              <!--item-->
              <?php print render($page['banner']); ?>
              <!--item-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/-Slider-->
  </section>
<!--Fin Banners-->
<!--Acá se pone el contenido-->
<section>
	 <?php
         //Campos vista nutricion
         $view = views_get_view_result('view_nutricion', 'default', array(arg(0)));
         $contenidoArt=$view[0]->_field_data[nid][entity];

          $shareN=views_get_view('view_nutricion');
          $contShN=toArray($shareN);
          $accesoSh=$contShN['display']['default']['display_options']['fields']['sharethis'];
      /*echo "<pre>";

print_r($contShN);




          //var_dump($accesoSh); // returns null so I cannot use your suggestion

          echo "</pre>";
*/

         //Campos vista salud
         $viewsalud = views_get_view_result('view_salud', 'default', array(arg(0)));
         $contenidoSalud=$viewsalud[0]->_field_data[nid][entity];

          //Campos vista bienestar
         $viewbienestar = views_get_view_result('view_bienestar', 'default', array(arg(0)));
         $contenidoBienestar=$viewbienestar[0]->_field_data[nid][entity];
     ?>
    <!--Secciones Nutrición, Salud y Bienestar-->
    <div class="container-fluid">
      <div class="row">
        <?php print render($page['nutricion']); ?>

        <?php print render($page['salud']);?>
        
        <?php print render($page['bienestar']);?>
      </div>
    </div>
    <!--/-Secciones Nutrición, Salud y Bienestar-->
  </section>

<section>

</section>

<!--Nuestras Marcas-->

    <div class="container-fluid">
      <div class="row">
        <h2 class="text-center">Nuestras Marcas</h2>
        <div class="col-lg-12 carrusel-marcas">
          <?php print render($page['marcas']); ?>
         
        </div>
      </div>
    </div>
    <!--/-Nuestras Marcas-->



<!--Acá finaliza el contenido-->

<!--Sección Widgets Sociales-->
 <div class="container-fluid">
      <div class="row">
        <div class="widget widget-fb col-lg-4 col-md-4 col-sm-4 hidden-xs">
          <!-- Facebook -->
          <div class="icon-widget btn btn-info btn-fab btn-raised"><span class="fa fa-facebook"></span></div>
          <div style="width:100%;">
            <div data-href="https://www.facebook.com/nestle.colombia" data-small-header="false" data-adapt-container-width="true" data-width="500" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" class="fb-page"></div>
            <div class="fb-xfbml-parse-ignore">
              <blockquote cite="https://www.facebook.com/nestle.colombia"><a href="https://www.facebook.com/nestle.colombia">Nestlé</a></blockquote>
            </div>
          </div>
        </div>
        <div class="widget widget-tw col-lg-4 col-md-4 col-sm-4 hidden-xs">
          <!-- Twitter -->
          <div class="icon-widget btn btn-info btn-fab btn-raised"><span class="fa fa-twitter"></span></div>
         <!--  <div class="row">
           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><img src="<?php print base_path() . path_to_theme(); ?>/images/avatar-nestle.jpg" alt="Nestlé en Twitter" class="img-responsive img-circle">
             <p class="desc">
               Nestlé Colombia @NestleColombia

             </p>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="https://twitter.com/NestleColombia" data-size-value="default" data-show-count="false" data-show-screen-name="false" class="twitter-follow-button">Follow @NestleColombia</a></div>
         </div> -->
          <div class="row">
            <div class="col-lg-12">
              <a class="twitter-timeline" href="https://twitter.com/NestleColombia" data-widget-id="633660256560807936"  data-chrome="noborders noscrollbar transparent noheader" data-tweet-limit="1">Nestlé Colombia.</a>

            </div>
            <!-- <div class="col-lg-12">
              <hr>
              <p class="tweet-stats">1,123 RETWEETS  1,203 FAVORITES</p>
              <hr>
            </div>
            <div class="col-lg-12">
              <p class="tweet-actions"><span class="fa fa-reply"></span><span class="mdi-action-cached"></span><span class="mdi-action-grade"></span><span class="glyphicon glyphicon-option-horizontal"></span></p>
            </div> -->
                      </div>
        </div>
        <div class="widget widget-yt col-lg-4 col-md-4 col-sm-4 hidden-xs">
          <!-- YouTube -->
          <div class="icon-widget btn btn-danger btn-fab btn-raised"><span class="fa fa-youtube"></span></div>
          <div class="row">
            <div class="col-lg-12">
              <div data-channel="Nestlecol" data-layout="full" data-count="false" class="g-ytsubscribe"></div>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/Ms-cvKwkgu8" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/-Sección Widgets Sociales-->

    <div id="fb-root"></div>
   
    <!--Footer-->
     <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <ul class="footer-list">
            <li><a href="/fbappCasaBienestar/politicas-privacidad">Políticas de privacidad</a></li>
            <li><a href="http://corporativa.nestle.com.co/" target='_blank'>Ver información corporativa</a></li>
            <li><a href="/fbappCasaBienestar/politicas-datos">Política de tratamiento de datos personales</a></li>
          </ul>
          <p>NESTLÉ&reg; Colombia 2015 - Todos los derechos reservados</p>

        </div>
      </div>
    </div>
  </footer>
  <!--/-Footer-->
  <!--Scripts-->
  <script>
    $(document).ready(function() {
      // This command is used to initialize some elements and make them work properly
      $.material.init();
    });
  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <script src="https://apis.google.com/js/platform.js"></script>
  <!-- /#page, /#page-wrapper -->
 <!--Fin Footer-->