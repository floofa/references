<?php defined('SYSPATH') or die('No direct script access.');

class Form_Reference_Edit extends Forms_List
{
  public function build()
  {
    $this->group('group1');
    $this->col('col1')
      ->add('name')
      ->add('rew_id')
      ->add('cms_status', 'bool', array ('value' => TRUE));
      
    $this->col('col2')
      ->add('reference_category_id', 'select', array ('options' => array ('' => '--- Vyberte ---') +  ORM::factory('reference_category')->find_all()->as_array('id', 'name')));
      
    $this->col('col')
      ->add('anotation', 'textarea', array ('attr' => array ('rows' => 3)))
      ->add('content', 'textarea', array ('attr' => array ('rows' => 8)));
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
    
    $this->rules('reference_category_id', array (
      array('not_empty'),
    ));
    
    $this->rules('anotation', array (
      array ('max_length', array (':value', 250)),
    ));
  }
}
