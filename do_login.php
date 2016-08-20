<?php
session_start();
include'./Verify.class.php';
include'./functions.php';
use Core\Verify;
$verify=new Verify;
$code=I('post.code');
var_dump($verify->check($code)) ;
