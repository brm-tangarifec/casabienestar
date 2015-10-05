<div class="wrapMasLeido">
    <div class="titleMasLeido">Lo + Leído <?php print isset($result['tax']['name']) ? $result['tax']['name'] : ''; ?></div>
    <ul class="masLeido">
        <?php 
        $counter = 1;
        foreach ($result as $key => $value) {

                if(isset($value->field_noticia_img["und"][0]["uri"])){
                    
            ?>
            
            <li>
            <div class="img_mas_leidos">
                <?php $img_url = $value->field_noticia_img["und"][0]["uri"];
                      $path_node = drupal_get_path_alias('node/'.$value->nid); ?>
                <a href="<?php print $path_node; ?>">
                    <img width="100px" 
                        height="70px" 
                        src ="<?php print image_style_url('thumb_mas_leido', $img_url); ?>" 
                    />
                </a>
                <div class="numero_mas"><?php print $counter;?></div>
            </div>
            <a href="<?php print $path_node; ?>">
                <?php print $value->title;?>
            </a>
        </li>

        <?php $counter ++; } }
        ?>
        

    </ul>
</div>

