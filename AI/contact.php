
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link rel="stylesheet" href=
      "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
          <title>Responsive website</title>
</head>
<body>
  <?php include 'header.php'; ?>
<br><br><br><br>
<!-- contact start -->
<div class="p5">
    <div class="container-fuild   px-5 py-1 ">
       <div class="row  shadow-lg py-3">
        <h1 class="text-center text-dark pb-1 pt-1" >Contact information</h1>
        <div class="col-lg-6 col-md-12 col-sm-12  shadow-lg px-4 py-4" style="text-align:center;" >
            <br>
            <div class="Contact-info">
              <br>
              <h4 class="c text-dark"><strong>AI TECHNOLOGY  SERVICES</strong></h4>
              <h5 class="c dark"><i class="fas fa-phone " style="padding:5px;"></i>+91 7827745054</h5>
              <h5 class="c dark"> <i class="fas fa-envelope"style="padding:5px;"></i>aitechnologyservices1@gmail.com</h5>
              <h5 class="c text-dark"> <i class="fas fa-map-marker-alt" style="padding:5px;"></i>  H-73 SUIT NO-105 SECTOR-63<br> 
                GAUTAM BUDDHA NAGAR NOIDA, <br>201301
                (UP) INDIA. </h5><br>
</div>
</div>
             
                <div class="col-lg-6 col-md-12 col-sm-12  shadow-lg px-1 py-1" style="text-align:center;" >
            
            <img src="img/ct2.gif" style="height:300px;width:80%;boder-radius:15px; margin-top:10px;margin-bottom:10px;"></div> 

                <!-- </div> -->
                  
                          
            <div class="col-lg-6 col-md-12 col-sm-12  px-2 py-2" style="text-align:center;">
<img src="img/ct3.webp" style="height:280px;width:90%;boder-radius:15px; margin-top:10px;margin-bottom:10px;">
</div>
<div class=" col-lg-6 col-md-12 col-sm-12 Map w-100%">
                  
                      
                          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3502.290855333704!2d77.37853307470778!3d28.621043684603737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20H-73%20SUIT%20NO-105%20SECTOR-63%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20GAUTAM%20BUDDHA%20NAGAR%20NOIDA%2C%20201301%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20(UP)%20INDIA.%20!5e0!3m2!1sen!2sin!4v1706088672432!5m2!1sen!2sin" width="95%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> 
                          </div>
                        </div>
                          </div>

<!-- contact start -->
<div class="p5">
    <div class="container-fuild   px-5 py-1 ">
       <div class="row ">
        <h1 class="text-center text-dark pb-1 pt-1" >Contact Us</h1>
        <!-- <div class="col-lg-6 col-md-12 col-sm-12"> -->
        <!-- <div data-aos="flip-right"> -->
        <!-- <div class="col-lg-6 col-md-12 col-sm-12   px-1 py-1" style="text-align:center;" >
            <br>
            <img src="img/ct2.gif" style="height:400px;width:100%;boder-radius:15px; margin-top:10px;margin-bottom:10px;"></div>  -->
            <div class="col-lg-12 col-md-12 col-sm-12 shadow-lg px-4 py-2" style="text-align:center;">
            <form action="" method="post" class="contact-form" id="frmContactus">
              <br>
              <h4 class="text-dark"><Strong>Send us a Message</Strong></h4>
              <br>
                <div class="input-box">
                    <div class="Form-group ">
                        <input type="text" placeholder="Your Name" id="name" name="name" autocomplete="off"  style="width:80%;border:none; padding:8px;" onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)" required>
                    </div>
                    <br>
                    <div class="Form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" autocomplete="off" style="width:80%;border:none;padding:8px; "required>
                    </div>
                    <br>
                    <div class="Form-group">
                        <input type="text" name="contact"  id="contact" placeholder="Your Contact No." autocomplete="off" style="width:80%;border:none;padding:8px;" autocomplete="off"  onkeypress="return validateNumber(event)" maxlength="10" minlength="10" required>
                    </div>
                    <br>
                    <div class="Form-group">
                        <textarea name="message" placeholder="Your query...." id="message"  style="width:80%; height:150px;border:none;padding:8px;" required></textarea>
                    </div>
                    <br>
                    <input type="submit"  class="btn btn-black" id="contactFormSubmit" name="submit" style=" border-radius:10px; width:90px;padding:5px; border:2px soild ; background:white;text-align:center;">
                    <div class="stmbtn" id="popup">
                      <img src="img/tick.png">
                      <h2>Thank You!</h2>
                      <p>Your details has been successfully submitted. Thanks!</p>
                      <button type="button" onclick="closePopup()">OK</button>
                    </div>
                </div>
            </form><br> <br>
          </div>
          
</div></div>
</div>

  </div>
                          </div>
  
<!-- contact end -->
<!-- footer start -->
<?php include 'footer.php'; ?>
<script>
    function validateNumber(e) {
        const pattern = /^[0-9]$/;
        return pattern.test(e.key);
    }
   
</script>
<script>
            jQuery(".contact-form").on("submit", function (e) {
              jQuery("#contactFormSubmit").html("Please wait");
              jQuery("#contactFormSubmit").attr("disabled", true);
              jQuery.ajax({
                url: "submit.php",
                type: "post",
                data: jQuery(".contact-form").serialize(),
                success: function (result) {
                
                  // jQuery("#msg").html(result);
                  jQuery("#contactFormSubmit").html("SUBMIT");
                  jQuery("#contactFormSubmit").attr("disabled", false);
                  jQuery(".contact-form")[0].reset();
            
                  openPopup();
                },
              });
              e.preventDefault();
            });
</script>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
  </body>
</html>