<?php
/**
 * Created by PhpStorm.
 * User: Kale
 * Date: 7.3.2019
 * Time: 13:25
 */

namespace App;
use App\Models\ErrorLogs;
use PHPMailer\PHPMailer\PHPMailer;
use Prophecy\Exception\Exception;
use App\Models\User;

class Mail
{

    private $mail;
    private $code;
    private $user;

    public function __construct() {
        $this->mail = new PHPMailer();
        try {
            $this->mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $this->mail->isSMTP();
            $this->mail->Host = 'smtp.gmail.com';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = 'kalincevicnikola8@gmail.com';
            $this->mail->Password = 'nikola97';
            $this->mail->SMTPSecure = 'tls';
            $this->mail->Port = 587;
        } catch (Exception $e) {
            echo http_response_code(500);
        }
    }


    function register($token,$email){
        try{
            $this->mail->setFrom('kalincevicnikola8@gmail.com', 'Nikola Kalincevic');
            $this->mail->addAddress($email);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Registration';
            $this->mail->Body = 'Click on the following link: <a href="http://127.0.0.1:8000/verification/'.$token.'">LINK</a>               to activate your account';
            $this->mail->send();
            $this->code = 200;
            return $this->code;
        }catch (\PHPMailer\PHPMailer\Exception $e){
            ErrorLogs::insertError($this->mail->ErrorInfo);
            return $e;
        }
    }

    public function support($email,$username,$subject,$text){
        try{
            $this->mail->setFrom('kalincevicnikola8@gmail.com', $username);
            $this->mail->addAddress('kalincevicnikola8@gmail.com');
            $this->mail->addReplyTo($email, $username);
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body  = $text;
            if($this->mail->send()){
                $this->code = 200;
                return $this->code;
            }
            else{
                $this->code = 500;
                return $this->code;
            }
        }catch (\PHPMailer\PHPMailer\Exception $e){
            ErrorLogs::insertError($this->mail->ErrorInfo);
            return $e;
        }
    }


    function confirmationMail($userID){
        $this->user = new User();
        $res = $this->user->getUser($userID);
        $email = $res->email;
        try{
            $this->mail->setFrom('kalincevicnikola8@gmail.com', 'Movies Pro');
            $this->mail->addAddress($email);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Confirmation mail';
            $this->mail->Body = 'Your order has been accepted';
            if($this->mail->send()){
                $this->code = 200;
                return $this->code;
            }else{
                $this->code = 400;
                return $this->code;
            }
        }catch (\PHPMailer\PHPMailer\Exception $e){
            ErrorLogs::insertError($this->mail->ErrorInfo);
            return $e;
        }
    }


}