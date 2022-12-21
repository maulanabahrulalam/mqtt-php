<?php
$host   = "riset.revolusi-it.com";
$port     = 1883;
$username = "YD2AXX";
$password = "12345679";

require("phpMQTT.php");
$message = "D1=0";
$message2 = "D2=0";
$message3 = "D3=0";
$mqtt = new bluerhinos\phpMQTT($host, $port, "ClientID".rand());

if ($mqtt->connect(true,NULL,$username,$password)) {
  $mqtt->publish("iot/test",$message, 0);
  $mqtt->publish("iot/test",$message2, 0);
  $mqtt->publish("iot/test",$message3, 0);
  $mqtt->close();
}else{
  echo "Fail or time out
";
}