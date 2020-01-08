<?php 

class User{

	private $firstname;
	private $lastname;
	private $email;
	private $password;


	public function __construct($array){
			foreach ($array as $key => $value)
				 $this->{$key} = $value;
		}

	public function __toString(){
		$str = "firstname: " . $this->firstname . "<br>";
		$str .= "lastname: " . $this->lastname . "<br>";
		$str .= "email: " . $this->email . "<br>";
		$str .= "password: " . $this->password . "<br>";
		return $str;

	}

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}


?>