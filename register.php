<?php
/**
 * 接受用户登陆时提交的验证码
 */
session_start();
//1. 获取到用户提交的验证码
$verify = $_POST["verify"];
//2. 将session中的验证码和用户提交的验证码进行核对,当成功时提示验证码正确，并销毁之前的session值,不成功则重新提交
if(strtolower($_SESSION["verifyimg"]) == strtolower($verify)){
    echo "ok";
    $_SESSION["verify"] = "";
}else{
    echo "error";
}
?>