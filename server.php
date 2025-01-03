<?php
// включаем сообщения об ошибках
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// коннект с сервером бд
$db = new mysqli('shop', 'root', '', 'products'); 
// задаем кодировку
$db->set_charset("utf8mb4"); 