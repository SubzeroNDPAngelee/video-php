<!-- <h1>Update User</h1> -->
<?php 
      if (isset($_GET['id'])) {
       $id = $_GET['id'];


       $sql = "SELECT * FROM tbluser WHERE iduser=$id";
       $row = $db->getITEM($sql);
    //    echo $sql;   
    //    var_dump($row);
      }




?>


<h3>Update User</h3>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="">Nama User</label>
            <input type="text" name="user" required value="<?php echo $row ['user'] ?>" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Nama Email</label>
            <input type="email" name="email" required value="<?php echo $row ['email'] ?>" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Nama Password</label>
            <input type="password" name="password" required value="<?php echo $row ['password'] ?>" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required value="<?php echo $row ['password'] ?>" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Level</label>
            <select name="level" id="">

                <option value="owner"<?php  if ($row['level']==="owner") echo "selected" ?> >owner</option>
                <option value="admin"<?php  if ($row['level']==="admin") echo "selected" ?> >admin</option>
                <option value="chef" <?php  if ($row['level']==="chef") echo "selected" ?> >chef</option>
                <option value="chasier" <?php  if ($row['level']==="chasier") echo "selected" ?>  >chasier</option>

            </select>
        </div>

        <div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
       $user = $_POST['user'];
       $email =$_POST['email'];
       $password =$_POST['password'];
       $konfirmasi =$_POST['konfirmasi'];
       $level =$_POST['level'];
       
       if ($password === $konfirmasi) {
        $sql = "UPDATE   tbluser SET user='$user', email='$email', password='$password', level='$level' WHERE iduser=$id";
        
        // echo  $sql;
        
        $db->runSQL($sql);
        // echo $sql;
        header("location:?f=user&m=select"); 
       }else {
         echo "<h2>Password Tidak Sama</h2>";
       }


      

       

     
    }

?>
