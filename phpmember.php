<?php

include "config.php";

if (isset($_POST['gönder'])) {
    $sql= "insert into users (userName , password , datenter ,firstname ,
     firstsurname , firstel , secondname , secondsurname , secondtel) 
    values ('".$_POST["username"]."','".$_POST["password"]."' ,'".$_POST["giristar"]."',
     '".$_POST["birisim"]."', '".$_POST["birsoyisim"]."', '".$_POST["birtel"]."',
      '".$_POST["ikiisim"]."', '".$_POST["ikisoyisim"]."', '".$_POST["ikitel"]."')";
      $sonuc = mysqli_query($conn,$sql);
      if ($sonuc) {
          echo "veri eklendi";
      }else{
          echo "olmadı";
      }
      //header('location: admin.php');
}
?>
