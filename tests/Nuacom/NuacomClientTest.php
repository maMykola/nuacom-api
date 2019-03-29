<?php


namespace Tests\Nuacom;

use Nuacom\NuacomClient;
use PHPUnit\Framework\TestCase;

class NuacomClientTest extends TestCase
{
    public function testClientInitialization()
    {
        $email = 'test@example.com';
        $pass = 'test_password';
        $securityToken = 'NUACOM-SECURITY-TOKEN';

        $client = new NuacomClient($email, $pass, $securityToken);

        $this->assertSame($email, $client->getEmail());
        $this->assertSame($securityToken, $client->getSecurityToken());

        return $client;
    }

    public function testRetrieveAccessTokenSuccess()
    {
        $this->markTestIncomplete();
    }

    public function testRetrieveAccessTokenFail()
    {
        $this->markTestIncomplete();
    }

    public function testLoginDigestSuccess()
    {
        $this->markTestIncomplete();
    }

    public function testLoginDigestFail()
    {
        $this->markTestIncomplete();
    }

    public function testCheckAccessTokenSuccess()
    {
        $this->markTestIncomplete();
    }

    public function testCheckAccessTokenFail()
    {
        $this->markTestIncomplete();
    }

    public function testCheckAccessTokenUnauthorized()
    {
        $this->markTestIncomplete();
    }

    public function testCheckAccessTokenError()
    {
        $this->markTestIncomplete();
    }

    public function testGetMultipleContactsSuccess()
    {
        $this->markTestIncomplete();
    }

    public function testGetMultipleContactsFail()
    {
        $this->markTestIncomplete();
    }

    public function testGetMultipleContactsUnauthorized()
    {
        $this->markTestIncomplete();
    }

    public function testAddContactsSuccess()
    {
        $this->markTestIncomplete();
    }

    public function testAddContactsFail()
    {
        $this->markTestIncomplete();
    }

    public function testAddContactsUnauthorized()
    {
        $this->markTestIncomplete();
    }

    public function testGetContactSuccess()
    {
        $this->markTestIncomplete();
    }

    public function testGetContactFail()
    {
        $this->markTestIncomplete();
    }

    public function testGetContactUnauthorized()
    {
        $this->markTestIncomplete();
    }

    public function testUpdateContactSuccess()
    {
        $this->markTestIncomplete();
    }

    public function testUpdateContactFail()
    {
        $this->markTestIncomplete();
    }

    public function testUpdateContactUnauthorized()
    {
        $this->markTestIncomplete();
    }

    public function testDeleteContactSuccess()
    {
        $this->markTestIncomplete();
    }

    public function testDeleteContactFail()
    {
        $this->markTestIncomplete();
    }

    public function testDeleteContactUnauthorized()
    {
        $this->markTestIncomplete();
    }


}