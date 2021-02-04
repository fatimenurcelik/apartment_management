<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="title" content="celik apartmanı, 
     temizlik hizmeti, aidat takibi ">
     <meta http-equiv="content-type" content="text/html; charset=UTF8" >
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CELIK APARTMANI</title>
      
     
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="css/mainpage.css">

      <!--<link rel="stylesheet" href="global.css">
      <link rel="stylesheet" href="main.css">-->

    </head>

 <body>
     
     <nav class ="navbar bg-dark navbar-expand-sm navbar-dark fixed top">
         <div class="container">
            <a href="mainpage.php" class="navbar-brand">
                ÇINAR APARTMANI
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto"></ul>
            </div>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="galeri.php" class="nav-link active">
                        Galeri
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link active">
                        İletişim                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link active">
                        GirişYap
                    </a>
                </li>
            </ul>
         </div>
    </nav>
     <header>
         <div class="jumbotron bg-dark text-white">
             <div class="container">
                 <div class="col-md-6">
                     <h1 class="display-4">
                         ÇINAR APARTMANI
                     </h1>
                     <br>
                     <h4 class="col-md-8">
                        KONFORLU VE GÜVENLİ YAŞAM
                     </h4>
                     <br>
                     
                 </div>
             </div>
         </div> 
     </header>
     <br>
     <main>
        <div class="ms-5 mb-3">
        <?php
        include "config.php";
            if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
            }
         $sql="SELECT * FROM announcements ORDER BY id DESC LIMIT 10";
         $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $topic=$row['topic'];
                    $announcement=$row['announcement'];
                    $id=$row['id'];
                    //echo "<h2>" . $txt1 . "</h2>";
                    //echo "Study PHP at " . $txt2 . "<br>";

                    echo "<h5>" .$topic ." - ".$announcement ."</h5>";
                    //echo $topic. " - ".$announcement ;
                }
            }
        ?>
         </div>
     </main>
    <footer class="py-5 bg-dark text-white text-center">
                <H6>ÇINAR İNŞAAT 2018</H6>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

 </body>
 </html>
