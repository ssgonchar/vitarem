<?php
namespace Chat\Tests\Unit\Socket;

use Chat\Repository\ChatRepositoryInterface;
use Chat\Repository\ChatRepository;

/**
 * Created by PhpStorm.
 * User: ssgonchar
 * Date: 29.11.2015
 * Time: 6:45
 */
class Base extends \PHPUnit_Framework_TestCase
{
    protected $repository;

    /**
     *
     */
    public function setUp()
    {
        $this->repository = new ChatRepository();
    }

    public function tearDown()
    {

    }
}