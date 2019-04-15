/*<meta charset='utf-8'>
<?php
	$theme = 'avtodiagnost';
	if (isset($_POST['phone'])) {$phone	= $_POST['phone']; if ($phone == '') {unset($phone);}}
	if (isset($_POST['text'])) {$text	= $_POST['text']; if ($text == '') {unset($text);}}

	$address = 'linz14@mail.ru';
	$note_text = "Тема: $theme\nТелефон: $phone\nТекст: $text";

	if (	isset($phone) || isset($text)	) {
		mail($address, $theme, $note_text,"Content-type:text/plain; windows:1251");
	echo "Ваше сообщение отправлено, ?> +
	<a href="/">вернуться на главную</a> +
	<? ";
	}
