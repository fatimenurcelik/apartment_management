<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yeni-üye-ekle</title>

    <style>
        #table{
            border: 1px solid green;
            width: 50%;
         
        }

    </style>
</head>
<body>
    <form action="phpmember.php" method = "POST">
        <h2>Bilgiler</h2>
        <table id="table">
            <tr><td>Kullanıcı adı: </td><td><input type="text" name="username" required/></td></tr>
            <tr><td>Parola: </td><td><input type="text" name="password" required/></td></tr>
            <tr><td>Eve giriş tarihi: </td><td><input type="text" name="giristar" placeholder ="gün-ay-yıl ör:27.11.2020" required/></td></tr>
            <tr><td>Evde yasayan birinci kişi ismi : </td><td><input type="text" name="birisim" required/></td></tr>
            <tr><td>Evde yasayan birinci kişi soyismi : </td><td><input type="text" name="birsoyisim" required/></td></tr>
            <tr><td>Evde yasayan birinci kişi telefon no: </td><td><input type="text" name="birtel" required/></td></tr>
            <tr><td>Evde yasayan ikinci kişi varsa ismi : </td><td><input type="text" name="ikiisim" required/></td></tr>
            <tr><td>Evde yasayan ikinci kişi varsa soyismi : </td><td><input type="text" name="ikisoyisim" required/></td></tr>
            <tr><td>Evde yasayan ikinci kişi varsa telefon no: </td><td><input type="text" name="ikitel" required/></td></tr>
            <tr><td><input type="submit" value="KAYDET" name="gönder"></td></tr>
        </table>



    </form>
</body>
</html>
