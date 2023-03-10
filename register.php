<?php
include ('db.php');
$hash = "";
$success =0;
$user =0;
$user_name ="";
$user_password ="";




if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    // if($_POST['user_password']){
    //     $user_password = ['user_password'];
    //     echo "your password is : $password";
    //     //secure the password
    //    $hash = user_password_hash($user_password, PASSWORD_DEFAULT );
    //    //display
    //    echo "<br><br>";
    //    echo "this password is encrypted:$hash";

    // }
}

$sql = "INSERT INTO signup (user_name, user_password )
                VALUES ('$user_name', '$user_password')";

if ($conn->query($sql) === TRUE){
    // $errorMessage = "invalid query:".$connection->error;
    $user=1;
    header("location:/stea/login.php");
    exit;
}else{
    // $successMessage = 'new student added correctly';
    $success=1;
    header("location:/stea/create.php");
    exit;
 }
// $sql="SELECT * FROM signup WHERE username = '$user_name'";
// $result=mysql_query($con,$sql);
// if($result){
//     $num=mysqli_num_rows($result);
//     if($num>0){
//         echo "user already exist";
//     }
// }