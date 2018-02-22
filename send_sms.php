<?php

 include_once("php_send.php");

 $toPhone="79872340869";
 $msg="кнопка работает";

 $net = new HttpWebsms("rhminny","12qwaszx");

 try {
     $ret = $net->getSaldo();
     print_r($ret);

     $ret = $net-> sendSms($toPhone, $msg);
     print_r($ret);
} catch (Exception $ex) {
     print $ex->getMessage();
 }
?>