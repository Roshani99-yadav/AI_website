<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
     <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="path/to/bootstrap.css">
    <title>Responsive website</title>
</head>
<body>
  <?php include 'header.php'; ?>
<!-- home start -->

<div class="p1 shadow-lg">
  <div class="home  container-fuild px-5 py-1">
  
  <br><br><br><br>
    <div class="row text-light">
      <div class="col-lg-7 col-md-12 col-sm-12"  data-aos="fade-up" data-aos-duration="3000">
        <br>
        <br>
          <h2 class="text-dark"><span>Welcome To AI Technology Services</span></h2>
          <p  class="text-dark" id="introText">
            Artificial Intelligence is the intelligence possessed by the machines under which they can perform various
            functions with human help. With the help of A.I, machines will be able to learn, solve problems, plan things,
            think, etc. Artificial Intelligence, for example, is the simulation of human intelligence by machines.
          </p>
          <p class="text-dark" id="extraText" style="display: none;">
            In the field of technology. AI has become a catchall term for applications that perform complex tasks that once
            required human input, such as communicating with customers online or playing chess. The term is often used
            interchangeably with its subfields, which include machine learning (ML) and deep learning.
          </p>
          <button class="btn  text-dark m-4" id="readMoreBtn" onclick="toggleReadMore()" style=" background-color: rgba(255, 182, 193, 0.596); ">Read More</button>
         </div>
       
        <div class="col-lg-5 col-md-12 col-sm-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
         <br><br>
          <img src="img/hero-img.png" class="homeimg" >
        </div>
    
    </div> 
</div>
</div>
<!-- home end -->

<!-- About start -->
 <div class="p2 ">
<h1 class="text-center p-1">Artificial Intelligence</h1>
      <div class="container-fuild   px-5 py-1 ">
       <div class="row  shadow-lg py-3 ">
   
        <div class="col-lg-6 col-md-12 col-sm-12 text center" data-aos="zoom-in-right">
         <center>
            <img src="img/Abt1.gif" alt="centered image" class="a1">
           </center> 
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12" data-aos="zoom-in-left"> <br>
         <h3>Custom AI Solutions Development</h3>
            <p class="text-dark">Engage with a service provider to develop tailored AI solutions that address your specific business challenges. This includes building machine learning models, natural language processing applications, or computer vision systems designed to meet your unique requirements.Custom AI development is the process of developing a company-specific AI solution targeting a particular problem. Since custom AI software is developed for a single business it needs to satisfy the business' specifications and expectations.</p></div>
        <div class="col-lg-6 col-md-12 col-sm-12" data-aos="zoom-in-left">
          <br>
            <h3>Data Annotation and Labeling</h3>
            <p class="text-dark">Utilize AI service providers for accurate data annotation and labeling services. High-quality labeled datasets are essential for training robust AI models, and outsourcing this task ensures the quality and relevance of your training data. Data labeling can be applied in innumerable use cases like natural language processing, computer vision, and speech recognition. Data annotation is the process of labeling data with different metadata forms like audio, text, images to train ML models like chatbots, autonomous vehicles, and more.</p>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text center" data-aos="zoom-in-right">
           <center>
            <img src="img/Abt2.gif" alt="centered image" class="a1">
           </center> 
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text center" data-aos="zoom-in-right">
           <center>
            <img src="img/Abt3.gif" alt="centered image" class="a1">
           </center> 
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12" data-aos="zoom-in-left">
          <br><h3>AI Integration and Deployment</h3>
            <p class="text-dark">Seek assistance in integrating AI technologies into your existing systems and deploying them seamlessly. AI service providers can ensure that the implemented solutions work cohesively with your workflow, maximizing the impact of AI on your business processes.
            Deployment is the method by which you integrate a machine learning model into an existing production environment to make practical business decisions based on data.Software deployment is the process of making software available to be used on a system by users and other programs
            </p> </div>
      
      </div>
</div>
</div> 
<!-- About end -->
<!-- Portfolio start -->
<div class="p2 ">
<h1 class="text-center p-1">Portfolio</h1>
<div class="text-center py-2  px-2 text-dark" id="buttons">
        <button class="btn" onclick="filterObjects('All')">All</button>
        <button class="btn" onclick="filterObjects('Web development')">Web development</button>
        <button class="btn" onclick="filterObjects('IOS')">IOS</button>
        <button class="btn" onclick="filterObjects('Android')">Android</button>
    </div>
     <div class="container-fuild   px-5 py-1 ">
       <div class="row  shadow-lg py-3 ">
       <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf.jpg"  class="gallery-item" alt="gallery" data-filter="Android" onclick="openModal('img/pf.jpg')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf1.png" class="gallery-item" alt="gallery" data-filter="Web development"onclick="openModal('img/pf1.png')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS" >
                <img src="img/pf2.webp" class="gallery-item" alt="gallery" data-filter="IOS" onclick="openModal('img/pf2.webp')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf3.png" class="gallery-item" alt="gallery" data-filter="Android" onclick="openModal('img/pf3.png')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf6.webp" class="gallery-item" alt="gallery" data-filter="Web development" onclick="openModal('img/pf6.webp')"> </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS">
                <img src="img/pf7.webp" class="gallery-item" alt="gallery" data-filter="IOS" onclick="openModal('img/pf7.webp')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf5.webp" class="gallery-item" alt="gallery" data-filter="Android" onclick="openModal('img/pf5.webp')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf8.jpg" class="gallery-item" alt="gallery" data-filter="Web development" onclick="openModal('img/pf8.jpg')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS">
                <img src="img/pf9.webp" class="gallery-item" alt="gallery" data-filter="IOS"  onclick="openModal('img/pf9.webp')"></div>
          </div>
      </div>
</div>
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
<!-- Portfolio end -->




 <!-- <div class="p3">

      <h1 class="text-center p-1">Portfolio</h1>

    <div class="text-center py-2  px-2 text-dark" id="buttons">
        <button class="btn" onclick="filterObjects('All')">All</button>
        <button class="btn" onclick="filterObjects('Web development')">Web development</button>
        <button class="btn" onclick="filterObjects('IOS')">IOS</button>
        <button class="btn" onclick="filterObjects('Android')">Android</button>
    </div>


</div> -->
    <!-- <div class="gallery">
    <div class="container-fuild">
       <div class="row" >

   
   
      </div>

    </div>
</div>
     -->
<!-- <div class="gallery ">
<div class="container-fuild px-5 py-1 ">
        <div class="row  py-3 px-3"  data-aos="zoom-out-up">
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf.jpg"  class="gallery-item" alt="gallery" data-filter="Android" onclick="openModal('img/pf.jpg')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf1.png" class="gallery-item" alt="gallery" data-filter="Web development"onclick="openModal('img/pf1.png')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS" >
                <img src="img/pf2.webp" class="gallery-item" alt="gallery" data-filter="IOS" onclick="openModal('img/pf2.webp')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf3.png" class="gallery-item" alt="gallery" data-filter="Android" onclick="openModal('img/pf3.png')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf6.webp" class="gallery-item" alt="gallery" data-filter="Web development" onclick="openModal('img/pf6.webp')"> </div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS">
                <img src="img/pf7.webp" class="gallery-item" alt="gallery" data-filter="IOS" onclick="openModal('img/pf7.webp')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="Android">
                <img src="img/pf5.webp" class="gallery-item" alt="gallery" data-filter="Android" onclick="openModal('img/pf5.webp')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4"  data-category="Web development">
                <img src="img/pf8.jpg" class="gallery-item" alt="gallery" data-filter="Web development" onclick="openModal('img/pf8.jpg')"></div>
            <div class="gy-4 col-12 col-sm-6 col-md-4" data-category="IOS">
                <img src="img/pf9.webp" class="gallery-item" alt="gallery" data-filter="IOS"  onclick="openModal('img/pf9.webp')"></div>
            </div>
          </div>
      </div>  -->

<!-- Modal -->
<!-- <div class="modal fade" id="gallery-Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> -->
<!-- Portfolio end -->
<!-- story start -->
<!-- <div class=" pgc container-fuild   px-5 py-1 ">
       <div class="row  shadow-lg py-3 ">
     <div class="  col-lg-4 col-md-6 col-sm-12 Animationgif py-5 px-5" data-aos="zoom-in-left" style="border:4px solid white;">
     <h3 class="text-light">Passion</h3><p class="text-light">Our aim is to serve our clients, make innovative breakthrough and be the best in the industry. We understand the consumer insight and devote our time and efforts in providing you the best.</p></div>
    <div class="Animationgif1 py-5 px-5 col-lg-4 col-md-6 col-sm-12" style="border:4px solid white;" data-aos="zoom-in-left"> <h3 class="text-light">Going forward</h3><p class="text-light">We believe in learning from experience. In order to move in the forward direction, we explore, experiment and model impeccable solutions for our clients.p></div>
    <div class="Animationgif2 col-lg-4 col-md-6 col-sm-12 py-5 px-5" style="border:4px solid white;" data-aos="zoom-in-left">  <h3 class="text-light">Constant growth</h3><p class="text-light">We are constantly looking for opportunities to work on ourselves and improve efficiency. We listen to our clients and welcome constructive criticism with a positive approach.</p></div>
</div>
</div>  -->
<!-- story end -->
<!-- services start -->
<div class="p4">
<h1 class="text-center  p-1">Service</h1> 

  <div class="service container-fuild  px-5 py-1">
    <div class="row  py-4  shadow-lg text-dark"  data-aos="fade-up"
          data-aos-duration="3000">
  

        <div class="col-lg-4 col-md-6 col-sm-12"> 
    
           <div class="card">
            <img src="img/hs.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s1.php"style="text-decoration:none; color:black;"><h5 class="card-title">AI development</h5></a>
              <p >Whenever your organization is
                collecting a large amount of data, chances are you Usually clients have
                business objectives can be more efficient integrating AI solutions which
                will. We are expert in implementing leading edge artificial intelligence
                development solutions including data science NLP.<br></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/17.jpeg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s2.php"style="text-decoration:none; color:black;"><h5 class="card-title">Data strategy & Digital Transformation</h5></a>
              <p>Usually clients have business
                objectives that a software alone cannot solve: they need to align business
                requirements and in the digital transformation process. We can ensure there
                is strong overlapping between your data and business requirements.</p>
            </div>
          </div>
          </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/15.jpeg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">Bespoke software development</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions.the
                right software infrastructure for your data </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n1.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">Bespoke software development</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions. the
                right software infrastructure for your data </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n2.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">Web Develpment</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions. the
                right software infrastructure for your data </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n3.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">App Development</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions.the
                right software infrastructure for your data  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n4.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">Web Design</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions.the
                right software infrastructure for your data  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n5.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">Content Development</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions.the
                right software infrastructure for your data  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n6.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">Product Management</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions. the
                right software infrastructure for your data </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n7.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">Digital Marketing</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions.the
                right software infrastructure for your data  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n8.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">Graphic Design</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions.the
                right software infrastructure for your data  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  <div class="card">
            <img src="img/n9.jpg" class="card-img" alt="...">
            <div class="card-body">
            <a href="s3.php" style="text-decoration:none; color:black;"><h5 class="card-title">E-Publication</h5></a>
              <p >Before getting into the
                sophisticated algorithms and solutions (AI), it is often necessary build the
                right software infrastructure for your data. We can help to build tailor
                made infrastructure for your data ready to be used by the best solutions.the
                right software infrastructure for your data  </p>
            </div>
          </div>
        </div>
     </div>
   

</div>
</div>
</div> 
<br>
<!-- services end -->
<div class=" pgcc container-fuild   px-5 py-1 ">
       <div class="row  shadow-lg py-3 ">
     <div class="  col-lg-4 col-md-6 col-sm-12 Animationgif py-5 px-5" data-aos="zoom-in-left" style="border:4px solid white;">
     <h3 class="text-light">Passion</h3><p class="text-light">Our aim is to serve our clients, make innovative breakthrough and be the best in the industry. We understand the consumer insight and devote our time and efforts in providing you the best.</p></div>
    <div class="Animationgif1 py-5 px-5 col-lg-4 col-md-6 col-sm-12" style="border:4px solid white;" data-aos="zoom-in-left"> <h3 class="text-light">Going forward</h3><p class="text-light">We believe in learning from experience. In order to move in the forward direction, we explore, experiment and model impeccable solutions for our clients.p></div>
    <div class="Animationgif2 col-lg-4 col-md-6 col-sm-12 py-5 px-5" style="border:4px solid white;" data-aos="zoom-in-left">  <h3 class="text-light">Constant growth</h3><p class="text-light">We are constantly looking for opportunities to work on ourselves and improve efficiency. We listen to our clients and welcome constructive criticism with a positive approach.</p></div>
</div>
</div> 

<!-- hiring start -->
 <div class="p7  ">
 <div class=" pgc container-fuild   px-5 py-1 ">
       <div class="row  shadow-lg py-3 ">
<!-- <div class="container-fuild p-1">
<div class="row row-col-1 row-col-2"> -->
    <div class="col-lg-6 col-md-12 col-sm-12 shadow-lg text-info"  data-aos="fade-up"
          data-aos-duration="3000">
      <h2>WHO ARE WE?</h2>
      <P>AI came into inception 2 Year ago:<br>
      &nbsp Software and Application Development Company.<br>
      Have a Team of 50+ employee.</p>
<h6>
  Deals in:-</h6>
  <ol type="style">
  <li >Software Development</li>
  <li>App Development</li>
  <li>Web Development</li>
  <li>LMS Development</li>
  <li>ERP Developement</li>
  <li>Graphics Design, 3D Rendering</li>
  <li>Digital Marketing</li>
  </ol>

    </div>
    <div class="col-lg-6 col-md-12 col-sm-12"></div>
</div>
  </div>
</div>
<div class="p8">
<div class=" pgcg container-fuild   px-5 py-1 ">
       <div class="row  shadow-lg py-3" data-aos="zoom-in-up ">
  <!-- <div class="container">
    <div class="row px-5 py-5" data-aos="zoom-in-up"> -->
      <h1>We Value Work Ethic & Enivronment as it helps in  creating a <center>Creative Think tank:</center></h1>
      <div class="col-lg-4 col-md-6 col-sm-12 pt-3">
<img src="img/cs.gif" style="border-radius:50px;width:70%;padding:2px; height:180px;">
<br>
<p>15 &nbsp;CLIENTS SERVED</P>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 pt-3">
      <img src="img/w2.gif"style="border-radius:50px; width:70%;padding:2px; height:180px;">
      <P>70&nbsp; NO. OF PROJECTS</P>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12  pt-3">
      <img src="img/code.gif" style="border-radius:50px;width:70%;padding:2px; height:180px;"><br>
      <P>156840 &nbsp; LINES OF CODE</P>
      </div>
    </div>
  </div>
</div>
</div> 

 <!-- </div></div></div> -->


<!-- footer start -->
<?php include 'footer.php'; ?>
<!-- <script src="script.js"></script> -->
</body>
   

</html>