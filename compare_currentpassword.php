<?php
session_start();
$msg="";
 
try{

        $user->password=$_SESSION["session_password"];
        $currentpwd=$_POST["param_current"];
        
        if($user->password==$currentpwd){
        	$msg="match";
        }
        else{
        	$msg="failed";
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
