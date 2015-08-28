<?php
/*

	Template Name: Home Page

 * @package bootstrap to wordpress
 */

// Custom Fields
$prelaunch_price 	= get_post_meta( 7, 'prelaunch_price', true);
$launch_price 		= get_post_meta( 7, 'launch_price', true);
$final_price 		= get_post_meta( 7, 'final_price', true);
$course_url 		= get_post_meta( 7, 'course_url', true);
$button_text 		= get_post_meta( 7, 'button_text', true);
$optin_text 		= get_post_meta( 7, 'optin_text', true);
$optin_button_text 	= get_post_meta( 7, 'optin_button_text', true);

// Advanced Custom Fields
$income_feature_image   = get_field('income_feature_image');
$income_section_title   = get_field('income_section_title');
$income_section_description  = get_field('income_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_description   = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_description   = get_field('reason_2_description');


$who_imag = get_field('who_imag');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

get_header(); ?>

	
    <!--HERO 
    ================================================================================== -->    
    <section id="hero" data-type="background" data-speed="5">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/logo-badge.png" alt="Boostrap to Wordpress" class="logo">
                    </div>
                    <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo(name) ?></h1>
                    <p class="lead"><?php bloginfo(description) ?></p>                                        
                        <div id="price-timeline">
                            <div class="price active">
                                <h4>Pre-Launch Price <small>Ends Soon</small></h4>
                                <span><?php echo $prelaunch_price; ?></span>
                            </div><!--price-->                         
                             <div class="price">
                                <h4>Launch Price <small>Coming Soon</small></h4>
                                <span><?php echo $launch_price; ?></span>
                            </div><!--price-->                       
                             <div class="price">
                                <h4>Final Price <small>Coming Soon</small></h4>
                                <span><?php echo $final_price; ?></span>
                            </div><!--price-->
                        </div><!--price-timeline-->
                        <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                    </div><!-- col-->
                </div>  <!-- row -->       
            </div> <!-- container -->
        </article>   
    </section>
    
    
    <!-- OPT IN SECTION 
    ================================================================================== -->   
<section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead">
                    <?php echo $optin_text; ?>
                    </p>                   
                </div><!-- col-->
                <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>                
                </div><!-- col-->
            </div><!-- row --> 
        </div><!-- container -->
 </section>
    
    
    
    <!-- BOOST YOUR INCOME SECTION 
    ================================================================================== -->   
    <section id="boost-income">
        <div class="container">
            <div class="section-header">
                <!-- If user uploaded an image -->
                    <?php 
                        if(!empty($income_feature_image)) : ?>                  
                 <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">   
                  <?php endif; ?> 
                <h2><?php echo $income_section_title; ?></h2>           
            </div>
            <p class="lead">
            <?php echo $income_section_description; ?>
            </p>
            <div class="row">
                    <div class="col-sm-6">
                        <h3><?php echo $reason_1_title; ?></h3>
                        <p><?php echo $reason_1_description; ?>
</p>
                    </div>
                    <div class="col-sm-6">
                        <h3><?php echo $reason_2_title; ?></h3>
                        <p><?php echo $reason_2_description; ?>
</p>
                    </div>
            
            
            </div>
        </div>   
    </section>
    
    
    
    <!-- WHO BENEFITS SECTION
    ================================================================================== -->   
    <section id="who-benefits">
    
    <div class="container">
        <div class="section-header">
            
             <!-- If user uploaded an image -->
                    <?php 
                        if(!empty($who_imag)) : ?>                  
                 <img src="<?php echo $who_imag['url']; ?>" alt="<?php echo $who_imag['alt']; ?>">   
                  <?php endif; ?> 


            <h2><?php echo $who_section_title; ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <p><?php echo $who_section_body; ?></p>
    
            </div>
        </div>
        
    </div>
        
        
    </section>
    
    
    
    <!-- COURSE SECTION
    ================================================================================== -->   
    <section id="course-features">
        <div class="container">
        <div class="section-header">
            <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/icon-rocket.png" alt="rocet">
            <h2>Course Features</h2>
        </div>
        
            <div class="row">
                <div class="col-sm-2">
                    <i class="ci ci-computer"></i>
                    <h4>Lifetime access to 80+ lectures</h4>              
                </div><!-- end col -->
                <div class="col-sm-2">
                    <i class="ci ci-watch"></i>
                    <h4>10+ hours of HD video content</h4>              
                </div><!-- end col -->
                 <div class="col-sm-2">
                    <i class="ci ci-calendar"></i>
                    <h4>30-day money back guarantee</h4>              
                </div><!-- end col -->
                <div class="col-sm-2">
                    <i class="ci ci-community"></i>
                    <h4>Access to a community of like-minded students</h4>              
                </div><!-- end col -->
                <div class="col-sm-2">
                    <i class="ci ci-instructor"></i>
                    <h4>Direct access to the instructor</h4>              
                </div><!-- end col -->
                <div class="col-sm-2">
                    <i class="ci ci-device"></i>
                    <h4>Accessible content on your mobile devices</h4>              
                </div><!-- end col -->
           
            </div>
            
            
        </div><!-- Container -->    
    </section>
    
    
    <!-- PROJECT FEATURES SECTION
    ================================================================================== -->   
    <section id="project-features">
        <div class="container">
            <h2>Final Project Features</h2>
            <p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website you are going to build? You're looking at it! The website you're using right now is the website you will have built entirely by yourself, by the end of this course.</p>
            
            <div class="row">
                <div class="col-sm-4"> 
                    <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/icon-design.png" alt="Design">
                    <h3>Sexy & Modern Design</h3>  
                    <p>You get to work with a modern, professional quality design & layout.
</p>
                </div><!-- end col -->
                <div class="col-sm-4"> 
                    <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/icon-code.png" alt="Design">
                    <h3>Quality HTML5 &amp; CSS3</h3>  
                      <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 & CSS3.
</p>
                </div><!-- end col -->
                <div class="col-sm-4"> 
                    <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/icon-design.png" alt="Design">
                    <h3>Easy-to-use CMS</h3>   
                      <p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
                </div><!-- end col -->            
            </div>
        </div>
    
    </section><!-- Project Features -->
    
    <!-- VIDEO FEARURETTE SECTION
    ================================================================================== -->   
    <section id="featurette" data-type="background" data-speed="5">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Watch the Course Introduction</h2>
					<iframe width="100%" height="415" src="http://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
				</div><!-- end col -->
			</div><!-- row -->			
		</div><!-- container -->
	</section><!-- featurette -->
    
    
    <!-- THE INSTRUCTOR SECTION
    ================================================================================== -->   
    <section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2>Your Instructor <small>Brad Hussey</small></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
							<a href="https://twitter.com/bradhussey" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://facebook.com/bradhussey" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://plus.google.com/+BradHussey" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
						</div><!-- end col -->
					
					</div><!-- row -->
					
					<p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.<p>
					
					<p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>
					
					<p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.</p>
					
					<p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>
					
					<hr>
					
					<h3>The Numbers <small>They Don't Lie</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									41,000+ <span>students</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									568 <span>reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									8 <span>courses</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->
    
    
    <!-- TESTIMONALS SECTION
    ================================================================================== -->   
    <section id="kudos">
        <div class="container">
            <div class="row">         
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>What people are saying about Brad</h2>
                    <!-- Testimonial -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/brennan.jpg" alt="Brennan">                      
                        </div> 
                        <div class="col-sm-8">
                            <blockquote>
                            Before they sold out Thundercats ethical blog sriracha farm-to-table. You probably haven't heard of them tattooed vinyl hoodie, aesthetic tofu 8-bit Portland. Keytar Etsy cray, put a bird on it post-ironic vinyl meh biodiesel American Apparel synth. Ethical lomo sartorial yr, Banksy kogi pork belly distillery four dollar toast kitsch small batch deep v literally Godard. Fashion axe gluten-free sartorial, VHS roof party XOXO High Life small batch ethical tattooed sustainable put a bird on it Portland. Trust fund typewriter Wes Anderson, Thundercats slow-carb hashtag American Apparel Williamsburg disrupt food truck. Brooklyn typewriter tote bag biodiesel chillwave, pickled Helvetica iPhone meditation swag health goth Shoreditch you probably haven't heard of them.
                            
                        <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>    
                            </blockquote>                     
                        </div>   
                    </div><!-- row testimonial -->
                    
                    <!-- Testimonial -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">                      
                        </div> 
                        <div class="col-sm-8">
                            <blockquote>
                            Before they sold out Thundercats ethical blog sriracha farm-to-table. You probably haven't heard of them tattooed vinyl hoodie, aesthetic tofu 8-bit Portland. Keytar Etsy cray, put a bird on it post-ironic vinyl meh biodiesel American Apparel synth. Ethical lomo sartorial yr, Banksy kogi pork belly distillery four dollar toast kitsch small batch deep v literally Godard. Fashion axe gluten-free sartorial, VHS roof party XOXO High Life small batch ethical tattooed sustainable put a bird on it Portland. Trust fund typewriter Wes Anderson, Thundercats slow-carb hashtag American Apparel Williamsburg disrupt food truck. Brooklyn typewriter tote bag biodiesel chillwave, pickled Helvetica iPhone meditation swag health goth Shoreditch you probably haven't heard of them.
                            
                        <cite>&mdash; Ben, graduate of all of Brad's courses</cite>    
                            </blockquote>                     
                        </div>   
                    </div><!-- row testimonial -->
                    
                    
                    
                     <!-- Testimonial -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/aj.png" alt="Illustration of a man with a beard">                      
                        </div> 
                        <div class="col-sm-8">
                            <blockquote>
                            Before they sold out Thundercats ethical blog sriracha farm-to-table. You probably haven't heard of them tattooed vinyl hoodie, aesthetic tofu 8-bit Portland. Keytar Etsy cray, put a bird on it post-ironic vinyl meh biodiesel American Apparel synth. Ethical lomo sartorial yr, Banksy kogi pork belly distillery four dollar toast kitsch small batch deep v literally Godard. Fashion axe gluten-free sartorial, VHS roof party XOXO High Life small batch ethical tattooed sustainable put a bird on it Portland. Trust fund typewriter Wes Anderson, Thundercats slow-carb hashtag American Apparel Williamsburg disrupt food truck. Brooklyn typewriter tote bag biodiesel chillwave, pickled Helvetica iPhone meditation swag health goth Shoreditch you probably haven't heard of them.
                            
                        <cite>&mdash; Ben, graduate of all of Brad's courses</cite>    
                            </blockquote>                     
                        </div>   
                    </div><!-- row testimonial -->
                    
                      <!-- Testimonial -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/ernest.png" alt="Ernest">                      
                        </div> 
                        <div class="col-sm-8">
                            <blockquote>
                            Before they sold out Thundercats ethical blog sriracha farm-to-table. You probably haven't heard of them tattooed vinyl hoodie, aesthetic tofu 8-bit Portland. Keytar Etsy cray, put a bird on it post-ironic vinyl meh biodiesel American Apparel synth. Ethical lomo sartorial yr, Banksy kogi pork belly distillery four dollar toast kitsch small batch deep v literally Godard. Fashion axe gluten-free sartorial, VHS roof party XOXO High Life small batch ethical tattooed sustainable put a bird on it Portland. Trust fund typewriter Wes Anderson, Thundercats slow-carb hashtag American Apparel Williamsburg disrupt food truck. Brooklyn typewriter tote bag biodiesel chillwave, pickled Helvetica iPhone meditation swag health goth Shoreditch you probably haven't heard of them.
                            
                        <cite>&mdash; Ben, graduate of all of Brad's courses</cite>    
                            </blockquote>                     
                        </div>   
                    </div><!-- row testimonial -->
                </div><!-- end column -->
            </div>  <!-- row -->     
        </div><!-- container -->      
    </section><!-- kudos -->  

<?php get_footer(); ?>
