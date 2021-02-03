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
                 <img src="images/home.jpg" class= "img-fluid" alt="">
             </div>
             <div class="col-lg-7 mt-4">
                 <h1 class="font-weight-bold py-3 ml-4">Çınar Apartmanı</h1>
                 <h4 class="ml-5 mt-2">Yeni üye ekle</h4>
                 <form action ="phpmember.php" method="post" class="ml-4">
                 <table border="0">
                 <tr>
                 <td>Kullanıcı adı: </td>
                 <td colspan="2">
                 <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                         <input type="text" name ="ad" required="" class="form-control ">
                    </div>
                </div>
                 </td></tr>
                 <tr>
                 <td> Parola: </td>
                 <td colspan="2">
                 <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                        <input type="text" name="password" required="" class="form-control " />
                    </div>
                 </div>
                 </td></tr>
                 <tr> <td> İsim: </td>
                 <td colspan="2">
                 <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                    <input type="text" name="name" required="" class="form-control "/>
                    </div>
                 </div>
                 </td></tr>
                 <tr> <td> Soyisim: </td>
                 <td colspan="2">
                 <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                    <input type="text" name="surname" required="" class="form-control "/>
                    </div>
                 </div>
                 </td></tr>
                 <tr> <td> E-mail: </td>
                 <td colspan="2">
                 <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                    <input type="text" name="email" required="" class="form-control "/>
                    </div>
                 </div>
                 </td></tr>
                 <tr> <td> Telefon No: </td>
                 <td colspan="2">
                 <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                    <input type="text" name="phone" required="" class="form-control "/>
                    </div>
                 </div>
                 </td></tr>
                 <tr> <td> Kapı No: </td>
                 <td colspan="2">
                 <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                    <input type="text"  name="doorNo"  required="" class="form-control "/>
                    </div>
                 </div>
                 </td></tr>  
                 <tr> <td> Giriş tarihi: </td>
                 <td colspan="2">
                 <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                    <input type="text" name="start" required="" placeholder="yıl-ay-gün" class="form-control "/>
                    </div>
                 </div>
                 </td></tr>   
                <tr>
                <td> Admin mi </td>
                <td>
                <div class="form-row ml-4 mt-3">
                    <div class="col-lg-12">
                    <input type="radio" id="admin" name="admin" value="1">
                    <label for="male"> Evet </label>
                    <input type="radio" id="admin" name="admin" value="0">
                    <label for="female">Hayır</label>
                    </div>
                 </div>
                 </td>
                </tr>
                 <tr> <td colspan="3">
                 <div class="form-row mt-3">
                    <div class="col-lg-12">
                    <input type="submit" value="KAYDET" name="gönder" class="form-control "/>
                    </div>
                 </div>
                 </td></tr>   

                </table>
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
