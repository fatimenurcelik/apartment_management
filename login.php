<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

    <title>Giriş yap</title>
    <style>
        *{
            padding: 0;
            margin: 0 ;
            box-sizing:border-box;
        }
        body{
            background: #b7b7a4;
        }
        .row{
            background:white;
            border-radius:30px;
            box-shadow:12px 12px 22px grey;
        }
        img{
            border-top-left-radius:30px;
            border-bottom-left-radius:30px;
         }
         .btn1{
             border:none;
             outline: none;
             heigt: 500px;
             width: 100%;
             background-color:black;
             color:white;
             border-radius: 4px;
             font-weight:bold;
         }
         .btn1:hover {
             background:white;
             border:1px solid;
             color:black;
         }
    </style>
  </head>

  <body>
     <section class="Form my-4 mx-5">
     <div class="container">
         <div class="row no-gutters ">
             <div class="col-lg-5">
                 <img src="images/kapı.jpg" class= "img-fluid" alt="">
             </div>
             <div class="col-lg-7 mt-5">
                 <h1 class="font-weight-bold py-3 ml-4">Çınar Apartmanı</h1>
                 <h4 class="ml-5 mt-2">Giriş yap</h4>
                 <form action ="phplogin.php" method="post">
                     <div class="form-row ml-4 mt-3">
                         <div class="col-lg-7">
                         <input type="text" name ="ad" placeholder = "Kullanıcı adınızı giriniz" required="" class="form-control my-3 p-4">
                         </div>
                     </div>
                     <div class="form-row ml-4 ">
                         <div class="col-lg-7">
                         <input type="password" name="password" placeholder = "Sifrenizi giriniz" required="" class="form-control  my-3 p-4">
                         </div>
                     </div>
                     <div class="form-row ml-4 mt-2 ">
                         <div class="col-lg-7">
                             <button type="submit" class="btn1 mt-3 mb-5" name ="giris-formu" value="Giris">Giriş yap</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
     integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
     integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>
