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
</div>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/public/main.min.js')?>
</body>
</html>