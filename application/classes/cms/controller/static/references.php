<?php defined('SYSPATH') or die('No direct script access.');

abstract class Cms_Controller_Static_References extends Controller_Builder_Static
{ 
  protected $_folder = 'references';
  
  /**
  * kategorie
  */
  public function action_categories() 
  {
    $view_name = $this->request->param('id', FALSE);
    
    $menu = new Menu('references_categories');
    
    foreach (ORM::factory('reference_category')->where('cms_status', '=', 1)->find_all() as $category) {
      $menu->add($category->name, $category->get_url());
    }
    
    $menu->set_actives(Request::initial()->url(TRUE));
    
    if ($view_name !== FALSE) {
      $this->_view = View::factory('blocks/' . $this->_folder . '/' . $view_name);
    }
    
    $this->_view->menu = $menu;
  }
}
