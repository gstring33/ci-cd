<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DevControllerTest extends WebTestCase
{
    private $client;

    public function setUp()
    {
        parent::setUp();
        $this->client = static::createClient();
    }

    public function testSomething()
    {
        $this->client->request('GET', 'http://localhost:8080/');
        $this->assertEquals(404, $this->client->getResponse()->getStatusCode());
    }
}
