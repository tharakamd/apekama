<?php 
//session_start();
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


// seller loging


// sanitizing user inputs in the _post array 
$email ='';
$password = '';
if (isset($_POST['seller_email'])) $email = sanitizeString ($_POST['seller_email']);
if (isset($_POST['seller_password'])) $password = sanitizeString ($_POST['seller_password']);

// checking whether user has made an input
if ($email !=''){
    
    $sql = "select * from seller where email ='$email'";
    //  echo "$sql";
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
            $buyerid = $row['seller_id'];
            $_SESSION['uname'] = $uname;
            $_SESSION['id'] = $buyerid;
            $_SESSION['type'] = 'seller';
           // echo 'logged';
              header("location: ". 'home.php');
        }else{
            echo ' not loged';
        }
    }
    
    
}




?>