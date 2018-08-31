<?php
namespace app\cli\controller;

use think\Controller;
use Socket\SocketServer;

class Index extends Controller
{
    public function index()
    {
        echo 'this is cli moduel';
    }

    public function wsserver()
    {
        SocketServer::$stdoutFile = 'C:\E\PHPIDE\VertrigoServ\www\wxmintp5\stdout.log';
        $sock = new SocketServer("websocket://0.0.0.0:2000");
        $sock->count = 3;
        $sock->onMessage = function($conn,$data){
            var_dump($data);
            $conn->send('hello word');
        };
        SocketServer::runAll();
    }
}
