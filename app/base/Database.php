<?php

namespace app\base;

use PDO;

class Database
{
    protected $db;

    public function __construct()
    {
        $config = require 'app/config/db.php';
        $host = $config['host'];
        $dbname = $config['dbname'];
        $username = $config['username'];
        $password = $config['password'];

        $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function row($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

    public function checkEmail()
    {
        $sql = 'SELECT * FROM users WHERE `email` = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$_POST['email']]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}