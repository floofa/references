<?php defined('SYSPATH') or die('No direct script access.');

abstract class Cms_Controller_References extends Controller_Builder_Template_Application_Type
{
  protected $_model = 'reference';
  protected $_model_category = 'reference_category';
  protected $_page_type = 'references';
  
  public function action_list()
  {
    $category = ORM::factory('reference_category')->find();
    
    if ($category->loaded())
      Request::redirect_initial(Route::get('references_category')->uri(array ('category_rew_id' => $category->rew_id)));
  }
}
