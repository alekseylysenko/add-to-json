
<?php 
$field_names = $_POST['name_user'];   
$field_text = $_POST['comment'];

$file = file_get_contents('db.json');  // Открыть файл data.json
$taskList = json_decode($file, TRUE);    // Декодировать в JSON массив
unset($file); 
$taskList = array('name' => $field_names, 'text' => $field_text);

file_put_contents('db.json',json_encode($taskList, JSON_UNESCAPED_UNICODE));
unset($taskList); 
unset($field_text); 
unset($field_name); 
?>
<script language="javascript" type="text/javascript">
window.location = 'index.html';
</script>