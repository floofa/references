<?php defined('SYSPATH') or die('No direct script access.');

class Form_Reference_Category_Edit extends Forms_List
{
  public function build()
  {
    $this->group('group1');
    $this->col('col1')
      ->add('name')
      ->add('rew_id');
      
    $this->col('col2')
      ->add('cms_status', 'bool', array ('value' => TRUE));
  }
  
  public function set_rules()
  {
    $this->rules('name', array (
      array ('not_empty'),
      array ('max_length', array (':value', 80)),
    ));
    
    $this->rules('rew_id', array (
      array ('max_length', array (':value', 80)),
    ));
  }
}
