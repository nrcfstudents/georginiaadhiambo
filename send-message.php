<?php
$sender=$_POST["sender"];
$message=$_POST["message"];

$file =f open ("message.txt","a");
f write($file, "name:$sender inmessage:$message");
f close($file);
