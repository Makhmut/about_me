<?php

$name = '������';
$town = '������, (���������)';
$age = '������';
$email = 'makhmud_92.kz@inbox.ru';
$about_text = '� ����� ��������������� �� ����� ���������� ����� php';

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
		<th colspan="2"> �������� ������������ <?php echo $name; ?></th>
	</tr>
	<tr>
		<td>���</td>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<td>�������</td>
		<td><?php echo $age; ?></td>
	</tr>
	<tr>
		<td>����� ����������� �����</td>
		<td><?php echo $email; ?></td>
	</tr>
	<tr>
		<td>�����</td>
		<td><?php echo $town; ?></td>
	</tr>
	<tr>
		<td>� ����</td>
		<td><?php echo $about_text; ?></td>
	</tr>
</table>

</body>
</html>
