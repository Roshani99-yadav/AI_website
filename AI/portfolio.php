<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
     <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

<!-- Include Swiper and GLightbox CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="path/to/bootstrap.css">
    <title>Responsive website</title>
</head>
<body>
  <?php include 'header.php'; ?>
    <!-- portfolio start -->
    <div class="portfolio1">
        <br><br><br>
      <h1 class="text-center shadow-lg p-2">Portfolio<h1>
    <!-- </div> -->
    <div class="text-center py-2  px-2 text-dark" id="buttons">
        <button class="btn" onclick="filterObjects('All')">All</button>
        <button class="btn" onclick="filterObjects('Web development')">Web development</button>
        <button class="btn" onclick="filterObjects('IOS')">IOS</button>
        <button class="btn" onclick="filterObjects('Android')">Android</button>
    </div>
    <!-- min-vh-100 -->
<section class="gallery ">

    <div class="container shadow-lg">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 py-3 px-3"  data-aos="zoom-out-up">
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android" >
                <img src="img/pf.jpg"  class="gallery-item" alt="gallery"data-filter="Android" onclick="openModal('img/pf.jpg')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf1.png" class="gallery-item" alt="gallery"data-filter="Web development"onclick="openModal('img/pf1.png')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS">
                <img src="img/pf2.webp" class="gallery-item" alt="gallery"data-filter="IOS" onclick="openModal('img/pf2.webp')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf3.png" class="gallery-item" alt="gallery"data-filter="Android" onclick="openModal('img/pf3.png')"> </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development" >
                <img src="img/pf6.webp" class="gallery-item" alt="gallery" data-filter="Web development" onclick="openModal('img/pf6.webp')"> </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS">
                <img src="img/pf7.webp" class="gallery-item" alt="gallery"data-filter="IOS" onclick="openModal('img/pf7.webp')"> </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf5.webp" class="gallery-item" alt="gallery"data-filter="Android" onclick="openModal('img/pf5.webp')">  </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf8.jpg" class="gallery-item" alt="gallery"data-filter="Web development" onclick="openModal('img/pf8.jpg')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS">
             <img src="img/pf9.webp" class="gallery-item" alt="gallery"data-filter="IOS"  onclick="openModal('img/pf9.webp')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"data-category="Android">
                <img src="img/pf10.avif" class="gallery-item" alt="gallery" data-filter="Android" onclick="openModal('img/pf10.avif')"> </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf11.avif" class="gallery-item" alt="gallery"data-filter="Web development" onclick="openModal('img/pf11.avif')"> </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS">
                <img src="img/pf12.webp" class="gallery-item" alt="gallery"data-filter="IOS" onclick="openModal('img/pf12.webp')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf13.webp" class="gallery-item" alt="gallery"data-filter="Android" onclick="openModal('img/pf13.webp')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf14.webp" class="gallery-item" alt="gallery" data-filter="Web development" onclick="openModal('img/pf14.webp')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="IOS">
                <img src="img/port1.webp" class="gallery-item" alt="gallery" data-filter="IOS" onclick="openModal('img/port1.webp')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf4.jpg" class="gallery-item" alt="gallery"data-filter="Android" onclick="openModal('img/pf4.jpg')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development" >
                <img src="img/por12.jpg" class="gallery-item" alt="gallery" data-filter="Web development" onclick="openModal('img/por12.jpg')">
            </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="IOS">
                <img src="img/port2.webp" class="gallery-item" alt="gallery" data-filter="IOS" onclick="openModal('img/port2.webp')"></div>
            
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="gallery-Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
        
                <button type="button" id="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/pf.jpg" class="modal-img" alt="modal img" style="height:410px;width:764px;">
            </div>
        </div>
    </div>
</div>
</div>
    <!--
<section>   
    <div class="container">
        <div class="port row">class="img"  onclick="toggleZoom(this)"
            <div class="box col-lg-3 col-md-6 col-sm-12 overlay" data-aos="zoom-out-up" data-category="IOS">
                <div class="pfimg">
                    <img src="img/pf.jpg" alt="..." class="img" onclick="toggleZoom(this)">
                </div>
                <div class="overlay-content">
                    <a href="img/pf.jpg" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                    <a href="pf.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
        </div>
    </div> -->
<!-- 
    <section clss="gallery min-vh-100">
        <div class="conatiner-lg">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img src="img/pf.jpg" class="gallery-item" lt="gallery">

                </div>
                <div class="col">
                    <img src="img/pf.jpg" class="gallery-item" lt="gallery">

                </div>
                <div class="col">
                    <img src="img/pf.jpg" class="gallery-item" lt="gallery">

                </div>
                <div class="col">
                    <img src="img/pf.jpg" class="gallery-item" lt="gallery">

                </div>
                <div class="col">
                    <img src="img/pf.jpg" class="gallery-item" lt="gallery">

                </div>
                

            </div>
        </div>
</section>

 Modal -->
<!-- <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="img/pf.jpg" class="modal-img" alt="modal img">
</div>
      </div>
    </div>
  </div>
</div>
    
         <section>   
    <div class="container">
    <div class="port row">
            <div class="box col-lg-3 col-md-6 col-sm-12 overlay " data-aos="zoom-out-up" data-category="IOS">
                <div class="pfimg"><img src="img/pf.jpg" alt="..." class="img" onclick="toggleZoom(this)"> </div>
                <div class="overlay-content">
                  <a href="img/pf.jpg" class="icon-link"><i class="fa-solid fa-plus"></a>
                  <a href="pf.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
                  </div> -->
           <!-- </div> --> 
                  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
<i class="fa-solid fa-plus"></i>
</button>
<a href="pf.php" class="icon-link"><i class="fa-solid fa-link"></i></a> -->
              
           <!-- Modal -->
<!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document"> 
    <div class="modal-content"> -->
      <!-- <div class="modal-header"> -->
        <!-- <h5 class="modal-title" id="exampleModalLongTitle"><img src="img/pf.jpg" alt="..." class="img" onclick="toggleZoom(this) "style="height: 510px; text-align: center;
    width: 832px;"></h5> -->
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> 
        </button>-->
      <!-- </div> -->
      <!-- <div class="modal-body">
        ...
      </div> -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Save changes</button> 
      </div> -->
    <!-- </div>
  </div>

</div>
        <div class="box col-lg-3 col-md-6 col-sm-12  overlay" data-aos="zoom-out-up" data-category="Web development">
        <div class="pfimg"><img src="img/pf1.png" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf1.png" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf1.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12 overlay" data-aos="zoom-out-up" data-category="Android">
        <div class="pfimg"> <img src="img/pf2.webp" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf2.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf2.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12 overlay" data-aos="zoom-out-up" data-category="Web development">
        <div class="pfimg"><img src="img/pf3.png" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf3.png" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf3.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class=" box col-lg-3 col-md-6 col-sm-12 overlay" data-aos="zoom-out-up"data-category="IOS">
        <div class="pfimg"><img src="img/pf4.jpg" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf4.jpg" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf4.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class=" box col-lg-3 col-md-6 col-sm-12  overlay" data-aos="zoom-out-up"  data-category="IOS">
        <div class="pfimg"><img src="img/pf5.webp" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf5.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf5.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class=" box col-lg-3 col-md-6 col-sm-12 overlay" data-aos="zoom-out-up" data-category="Web development">
        <div class="pfimg"><img src="img/pf6.webp" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf6.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf6.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12 overlay" data-aos="zoom-out-up" data-category="Android">
        <div class="pfimg"><img src="img/pf7.webp" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf7.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf7.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12  overlay" data-aos="zoom-out-up"  data-category="IOS">
        <div class="pfimg"><img src="img/pf8.jpg" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf8.jpg" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf8.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12 overlay" data-aos="zoom-out-up" data-category="Android">
        <div class="pfimg"><img src="img/pf9.webp" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf9.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf9.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12 overlay" data-aos="zoom-out-up"data-category="Web development">
        <div class="pfimg"><img src="img/pf10.avif" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf10.avif" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf10.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12  overlay" data-aos="zoom-out-up" data-category="">
        <div class="pfimg"><img src="img/pf11.avif" alt="..." class="img"  onclick="toggleZoom(this)" > </div>
            <div class="overlay-content">
                <a href="img/pf11.avif" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf11.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12  overlay" data-aos="zoom-out-up" data-category="Web development">
        <div class="pfimg"><img src="img/pf12.webp" alt="..." class="img" onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/pf12.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf12.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12  overlay" data-aos="zoom-out-up"data-category="Android">
        <div class="pfimg"><img src="img/pf13.webp" alt="..." class="img"  onclick="toggleZoom(this)" > </div>
            <div class="overlay-content">
                <a href="img/pf13.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf13.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>
        <div class="box col-lg-3 col-md-6 col-sm-12  overlay" data-aos="zoom-out-up"  data-category="IOS">
        <div class="pfimg"><img src="img/pf14.webp" alt="..." class="img"  onclick="toggleZoom(this)"></div>
            <div class="overlay-content">
                <a href="img/pf14.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="pf14.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>

        <div class="box col-lg-3 col-md-6 col-sm-12  overlay" data-aos="zoom-out-up" data-category="Android">
        <div class="pfimg"><img src="img/port1.webp" alt="..." class="img"  onclick="toggleZoom(this)"> </div>
            <div class="overlay-content">
                <a href="img/port1.webp" class="icon-link"><i class="fa-solid fa-plus"></i></a>
                <a href="port1.php" class="icon-link"><i class="fa-solid fa-link"></i></a>
            </div>
       
</div>
      
    </div>
</div>   -->
<!-- <main>
<img src="img/pf.jpg" class="slide" alt style="left:0%">
<img src="img/pf2.webp" class="slide" altstyle="left:100%">
<img src="https://picsum.photos/id/237/1000/500" class="slide" alt style="left:200%">
<img src="img/pf3.png" class="slide" alt style="left:300%" >
<img src="img/pf3.png" class="slide" alt style="left:400%">
<img src="img/pf4.jpg" class="slide" alt style="left:500%">
<img src="img/pf5.webp" class="slide" alt style="left:600%">
</main>
<div class="nav">
    <button onclick="goPrev()"> 
        Pre
</button>
<button onclick="goNext()"> 
        Next
</button> -->




    <!-- portfolio end -->
<!-- footer start -->
<?php include 'footer.php'; ?>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox@1.0.8/dist/glightbox.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</body>
   

</html>