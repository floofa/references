<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_Reference extends ORM_Classic 
{
  protected $_belongs_to = array ('reference_category' => array (), 'reference_category_keyword' => array ());
  protected $_sorting = array ('sequence' => 'DESC');
  
  public function set_list_item_default(&$arr, $item) 
  {
    $arr['category'] = $item->reference_category->name;
    $arr['cms_status'] = ($item->cms_status) ? ___('basic_yes') : ___('basic_no');
  }
}