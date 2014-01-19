<?php 

define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
 
$node = node_load(127);

$wrapper = entity_metadata_wrapper('node', $node);
   $wrapper->field_category->set(2);
   $wrapper->save();

print_r($wrapper);

?>


