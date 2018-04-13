<?php

require 'classDb.php';

class User extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if($username == '' || $email == '' || $password == '') {
            $error = '<p>Some fields are missing.</p>';
            return $error;
        }

        if (strlen($username) < 6 || strlen($username) > 15) {
            $errorUsername = '<p>The length of the username can only range from 6 to 15 characters.</p>';
            return $errorUsername;
        }

        if(strlen($email) < 6 || strlen($email) > 15) {
            $error = '<p>The length of the email can only range from 6 to 15 characters.</p>';
            return $error;
        }

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            $error = '<p>Email address is not valid.</p>';
            return $error;
        }

        if(strlen($password) < 6 || strlen($password) > 15) {
            $error = '<p>The length of the password can only range from 6 to 15 characters.</p>';
            return $error;
        }

        if ($password != $confirmPassword) {
            $error = '<p>Passwords missmatch!</p>';
            return $error;
        }

        $sql = "insert into users(username, email, password) values (:username, :email, :password)";
        $stmt = $this->dbh->prepare($sql);

        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        $res = $stmt->execute();
        if($res) {
            echo  '<p class="lead">You have been registered.</p>';
        } else {
            echo  '<p>There was some registration problem.</p>';
        }
    }

    public function checkEmail($email)
    {
        $sql = 'select email from users where email = :email';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
