<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("include/head.php") ?>
<body>
 
 <span id="nav-begins"></span><!-- place before navigation bar-->
    				<?php include("include/navbar.php") ?>
    
     <section class="slug parallax-slug-2" data-stellar-background-ratio="0">
    	<div class="overlay">
            <div class="container">
            	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="anim fadeInDown">Contact Us</h1>
                        <p class="anim fadeInDown" data-wow-delay=".32s">Drop us a message.</p>
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->
            </div>
        </div><!-- .overlay -->
    </section><!-- .slug -->
    
    
   	<section class="content-section">
        <div class="container">
        	<div class="row">
       			<div class="col-lg-12 anim fadeInDown" data-wow-delay="0.25s">
                    <p>
                        Our primary concern is dealing with our customers and making sure that they are satisfied. Any questions, 
                        comments, or concerns you may have are very important to us.
                    </p>
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
            <div class="row">
            	<div class="col-lg-12 anim fadeInDown" data-wow-delay="0.45s">
            		<div class="row">
            	<div class="col-lg-12 fadeInDown animated" data-wow-delay="0.45s" style="visibility: visible;-webkit-animation-delay: 0.45s; -moz-animation-delay: 0.45s; animation-delay: 0.45s;">
            		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0485256980996!2d101.57993851495537!3d3.0817229977558926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c5a80be90b1%3A0xf877a14712d31419!2sEmpire+Tower!5e0!3m2!1szh-CN!2s!4v1463091948668" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="shadow-lg"></div>
                </div><!-- .col-lg-12 -->
            </div>
                    <div class="shadow-lg"></div>
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
    	</div>
    </section><!-- .content-section -->
    
    <section class="content-section form contact style-2">
    	<div class="container">
        	<div class="row">
            
                <form action="form/email.php" method="post" target="" name="contact">
                    <div class="col-md-8 anim fadeInLeft">
                    
                        <span class="input-group tight">
                            <i class="fa fa-user"></i>
                            <input type="text" name="contactName" id="contactName" class="lg" placeholder="Name" required/>
                        </span><!-- .input-group -->
                        
                        <span class="input-group tight second">
                            <i class="fa fa-envelope"></i>
                            <input type="email" name="contactEmail" id="contactAddress" class="lg" placeholder="Email Address" required/>
                        </span><!-- .input-group -->
                        
                        <span class="input-group">
                            <i class="fa fa-book"></i>
                            <input type="text" name="contactSubject" id="contactSubject" class="lg" placeholder="Subject" required/>
                        </span><!-- .input-group -->
                        
                        <span class="input-group">
                            <textarea name="contactMessage" id="contactMessage" class="lg" placeholder="What's on your mind?" required></textarea>
                        </span><!-- .input-group -->
                        
                        <span id="message"></span>
                        
                        <span class="input-group">
                            <button class="submit" id="submit_contact" data-loading-text="SENDING...">SEND</button>
                        </span><!-- .input-group -->
                        
                    </div><!-- .col-lg-8 -->
                    
                    <div class="col-md-4">
                    	<ul class="info-list">
                        
                        	<li class="anim fadeInRight animated" data-wow-delay="0.15s" style="visibility: visible;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">
                            	<i class="fa fa-map-marker"></i>
                                <span>
                                	<p>A-5-10 & A-5-11, Empire Tower<br>
SS16/1, Subang Jaya<br>
47500 Selangor</p>
                                </span>
                            </li>
                            
                            <li class="anim fadeInRight animated" data-wow-delay="0.25s" style="visibility: visible;-webkit-animation-delay: 0.25s; -moz-animation-delay: 0.25s; animation-delay: 0.25s;">
                            	<i class="fa fa-phone"></i>
                                <span>
                                    <article><cite>Phone:</cite>+6 010 -7888792</article><br>
                                    <article><cite>Whatsapp:</cite>+6 010 - 7888792</article>
                                    <p></p>
                                </span>
                            </li>
                            
                            <li class="hours anim fadeInRight animated" data-wow-delay="0.35s" style="visibility: visible;-webkit-animation-delay: 0.35s; -moz-animation-delay: 0.35s; animation-delay: 0.35s;">
                            	<i class="fa fa-clock-o"></i>
                                <span>
                                    <article><cite>Fri-Mon:</cite>	10am - 10pm</article><br>
                                    <article><cite>Saturday:</cite>	12am - 6pm</article><br>
                                    <article><cite>Sunday:</cite>	Closed</article>
                                    <p></p>
                                </span>
                            </li>
                            
                        </ul><!-- .info-list -->
                
                    </div><!-- .col-lg-4 -->
                </form>
                
            </div><!-- .row -->
    	</div><!-- .container -->
    	
        <span id="message_sent"><i class="fa-check fa"></i></span><!-- jQuery display of giant checkmark -->	
        
    </section><!-- .content-section .form -->
    
<?php include("include/footer.php") ?>

	</script>
</body>
</html>