<?php

/* 
 * The script was written by Evaroza
 * My page in VK: https://vk.com/id469634454
 * This software is free and absolutely legal, you can freely distribute it and use it for your own purposes, but copyrights must also be respected.
*/


$act = $_GET["act"];
// Act
$msg = $_GET["msg"];
// Our message
$nick = $_GET["nick"];
// User nickname
$chatdb = "chat.txt";
// Pseudo-database

echo file_get_contents($chatdb);
// Display user messages from the database

if($act == "send" && $msg != null && $nick != null){
// Condition: start.
file_put_contents($chatdb, "{$nick}: ".$msg."<br />", FILE_APPEND);
// add a new message to the database.
header('Location: http://your-website.net/chat');
// Refresh our chat
}
// Condition: end.

?>
