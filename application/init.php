<?php defined('SYSPATH') or die('No direct script access.');

Route::set('references_get', 'reference/<category_rew_id>/<rew_id>')
  ->defaults(array(
    'controller' => 'references',
    'action' => 'get',
));

Route::set('references_category', 'reference/<category_rew_id>')
  ->defaults(array(
    'controller' => 'references',
    'action' => 'list_category',
));

Route::set('references', 'reference')
  ->defaults(array(
    'controller' => 'references',
    'action' => 'list',
));


