<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_References_Categories extends Cms_Controller_Builder_Template_Administration_Classic
{
  protected $_model = 'reference_category';
  protected $_list_drag = TRUE;
  
  protected $_edit_bookmarks = array (
    'edit' => array ('route' => 'default', 'params' => array ('controller' => 'references_categories', 'action' => 'edit', 'id' => '{id}')),
    'references_categories_keywords' => array ('route' => 'references_categories_keywords', 'params' => array ('id' => '{id}')),
  );
}

