<?php

namespace app\models;

use app\base\Model;
use app\libs\PHPMailer\PHPMailer;
use app\libs\PHPMailer\Exception;

class Main extends Model
{
    public $error;

    public function emailValidate()
    {

        $query = $this->db->checkEmail();
        if (password_verify($_POST['password'], $query['password']))  {
                return true;
            } else {
                $error[] = 'Wrong password';
                return false;
            }
    }

    public function contactValidate()
    {
        $nameLength = strlen($_POST['name']);
        $messageLength = strlen($_POST['message']);
        if ($nameLength < 3 or $nameLength > 20) {
            $this->error = 'Name field must contain 3 to 20 characters';
            return false;
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error = 'Incorrect email';
            return false;
        } elseif ($messageLength < 10 or $messageLength > 500) {
            $this->error = 'Text field must contain 10 to 500 characters';
            return false;
        } else {
            return true;
        }
    }

    public function sendEmail()
    {
        $config = require 'app/config/smtp.php';
        $host = $config['host'];
        $port = $config['port'];
        $username = $config['username'];
        $password = $config['password'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host = $host;                                        // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                     // Enable SMTP authentication
            $mail->Username = $username;                                // SMTP username
            $mail->Password = $password;                                // SMTP password
            $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = $port;                                        // TCP port to connect to

            //Recipients
            $mail->setFrom($username, $name);
            $mail->addAddress($username, 'F.');                    // Add a recipient
            $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Contact form message';
            $mail->Body = $message;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}