<?php

$db_user ='root';
$db_pass ='';
$db_name ='try2';

$db =new PDO('mysql:host=127.0.0.1;dbname='.$db_name.';charset=utf8',$db_user,$db_pass);

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>