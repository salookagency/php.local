<?php
session_start();

// simple custom hash function (don't modify this)
function getHash($str)
{
    $saltStr = '7Learn.cOm';
    $hash = sha1($saltStr . md5($str . $saltStr));
    return $hash;
}

function redirectTo($addr)
{
    header("Location: $addr");
}

function add7LUser($username, $password, $displayName, $email)
{
    $db = new PDO("mysql:host=localhost;dbname=7lphp;charset=utf8", 'root', '');
    $statement = $db->prepare("INSERT INTO users VALUES (null, ? , ? ,? ,? , null);");
    return $statement->execute(array(strtolower($username), getHash($password), $displayName, strtolower($email)));
}

function get7LUser($username, $fields = '*')
{
    $db = new PDO("mysql:host=localhost;dbname=7lphp;charset=utf8", 'root', '');
    $statement = $db->prepare("select $fields from users where username=?;");
    $statement->execute(array($username));
    $customers = $statement->fetchAll(2);
    if (count($customers) > 0) {
        return $customers[0];
    }
    return false;
}

function doLogin($username, $password)
{
    $user = get7LUser($username);
    if ($user and $username == $user['username'] and getHash($password) == $user['password']) {
        $_SESSION['login'] = $username;
        $_SESSION['user'] = $user['display_name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['userIP'] = $_SERVER['REMOTE_ADDR'];
//        $_SESSION['last_action_time'] = time();
        return true;
    }
    return false;
}
function doLogout()
{
    unset($_SESSION['login'], $_SESSION['user'], $_SESSION['email'], $_SESSION['last_action_time'], $_SERVER['REMOTE_ADDR']);
    return true;
}

function isLogin()
{
    /* after 10 min of inactivity , force logout ! (You can also use cookies to implement this !)
    $maxInactiveSeconds = 10 * 60; // 10 minutes
    if (isset($_SESSION['last_action_time'])) {
        $diffSecs = time() - $_SESSION['last_action_time'];
        if ($diffSecs > $maxInactiveSeconds) {
            doLogout();
            return false;
        }else{
            $_SESSION['last_action_time'] = time();
        }
    }
*/
    return (isset($_SESSION['login'])) ? true : false;
}

