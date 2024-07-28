<?php
/*
    Template Name: Home Page
*/
?>

<?php get_header(); ?>

<!-- who we are -->
<section id="who-we-are" class="text-center px-12 py-16">
    <h1 class="section-title uppercase text-secondary">Who We Are</h1>
    <h2 class="section-heading">Experienced UX and Web designers, crafting <br/> innovative digital solutions for clients worldwide</h2>
    <div class="md:flex mt-12 text-left md:space-x-8">
        <div class="w-full md:w-1/2">
            <h3>A team of specialists, passionate about new technologies & progress</h3>
            <p>Sed elementum urna metus, vestibulum in, nulla eu Pellentesque at dui qual. Nullam lorem ipsum lorem iosum – urna metus,
            Vivamus sagittis tortor et nisi auctor. Lorem nulla eu varius fermentum at volutpat ipsum dolor sit amet dolor urna metus vestibulum in! Ut elit tellus lorem ipsum – ipsum nulla glavida dolor sit amet luctus lorem ipsum elementum urna metus vestibulum dolor.</p>
        </div>
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <ul class="list-with-tick text-dark mb-8 text-lg leading-6 font-light">
                <li>100+ completed projects</li>
                <li>Leading rockstar specialists</li>
                <li>Returning customers & positive feedbacks</li>
                <li>A decade of expertise & constant innovations</li>
            </ul>
            <button class="button-blue mr-2">Get In Touch</button>
            <button class="button-light-blue">View Portfolio</button>
        </div>
    </div>
</section>

<!-- what we do -->
<section id="what-we-do" class="text-center px-12 py-16 bg-section-light">
    <h1 class="section-title uppercase text-secondary">What We Do</h1>
    <p class="section-description">We provide a wide range of digital services, from UX/UI design 
        to software development</p>
    <div class="container mx-auto px-4 mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/services_1.jpg') ?>" 
                    alt="Web Design & Development" class="w-full h-64 object-cover"
                    style="border-radius: 40px 0px 40px 0px;"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-center">Software Development</h3>
                    <p class="text-left mb-4">We develop reliable, scalable, and secure software solutions for any OS, browser, 
                        and device. Our expertise combines deep industry knowledge with the latest IT 
                        advancements to deliver custom solutions and products tailored to fit the unique 
                        needs and behaviors of our users.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/services_2.jpg') ?>" 
                    alt="Digital Marketing" class="w-full h-64 object-cover"
                    style="border-radius: 40px 0px 40px 0px;"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Application Services</h3>
                    <p class="text-left mb-4">
                        Our team specializes in helping mid-sized and large enterprises 
                        build, test, secure, manage, migrate, and optimize their digital 
                        solutions. We ensure your systems remain operational and efficient, 
                        maximizing your Total Cost of Ownership (TCO).
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/services_3.jpg') ?>" 
                    alt="E-Commerce" class="w-full h-64 object-cover"
                    style="border-radius: 40px 0px 40px 0px;"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">UX/UI Design</h3>
                    <p class="text-left mb-4">
                        We provide exceptional user experience and user interface design for websites, 
                        SaaS platforms, and web/mobile applications. By blending the latest UI/UX trends 
                        with our clients' unique goals and requirements, we create intuitive, vibrant, and 
                        impactful designs that drive business success.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/services_4.jpg') ?>" 
                    alt="Branding & Creative Services" class="w-full h-64 object-cover"
                    style="border-radius: 40px 0px 40px 0px;"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Content Writing</h3>
                    <p class="text-left mb-4">
                        Our expert writers craft engaging, SEO-optimized content tailored to your brand's 
                        voice and goals. From blogs and articles to web copy and marketing materials, 
                        we deliver compelling content that captivates and converts your audience.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our work -->
<section id="our-work" class="text-center px-12 py-16">
    <h1 class="section-title uppercase text-secondary">Projects</h1>
    <p class="section-description">Our portfolio speaks better than words!</p>
    
    <!-- Tabs -->
    <div class="tabs flex justify-center space-x-4 mb-8">
        <button class="tab active px-4 py-2 rounded bg-blue-500 text-white" 
            onclick="openTab(event, 'tab1')">All</button>
        <button class="tab px-4 py-2 rounded" 
            onclick="openTab(event, 'tab2')">Web</button>
        <button class="tab px-4 py-2 rounded" 
            onclick="openTab(event, 'tab3')">Mobile</button>
    </div>

    <!-- Tab Content -->
    <div id="tab1" class="tab-content">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_1.jpg') ?>" 
                        alt="Project 1" class="w-full object-cover rounded-md"
                        style="height: 350px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Modern arts museum</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_2.jpg') ?>" 
                        alt="Project 1" class="w-full object-cover rounded-md"
                        style="height: 350px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Minimalistic workspace</h3>
                    <p class="text-secondary">Digital Marketing</p>
                </div>
            </div>
            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_3.webp') ?>"
                        alt="Project 1" class="w-full object-cover rounded-md"
                        style="height: 350px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Red space</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            
            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_4.webp') ?>" 
                        alt="Project 1" class="w-full object-cover rounded-md"
                        style="height: 350px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Modern arts museum</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            <div class="w-full relative group">
                <div class="relative">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_5.webp') ?>" 
                        alt="Project 1" class="w-full object-cover rounded-md"
                        style="height: 350px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Minimalistic workspace</h3>
                    <p class="text-secondary">Digital Marketing</p>
                </div>
            </div>
            <div class="w-full relative group">
                <div class="relative">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_6.webp') ?>" 
                        alt="Project 1" class="w-full object-cover rounded-md"
                        style="height: 350px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Red space</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
        </div>

        <button class="button-light-blue mt-8">Load More...</button>
    </div>
    <div id="tab2" class="tab-content hidden">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_4.webp') ?>" 
                    alt="Project 1" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Modern arts museum</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_5.webp') ?>"
                    alt="Project 2" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Minimalistic workspace</h3>
                    <p class="text-secondary">Digital Marketing</p>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_6.webp') ?>" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Red space</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
        </div>
    </div>
    <div id="tab3" class="tab-content hidden">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_1.jpg') ?>" 
                    alt="Project 1" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Modern arts museum</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_2.jpg') ?>" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-sm">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Minimalistic workspace</h3>
                    <p class="text-secondary">Digital Marketing</p>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/portfolio_3.webp') ?>" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-sm">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Red space</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimonials -->
<section id="testimonials" class="text-center px-12 py-16 bg-section-light">
    <h1 class="section-title uppercase text-secondary">Client Feedback</h1>
    <p class="section-description">We value our clients' feedback and strive to exceed their expectations in every project.</p>

    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="testimonial text-left">
                    <div class="flex items-left space-x-4">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/client_1.webp') ?>" 
                             alt="Client 1" class="w-24 h-auto rounded-full">
                        <div class="flex flex-col justify-center">
                            <h3 class="text-lg font-semibold uppercase mb-1">Jane Doe</h3>
                            <p class="text-sm text-gray-500 uppercase mt-0">CEO - Company A</p>
                        </div>
                    </div>
                    <p class="testimonial-message text-left mt-4 w-full md:w-4/5">
                        The team exceeded our expectations with their exceptional service and 
                        expertise. They delivered our project on time and with outstanding quality.
                        Highly recommended!
                    </p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="testimonial text-left">
                    <div class="flex items-left space-x-4">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/client_2.webp') ?>" 
                             alt="Client 1" class="w-24 h-auto rounded-full">
                        <div class="flex flex-col justify-center">
                            <h3 class="text-lg font-semibold uppercase mb-1">John Doe</h3>
                            <p class="text-sm text-gray-500 uppercase mt-0">CEO - Company B</p>
                        </div>
                    </div>
                    <p class="testimonial-message mt-4">
                        They provided top-notch solutions for our business needs. Their professionalism 
                        and attention to detail were impressive.  We're thrilled with the results and look 
                        forward to working with them again.
                    </p>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- how we work -->
<section id="how-we-work" class="text-center px-12 py-16">
    <h1 class="section-title uppercase text-secondary">How We Work</h1>
    <p class="section-description">
        We provide custom software solutions tailored to your project needs. Choose 
        from end-to-end full-cycle development or select specific services as needed.
    </p>

    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/how-we-work.png') ?>" 
        alt="how we work at tech novas" class="w-full rounded-md px-8"
    >
</section>

<!-- team -->
<section id="team" class="text-center px-12 py-16 bg-section-light">
    <h1 class="section-title uppercase text-secondary">Meet Our Team</h1>
    <p class="section-description">Get to Know the Brilliant Minds Behind Our Innovations</p>

    <div class="team-wrapper mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/team_1.jpg') ?>" 
                    alt="Team Member 1" class="w-full rounded-md"
                >
                <div class="pt-4 text-left">
                    <h3 class="text-xl font-semibold mb-2">Matt Willis</h3>
                    <p class="text-gray-400">Co-Founder CEO</p>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/team_2.jpg') ?>" 
                    alt="Team Member 2" class="w-full rounded-md"
                >
                <div class="pt-4 text-left">
                    <h3 class="text-xl font-semibold mb-2">Marla Gregg</h3>
                    <p class="text-gray-400">Co-Founder CTO</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-8 mt-8 md:mt-16">
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/team_3.jpg') ?>" 
                    alt="Team Member 1" class="w-full rounded-md"
                >
                <div class="pt-4 text-left">
                    <h3 class="text-xl font-semibold mb-2">Jay Smith</h3>
                    <p class="text-gray-400">Engineer</p>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/team_4.jpg') ?>" 
                    alt="Team Member 2" class="w-full rounded-md"
                >
                <div class="pt-4 text-left">
                    <h3 class="text-xl font-semibold mb-2">Olivia Miles</h3>
                    <p class="text-gray-400">UI/UX</p>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/team_5.jpg') ?>" 
                    alt="Team Member 1" class="w-full rounded-md"
                >
                <div class="pt-4 text-left">
                    <h3 class="text-xl font-semibold mb-2">Brandon Perry</h3>
                    <p class="text-gray-400">DevOps</p>
                </div>
            </div>
            <div class="w-full">
                <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/team_6.jpg') ?>" 
                    alt="Team Member 2" class="w-full rounded-md"
                >
                <div class="pt-4 text-left">
                    <h3 class="text-xl font-semibold mb-2">Vanessa Silk</h3>
                    <p class="text-gray-400">Content Writer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact us -->
<section id="contact-us" class="text-center px-12 py-16 bg-secondary">
    <h1 class="section-title uppercase text-white">Let's Talk</h1>
    <p class="section-description text-half-white">
        Get in touch with us for custom software solutions tailored to your needs.
    </p>

    <div class="contact-info-wrapper mt-16 text-left">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <div class="w-full mb-4">
                <?php echo do_shortcode('[wpforms id="62" title="false"]');?>
            </div>

            <div class="w-full mb-4">
                <h3 class="text-white">What's Next?</h3>
                <div class="relative contact-form-next-steps">
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="rounded-full connecting-dot pulse-animation"></div>
                        <p class="max-w-lg text-white text-lg">We will send a short email notifying you that we successfully 
                            received your request and started working on it.</p>
                    </div>
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="rounded-full connecting-dot pulse-animation"></div>
                        <p class="max-w-lg text-white text-lg">Our solution advisor analyzes your requirements and will 
                            reach back to you within 3 business days.</p>
                    </div>
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="rounded-full connecting-dot pulse-animation"></div>
                        <p class="max-w-lg text-white text-lg">We may sign an optional mutual NDA within 1-2 business days 
                            to make sure you get the highest confidentiality level.</p>
                    </div>
                    <div class="flex items-start space-x-4 mb-8">
                        <div class="rounded-full connecting-dot pulse-animation"></div>
                        <p class="max-w-lg text-white text-lg" style="margin-left: 1.25rem;">
                            Our business development manager presents you an initial project estimation, 
                            ballpark figures, or our project recommendations within approximately 3-5 days.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blogs -->
<section id="blogs" class="text-center px-12 py-16">
    <h1 class="section-title uppercase text-secondary">Latest news & articles</h1>
    <p class="section-description">Tech Innovations Shaping the Future: Insights and Trends</p>

    <div class="blogs-wrapper mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <div class="w-full mb-4">
                <div class="md:flex text-left md:space-x-8">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/blog_1.webp') ?>" 
                        alt="blog post" class="w-full md:w-52 md:h-48 topLeft-bottomright-border-radius">
                    <div class="flex flex-col justify-center mt-4 md:mt-0">
                        <h3 class="text-lg font-semibold uppercase mb-2">10 ways how to lorem ipsum glavrida dolor amet</h3>
                        <p class="text-sm text-gray-500 uppercase mt-0">INDUSTRY / JANUARY 2, 2024</p>
                    </div>
                </div>
            </div>

            <div class="w-full mb-4">
                <div class="md:flex text-left md:space-x-8">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/blog_2.webp') ?>" 
                        alt="blog post" class="w-full md:w-52 md:h-48 topLeft-bottomright-border-radius">
                    <div class="flex flex-col justify-center mt-4 md:mt-0">
                        <h3 class="text-lg font-semibold uppercase mb-2">Don’t underestimate the lorem ipsum dolor</h3>
                        <p class="text-sm text-gray-500 uppercase mt-0">INDUSTRY / JANUARY 2, 2024</p>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="md:flex text-left md:space-x-8">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/blog_3.webp') ?>" 
                        alt="blog post" class="w-full md:w-52 md:h-48 topLeft-bottomright-border-radius">
                    <div class="flex flex-col justify-center mt-4 md:mt-0">
                        <h3 class="text-lg font-semibold uppercase mb-2">Best new-season lorem ipsum dolor amet</h3>
                        <p class="text-sm text-gray-500 uppercase mt-0">INDUSTRY / JANUARY 2, 2024</p>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="md:flex text-left md:space-x-8">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/blog_4.webp') ?>" 
                        alt="blog post" class="w-full md:w-52 md:h-48 topLeft-bottomright-border-radius">
                    <div class="flex flex-col justify-center mt-4 md:mt-0">
                        <h3 class="text-lg font-semibold uppercase mb-2">What eleifend posuere tincidunt</h3>
                        <p class="text-sm text-gray-500 uppercase mt-0">INDUSTRY / JANUARY 2, 2024</p>
                    </div>
                </div>
            </div>
        </div>

        <button class="button-light-blue mt-16">Visit Our Blog</button>
    </div>
</section>

<!-- case studies -->
<section id="case-studies" class="text-center px-12 py-16 bg-section-light">
    <h1 class="section-title uppercase text-secondary">Case Studies</h1>
    <p class="section-description">
        See how we deliver end-to-end development or specific services to meet unique 
        project needs.
    </p>
    <div class="container mx-auto px-4 mt-16">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/case_study_1.png') ?>" 
                        alt="case-study" class="w-full h-64 object-cover"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Neon Lights</h3>
                    <p class="text-left mb-4">
                        This marketing communications app prepared for Arthur Guinness Day vitalized 
                        the conversation between the beloved beverage brand and its admirers.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>

            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/case_study_2.png') ?>" 
                        alt="case-study" class="w-full h-64 object-cover"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">VR Experience</h3>
                    <p class="text-left mb-4">
                        This marketing communications app prepared for Arthur Guinness Day vitalized 
                        the conversation between the beloved beverage brand and its admirers.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>

            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/case_study_3.png') ?>" 
                        alt="case-study" class="w-full h-64 object-cover"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Smart Living</h3>
                    <p class="text-left mb-4">
                        This marketing communications app prepared for Arthur Guinness Day vitalized 
                        the conversation between the beloved beverage brand and its admirers.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>

            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/case_study_4.png') ?>" 
                        alt="case-study" class="w-full h-64 object-cover"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Light Painting</h3>
                    <p class="text-left mb-4">
                        This marketing communications app prepared for Arthur Guinness Day vitalized 
                        the conversation between the beloved beverage brand and its admirers.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>

            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/case_study_5.png') ?>" 
                        alt="case-study" class="w-full h-64 object-cover"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Robo Seven</h3>
                    <p class="text-left mb-4">
                        This marketing communications app prepared for Arthur Guinness Day vitalized 
                        the conversation between the beloved beverage brand and its admirers.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>

            <div class="w-full">
                <div class="relative group">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2024/07/case_study_6.png') ?>" 
                        alt="case-study" class="w-full h-64 object-cover"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        style="border-radius: 40px 0px 40px 0px;"
                    >
                        <a href="#">
                            <i class="fas fa-plus bg-secondary text-white text-xl 
                            rounded-full px-3 py-2.5 font-light"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Futuristic Furniture</h3>
                    <p class="text-left mb-4">
                        This marketing communications app prepared for Arthur Guinness Day vitalized 
                        the conversation between the beloved beverage brand and its admirers.
                    </p>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

