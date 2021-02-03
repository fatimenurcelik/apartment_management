<?php
session_start();
include "config.php";

$submit = htmlspecialchars($_POST['üye-gönder'], ENT_QUOTES, 'UTF-8');

if(empty($_POST['username']) || empty($_POST['password'])
|| empty($_POST['name']) || empty($_POST['surname'])
|| empty($_POST['email']) || empty($_POST['phone'])
|| empty($_POST['doorNo']) || empty($_POST['start']) 
|| empty($_POST['admin'])) {
    die("Boş Alan Bırakmayınız.");
}else{
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$doorNo = $_POST['doorNo'];
$start = $_POST['start'];
$admin = $_POST['admin'];

$sql = "INSERT INTO users (userId, name, surname, email, phone, password, username, isAdmin)
VALUES ('','$name', '$surname', '$email', '$phone', '$password', '$userName', '$isAdmin')";

$sql = "INSERT INTO apartment (id, userId, doorNo, isLiving, start, end)
VALUES ('', '', '$doorNo', '$isLiving', '$start', '$end')";

$sonuc = mysqli_query($conn,$sql);
if ($sonuc) {
    echo "veri eklendi";
}else{
    echo "olmadı";
}
      //header('location: admin.php');
}
?>
