<?php
if(isset($_FILES['avatar']))
{
$file=$_FILES['avatar'];
print("Загружен файл с именем".$file['name']."и размером".$file['size']."байт");
}
?>
<?php
$current_path=$_FILES['avatar']['tmp_name'];
$filename=$_FILES['avatar']['name'];
$new_path=dirname(__FILE__).'/'.$filename;
move_uploaded_file($current_path,$new_path);
?>
