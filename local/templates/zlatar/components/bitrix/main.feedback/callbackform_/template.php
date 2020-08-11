<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>


<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
    <h2 class="title modal-title">Заявка на звонок</h2>
    <div class="modal-content">
        <div class="field-group">
            <label class="field-label"><?=GetMessage("MFT_NAME")?></label>
            <input type="text" class="field" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
        </div>
        <div class="field-group">
            <label class="field-label"><?=GetMessage("MFT_EMAIL")?></label>
            <input type="email" class="field" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
        </div>
        <div class="field-group">
            <label class="field-label">Номер Вашего телефона:</label>
            <input type="text" class="field">
        </div>
        <div class="field-group">
            <label class="field-label"><?=GetMessage("MFT_MESSAGE")?></label>
            <textarea name="MESSAGE" class="field" cols="5" rows="5"><?=$arResult["MESSAGE"]?></textarea>
        </div>
    </div>
    <?if($arParams["USE_CAPTCHA"] == "Y"):?>
        <div class="mf-captcha">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
            <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
        </div>
    <?endif;?>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

    <div class="modal-footer">
        <input type="submit" name="submit" class="btn hide-modal" value="<?=GetMessage("MFT_SUBMIT")?>">
    </div>

</form>
</div>