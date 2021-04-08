<?php
include './nedmin/connect.php';

?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Ceevee - Free Responsive HTML5/CSS3 Template</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

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
            <h1 class="responsive-headline">Ben Oğuzhan Solmaz.</h1>
            <h3>Merhaba ben Oğuzhan Solmaz. <span>İnönü Üniversitesinde birinci sınıf</span>, <span>Bilgisayar Mühendisliği</span> öğrencisiyim. 
             
            Daha fazlası için <a class="smoothscroll" href="#about">Hakkımda</a>.</h3>
            <hr />
            <ul class="social">
               <li><a href="https://github.com/oguzhan-solmaz"><img src="./images/g.png" style="width: 40px;" alt="github"></a></li>
               <li><a href="https://twitter.com/oguzhansolmaz20"><img src="./images/t.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="./images/y.png" style="width: 40px;"></a></li>
               <li><a href="https://www.instagram.com/oguz_solmaz/?hl=tr"><img src="./images/i.png" style="width: 40px;"></a></li>
               <li><a href="https://tr-tr.facebook.com/oguzhan.solmaz.353"><img src="./images/f.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="./images/tw.png" style="width: 40px;"></a></li>
               
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

            <img class="profile-pic"  src="images/inonu1.jpg "style="width:150px;height: 200px"  alt="" style />

         </div>

         <div class="nine columns main-col">

            <h2>HAKKIMDA</h2>

            <p>Merhaba ben Oğuzhan Solmaz 20 yaşındayım. İnönü Üniversitesi Bilgisayar Mühendisliği birinci sınıf öğrencisiyim. Boş zamanlarımı kitap okuyarak, film izleyerek veya oyun oynayarak değerlendiriyorum. Yaptığım kodlamalardan bazılarını githuba ekliyorum. Github adresimi aşağıdan bulabilirsin.
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>İletişim Detayları</h2>
                  <p class="address">
						   
						   <span>Cengiz Topel Caddesi, Malatya</span><br>
                     <a href="tel:+90-531-300-0544">531 300 05 44</a>
                     <a href="mailto:oguzhan_solmazz@hotmail.com">oguzhan_solmazz@hotmail.com</a>
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
            <h1><span>Eğitim</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Lise</h3>
                  <p class="info">Cumhuriyet Anadolu Lisesi <span>&bull;</span> <em class="date"></em></p>

                  <p>
                     https://malatyacal.meb.k12.tr
                  </p>

               </div>

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3>Üniversite</h3>
                  <p class="info">İnönü Üniversitesi <span>&bull;</span> <em class="date"></em></p>

                  <p>
                  İnönü Üniversitesi birinci sınıf Bilgisayar Mühendisliği öğrencisiyim.
                  </p>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Yetenekler</span></h1>
         </div>

         <div class="nine columns main-col">

            

				<div class="bars">

				   <ul class="skills">
					   <li><span class="bar-expand photoshop"></span><em>CSS</em></li>
                  <li><span class="bar-expand illustrator"></span><em>Java</em></li>
						<li><span class="bar-expand wordpress"></span><em>Html</em></li>
						<li><span class="bar-expand css"></span><em>C</em></li>
						<li><span class="bar-expand html5"></span><em>Problem Çözme</em></li>
                  <li><span class="bar-expand jquery"></span><em>Pyhton</em></li>
					</ul>

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
                        <img alt="" src="images/portfolio/coffee.jpg">
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
                        <img alt="" src="images/portfolio/console.jpg">
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
                        <img alt="" src="images/portfolio/judah.jpg">
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
                        <img alt="" src="images/portfolio/into-the-light.jpg">
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
                        <img alt="" src="images/portfolio/farmerboy.jpg">
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
                        <img alt="" src="images/portfolio/girl.jpg">
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
                        <img alt="" src="images/portfolio/origami.jpg">
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
                        <img alt="" src="images/portfolio/retrocam.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>Retrocam</h5>
                              <p>Web Development</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div>  <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-coffee.jpg" alt="" />

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

		      <img class="scale-with-grid" src="images/portfolio/modals/m-console.jpg" alt="" />

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

		      <img class="scale-with-grid" src="images/portfolio/modals/m-judah.jpg" alt="" />

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

		      <img class="scale-with-grid" src="images/portfolio/modals/m-intothelight.jpg" alt="" />

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

		      <img class="scale-with-grid" src="images/portfolio/modals/m-farmerboy.jpg" alt="" />

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

		      <img class="scale-with-grid" src="images/portfolio/modals/m-girl.jpg" alt="" />

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

		      <img class="scale-with-grid" src="images/portfolio/modals/m-origami.jpg" alt="" />

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

		      <img class="scale-with-grid" src="images/portfolio/modals/m-retrocam.jpg" alt="" />

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
                           <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
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

       </div>  <!-- text-container ends -->

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
                        <img alt="" src="images/loader.gif">
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

					   <h4>İletişim Bilgileri</h4>
					   <p class="address">
						  
						   
						   Cengiz Topel Caddesi,Malatya<br>
						   <a href="tel:+90-531-300-0544">GSM:531 300 05 44</a>
                     <a href="mailto:oguzhan_solmazz@hotmail.com">oguzhan_solmazz@hotmail.com</a>
                     
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
               <li><a href="https://github.com/oguzhan-solmaz"><img src="./images/g.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="./images/t.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="./images/y.png" style="width: 40px;"></a></li>
               <li><a href="https://www.instagram.com/oguz_solmaz/?hl=tr"><img src="./images/i.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="./images/f.png" style="width: 40px;"></a></li>
               <li><a href="#"><img src="./images/tw.png" style="width: 40px;"></a></li>
               
            </ul>

            <ul class="copyright">
               <li>&copy; 2014 CeeVee</li>
               <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></li>
               <li>Sponsored by <a rel="nofollow" href="http://www.a2hosting.com/?utm___source=styleshoutdemo&utm_medium=__cpm&utm_content=&utm_campaign=">A2Hosting</a></li>
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>