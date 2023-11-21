<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username= $_POST["uid"];
    $DOB = $_POST["DOB"];
    $gender= $_POST["gender"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';
    if (emptyInputSignup($name,$email,$username, $DOB,$gender, $pwd, $pwdrepeat ) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invalidUid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
     if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
     }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
         exit();
            }
    createUser($conn, $name, $username, $email,$DOB, $pwd);
    
    }

else {
    header("location: ../signup.php");
    exit();
}