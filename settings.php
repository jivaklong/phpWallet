<?php

$server_url = "/";  // 输入网站URL和尾随斜杠
//数据库连接
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "wallet";
//bitcoin配置 将RPC端口，RPC用户名和RPC密码替换为您自己的
$rpc_host = "127.0.0.1";
$rpc_port = "8080";
$rpc_user = "bitcoinrpc";
$rpc_pass = "Cp68nBkCAADKkskaKSskaDKdmSYLtLJ";
//如果是POS coin, 请增加
//$enableaccounts=1;
//$staking=0;

$fullname = "Bitcoin"; //网站标题（不包括“钱包”）
$short = "BTC"; //简写 (BTC)
$blockchain_tx_url = "http://blockchain.info/tx/"; //区块链URL
$support = "1176658122@qq.com"; //Your support eMail
$hide_ids = array(1); //从管理仪表板隐藏帐户
$donation_address = "3BXrFQUkZvwDeYtPUn5oVTebZLJB4fZPk3"; //捐赠地址

$reserve = "0"; //这笔费用作为储备金。用户余额将显示为守护进程中的余额减去保留。我们不建议将此设置超过守护进程收费。
//在https://www.google.com/recaptcha/admin/create  先登陆reCAPTCHA 添加到您的网站
$public = "6LdBvbUUCCCFKCmzGG8rg1qZKsKBdm1izDczcg";//Recaptcha_publickey_here
$secret = "6LdBvbUUAADDDNuS75TP9YNKkQ-1DRmOQjkZxkVy";//Recaptcha_privatekey_here


?>
