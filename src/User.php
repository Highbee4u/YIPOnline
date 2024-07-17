<?php

class User {
    private $username;
    private $email;
    private $password;
    private $db;

    public function __construct($username, $email, $password, $db) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->db = $db;
    }

    public function validateUsername() {
        return preg_match('/^[a-zA-Z0-9]{3,20}$/', $this->username);
    }

    public function validateEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function validatePassword() {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $this->password);
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function save() {
        $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->db->prepare($query);
        
        $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);
        
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $hashed_password);

        return $stmt->execute();
    }

    public function usernameExists() {
        $query = "SELECT COUNT(*) FROM users WHERE username = :username";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    public function emailExists() {
        $query = "SELECT COUNT(*) FROM users WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
}