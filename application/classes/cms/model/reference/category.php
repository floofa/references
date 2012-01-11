<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Reference_Category extends ORM 
{
  protected $_has_many = array ('references' => array ());
  
  protected $_sorting = array ('sequence' => 'DESC');
  
  public function get_url()
  {
    return Route::url('references_category', array ('category_rew_id' => $this->rew_id), TRUE);
  }
}