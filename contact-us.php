<?php
  $title = 'Contact Us || Xyz';
  include 'header.php';
?>

<!--=================================
slider- -->

  <section id="animated-slider" class="carousel slide" data-ride="carousel"  style="height: 400px">
     
        <!-- Carousel inner -->
        <div class="carousel-inner">
          <!--/ Carousel item end -->
          <div class="item active">
            <img class="img-responsive" src="images/slider/slider-10.jpg" alt="slider">  
            <div class="slider-content">
              <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                 <div class="slider-1">
                    <!--<span class="animated7">Big Dreams, Big ideas </span>-->
                    <h1 class="animated8 text-white">Contact Us</h1>
                    
                 </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
  </section>
 
<!--=================================
slider -->

<!--=================================
 contact-->

<section class="contact-5 bg-7 bg-opacity-black-70 page-section-ptb">
   <div class="container">
     <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-4">
         <div class="get-in-touch">
           <h2 class="text-white">Get in Touch</h2>
           
         </div>
         <div class="contact-add pt-55">
           <i class="fa fa-map-marker"></i>
           <p class="text-white">xxxxxxxxxxxxxxxxxxxxxxx</p>
         </div>
         <div class="contact-add">
           <i class="fa fa-phone"></i>
           <p class="text-white"><a href="tel: +x-xxx-xxx-xxxx" style="color: #fff;">+x-xxx-xxx-xxxx</a></p>
         </div>
         <div class="contact-add">
           <i class="fa fa-envelope-o"></i>
           <p class="text-white">contact@xyz.com</p>
         </div>
       </div>
       <div class="col-lg-8 col-md-8 col-sm-8">
        <h2 class="text-white">Contact Us</h2>
           
           <div id="formmessage">Success/Error Message Goes Here</div>
             <form class="pt-55 form-horizontal" id="contactform" role="form" method="post" action="http://themes.potenzaglobalsolutions.com/html/thecorps/php/contact-form.php">
             <div class="contact-form">
               <div class="section-field">
                <i class="fa fa-user"></i>
                <input id="name" type="text" placeholder="Name*"  name="name">
               </div> 
               <div class="section-field">
                  <i class="fa fa-envelope-o"></i>
                  <input type="email" placeholder="Email*" name="email">
                </div>
               <div class="section-field">
                  <i class="fa fa-phone"></i>
                  <input type="text" placeholder="Phone*" name="phone">
                </div>
               <div class="section-field textarea mb-20">
                 <i class="fa fa-pencil"></i>
                 <textarea class="input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                </div>
                <input type="hidden" name="action" value="sendEmail"/>
                  <button id="submit" name="submit" type="submit" value="Send" class="button mt-15"><span> Send your message </span> <i class="fa fa-paper-plane"></i></button>
               </div> 
             </form>
            <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader-white.gif" alt=""></div>
       </div>
     </div>
   </div>
</section>

<!--=================================
 contact-->

 <?php
    include 'footer.php';
 ?>