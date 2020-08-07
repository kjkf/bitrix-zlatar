<?php
/**
 * Created by IntelliJ IDEA.
 * User: yakjk
 * Date: 04.08.2020
 * Time: 13:44
 */

?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div>
</div>
<footer class="footer">
    <div class="contacts footer__contacts">
            <span class="ic location">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/address.php",
                    array(),
                    array(
                        "MODE" => "text"
                    )
                )?>

            </span>
    </div>
</footer>
<!-- модальное окно -->
<div class="modal modal-order">
    <div class="modal__in">
        <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", Array(
            "EMAIL_TO" => "yakjkf@gmail.com",	// E-mail, на который будет отправлено письмо
            "EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
            "REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
                0 => "NAME",
                1 => "EMAIL",
                2 => "MESSAGE",
            ),
            "USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
        ),
            false
        );?>
    </div>
</div>
</div>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/public/scripts.js')?>
</body>
</html>