<?php
include "config.php";


 if ($_POST) {
     $ad = $_POST["ad"];
     $password= $_POST["password"];

     $bul = mysqli_query($conn, "select * from users where userName = '$ad' && password = '$password'");
     $say = mysqli_num_rows($bul);
     if ($say > 0 ) {
         $_SESSION["oturum"] = true;
         $_SESSION["userName"] = $ad;
         $_SESSION["password"] = $password;
         $giristar = "select datenter from users where userName = '$ad' && password = '$password'";
         $_SESSION["datenter"] = $giristar;
         $_SESSION["firstname"] = $birisim;
     }else {
         echo "giris basarısız oldu";
     }
 }else {

     if (isset($_SESSION["oturum"])) {
         //oturum acanların görebileceği kısım
        // header('location: afterlogin.php');
        // echo '<h1>weeelcoommee</h1>';
         //echo 'hosgeldin '.$_SESSION["userName"].'<a href="logout.php"> cıkıs yap </a>';
         echo 'kullanıcı adı: '.$_SESSION["userName"];
         echo 'eve giris tarihi: '.$_SESSION["datenter"];
         echo 'isim : '.$_SESSION["firstname"];
         echo 'soyisim: '.$_SESSION["firstsurname"];
         echo ' tel : '.$_SESSION["firstel"];
         echo 'ikinci kişi ismi : '.$_SESSION["secondname"];
         echo 'ikinci kişi soyismi: '.$_SESSION["secondsurname"];
         echo 'ikinci kişi tel: '.$_SESSION["secondtel"];

     }

     if (!isset($_SESSION["oturum"])){

    echo '<form action="" method="post"> 
         <input type="text" name ="ad" placeholder = "Kullanıcı adınızı giriniz" value=""><br>
         <input type="password" name="password" placeholder = "Sifrenizi giriniz" value=""><br>
        <input type="submit" class ="buton" name="gönder" value="Giris">
     </form>';
     }
 }
?>
