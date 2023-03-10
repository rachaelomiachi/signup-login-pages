



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>signup Page</title>

</head>
<body>
        <?php
        $success =1;
        $user =0;

        if($user){
            echo '<div class="alert alert-danger
             alert-dismissible fade show" role="alert">
            <strong>oh no sorry!</strong> user already exist.
            <button type="button" class="btn-close"
             data-bs-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>';
        }
        ?>

<?php
        $success =0;
        $user =0;

        if($success){
            echo '<div class="alert alert-success
             alert-dismissible fade show" role="alert">
            <strong>success!</strong> you have successfully signedup.
            <button type="button" class="btn-close"
             data-bs-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>';
        }
        ?>
        
        <h1 class="text-center">signup page</h1>
            <div class="container mt-5">
            <form action="register.php" method="POST">
        <div class="mb-3">
            <label for="user_name" >Username</label>
            <input type="text" class="form-control" name="user_name" id="user_name"  >
        </div>

        <div class="mb-3">
            <label for="password" >Password</label>
            <input type="password" class="form-control" name="user_password" id="user_password" >
        </div>

        
        <!-- <button type="submit" class="btn btn-primary
        w-100">Submit</button> -->

        <button type="submit">Signup</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
            </div>

    
    
        
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
         -->

  </body>
</html>