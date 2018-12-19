<?php
namespace App;

class User {
  private $username;
  private $password;
  
  function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
  }

  public function signin(): bool {
    return $this->username == 'admin' && $this->password == 'admin';
  }
}