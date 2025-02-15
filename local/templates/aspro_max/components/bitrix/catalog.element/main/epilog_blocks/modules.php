<?use Bitrix\Main\Localization\Loc;?>
<?if($templateData['PRODUCT_SET_OPTIONS']['PRODUCT_SET'] && $templateData['PRODUCT_SET_OPTIONS']['PRODUCT_SET_FILTER']):?>
	<?						
	if($templateData['PRODUCT_SET_OPTIONS']['PRODUCT_SET_FILTER']){
		$cond = new CMaxCondition();
		try{
			$arTmpGoods = \Bitrix\Main\Web\Json::decode($templateData['PRODUCT_SET_OPTIONS']['PRODUCT_SET_FILTER']);
			$arExGoodsFilter = $cond->parseCondition($arTmpGoods, $arParams);
		}
		catch(\Exception $e){
			$arExGoodsFilter = array();
		}
		unset($arTmpGoods);

		$GLOBALS['arrProductsSetFilter'] = array($arExGoodsFilter);
		//unset($arParams['CONTENT_LINKED_FILTER_BY_FILTER']);
	}
	
	$bUseSetGroup = $templateData['PRODUCT_SET_OPTIONS']['PRODUCT_SET_GROUP'];
	if($bUseSetGroup){
		$arItemsFilter = array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y");
		$arItemsFilter = array_merge($arItemsFilter, $GLOBALS['arrProductsSetFilter']);

		if($GLOBALS['arRegion']){
			if(CMax::GetFrontParametrValue('REGIONALITY_FILTER_ITEM') == 'Y' && CMax::GetFrontParametrValue('REGIONALITY_FILTER_CATALOG') == 'Y'){
				$arItemsFilter['PROPERTY_LINK_REGION'] = $GLOBALS['arRegion']['ID'];
				CMax::makeElementFilterInRegion($arItemsFilter);
			}
		}			

		$arItems = CMaxCache::CIBLockElement_GetList(array('CACHE' => array("MULTI" =>"Y", "TAG" => CMaxCache::GetIBlockCacheTag($arParams["IBLOCK_ID"]))), $arItemsFilter, false, array("nTopCount" => 10000), array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID"));
		
		if($arItems)
		{
			$arSectionsID = $arProductSection = array();
			foreach($arItems as $arItem)
			{
				if($arItem["IBLOCK_SECTION_ID"])
				{
					if(is_array($arItem["IBLOCK_SECTION_ID"])){
						$arSectionsID = array_merge($arSectionsID, $arItem["IBLOCK_SECTION_ID"]);
						foreach($arItem["IBLOCK_SECTION_ID"] as $sectId){
							$arProductSection[$sectId][] = $arItem["ID"];
						}										
					}										
					else{
						$arSectionsID[] = $arItem["IBLOCK_SECTION_ID"];
						$arProductSection[$arItem["IBLOCK_SECTION_ID"]][] = $arItem["ID"];
					}										
				}
			}

			if($arSectionsID){
				$arSectionsID = array_unique($arSectionsID);
			}
		}

		//get sections title
		$arSectionsName = CMaxCache::CIBlockSection_GetList(array('CACHE' => array("MULTI" =>"Y", "TAG" => CMaxCache::GetIBlockCacheTag($arParams["IBLOCK_ID"]))), array('ACTIVE' => 'Y', "ID" => $arSectionsID, "IBLOCK_ID" => $arParams["IBLOCK_ID"]), false, array("ID", "IBLOCK_ID", "NAME"), array("nTopCount" => 5000));
		$arSectionsName = array_column($arSectionsName, NULL, 'ID');
		//if need seo section names
		// foreach($arSectionsName as $keySect => $arSect){
		// 	$ipropValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arParams['IBLOCK_ID'], $arSect["ID"]);
		// 	$arSectionsName[$keySect]['IPROPERTY_VALUES'] = $ipropValues->getValues();
		// }
	} else {
		$arProductSection = array('0' => '0');
	}
	?>
	<?if(!empty($arExGoodsFilter)):?>
		<?$arConfigTransfer = array(
			"LIST_OFFERS_LIMIT" => $arParams["OFFERS_LIMIT"],
			"LIST_OFFERS_PROPERTY_CODE" => $arParams["LIST_OFFERS_PROPERTY_CODE"],
			"SHOW_GALLERY" => $arParams["SHOW_GALLERY"],
			"MAX_GALLERY_ITEMS" => $arParams["MAX_GALLERY_ITEMS"],
			"SHOW_POPUP_PRICE" => CMax::GetFrontParametrValue('SHOW_POPUP_PRICE'),
			"ADD_DETAIL_TO_SLIDER" => $arParams["ADD_DETAIL_TO_SLIDER"],
			"DISPLAY_COMPARE" => CMax::GetFrontParametrValue('CATALOG_COMPARE'),
			"DISPLAY_WISH_BUTTONS" => $arParams["DISPLAY_WISH_BUTTONS"],
		);	

		$arTransferParams = \Aspro\Functions\CAsproMax::getTransferParams($arParams, $arConfigTransfer);

		$application = \Bitrix\Main\Application::getInstance();
		$request = $application->getContext()->getRequest();

		//Show all results simultaneously
		$bKitShowAll = $arParams['SHOW_KIT_ALL'] === 'Y';
		$bAjaxKitShowAll = isset($request['SHOW_ALL']) && $request['SHOW_ALL'] === 'Y';
		$bAjaxPagenavigation = isset($request['pagen_data_block']) && $request['pagen_data_block'] === 'Y';
		?>
		<div class="ordered-block <?=$code?> js-scroll-complect complect_main_wrap js_wrapper_items" data-params='<?=str_replace('\'', '"', CUtil::PhpToJSObject($arTransferParams, false))?>'>
			<div class="complect_header_block">
				<div class="ordered-block__title option-font-bold font_lg">
					<?=$arParams["DETAIL_SET_PRODUCT_TITLE"];?>
				</div>
				<div class="flexbox flexbox--row align-items-center justify-content-between flex-wrap product-info-headnote opt-buy bordered rounded3 show_on_mobile">
					<div class="col-auto">
						<div class="product-info-headnote__inner">
							<div class="product-info-headnote__check">
								<div class="filter label_block">
									<input type="checkbox" name="select_all_items" id="select_all_items" value="Y">
									<label for="select_all_items"><?=Loc::getMessage("T_COMPLECT_ALL_ON");?></label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-auto">
						<div class="buy_complect_wrap">
							<span data-currency="RUB" class="button_buy_complect opt_action btn btn-default btn-sm no-action" data-action="buy" data-iblock_id="<?=$arParams["IBLOCK_ID"]?>"><span><?=\Bitrix\Main\Config\Option::get("aspro.max", "EXPRESSION_ADDTOBASKET_BUTTON_DEFAULT", GetMessage("EXPRESSION_ADDTOBASKET_BUTTON_DEFAULT"));?></span></span>
						</div>
					</div>
				</div>
			</div>

			<? /** open container wrapper on option */ ?>
			<? if ($bKitShowAll): ?>
			<div class="complect-block-wrapper js-load-block loader_circle " data-block="complect" data-file="<?=$APPLICATION->GetCurPage()?>" data-show_all="Y">
				<div class="stub"></div>
			<? endif; ?>
			<? /** */ ?>
				<? if(CMax::checkAjaxRequest() || CMax::checkAjaxRequest2() || !$bKitShowAll): ?>
					<?
						/** start ajax container */
						if ($bAjaxKitShowAll) {
							CMax::checkRestartBuffer(true, 'complect');
							$APPLICATION->ShowAjaxHead();
						}
						/** */
					?>
					
					<? foreach($arProductSection as $sectionId => $sectionProducts): ?>
						<?
							$bNotCurrentBlockPagenavigation = $bAjaxPagenavigation && isset($request['data_block']) && $request['data_block'] !== 'complect_'.$sectionId;
							$bNotCurrentBlock = !$bKitShowAll && isset($request['BLOCK']) && $request['BLOCK'] !== 'complect_'.$sectionId;
							
							// skip extra iterations on ajax pagination request
							if ($bNotCurrentBlockPagenavigation || $bNotCurrentBlock) {
								continue; 
							}
						?>
						
						<div class="complect-block cur" data-code="block">
							
							<?if($bUseSetGroup):?>
								<div class="complect-block__title option-font-bold font_lg">
									<?=$arSectionsName[$sectionId]["NAME"];?>
								</div>
							<?endif;?>

							<div class="tabs_slider nav-data_block<?= !$bKitShowAll ? ' js-load-block loader_circle ' : ' '; ?>" data-block="complect_<?=$sectionId?>" data-file="<?=$APPLICATION->GetCurPage()?>">								
								<?
									/** start ajax block */
									if ($bAjaxPagenavigation && !$bAjaxKitShowAll) {
										$APPLICATION->RestartBuffer();
										$arParams["FROM_AJAX"] = 'Y';
									} elseif(!$bKitShowAll) {
										echo '<div class="stub"></div>';
										CMax::checkRestartBuffer(true, 'complect_'.$sectionId);
									}
									/** */

									if (CMax::checkAjaxRequest() || CMax::checkAjaxRequest2()) {
										if (!$bKitShowAll && !$bAjaxPagenavigation) {
											$APPLICATION->ShowAjaxHead();
										}

										// set set current group filter
										$GLOBALS["NavNum"] = 0;
										if($bUseSetGroup){
											$GLOBALS['arrProductsSetFilter'] = [
												'ID' => $sectionProducts,
												'!PROPERTY_PRODUCT_SET_VALUE' => 'Y',
											];
										}

										include $_SERVER['DOCUMENT_ROOT'].SITE_DIR.'/include/detail.complect_products_block.php';
									}

									/** end ajax block */
									if ($bAjaxPagenavigation && !$bAjaxKitShowAll) {
										die();
									} elseif(!$bKitShowAll) {
										CMax::checkRestartBuffer(true, 'complect_'.$sectionId);
									}
									/**  */
								?>
							</div>
						</div>
					<? endforeach; ?>
					
					<?
						/** end ajax container */
						if ($bAjaxKitShowAll) {
							CMax::checkRestartBuffer(true, 'complect');
						}
						/** /end ajax container */
					?>
				<? endif; ?>

			<? /** close container wrapper on option */ ?>
			<? if ($bKitShowAll): ?>
			</div>
			<? endif; ?>
			<? /** */ ?>
		</div>
	<?endif;?>
<?endif;?>