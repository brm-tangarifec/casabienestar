<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
 //print_r(array_keys($content));



$contenido=toArray($content);
$tipoContenido=$contenido['body']['#object']['field_tipo_contenido']['und'][0]['value'];

$descripcion=$contenido['body']['#object']['field_descripcionarticulo']['und'][0]['value'];
 //print_r($content[1]->body);




/*Cargar vistas de panel*/

         //Campos vista nutricion
         $view = views_get_view_result('view_nutricion', 'default', array(arg(0)));
         $contenidoArt=$view[0]->_field_data[nid][entity];

         /*Imagen nutrición*/
         $imagenNut=toArray($contenidoArt);
         $imagenNutricion=$imagenNut['field_image']['und'][0];

         /*Link nutrición*/
         $linkNutricion=$imagenNut['field_linkarticulo']['und'][0]['value'];
         
         //Campos vista salud
         $viewsalud = views_get_view_result('view_salud', 'default', array(arg(0)));
         $contenidoSalud=$viewsalud[0]->_field_data[nid][entity];

        /*Imagen salud*/
        $imagenSal=toArray($contenidoSalud);
         $imagenSalud=$imagenSal['field_image']['und'][0];

         /*Link salud*/
         $linkSalud=$imagenSal['field_linkarticulo']['und'][0]['value'];



          //Campos vista bienestar
         $viewbienestar = views_get_view_result('view_bienestar', 'default', array(arg(0)));
         $contenidoBienestar=$viewbienestar[0]->_field_data[nid][entity];

         /*Imagen bienestar*/
         $imagenBie=toArray($contenidoBienestar);
         $imagenBienestar=$imagenBie['field_image']['und'][0];

         /*Link bienstar*/
         $linkBienestar=$imagenBie['field_linkarticulo']['und'][0]['value'];

?>


  <div class="container-fluid u-no-border article-head">
    <!--Titulo del artículo-->
      <?php if ($tipoContenido=='Nutrición'): ?>
        <div class="row max-width titular titular-nutricion">
          <!--Icono sección-->

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 u-text-right">
        <div class="btn btn-nutricion btn-fab btn-raised icon icon-nutricion"></div>
      </div>
      <?php elseif($tipoContenido=='Salud'):?>
      <div class="row max-width titular titular-salud">
          <!--Icono sección-->

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 u-text-right">
        <div class="btn btn-salud btn-fab btn-raised icon icon-salud"></div>
      </div>
    <?php elseif($tipoContenido=='Bienestar'):?>
      <div class="row max-width titular titular-bienestar">
          <!--Icono sección-->

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 u-text-right">
        <div class="btn btn-bienestar btn-fab btn-raised icon icon-bienestar"></div>
      </div>
      <?php endif; ?>
      <!--/-Icono sección-->
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <h2 class="seccion"><?php print $tipoContenido?></h2>
        <h1 class="titulo-articulo"><?php print $title?></h1>
      </div>
    </div>
    <!--/-Titulo del artículo-->
    <div class="row max-width img-article">
      <!--Imagen destacada del articulo-->
      <div class="col-lg-12 u-no-border"> <?php print render($content['field_imginternaarticulo'])?></div>
      <!--/-Imagen destacada del articulo-->



    </div>
  </div>

<section class="container-fluid article-body">
 <div class="row">
      <!--Contenido artículo-->
      
      <article class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
   
        <h4 class="destacado">
          
          <?php print $descripcion?>

        </h4>
        <!--/-Texto destacado del artículo-->
        <!--Texto cuerpo del artículo-->
        <div class="contenido">
          <?php print render($content['body']);?>
        </div>
        <!--/-Texto cuerpo del artículo-->
        <!--Barra para compartir-->
        <div class="row compartir">
          <div class="col-lg-8 col-md-8 hidden-sm hidden-xs">             </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 article-action">
            <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
            <!-- <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button> -->
            <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
          </div>
        </div>
        <!--/-Barra para compartir-->
        <div class="row box-comentarios">
          <div class="col-lg-12">
            <h3>Comentarios</h3>
            <form id="comentarios" action="">
              <div class="form-group">
                <textarea id="espacio-comentario" name="espacio-comentario" placeholder="Déjanos tus comentarios" class="form-control"></textarea>
              </div>
              <div class="form-group u-text-right">
                <button id="comentar" type="button" class="btn btn-primary">Publicar</button>
              </div>
            </form>
          </div>
        </div>
      </article>
      <aside class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h3>Artículos Relacionados</h3>
        <!--Validacion de tipo contenido-->
        <?php if ($tipoContenido=='Salud' || $tipoContenido=='Bienestar' ): ?>
       <article class="module-box module-box-nutricion">
          <div class="title">
            <h2><a href="/fbappCasaBienestar/nutricion">Nutricion</a></h2>
          </div>
           <figure class="img-wrapper"><img src="<?php print base_path() . path_to_theme(); ?>/images/sticker-nutricion.png" width="140" alt="Nutrición" class="sticker sticker-nutricion img-responsive"><img src="<?php print file_create_url($imagenNutricion[uri])?>" alt="<?php print $imagenNutricion[alt]?>" title='<?php print $imagenNutricion[title]?>' class="img-article img-responsive"></figure>
          <h3><a href="/fbappCasaBienestar/<?php echo $linkNutricion?>"><?php print $contenidoArt->title;?></a></h3>
          <p>
            <?php print $contenidoArt->field_descripcionarticulo[und][0]['value'];?>

          </p>
         <!--  Wrapper para compartir, enviar, favorito y ver más -->
          <div class="wrapper-vermas">
           <!--  Box flotante botones de compartir -->
            <div class="buttons-share"><img src="<?php print base_path() . path_to_theme(); ?>/images/shares.jpg" class="img-responsive"></div>
            <div class="row">
              <!-- <div class="col-lg-3 col-md-2 hidden-sm hidden-xs">             </div> -->
              <!-- <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
                <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
                <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
                <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
              </div> -->
              <div class="
col-lg-5 col-md-5 col-sm-6 col-xs-12 col-lg-offset-7 col-md-offset-7 col-sm-offset-6"><a href="/fbappCasaBienestar/<?php echo $linkNutricion?>" role="button" class="btn btn-primary readmore">Ver Más  </a></div>
            </div>
          </div>
        </article>


         <?php endif; ?>
        <?php if ($tipoContenido=='Nutrición' || $tipoContenido=='Bienestar'): ?>
        <article class="module-box module-box-salud">
          <div class="title">
            <h2><a href="/fbappCasaBienestar/salud">Salud</a></h2>
          </div>
          <figure class="img-wrapper"><img src="<?php print base_path() . path_to_theme(); ?>/images/sticker-salud.png" width="140" alt="Salud" class="sticker sticker-salud img-responsive"><img src="<?php print file_create_url($imagenSalud[uri])?>" alt="<?php print $imagenSalud[alt]?>" title='<?php print $imagenSalud[title]?>' class="img-article img-responsive"></figure>
          <h3><a href="/fbappCasaBienestar/<?php echo $linkSalud?>"><?php print $contenidoSalud->title;?></a></h3>
          <p>
            <?php print $contenidoSalud->field_descripcionarticulo[und][0]['value'];?>

          </p>
          <!--Wrapper para compartir, enviar, favorito y ver más-->
          <div class="wrapper-vermas">
            <!--Box flotante botones de compartir-->
            <div class="buttons-share"><img src="<?php print base_path() . path_to_theme(); ?>/images/shares.jpg" class="img-responsive"></div>
            <div class="row">
         <!-- <div class="col-lg-3 col-md-2 hidden-sm hidden-xs">             </div> -->
            <!--  <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
              <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
              <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
              <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
            </div> -->
              <div class="
col-lg-5 col-md-5 col-sm-6 col-xs-12 col-lg-offset-7 col-md-offset-7 col-sm-offset-6"><a href="/fbappCasaBienestar/<?php echo $linkSalud?>" role="button" class="btn btn-primary readmore">Ver Más  </a></div>
            </div>
          </div>
        </article>
         <?php endif; ?>
      <?php if ($tipoContenido=='Nutrición' || $tipoContenido=='Salud'): ?>
        <article class="module-box module-box-bienestar">
          <div class="title">
            <h2><a href="/fbappCasaBienestar/bienestar">Bienestar</a></h2>
          </div>
          <figure class="img-wrapper"><img src="<?php print base_path() . path_to_theme(); ?>/images/sticker-bienestar.png" width="140" alt="Bienestar" class="sticker sticker-bienestar img-responsive"><img src="<?php print file_create_url($imagenBienestar[uri])?>" alt="<?php print $imagenBienestar[alt]?>" title='<?php print $imagenBienestar[title]?>' class="img-article img-responsive"></figure>
          <h3><a href="/fbappCasaBienestar/<?php echo $linkBienestar?>"><?php print $contenidoBienestar->title;?></a></h3>
          <p>
           <?php print $contenidoBienestar->field_descripcionarticulo[und][0]['value'];?>

          </p>
          <!--Wrapper para compartir, enviar, favorito y ver más-->
          <div class="wrapper-vermas">
            <div class="row">
              <!-- <div class="col-lg-3 col-md-2 hidden-sm hidden-xs">             </div> -->
              <!-- <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
                <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
                <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
                <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
              </div> -->
              <div class="
col-lg-5 col-md-5 col-sm-6 col-xs-12 col-lg-offset-7 col-md-offset-7 col-sm-offset-6"><a id="readmore" href="/fbappCasaBienestar/<?php echo $linkBienestar?>" role="button" class="btn btn-primary readmore">Ver Más</a></div>
            </div>
          </div>
        </article>
       <?php endif; ?>
      </aside>
      <!--/-Contenido artículo-->
    </div>

    <?php print render($content['flippy_pager']);?>
    <?php print render($content['sharethis']);?>


</section>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    jQuery('.field-name-field-imginternaarticulo > img').addClass('img-responsive');
    jQuery('.field-name-field-imginternaarticulo > img').removeAttr('width');
    jQuery('.field-name-field-imginternaarticulo > img').removeAttr('height');
    jQuery('.link-wrapper').hide();
    jQuery('.fa-share-alt').attr('id','compartirN')
    jQuery('.box-comentarios').hide();


    /*jQuery('.share-others').click(function(){

      jQuery('.st_sharethis_custom').click();
    });
    jQuery('.share-mail').click(function(){

      jQuery('.st_email_custom').click();
    });*/
  });
</script>