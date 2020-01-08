<?php 
/**
 * @Lab 5 MVC - POST class 
 * @author : <[<george.nikou05@gmail.com>]>
 * @version [<1.0>]
 * @created: 5/30/2019
 * @lastmodified: 6/4/2019
 * @copyright [George Nikou]
 */
class Post{

	private $username;
    private $message;
	private $avatar;

	/**
     * Create a new user upon construction
     * @param [String] $name
     * @param [String] $avatar
     * @param [String] $message
     */
	function __construct($post){
		$this ->username = $post['username'];
		$this ->avatar = $post['avatar'];
		$this ->message = $post['message'];
	}
	

    /**
     * @return mixed
     */
    public function getMessage(){
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return self
     */
    public function setMessage($message){
        $this->message = $message;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername(){
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
    public function getAvatar(){
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     * @return self
     */
    public function setAvatar($avatar){
        $this->avatar = $avatar;
        return $this;
    }
}

?>