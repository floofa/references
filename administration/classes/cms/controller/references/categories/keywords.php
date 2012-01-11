<?php defined('SYSPATH') or die('No direct script access.');

class Cms_Controller_References_Categories_Keywords extends Controller_Builder_Template_Administration_Classic
{
  protected $_model = 'reference_category_keyword';
  
  protected $_edit_bookmarks = array (
    'edit' => array ('route' => 'default', 'params' => array ('controller' => 'references_categories', 'action' => 'edit', 'id' => '{id}')),
    'references_categories_keywords' => array ('route' => 'references_categories_keywords', 'params' => array ('id' => '{id}')),
  );
  
  public function action_list()
  {
    $category_id = $this->request->param('id');
    $category = ORM::factory('reference_category', $category_id);
    
    if ( ! $category->loaded())
      Request::initial_redirect(Route::url('default', array ('controller' => 'references_categories'), TRUE));
    
    Navigation::add_before_last(___('navigation_references_categories'), Route::get('default')->uri(array ('controller' => 'references_categories')));
    Navigation::add_before_last($category->name, Route::get('default')->uri(array ('controller' => 'references_categories', 'action' => 'edit', 'id' => $category_id)));
    
    $filter = Session::instance()->get('filter_reference_category_keyword');
    $filter['reference_category_id'] = $category_id;
    Session::instance()->set('filter_reference_category_keyword', $filter);
    
    $this->_list_new = Route::url('references_categories_keywords', array ('id' => $category_id, 'action' => 'edit', 'keyword_id' => 0));
    
    parent::action_list();
    
    $this->_add_bookmarks($category_id);
  }
  
  public function action_edit()
  {
    $category_id = $this->request->param('id');
    $category = ORM::factory('reference_category', $category_id);
    
    if ( ! $category->loaded())
      Request::initial_redirect(Route::url('default', array ('controller' => 'references_categories'), TRUE));
    
    $keyword_id = $this->request->param('keyword_id');
    $item = ORM::factory($this->_model, $keyword_id);
    
    // pokud bylo zadano id neexistujiciho zaznamu, presmeruje se na vytvoreni
    if ($keyword_id && ! $item->loaded())
      Request::redirect_initial($this->request->route()->uri(array ('id' => $category_id, 'action' => 'edit', 'keyword_id' => 0)));
    
    if ( ! $item->loaded()) {
      $s = 'navigation_' . $this->request->controller() . '_new';
      Navigation::add((___($s) != $s) ?  ___($s) : ___('navigation_new'), Request::initial_url());
    }
    else {
      Navigation::add($item->get_navigation_val(), Request::initial_url());
      $s = 'navigation_' . $this->request->controller() . '_edit';
      Navigation::add((___($s) != $s) ?  ___($s) : ___('navigation_edit'), Request::initial_url());
    }
    
    $this->_add_bookmarks($category_id);
    
    // form
    $form = Forms_List::get($this->_form_name, $this->_model, $this->_model, $keyword_id, array ('category_id' => $category_id));
    
    $this->_view = View::factory($this->_edit_view);
    $this->_view->form = $form;
  }
}

