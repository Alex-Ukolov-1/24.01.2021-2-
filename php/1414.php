
<html lang="ru">
<head>
<title>HTML-фopмa</title>
<meta charset='utf-8'>
</head>
<body>
<form action='1414.php' method='post'>
<input type='text' name='first'>
<input type='submit' value='Отправить'>
</form>
</body>
</html> 

<?php
class red
{
	function bring()
 {
if(empty($_POST['first']))
{
	exit('текстовое поле не заполненно');
}
else
{
	echo htmlspecialchars($_POST['first']);
}
 }
}
$ball=new red();
echo $ball->bring();
?>
