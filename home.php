<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <link rel="stylesheet" href="/myproject.css"> 
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Home</title>
</head>
<body>
<header class="header"> 
  
  <a href="#" class="logo"><strong>MEDICAL</strong>EXPERT </a> 

  <nav class="navbar"> 
      <a href="#home">home</a> 
      <a href="#about">about</a> 
      <a href="#services">services</a> 
      <a href="#appointment">appointment</a> 
      <a href="#contactus">Contact Us</a> 
      <a href="#doctors">Myteam</a> 
      <a href="#faqs">FAQ's</a> 

       
  </nav> 

  <div id="menu-btn" class="fas fa-bars"></div> 

</header> 

<!-- header section ends --> 

<!-- home section starts  --> 

<section class="home" id="home"> 

  <div class="image"> 
      <img src="/image/5063406.jpg" alt=""> 
  </div> 

  <div class="content"> 
      <h3>we take care of your healthy life</h3> 
      <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p> 
      <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a> 
  </div> 

</section> 

<!-- home section ends --> 

<!-- icons section starts  --> 

<section class="icons-container"> 

  

  <div class="icons"> 
      <i class="fas fa-users"></i> 
      <h3>1030+</h3> 
      <p>satisfied patients</p> 
  </div> 

  

  <div class="icons"> 
      <i class="fas fa-hospital"></i> 
      <h3>70+</h3> 
      <p>available hospitals</p> 
  </div> 

</section> 

<!-- icons section ends --> 

<!-- about section starts  --> 

<section class="about" id="about"> 

  <h1 class="heading"> <span>about</span> us </h1> 

  <div class="row"> 

      <div class="image"> 
          <img src="/image/5219863-removebg-preview.png" alt=""> 
      </div> 

      <div class="content"> 
          <h3>take the world's best quality treatment</h3> 
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p> 
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p> 
          <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> 
      </div> 

  </div> 

</section> 

<!-- about section ends --> 

<!-- services section starts  --> 

<section class="services" id="services"> 

  <h1 class="heading"> our <span>services</span> </h1> 

  <div class="box-container"> 

      
      <div class="box"> 
          <i class="fas fa-ambulance"></i> 
          <h3>24/7 ambulance</h3> 
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> 
          <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> 
      </div> 

      
      

      <div class="box"> 
          <i class="fas fa-heartbeat"></i> 
          <h3>total care</h3> 
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> 
          <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> 
      </div> 

  </div> 

</section> 

<!-- services section ends --> 

<!-- appointmenting section starts   --> 

<section class="appointment" id="appointment"> 

  <h1 class="heading"> <span>appointment</span> now </h1>     

  <div class="row"> 

      <div class="image"> 
          <img src="/image/3896559-removebg-preview.png" alt=""> 
      </div> 

      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
      <?php 
          if(isset($message)) { 
              foreach($message as $message) { 
              echo'<p class ="message">'.$message.'</p>'; 
          } 
          } 
      ?> 

          <h3>make appointment</h3> 
          <input type="text"name="name" placeholder="your name" class="box"> 
          <input type="number"name="number" placeholder="your number" class="box"> 
          <input type="email"name="email" placeholder="your email" class="box"> 
          <input type="date"name="date" class="box"> 
          <input type="submit" name="submit" value="appointment now" class="btn"> 
      </form> 

  </div> 

</section> 
<section class="about" id="contactus"> 

  <h1 class="heading"> <span>Contact</span> US </h1> 

  <div class="row"> 
      <div class="content"> 
          <h3>Contact US</h3> 
          <p>Get In touch We would love to hear you</p>
          <p>Check out Some FAqs for answers to some to the most questions</p>
          <p> <i class="fas fa-phone col"></i> +8801782546978  </p>
         <p> <i class="fas fa-envelope col "></i>saivarun.puri@gmail.com </p>


      </div> 

      <div class="image"> 
          <img src="/image/5114855.jpg" alt=""> 
      </div>

  </div> 

</section>

<!-- appointmenting section ends --> 
<section class="doctors" id="doctors">

<h1 class="heading"> our <span>Team</span> </h1>

<div class="box-container">

 <div class="box">
     <img src="/image/ramreddy.jpg" alt="">
     <h3>Subba Ram Reddy</h3>
     <span>1608-21-733-134</span>
     <div class="share">
     <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
         
     </div>
 </div>

 <div class="box">
     <img src="/image/varun.jpg" alt="">
     <h3>Puri Sai varun</h3>
     <span>1608-21-733-140</span>
     <div class="share">
     <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
     </div>
 </div>
 <div class="box">
     <img src="/image/vasanth-removebg.png" alt="">
     <h3>Dandempelly Vasanth</h3>
     <span>1608-21-733-144</span>
     <div class="share">
     <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
     </div>
 </div>

</div>

</section>


<!-- footer section starts  --> 

<section class="footer"> 

  <div class="box-container"> 

      <div class="box"> 
          <h3>quick links</h3> 
          <a href="#home"> <i class="fas fa-chevron-right"></i> home </a> 
          <a href="#about"> <i class="fas fa-chevron-right"></i> about </a> 
          <a href="#services"> <i class="fas fa-chevron-right"></i> services </a> 
          <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a> 
      </div> 

      <div class="box"> 
          <h3>our services</h3> 
          <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a> 
          <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a> 
          <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a> 
      </div> 

      <div class="box"> 
          <h3>appointment info</h3> 
          <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a> 
          <a href="#"> <i class="fas fa-envelope"></i>saivarun.puri@gmail.com </a> 
          <a href="#"> <i class="fas fa-map-marker-alt"></i> saidabad, hyderbad </a> 
      </div> 

      <div class="box"> 
          <h3>follow us</h3> 
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a> 
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a> 
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a> 
           
      </div> 

  </div> 



  <div class="credit"> created by <span>VASANTH and team</span> | all rights reserved </div> 

</section> 

<!-- footer section ends --> 
<section id="faqs">
<div class="wrapper">
      <h1 class="heading">Frequently Asked Questions</h1>

      <div class="faq">
        <button class="accordion">
          What is Krushi?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Krushi is a Public Charitable Trust designed to carry out farming on
            extensive scale Natural & Sustainable methods.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does it work?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          What are the major challanges of current agriculture?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does the Krushi address the above challanges?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How can I be a part of Krushi?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does it work?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>
    </div>
</section>



<!-- js file link  --> 
<script src="/myproject.js"></script> 

</body>

</html>