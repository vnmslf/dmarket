<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<? if ($arResult["isFormErrors"] == "Y") : ?><?= $arResult["FORM_ERRORS_TEXT"]; ?><? endif; ?>

<?= $arResult["FORM_NOTE"] ?>

<? if ($arResult["isFormNote"] != "Y") {
?>


	<div class="wrap_md1">
		<table class="form">
			<?
			if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y") {
			?>
				<tr>
					<td><?
						/***********************************************************************************
					form header
						 ***********************************************************************************/
						if ($arResult["isFormTitle"]) {
						?>
							<h3>Регистрация оптовика</h3>
						<?
						} //endif ;

						if ($arResult["isFormImage"] == "Y") {
						?>
							<a href="<?= $arResult["FORM_IMAGE"]["URL"] ?>" target="_blank" alt="<?= GetMessage("FORM_ENLARGE") ?>"><img src="<?= $arResult["FORM_IMAGE"]["URL"] ?>" <? if ($arResult["FORM_IMAGE"]["WIDTH"] > 300) : ?>width="300" <? elseif ($arResult["FORM_IMAGE"]["HEIGHT"] > 200) : ?>height="200" <? else : ?><?= $arResult["FORM_IMAGE"]["ATTR"] ?><? endif; ?> hspace="3" vscape="3" border="0" /></a>
							<? //=$arResult["FORM_IMAGE"]["HTML_CODE"]
							?>
						<?
						} //endif
						?>

						<p><?= $arResult["FORM_DESCRIPTION"] ?></p>
					</td>
				</tr>
			<?
			} // endif
			?>
		</table>
		<br />
		<?
		/***********************************************************************************
						form questions
		 ***********************************************************************************/
		?>
		<table class="form-table data-table">

			<div class="form_body">
				<?
				foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
				?>
					<div class="form-control">

						<label><span>
								<? if (isset($arResult['FORM_ERRORS'][$FIELD_SID])) : ?>
									<span class="error-fld" title="<?= htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID]) ?>"> </span>
								<? endif; ?>
								<?= $arQuestion["CAPTION"] ?>&nbsp<span class="star"><? if ($arQuestion["REQUIRED"] == "Y") : ?><?= $arResult["REQUIRED_SIGN"]; ?><? endif; ?></span></label>
						<?= $arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />" . $arQuestion["IMAGE"]["HTML_CODE"] : "" ?>
						<?= $arQuestion["HTML_CODE"] ?>
					</div>


				<?
				} //endwhilez
				?>


				<div class="form-control captcha-row clearfix">

					<?
					if ($arResult["isUseCaptcha"] == "Y") {
					?>


						<label><?= GetMessage("FORM_CAPTCHA_FIELD_TITLE") ?>&nbsp
							<span class="star"><?= $arResult["REQUIRED_SIGN"]; ?></span></label>

						<div class="captcha_input"> 
<input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext captcha" required="" aria-required="true"/>
<input type="hidden" name="captcha_sid" value="<?= htmlspecialcharsbx($arResult["CAPTCHACode"]); ?>" />

								</div>
<div class="captcha_image">
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?= htmlspecialcharsbx($arResult["CAPTCHACode"]); ?>" width="180" height="40" />
						</div>
					<?
					} // isUseCaptcha
					?>
				</div>
				<div class="form_footer">
					<div class="line-block form_footer__bottom">
						<?= $arResult["FORM_FOOTER"] ?>
						<div class="line-block__item">

							<button class="btn btn-lg btn-default" <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> type="submit" name="web_form_submit">
								<span><?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?></span> </button>
						</div>

					</div>
				</div>
		</table>
	</div>


<?
} //endif (isFormNote)
?>