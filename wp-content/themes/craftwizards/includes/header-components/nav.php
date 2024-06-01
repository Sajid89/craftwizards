<div class="w-full bg-transparent px-4 py-2 flex items-center justify-between text-white">
    <div>
        <img class="w-12 h-12" 
            src="<?php echo get_theme_mod( 'hero_logo', '' ); ?>" 
            alt="Company Logo"
        >
    </div>
    <nav class="flex-grow">
        <?php 
            wp_nav_menu( array( 
                'theme_location' => 'main-menu', 
                'container' => false, 
                'items_wrap' => '<ul id="%1$s" class="%2$s flex justify-center 
                    text-lg text-white">%3$s</ul>',
                'before' => '<li>',
                'after' => '</li>',
            ) ); 
        ?>
    </nav>
    <div class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-primary">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        <span>
            <a href="#" class="text-white">Contact Us</a>
        </span>
    </div>
</div>