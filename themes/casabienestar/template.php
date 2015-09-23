<?php
ini_set('display_errors',0);
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  STARTERKIT_preprocess_html($variables, $hook);
  STARTERKIT_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use

 this function
function STARTERKIT_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a

   class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // STARTERKIT_preprocess_node_page() or STARTERKIT_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
/

/ */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sideba

  rs.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_

  hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__n

  o_wrapper'));
  //}
}
// */

//Funcuion para quitar los estilos por defecto de drupal
function casabienestar_css_alter(&$css) {
  $exclude = array(
    'misc/vertical-tabs.css' => FALSE,
    'modules/aggregator/aggregator.css' => FALSE,
    'modules/block/block.css' => FALSE,
    'modules/book/book.css' => FALSE,
    'modules/comment/comment.css' => FALSE,
    'modules/dblog/dblog.css' => FALSE,
    'modules/file/file.css' => FALSE,
    'modules/filter/filter.css' => FALSE,
    'modules/forum/forum.css' => FALSE,
    'modules/help/help.css' => FALSE,
    'modules/node/node.css' => FALSE,
    'modules/openid/openid.css' => FALSE,
    'modules/poll/poll.css' => FALSE,
    'modules/profile/profile.css' => FALSE,
    'modules/search/search.css' => FALSE,
    'modules/statistics/statistics.css' => FALSE,
    'modules/syslog/syslog.css' => FALSE,
    'modules/system/admin.css' => FALSE,
    'modules/system/maintenance.css' => FALSE,
    'modules/system/system.css' => FALSE,
    'modules/system/system.admin.css' => FALSE,
    'modules/system/system.base.css' => FALSE,
    'modules/system/system.maintenance.css' => FALSE,
    'modules/system/system.menus.css' => FALSE,
    'modules/system/system.messages.css' => FALSE,
    'modules/system/system.theme.css' => FALSE,
    'modules/taxonomy/taxonomy.css' => FALSE,
    'modules/tracker/tracker.css' => FALSE,
    'modules/update/update.css' => FALSE,
    'modules/user/user.css' => FALSE,
  );
  $css = array_diff_key($css, $exclude);
}



/**
 * Override or insert variables into the block template.
 */
function casabienestar_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }

  // Add Aria Roles via attributes.
  switch ($variables['block']->module) {
    
   
    case 'search':
      $variables['attributes_array']['role'] = 'search';
      break;
    case 'help':
    case 'aggregator':
    case 'locale':
    case 'poll':
    case 'profile':
      $variables['attributes_array']['role'] = 'complementary';
      break;
    case 'node':
      switch ($variables['block']->delta) {
        case 'syndicate':
          $variables['attributes_array']['role'] = 'complementary';
          break;
        case 'recent':
          $variables['attributes_array']['role'] = 'navigation';
          break;
      }
      break;
    case 'user':
      switch ($variables['block']->delta) {
        case 'login':
          $variables['attributes_array']['role'] = 'form';
          break;
        case 'new':
        case 'online':
          $variables['attributes_array']['role'] = 'complementary';
          break;
      }
      break;
  }
}

/**
 * Override or insert variables into the node template.
 */
function casabienestar_preprocess_node(&$variables) {

  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}


function casabienestar_preprocess_page(&$vars, $hook) {
  if (isset($vars['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }

  
}


function casabienestar_menu_casabienestar(array $variables) {
//add class for li
   $variables['element']['#attributes']['class'][] = '';
//add class for a
   $variables['element']['#localized_options']['attributes']['class'][] = '';
//dvm($variables['element']);
  return theme_menu_link($variables);
}


/*Funció para pasar a array*/

function toArray($obj)
{
    if (is_object($obj)) $obj = (array)$obj;
    if (is_array($obj)) {
        $new = array();
        foreach ($obj as $key => $val) {
            $new[$key] = toArray($val);
        }
    } else {
        $new = $obj;
    }

    return $new;
}

/*Funcion para modificar el buscador*/

/*function casabienestar_theme($existing, $type, $theme, $path){
  $hooks['user_login']=array(
    'render element'=>'form',
    'template'    =>'templates/user-login',
  );
  $hooks['user_register']=array(
    'render element'=>'form',
    'template'    =>'templates/user-register',
  );
  $hooks['user_pass']=array(
    'render element'=>'form',
    'template'    =>'templates/user-pass',
  );
  return $hooks;
}*/

/*function casabienestar_theme(&$existing, $type, $theme, $path){
  $hooks = array();
   // Make user-register.tpl.php available
  $hooks['user_register_form'] = array (
     'render element' => 'form',
     'path' => drupal_get_path('theme','casabienestar'),
     'template' => 'user-register',
     'preprocess functions' => array('casabienestar_preprocess_user_register_form'),
  );
  return $hooks;
}
function 
casabienestar_preprocess_user_register_form(&$vars) {
  $args = func_get_args();
  array_shift($args);
  $form_state['build_info']['args'] = $args; 
  $vars['form'] = drupal_build_form('user_register_form', $form_state['build_info']['args']);
}*/

function casabienestar_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'casabienestar') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'casabienestar_preprocess_user_login'
  ),);
  $items['user_register_form'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'casabienestar') . '/templates',
  'template' => 'user-register-form',
  'preprocess functions' => array(
  'casabienestar_preprocess_user_register_form'
  ),
 );
   $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'casabienestar') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
    'casabienestar_preprocess_user_pass'
    ),
  );
   $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'casabienestar') . '/templates',
  'template' => 'user-login-block',
  'preprocess functions' => array(
  'casabienestar_preprocess_user_login-block'
  ),);
return $items;
}

/**
 * Theme the username description of the user login form
 * and the user login block.
 */
function casabienestar_lt_username_description($variables) {
  switch ($variables['form_id']) {
    case 'user_login':
      // The username field's description when shown on the /user/login page.
      return t('Inicie sesión con su nombre de usuario o correo electr&oacute;nico');
      break;
    case 'user_login_block':
      return t('Inicie sesión con su nombre de usuario o correo electr&oacute;nico');
      break;
  }
}

/**
 * Theme the password description of the user login form
 * and the user login block.
 */
function casabienestar_lt_password_description($variables) {
  switch ($variables['form_id']) {
    case 'user_login':
      // The password field's description on the /user/login page.
      return t('El campo de contrase&ntilde; es diferencia entre mayusculas y minusculas.');
      break;

    case 'user_login_block':
      // If showing the login form in a block, don't print any descriptive text.
       return t('Username or e-mail');
      break;
  }
}

/**
 * Implement hook_form_alter().
 *
 * @ingroup logintoboggan_core
 */
function casabienestar_form_alter(&$form, &$form_state, $form_id) {
  switch ($form_id) {
    case 'user_login':
    case 'user_login_block':
      // Grab the message from settings for display at the top of the login block.
      if ($login_msg = variable_get('logintoboggan_login_block_message', '')) {
        $form['message'] = array(
          '#markup' => filter_xss_admin($login_msg),
          '#weight' => -50,
        );
      }
      if (variable_get('logintoboggan_login_with_email', 0)) {
        // Ensure a valid validate array.
        $form['#validate'] = is_array($form['#validate']) ? $form['#validate'] : array();
        // LT's validation function must run first.
        array_unshift($form['#validate'],'logintoboggan_user_login_validate');
        // Use theme functions to print the username field's textual labels.
        $form['name']['#title']       = theme('lt_username_title', array('form_id' => $form_id));
        $form['name']['#description'] = theme('lt_username_description', array('form_id' => $form_id));
        // Use theme functions to print the password field's textual labels.
        $form['pass']['#title']       = theme('lt_password_title', array('form_id' => $form_id));
        $form['pass']['#description'] = theme('lt_password_description', array('form_id' => $form_id));
      }

      if (($form_id == 'user_login_block')) {
        $block_type = variable_get('logintoboggan_login_block_type', 0);
        if ($block_type == 1) {
          // What would really be nice here is to start with a clean form, but
          // we can't really do that, because drupal_prepare_form() has already
          // been run, and we can't run it again in the _alter() hook, or we'll
          // get into and endless loop. Since we don't know exactly what's in
          // the form, strip out all regular form elements and the handlers.
          foreach (element_children($form) as $element) {
            unset($form[$element]);
            // OpenID expects this key, so provide it to prevent notices.
            if (module_exists("openid")) {
              $form['name']['#size'] = 0;
            }
          }
          unset($form['#validate'], $form['#submit']);
          $form['logintoboggan_login_link'] = array(
            '#markup' => l(theme('lt_login_link'), 'user/login', array('query' => drupal_get_destination())),
          );
        }
        elseif ($block_type == 2) {
          $form  = _logintoboggan_toggleboggan($form);
        }
      }
      else {
        if (variable_get('logintoboggan_unified_login', 0)) {
          $form['lost_password'] = array(
            '#markup' => '<div class="login-forgot">' . l(t('Request new password'), 'user/password') . '</div>',
          );
        }
      }
      break;
    case 'user_admin_settings':
      // Disable the checkbox at the Account settings page which controls
      // whether e-mail verification is required upon registration or not.
      // The LoginToboggan module implements e-mail verification functionality
      // differently than core, and will control wether e-mail verification is
      // required or not.
      $form['registration_cancellation']['user_email_verification']['#disabled'] = true;
      $form['registration_cancellation']['user_email_verification']['#description'] = t('This setting has been locked by the LoginToboggan module. You can change this setting by modifying the <strong>Set password</strong> checkbox at <a href="!link">LoginToboggan settings page</a>.', array('!link' => url('admin/config/system/logintoboggan')));
      break;
  }
}

?>