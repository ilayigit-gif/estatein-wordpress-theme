<footer class="site-footer">

    <div class="container footer-top">

        <div class="footer-brand">
            <a href="<?php echo home_url(); ?>" class="logo">Estatein</a>

            <form class="footer-form">
                <input type="email" placeholder="Enter Your Email">
                <button type="submit">→</button>
            </form>
        </div>

        <div class="footer-links">

            <div>
                <h4>Home</h4>
                <a href="#">Hero Section</a>
                <a href="#">Features</a>
                <a href="#">Properties</a>
                <a href="#">Testimonials</a>
            </div>

            <div>
                <h4>About Us</h4>
                <a href="#">Our Story</a>
                <a href="#">Our Works</a>
                <a href="#">How It Works</a>
                <a href="#">Our Team</a>
            </div>

            <div>
                <h4>Properties</h4>
                <a href="#">Portfolio</a>
                <a href="#">Categories</a>
            </div>

            <div>
                <h4>Services</h4>
                <a href="#">Valuation Mastery</a>
                <a href="#">Strategic Marketing</a>
                <a href="#">Negotiation Wizardry</a>
                <a href="#">Closing Success</a>
            </div>

            <div>
                <h4>Contact Us</h4>
                <a href="#">Contact Form</a>
                <a href="#">Our Offices</a>
            </div>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-wrapper">
            <p>© <?php echo date('Y'); ?> Estatein. All Rights Reserved.</p>

            <div class="social-links">
                <a href="#">f</a>
                <a href="#">in</a>
                <a href="#">x</a>
                <a href="#">yt</a>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>

</body>
</html>