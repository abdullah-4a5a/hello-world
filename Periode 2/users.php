<?php
abstract Class User {
  private $username;
  private $password;
  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = password_hash($password, PASSWORD_BCRYPT);
  }
  public function getUsername(){
    return $this->username;
  }

  public function getPassword(){
    return $this->password;
  }
  /**
  * Check if given password is correct for this user
  * @param string $password
  * @return boolean
  */

  public function checkPassword($password) {
    return password_verify($password, $this->password);
  }

  public function changePassword($oldPassword, $newPassword) {
    if($this->checkPassword($oldPassword)) {
      $this->password = password_hash($newPassword, PASSWORD_BCRYPT);
    } else {
      return false;
    }
    return true;
  }
}

class Supervisor extends user {
    public function superAction() {
      return 'Superuser';
    }
}

class NormalUser extends user {
    public function normalAction() {
      return 'Normal user';
    }
}

$tomas = new NormalUser('tomas', 'legend32');
echo $tomas->getUsername();
echo $tomas->getPassword();
echo $tomas->changePassword('legend32', 'Markie123');
echo '<br />';
echo $tomas->normalAction();
echo '<br />';
$anna = new Supervisor('anna', 'whatevah96');
echo $anna->getUsername();
echo $anna->getPassword();
echo $anna->changePassword('whatevah96', 'Markie123');
echo '<br />';
echo $anna->superAction();
