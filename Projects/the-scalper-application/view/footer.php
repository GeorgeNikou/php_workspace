<!-- Footer -->

<footer class="footer">
    <div class="footer_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
        <div class="newsletter_container">
            <div class="newsletter_title"><h2>Subscribe to our newsletter</h2></div>
            <form action="#" id="newsletter_form" class="newsletter_form">
                <input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
                <button class="newsletter_button">Subscribe</button>
            </form>
        </div>
        <div class="footer_lists d-flex flex-sm-row  flex-column align-items-start justify-content-start ml-xl-auto">

            <!-- Events Types -->
            <div class="footer_list">
                <div class="footer_list_title">Events</div>
                <ul>
                    <li><a href="index.html">Sports</a></li>
                    <li><a href="about.html">Concerts</a></li>
                    <li><a href="#">Arts & Theater</a></li>
                    <li><a href="#">Comedy</a></li>
                    <li><a href="blog.html">Movies</a></li>
                </ul>
            </div>

            <!-- Featured -->
            <div class="footer_list">
                <div class="footer_list_title">Featured</div>
                <ul>
                    <li><a href="#">Celine Dion</a></li>
                    <li><a href="#">Dave chappelle</a></li>
                    <li><a href="#">Cirque de soleil</a></li>
                    <li><a href="#">WWE Wrestlemania</a></li>
                    <li><a href="#">Locations</a></li>
                </ul>
            </div>

            <!-- Connect -->
            <div class="footer_list">
                <div class="footer_list_title">Connect</div>
                <ul>
                    <li><a href="#">Tickets</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">discounts</a></li>
                    <li><a href="#">Social Media</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="copyright_bar">
		<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template has been altered with <i
                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">George Nikou</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</span>
    </div>
</footer>
</div>

<script src="/assets/js/jquery-3.2.1.min.js"></script>
<script src="/assets/styles/bootstrap-4.1.2/popper.js"></script>
<script src="/assets/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="/assets/plugins/greensock/TweenMax.min.js"></script>
<script src="/assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/assets/plugins/easing/easing.js"></script>
<script src="/assets/plugins/progressbar/progressbar.min.js"></script>
<script src="/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/assets/plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="/assets/plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="/assets/js/custom.js"></script>
<?php if ($controller == 'events' && $action == 'list'): ?>
<script src="/assets/plugins/twbsPagination/jquery.twbsPagination.min.js"></script>
<script>
    $('.pagination').twbsPagination({
        totalPages: totalPages,
        onPageClick: function (event, page) {
            $('.page-active').removeClass('page-active');
            $('#page' + page).addClass('page-active');
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        },
        pageVariable: '{{page}}',
    });
</script>
<?php endif; ?>
</body>
</html>