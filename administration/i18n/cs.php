<?php defined('SYSPATH') or die('No direct script access.');

return array
(
  'cms_menu_references_module' => 'Reference',
  'cms_menu_references_module_references' => 'Správa referencí',
  'cms_menu_references_module_references_categories' => 'Kategorie referencí',
  
  'navigation_references' => 'Reference',
  'navigation_references_categories' => 'Kategorie referencí',
  'navigation_references_categories_keywords' => 'Klíčová slova',
  
  'bookmarks_references_categories_keywords' => 'Klíčová slova',

  // reference
  'list_reference_heading' => 'Výpis referencí',
  'list_reference_new_button' => 'Nová reference',
  'list_reference_fields' => array ('name' => 'Název', 'category' => 'Kategorie', 'cms_status' => 'Zobrazit'),
  
  // kategorie referenci
  'list_reference_category_heading' => 'Výpis kategorií referencí',
  'list_reference_category_new_button' => 'Nová kategorie',
  'list_reference_category_fields' => array ('name' => 'Název', 'cms_status' => 'Zobrazit'),
  
  // kategorie referenci - klicova slova
  'list_reference_category_keyword_heading' => 'Výpis klíčových slov',
  'list_reference_category_keyword_new_button' => 'Nové klíčové slovo',
  'list_reference_category_keyword_fields' => array ('name' => 'Název'),
  
  //-------- FORMS ------------ //
  'form_reference_edit_heading' => 'Editace článku',
  'form_reference_edit_group_references_images' => 'Obrázky',
  'form_reference_edit_field_name' => 'Nadpis',
  'form_reference_edit_field_rew_id' => 'Url',
  'form_reference_edit_field_timestamp' => 'Datum',
  'form_reference_edit_field_reference_category_id' => 'Kategorie',
  'form_reference_edit_field_reference_category_keyword_id' => 'Klíčové slovo',
  'form_reference_edit_field_meta_keywords' => 'Meta keywords',
  'form_reference_edit_field_meta_description' => 'Meta description',
  'form_reference_edit_field_cms_status' => 'Zobrazit',
  'form_reference_edit_field_anotation' => 'Anotace',
  'form_reference_edit_field_content' => 'Obsah',
  
  // edit reference category
  'form_reference_category_edit_heading' => 'Editace kategorie článku',
  'form_reference_category_edit_field_name' => 'Název',
  'form_reference_category_edit_field_rew_id' => 'Url',
  'form_reference_category_edit_field_cms_status' => 'Zobrazit',
  'form_reference_category_edit_field_description' => 'Popis',
  
  // kategorie -referenci - klicova slova
  'form_reference_category_keyword_edit_heading' => 'Editace klíčového slova',
  'form_reference_category_keyword_edit_field_name' => 'Název',
);