<?php
/**
 * Created by PhpStorm.
 * User: Xiny i@xiny9.com https://xbug.top
 * Coding Standard: PSR2
 * Date: 2018-08-30
 * Time: 22:34
 */
require "./SocketServer.php";
use Socket\SocketServer;
SocketServer::$stdoutFile = 'C:\E\PHPIDE\VertrigoServ\www\wxmintp5\stdout.log';
$sock = new SocketServer("websocket://0.0.0.0:2000");
$sock->count = 3;
$sock->onMessage = function ($conn, $data) {
	$conn->send('hello word');
};
var_dump($sock);