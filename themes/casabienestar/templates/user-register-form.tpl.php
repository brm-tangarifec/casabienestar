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
        <div class="col-lg-5 col-md-4 col-sm-4 hidden-xs"></div>
        <!--Imagen de perfil-->
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
          <div class="form-group"><img src="images/foto-registro.png" alt="Ejemplo de ALT" class="img-responsive img-center"></div>
          <div class="form-group">
           <!--  <label for="inputFile" class="control-label"></label>
            <input type="text" placeholder="Cargar foto" class="form-control floating-label subir-archivo">
            <input type="file" id="inputFile"> -->
            <?php
            	print render($form['field_imagen_perfil']);
            ?>

          </div>
        </div>
        <!--/-Imagen de perfil-->
        <div class="col-lg-5 col-md-4 col-sm-4 hidden-xs"></div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        <!--Nombre y apellidos-->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="form-group">
            
            <?php
            	print render($form['field_nombres']);
            ?>
            


          </div>
          <div class="form-group">
            <?php
            	print render($form['field_apellidos']);
            ?>
          </div>

          <div class="form-group">
           <!--  <label for="email">E-mail: *</label>
            <input type="text" id="email" name="email" class="form-control"> -->

            <?php
            	print render($form['account']['name']);
            ?>
          </div>
        </div>
        <!--/-Nombre y apellidos-->
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        <!--Tipo documento-->
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="form-group">
            <!-- <label>Tipo: *</label>
            <div class="radio radio-primary spaceError">
              <label for="cedula-ciudadania">
                <input type="radio" id="cedula-ciudadania" name="optionRadios" value="option1"> C.C.
              </label>
            </div>
            <div class="radio radio-primary spaceError">
              <label for="cedula-extranjeria">
                <input type="radio" id="cedula-extranjeria" name="optionRadios" value="option2"> C.E.
              </label>
            </div> -->

            

            <?php
            	print render($form['field_tipo_documento']);
            ?>
          </div>
        </div>
        <!--/-Tipo documento-->
        <!--Documento-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <div class="form-group">
            <!-- <label for="documento">Documento: *</label>
            <input type="text" id="numero-documento" name="numero-documento" class="form-control"> -->

            <?php
            	print render($form['field_numero_documento']);
            ?>

          </div>
        </div>
        <!--/-Documento-->
        <!--Fecha-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <div class="form-group">
            <!-- <label for="fecha-nacimiento">Fecha de nacimiento: *</label>
            <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" class="form-control"> -->
            
            <?php
            	print render($form['field_fecha_nacimiento']);
            ?>
          </div>
        </div>
        <!--/-Fecha-->
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        <!--mail-->
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
          <div class="form-group">
           <!--  <label for="email">E-mail: *</label>
            <input type="text" id="email" name="email" class="form-control"> -->

            <?php
            	print render($form['account']['mail']);
            ?>
          </div>
        </div>
        <!--/-mail-->
        <!--telefono-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <div class="form-group">
            <!-- <label for="telefono">Teléfono: *</label>
            <input type="text" id="telefono" name="telefono" class="form-control"> -->

            <?php
            	print render($form['field_tel_fono']);
            ?>

          </div>
        </div>
        <!--/-telefono-->
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        <!--Genero-->
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <div class="form-group">
            <!-- <label>Género: *</label>
            <div class="radio radio-primary spaceError">
              <label for="genero-masc">
                <input type="radio" id="genero-masc" name="optionRadios" value="option1"> Mas.
              </label>
            </div>
            <div class="radio radio-primary spaceError">
              <label for="genero-fem">
                <input type="radio" id="genero-fem" name="optionRadios" value="option2"> Fem.
              </label>
            </div> -->
          

            <?php
            	print render($form['field_genero']);
            ?>

          </div>
        </div>
        <!--/-Genero-->
        <!--Ciudad-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <div class="form-group">
            <!-- <label for="ciudad">Ciudad: *</label>
            <select id="ciudad" name="ciudad" class="form-control">
              <option>Ciudad 1</option>
              <option>Ciudad 2</option>
              <option>Ciudad 3</option>
              <option>Ciudad 4</option>
              <option>Ciudad 5</option>
            </select>
          </div> -->

        	<?php
        	print render($form['field_departamento']);
        	?>
         </div>
         <div class="form-group">
         	<?php
        	print render($form['field_ciudad']);
        	?>
         </div>
        </div>
        <!--/-Ciudad-->
        <!--Como te enteraste-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <div class="form-group">
            <!-- <label for="como-te-enteraste">¿Cómo te enteraste?: *</label>
            <select id="como-te-enteraste" name="como-te-enteraste" class="form-control">
              <option>Opción 1</option>
              <option>Opción 2</option>
              <option>Opción 3</option>
              <option>Opción 4</option>
              <option>Opción 5</option>
            </select> -->

            <?php
            print render($form['field__c_mo_te_enteraste_']);
            ?>
          </div>
        </div>
        <!--/-Como te enteraste-->
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        <!--Contraseña-->
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
          <div class="form-group">
            <!-- <label for="password">Contraseña: *</label>
            <input type="password" id="password" name="password" class="form-control"> -->
            <?php
           		print render($form['field_confirmar_contrasena']); 
            ?>
          </div>
        </div>
        <!--/-Contraseña-->
        <!--Captcha-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <label>Captcha: *</label>
          <div class="col-lg-6 col-md-6 col-sm-8 col-xs-6 ajustesCaptcha">
            <div class="form-group">
              <div class="captcha"><img src="images/sample-captcha.jpg" alt="Ejemplo de ALT"><a href="#"></a></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 ajustesCaptcha">
            <div class="form-group">
              <!-- <label for="captcha"></label>
              <input type="text" id="captcha" name="captcha" class="form-control"> -->

            <?php
           		print render($form['captcha']); 
            ?>

            </div>
          </div>
        </div>
        <!--/-Captcha-->
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        <!-- <!Contraseña
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
          <div class="form-group">
            <label for="confirm-pass">Confirmar contraseña: *</label>
            <input type="password" id="confirm-pass" name="confirm-pass" class="form-control">
          </div>
        </div>
        -Contraseña -->
        <!--Recibir información-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <div class="form-group">
            <label>Recibir información: *</label>
            <!-- <div class="checkbox spaceError">
              <label for="send-mail"> 
                <input type="checkbox" id="send-mail" name="send-mail"> e-mail
              </label>
            </div>
            <div class="checkbox spaceError">
              <label for="send-phone">
                <input type="checkbox" id="send-phone" name="send-phone"> Teléfono
              </label>
            </div> -->

             <?php
            	print render($form['field_deseo_recibir_informacion']); 
             ?>
          </div>
        </div>
        <!--/-Recibir información-->
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        <!--Participación-->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="form-group">
            <div class="checkbox selectRegister">
              <!-- <label for="participar-promo">
                <input type="checkbox" id="participar-promo" name="participar-promo"> Deseo participar en la promoción vigente
              </label> -->
              <?php
            	print render($form['field_aturizacion_datos']); 
             ?>
            </div>
            <div class="checkbox selectRegister">
              <?php
              print render($form['field_deseo_recibir_informacion']);
              ?>
            </div>
          </div>
        </div>
        <!--/-Participación-->
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs"></div>
        <!--Botón confirmación de registro-->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <!-- <button class="btn btn-warning bordesCurvos">CONFIRMAR REGISTRO</button> -->

           <?php print drupal_render_children($form); ?>
          <div class="ripple-wrapper"></div>
        </div>
        <!--/-Botón confirmación de registro-->
        <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs"></div>
      </div>