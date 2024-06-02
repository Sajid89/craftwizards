<div class="fixed md:flex-wrap top-12 left-0 w-full z-50 bg-white md:relative 
    md:bg-transparent px-4 py-2 flex items-center justify-between text-gray-600 
    md:text-white shadow lg:shadow-none"
>
    <div class="md:hidden block">
        <button id="menu-toggle" data-open="false">
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" 
                stroke="currentColor" 
                class="w-8 h-8 text-gray-600 md:text-white"
            >
                <path stroke-linecap="round" stroke-linejoin="round" 
                    stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <div class="order-2 md:order-1">
        <img class="w-12 h-12 mx-auto md:mx-0 visibility hidden md:visible" 
            src="<?php echo get_theme_mod( 'hero_logo', '' ); ?>" 
            alt="Company Logo"
        >
    </div>
    <nav id="main-menu" class="absolute top-0 left-0 h-screen w-64 bg-white flex flex-col items-center 
            overflow-auto hidden md:relative md:w-auto md:h-auto md:flex-grow md:block md:bg-transparent order-1 md:order-2 shadow-right md:shadow-none">
            <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'main-menu', 
                    'container' => false, 
                    'items_wrap' => '<ul id="%1$s" class="%2$s flex flex-col md:flex-row justify-center 
                        text-lg text-gray-600 md:text-white">%3$s</ul>',
                    'before' => '<li>',
                    'after' => '</li>',
                ) ); 
            ?>
    </nav>
    <div class="flex items-center space-x-2 order-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
            viewBox="0 0 24 24" stroke="currentColor" 
            class="w-8 h-8 text-primary"
        >
            <path stroke-linecap="round" stroke-linejoin="round" 
                stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        <span>
            <a href="#">Contact Us</a>
        </span>
    </div>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var isOpen = this.getAttribute('data-open') === 'true';
        this.setAttribute('data-open', !isOpen);

        var menu = document.getElementById('main-menu');
        // menu.style.display = menu.style.display === 'none' ? 'flex' : 'none';
        if (isOpen) {
            // If the menu is currently open, hide it
            menu.classList.add('hidden');
            menu.classList.remove('flex');
        } else {
            // If the menu is currently hidden, show it
            menu.classList.remove('hidden');
            menu.classList.add('flex');
        }
    });
</script>