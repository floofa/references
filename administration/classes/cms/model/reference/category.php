<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Reference_Category extends ORM_Classic 
{
  protected $_has_many = array ('references' => array (), 'reference_category_keywords' => array ());
  
  protected $_sorting = array ('sequence' => 'DESC');
  
  public function set_list_item_default(&$arr, $item) 
  {
    $arr['name'] = str_replace('<br />', ' ', $item->name);
    $arr['cms_status'] = ($item->cms_status) ? ___('basic_yes') : ___('basic_no');
  }
}