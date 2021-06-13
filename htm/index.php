<?php
include './nedmin/connect.php';
//fetch_skills
$fetch_skill = $db->prepare('SELECT * FROM skills WHERE skill_id=1');
$fetch_skill->execute();
$fetch_s = $fetch_skill->fetch(PDO::FETCH_ASSOC);

//fetch_info
$fetch_info = $db->prepare('SELECT * FROM education_info WHERE edu_id=1');
$fetch_info->execute();
$fetch_i = $fetch_info->fetch(PDO::FETCH_ASSOC);

//fetch_contact
$fetch_contact = $db->prepare('SELECT * FROM contact_info WHERE contact_id=1');
$fetch_contact->execute();
$fetch_c = $fetch_contact->fetch(PDO::FETCH_ASSOC);

//fetch_about
$fetch_about = $db->prepare('SELECT * FROM about_me WHERE about_id=1');
$fetch_about->execute();
$fetch_a = $fetch_about->fetch(PDO::FETCH_ASSOC);

//fetch_settings
$fetch_settings = $db->prepare('SELECT * FROM site_settings WHERE settings_id=1');
$fetch_settings->execute();
$fetch_se = $fetch_settings->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title><?php echo $fetch_se['site_title']; ?></title>
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="assets/css/default.css">
   <link rel="stylesheet" href="assets/css/layout.css">
   <link rel="stylesheet" href="assets/css/media-queries.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">

   <!-- Script
   ================================================== -->
   <script src="assets/js/modernizr.js"></script>



   <style>
      * {
         box-sizing: border-box
      }

      .container {
         width: 100%;
         background-color: white;

      }

      .container h4 {
         font-size: 20px;
         text-transform: uppercase;
         margin-top: 15px;
      }

      .skills {
         text-align: center;
         padding-top: 0px;
         padding-bottom: 0px;
         color: white;
      }

      .first {
         width: <?php echo $fetch_s['first_counter']; ?>;
         background-color: #2196F3;
      }

      .second {
         width: <?php echo $fetch_s['second_counter']; ?>;
         background-color: #2196F3;
      }

      .third {
         width: <?php echo $fetch_s['third_counter']; ?>;
         background-color: #2196F3;
      }

      .forth {
         width: <?php echo $fetch_s['forth_counter']; ?>;
         background-color: #2196F3;
      }

      .fifth {
         width: <?php echo $fetch_s['fifth_counter']; ?>;
         background-color: #2196F3;
      }

      .sixth {
         width: <?php echo $fetch_s['sixth_counter']; ?>;
         background-color: #2196F3;
      }
   </style>

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
         <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">ANA SAYFA</a></li>
            <li><a class="smoothscroll" href="#about">HAKKIMDA</a></li>
            <li><a class="smoothscroll" href="#resume">ÖZ GEÇMİŞ</a></li>


            <li><a class="smoothscroll" href="#contact">İLETİŞİM</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline"><?php echo $fetch_se['title']; ?></h1>
            <h3><?php echo $fetch_se['subtitle']; ?>

               Daha fazlası için <a class="smoothscroll" href="#about">Hakkımda</a>.</h3>
            <hr />
            <ul class="social">
               <li><a href="https://github.com/<?php echo $fetch_a['github']; ?>"><img src="assets/images/g.png" style="width: 40px;" alt="github"></a></li>
               <li><a href="https://twitter.com/<?php echo $fetch_a['twitter']; ?>"><img src="assets/images/t.png" style="width: 40px;"></a></li>
               <li><a href="https://www.youtube.com/channel/<?php echo $fetch_a['youtube']; ?>"><img src="assets/images/y.png" style="width: 40px;"></a></li>
               <li><a href="https://www.instagram.com/<?php echo $fetch_a['instagram']; ?>/?hl=tr"><img src="assets/images/i.png" style="width: 40px;"></a></li>
               <li><a href="https://tr-tr.facebook.com/<?php echo $fetch_a['facebook']; ?>"><img src="assets/images/f.png" style="width: 40px;"></a></li>
               <li><a href="https://www.twitch.tv/<?php echo $fetch_a['twitch']; ?>"><img src="assets/images/tw.png" style="width: 40px;"></a></li>

            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic" src="assets/images/inonu1.jpg " style="width:150px;height: 200px" alt="" style />

         </div>

         <div class="nine columns main-col">

            <h2><?php echo $fetch_a['about_title']; ?></h2>

            <p><?php echo $fetch_a['biyografi']; ?>
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>İletişim Detayları</h2>
                  <p class="address">

                     <span><?php echo $fetch_c['adress']; ?></span><br>
                     <a href="tel:<?php echo $fetch_c['gsm']; ?>"><?php echo $fetch_c['gsm']; ?></a>
                     <a href="mailto:<?php echo $fetch_c['email']; ?>"><?php echo $fetch_c['email']; ?></a>
                  </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-download"></i>Bilgileri İndir</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span><?php echo $fetch_i['edu_title']; ?></span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Lise</h3>
                  <p class="info"><?php echo $fetch_i['high_school']; ?> <span>&bull;</span> <em class="date"></em></p>



               </div>

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3>Üniversite</h3>
                  <p class="info"><?php echo $fetch_i['universty']; ?> <span>&bull;</span> <em class="date"></em></p>



               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->





      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span><?php echo $fetch_s['title']; ?></span></h1>
         </div>
         <div class="nine columns main-col">










            <div class="container">
               <h4><?php echo $fetch_s['first_skill']; ?></h4>

               <div class="skills first"><?php echo $fetch_s['first_counter']; ?></div>
            </div>
            <div class="container">
               <h4><?php echo $fetch_s['second_skill']; ?></h4>

               <div class="skills second"><?php echo $fetch_s['second_counter']; ?></div>
            </div>

            <div class="container">
               <h4><?php echo $fetch_s['third_skill']; ?></h4>

               <div class="skills third"><?php echo $fetch_s['third_counter']; ?></div>
            </div>
            <div class="container">
               <h4><?php echo $fetch_s['forth_skill']; ?></h4>

               <div class="skills forth"><?php echo $fetch_s['forth_counter']; ?></div>
            </div>
            <div class="container">
               <h4><?php echo $fetch_s['fifth_skill']; ?></h4>

               <div class="skills fifth"><?php echo $fetch_s['fifth_counter']; ?></div>
            </div>
            <div class="container">
               <h4><?php echo $fetch_s['sixth_skill']; ?></h4>

               <div class="skills sixth"><?php echo $fetch_s['sixth_counter']; ?></div>
            </div>
         </div><!-- end skill-bars -->

      </div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="assets/images/portfolio/coffee.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Coffee</h5>
                              <p>Illustrration</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="assets/images/portfolio/console.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Console</h5>
                              <p>Web Development</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-03" title="">
                        <img alt="" src="assets/images/portfolio/judah.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Judah</h5>
                              <p>Webdesign</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-04" title="">
                        <img alt="" src="assets/images/portfolio/into-the-light.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Into The Light</h5>
                              <p>Photography</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-05" title="">
                        <img alt="" src="assets/images/portfolio/farmerboy.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Farmer Boy</h5>
                              <p>Branding</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-06" title="">
                        <img alt="" src="assets/images/portfolio/girl.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Girl</h5>
                              <p>Photography</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="assets/images/portfolio/origami.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Origami</h5>
                              <p>Illustrration</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-08" title="">
                        <img alt="" src="assets/images/portfolio/retrocam.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Retrocam</h5>
                              <p>Web Development</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div> <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="assets/images/portfolio/modals/m-coffee.jpg" alt="" />

            <div class="description-box">
               <h4>Coffee Cup</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-01 End -->

         <div id="modal-02" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="assets/images/portfolio/modals/m-console.jpg" alt="" />

            <div class="description-box">
               <h4>Console</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Web Development</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-02 End -->

         <div id="modal-03" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="assets/images/portfolio/modals/m-judah.jpg" alt="" />

            <div class="description-box">
               <h4>Judah</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-03 End -->

         <div id="modal-04" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="assets/images/portfolio/modals/m-intothelight.jpg" alt="" />

            <div class="description-box">
               <h4>Into the Light</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-04 End -->

         <div id="modal-05" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="assets/images/portfolio/modals/m-farmerboy.jpg" alt="" />

            <div class="description-box">
               <h4>Farmer Boy</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-05 End -->

         <div id="modal-06" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="assets/images/portfolio/modals/m-girl.jpg" alt="" />

            <div class="description-box">
               <h4>Girl</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-06 End -->

         <div id="modal-07" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="assets/images/portfolio/modals/m-origami.jpg" alt="" />

            <div class="description-box">
               <h4>Origami</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Illustration</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-07 End -->

         <div id="modal-08" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="assets/images/portfolio/modals/m-retrocam.jpg" alt="" />

            <div class="description-box">
               <h4>Retrocam</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Webdesign, Photography</span>
            </div>

            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
               <a class="popup-modal-dismiss">Close</a>
            </div>

         </div><!-- modal-01 End -->


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


   <!-- Call-To-Action Section
   ================================================== -->



   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>
                              "Küçük başlayın, büyük düşünün"

                           </p>
                           <cite>Steve Jobs</cite>

                        </blockquote>
                     </li> <!-- slide ends -->

                     <li>
                        <blockquote>
                           <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                              Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                              nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                           </p>
                           <cite>Mr. Adobe</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

      </div> <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Contact Section
   ================================================== -->
   <section id="contact">

      <div class="row section-head">

         <div class="two columns header-col">

            <h1><span>Get In Touch.</span></h1>

         </div>

         <div class="ten columns">

            <p class="lead">.

            </p>

         </div>

      </div>

      <div class="row">

         <div class="eight columns">

            <!-- form -->
            <form action="" method="post" id="contactForm" name="contactForm">
               <fieldset>

                  <div>
                     <label for="contactName">İsim <span class="required">*</span></label>
                     <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
                     <label for="contactEmail">Email <span class="required">*</span></label>
                     <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
                     <label for="contactSubject">Konu*</label>
                     <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Mesaj <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Gönder</button>
                     <span id="image-loader">
                        <img alt="" src="assets/images/loader.gif">
                     </span>
                  </div>

               </fieldset>
            </form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning"> Error boy</div>
            <!-- contact-success -->
            <div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

         </div>


         <aside class="four columns footer-widgets">

            <div class="widget widget_contact">

               <h4> <?php echo $fetch_c['content']; ?></h4>
               <p class="address">


                  <?php echo $fetch_c['adress']; ?><br>
                  <a href="tel:+90-531-300-0544"><?php echo $fetch_c['gsm']; ?></a>
                  <a href="mailto:<?php echo $fetch_c['email']; ?>"><?php echo $fetch_c['email']; ?></a>

               </p>

            </div>

            <div class="widget widget_tweets">



            </div>

         </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="https://github.com/oguzhan-solmaz"><img src="assets/images/g.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="assets/images/t.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="assets/images/y.png" style="width: 40px;"></a></li>
               <li><a href="https://www.instagram.com/oguz_solmaz/?hl=tr"><img src="assets/images/i.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="assets/images/f.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="assets/images/tw.png" style="width: 40px;"></a></li>

            </ul>

            <ul class="copyright">
               <li>&copy; 2021</li>
               <li> <?php echo $fetch_c['copyright']; ?> </li>

            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>
      window.jQuery || document.write('<script src="assets/assets/js/jquery-1.10.2.min.js"><\/script>')
   </script>
   <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>

   <script src="assets/js/jquery.flexslider.js"></script>
   <script src="assets/js/waypoints.js"></script>
   <script src="assets/js/jquery.fittext.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/init.js"></script>

</body>

</html>