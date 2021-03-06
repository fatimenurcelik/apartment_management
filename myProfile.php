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

      <style>
          #photo{
              width: 70%;
              height: auto;
          }
          .card-link{
              color:white;
              backgraound:bg-dark;
              text-decoration: none;
              font-size:26px;
              margin-left:40px;
          }
          .card-link:hover{
              color:#b7b7a4;
              backgraound:bg-dark;
              text-decoration: none;
          }
      </style>

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
                    <a href="myProfile.php" class="nav-link active">
                        Profilim
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link active">
                        ÇıkışYap
                    </a>
                </li>
            </ul>
         </div>
    </nav>
     <header>
         <div class="jumbotron bg-dark text-white">
             <div class="container ">
                 <div >
                     <h1 class="display-4 text-center">
                         ÇINAR APARTMANI
                     </h1>
                     <br>
                     <h4 class="text-center">
                        KONFORLU VE GÜVENLİ YAŞAM
                     </h4>
                     <br>
                     <br>
                </div>
            </div>    

     <div class="container d-flex justify-content-around">
        <div class="row">
             <div class="col md-flex">
                <div class="card2">
                    <a href="payDue.php">
                    <img src="images/aidat.jpg" class="card-img-top img-thumb-nail" alt="">
                    </a>
                    <div class="card-body">
                        <a href="payDue.php" class="card-link ">Aidat öde</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col md-flex ">
                <div class="card2">
                    <a href="showMemInfo.php">
                    <img src="images/ödeme2.jpg" class="card-img-top img-thumb-nail" alt="">
                    </a>
                     <div class="card-body">
                     <a href="showMemInfo.php" class="card-link ">Aidat görüntüle</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col md-flex">
                <div class="card2">
                    <a href="anno.php">
                    <img src="images/announcement.jpg" class="card-img-top img-thumb-nail" alt="">
                    </a>
                     <div class="card-body">
                        <a href="anno.php" class="card-link ">Duyurular</a>
                    </div> 
                </div>
           </div> 
                        
        </div>
    </div>

    
   </div>

     </header>
     <br>
     <main>
         <div class="container">
             <div class="row">
                 <div class="col md-8">
                    <div class="card">
                    <img src="images/park.JPG" class="card-img-top img-thumb-nail" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Çocuk parkı</h4>
                         <p>
                            Siz ve sevdikleriniz için her türlü konfor ve 
                            hayatı kolaylaştıracak detaylar incelikle uzun uzun düşünüldü.
                        </p>
                    </div>
                   </div>
                   <br>
                   <div class="col md-8">
                    <div class="card">
                    <img src="images/temizlik.png" class="card-img-top img-thumb-nail" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Temizlik hizmeti</h4>
                         <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.Id unde 
                            ducimus alias corporis quisquam minima vero nam magni, deserunt tempore!
                        </p>
                    </div>
                   </div>

                </div>
                <br>
            </div>
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
