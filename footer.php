<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bootstrap to wordpress
 */
?>

<?php wp_footer(); ?>


 <!-- FOOTER
    ================================================================================== -->   
    <footer>
    
        <div class="container">
            <div class="row">
                 <div class="col-sm-3">
                    <p><a href="/"><img src="<?php bloginfo(stylesheet_directory) ?>/assets/img/logo.png" alt="bootstrap to wordpress"></a></p>
                 </div>
                <div class="col-sm-6">
                   <nav>
                     <ul class="list-unstyled list-inline">
                         <li><a href="/">Home</a></li>
                         <li><a href="/">Blog</a></li>
                         <li><a href="/">Resources</a></li>
                         <li class="signup-link"><a href="/">Sign Up Now</a></li>   
                    </ul>                    
                   </nav> 
                </div>
                <div class="col-sm-3">
                   <p class="pull-right">&copy; 2015 Brad Hussey</p>
                </div>
            </div>    
        </div>
     
    </footer>
    
    <!-- MODAL WINDOW
    ================================================================================== -->   
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        <i class="fa fa-envelope"></i>
                        Subscribe to Our Mailing List
                    </h4>
                    
                </div><!--Modal Header-->
                <div class="modal-body">
                    
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses,<em>for free!</em></p>
                    
                    <form class="form-inline" role="form">
                    
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-name">
                                Your First Name
                            </label>
                            <input type="text" class="form-control" id="subscribe-name" placeholder="Your First Name">                     
                        </div><!-- group -->
                        
                          <div class="form-group">
                            <label class="sr-only" for="subscribe-email">
                                and your Email
                            </label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="Enter Your Email Address">                     
                        </div><!-- group -->
                        <input type="submit" class="btn btn-danger" value="Subscribe">
                    
                    </form>
                    <hr>
                    <p><small>By providing your email your consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your provacy &amp; you may unsubscribe at any time.</small></p>
                    
                </div><!--Modal body-->
            
            
            
            
            </div>
        </div>
  
    </div><!-- Modal -->

  <!-- BOOTSTRAP CORE JAVASCRIPT
        Placed at the bottom of the document so that the pages load faster
    ======================================================================= -->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>assets/js/jquery-2.1.3.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>assets/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>assets/js/main.js"></script>
    
    <!-- TYPE KIT FONTS -->
    <script src="//use.typekit.net/nlu1ogl.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>


</body>
</html>
