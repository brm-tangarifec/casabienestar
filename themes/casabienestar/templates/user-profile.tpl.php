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

$perfil=toArray($user_profile);
$fotoPerfil=$perfil['field_imagen_perfil']['#object']['field_imagen_perfil']['und'][0]['uri'];

echo '<pre>';
print_r(array_keys($user_profile));
echo '</pre>';


?>
<!-- <div class="profile"<?php print $attributes; ?>>
  <?php print render($user_profile); ?>
</div>
 -->

 <div class="row">
	

    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">

    	<figure class="img-perfil img-circle">
    		
         <img src="<?php print file_create_url($fotoPerfil)?>" class="img-article img-responsive">
    		
    	</figure>

   </div>
   <!--Nombre Usuario-->
    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
		<p> <?php print $user_profile['field_nombres'][0]['#markup'] ?></p>
		<p><?php print$user_profile['field_apellidos'][0]['#markup']; ?></p>
		<p><?php print$user_profile['account']['mail']['#markup']; ?></p>
		<p><?php print$user_profile['account']['password']['#markup']; ?></p>
		<p><?php print$user_profile['field_tel_fono'][0]['#markup']; ?></p>
		<p><?php print$user_profile['field_ciudades'][0]['#markup']; ?></p>
		<p><?php print$user_profile['field_numero_documento'][0]['#markup']; ?></p>
		<p><?php print$user_profile['field_fecha_nacimiento'][0]['#markup']; ?></p>
		<p><?php print$user_profile['field_genero'][0]['#markup']; ?></p>
   </div>
   <!--/-Nombre Usuario-->
 </div>





 



 
        
          
       </div>
    