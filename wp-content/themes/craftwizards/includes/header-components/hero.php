<div class="mx-auto px-4">
    <div class="flex flex-col items-center justify-center h-[45vh] sm:h-screen 
        text-center animated-bg relative mt-14 sm:mt-0">
        <div id="particles-js"></div>
        <div class="z-10 flex flex-col items-center">
            <?php 
                $hero_logo = get_theme_mod('hero_logo', ''); 
                if (!empty($hero_logo)): ?>
                    <img class="mb-8 logo" 
                        src="<?php echo $hero_logo; ?>" 
                        alt="Company Logo"
                        style="width: 10rem;"
                    >
            <?php endif; ?>
            <h1 class="section-heading text-4xl md:text-[6vw] font-extrabold uppercase 
                leading-none text-white mt-8">
                <?php echo get_theme_mod( 'hero_heading', '' ); ?>
            </h1>
            <div class="mt-2 text-lg flex justify-center text-white size-11 md:size-14">
                <?php $hero_subheading1 = get_theme_mod('hero_subheading1', ''); ?>
                <?php $hero_subheading2 = get_theme_mod('hero_subheading2', ''); ?>
                <?php $hero_subheading3 = get_theme_mod('hero_subheading3', ''); ?>
                <div class="flex items-center uppercase">
                    <?php echo $hero_subheading1; ?>
                </div>
                <?php if (!empty($hero_subheading1) && !empty($hero_subheading2)): ?>
                    <div class="flex items-center">
                        <div class="w-2 h-2 rounded-full bg-primary mx-4"></div>
                    </div>
                <?php endif; ?>
                <div class="flex items-center uppercase">
                    <?php echo $hero_subheading2; ?>
                </div>
                <?php if (!empty($hero_subheading2) && !empty($hero_subheading3)): ?>
                    <div class="flex items-center">
                        <div class="w-2 h-2 rounded-full bg-primary mx-4"></div>
                    </div>
                <?php endif; ?>
                <div class="flex items-center uppercase <?php echo empty($hero_subheading2) ? 'ml-4' : ''; ?>">
                    <?php echo $hero_subheading3; ?>
                </div>
            </div>
        </div>

        <?php 
        $menu_location = 'main-menu';
        $menu_locations = get_nav_menu_locations();
        $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
        $menu_name = (isset($menu_object->name) ? $menu_object->name : '');

        if ($menu_name == 'Main' || $menu_name == 'main') {
            get_template_part('includes/header-components/nav');
        }
    ?>
    </div>

    
</div>