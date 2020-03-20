<?php
header("Content-Type: application/json; charset=utf-8");
$code = $_GET['c2'];
$udid = $_GET['c5'];
$qfen = $_GET['c7'];
$time = date('Y-m-d H:i:s',strtotime("+7979 year"));  // 100年后到期
if(!$udid){
  exit("小七专属定制，QQ1750991695 \n授权到期:".$time);  //公告
}
if($code == '123'){
    exit(base64_encode(base64_encode('破解你妈逼'.strtotime($time).'<|>'.$time.'<|>1')));  //授权成功
}else{
    //exit(base64_encode(base64_encode('破解你妈逼'.strtotime($time).'<|>'.$time.'<|>1')));  //授权成功
  exit(base64_encode(base64_encode('破解你妈逼Error：授权码不正确')));  // 授权失败
}

exit('抓你妈逼的包！');
