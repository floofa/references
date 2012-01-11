<?foreach ($menu->get_items() as $item):?>
  <a href="<?=$item['link']?>" class="btn<?if ($item['first']):?> top_radius<?endif;?><?if ($item['last']):?> bottom_radius<?endif;?><?if($item['active']):?> active<?endif;?>"><span><?=$item['label']?></span></a>
<?endforeach;?>
        