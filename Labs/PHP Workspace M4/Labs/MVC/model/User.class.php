<?php 
/**
 * @Lab 5 MVC - USER class 
 * @author : <[<george.nikou05@gmail.com>]>
 * @version [<1.0>]
 * @created: 5/30/2019
 * @lastmodified: 6/4/2019
 * @copyright [George Nikou]
 */
class User{

	private $id;
	private $username;
	private $password;
	private $email;
	private $avatar;
	private $status;
	private $valid;

    /**
     * Create a new user upon construction
     * @param [String] $name
     * @param [Integer] $age
     * @param [String] $password
     * @param [String] $email
     * @param [String] $avatar
     * @param [integer] $status
     * @param [integer] $valid
     */
    function __construct($user){
      $this ->id = $user['id'];
      $this ->username = $user['username'];
      $this ->password = $user['password'];
      $this ->email = $user['email'];
      $this ->avatar = $user['avatar'];
      $this ->status = $user['status'];
      $this ->valid = $user['valid'];
  }

    /**
     * @return mixed
     */
    public function getID(){
    	return $this->id;
    }

    /**
     * @param mixed $id
     * @return self
     */
    public function setID($id){
    	$this->id = $id;
    	return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername() {
    	return $this->username;
    }

    /**
     * @param mixed $username
     * @return self
     */
    public function setUsername($username){
    	$this->username = $username;
    	return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword(){
    	return $this->password;
    }

    /**
     * @param mixed $password
     * @return self
     */
    public function setPassword($password){
    	$this->password = $password;
    	return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()  {
    	return $this->email;
    }

    /**
     * @param mixed $email
     * @return self
     */
    public function setEmail($email){
    	$this->email = $email;
    	return $this;
    }

    /**
     * @return mixed
     */
    public function getAvatar(){
    	return $this->avatar;
    }

    /**
     * @param mixed $avatar
     * @return self
     */
    public function setAvatar($avatar) {
    	$this->avatar = $avatar;
    	return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
    	return $this->status;
    }

    /**
     * @param mixed $status
     * @return self
     */
    public function setStatus($status){
    	$this->status = $status;
    	return $this;
    }

    /**
     * @return mixed
     */
    public function getValid(){
    	return $this->valid;
    }

    /**
     * @param mixed $valid
     * @return self
     */
    public function setValid($valid){
    	$this->valid = $valid;
    	return $this;
    }

    public function sendEmail($subject, $msg_body){
    	$to       = self::getEmail();
    	$headers  = 'From: herzing.prog@gmail.com' . "\r\n" .
    	'MIME-Version: 1.0' . "\r\n" .
    	'Content-type: text/html; charset=utf-8';

    	if(mail($to, $subject, $msg_body, $headers))
    		return true;
    	else
    		return false;

    }
}

?>