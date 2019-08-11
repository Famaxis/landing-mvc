<?php

namespace app\models;

use app\base\Model;

class User extends Model
{
    public function checkTable()
    {
        $sql = "SELECT * FROM users";
        $result = $this->db->row($sql);
        if (empty($result)) {
            $this->createTable();
            $this->fillTable();
        }
    }

    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `users`
        (
            `ID` INT NOT NULL AUTO_INCREMENT,
			`login` VARCHAR(40) NOT NULL,
			`email` VARCHAR(40) NOT NULL,
			`password` VARCHAR(250) NOT NULL,
			PRIMARY KEY (`ID`)
        ) ";
        $this->db->query($sql);
    }

    public function fillTable()
    {
        // demo password, should be changed
        $password = password_hash('1234', PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users (login, email, password) 
                VALUES(:login, :email, :password)';
        $this->db->query($sql, ['login' => 'admin', 'email' => 'admin@example.com', 'password' => $password]);
    }

    public function addUser()
    {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users (login, email, password) 
                VALUES(:login, :email, :password)';
        $this->db->query($sql, ['login' => $_POST['login'], 'email' => $_POST['email'], 'password' => $password]);
    }
}