<?php

namespace Chat\Tests\Unit\Socket\Connection;
use Chat\Connection\ChatConnection;

/**
 * Created by PhpStorm.
 * User: ssgonchar
 * Date: 29.11.2015
 * Time: 6:44
 */
class ChatConnectionTest extends \Chat\Tests\Unit\Socket\Base
{
    public function testChatConnection()
    {
        $conn = $this->getMock("Ratchet\\ConnectionInterface");
        $repo = $this->getMock("Chat\\Repository\\ChatRepositoryInterface");
        $connection = new ChatConnection($conn,$repo);

        $this->assertClassHasAttribute( 'connection', '\Chat\Connection\ChatConnection');
        $this->assertClassHasAttribute( 'name', '\Chat\Connection\ChatConnection');
        $this->assertClassHasAttribute( 'repository', '\Chat\Connection\ChatConnection');
    }
}
