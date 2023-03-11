



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>login to the website</title>
</head>
<body>
<?php
        $login =0;
        $invalid =0;

        if($login){
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
   
   <?php
        $login =0;
        $invalid =0;

        if($invalid){
            echo '<div class="alert alert-danger
             alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Invalid Credentials.
            <button type="button" class="btn-close"
             data-bs-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>';
        }
        ?>
   
   
    <h1><strong>login to our site</strong></h1>
            <div class="container mt-5">
            <form action="site.php" method="POST">
        <div class="mb-3">
            <label for="user_name" > Enter Usernname</label>
            <input type="text" class="form-control" name="user_name" id="user_name"  >
        </div>

        <div class="mb-3">
            <label for="password" >Enter Password</label>
            <input type="password" class="form-control" name="user_password" id="user_password" >
        </div>

        
        <button type="submit" class="btn btn-success
        w-100">Login</button>

        <!-- <button type="submit">Login</button> -->
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
            </div>

    
    
        
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
         -->

  </body>
</html>