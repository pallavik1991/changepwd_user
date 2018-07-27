<?php
session_start();
include_once '/config/database.php';
include_once '/objects/users.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);
$msg="";
 
try{

        $user->username=$_SESSION["session_username"];
        $user->password=$_POST["param_newpwd"];
        

        if($user->updatePassword()){
            $msg="Successfully changed";
        }
        else{
            $msg="Failed";
        }
    echo json_encode($msg);
                      
    }    

catch(Exception $ex){
    
    $msg=$ex.errorMessage();

    }
finally{
    
    //echo json_encode($msg);
    
    }
 
?>
