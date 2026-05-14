<?php
/*
Template Name: Services
*/
get_header();
?>

<main class="services-page">

    <section class="inner-hero services-hero">
        <div class="container">
            <h1>Elevate Your Real Estate Experience</h1>
            <p>
                Welcome to Estatein, where your real estate goals meet expert guidance.
                Explore our services designed to support buyers, sellers, investors and property owners.
            </p>
        </div>
    </section>

    <section class="quick-links">
        <div class="container quick-links-grid">
            <a href="#buying" class="quick-card">
                <span>⌂</span>
                <h3>Find Your Dream Home</h3>
            </a>

            <a href="#selling" class="quick-card">
                <span>▣</span>
                <h3>Unlock Property Value</h3>
            </a>

            <a href="#management" class="quick-card">
                <span>◈</span>
                <h3>Property Management</h3>
            </a>

            <a href="#investment" class="quick-card">
                <span>✦</span>
                <h3>Smart Investments</h3>
            </a>
        </div>
    </section>

    <section class="section service-detail-section" id="buying">
        <div class="container">
            <div class="section-heading">
                <div>
                    <h2>Real Estate Choice for Buyers</h2>
                    <p>
                        From search to closing, we help buyers discover properties that match their lifestyle,
                        budget and long-term plans.
                    </p>
                </div>
            </div>

            <div class="service-detail-grid">
                <article class="service-detail-card">
                    <h3>Personalized Property Search</h3>
                    <p>We filter opportunities by location, budget, property type and your specific needs.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Market Guidance</h3>
                    <p>Understand pricing, demand and neighborhood potential before making a decision.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Viewing Coordination</h3>
                    <p>We organize property visits and help you compare options with clarity.</p>
                </article>

                <article class="service-detail-card service-highlight">
                    <h3>Start Your Buying Journey</h3>
                    <p>
                        Tell us what you are looking for and we will help you find the right property.
                    </p>
                    <a href="<?php echo esc_url(home_url('/properties/')); ?>" class="btn btn-primary">Browse Properties</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section service-detail-section" id="selling">
        <div class="container">
            <div class="section-heading">
                <div>
                    <h2>Unlock Property Value</h2>
                    <p>
                        We help sellers position their properties with the right strategy, presentation and pricing.
                    </p>
                </div>
            </div>

            <div class="service-detail-grid">
                <article class="service-detail-card">
                    <h3>Valuation Mastery</h3>
                    <p>Accurate property valuation supported by market analysis and comparable listings.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Strategic Marketing</h3>
                    <p>Modern visuals, listing optimization and smart exposure to attract qualified buyers.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Negotiation Support</h3>
                    <p>We guide you through offers, counteroffers and closing terms with confidence.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Closing Coordination</h3>
                    <p>From documents to final steps, we support a smoother selling process.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section service-detail-section" id="management">
        <div class="container">
            <div class="section-heading">
                <div>
                    <h2>Effortless Property Management</h2>
                    <p>
                        A complete management approach for owners who want less stress and better control.
                    </p>
                </div>
            </div>

            <div class="service-detail-grid">
                <article class="service-detail-card">
                    <h3>Tenant Management</h3>
                    <p>Support for tenant communication, onboarding and ongoing relationship management.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Maintenance Coordination</h3>
                    <p>Handle maintenance needs quickly while protecting the long-term value of the property.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Rent & Reporting</h3>
                    <p>Track rent collection, expenses and property performance with organized reporting.</p>
                </article>

                <article class="service-detail-card service-highlight">
                    <h3>Manage Smarter</h3>
                    <p>
                        Simplify ownership with a property management system built around reliability.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Contact Us</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section service-detail-section" id="investment">
        <div class="container">
            <div class="section-heading">
                <div>
                    <h2>Smart Investments, Informed Decisions</h2>
                    <p>
                        We help investors compare opportunities, understand risk and make more strategic decisions.
                    </p>
                </div>
            </div>

            <div class="service-detail-grid">
                <article class="service-detail-card">
                    <h3>Market Insight</h3>
                    <p>Review demand, pricing trends and area potential before investing.</p>
                </article>

                <article class="service-detail-card">
                    <h3>ROI Assessment</h3>
                    <p>Estimate return potential through rental income, growth and acquisition costs.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Portfolio Strategy</h3>
                    <p>Plan short-term and long-term property decisions with a balanced approach.</p>
                </article>

                <article class="service-detail-card">
                    <h3>Risk Awareness</h3>
                    <p>Identify possible risks and evaluate each opportunity with better context.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container cta-wrapper">
            <div>
                <h2>Start Your Real Estate Journey Today</h2>
                <p>
                    Whether you are buying, selling, investing or managing a property,
                    Estatein is ready to guide your next step.
                </p>
            </div>

            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Contact Us</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>