<?php

$name = 'Махмут';
$town = 'Атырау, (Казахстан)';
$age = 'Махмут';
$email = 'makhmud_92.kz@inbox.ru';
$about_text = 'Я учусь программировать на самым популярным языке php';

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name . ' - ' . $about_text; ?></title>
	<meta charset = "utf-8" />
	<style>
		table {
			border: 1;
		}
	</style>
</head>
<body>

<table>
	<tr>
		<th colspan="2"> Страница пользователя <?php echo $name; ?></th>
	</tr>
	<tr>
		<td>Имя</td>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<td>Возраст</td>
		<td><?php echo $age; ?></td>
	</tr>
	<tr>
		<td>Адрес электронной почты</td>
		<td><?php echo $email; ?></td>
	</tr>
	<tr>
		<td>Город</td>
		<td><?php echo $town; ?></td>
	</tr>
	<tr>
		<td>О себе</td>
		<td><?php echo $about_text; ?></td>
	</tr>
</table>

</body>
</html>
