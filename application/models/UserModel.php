<?php

require_once( APPPATH . 'custom/User.php' );

class UserModel extends CI_Model
{
	  public function signin( String $username ) : User
		{
				$this -> load -> database();

				$query = $this -> db -> get_where( 'users' ,
					array( 'email' => $username ) );

				$results = $query -> custom_result_object( 'User' );

				return $results[ 0 ];
	  }
}
