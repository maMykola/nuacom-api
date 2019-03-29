<?php


namespace Nuacom;


class NuacomClient
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $securityToken;


    public function __construct(string $email, string $password, string $securityToken)
    {
        $this->email = $email;
        $this->password = $password;
        $this->securityToken = $securityToken;
    }

    /**
     * Get email
     *
     * @return string
     * @author Mykola Martynov <mykola.martynov@hotmail.com>
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get security token
     *
     * @return string
     */
    public function getSecurityToken(): string
    {
        return $this->securityToken;
    }

}