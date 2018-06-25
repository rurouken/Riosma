<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
  		  parent:: __construct();
  	}

    public function index()
  	{
  		 $this -> load -> view( 'Login' );
  	}

    public function signin()
    {
        if ( empty( $_POST[ 'email' ] ) OR empty( $_POST[ 'password' ] ) )
        {
            echo "Introduzca usuario o contraseña";
            die;
        }

        $this -> load -> model( 'UserModel' );

        $user = $this -> UserModel -> signin( $_POST[ 'email' ] );

        if ( is_null( $user ) )
        {
            echo 'Usuario no registrado';
            die;
        }

        if ( ! password_verify( $_POST[ 'password' ], $user -> password ) )
        {
            echo 'Contraseña incorrecta';
            die;
        }

        $this -> load -> library( 'session' );

        $this -> session -> set_userdata( 'email', $user -> email );
        $this -> session -> set_userdata( 'name' , $user -> name );

        header( "Location: " . base_url() . "dashboard" );
    }
}
