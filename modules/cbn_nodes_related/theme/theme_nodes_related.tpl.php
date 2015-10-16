<aside class="row recetas-relacionadas">
<h2>también te sugerimos</h2>
<?php 
foreach ($variables["info_node"]["tax"] as $value) {
  $nod = node_load($value["entity_id"]);
  $url = $nod->field_receta_url["und"][0]["value"];
  $time = $nod->field_tiempo_eeal_["und"][0]["value"]; 
?>
<article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 module-box module-box-receta">
  <figure class="img-wrapper"><img src='<?php print_r(file_create_url($nod->field_receta_imgpq["und"][0]["uri"])); ?>' alt="Ejemplo ALT" title="Ejemplo de Title" class="img-article img-responsive"></figure>
  <h3><?php print_r($nod->title); ?></h3>
  <!--Wrapper para tiempo, compartir, enviar, favorito y ver más-->
  <div class="shareThis">
    <div class="botones-redes-wrapper" style="display:none"></div>
    <p class="tiempo">
      <span class="mdi-device-access-alarm"></span>
      <?php print_r($time." min"); ?>
    </p>
    <div class="shareThis">
      <div class="botones-redes-wrapper" style="display:none"></div>
      <div class="article-action">
        <span class="fa fa-share-alt" displaytext="sharethis"></span>
      </div>
    </div>
  </div>
  <div class="verMas btn btn-primary readmore">
    <a href='<?php print_r("../".$url); ?>'>Ver Más</a>
  </div>
</article>
<?php } ?>
</aside>

