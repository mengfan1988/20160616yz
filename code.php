<?php
session_start();
include'./Verify.class.php';
use Core\Verify;
$verify=new Verify;
$verify->useZh=false;
$verify->fontSize=16;
$verify->length=4;
$verify->entry();