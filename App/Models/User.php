<?php

namespace App\Models;

class User extends Model
{

protected $login;
protected $password;

public function __construct( $login =null, $password = null)
{
    $this -> login = $login;
    $this -> password = $password;

    $params = [
        'login' => $login,
        'password' => $password
    ];

    parent::__construct('admin', $params);
}






}