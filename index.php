<?php
$date=date_create(null,timezone_open("Asia/Tehran"));
$tz=date_timezone_get($date);
echo timezone_name_get($tz);
?>