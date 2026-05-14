<?php
/*
Template Name: Contact
*/
get_header();
?>

<main class="contact-page">

    <section class="inner-hero contact-hero">
        <div class="container">
            <h1>Get in Touch with Estatein</h1>
            <p>
                Welcome to Estatein’s Contact Us page. We’re here to assist you with any inquiries,
                requests or feedback you may have.
            </p>
        </div>
    </section>

    <section class="contact-info-bar">
        <div class="container contact-info-grid">
            <a href="mailto:info@estatein.com" class="contact-info-card">
                <span>✉</span>
                <strong>info@estatein.com</strong>
            </a>

            <a href="tel:+1234567890" class="contact-info-card">
                <span>☎</span>
                <strong>+1 (234) 567-890</strong>
            </a>

            <div class="contact-info-card">
                <span>⌖</span>
                <strong>Main Headquarters</strong>
            </div>

            <div class="contact-info-card">
                <span>◉</span>
                <strong>Instagram · LinkedIn · Facebook</strong>
            </div>
        </div>
    </section>

    <section class="section contact-form-section">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2>Let’s Connect</h2>
                    <p>
                        We’re excited to connect with you. Fill out the form below and our team will respond soon.
                    </p>
                </div>
            </div>

            <form class="contact-form">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" placeholder="Enter First Name">
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" placeholder="Enter Last Name">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="Enter Your Email">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" placeholder="Enter Phone Number">
                </div>

                <div class="form-group">
                    <label>Inquiry Type</label>
                    <select>
                        <option>Select Inquiry Type</option>
                        <option>Buying Property</option>
                        <option>Selling Property</option>
                        <option>Property Management</option>
                        <option>Investment Consulting</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>How Did You Hear About Us?</label>
                    <select>
                        <option>Select</option>
                        <option>Google Search</option>
                        <option>Social Media</option>
                        <option>Recommendation</option>
                    </select>
                </div>

                <div class="form-group full">
                    <label>Message</label>
                    <textarea placeholder="Enter your message here..."></textarea>
                </div>

                <div class="form-submit full">
                    <label class="checkbox">
                        <input type="checkbox">
                        <span>I agree with Terms of Use and Privacy Policy</span>
                    </label>

                    <button type="submit" class="btn btn-primary">Send Your Message</button>
                </div>
            </form>

        </div>
    </section>

    <section class="section office-section">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2>Discover Our Office Locations</h2>
                    <p>
                        Estatein is here to serve you across multiple locations. Choose the office nearest to you.
                    </p>
                </div>
            </div>

            <div class="office-grid">
                <article class="office-card">
                    <span>Main Headquarters</span>
                    <h3>123 Estatein Plaza, City Center, Metropolis</h3>
                    <p>
                        Our main headquarters serves as the heart of Estatein.
                    </p>

                    <div class="office-meta">
                        <small>info@estatein.com</small>
                        <small>+1 (234) 567-890</small>
                        <small>Metropolis</small>
                    </div>

                    <a href="#" class="btn btn-primary">Get Direction</a>
                </article>

                <article class="office-card">
                    <span>Regional Office</span>
                    <h3>456 Urban Avenue, Downtown District, Metropolis</h3>
                    <p>
                        Our regional office supports clients with dedicated local expertise.
                    </p>

                    <div class="office-meta">
                        <small>office@estatein.com</small>
                        <small>+1 (234) 678-990</small>
                        <small>Metropolis</small>
                    </div>

                    <a href="#" class="btn btn-primary">Get Direction</a>
                </article>
            </div>

        </div>
    </section>

    <section class="section world-section">
        <div class="container">

            <div class="world-card">
                <div class="world-gallery">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=800&auto=format&fit=crop" alt="Office">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=800&auto=format&fit=crop" alt="Team">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800&auto=format&fit=crop" alt="Meeting">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=800&auto=format&fit=crop" alt="Business">
                </div>

                <div class="world-content">
                    <h2>Explore Estatein’s World</h2>
                    <p>
                        Step inside the world of Estatein, where professionalism meets warmth and every client journey matters.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="cta">
        <div class="container cta-wrapper">
            <div>
                <h2>Start Your Real Estate Journey Today</h2>
                <p>
                    Whether you are ready to buy, sell or ask a question, our team is here to help.
                </p>
            </div>

            <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="btn btn-primary">Explore Properties</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>