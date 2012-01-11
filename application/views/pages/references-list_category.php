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
        <div class="ref_filter">
        <form action="index.html" method="get">
          <fieldset>
            <select class="selectbox onchange" name="filter" sb="51664519" style="display: none; ">
              <option disabled="disabled">vyberte kategorii</option>
              <option value="vodovody">vodovody</option>
              <option value="kanalizace">kanalizace</option>
            </select>
            <p>filtrovat:</p>
          </fieldset>
        </form>
        </div>
        <div class="ref_list">
          <?foreach ($items as $item):?>
            <div class="item<?if (strlen($item->content)):?> more<?endif;?>">
              <?if (strlen($item->content)):?><a href="<?=Route::url('references_get', array ('category_rew_id' => $item->reference_category->rew_id, 'rew_id' => $item->rew_id))?>"><?endif;?>
                <strong><?=$item->name?></strong>
                <?=$item->anotation?>
              <?if (strlen($item->content)):?></a><?endif;?>
            </div>
          <?endforeach;?>
        </div>
      </div>

    <div class="clear"></div>
    </div>