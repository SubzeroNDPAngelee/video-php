<!-- <h1>Insert User</h1> -->

<h3>Insert User</h3>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="">Nama User</label>
            <input type="text" name="user" required placeholder="isi user" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Nama Email</label>
            <input type="email" name="email" required placeholder="isi email" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Nama Password</label>
            <input type="password" name="password" required placeholder="isi password" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="konfirmasi" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Level</label>
            <select name="level" id="">

                <option value="owner">owner</option>
                <option value="admin">admin</option>
                <option value="chef">chef</option>
                <option value="chasier">chasier</option>

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
        $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";
        $db->runSQL($sql);
        // echo $sql;
        header("location:?f=user&m=select"); 
       }else {
         echo "<h2>Password Tidak Sama</h2>";
       }


      

       

     
    }

?>