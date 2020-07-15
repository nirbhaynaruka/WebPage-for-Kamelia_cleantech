<?php include("common.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>GET READY FOR 2020 | Kamelia Cleantech</title>
<!-- mobile responsive meta -->
<?php include('includes/head.php');?>
</head>
<body class="_active-preloader-ovh">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVPMQ3J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="preloader">
  <div class="spinner"></div>
</div>
<div class="page-wrapper">
  <?php include('includes/header.php');?>
  <!-- /.header -->
   <?php $typedetails = $Common->select_data_by_field_active('cms','3'); ?>
  <div class="gt_banner default_width">
    <div class="swiper-container" id="swiper-container">
      <ul class="swiper-wrapper">
        <li class="swiper-slide"> <img src="uploads/company/thumb/<?php echo $typedetails['Image'];?>"alt="Comply with Kamelia Scrubbers, Save the Environment">
          <div class="caption">
            <h1><?php echo $typedetails['Heading'];?></h1>
        <a href="contact.php#inquiryform" class=" about-style-three about-content about-btn inner-banner-btn-design hvr-sweep-to-right" >Comply Now</a> 
          </div>
        </li>
      </ul>
    </div>
  </div>
   
  
  <!-- /.inner-banner -->
  
  <section class="about-style-three" style="padding: 0 0 2% 0;">
    <div class="container">
      <div class="row"> 
        
        <!-- /.col-md-6 -->
        
        <div class="col-md-9 col-sm-9 col-xs-12 sec-pad">
          <div class="about-content">
            <?php echo $typedetails['Detail'];?>
            <a href="contact.php#inquiryform" class="about-btn hvr-sweep-to-right">Talk to Our Scrubber Experts!</a> </div>
          
          <!-- /.about-content --> 
          
        </div>
        
        <!-- /.col-md-6 --> 
        
      </div>
     
      <!-- /.row --> 
      
    </div>
    
    <!-- /.container --> 
    
  </section>
  
  <!-- /.about-style-three --> 
  
  <!-- /.features-style-two --> 
  
  <!-- /.time-line --> 
  
  <!-- /.service-style-four --> 
  
  <!-- /.testimonials-style-one -->
  
  <section class="contact-info-style-one" style="display:none" >
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="title">
            <h3>Get in <span>Touch</span></h3>
            <p>Kamelia Cleantech offers bespoke intelligent scrubbers engineered in Finland by a team of highly skilled and experienced professionals.</p>
          </div>
          <!-- /.title --> 
          
        </div>
        <!-- /.col-md-7 -->
        
        <div class="col-md-7">
          <div class="contact-infos" >
            <div class="single-contact-infos" style="display:none">
              <div class="icon-box"> <i class="industrio-icon-phone-call"></i> </div>
              <!-- /.icon-box -->
              
              <div class="text-box">
                <h3>Call us on</h3>
                <p><a href="tel:+971 50 392 7889" style="color:#fff;">+971 50 392 7889</a></p>
              </div>
              <!-- /.text-box --> 
              
            </div>
            <!-- /.single-contact-infos -->
            
            <div class="single-contact-infos">
              <div class="icon-box"> <i class="industrio-icon-envelope"></i> </div>
              <!-- /.icon-box -->
              
              <div class="text-box">
                <h3> <a href="mailto:info@kameliatech.com?subject=Request%20for%20Scrubber%20Quote" style="color:#fff!important"> Email us </a> </h3>
              </div>
              <!-- /.text-box --> 
              
            </div>
            <!-- /.single-contact-infos --> 
            
          </div>
          <!-- /.contact-infos --> 
          
        </div>
        <!-- /.col-md-5 --> 
        
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.contianer --> 
    
  </section>
  
  <!-- /.contact-info-style-one --> 
  
</div>

<!-- /.page-wrapper -->

<?php include('includes/footer.php');?>
<?php include ('includes/js.php');?>
</body>
</html>