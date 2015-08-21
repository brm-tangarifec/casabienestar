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

 //print_r($content[1]->body);
  //print_r(array_values($contenido['body']['#object']));



/*Cargar vistas de panel*/

         //Campos vista nutricion
         $view = views_get_view_result('view_nutricion', 'default', array(arg(0)));
         $contenidoArt=$view[0]->_field_data[nid][entity];

         //Campos vista salud
         $viewsalud = views_get_view_result('view_salud', 'default', array(arg(0)));
         $contenidoSalud=$viewsalud[0]->_field_data[nid][entity];

          //Campos vista bienestar
         $viewbienestar = views_get_view_result('view_bienestar', 'default', array(arg(0)));
         $contenidoBienestar=$viewbienestar[0]->_field_data[nid][entity];

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
        <!--Box botones de compartir-->
        <div class="box-compartir row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h5>Compartido</h5>
            <p class="contador-general">9999</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="contador-social twitter"><i class="fa fa-twitter"></i>
              <p class="contador-num">9999</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="contador-social facebook"><i class="fa fa-facebook"></i>
              <p class="contador-num">9999</p>
            </div>
          </div>
        </div>
        <!--/-Box botones de compartir-->
        <!--Texto destacado del artículo-->
        <h4 class="destacado">
          <?php print render($content['field_descripcionarticulo'])?>

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
            <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
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
            <h2>Nutricion</h2>
          </div>
          <figure class="img-wrapper"><img src="<?php print base_path() . path_to_theme(); ?>/images/sticker-nutricion.png" width="140" alt="Salud" class="sticker sticker-nutricion img-responsive"><img src="<?php print base_path() . path_to_theme(); ?>/images/sample-article-section.jpg" alt="Ejemplo ALT" title="Ejemplo de Title" class="img-article img-responsive"></figure>
          <h3><?php print $contenidoArt->title;?></h3>
          <p>
            <?php print $contenidoArt->field_descripcionarticulo[und][0]['value'];?>

          </p>
          <!--Wrapper para compartir, enviar, favorito y ver más-->
          <div class="wrapper-vermas">
            <!--Box flotante botones de compartir-->
            <div class="buttons-share"><img src="<?php print base_path() . path_to_theme(); ?>/images/shares.jpg" class="img-responsive"></div>
            <div class="row">
              <div class="col-lg-3 col-md-2 hidden-sm hidden-xs">             </div>
              <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
                <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
                <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
                <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12"><a href="#" role="button" class="btn btn-primary readmore">Ver Más  </a></div>
            </div>
          </div>
        </article>
         <?php endif; ?>
        <?php if ($tipoContenido=='Nutrición' || $tipoContenido=='Bienestar'): ?>
        <article class="module-box module-box-salud">
          <div class="title">
            <h2>Salud</h2>
          </div>
          <figure class="img-wrapper"><img src="<?php print base_path() . path_to_theme(); ?>/images/sticker-salud.png" width="140" alt="Salud" class="sticker sticker-salud img-responsive"><img src="<?php print base_path() . path_to_theme(); ?>/images/sample-article-section.jpg" alt="Ejemplo ALT" title="Ejemplo de Title" class="img-article img-responsive"></figure>
          <h3><?php print $contenidoSalud->title;?></h3>
          <p>
            <?php print $contenidoSalud->field_descripcionarticulo[und][0]['value'];?>

          </p>
          <!--Wrapper para compartir, enviar, favorito y ver más-->
          <div class="wrapper-vermas">
            <!--Box flotante botones de compartir-->
            <div class="buttons-share"><img src="<?php print base_path() . path_to_theme(); ?>/images/shares.jpg" class="img-responsive"></div>
            <div class="row">
              <div class="col-lg-3 col-md-2 hidden-sm hidden-xs">             </div>
              <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
                <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
                <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
                <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12"><a href="#" role="button" class="btn btn-primary readmore">Ver Más  </a></div>
            </div>
          </div>
        </article>
         <?php endif; ?>
      <?php if ($tipoContenido=='Nutrición' || $tipoContenido=='Salud'): ?>
        <article class="module-box module-box-bienestar">
          <div class="title">
            <h2>Bienestar</h2>
          </div>
          <figure class="img-wrapper"><img src="<?php print base_path() . path_to_theme(); ?>/images/sticker-bienestar.png" width="140" alt="Bienestar" class="sticker sticker-bienestar img-responsive"><img src="<?php print base_path() . path_to_theme(); ?>/images/sample-article-section.jpg" alt="Ejemplo ALT" title="Ejemplo de Title" class="img-article img-responsive"></figure>
          <h3><?php print $contenidoBienestar->title;?></h3>
          <p>
           <?php print $contenidoBienestar->field_descripcionarticulo[und][0]['value'];?>

          </p>
          <!--Wrapper para compartir, enviar, favorito y ver más-->
          <div class="wrapper-vermas">
            <div class="row">
              <div class="col-lg-3 col-md-2 hidden-sm hidden-xs">             </div>
              <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
                <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
                <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
                <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12"><a id="readmore" href="#" role="button" class="btn btn-primary readmore">Ver Más</a></div>
            </div>
          </div>
        </article>
       <?php endif; ?>
      </aside>
      <!--/-Contenido artículo-->
    </div>



  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</section>
