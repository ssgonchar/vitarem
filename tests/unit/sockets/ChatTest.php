<?php

namespace Chat\Tests\Unit\Socket;

use Chat\Chat;

/**
 * Created by PhpStorm.
 * User: ssgonchar
 * Date: 29.11.2015
 * Time: 6:44
 */

class ChatTest extends \Chat\Tests\Unit\Socket\Base
{
    /**
     *
     */
    public function testInitChat( )
    {
        $chat = new Chat();

        $this->assertClassHasAttribute( 'repository', '\Chat\Chat');
        $this->assertInstanceOf('\Chat\Chat', $chat);
    }
}
