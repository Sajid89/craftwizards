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
    <p class="section-description">We provide a wide range of digital services, from UX/UI design to web development</p>
    <div class="container mx-auto px-4 mt-16">
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-8">
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/services_1.jpg" 
                    alt="Web Design & Development" class="w-full h-64 object-cover"
                    style="border-radius: 40px 0px 40px 0px;"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Web Design & Development</h3>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/services_2.jpg" 
                    alt="Digital Marketing" class="w-full h-64 object-cover"
                    style="border-radius: 40px 0px 40px 0px;"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Digital Marketing</h3>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/services_3.jpg" 
                    alt="E-Commerce" class="w-full h-64 object-cover"
                    style="border-radius: 40px 0px 40px 0px;"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">E-Commerce</h3>
                    <a href="#" class="text-secondary">Learn More <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/services_4.jpg" 
                    alt="Branding & Creative Services" class="w-full h-64 object-cover"
                    style="border-radius: 40px 0px 40px 0px;"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Branding & Creative Services</h3>
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
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_1.jpg" 
                    alt="Project 1" class="w-full object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Modern arts museum</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_2.jpg" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Minimalistic workspace</h3>
                    <p class="text-secondary">Digital Marketing</p>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_3.webp" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Red space</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>

            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_4.webp" 
                    alt="Project 1" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Modern arts museum</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_5.webp" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Minimalistic workspace</h3>
                    <p class="text-secondary">Digital Marketing</p>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_6.webp" 
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
    <div id="tab2" class="tab-content hidden">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_4.webp" 
                    alt="Project 1" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Modern arts museum</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_5.webp" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Minimalistic workspace</h3>
                    <p class="text-secondary">Digital Marketing</p>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_6.webp" 
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
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_1.jpg" 
                    alt="Project 1" class="w-full h-48 object-cover rounded-md"
                    style="height: 350px;"
                >
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Modern arts museum</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_2.jpg" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-sm">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Minimalistic workspace</h3>
                    <p class="text-secondary">Digital Marketing</p>
                </div>
            </div>
            <div class="w-full">
                <img src="https://digitalwizards.test/wp-content/uploads/2024/07/portfolio_3.webp" 
                    alt="Project 2" class="w-full h-48 object-cover rounded-sm">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Red space</h3>
                    <p class="text-secondary">Web Design</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

