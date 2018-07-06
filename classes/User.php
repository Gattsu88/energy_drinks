<?php

namespace Classes;

class User
{
    private $dbh;
    private $messages = [];
    private $errors = [];

    public function __construct(Db $dbh)
    {
        $this->dbh = $dbh;
    }

    public function userRegister()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $confirmPassword = $_POST['confirmPassword'];

        $this->validateUsername($username);
        $this->validateEmail($email);
        $this->validatePassword($password, $confirmPassword);

        if(empty($this->errors)) {
            $stmt = $this->dbh->getDb()->prepare("INSERT into users(username, email, password) values(:username, :email, :hashedPassword)");
            $stmt->bindValue(":username", $username);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":hashedPassword", $hashedPassword);
            $stmt->execute();
            $this->messages[] = "User registered.";
        } else {
            return $this->errors;
        }
    }

    public function validateUsername($username)
    {
        if(empty($username)) {
            $this->errors[] = "Username missing.";
        } elseif(strlen($username) < 6 || strlen($username) > 15) {
            $this->errors[] = "Username must be between 6 and 15 characters.";
        }
    }

    public function validateEmail($email)
    {
        if(empty($email)) {
            $this->errors[] = "Email missing.";
        }  elseif($this->emailExists($email)) {
            $this->errors[] = "Email already exists.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Invalid email format.";
        }
    }

    public function emailExists($email)
    {
        $stmt = $this->dbh->prepare("SELECT * from users where email = :email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $totalEmails = $stmt->rowCount();
        return ($totalEmails > 0);
    }

    public function validatePassword($password, $confirmPassword)
    {
        if(empty($password)) {
           $this->errors[] = "Password missing.";
        } elseif(strlen($password) < 8 || strlen($password) > 15) {
           $this->errors[] = "Password must be between 8 and 15 characters.";
       } elseif(empty($confirmPassword)) {
           $this->errors[] = "Confirm your password.";
       } elseif($password !== $confirmPassword) {
           $this->errors[] = "Passwords don't match.";
        }
    }

    public function getMessages()
    {
        foreach($this->messages as $message)
            {
                return $message;
            }
    }

    public function getErrors()
    {
        foreach($this->errors as $error)
            {
                return $error;
            }
    }
}
