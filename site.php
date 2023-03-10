<?php
include ('db.php');

$login =0;
$invalid =0;
$user_name ="";
$user_password ="";




if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
}

$sql = "SELECT * FROM signup WHERE user_name = '$user_name' and user_password = '$user_password'";
$result =mysqli_query($conn,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      $login=1;
      session_start();
      $_SESSION['user_name']=$user_name;
      header('location:home.php');
    }else{
        $invalid=1;
        echo "you need to signup first";
    }
}

// if ($conn->query($sql) === TRUE){
    
//     $user=1;
//     header("location:/stea/create.php");
//     exit;
// }else{
//     $success=1;
//     header("location:/stea/create.php");
//     exit;
//  }


