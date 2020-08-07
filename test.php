<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle(""); ?><?$APPLICATION->IncludeComponent("pixelb:backcall", "backcallForm", Array(
	"CONTACT_FIELDS_LABEL" => "Контактные данные",	// Подпись к контактным данным
		"EMAIL_TO" => "lolau@yandex.ru",	// Электронная почта получателя сообщения
		"EMAIL_TO_IBLOCK" => "0",	// Инфоблок для получения дополнительных адресов получателей сообщения
		"EMAIL_TO_IBLOCK_ADD1_PROPERTY" => "0",	// Свойство инфоблока для отображения
		"EMAIL_TO_IBLOCK_ADD_IGNORE_PROPERTY" => "0",	// Свойство инфоблока обязательно заполненное у элемента
		"EMAIL_TO_IBLOCK_ADD_PROPERTY" => "0",	// Свойство инфоблока для отображения
		"EMAIL_TO_IBLOCK_CACHE_TIME" => "3600000",	// Время кэширования выборки из инфоблока (0 - отключено)
		"EMAIL_TO_IBLOCK_LABEL" => "Тема вопроса",	// Подпись к списку
		"EMAIL_TO_IBLOCK_PROPERTY" => "0",	// Свойство инфоблока содержащее адрес получателя
		"ENABLED_FIELDS" => array(	// Поля для заполнения
			0 => "form_client_name",
			1 => "form_email",
			2 => "form_client_phone",
			3 => "form_comment",
		),
		"ERROR_REQUIRED_TEXT" => "Сообщение не отправлено",	// Сообщение о незаполненных полях
		"ERROR_TEXT" => "Сообщение не отправлено",	// Сообщение о неудачной попытке отправки письма
		"EVENT_ET_MESSAGE_ID" => "PB_BACKCALL_FORM_EVENT",	// Тип почтового шаблона
		"EVENT_MESSAGE_ID" => "31",	// Почтовый шаблон для отправки сообщения
		"FORM_ID" => "backcallForm",	// ID формы
		"FORM_RULES_ADDRESS" => "",	// Адрес страницы с политикой обработки персональных данных
		"MESSAGE_MAX_STRLEN" => "300",	// Максимальная длина данных
		"OK_TEXT" => "Сообщение успешно отправлено",	// Сообщение об успешной отправке письма
		/*"POP_HEADING_LABEL" => "Отправить сообщение",	// Заголовок всплывающего окна*/
		"REQUIRED_FIELDS" => array(/*	// Поля обязательные для заполнения
			0 => "form_client_name",
			1 => "form_email",
			2 => "form_client_phone",
			3 => "form_comment",*/
		),
		"SHOW_FORM_RULES" => "Y",	// Отображать правила отправки формы
		"TRIGGER_LABEL" => "Отправить",	// Текст триггера
		"TRIGGER_LABEL1" => "Заказать обратный звонок",	// Всплывающая подсказка
		"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
		"USE_ICON" => "0",	// Использовать иконку
		"USE_SYSTEM_JQUERY" => "Y",	// Подключить системную библиотеку JQUERY (Если в шаблоне не подключена библиотека JQUERY)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>