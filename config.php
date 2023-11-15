<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: text/plain');
$con = mysqli_connect("sql104.infinityfree.com", "if0_35425394", "0K3ZVJuxLtp8", "if0_35425394", "3306") or die ("could not connect DB");
