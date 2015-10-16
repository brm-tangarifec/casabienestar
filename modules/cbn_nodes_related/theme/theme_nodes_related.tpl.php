<aside class="row recetas-relacionadas">
<h2>también te sugerimos</h2>
<?php 
foreach ($variables["info_node"]["tax"] as $value) {
	$nod = node_load($value["entity_id"]);
	$url = $nod->field_receta_url["und"][0]["value"];
	//var_dump($nod->field_receta_imgpq["und"][0]["uri"]); 
?>
<article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 module-box module-box-receta">
     <figure class="img-wrapper"><img src='<?php print_r(file_create_url($nod->field_receta_imgpq["und"][0]["uri"])); ?>' alt="Ejemplo ALT" title="Ejemplo de Title" class="img-article img-responsive"></figure>
     <h3><?php print_r($nod->title); ?></h3>
     <!--Wrapper para tiempo, compartir, enviar, favorito y ver más-->
     <div class="wrapper-vermas">
       <div class="row">
         <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
           <p class="tiempo">
             <span class="mdi-device-access-alarm"></span>
             45 mins.          
            
           </p>
         </div>
         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 article-action">
           <button class="btn btn-default share share-mail"><span class="fa fa-paper-plane"></span></button>
           <button class="btn btn-default share share-favorito"><span class="glyphicon glyphicon-heart-empty"></span></button>
           <button class="btn btn-default share share-others"><span class="fa fa-share-alt">       </span></button>
         </div>
         <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12"><a href='<?php print_r("../".$url);?>' role="button" class="btn btn-primary readmore">Ver Más</a></div>
       </div>
     </div>
   </article>
<?php } ?>
</aside>
