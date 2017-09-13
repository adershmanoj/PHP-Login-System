<?php
function redirect($page){
    header("location: {$page}.php");
}
function check_duplicate($value,$db){
    $sqlQuery="SELECT username FROM users WHERE username=:value";
    $execute=$db->prepare($sqlQuery);
    $execute->execute(array(':value'=>$value));
    if($row=$execute->fetch()){
        return true;
    }
    else
        return false;
}
?>
