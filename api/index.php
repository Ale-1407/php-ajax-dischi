<?php
include_once __DIR__ . '/../db/index.php';
//C:\MAMP\htdocs\php-ajax-dischi\api + /../db/index.php

header( 'Content-Type: application/json' );

echo json_encode($database);

?>