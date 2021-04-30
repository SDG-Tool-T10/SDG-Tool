 <!-- ***** Contact Us Area Starts ***** -->
 <section class="section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Feel free to keep in touch with us!</h2>
                    </div>
                    <ul class="contact-info">
                        <li><img src="image/contact-info-01.png" alt="">06-123-456-78</li>
                        <li><img src="image/contact-info-02.png" alt="">joeriversluis@hz.nl</li>
                        <li><img src="image/contact-info-03.png" alt="">www.company.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="contact-form">
                    <form id="contact" action="" method="get">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="subject" type="text" id="subject" placeholder="Subject">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="left-text-content">
                    <p>Copyright &copy; 2020 Breezed Co., Ltd. 
                    
                    - Design: <a rel="nofollow noopener" href="https://templatemo.com">TemplateMo</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="right-text-content">
                        <ul class="social-icons">
                            <li><p>Follow Us</p></li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a></li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="js/owl-carousel.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imgfix.min.js"></script> 
<script src="js/slick.js"></script> 
<script src="js/lightbox.js"></script> 
<script src="js/isotope.js"></script> 

<!-- Global Init -->
<script src="js/custom.js"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>