<?php 
    
    session_start();
    require_once "dbcontroller.php";
    $db  = new DB;  


    $sql = "SELECT * FROM  tblkategori ORDER BY kategori";
    $row = $db->getALL($sql);

    // var_dump($row);


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Restoran Excel| Aplikasi Restoran SMK</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Restoran Excel</h2>
            </div>

            <div class="col-md-9">
                <div class="float-right mt-4">Logout</div>
                <div class="float-right mt-4 mr-4">Login</div>
                <div class="float-right mt-4 mr-4">Pelanggan</div>
                <div class="float-right mt-4 mr-4">Daftar</div>
                
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <h3>Kategori</h3>
                <hr>
                <?php if(!empty($row)) { ?>
                <ul class="nav flex-column">
                    
                    <?php foreach($row as $r): ?>
                    <li class="nav-item"><a class= "nav-link" href="#"><?php echo $r['kategori']  ?></a></li>
                    <?php endforeach ?>
                </ul> 
                <?php } ?>
            </div>
            <div class="col-md-9">
                <?php 
                      if (isset($_GET['f'])&& isset($_GET['m'])) {
                        $f=$_GET['f'];
                        $m=$_GET['m'];
                        $file  = $f.'/'.$m.'.php';
                        require_once $file;
                      }else {
                        require_once "home/produk.php";
                      }
                    
                ?>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <p class="text-center">2019 - copyright@smkrevit.com</p>
            </div>
        </div>
    </div>
</body>
</html>