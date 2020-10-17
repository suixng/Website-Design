<?php
$arr['success']  = 0;
$arr['msg'] = '登入失败';
$arr['username'] = $_POST['username'];
echo json_encode($arr);
?>