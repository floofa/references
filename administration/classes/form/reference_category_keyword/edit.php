<?php defined('SYSPATH') or die('No direct script access.');

class Form_Reference_Category_Keyword_Edit extends Forms_List
{
  public function build()
  {
    $this->group('group1');
    $this->col('col1')
      ->add('name');      
  }
  
  public function set_rules()
  {
    $this->rules('name', array (
      array ('not_empty'),
      array ('max_length', array (':value', 50)),
    ));
  }
  
  public function do_form($values = array (), $refresh = FALSE, $redirect = TRUE)
  {
    $values['reference_category_id'] = $this->_data['category_id'];
    
    parent::do_form($values, FALSE, FALSE);
    
    Request::redirect_initial(Request::initial()->route()->uri(array ('id' => $this->_data['category_id'])));
  }
  
  public function get_back_link()
  {
    return Route::url(Route::name(Request::initial()->route()), array ('id' => $this->_data['category_id']));
  }
}
