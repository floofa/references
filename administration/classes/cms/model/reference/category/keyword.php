<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Reference_Category_Keyword extends ORM_Classic 
{
  protected $belongs_to = array ('reference_categories' => array ());
  protected $_has_many = array ('references' => array (), 'reference_categories' => array ());
  
  protected $_sorting = array ('name' => 'ASC');
  
  public function set_list_item_default(&$arr, $item) 
  {
    
  }
}