<!-- <h1>Login Form</h1> -->

<?php
      session_start();
      require_once "../dbcontroller.php";
      $db  = new DB;  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Restoran</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    
      <div class="container">
          
        <div class="row">
            
            <div class="col-4 mx-auto mt-4">

                    <div class="form-group">
                      <form action="" method="post">
                        <div>

                           <h3>LOGIN RESTAURANT</h3>

                    
                        </div>
                      <div class="form-group ">
                          <label for="">EMAIL</label>
                          <input type="email" name="email" required placeholder="isi email" class="form-control">
                      </div>

                      <div class="form-group ">
                          <label for="">PASSWORD</label>
                          <input type="password" name="password" required placeholder="isi password" class="form-control">
                      </div>

                        <div>

                            <input type="submit" name="login" value="LOGIN" class="btn btn-primary">

                        </div>
                      </form>
                    </div>

            </div>


        </div>


      </div>


</body>
</html>

<?php 

  if (isset($_POST['login'])) {
    $email  = $_POST['email'];
    $password = $_POST['password'];


    $sql =  "SELECT  * FROM tbluser WHERE email='$email' AND  password='$password' ";
    // echo $email.'--'.$password;

    $count = $db->rowCOUNT($sql);
    // echo $sql;

    if ($count == 0) {
       echo "<center><h2>EMAIL ATAU PASSWORD SALAH</h2></center>";
    }else {
        // echo $count ;
        $sql =  "SELECT  * FROM tbluser WHERE email='$email' AND password='$password' ";
        $row= $db->getITEM($sql);

        $_SESSION['user']=$row['email'];
        $_SESSION['level']=$row['level'];

        //  var_dump($_SESSION);

        header("location:index.php");
    }


   
  }


?>

<body>
    1:42
</body>