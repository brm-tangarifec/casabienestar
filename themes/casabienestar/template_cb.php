<?php
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

//altering search result

function casabienestar_preprocess_search_api_page_results(array &$variables){
 $results = $variables['results'];


  if (!empty($variables['results']['results'])) {
    $variables['items'] = $variables['index']->loadItems(array_keys($variables['results']['results']));
  }
  $variables['result_count'] = $results['result count'];
  $variables['sec'] = 0;
  if (isset($results['performance']['complete'])) {
    $variables['sec'] = round($results['performance']['complete'], 3);
  }
  $variables['search_performance'] = array(
    '#theme' => 'search_api_page_search_performance',
    '#markup' => format_plural(
      $results['result count'],
      'The search found 1 result in @sec seconds.',
      'The search found @count results in @sec seconds.',
      array('@sec' => $variables['sec'])
    ),
    '#prefix' => '<p class="search-performance">',
    '#suffix' => '</p>',
  );

  // Make the help text depend on the parse mode used.
  switch ($variables['page']->options['mode']) {
    case 'direct':
      if ($variables['index']->server()->class == 'search_api_solr') {
        $variables['no_results_help'] = t('<ul>
<li>Check if your spelling is correct.</li>
<li>Remove quotes around phrases to search for each word individually. <em>bike shed</em> will often show more results than <em>&quot;bike shed&quot;</em>.</li>
<li>Consider loosening your query with <em>OR</em>. <em>bike OR shed</em> will often show more results than <em>bike shed</em>.</li>
</ul>');
      }
      else {
        $variables['no_results_help'] = t('<ul>
<li>Check if your spelling is correct.</li>
<li>Use fewer keywords to increase the number of results.</li>
</ul>');
      }
      break;
    case 'single':
      $variables['no_results_help'] = t('<ul>
<li>Check if your spelling is correct.</li>
<li>Use fewer keywords to increase the number of results.</li>
</ul>');
      break;
    case 'terms':
      $variables['no_results_help'] = t('<ul>
<li>Check if your spelling is correct.</li>
<li>Remove quotes around phrases to search for each word individually. <em>bike shed</em> will often show more results than <em>&quot;bike shed&quot;</em>.</li>
<li>Use fewer keywords to increase the number of results.</li>
</ul>');
      break;
  }

  // Prepare CSS classes.
  $classes_array = array(
    'search-api-page',
    'search-api-page-' . drupal_clean_css_identifier($variables['page']->machine_name),
    'view-mode-' . drupal_clean_css_identifier($variables['view_mode']),
  );
  $variables['classes'] = implode(' ', $classes_array);

  // Distinguish between the native search_api_page_result "view mode" and
  // proper entity view modes (e.g., Teaser, Full content, RSS and so forth).
  $variables['search_results'] = array();
  if ($variables['view_mode'] != 'search_api_page_result') {
    // Check if we have any entities to show and, if yes, show them.
    if (!empty($variables['items'])) {
      $variables['search_results'] = entity_view($variables['index']->getEntityType(), $variables['items'], $variables['view_mode']);
    }
  }
  else {
    foreach ($results['results'] as $item) {
      if(!empty($variables['items'][$item['id']])) {
        $variables['search_results'][] = array(
          '#theme' => 'search_api_page_result',
          '#index' => $variables['index'],
          '#result' => $item,
          '#item' => $variables['items'][$item['id']],
        );
      }
    }
  }
  // Load CSS.
  $base_path = drupal_get_path('module', 'search_api_page') . '/';
  drupal_add_css($base_path . 'search_api_page.css');
}