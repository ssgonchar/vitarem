<?php

namespace Chat\Tests;

/**
 * Created by PhpStorm.
 * User: ssgonchar
 * Date: 29.11.2015
 * Time: 6:44
 */

class ChatTest extends BaseTest
{
    public function testInitChat( )
    {
        $chat = new \Chat\Chat();

        $this->assertClassHasAttribute( 'repository', 'Chat');
        $this->assertInstanceOf('ChatRepository', $chat);
    }
}
