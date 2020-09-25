<?php



if(empty($_POST['go'])):
    $error1 = null;
if(isset($_POST['nickname'])) {
    $nickname = trim($_POST['nickname']);
    $nickname = strip_tags($nickname);
    $nickname = htmlspecialchars($nickname, ENT_QUOTES);
    $nickname = stripcslashes($nickname);
    if (strlen($nickname) == 0){
        $error1 = "Введите имя";

    }
}

     $error2 = null;
    if(isset($_POST['number'])) {
        $number = trim($_POST['number']);
        $number  = strip_tags( $number );
        $number  = htmlspecialchars( $number , ENT_QUOTES);
        $number  = stripcslashes( $number );
        if (strlen( $number ) == 0){
            $error2 = "Введите номер";
        }
    }


    endif;



if (isset($_POST['nickname']) && isset($_POST['number'])) {

    $to = "medinakarachai@mail.ru";
    $subject = "Звонок";
    $message = htmlspecialchars($_POST['nickname'])."\n".htmlspecialchars($_POST['number']);

   $headers = "Content-type:text/html; charset = utf-8 \r\n";
   $headers.= "From: mmadisha9@gmail.com";
   $headers.= "Reply to: mmadisha9@gmail.com";


    $nickname = trim($_POST['nickname']);
    $number = trim($_POST['number']);
if ((strlen($nickname) == 0) || (strlen($number) == 0)) {
    echo "<script> alert('". "Сообщение НЕ отправленно. Заполните все поля" ." ')</script>";
}
else {
    (mail($to, $subject, $message, $headers));
    echo  "<script> alert('". "Сообщение отправленно" ." ')</script>";
}
}

/*====================================
          форма обратной связи
======================================*/

if(empty($_POST['go'])):
    $error3 = null;
    if(isset($_POST['username'])) {
        $username = trim($_POST['username']);
        $username = strip_tags($username);
        $username = htmlspecialchars($username, ENT_QUOTES);
        $username= stripcslashes($username);
        if (strlen($username) == 0){
            $error3 = "Введите имя";
        }
    }

    $error4 = null;
    if(isset($_POST['email'])) {
        $email = trim($_POST['email']);
        $email  = strip_tags( $email );
        $email  = htmlspecialchars( $email , ENT_QUOTES);
        $email  = stripcslashes( $email );
        if (strlen( $email ) == 0){
            $error4 = "Введите e-mail";
        }
    }

    $error5 = null;
    if(isset($_POST['phone'])) {
        $phone = trim($_POST['phone']);
        $phone   = strip_tags( $phone  );
        $phone   = htmlspecialchars( $phone  , ENT_QUOTES);
        $phone  = stripcslashes( $phone  );
        if (strlen( $phone ) == 0){
            $error5 = "Введите номер телефона";
        }
    }

    $error6 = null;
    if(isset($_POST['text'])) {
        $text = trim($_POST['text']);
        $text   = strip_tags( $text );
        $text   = htmlspecialchars( $text  , ENT_QUOTES);
        $text  = stripcslashes( $text );
        if (strlen( $text ) == 0){
            $error6 = "Введите сообщение";
        }
    }
endif;


if (isset($_POST['phone']) && isset($_POST['text'])) {

    $to = "medinakarachai@mail.ru";
    $subject = "Сообщение пользователя";
    $message = htmlspecialchars($_POST['username'])."\n".htmlspecialchars($_POST['phone'])."\n".htmlspecialchars($_POST['text']);

    $headers = "Content-type:text/html; charset = utf-8 \r\n";
    $headers.= "From:" . htmlspecialchars($_POST['username']) ;
    $headers.= " Reply to: " . htmlspecialchars($_POST['email']);

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $text = trim($_POST['text']);
    if ((strlen($username) == 0) || (strlen($email) == 0) || (strlen($phone) == 0) || (strlen($text) == 0)) {

       echo "<script>
// location.href = \"#contacts\";
 alert('". "Сообщение НЕ отправленно. Заполните все поля" ." ')
       
       </script>";

            }

    else {
        (mail($to, $subject, $message, $headers));
               echo  "<script> alert('". "Сообщение отправленно" ." ')</script>";
        exit('<meta http-equiv="refresh" content="0; url=index.html" />');


    }

}

require ('index.html');

/*=================================
                ENGLISH
====================================*/

/*
function english() {


    if(empty($_POST['go'])):
        $error1 = null;
        if(isset($_POST['nickname'])) {
            $nickname = trim($_POST['nickname']);
            $nickname = strip_tags($nickname);
            $nickname = htmlspecialchars($nickname, ENT_QUOTES);
            $nickname = stripcslashes($nickname);
            if (strlen($nickname) == 0){
                $error1 = "Введите имя";

            }
        }

        $error2 = null;
        if(isset($_POST['number'])) {
            $number = trim($_POST['number']);
            $number  = strip_tags( $number );
            $number  = htmlspecialchars( $number , ENT_QUOTES);
            $number  = stripcslashes( $number );
            if (strlen( $number ) == 0){
                $error2 = "Введите номер";
            }
        }


    endif;



    if (isset($_POST['nickname']) && isset($_POST['number'])) {

        $to = "medinakarachai@mail.ru";
        $subject = "Звонок";
        $message = htmlspecialchars($_POST['nickname'])."\n".htmlspecialchars($_POST['number']);

        $headers = "Content-type:text/html; charset = utf-8 \r\n";
        $headers.= "From: mmadisha9@gmail.com";
        $headers.= "Reply to: mmadisha9@gmail.com";


        $nickname = trim($_POST['nickname']);
        $number = trim($_POST['number']);
        if ((strlen($nickname) == 0) || (strlen($number) == 0)) {
            echo "<script> alert('". "The message FAILED. Enter all fields" ." ')</script>";
        }
        else {
            (mail($to, $subject, $message, $headers));
            echo  "<script> alert('". "Сообщение отправленно" ." ')</script>";
        }
    }
*/
    /*====================================
              форма обратной связи
    ======================================*/
/*
    if(empty($_POST['go'])):
        $error3 = null;
        if(isset($_POST['username'])) {
            $username = trim($_POST['username']);
            $username = strip_tags($username);
            $username = htmlspecialchars($username, ENT_QUOTES);
            $username= stripcslashes($username);
            if (strlen($username) == 0){
                $error3 = "Введите имя";
            }
        }

        $error4 = null;
        if(isset($_POST['email'])) {
            $email = trim($_POST['email']);
            $email  = strip_tags( $email );
            $email  = htmlspecialchars( $email , ENT_QUOTES);
            $email  = stripcslashes( $email );
            if (strlen( $email ) == 0){
                $error4 = "Введите e-mail";
            }
        }

        $error5 = null;
        if(isset($_POST['phone'])) {
            $phone = trim($_POST['phone']);
            $phone   = strip_tags( $phone  );
            $phone   = htmlspecialchars( $phone  , ENT_QUOTES);
            $phone  = stripcslashes( $phone  );
            if (strlen( $phone ) == 0){
                $error5 = "Введите номер телефона";
            }
        }

        $error6 = null;
        if(isset($_POST['text'])) {
            $text = trim($_POST['text']);
            $text   = strip_tags( $text );
            $text   = htmlspecialchars( $text  , ENT_QUOTES);
            $text  = stripcslashes( $text );
            if (strlen( $text ) == 0){
                $error6 = "Введите сообщение";
            }
        }
    endif;


    if (isset($_POST['phone']) && isset($_POST['text'])) {

        $to = "medinakarachai@mail.ru";
        $subject = "Сообщение пользователя";
        $message = htmlspecialchars($_POST['username'])."\n".htmlspecialchars($_POST['phone'])."\n".htmlspecialchars($_POST['text']);

        $headers = "Content-type:text/html; charset = utf-8 \r\n";
        $headers.= "From:" . htmlspecialchars($_POST['email']) ;
        $headers.= "Reply to" . htmlspecialchars($_POST['email']);

        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $text = trim($_POST['text']);
        if ((strlen($username) == 0) || (strlen($email) == 0) || (strlen($phone) == 0) || (strlen($text) == 0)) {
            echo "<script> alert('". "Сообщение НЕ отправленно. Заполните все поля" ." ')</script>";
        }
        else {
            (mail($to, $subject, $message, $headers));
            echo  "<script> alert('". "Сообщение отправленно" ." ')</script>";
        }

    }

    require "index__en.html";
}
*/