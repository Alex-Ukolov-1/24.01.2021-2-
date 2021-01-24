<html>
<head>
</head>
<body>
<?php
if (move_uploaded_file($_FILES['filename'] ['tmp_name'],$_FILES [ 'filename'] [ 'name']))
echo 'Файл успешно загружен';
else 
{
echo 'Ошибка загрузки файла';
}
?>
</body>
</html>