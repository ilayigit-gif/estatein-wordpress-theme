<?php get_header(); ?>

<main class="homepage">

    <section class="hero">
        <div class="container hero-wrapper">

            <div class="hero-content">
                <h1>Discover Your Dream Property with Estatein</h1>

                <p>
                    Your journey to finding the perfect property begins here.
                    Explore our listings to find the home of your dreams.
                </p>

                <div class="hero-buttons">
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="btn btn-secondary">Learn More</a>
                    <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="btn btn-primary">Browse Properties</a>
                </div>

                <div class="hero-stats">
                    <div class="stat-card">
                        <h3>200+</h3>
                        <span>Happy Customers</span>
                    </div>

                    <div class="stat-card">
                        <h3>10k+</h3>
                        <span>Properties For Clients</span>
                    </div>

                    <div class="stat-card">
                        <h3>16+</h3>
                        <span>Years of Experience</span>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200&auto=format&fit=crop" alt="Modern Building">
            </div>

        </div>
    </section>

    <section class="quick-links">
        <div class="container quick-links-grid">

            <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="quick-card">
                <span>⌂</span>
                <h3>Find Your Dream Home</h3>
            </a>

            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="quick-card">
                <span>▣</span>
                <h3>Unlock Property Value</h3>
            </a>

            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="quick-card">
                <span>◈</span>
                <h3>Effortless Property Management</h3>
            </a>

            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="quick-card">
                <span>✦</span>
                <h3>Smart Investments, Informed Decisions</h3>
            </a>

        </div>
    </section>

    <section class="section featured">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2>Featured Properties</h2>
                    <p>
                        Explore our handpicked selection of featured properties.
                        Each listing offers a glimpse into exceptional homes.
                    </p>
                </div>

                <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="small-btn">View All Properties</a>
            </div>

            <div class="property-grid">

                <article class="property-card">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop" alt="Seaside Serenity Villa">
                    <div class="property-body">
                        <h3>Seaside Serenity Villa</h3>
                        <p>A stunning 4-bedroom villa with ocean views.</p>
                        <div class="property-tags">
                            <span>4-Bedroom</span>
                            <span>3-Bathroom</span>
                            <span>Villa</span>
                        </div>
                        <div class="property-bottom">
                            <div>
                                <small>Price</small>
                                <strong>$550,000</strong>
                            </div>
                            <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </article>

                <article class="property-card">
                    <img src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=800&auto=format&fit=crop" alt="Metropolitan Haven">
                    <div class="property-body">
                        <h3>Metropolitan Haven</h3>
                        <p>A modern apartment in the heart of the city.</p>
                        <div class="property-tags">
                            <span>2-Bedroom</span>
                            <span>2-Bathroom</span>
                            <span>Apartment</span>
                        </div>
                        <div class="property-bottom">
                            <div>
                                <small>Price</small>
                                <strong>$350,000</strong>
                            </div>
                            <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </article>

                <article class="property-card">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop" alt="Rustic Retreat Cottage">
                    <div class="property-body">
                        <h3>Rustic Retreat Cottage</h3>
                        <p>A peaceful cottage surrounded by nature.</p>
                        <div class="property-tags">
                            <span>3-Bedroom</span>
                            <span>2-Bathroom</span>
                            <span>Cottage</span>
                        </div>
                        <div class="property-bottom">
                            <div>
                                <small>Price</small>
                                <strong>$450,000</strong>
                            </div>
                            <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <section class="section services-preview">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2>Elevate Your Real Estate Experience</h2>
                    <p>
                        Explore our comprehensive range of services designed to simplify buying,
                        selling, investment and property management.
                    </p>
                </div>

                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="small-btn">View All Services</a>
            </div>

            <div class="services-grid">

                <article class="service-card">
                    <div class="service-icon">⌂</div>
                    <h3>Find Your Dream Home</h3>
                    <p>Discover properties tailored to your lifestyle, budget and long-term goals.</p>
                    <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="service-link">Learn More</a>
                </article>

                <article class="service-card">
                    <div class="service-icon">▣</div>
                    <h3>Unlock Property Value</h3>
                    <p>Get smart guidance to position, price and prepare your property effectively.</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="service-link">Learn More</a>
                </article>

                <article class="service-card">
                    <div class="service-icon">◈</div>
                    <h3>Effortless Property Management</h3>
                    <p>Manage tenants, maintenance and reporting with a smoother service process.</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="service-link">Learn More</a>
                </article>

                <article class="service-card">
                    <div class="service-icon">✦</div>
                    <h3>Smart Investments</h3>
                    <p>Make informed decisions with market insight and ROI-focused strategy.</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="service-link">Learn More</a>
                </article>

            </div>

        </div>
    </section>

    <section class="section testimonials">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2>What Our Clients Say</h2>
                    <p>Read the success stories and heartfelt testimonials from our valued clients.</p>
                </div>

                <a href="#" class="small-btn">View All Testimonials</a>
            </div>

            <div class="testimonial-grid">

                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <h3>Exceptional Service!</h3>
                    <p>Our experience with Estatein was outstanding. Their team helped us find the perfect home.</p>
                    <strong>Wade Warren</strong>
                    <span>USA, California</span>
                </div>

                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <h3>Efficient and Reliable</h3>
                    <p>They made selling our property smooth and stress-free. We couldn’t be happier.</p>
                    <strong>Emelie Thomas</strong>
                    <span>USA, Florida</span>
                </div>

                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <h3>Trusted Advisors</h3>
                    <p>The Estatein team guided us through the entire buying process with great care.</p>
                    <strong>John Harris</strong>
                    <span>USA, Nevada</span>
                </div>

            </div>

        </div>
    </section>

    <section class="section faq">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2>Frequently Asked Questions</h2>
                    <p>Find answers to common questions about Estatein’s services and property process.</p>
                </div>

                <a href="#" class="small-btn">View All FAQ’s</a>
            </div>

            <div class="faq-wrapper">

                <div class="faq-item active">
                    <button class="faq-question" type="button">
                        <span>How do I search for properties on Estatein?</span>
                        <span class="faq-icon">+</span>
                    </button>

                    <div class="faq-answer">
                        <p>Use our advanced property filters to search by location, price range, property type and amenities.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>What documents do I need to sell my property?</span>
                        <span class="faq-icon">+</span>
                    </button>

                    <div class="faq-answer">
                        <p>Typically you will need proof of ownership, identification documents, tax records and inspection reports.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>How can I contact an Estatein agent?</span>
                        <span class="faq-icon">+</span>
                    </button>

                    <div class="faq-answer">
                        <p>You can contact our team through the contact form, phone number or property inquiry sections.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" type="button">
                        <span>Do you offer investment guidance?</span>
                        <span class="faq-icon">+</span>
                    </button>

                    <div class="faq-answer">
                        <p>Yes. We help investors analyze opportunities, estimate ROI and compare market potential.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="cta">
        <div class="container cta-wrapper">
            <div>
                <h2>Start Your Real Estate Journey Today</h2>
                <p>
                    Your dream property is just a click away. Whether you’re looking for a home,
                    investment, or expert advice, Estatein is here to help.
                </p>
            </div>

            <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="btn btn-primary">Explore Properties</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>