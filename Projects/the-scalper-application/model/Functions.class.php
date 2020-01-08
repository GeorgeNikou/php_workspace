<?php


    abstract class Functions {
        static function sendMail ($to, $subject, $msg_body) {
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";
            $headers .= "From: no-reply@scalper.ga\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
            mail($to, $subject, $msg_body, $headers);
        }

        static function base64url_encode($data) {
            return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
        }

        static  function base64url_decode($data) {
            return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
        }

        static function url(){
            return sprintf(
                "%s://%s",
                isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
                $_SERVER['SERVER_NAME']
            );
        }
    }