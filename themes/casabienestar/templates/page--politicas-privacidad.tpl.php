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
<header>

  <div class="container-fluid login">
   <!--Wrapper login-->
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
          <?php if($logged_in):?>
          
           <!-- <p class="nombre"> Hola  <?php print $user_profile['field_nombres'][0]['#markup']." ".$user_profile['field_apellidos'][0]['#markup']; ?></p>
           
          <a role="button" href="user/logout" class="btn btn-danger cerrar-login">Cerrar Sesión</a> -->
      
        <?php else: ?>
          <h2>Inicio de sesión</h2>
          <?php print $messages?>
          <?php print render($page['loggin']);?>

          <button type="button" class="btn btn-warning cerrar-login"><span class="glyphicon glyphicon-chevron-up"></span></button>
          <?php endif; ?>
      
          
        </div>
      </div>
    </div>
    <!--/-Wrapper login-->

      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 ">
          <!--Logo-->
          <h1><a href="/fbappCasaBienestar/"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo-nestle.svg" alt="NESTLÉ&amp;reg; A gusto con la vida" class="img-responsive"></a></h1>
          <!--/-Logo-->
        </div>
        <!-- <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div> -->
         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
         <!--  Registro y Login -->

         <p class="helpers-registro">
         <?php if($logged_in):?>
          
           <a href="user/">Ver Perfil</a> /  <a href="user/logout" class="text-danger">Cerrar sesión</a>
  
      
        <?php else: ?>

 
            <a href="user/register">Registrarse</a> /  <a href="#" class="btn-login"> Iniciar sesión</a>

          </p>

          <?php endif; ?>
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
   <!--Menú home-->

    <?php if ($main_menu /*|| $secondary_menu*/): ?>
    <div id="menu" class="container-fluid shadow-z-2 menu u-no-border">
     <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle button</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/fbappCasaBienestar/"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo-nestle-blanco.svg" alt="NESTLÉ&amp;reg; A gusto con la vida" class="img-responsive logo-franja"></a>
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
                     </div> <!-- /.section, /#navigation -->

          </div>
        </nav>
      </div>

    </div>


    <?php endif; ?>
    <!--Fin del menú del home-->
    </header>

    <!--Sección politicas-->
      <section>
    <div class="container-fluid">
      <div class="row">
        <article class="col-lg-12">
          <h1>Políticas de privacidad de NESTLÉ&reg; Colombia</h1>
          <p>
            Esperamos que aprenda más sobre NESTLÉ&reg; y nuestros productos.
            
          </p>
          <p>
            NESTLÉ&reg; respeta su derecho a la privacidad en el mundo en línea cuando use nuestra página y se comunique electrónicamente con nosotros. Aplicamos todas las medidas necesarias para mantener segura toda la información personal que nos suministre. Es fundamentalmente importante que usted esté informado de que NESTLÉ&reg; S.A. es el controlador de datos (remítase a la pregunta 18 de este Aviso) de su información personal. Los principios establecidos en este Aviso de Privacidad se aplican a todos los controladores de datos del Grupo NESTLÉ&reg;. Nos planteamos un número de preguntas claves que consideramos que usted debe tener respuesta sobre información personal que entregue a NESTLÉ&reg;. Estas respuestas le informarán de sus derechos referentes a información personal y las medidas que toma Nestlé para mantener la privacidad y seguridad de esta información personal. Confiamos en que esta información sea útil.
            
          </p>
          <p>
            Si tiene alguna solicitud sobre su información personal o alguna consulta sobre estas prácticas, por favor contactar a Nestlé de Colombia S.A. al correo electrónico <a href="mailto:servicio.consumidor@co.nestle.com">servicio.consumidor@co.nestle.com</a> o a la línea gratuita 018000 515566.
            
            
            
          </p>
          <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
            <div class="panel panel-default">
              <div id="headingOne" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">P1- ¿Qué tipo de información personal reúne NESTLÉ&reg; a través de este sitio en Internet y cómo lo recaba?</a></h4>
              </div>
            </div>
            <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
              <div class="panel-body">
                <p>
                  R. Solo reunimos información personal que USTED sedea suministrarnos o que se necesite dar (y mejorar) para servirle a usted. Reunimos información personal directa tal como el nombre, dirección física y la de correo electrónico así como información indirecta tal como cookies; conexión e información de sistema. Usted puede, si quiere, darnos su dirección electrónica, el nombre, número de teléfono y demás datos de forma que podamos entregarle información sobre nuestros productos; anotarlo en nuestros concursos o estudios, o simplemente para mantenerlo actualizado sobre los eventos de NESTLÉ&reg; en los cuales esté interesado. Alternativamente, puede que usted quiera hacer carrera con NESTLÉ&reg; y presentarse a vacantes colocando su hoja de vida en los sitios de NESTLÉ&reg; de contratación en línea. Usted puede confiar en que NESTLÉ&reg; tome todas las medidas necesarias para conservar la información personal que nos envíe como privada y de forma segura.
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading2" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">P2 - ¿Cómo hace NESTLÉ&reg; para mantener segura su información personal?</a></h4>
              </div>
            </div>
            <div id="collapse2" role="tabpanel" aria-labelledby="heading2" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. NESTLÉ&reg; adopta todas las medidas necesarias para conservar su información personal privada y segura. Solamente el personal autorizado del Grupo NESTLÉ&reg;, el personal de otras compañías (por Ej., proveedores de servicios) o el personal autorizado de los socios comerciales (quienes por contrato han acordado mantener segura toda la información) acceden a su información personal. Todo el personal de NESTLÉ&reg; que tiene acceso a su información personal debe adherirse a la Política de Privacidad del Grupo NESTLÉ&reg; y los empleados de terceros que accedan a su información personal han firmado contratos de confidencialidad. Además, los contratos firmados con compañías terceras que acceden a su información personal, garantizan que esta información se mantenga segura. Para asegurar la protección de su información personal, NESTLÉ&reg; mantiene un ambiente de tecnología de la información segura y tienen las medidas apropiadas para impedir el acceso no autorizado (por ejemplo hacking). Favor remítase a la P4 - ¿A quién revelará el Grupo NESTLÉ&reg; su información personal y por qué?
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading3" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">P3 - ¿Con qué fines usa NESTLÉ&reg; su información personal?</a></h4>
              </div>
            </div>
            <div id="collapse3" role="tabpanel" aria-labelledby="heading3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. Su información personal se usará para los mismos fines que usted envió la información a NESTLÉ&reg;. También se usará para administrar, apoyar y obtener retroalimentación del nivel de nuestros servicios y para impedir que se viole la seguridad, la ley o los términos de nuestro contrato.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading4" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">P4 - ¿A quién revelará el Grupo NESTLÉ&reg; su información personal y por qué?</a></h4>
              </div>
            </div>
            <div id="collapse4" role="tabpanel" aria-labelledby="heading4" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. NESTLÉ&reg; nunca compartirá su información personal con compañías terceras que busquen usarla con fines de mercadeo a menos de que usted nos de el permiso específico de hacerlo. Para usarla en la política de NESTLÉ&reg; sobre: (i) mercadeo directo por correo electrónico; (ii) usted tiene derecho a pedirle a NESTLÉ&reg; en cualquier momento que NO lo contacte para mercadeo por correo electrónico directo, y (i.e.) también tiene derecho a que se borre su información personal de nuestros sistemas. Favor remitirse a las preguntas 8 y 5.
                  
                </p>
                <p>
                  NESTLÉ&reg; puede compartir su información personal con otras compañías del Grupo NESTLÉ&reg;. También puede que NESTLÉ&reg; comparta su información personal con terceros, pero solo en circunstancias estrictamente limitadas y establecidas a continuación: puede que le demos su información personal a terceros (tales como los proveedores de servicio de Internet) para que nos ayuden a administrar este sitio. Puede que algunos de estos socios comerciales esté localizados fuera del país desde el cual usted accedió al sitio. Nuestro principal proveedor de servicio para el hosting de la red está en Estados Unidos. Favor remítase a la P6 –“¿A qué países se enviará su información personal y por qué?” En todo momento los terceros mencionados brindarán el mismo nivel de seguridad a su información personal al igual que lo hace NESTLÉ&reg; y, cuando se requiere, están obligados por un contrato jurídico a mantener su información personal de forma privada, segura y solo procesarla conforme a las instrucciones específicas de NESTLÉ&reg;.
                  
                </p>
                <p>
                  - También podemos darle su información personal a las entidades del gobierno y a las agencias de cumplimiento de la ley o si según nuestro criterio, tal acción es razonablemente necesaria para cumplir con un proceso legal, para responder a acciones o demandas legales o para proteger los derechos del Grupo NESTLÉ&reg;, de sus clientes y del público.
                  
                </p>
                <p>
                  En unas limitadas circunstancias, puede que les demos la información personal suya a compradores potenciales de algún negocios relevante de NESTLÉ&reg; pero previsto que (i) por contrato hayamos garantizado que esta información se mantenga confidencial y segura; y (ii) que al dar su información personal NESTLÉ&reg; está cumpliendo con las leyes locales aplicables.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading5" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">P5 - ¿Cómo puedo ver, verificar, cambiar o borrar la información personal que nos envió?</a></h4>
              </div>
            </div>
            <div id="collapse5" role="tabpanel" aria-labelledby="heading5" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. En una serie de países usted tiene el derecho a pedirle a las compañías (tale como NESTLÉ&reg;) que le de toda la información que almacena sobre usted. Ciertas leyes nacionales pueden requerir que usted pague una pequeña suma por este proceso. También puede hacer que su información sea borrada, corregida o revisada, enviando un correo electrónico al <a href="mailto:servicio.consumidor@co.nestle.com">servicio.consumidor@co.nestle.com</a>
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading6" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">P6 - ¿Cómo puedo ver, verificar, cambiar o borrar la información personal que nos envió?</a></h4>
              </div>
            </div>
            <div id="collapse6" role="tabpanel" aria-labelledby="heading7" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. NESTLÉ&reg; es una compañía mundial y su información personal puede ser transferida al exterior. Puede pasarse a países que tienen niveles de protección de datos diferentes al país desde el cual usted envió su información personal. Puede que su información personal sea transferida entre varias compañías del Grupo NESTLÉ&reg; localizadas en diferentes países. NESTLÉ&reg; toma las medidas apropiadas para mantener la seguridad de la información personal durante el transito y en el sitio en donde se recibe. El servidor que pone a su disposición este sitio de Internet, puede estar localizado fuera del país desde el cual usted accedió. Nuestro proveedor de servicio hosting para la mayoría de los sitios NESTLÉ&reg; está localizado en Estados Unidos. Este proveedor está obligado por un contrato a asegurar un alto nivel de protección de la privacidad y requiere (entre otras disposiciones) que actúe solo siguiendo las instrucciones de NESTLÉ&reg; y que implemente todas las medidas técnicas necesarias continuamente para mantener segura su información personal.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading8" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">P7 - ¿Cookies (“Tecnología de rastreo”) - ¿Cómo y por qué la usa NESTLÉ&reg;?</a></h4>
              </div>
            </div>
            <div id="collapse7" role="tabpanel" aria-labelledby="heading6" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. NESTLÉ&reg; usa la tecnología de rastreo (´cookies´) para reunir la información personal del tipo browser/navegador y de sistema operativo, página de referencia, el sendero a través de la página, el dominio del ISP y demás datos con el fin de entender la forma como los visitantes usan esta página. Las Cookies nos ayudan a diseñar ese página según sus necesidades. NESTLÉ&reg; mantiene toda la información reunida a través de las cookies en un formato no identificable personalmente. Este tipo de información obtenida por las cookies no se revelará fuera del Grupo. No se usará para comunicaciones no solicitadas. Las cookies localizadas en su computador no contienen su nombre sino una dirección IP. Después de que el usuario cancela la sesión, la información contenida en las cookies ya no está disponible para NESTLÉ&reg;. Usted debe asegurarse de que la configuración de su computador refleje si usted desea aceptar cookies o configurarlo para que las rechace.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading8" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">P8 - ¿Cookies (“Tecnología de rastreo”) - ¿Cómo y por qué la usa NESTLÉ&reg;?</a></h4>
              </div>
            </div>
            <div id="collapse8" role="tabpanel" aria-labelledby="heading8" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. Se habla de spamming cuando le envían correo electrónico no solicitado con materiales de publicidad o mercadeo sin su consentimiento. NESTLÉ&reg; NO envía correo electrónico spam. NESTLÉ&reg; no usará información personal (incluyendo su dirección de correo electrónico) para mercadeo directo o para el seguimiento de comunicaciones a menos de que usted dé el permiso expreso. Si por alguna razón usted cree que ha recibido spam de una compañía del Grupo NESTLÉ&reg; favor informarnos inmediatamente a la dirección dada. En cuanto a detalles de la dirección remítase a la P5.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading9" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">P9 - ¿Cuánto tiempo conserva NESTLÉ&reg; su información personal?</a></h4>
              </div>
            </div>
            <div id="collapse9" role="tabpanel" aria-labelledby="heading9" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. NESTLÉ&reg; puede conservar la información personal enviada por usted a este sitio en Internet en sus bases de datos como la de mercadeo y de relaciones con el cliente. El Grupo guardará su información personal por el tiempo que sea razonablemente necesario considerando nuestra necesidad de responder a las consultas o para resolver problemas, para ofrecer servicios mejorados y nuevos, y cumplir con los requerimientos legales según la ley aplicable. Le recordamos que tenemos derechos a hacer borrar su información personal en cualquier momento. Favor remítase a la P5.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading10" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">P10 - ¿Cuál es la política de NESTLÉ&reg; referente a que los niños usen y se comuniquen con nuestro sitio en Internet?                  </a></h4>
              </div>
            </div>
            <div id="collapse10" role="tabpanel" aria-labelledby="heading10" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. Creemos que es supremamente importante proteger la privacidad de los niños en línea y estimular a los padres o a los acudientes a que pasen algún tiempo en línea con sus niños para participar y monitorear sus actividades electrónicas. Intencionalmente no reunimos información personal de niños menores de 13 años excepto en algunos sitios para nuestros niños. En estos sitios, reunimos la información personal conforme a las leyes y regulaciones locales aplicables a los derechos de privacidad de los niños. Si los padres o acudientes dan el consentimiento para que su niño de información personal, solo le preguntamos a los niños la información personal necesaria para participar en el programa para el que se registra el menor. Sitio específico para niños
                  Nota especial para los niños menores de 16 años.
                </p>
                <p>
                  Les recomendamos que los padres/acudientes regularmente verifiquen y motinoreen el uso que los niños hacen del correo y sus actividades en línea. Asegúrense de que les pidan permiso para enviar información. A todos los visitantes menores de 6 años les pedimos el correo electrónico de sus padres o acudientes para reenviarles copia de nuestros mensajes. En cualquier momento el adulto puede verificar la información de su hijo y puede cambiarla o borrarla. De forma alternativa, si desea que la borremos, puede enviarnos una solicitud de eliminación por correo electrónico, postal o por fax. (P5)
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading11" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">P11- ¿Hace enlace NESTLÉ&reg; con sitios de terceros y qué pasa con la información cuando se hace el vínculo?                </a></h4>
              </div>
            </div>
            <div id="collapse11" role="tabpanel" aria-labelledby="heading11" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. NESTLÉ&reg; tiene vínculo a otros sitios en Internet para que usted pueda revisar información interesante relacionada con la compañía. Esos sitios de terceros están fuera de nuestro control y no están cubiertos por este aviso de privacidad. Asegúrese de estar conforme con la política de privacidad de estos sitios. NESTLÉ&reg; trata en la medida de lo posible, asegurarse de que lo sitios de terceros, tengan medidas de prevención equivalentes para proteger su información personal, pero no asumimos ninguna responsabilidad legal ni de otro tipo por las actividades o niveles de cumplimiento de esos terceros.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading12" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">P12 - ¿Qué pasa con mi información personal cuándo reenvío la dirección de la página de NESTLÉ&reg; a otra persona?</a></h4>
              </div>
            </div>
            <div id="collapse12" role="tabpanel" aria-labelledby="heading12" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. Algunos de nuestros sitios en Internet le dan la posibilidad de que usted reenvíe una página de Internet a otra persona. Para que esta opción funciones, le pediremos la dirección de correo electrónico a quien enviarle el mensaje. Estas direcciones no se guardarán y se borran tan pronto cumplamos con su solicitud.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading13" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">P13 - ¿Qué pasa con mi información personal, si participo en un sondeo en línea por la página de NESTLÉ&reg; en Internet?</a></h4>
              </div>
            </div>
            <div id="collapse13" role="tabpanel" aria-labelledby="heading13" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. En algunas oportunidades le haremos a los visitantes de nuestro sitio algunas preguntas de sondeo, generalmente del contenido del sitio o nuestros productos. Tal vez se le soliste información como edad, género y otra información no identificable personalmente. Estos datos serán usados para estudios internos de NESTLÉ&reg; pero puede que compartamos con otros la información agregada (que no tiene la capacidad de identificar personalmente a nadie).
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading14" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">P14 - ¿En qué consiste el registro de una sola vez?</a></h4>
              </div>
            </div>
            <div id="collapse14" role="tabpanel" aria-labelledby="heading14" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. Para facilitar el proceso de registro usamos una herramienta de registro de una sola vez para los sitios de NESTLÉ&reg;. Con esta herramienta, automáticamente la información queda disponible para su registro en otros sitios de la compañía en Internet. Sus datos siguen siendo protegidos y siempre le pediremos permiso expreso para recibir información del sitio antes de agregarla a una lista de correo.
                  
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading15" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">P15 - ¿Puede NESTLÉ&reg; cambiar los términos de éste aviso de privacidad?         </a></h4>
              </div>
            </div>
            <div id="collapse15" role="tabpanel" aria-labelledby="heading15" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. Ocasionalmente NESTLÉ&reg; hará cambios y correcciones a esta Política de Privacidad, Favor visitarla regularmente para enterarse de los cambios y la forma en que lo afectan.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading16" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">P16 - ¿Cuáles son las direcciones de contacto de NESTLÉ&reg; si tengo más preguntas sobre mi información personal?</a></h4>
              </div>
            </div>
            <div id="collapse16" role="tabpanel" aria-labelledby="heading16" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. Correo electrónico: <a href="servicio.consumidor@co.nestle.com">servicio.consumidor@co.nestle.com</a>
                  
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading17" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">P17 - ¿Qué términos específicos de las definiciones jurídicas se usan en este aviso de privacidad?</a></h4>
              </div>
            </div>
            <div id="collapse17" role="tabpanel" aria-labelledby="heading17" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  R. Resaltados en negrilla.
                  
                </p>
                <p>
                  La información personal también puede conocerse como los datos personales y significa toda la información referente a usted como persona natural capaz de identificarlo a usted directa o indirectamente. (Típicamente en el sitio incluye al menos su dirección de correo electrónico).
                  
                </p>
                <p>
                  Procesamiento de la información personal Significa que cualquier operación o conjunto de operaciones que se realicen con su información personal con medios automáticos o de otro tipo que incluyen la recolección, registro, almacenamiento, adaptación o alteración, recuperación, consulta, uso, revelación por transmisión, difusión o poner a disposición de otra forma, la alineación o combinación, bloqueo, eliminación o destrucción de toda la información personal enviada por usted.
                  
                </p>
                <p>
                  Datos de controlador Es la organización de forma aislada o conjunta que determina los propósitos y los medios para procesar su información personal, que en este caso en NESTLÉ&reg; S.A.
                  
                </p>
                <p>
                  Terceras partes Para los fines de esta Política de Privacidad significa cualquier compañía que no está bajo el control de NESTLÉ&reg; S.A. a través de la posesión directa o indirecta. En este aviso de privacidad “NESTLÉ&reg;” y el “Grupo NESTLÉ&reg;” se refieren ambas a NESTLÉ&reg; S.A. y sus compañías subsidiaria (en las que NESTLÉ&reg; S.A. tiene el control ya sea mediante la posesión directa o indirecta) según sea apropiado en el contexto,
                  
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading18" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" aria-controls="collapse18">P18 - Importante. -¿Por qué tengo que aceptar los términos de este aviso de privacidad?</a></h4>
              </div>
            </div>
            <div id="collapse18" role="tabpanel" aria-labelledby="heading18" class="panel-collapse collapse">
              <div class="panel-body">
                <p>R. NESTLÉ&reg; es una compañía mundial que usa Internet para reunir y procesar su información personal. Naturalmente esto incluye el procesamiento y transmisión de su información personal al exterior.</p>
                <p>Este aviso de privacidad le da toda la información necesaria (en forma accesible) para que haga una selección informada si va a usar este sitio en Internet y si nos enviará su información personal a NESTLÉ&reg; o no. Por lo tanto, al navegar este sitio en Internet y comunicarse electrónicamente con nosotros, usted reconoce y acepta que procesemos su información personal indirecta (cookies, conexión e información del sistema) en la forma establecida en este Aviso.</p>
                <p>Si nos solicita algún servicio (concurso, boletín, detalles de producto), necesitaremos preguntarle información adicional directa (nombre, dirección, correo electrónico). En este caso, le pediremos su consentimiento expreso para reunir y usar estos datos.</p>
                <p>
                  Si tiene alguna pregunta sobre esta política favor contactar a NESTLÉ&reg; en la dirección dada en la pregunta 16 y gustosamente le responderemos.
                  
                  
                </p>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading19" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" aria-controls="collapse19">P19 - ¿Cuál es respuesta de NESTLÉ&reg; a los email fraudulentos?            </a></h4>
              </div>
            </div>
            <div id="collapse19" role="tabpanel" aria-labelledby="heading19" class="panel-collapse collapse">
              <div class="panel-body">
                <p>R. Existen casos de correos electrónicos falsos enviados a individuos y organizaciones que pretenden ser de NESTLÉ&reg; o de una organización socia de NESTLÉ&reg;. Éstos son correos electr ónicos fraudulentos , y suelen pedir información tal como una contraseña o un nombre de usuario e inclusive sumas de dinero a cambio de más dinero u otras ventajas, tales como ganar una competición o una promoción de NESTLÉ&reg;.</p>
                <p>Estos correos electrónicos podrían parecer absolutamente convincentes, incluyendo un logo de NESTLÉ&reg; o el de una de sus marcas de productos; o venir remitidos desde una dirección de correo que pareciera ser de NESTLÉ&reg;.</p>
                <p>En todo caso, estos correos electrónicos son falsos y no se relacionan en absoluto con NESTLÉ&reg; o con cualquier organización asociada a NESTLÉ&reg;. Por lo tanto sugerimos revisar la autenticidad de estos correos (o de cualquier otra comunicación) antes de enviar cualquier contestación. NESTLÉ&reg;, además, sugiere que no envíe dinero o ninguna otra información, ya que NESTLÉ&reg; no tiene la política de pedir dinero o información a cambio de premios, entrevistas de trabajo o ninguna clase de registro.</p>
                <p>Si le preocupa un correo electrónico que ha recibido, por favor, envíenos dicho correo a servicio.consumidor@co.nestle.com, esto nos permitirá estar enterados de esos incidentes y tomar acciones en contra de estas personas. Puede también informar o pedir a su proveedor de servicios de internet consejo o ayuda.</p>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

    <!--Fin sección politicas-->

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
  <!-- /#page, /#page-wrapper -->
 <!--Fin Footer-->