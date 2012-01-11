<?php defined('SYSPATH') or die('No direct access allowed.');

$config['reference_images']['file_size_limit'] = '10MB';
$config['reference_images']['file_types'] = '*.jpg;*.jpeg;*.png;*.gif;*.bmp';
$config['reference_images']['file_types_desc'] = 'Obrázky';

$config['thumbs']['reference_images'] = array (
  's'   => array ('width' => 90, 'height' => 90),
);

return $config;

