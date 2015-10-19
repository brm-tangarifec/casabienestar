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





?>


  <div class="container-fluid u-no-border article-head article-receta">
    <!--Titulo del artículo-->
    <div class="row max-width titular titular-receta">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="tiempo"><span class="mdi-device-access-alarm "></span> <?php print render($content['field_tiempo_eeal_'])?></div>
        <h1 class="titulo-articulo"><?php print render($title)?></h1>
      </div>
      <!--Calorías-->
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <h2 class="calorias">
          Calorías <span class="num-calorias"><?php print render($content['field_receta_calorias'])?></span>
          
        </h2>
      </div>
      <!--/-Calorías-->
    </div>
    <!--/-Titulo del artículo-->
    <div class="row max-width img-article">
      <!--Imagen destacada del articulo-->
      <div class="col-lg-12 u-no-border"><?php print render($content['field_receta_imgg']);?></div>
      <!--/-Imagen destacada del articulo-->
    </div>
  </div>
  <section class="container-fluid article-body">
    <!--Contenido artículo-->
      <!--Compartir y ranking-->
    <div class="box-compartir box-compartir-receta row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <h5>Compartido</h5>
        <p class="contador-general">0</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="contador-social twitter"><i class="fa fa-twitter"></i>
          <p class="contador-num contTw">0</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="contador-social facebook"><i class="fa fa-facebook"></i>
          <p class="contador-num contFb" data-layout="box_count">0</p>
        </div>
      </div>
      <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><i class="ranking fa fa-star"></i><i class="ranking fa fa-star"></i><i class="ranking fa fa-star"></i><i class="ranking fa fa-star-half-o"></i><i class="ranking fa fa-star-o"></i></div> -->
    </div>
    <!--/-Compartir y ranking-->
    <!--Momentos y Marcas-->
    <div class="row filtros">
      <!--Momentos-->
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <h3>Ideal para</h3>
        <div class="momentos">
          <?php print render($content['field_momentos'])?>
        </div>
      </div>
      <!--/-Momentos-->
      <!--Marcas-->
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <h3>prepara esta receta con</h3>
        <?php print render($content['field_marcas'])?>
      </div>
      <!--/-Marcas-->
    </div>
    <!--/-Momentos y Marcas-->
    <div class="row">
      <!--Listado de ingredientes-->
      <article id="listado-ingredientes" class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <span class="texto-apoyo">ingredientes para</span>
          <div class="form-group">
            <?php print render($content['field_receta_porciones'])?>
          </div><span class="texto-apoyo">porciones</span>
        <div class="table-responsive">
          <?php print render($content['field_receta_ingredientes'])?>
        </div>
      </article>
      <!--/-Listado de ingredientes-->
      <!--Preparación-->
      <article class="preparacion col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <h3>Preparación</h3>
        <p class="text-info">Los tiempos de preparación pueden variar de acuerdo a la cantidad de porciones que selecciones </p>
        
        <?php print render($content['body']);?>
      </article>
      </div>
        <?php print render($content['comments']); ?>
        <?php print render($content["links"]);?>
        <?php print render($content['field_valoracion']);?>
      <!--/-Preparación-->
    </div>
    <!--Calificación y compartir-->
    <!--Barra para compartir-->
        <div class="row compartir">
          <span class="fa fa-print"></span>
         <!--  <div class="col-lg-8 col-md-8 hidden-sm hidden-xs">             </div> -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 article-action">
            <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
            <!-- <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button> -->
            <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
          </div>
        </div>
        <!--/-Barra para compartir-->
    <!-- <div class="row compartir">
      
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-8 col-md-offset-8 col-sm-offset-8 col-md-push-8 col-sm-push-8 article-action">
        <button class="btn btn-default share share-print"><span class="fa fa-print"></span></button>
        <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
        <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
        <button class="btn btn-default share share-others"><span class="fa fa-share-alt"></span></button>
      </div>
    </div> -->
    <!--/-Calificación y compartir-->
    
    
  </section>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
     
    jQuery('.fa-share-alt').attr('id','compartirN');
    jQuery('.field-name-field-receta-porciones').hide();


    /*jQuery('.share-others').click(function(){

      jQuery('.st_sharethis_custom').click();
    });
    jQuery('.share-mail').click(function(){

      jQuery('.st_email_custom').click();
    });*/
  });
</script>
<?php

///Este es el contenido que no se ha puesto
// <!--Comentarios-->
// <div class="row box-comentarios">
//   <div class="col-lg-12">
//     <h3>Comentarios</h3>
//     <form id="comentarios" action="">
//       <div class="form-group">
//         <textarea id="espacio-comentario" name="espacio-comentario" placeholder="Déjanos tus comentarios" class="form-control"></textarea>
//       </div>
//       <div class="form-group u-text-right">
//         <button id="comentar" type="button" class="btn btn-primary">Publicar</button>
//       </div>
//     </form>
//   </div>
// </div>
// <!--/-Comentarios-->
// <!--Contenido relacionado-->
// <aside class="row recetas-relacionadas">
//   <h2>también te sugerimos</h2>
//   <!--Receta 1-->
//   <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 module-box module-box-receta">
//     <figure class="img-wrapper"><img src="images/sample-thumb-receta.jpg" alt="Ejemplo ALT" title="Ejemplo de Title" class="img-article img-responsive"></figure>
//     <h3>En un lugar de la Mancha, de cuyo nombre no quiero acordarme</h3>
//     <!--Wrapper para tiempo, compartir, enviar, favorito y ver más-->
//     <div class="wrapper-vermas">
//       <div class="row">
//         <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
//           <p class="tiempo">
//             <span class="mdi-device-access-alarm"></span>
//             45 mins.          
            
//           </p>
//         </div>
//         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
//           <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
//           <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
//           <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
//         </div>
//         <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12"><a href="#" role="button" class="btn btn-primary readmore">Ver Más</a></div>
//       </div>
//     </div>
//   </article>
//   <!--/-Receta 1-->
//   <!--Receta 2-->
//   <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 module-box module-box-receta">
//     <figure class="img-wrapper"><img src="images/sample-thumb-receta.jpg" alt="Ejemplo ALT" title="Ejemplo de Title" class="img-article img-responsive"></figure>
//     <h3>En un lugar de la Mancha, de cuyo nombre no quiero acordarme</h3>
//     <!--Wrapper para tiempo, compartir, enviar, favorito y ver más-->
//     <div class="wrapper-vermas">
//       <div class="row">
//         <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
//           <p class="tiempo">
//             <span class="mdi-device-access-alarm"></span>
//             45 mins.          
            
//           </p>
//         </div>
//         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
//           <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
//           <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
//           <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
//         </div>
//         <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12"><a href="#" role="button" class="btn btn-primary readmore">Ver Más</a></div>
//       </div>
//     </div>
//   </article>
//   <!--/-Receta 2-->
//   <!--Receta 3-->
//   <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 module-box module-box-receta">
//     <figure class="img-wrapper"><img src="images/sample-thumb-receta.jpg" alt="Ejemplo ALT" title="Ejemplo de Title" class="img-article img-responsive"></figure>
//     <h3>En un lugar de la Mancha, de cuyo nombre no quiero acordarme</h3>
//     <!--Wrapper para tiempo, compartir, enviar, favorito y ver más-->
//     <div class="wrapper-vermas">
//       <div class="row">
//         <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
//           <p class="tiempo">
//             <span class="mdi-device-access-alarm"></span>
//             45 mins.          
            
//           </p>
//         </div>
//         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
//           <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
//           <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
//           <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
//         </div>
//         <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12"><a href="#" role="button" class="btn btn-primary readmore">Ver Más</a></div>
//       </div>
//     </div>
//   </article>
//   <!--/-Receta 3-->
// </aside>
// <!--/-Contenido relacionado -->
?>
