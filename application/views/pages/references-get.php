<div class="references">

      <div class="ref_navigation">
        <a href="index.php?id=reference" class="btn top_radius"><span>Rekonstrukce a výstavba inženýrských sítí</span></a>
        <a href="index.php?id=reference" class="btn"><span>Koncepční příprava územních celků</span></a>
        <a href="index.php?id=reference" class="btn active"><span>Pozemní stavby<br>vč. inženýrských sítí</span></a>
        <a href="index.php?id=reference" class="btn"><span>Komunikace a doprava,<br>terénní úpravy</span></a>
        <a href="index.php?id=reference" class="btn"><span>Kanalizace a vodovody</span></a>
        <a href="index.php?id=reference" class="btn bottom_radius"><span>Plynofikace měst a obcí</span></a>
      </div>

      <div class="ref_container">
        <div class="ref_detail">
          <a href="<?=Route::url('references_category', array ('category_rew_id' => $item->reference_category->rew_id), TRUE)?>" class="back"><span>&lt; </span>zpět</a>
          <h1><?=$item->name?></h1>
          
          <table cellspacing="0">
            <tbody><tr>
              <td>Investor:</td>
              <td>Obec Malý Beranov</td>
            </tr>
            <tr>
              <td>Projektová dokumentace:</td>
              <td>1995-96</td>
            </tr>
            <tr>
              <td>Realizace:</td>
              <td>1995-97, UNIST s.r.o. Jihlava</td>
            </tr>
            <tr>
              <td>Investiční náklad:</td>
              <td>6 mil. Kč</td>
            </tr>
          </tbody></table>

          <?=$item->content?>

          <h2>Fotografie</h2>
          <a rel="gallery" href="public/images/temp/gallery_large.jpg" class="fancybox"><img src="public/images/temp/gallery.jpg"></a>
          <a rel="gallery" href="public/images/temp/gallery_large.jpg" class="fancybox"><img src="public/images/temp/gallery.jpg"></a>
          <a rel="gallery" href="public/images/temp/gallery_large.jpg" class="fancybox"><img src="public/images/temp/gallery.jpg"></a>
          <a rel="gallery" href="public/images/temp/gallery_large.jpg" class="fancybox"><img src="public/images/temp/gallery.jpg"></a>
          <a rel="gallery" href="public/images/temp/gallery_large.jpg" class="fancybox last"><img src="public/images/temp/gallery.jpg"></a>
          <div class="clear"></div>
        </div>
      </div>

    <div class="clear"></div>
    </div>