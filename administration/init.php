<?php defined('SYSPATH') or die('No direct script access.');

Route::set('references_categories_keywords', 'references_categories/<id>/references_categories_keywords(/<action>(/<keyword_id>))')
  ->defaults(array(
    'controller' => 'references_categories_keywords',
    'action' => 'list',
));


