<?php 
session_start();
require_once dirname( __FILE__ ) . '\..\sanitizer.php';

$host = 'localhost';
$user = 'root';
$pw = '';
$database = 'apekama_db';

// creating connection
$connection = new mysqli($host, $user, $pw, $database);
if ($connection->connect_error) {
    die($connection->connect_errno); 
}


// buyer loging


// sanitizing user inputs in the _post array 
$email ='';
$password = '';
if (isset($_POST['buyer_email'])) $email = sanitizeString ($_POST['buyer_email']);
if (isset($_POST['buyer_password'])) $password = sanitizeString ($_POST['buyer_password']);

// checking whether user has made an input
if ($email !=''){
    $sql = "select * from buyer where email ='$email'";
    $result = $connection->query($sql);
    if ($connection->error) {
        die($connection->error);
    }
    while ($row = $result->fetch_assoc()) {
        $stored_pw =  $row['password'];
        if(strcmp($password,$stored_pw) ==0){
            // user login info are correct
            // starting session
            
            // get user details
            $uname = $row['username'];
            $buyerid = $row['buyer_id'];
            $_SESSION['uname'] = $uname;
            $_SESSION['id'] = $buyerid;
            $_SESSION['type'] = 'buyer';
            
              header("location: ". 'home.php');
        }else{
            echo ' not loged';
        }
    }
    
    
}



//if (isset($_POST['buyer_email'])) {
//    echo 'sdfdsfsd';
//    $email = $_POST['buyer_email'];
//    $sql = "select password from buyer where email ='$email'";
//    $result = $connection->query($sql);
//    if ($connection->error) {
//        die($connection->error);
//    }
//    $pw = $_POST['buyer_password'];
//    // checking password
//    while ($row = $result->fetch_assoc()) {
//        $stored_pw =  $row['password'];
//        if(strcmp($pw,$stored_pw) ==0){
//            // if paswords are identical
//            echo 'loged in';
//        }else{
//            echo 'xxxxxxxxxxxxxxxx';
//        }
//    }
//}
?>