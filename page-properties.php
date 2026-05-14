<?php
/*
Template Name: Properties
*/
get_header();
?>

<main class="properties-page">

    <section class="inner-hero properties-hero">
        <div class="container">

            <h1>Find Your Dream Property</h1>
            <p>
                Welcome to Estatein, where your dream property awaits in every corner of our beautiful world.
                Explore our curated selection of properties, each offering a unique story.
            </p>

            <form class="property-search" id="propertySearchForm">
                <input type="text" id="propertySearchInput" placeholder="Search For A Property">
                <button type="submit">Find Property</button>
            </form>

        </div>
    </section>

    <section class="property-filter">
        <div class="container filter-grid">

            <select id="filterLocation">
                <option value="">All Locations</option>
                <option value="california">California</option>
                <option value="new-york">New York</option>
                <option value="florida">Florida</option>
            </select>

            <select id="filterType">
                <option value="">All Types</option>
                <option value="villa">Villa</option>
                <option value="apartment">Apartment</option>
                <option value="cottage">Cottage</option>
            </select>

            <select id="filterPrice">
                <option value="">All Prices</option>
                <option value="0-400000">Up to $400,000</option>
                <option value="400000-500000">$400,000 - $500,000</option>
                <option value="500000-999999">$500,000+</option>
            </select>

            <select id="filterBedroom">
                <option value="">All Bedrooms</option>
                <option value="2">2 Bedroom</option>
                <option value="3">3 Bedroom</option>
                <option value="4">4 Bedroom</option>
            </select>

            <button type="button" id="resetFilters" class="filter-reset">
                Reset Filters
            </button>

        </div>
    </section>

    <section class="section featured">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2>Discover a World of Possibilities</h2>
                    <p>
                        Our portfolio of properties is as diverse as your dreams.
                        Use the search and filters to find the property that fits your needs.
                    </p>
                </div>
            </div>

            <div class="property-grid" id="propertyGrid">

                <article class="property-card"
                    data-title="seaside serenity villa california"
                    data-location="california"
                    data-type="villa"
                    data-price="550000"
                    data-bedroom="4">

                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=900&auto=format&fit=crop" alt="Seaside Serenity Villa">

                    <div class="property-body">
                        <h3>Seaside Serenity Villa</h3>
                        <p>A stunning 4-bedroom, 3-bathroom villa in California.</p>

                        <div class="property-tags">
                            <span>California</span>
                            <span>4-Bedroom</span>
                            <span>Villa</span>
                        </div>

                        <div class="property-bottom">
                            <div>
                                <small>Price</small>
                                <strong>$550,000</strong>
                            </div>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </article>

                <article class="property-card"
                    data-title="metropolitan haven apartment new york"
                    data-location="new-york"
                    data-type="apartment"
                    data-price="350000"
                    data-bedroom="2">

                    <img src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=900&auto=format&fit=crop" alt="Metropolitan Haven">

                    <div class="property-body">
                        <h3>Metropolitan Haven</h3>
                        <p>A chic 2-bedroom apartment with panoramic city views in New York.</p>

                        <div class="property-tags">
                            <span>New York</span>
                            <span>2-Bedroom</span>
                            <span>Apartment</span>
                        </div>

                        <div class="property-bottom">
                            <div>
                                <small>Price</small>
                                <strong>$350,000</strong>
                            </div>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </article>

                <article class="property-card"
                    data-title="rustic retreat cottage florida"
                    data-location="florida"
                    data-type="cottage"
                    data-price="450000"
                    data-bedroom="3">

                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=900&auto=format&fit=crop" alt="Rustic Retreat Cottage">

                    <div class="property-body">
                        <h3>Rustic Retreat Cottage</h3>
                        <p>An elegant 3-bedroom cottage surrounded by nature in Florida.</p>

                        <div class="property-tags">
                            <span>Florida</span>
                            <span>3-Bedroom</span>
                            <span>Cottage</span>
                        </div>

                        <div class="property-bottom">
                            <div>
                                <small>Price</small>
                                <strong>$450,000</strong>
                            </div>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </article>

            </div>

            <p class="no-results" id="noResults">
                No properties found. Try changing your filters.
            </p>

        </div>
    </section>

    <section class="section property-contact">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2>Let’s Make it Happen</h2>
                    <p>
                        Ready to take the first step toward your dream property?
                        Fill out the form below and our real estate experts will contact you.
                    </p>
                </div>
            </div>

            <form class="property-form">
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
                    <label>Preferred Location</label>
                    <select>
                        <option>Select Location</option>
                        <option>New York</option>
                        <option>California</option>
                        <option>Florida</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Property Type</label>
                    <select>
                        <option>Select Property Type</option>
                        <option>Villa</option>
                        <option>Apartment</option>
                        <option>Cottage</option>
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

    <section class="cta">
        <div class="container cta-wrapper">
            <div>
                <h2>Start Your Real Estate Journey Today</h2>
                <p>
                    Your dream property is just a click away. Explore Estatein’s listings and let us help you find the perfect place.
                </p>
            </div>

            <a href="#" class="btn btn-primary">Explore Properties</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>