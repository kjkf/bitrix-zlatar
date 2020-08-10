<?
if (mail("lolau@yandex.ru","test subject", "test body","From: yakjkf@gmail.com"))
    echo "Сообщение передано функции mail, проверьте почту в ящике.";
else
    echo "Функция mail не работает, свяжитесь с администрацией хостинга.";
?>