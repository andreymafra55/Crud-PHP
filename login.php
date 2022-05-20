<?php
    include 'conf.php';

    $username = $_POST['user'];
    $passwd = $_POST['passwd'];
    $hashed_pw = md5($passwd);

    $users = [];
    $fp = fopen('users.csv', 'r');
    while ($row = fgets($fp)) {
        $users[] = explode(',', $row);
    }

   

    foreach($users as $user) {
        if ($username == $user[0] && $hashed_pw  == trim($user[1])) {
            // $_SESSION['username'] = $username;
            $_SESSION['username'] = $user[0];
            $_SESSION['name'] = $user[5];
        }
    }

    header('location: home.php');
?>