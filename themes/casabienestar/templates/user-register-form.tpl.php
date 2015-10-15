<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */

/*echo '<pre>';
print_r($form);
print render($form['account']['mail']);
echo '</pre>';*/
?>

<div class="row">
  <!--Imagen de perfil-->
  <div class="col-lg-4 col-md-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
    
    <?php
      print render($form['field_imagen_perfil']);
    ?>

  </div>
  <!--/-Imagen de perfil-->
</div>
<div class="row">
    <!--Nombres-->
  <div class="col-lg-5 col-md-5 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
    <?php
      print render($form['field_nombres']);
    ?>

  </div>
  <!--/-Nombres-->
  <!--Apellidos-->
  <div class="col-lg-5 col-md-5 col-xs-12">
    <?php
      print render($form['field_apellidos']);
    ?>

  </div>
  <!--/-Apellidos-->
</div>
<div class="row">
  <!--Nombre Usuario-->
  <div class="col-lg-10 col-md-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
    <?php
      print render($form['account']['name']);
    ?>

  </div>
  <!--/-Nombre Usuario-->
</div>
<div class="row">
  <!--Tipo Documento-->
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

    <?php
      print render($form['field_tipo_documento']);
    ?>
    

  </div>
  <!--/-Tipo Documento-->
  <!--Número de documento-->
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

    <?php
      print render($form['field_numero_documento']);
    ?>  
    
    
  </div>
  <!--/-Número de documento-->
  <!--Fecha nacimiento-->
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
    
    <?php
      print render($form['field_fecha_nacimiento']);
    ?>
    
  </div>
  <!--/-Fecha nacimiento-->
</div>
<div class="row">
  <!--Email-->
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
    <?php
      print render($form['account']['mail']);
    ?>


  </div>
  <!--/-Email-->
  <!--Teléfono-->
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
    <?php
      print render($form['field_telefono']);
    ?>

  </div>
  <!--/-Teléfono-->
</div>
<div class="row">
  <!--Genero-->
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
    
    <?php
      print render($form['field_genero']);
    ?>

  </div>
  <!--/-Genero-->
  <!--Departamento-->
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
    <?php
    print render($form['field_ciudades']);
    ?>

  </div>
  <!--/-Departamento-->
  <!--Ciudad-->
<!--   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

    <?php
    /*print render($form['field_ciudad']);*/
    ?>
           
    
  </div> -->
  <!--/-Ciudad-->
</div>
<div class="row">
  <!--Contraseña y confirmar contraseña-->
  <div class="col-lg-10 col-md-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

    <?php
        /*print_r($form['account']);*/
        print render($form['account']['pass']);
    ?>
    
    
    
  </div>
</div>
<div class="row">
  <!--Deseo Recibir Info-->
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
       <?php
      print render($form['field_como_te_enteraste']);
      ?>
    
  </div>
  <!--/-Deseo Recibir Info-->
  <!--Como te enteraste-->
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    
    <?php
      print render($form['field_deseo_recibir_informacion']); 
    ?>
    
  </div>
  <!--/-Como te enteraste-->
  <!--Autorizo uso de datos-->
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
     <?php
      print render($form['field_aturizacion_datos']); 
     ?>

  </div>
  <!--/-Autorizo uso de datos-->

</div>
<!--Preferencias-->
  <div class="row">
    <?php
        print render($form['field_contenido_preferencias']); 
     ?>


  </div>

<div id="selector-preferencias">
  <!--Inicio selección temas-->
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
      <div class="selection select-default"><span class="logo icon icon-white icon-check"></span>
        <div class="content">
          <p>SELECCIONA LOS TEMAS<br>QUE MÁS TE INTERESAN</p>
        </div>
      </div>
    </div>
  </div>
  <!--/-Final selección temas-->
  <!--Inicio selección pilares-->
  <div class="row">
    <!-- Selección nutrición-->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <!--Titulo nutrición-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 selection select-nutricion"><span class="logo icon icon-pilares icon-nutricion"></span>
        <div class="content tipoc" data-contenido='nutricion' data-iden='1'>
          <h2>NUTRICIÓN</h2>
        </div>
      </div>
      <div class="hidden show-nutricion">
          <div data-box="Nutrientes" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="linea" id="linea" value="linea"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-line"></span>
        <div class="content">
          <h3 class="titulo-selector">Nutrientes Alimenticios</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      <div data-box="Alimentos Saludables" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="preparaciones" id="preparaciones" value="preparaciones"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-preparaciones"></span>
        <div class="content">
          <h3 class="titulo-selector">Selección de Alimentos Saludables</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      <div data-box="balanceados" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="familia" id="familia" value="familia"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-familia"></span>
        <div class="content">
          <h3 class="titulo-selector">Menús balanceados</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

        <!--Familia-->
      <div data-box="alimentos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="familia" id="familia" value="familia"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-familia"></span>
        <div class="content">
          <h3 class="titulo-selector">Manipulación de alimentos</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      </div>  
    </div>

    
   
    <!--/- Selección nutrición-->
    
    <!-- Selección salud-->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <!--Titulo salud-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 selection select-salud"><span class="logo icon icon-pilares icon-white icon-salud"></span>
        <div class="content tipoc" data-contenido='salud' data-iden='2'>
          <h2>SALUD</h2>
        </div>
      </div>
      <div class="hidden show-salud">

        <!--Adultos mayores-->
      <div data-box="Personal" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="adultos" id="adultos" value="adultos"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-adulto-mayor"></span>
        <div class="content">
          <h3 class="titulo-selector">Cuidado Personal</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      <div data-box="Descanso" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="ejercicio" id="ejercicio" value="ejercicio"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-ejercicio"></span>
        <div class="content">
          <h3 class="titulo-selector">Descanso</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>
      <div data-box="Ejercicio" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="alergias" id="alergias" value="alergias"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-alergias"></span>
        <div class="content">
          <h3 class="titulo-selector">Ejercicio</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      <div data-box="enfermedades" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="alergias" id="alergias" value="alergias"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-alergias"></span>
        <div class="content">
          <h3 class="titulo-selector">Prevención de enfermedades</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      </div>
    </div>
    <!--/- Selección salud-->
    
    <!-- Selección bienestar-->
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <!--Titulo bienestar-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 selection select-bienestar"><span class="logo icon icon-pilares icon-white icon-bienestar"></span>
        <div class="content tipoc" data-contenido='bienestar' data-iden='3'>
          <h2>BIENESTAR</h2>
        </div>
      </div>

     <div class="hidden show-bienestar">

       <div data-box="belleza" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="belleza" id="belleza" value="belleza"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-belleza"></span>
        <div class="content">
          <h3 class="titulo-selector">Belleza</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      <div data-box="Celebraciones" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="ocio" id="ocio" value="ocio"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-ocio"></span>
        <div class="content">
          <h3 class="titulo-selector">Celebraciones</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      <div data-box="Familia" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="deporte" id="deporte" value="deporte"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-deporte"></span>
        <div class="content">
          <h3 class="titulo-selector">Familia</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      <div data-box="Hijos" data-iden='' class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="deporte" id="deporte" value="deporte"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-deporte"></span>
        <div class="content">
          <h3 class="titulo-selector">Hijos</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

      <div data-box="Vacaciones" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boton-brand">
        <input type="checkbox" name="deporte" id="deporte" value="deporte"><span class="icon icon-check check-active circle-check"></span><span class="icon icon-close check-active-two circle-uncheck"></span><span class="logo icon icon-deporte"></span>
        <div class="content">
          <h3 class="titulo-selector">Vacaciones</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit.</p> -->
        </div>
      </div>

     </div>

    </div>
    <!--/- Selección bienestar-->
  </div> </div>
  </div>
  <!--/-Final selección pilares-->
<div class="row">
  <!--Submit-->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
    <?php print drupal_render_children($form); ?>
    
  </div>
  
  <!--/-Submit-->
  
</div>