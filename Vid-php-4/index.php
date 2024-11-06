<?php


function Makan(){ 
    echo "Saya Makan Indomie";  

  }


  function luasPersegi ($l= 90, $p= 100){

    
  // $p = 5;
  // $l = 2;
  $luas = $p * $l;

  echo $luas;
  }


  luasPersegi(10,3  ); 
//   Makan();
//   echo "<br>";
//   Makan();

echo "<br>";

function luas($u = 10, $r = 9){
   $luas = $u * $r;

   return $luas;
}

echo luas();

function output(){
  return "Belajar Funtion";
}

echo '<h1>'.output().'</h1>';

?>


