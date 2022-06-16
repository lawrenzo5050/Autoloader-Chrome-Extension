<?php

$username = $_POST['usrname'];  
$password = $_POST['pwd'];
    if(!empty($username) && !empty($password) ){  
            echo "<h1><center> Login successful!!! </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid details.</h1>";  
        }   

?>