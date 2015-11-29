<?php

namespace Chat\Tests\Unit\Socket\Repository;
use Chat\Connection\ChatConnection;
use Chat\Repository\ChatRepository;
use Ratchet\ConnectionInterface;

/**
 * Created by PhpStorm.
 * User: ssgonchar
 * Date: 29.11.2015
 * Time: 6:44
 */
class ChatRepositoryTest extends \Chat\Tests\Unit\Socket\Base
{

    public function testAddUser()
    {
        $repository = new ChatRepository();

        $this->assertClassHasAttribute( 'clients', '\Chat\Repository\ChatRepository');
        $this->assertInstanceOf('\Chat\Repository\ChatRepository', $repository);
    }
}
