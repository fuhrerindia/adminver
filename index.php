<?php
include_once('string.php');
    function admin_ver($mail, $pass){
        global $admin_cred;
    foreach ($admin_cred as $admin_verif_user){
        if ($admin_verif_user['user'] === $mail){
            if ($admin_verif_user['password'] === $pass){
            $admin_verif_email = $admin_verif_user['user'];
            $admin_verif_pass = $admin_verif_user['password'];
            $admin_verif_name = $admin_verif_user['name'];
            $admin_verif_hindi = $admin_verif_user['hi'];       
            }
        }
    }
    if (isset($admin_verif_name)){
        return true;
    }else{
        return false;
    }
}

function admin_name($mail, $pass){
    global $admin_cred;
foreach ($admin_cred as $admin_verif_user){
    if ($admin_verif_user['user'] === $mail){
        if ($admin_verif_user['password'] === $pass){
        $admin_verif_email = $admin_verif_user['user'];
        $admin_verif_pass = $admin_verif_user['password'];
        $admin_verif_name = $admin_verif_user['name'];
        $admin_verif_hindi = $admin_verif_user['hi'];       
        }
    }
}
if (isset($admin_verif_name)){
    return $admin_verif_name;
}else{
    return "NaN";
}
}

function admin_hindi($mail, $pass){
    global $admin_cred;
foreach ($admin_cred as $admin_verif_user){
    if ($admin_verif_user['user'] === $mail){
        if ($admin_verif_user['password'] === $pass){
        $admin_verif_email = $admin_verif_user['user'];
        $admin_verif_pass = $admin_verif_user['password'];
        $admin_verif_name = $admin_verif_user['name'];
        $admin_verif_hindi = $admin_verif_user['hi'];       
        }
    }
}
if (isset($admin_verif_hindi)){
    return $admin_verif_hindi;
}else{
    return "NaN";
}
}
?>