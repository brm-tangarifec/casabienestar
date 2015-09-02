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


    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <!--Logo-->
          <h2><a href="/fbappCasaBienestar/"><img src="<?php print base_path() . path_to_theme(); ?>/images/logo-nestle.svg" alt="NESTLÉ&amp;reg; A gusto con la vida" class="img-responsive"></a></h2>
          <!--/-Logo-->
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>
        <!-- <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
          Registro y Login
          <p class="helpers-registro">
            <a href="registro.html">Registrarse</a> / <a href="#" class="btn-login">Iniciar sesión</a>

          </p>
          /-Registro y Login
        </div> -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <!--País y buscador-->
          <p class="pais">
            Estás en el sitio de NESTLÉ&reg; Colombia

          </p>
          <form id="search-input">
            <div class="form-group">
              <input type="search" class="form-control"><span class="glyphicon glyphicon-search"></span>
            </div>
          </form>
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
                <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle button</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
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
          <h1>Política de tratamiento de datos personales de NESTLÉ® Colombia</h1>
          <h2>Gracias por visitar este sitio en Internet.</h2>
          <p>Esperamos que aprenda más sobre NESTLÉ® y nuestros productos.</p>
          <p>
            NESTLÉ® respeta su derecho a la privacidad en el mundo en línea cuando use nuestra página y se comunique electrónicamente con nosotros. Aplicamos todas las medidas necesarias para mantener segura toda la información personal que nos suministre. Es fundamentalmente importante que usted esté informado de que NESTLÉ® S.A. es el controlador de datos (remítase a la pregunta 18 de este Aviso) de su información personal. Los principios establecidos en este Aviso de Privacidad se aplican a todos los controladores de datos del Grupo NESTLÉ®. Nos planteamos un número de preguntas claves que consideramos que usted debe tener respuesta sobre información personal que entregue a NESTLÉ®. Estas respuestas le informarán de sus derechos referentes a información personal y las medidas que toma Nestlé para mantener la privacidad y seguridad de esta información personal. Confiamos en que esta información sea útil.
            
          </p>
          <p>
            Si tiene alguna solicitud sobre su información personal o alguna consulta sobre estas prácticas, por favor contactar a Nestlé de Colombia S.A. al correo electrónico servicio.consumidor@co.nestle.com o a la línea gratuita 018000 515566.
            
            
            
          </p>
          <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
            <div class="panel panel-default">
              <div id="headingOne" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Política de tratamiento de información</a></h4>
              </div>
            </div>
            <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
              <div class="panel-body">
                <p>Personas a las que está dirigida la política de NESTLÉ®:</p>
                <p>Esta política está dirigida  todos los titulares de información personal que sea utilizada y/o se encuentre en las bases de datos de las compañías NESTLÉ® de Colombia S.A. y Comestibles la Rosa S.A., quienes actúan en calidad de responsables del tratamiento de los datos personales.</p>
                <h4>Ámbito legal de la Política:</h4>
                <p>De conformidad con lo dispuesto en la Constitución Política de Colombia en su artículo 15, la Ley 1581 de 2012 y su Decreto Reglamentario 1377 de 2013, deberá existir un tratamiento adecuado de los datos personales por quienes ostentan la calidad de Responsables de las bases de datos que se encuentren en su poder. </p>
                <p>Adicional a lo anterior, el literal k) del artículo 18 de la ley 1581 de 2012 obliga a los responsables del tratamiento de datos personales a "adoptar un manual interno de políticas y procedimientos para garantizar el adecuado cumplimiento de la presente ley y en especial, para la atención de consultas y reclamos".</p>
                <p>
                  El artículo 25 de la misma ley establece que las políticas de tratamiento de datos son de obligatorio cumplimiento y que su desconocimiento acarreará sanciones. Dichas políticas no pueden garantizar un nivel de tratamiento inferior al establecido en la ley 1581 de 2012.
                  
                </p>
                <h4>Obligaciones:</h4>
                <p>Estas políticas son de obligatorio y estricto cumplimiento para NESTLÉ® y las sociedades que se mencionan, en calidad de responsables, así como todos los terceros que obran en nombre de las Compañías, o que sin actuar en nombre de las mismas tratan datos personales por disposición de ésta como encargados.</p>
                <p>Tanto los responsables como los encargados, entiéndase, empleados, contratistas y terceros deben observar y respetar estas políticas en el cumplimiento de sus funciones y/ o actividades aún después de terminados los vínculos legales, comerciales, laborales o de cualquier índole. De igual manera, se comprometen a guardar estricta confidencialidad en relación con los datos tratados.</p>
                <p>
                  En caso de incumplimiento de alguna de las obligaciones aquí mencionadas, por parte de las personas señaladas, los titulares de la información disponen del en el correo electrónico servicio.consumidor@co.nestle.co , y la línea gratuita nacional 01 8000 515566, en donde podrán poner cualquier queja, reclamo o consulta.
                  
                  
                </p>
                <h4>Estructura Corporativa:</h4>
                <p>En razón a lo dispuesto en el Decreto 1377 de 2013 y en su ley marco 1581 de 2012, se deja  constancia que los Responsables del Tratamiento cuentan con la escritura administrativa necesaria para asegurar la atención de los requerimientos, quejas, consultas y reclamos relacionados con la protección de los datos que tenemos en nuestro poder. Por lo tanto, NESTLÉ® cuenta con la capacidad necesaria para que se puedan ejercer libremente los derechos que tienen los titulares de los datos, tales como el derecho a conocer, actualizar, rectificar y suprimir información personal; así como el derecho a revocar el consentimiento otorgado para el tratamiento de datos personales. </p>
                <p>
                  A continuación describimos las áreas encargadas en la estructura corporativa mencionada para la protección de los datos personales:
                  
                  
                </p>
                <ul>
                  <li>4.1 Servicio al Consumidor: NESTLÉ® cuenta con un equipo encargo de recibir las comunicaciones, reclamos, quejas y consultas que directamente realizan los consumidores de los productos de la compañía, con lo cual contamos con un equipo capacitado para que todos los consumidores puedan ejercer libremente los derechos de los que son titulares, según la normatividad señalada. NESTLÉ®, pone a disposición de los consumidores: la línea nacional gratuita de atención al consumidor 01 8000 515566 y el correo electrónico: servico.consumidor@co.nestle.com , para la atención, y ejercicio de los derechos anteriormente mencionados</li>
                  <li>4.2 Servicio al Cliente y Proveedores: NESTLÉ® cuenta con un equipo encargo de recibir las comunicaciones, reclamos, quejas y consultas que directamente realizan nuestros clientes y proveedores, con lo cual contamos con un equipo capacitado para que los mismos puedan ejercer libremente los derechos de los que son titulares, según la normatividad señalada. NESTLÉ®, pone a disposición de los consumidores: la línea nacional gratuita de atención al consumidor 01 8000 515566 y el correo electrónico: servico.consumidor@co.nestle.com, para la atención, y ejercicio de los derechos anteriormente mencionados.</li>
                  <li>4.3 Entes de Control y Vigilancia:Los entes de control de la compañía son:
                    <ul>
                      <li>Auditoria Interna.</li>
                      <li>Dirección de Servicios Legales de NESTLÉ®.</li>
                      <li>Superintendencia de Industria y Comercio.</li>
                    </ul>
                  </li>
                  <li>
                    4.5 Sistema de Reportes de Colaboradores. NESTLÉ® cuenta con una herramienta diseñada para que todos los trabajadores de la Compañía puedan realizar reclamos, quejas, consultas y demás, respecto de sus derechos como titulares de los datos que son objeto de tratamiento por parte del Responsable del Tratamiento. NESTLÉ®, pone a disposición de los consumidores: la línea interna 9999 y el sistema digital en línea, para la atención, y ejercicio de los derechos anteriormente mencionados.
                    
                  </li>
                </ul>
                <h4>Derechos aplicables a los titulares de datos personales NESTLÉ® se compromete a respetar y garantizar los siguientes derechos de los titulares de los datos:</h4>
                <p>Conocer, actualizar y rectificar los datos personales. Para el efecto es necesario establecer previamente la identificación de la persona para evitar que terceros no autorizado accedan a los datos del titular del dato.</p>
                <p>Obtener copia de la autorización suscrita por éstos en calidad de titulares de los datos.</p>
                <p>Informar sobre el uso que NESTLÉ® ha dado a los datos personales del titular.</p>
                <p>
                  Dar trámite a las consultas y reclamos siguiendo las pautas establecidas en la ley y en la presente política.
                  
                </p>
                <p>Acceder a la solicitud de revocatoria de la autorización y/o supresión del dato personal cuando la Superintendencia de Industria y Comercio haya determinado que en el tratamiento por parte de NESTLÉ® se ha incurrido en conductas contrarias a la ley 1581 de 2012 o a la Constitución.</p>
                <p>El Titular también podrá revocar la autorización y solicitar la supresión del dato, cuando no exista un deber legal o contractual que le imponga el deber de permanecer en la base de datos o archivo del Responsable o Encargado.</p>
                <p>La solicitud de supresión de la información y la revocatoria de la autorización no procederán cuando el titular tenga un deber legal o contractual de permanecer en la base de datos del Responsable o Encargado.</p>
                <p>
                  Acceder en forma gratuita a sus datos personales. La información solicitada por el titular podrá ser suministrada por cualquier medio, incluyendo los electrónicos, según lo requiera el titular.
                  
                  
                </p>
                <h4>Procedimiento para ejercer sus derechos como titular de los datos:</h4>
                <p>
                  NESTLÉ® en cumplimiento de las normas sobre Protección de Datos Personales, hace de su conocimiento el procedimiento y requisitos mínimos para el ejercicio de sus derechos.
                  
                </p>
                <ul>
                  <li>6.1 La persona dispone de los siguientes medios para el ejercicio de sus derechos como titular de la información:
                    <ul>
                      <li>Línea gratuita nacional 01 8000 525566</li>
                      <li>
                        Correo electrónico: <a href="servicio.consumidor@co.nestle.com">servicio.consumidor@co.nestle.com</a>
                        
                      </li>
                      <li>Línea interna 9999 o sistema de en línea de reportes (sólo aplica para trabajadores de la Compañía)</li>
                      <li>
                        Finalmente, la persona podrá imprima el anexo número 1 de esta política (formulario para el ejercicio de Derechos) y diligencie cada uno de los campos. Si no tiene acceso al formulario, puede radicar un documento que contenga la información mínima que se detalla más adelante, documento que deberá ser firmado con número de identificación y enviado o radicado a la siguiente dirección Cr. 15 No. 96-35 (Casa NESTLÉ®).  
                        
                      </li>
                    </ul>
                  </li>
                  <li>6.2 Las personas que ejerzan alguno de los mecanismos señalados en el punto No. 6.1, deberá suministrar la siguiente información:
                    <ul>
                      <li>Nombres y apellidos,</li>
                      <li>Datos de contacto (Dirección, física y/o electrónica y teléfonos de contacto),</li>
                      <li>Medios para recibir respuesta a su solicitud,</li>
                      <li>Motivo(s)/hecho(s) que dan lugar al reclamo,</li>
                      <li>Descripción del Derecho que desea ejercer ante NESTLÉ®,</li>
                    </ul>
                  </li>
                  <li>6.3. En caso de que lo considere necesario, la persona podrá adjunte los documentos en los que soporte su solicitud y/o vulneración de sus derechos.</li>
                  <li>6.4. Una vez utilizado alguno de los mecanismos aquí mencionados, la persona podrá comunicarse con NESTLÉ® dentro de los diez (10) días hábiles de radicada su solicitud, a fin de validar el estado de su requerimiento y subsanarlo en el evento en que el mismo presente inconsistencias. En todo caso, NESTLÉ® se comunicará con usted para que las mismas sean subsanadas</li>
                  <li>6.5 En caso de que la persona o área que recibe el reclamo no es el competente para resolverlo, dará traslado a quien corresponda en un término máximo de dos (2) días hábiles e informará de la situación al interesado.</li>
                  <li>6.6 NESTLÉ® tiene un término máximo para atender su requerimiento de quince (15) días hábiles contados a partir del día siguiente a la fecha de su recibo a satisfacción. Cuando no fuere posible atender el reclamo dentro de dicho término, se informará al interesado los motivos de la demora y la fecha en que se atenderá su solicitud, la cual en ningún caso podrá superar los ocho (8) días hábiles siguientes al vencimiento del primer término.</li>
                </ul>
                <p>
                  NESTLÉ® dispondrá de un sistema de información para llevar el registro de todas las actuaciones efectuadas respecto de cada reclamo en el cual se anotará, entre otras, lo siguiente:
                  
                </p>
                <ul>
                  <li>Fecha de recibo del requerimiento</li>
                  <li>Datos básicos del titular y/o de quien realice el reclamo.</li>
                  <li>Descripción de los motivos/hechos que dan lugar al reclamo.</li>
                  <li>Fecha de envío de la respuesta al titular del dato y cierre de caso.</li>
                </ul>
                <p>Deberes de NESTLÉ® respecto de la protección de datos personales</p>
                <p>7.1 Deberes de NESTLÉ® y las sociedades mencionados cuando obran como Responsables del tratamiento de datos personales:</p>
                <ul>
                  <li>7.1.1 Respecto del titular del dato:
                    <ul>
                      <li>Solicitar y conservar, en las condiciones previstas en esta política, copia de la respectiva autorización otorgada por el titular.</li>
                      <li>Informar de manera clara y suficiente al titular sobre la finalidad de la recolección y los derechos que le asisten por virtud de la autorización otorgada.</li>
                      <li>Garantizar al titular, en todo tiempo, el pleno y efectivo ejercicio del derecho de hábeas data, es decir, conocer, actualizar o rectificar sus datos personales.</li>
                      <li>Informar a solicitud del titular sobre el uso dado a sus datos personales.</li>
                      <li>Tramitar las consultas y reclamos formulados en los términos señalados en la presente política.</li>
                    </ul>
                  </li>
                  <li>7.1.2 Respecto de la calidad, seguridad y confidencialidad de los datos personales:
                    <ul>
                      <li>Observar los principios de veracidad, calidad, seguridad y confidencialidad en los términos establecidos en la siguiente política.</li>
                      <li>Conservar la información bajo las condiciones de seguridad necesarias para impedir su adulteración, pérdida, consulta, uso o acceso no autorizado o fraudulento.</li>
                      <li>Actualizar la información cuando sea necesario.</li>
                      <li>Rectificar los datos personales cuando ello sea procedente.</li>
                    </ul>
                  </li>
                  <li>7.1.3 Cuando realiza el tratamiento a través de un Encargado
                    <ul>
                      <li>Suministrar al Encargado del tratamiento únicamente los datos personales que está autorizado a suministrar a terceros. Garantizar que la información que se suministre al Encargado del tratamiento sea veraz, completa, exacta, actualizada, comprobable y comprensible.</li>
                      <li>Comunicar de forma oportuna al encargado del tratamiento todas las novedades respecto de los datos que previamente le haya suministrado y adoptar las demás medidas necesarias para que la información suministrada a este se mantenga actualizada.</li>
                      <li>Informar de manera oportuna al Encargado del tratamiento las rectificaciones realizadas sobre los datos personales para que éste proceda a realizar los ajustes pertinentes.</li>
                      <li>Exigir al encargado del tratamiento, en todo momento, el respeto a las condiciones de seguridad y privacidad de la información del titular.</li>
                      <li>Informar al encargado del tratamiento cuando determinada información se encuentre en discusión por parte del titular, una vez se haya presentado la reclamación y no haya finalizado el trámite respectivo.</li>
                    </ul>
                  </li>
                </ul>
                <h4>Video vigilancia:</h4>
                <ul>
                  <li>NESTLÉ® utiliza diversos medios de videovigilancia instalados en diferentes sitios internos y externos de nuestras instalaciones u oficinas.</li>
                  <li>NESTLÉ® informa sobre la existencia de estos mecanismos mediante la difusión en sitios visibles de anuncios de videovigilancia.</li>
                  <li>La información recolectada se utilizará para fines de seguridad de las personas, los bienes e instalaciones. Esta información puede ser empleada como prueba en cualquier tipo de proceso ante cualquier tipo de autoridad y organización.</li>
                </ul>
                <h4>Aviso de Privacidad:</h4>
                <p>NESTLÉ® informa que el aviso de privacidad de tratamiento de los datos personales puede consultarlo en <a href="http://www.nestle.com.co.">www.nestle.com.co.</a></p>
                <p>Modificación y/o actualización de la política de protección de datos y manejo de información:</p>
                <p>Cualquier cambio sustancial en las políticas de Tratamiento, se comunicará de forma oportuna a los titulares de los datos a través de los medios habituales de contacto y/o a través de:</p>
                <ul>
                  <li>Página web <a href="http://www.nestle.com.co">www.nestle.com.co</a>.</li>
                  <li>Correo electrónico enviado a los titulares,</li>
                  <li>Para los titulares que no tengan acceso a medios electrónicos o aquellos a los que no sea posible contactar, se comunicará a través de una publicación en un diario de amplia circulación.</li>
                </ul>
              </div>
            </div>
            <div class="panel panel-default">
              <div id="heading2" role="tab" class="panel-heading">
                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">P2 - ¿Cómo hace NESTLÉ&reg; para mantener segura su información personal?</a></h4>
              </div>
            </div>
            <div id="collapse2" role="tabpanel" aria-labelledby="heading2" class="panel-collapse collapse">
              <div class="panel-body">
                <p>R. NESTLÉ&reg; adopta todas las medidas necesarias para conservar su información personal privada y segura. Solamente el personal autorizado del Grupo NESTLÉ&reg;, el personal de otras compañías (por Ej., proveedores de servicios) o el personal autorizado de los socios comerciales (quienes por contrato han acordado mantener segura toda la información) acceden a su información personal. Todo el personal de NESTLÉ&reg; que tiene acceso a su información personal debe adherirse a la Política de Privacidad del Grupo NESTLÉ&reg; y los empleados de terceros que accedan a su información personal han firmado contratos de confidencialidad. Además, los contratos firmados con compañías terceras que acceden a su información personal, garantizan que esta información se mantenga segura. Para asegurar la protección de su información personal, NESTLÉ&reg; mantiene un ambiente de tecnología de la información segura y tienen las medidas apropiadas para impedir el acceso no autorizado (por ejemplo hacking). Favor remítase a la P4 - ¿A quién revelará el Grupo NESTLÉ&reg; su información personal y por qué?</p>
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
            <li><a href="/politicas-privacidad">Políticas de privacidad</a></li>
            <li><a href="http://corporativa.nestle.com.co/">Ver información corporativa</a></li>
            <li><a href="/politicas-datos">Política de tratamiento de datos personales</a></li>
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