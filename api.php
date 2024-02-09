<?php
session_start();
include("config/dbconnect.php");

$req = filter_var(htmlentities($_POST['req']),FILTER_SANITIZE_FULL_SPECIAL_CHARS);
switch ($req) {

case 'register':
    $signup_id = (rand(0,99999).time()) + time();
    $date_create = time();
    $views = 0;
    $signup_fullname = filter_var(htmlentities($_POST['fn']),FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $signup_username = filter_var(htmlentities($_POST['un']),FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $signup_email = filter_var(htmlentities($_POST['emu']),FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $signup_password_var = filter_var(htmlentities($_POST['pd']),FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $options = array(
        'cost' => 12,
    );
    $signup_password = password_hash($signup_password_var, PASSWORD_BCRYPT, $options);

    $eunsql = "SELECT * FROM users WHERE username=:signup_username";
    $exist_username = $con->prepare($eunsql);
    $exist_username->bindParam(':signup_username', $signup_username, PDO::PARAM_STR);
    $exist_username->execute();
    $eemsql = "SELECT * FROM users WHERE email=:signup_email";
    $exist_email = $con->prepare($eemsql);
    $exist_email->bindParam(':signup_email', $signup_email, PDO::PARAM_STR);
    $exist_email->execute();
    $num_un_ex = $exist_username->rowCount();
    $num_em_ex = $exist_email->rowCount();


    if($num_un_ex == 0){
        if($num_em_ex == 0){
            if (!empty(trim($signup_fullname)) && !empty(trim($signup_email)) && !empty(trim($signup_username)) && !empty(trim($signup_password_var))) {
                if(strlen($signup_username) >= 5){
                    if(strlen($signup_password_var) >= 8){
                        if (filter_var($signup_email, FILTER_VALIDATE_EMAIL)) {
                            $signupsql = "INSERT INTO users (id_str,fullname,username,email,password,date_create,views,date_login)
                            VALUES( :signup_id, :signup_fullname, :signup_username, :signup_email, :signup_password, :date_create, :views, :date_login)";
                            $query = $con->prepare($signupsql);
                            $query->bindParam(':signup_id', $signup_id, PDO::PARAM_STR);
                            $query->bindParam(':signup_fullname', $signup_fullname, PDO::PARAM_STR);
                            $query->bindParam(':signup_username', $signup_username, PDO::PARAM_STR);
                            $query->bindParam(':signup_email', $signup_email, PDO::PARAM_STR);
                            $query->bindParam(':signup_password', $signup_password, PDO::PARAM_STR);
                            $query->bindParam(':date_create', $date_create, PDO::PARAM_STR);
                            $query->bindParam(':views',$views, PDO::PARAM_INT);
                            $query->bindParam(':date_login', $date_create, PDO::PARAM_STR);
                            $query->execute();
                            echo "is ok susscess";
                        } else {
                            echo "The email address is not valid.";
                        }
                    }else{
                        echo "No password name small";
                    }
                }else{
                    echo "No user name small";
                }
                
                
            } else {
                echo "برجاء ملاء جميع الحقول ";
            }
        }else{
            echo "Find Email";
        }
    }else {
        echo "Find Uesr Name";
    }

    $con = null;
    break;

case 'login':
    $date_create = time();
    $username = htmlentities($_POST['un'], ENT_QUOTES);
    $password = htmlentities($_POST['pd'], ENT_QUOTES);

    $rUsername = null;

    if(!empty(trim($username)) && !empty(trim($password))){
        $chekPwd = $con->prepare("SELECT * FROM users WHERE username = :username OR email= :email");
        $chekPwd->bindParam(':email', $username, PDO::PARAM_STR);
        $chekPwd->bindParam(':username',$username,PDO::PARAM_STR);
        $chekPwd->execute();
        while ($row = $chekPwd->fetch(PDO::FETCH_ASSOC)) {
            $rUsername = $row['username'];
            $rEmail = $row['email'];
            $rPassword = $row['password'];
        }

        // check if user try to login in his username or email
        $email_pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        if(preg_match($email_pattern, $username)) {
            $un_or_em = $rEmail;
        }else{
            $un_or_em = $rUsername;
        }

        if ($un_or_em != $username) {
            echo "un_email_not_exist";
        }elseif(!password_verify($password,$rPassword)) {
            echo "!= pass";
        }else{
            $loginsql = "SELECT * FROM users WHERE (username= :username OR email= :email) AND password= :rPassword";
            $query = $con->prepare($loginsql);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':email', $username, PDO::PARAM_STR);
            $query->bindParam(':rPassword', $rPassword, PDO::PARAM_STR);
            $query->execute();
            $num = $query->rowCount();
            if($num == 0){
                echo "<p class='alertRed'>".lang('un_and_pwd_incorrect')."!</p>";
            }else{
                while($row_fetch = $query->fetch(PDO::FETCH_ASSOC)){
                    $row_id = $row_fetch['id'];
                    $row_fullname = $row_fetch['fullname'];
                    $row_username = $row_fetch['username'];
                    $row_email = $row_fetch['email'];
                }

                $_SESSION['attempts'] = 0;
                $_SESSION['login'] = TRUE;
                $_SESSION['fullname'] = $row_fullname;
                $_SESSION['id'] = $row_id;
                $_SESSION['username'] = $row_username;
                $_SESSION['email'] = $row_email;
                echo "Welcome...";
            }
        }

        

    }else{
        echo "This is Empty";
    }

}
?>