<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Reference extends ORM 
{
  protected $_belongs_to = array ('reference_category' => array ());
  
  protected $_sorting = array ('sequence' => 'DESC');
  
  public function list_count_all()
  {
    $ids = ORM::factory('reference_category')->where('cms_status', '=', 1)->find_all()->as_array('id', 'id');
    
    return $this->where('reference_category_id', 'IN', $ids)->where('cms_status', '=', 1)->count_all();
  }
  
  public function list_all($limit = FALSE, $offset = FALSE)
  {
    // id kategorii povolenych k zobrazeni
    $ids = ORM::factory('reference_category')->where('cms_status', '=', 1)->find_all()->as_array('id', 'id');
    
    $this->where('reference_category_id', 'IN', $ids)->where('cms_status', '=', 1);
    
    if ($limit !== FALSE)
      $this->limit($limit);
    
    if ($offset !== FALSE)
      $this->offset($offset);
    
    return $this->find_all();
  }
  
  public function get_url()
  {
    return Route::url('references_get', array ('category_rew_id' => $this->reference_category->rew_id, 'rew_id' => $this->rew_id), TRUE);
  }
}