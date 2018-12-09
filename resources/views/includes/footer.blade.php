<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_border"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter_content text-center">
                    <div class="newsletter_title">Subscribe to our newsletter</div>
                    <div class="newsletter_text"><p>Get Updates to the Latest Products and Offers.</p></div>
                    <div class="newsletter_form_container">
                        <form action="/newsletter" method="POST" id="newsletter_form" class="newsletter_form">
                            @csrf
                            <input type="text" class="newsletter_input" required="required" name="contact" placeholder="Enter Your Email or Phone">
                            <button class="newsletter_button trans_200"><span>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<div class="footer_overlay"></div>
<footer class="footer">
    <div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                    <div class="footer_logo"><a href="#">NS Medical Agency.</a></div>
                    <div class="copyright ml-auto mr-auto">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://chayan007.github.io/freelance_portfolio/" target="_blank">Chayan</a>
                    </div>
                    <div class="footer_social ml-lg-auto">
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>