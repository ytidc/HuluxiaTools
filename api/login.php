<?php
//////////在此处设置账号信息//////////
// $acc = '16257381042';  //手机号
// $pass = 'zxc123456';  //密码
$acc = $_GET['phone'];  //手机号
$pass = $_GET['pass'];  //密码
$apikey = ''; //设置接口密钥，防止恶意请求
//////////////////////////////////////
function  uuid()  

{  

$chars = md5(uniqid(mt_rand(), true));  

$uuid = substr ( $chars, 0, 8 ) . '-'

. substr ( $chars, 8, 4 ) . '-' 

. substr ( $chars, 12, 4 ) . '-'

. substr ( $chars, 16, 4 ) . '-'

. substr ( $chars, 20, 12 );  

    return $uuid ;  

}  

$uuid =  uuid();
//判断用户信息是否为空
if(empty($acc) or empty($pass)){exit("手机号或密码为空，请打开login.php编辑相关信息!");}
//判断apikey是否正确
if($apikey!=htmlspecialchars($_GET['apikey'])){exit("ApiKey错误！");}

//登录获取用户信息
$pass = md5($pass);  //MD5加密用户密码
$u = json_decode(HttpPost("http://floor.huluxia.com/account/login/ANDROID/4.0?platform=2&gkey=000000&app_version=4.1.0.1.1&versioncode=20141443&market_id=floor_tencent&_key=&device_code=".$uuid,"account=".$acc."&login_type=2&password=".$pass));
var_dump($u);
echo('用户名称：'$u->user->nick.'   当前等级：'.$u->user->level)
$ukey = $u->_key; //用户key
$uid = $u->user->userID;  //用户id


//GET函数
function HttpGet($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
$tmpInfo = curl_exec($curl);
if(curl_exec($curl) === false)
{
return 'Curl error: ' . curl_error($ch);
}
curl_close($curl);
return $tmpInfo;
}

//POST函数
function HttpPost($url,$data=null){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
if(!empty($data)){
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
}
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
curl_close($curl);
return $output;
}
?>
