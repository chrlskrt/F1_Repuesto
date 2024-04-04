<?php
    include_once("connect.php");

    $current_user = (isset($_COOKIE['user'])) ? unserialize(base64_decode(urldecode($_COOKIE['user']))) : null;

    function handleLogIn($user){
        $userr = $user;
        $logInCookie = urlencode(base64_encode(serialize($userr)));
        setcookie('user', $logInCookie, time() + (86400 * 30), "/");
    }
?>