<?php

 $name = $_POST['project-name'];
 $data = array();
 $data['mes'] = 'OK';

 if ($name === '') {
 	$data['status'] = 'error';
 	$data['text'] = 'Заполните имя!';
 }else{
	$data['status'] = 'OK';
 	$data['text'] = 'Имя заполненно корректно, все ОК!';
 };

header("Content-Type: application/json");
echo json_encode($data);
exit;

?>