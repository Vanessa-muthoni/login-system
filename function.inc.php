<?php

function emptyInputSignup($name,$email,$username, $DOB,$gender, $pwd, $pwdrepeat){
    $result;

    if (empty($name) || empty($email)|| empty($username)|| empty($DO)|| empty($gendail)|| empty($ $pwd) || empty($pwdrepeat)) {
       $result= true;

    }
    else {
        $result = false;
    }
    return $result;
 }
function invalidUid ($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true ;
    }
    else {
        $result = false;
    }  
    return $result;
}
function invalidEmail ($email) {
    $result;
 
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
       $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function pwdMatch ($pwd, $pwdrepeat){
    $result;
    if ($pwd !==$pwdrepeat) {
       $result = true ;
    }
    else {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username , $email) {
    $sql = "SELECT + FROM users WHERE usersUid = ? OR usersEmail= ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss",$username , $email );
mysqli_stmt_execute($stmt);
 
$resultData = mysqli_stmt_get_result($stmt);
if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
}
else {
    $result =false;
    return $result;
}
mysqli_stmt_close($stmt);
}
function createUser($conn,$name, $email,$username,$DOB, $pwd) {
    $sql = "INSERT INTO user (usersName,usersEmail,usersUid,usersDob, userspwd) VALUES(?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, "ssss
s",$name, $email,$username,$DOB,$hashedPwd);
mysqli_stmt_execute($stmt);
 
header("location: ../signup.php?error=none");
        exit();
}
function emptyInputLogin($username, $pwd){
    $result;

    if (empty($username)|| empty($pwd)) {
       $result= true;

    }
    else {
        $result = false;
    }
    return $result;
 }
function loginUser($conn, $username, $pwd){
    $uidexists = uidExists($conn, $username, $username);
    if ($uidexists === false) {
        header("location: ../login.php?error= wronglogin");
        exit();
}
$pwdHashed = $uidexists["userspwd"];
$checkPwd= password_verify($pwd, $pwdHashed);

if ($checkPwd === false) {
    header("location: ../login.php?error= wronglogin");
        exit();
}
elseif ($checkPwd === true) {
   session_start();
$_SESSION["userid"] = $uidexists["usersid"];
$_SESSION["useruid"] = $uidexists["usersUid"];
header("location: ../login.php?");
exit;
 }
}