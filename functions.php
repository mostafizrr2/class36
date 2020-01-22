<?php 
session_start();

// $_SESSION["name"] = "Mostafiz Rahman";

if(isset( $_POST['submit']) ){

    $user_name = "user1";
    $pass  = "224466";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if($user_name == $username)
    {
        if($pass == $password ){

            $_SESSION["uname"] = $username;
            $_SESSION["pass"] = $password;  
            header('location:profile.php');
            exit;
        }
        else 
        {
            header('location:index.php');
            $_SESSION['pass_error'] = "You enterd incorrect password.";
            exit; 
        }
    }
    else 
    {
        header('location:index.php');
        $_SESSION['user_error'] = "Username not matched.";
        exit;
    }
    

    

    // var_dump($_SESSION["uname"]);
    // exit;


//     exit;
}











function sessionTopic()
{
    return $_SESSION["name"];
}

/// 1st topic
$title = "Traing Program";

function phpLoops()
{

//    While Loop
//    $i = 1;
//     while($i <= 3){
//         $i++;
//         echo "The number is " . $i . "<br>";
//     }
  
//    $i = 0;

//    do{
//        $i++;
//        echo $i . "<br>"; 
//    }
//    while($i <= 10);

   // Do While
}