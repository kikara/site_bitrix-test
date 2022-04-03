<?php
if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="row h-scroll main-body__block">
    <?php foreach ($arResult["ITEMS"] as $item) :?>
    <?php
        $countIngredients = 0;
        if (! empty($item['PROPERTIES']['INGREDIENTS']['VALUE'])) {
            $countIngredients = count(explode(' ', $item['PROPERTIES']['INGREDIENTS']['VALUE']));
        }
        ?>
    <div class="v-block-ref main-body__item">
        <div class="img-cover main-body__item-img" style="background-image: url(<?=$item['PREVIEW_PICTURE']['SRC']?>)"></div>
        <div class="main-body__item-title">
            <a class="main-body__item-ref" href="<?= $item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a>
        </div>
        <div class="row main-body__item-line">
            <span><?=$countIngredients . ' ' . GetMessage("INGREDIENTS")?></span>
            <div class="main-body__item-state">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/clock.svg">
                <span class="main-body__item-state-text"><?=$item['PROPERTIES']['TIME']['VALUE'] . ' ' . GetMessage("TIME")?: 0?></span>
            </div>
            <div class="main-body__item-state">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/favorites.svg">
                <span class="main-body__item-state-text"><?=$item['PROPERTIES']['FAVORITES']['VALUE'] ?: 0?></span>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>