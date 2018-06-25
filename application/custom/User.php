<?php

class User
{
    private $id;
    private $id_role;
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $createdAt;
    private $updatedAt;

    public function __set( $name, $value )
    {
        if ( $name === 'last_login' )
        {
            $this -> last_login = DateTime :: createFromFormat( 'U', $value );
        }
    }

    public function __get( $name )
    {
        if ( isset( $this -> $name ) )
        {
            return $this->$name;
        }
    }
}
