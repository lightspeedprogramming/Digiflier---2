<?php
  $title = 'Contact Us || Xyz';
  include 'header.php';
?>


<section class="inner-intro bg-2-my ">
  <div class="container">
     <div class="row text-center intro-title">
            <h1 class="text-blue">Contact Us</h1>
            
            <ul class="page-breadcrumb">
              <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
              
              <li><span>Contact Us</span> </li>
           </ul>
     </div>
  </div>
</section>

<!--=================================
 contact-->

<section class="contact-5-my page-section-ptb ">
   <div class="container">
     <div class="row">
                     <div class="col-lg-12 col-md-12">
                       <div class="section-title-2 text-center" style="margin-bottom: 10px">
                        <h2 class="text-black"><strong>Get In Touch</strong></h2>
                        <div class="title-line"></div>
                        </div>
                     </div> 
          </div>

     <div class="row">
       <!--<div class="col-lg-6 col-md-6 col-sm-12 text-center">
         <div class="get-in-touch">
           <h2 class="text-black"><strong>Get in Touch</strong></h2>
           
         </div>
         <div class="contact-add pt-30 text-center">
           <i class="fa fa-map-marker"></i>
           <p class="text-black"><a href="#">xxxxxxx</a></p>
         </div>
         <div class="contact-add">
           <i class="fa fa-phone"></i>
           <p><a href="tel: +x-xxx-xxx-xxxx" style="color: #323232;">+x-xxx-xxx-xxxx</a></p>
         </div>
         <div class="contact-add">
           <i class="fa fa-envelope-o"></i>
           <p class="text-black">contact@xyz.com</p>
         </div>
       </div>-->

       <div class="col-lg-5 col-md-5 mt-70">

           <!-- <div class="contact-box-my text-left clearfix text-center">
              <div class="info ">
                <i class="fa fa-map-marker"></i>
                <h4><strong>Address</strong></h4>
                <p>xxxxxxxxxxxxxxxxx </p>
              </div>
           </div>
             <div class="contact-box-my mb-20 text-left clearfix text-center">
                <div class="info mt-30">
                <i class="fa fa-phone"></i>
                <h4><strong>Phone</strong></h4>
                <p><a href="tel: +x-xxx-xxx-xxxx" style="color: #323232;">+x-xxx-xxx-xxxx</a></p>
              </div>
           </div> -->
           <div class="contact-box-my text-left clearfix text-center">
              <!--<i class="fa fa-envelope-o"></i>-->
              <div class="info">
                <i class="fa fa-envelope"></i>
                <h4><strong>Email</strong></h4>
                <p class="text-black"><a href="mailto: contact@xyz.com" style="color: #323232;font-size: 20px">contact@xyz.com</a></p>
              </div>
           </div>
       </div>
       
       <div class="col-lg-7 col-md-7 mt-70">
                   
                   <!-- <div class="row">
                     <div class="col-lg-12 col-md-12">
                       <div class="section-title-2 text-center" style="margin-bottom: 10px">
                        <h2 class="text-black"><strong>Contact Us</strong></h2>
                        <div class="title-line"></div>
                        </div>
                     </div> 
                    </div> -->
    
               <div id="formmessage">Success/Error Message Goes Here</div>
                 <!-- <form class="form-verticle" id="contactform" role="form" method="post" action="mailsend.php">
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
                     <textarea class="input-message" placeholder="Message*" rows="7" name="message"></textarea>
                    </div>
                    <input type="hidden" name="action" value="sendEmail"/>
                      <button id="submit" name="submit" type="submit" value="Send" class="button mt-15"><span> Send your message </span> <i class="fa fa-paper-plane"></i></button>
                   </div> 
                 </form> -->

                 <form id="contactform-my" role="form" method="post" action="mailsend.php">
                  <!-- <div class="form-row contact-5">
                    <div class="form-group col-md-6 col-sm-6 contact-form">
                      
                      <input type="text" class="form-control" id="name" placeholder="Name *">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 contact-form">
                      
                      <input type="text" class="form-control" id="number" placeholder="Phone *">
                    </div>

                    <div class="form-group col-md-12 contact-form">
                      
                      <input type="email" class="form-control" id="email" placeholder="Email *">
                    </div>

                    <div class="form-group col-md-12 contact-form">
                      <textarea class="form-control" placeholder="Address*" rows="7" name="address"></textarea>                      
                    </div>

                    <div class="form-group col-md-12 contact-form">
                      <textarea class="form-control" placeholder="Message*" rows="7" name="message"></textarea>                      
                    </div>

                    <div class="col-md-12 text-center">
                      <button id="submit" name="submit" type="submit" value="Send" class="button mt-15"><span> Send your message </span> <i class="fa fa-paper-plane"></i></button>
                    </div>
                  </div> -->
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control form-control-my" placeholder="Name *">
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="text" name="number" class="form-control-my form-control" placeholder="Phone *">
                    </div>

                    <div class="col-md-12 form-group">
                      <input type="email" name="email" class="form-control-my form-control" placeholder="Email *">
                    </div>
                    <div class="col-md-12 form-group">
                      <textarea name="address" class="form-control-my form-control" placeholder="Address *" rows="7"></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                      <textarea name="message" class="form-control-my form-control" placeholder="Message *" rows="7"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                      <button id="submit" name="submit" type="submit" value="Send" class="button mt-15"><span> Send your message </span> <i class="fa fa-paper-plane"></i></button>
                    </div>
                  </div>
                  
                </form>

                <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader-white.gif" alt=""></div>
           </div>

       <!--<div class="col-lg-8 col-md-8 col-sm-8">
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
       </div>-->
     </div>
   </div>
</section>

<!--=================================
 contact-->

 <?php
    include 'footer.php';
 ?>