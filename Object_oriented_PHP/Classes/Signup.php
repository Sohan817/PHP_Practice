<?php
class Signup extends Dbh
{
    private $username;
    private $pwd;
    private $email;

    public function __construct($username, $pwd, $email)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->email = $email;
    }
    private function insertUSer()
    {
        $query = "INSERT INTO users(username,pwd,email) VALUES (:username,:pwd,:email);";
        $stmt = parent::connect()->prepare($query);
        $option = [
            "cost" => 12
        ];
        $hashpwd = password_hash($this->pwd, PASSWORD_BCRYPT, $option);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $hashpwd);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        header("Location: ../signup_view.php");
        die();
    }
    private function is_empty_input()
    {
        if (empty($this->username) || empty($this->pwd) || empty($this->email)) {
            return true;
        } else {
            return false;
        }
    }
    public function signupUser()
    {
        //Error Handling
        if ($this->is_empty_input()) {
            header("Location: ../signup_view.php");
            die();
        }
        //If no error,signup user
        $this->insertUSer();
    }
}
