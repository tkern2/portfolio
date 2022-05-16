<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <title>tony.kern</title>
</head>
<body class="font-monts bg-orange-100 text-stone-700 min-h-full">
    <!-- Navbar -->
    <nav class="w-full bg-white">
        <div class="container flex lg:h-32 justify-between items-center mx-auto py-4">
            <div class="container md:flex items-center space-x-2">            
                <div>
                    <a href="<?php echo site_url(); ?>" class="md:flex items-center space-x-2">
                        <div class="flex items-center pl-4">
                            <div class="h-4 w-4 bg-neutral-600 rounded-sm"></div>
                            <p class="font-bold text-2xl text-stone-600 pl-2">Tony Kern</p>
                        </div>
                        
                        <p class="hidden md:block font-bold">|</p>
                        <p class="pl-2">WEB DEVELOPER</p>
                    </a>
                </div>
            </div>

            <!-- Main menu-->

            <div class="container lg:flex items-center space-x-4 text-sm lg:text-md justify-end hidden">
                <a href="<?php echo site_url(); ?>" class="hover:font-bold">ABOUT ME</a>
                <p class="font-bold">|</p>
                <a href="<?php echo get_permalink(21); ?>" class="hover:font-bold">RESUME</a>
                <p class="font-bold">|</p>
                <a href="<?php echo get_permalink(24); ?>" class="hover:font-bold">PROJECTS</a>
                <p class="font-bold">|</p>
                <a href="<?php echo get_permalink(48); ?>" class="hover:font-bold">CONTACT</a>
            </div>

            <!--Mobile menu button-->

            <button aria-label="Drop Down Menu" class="menu-button mr-4 flex flex-col items-end justify-center w-12 h-6 transition ease-out active:outline-none focus:outline-none lg:hidden z-99">
                <div class="w-5/12 h-0.5 transform bg-stone-600 mb-2"></div>
                <div class="w-2/3 h-0.5 transform bg-stone-600"></div>
            </button>

        </div>

            <!--Mobile menu-->
            <div class="mobile-menu hidden md:text-lg h-auto bg-white pl-4 pb-4 transition-all duration-500">
                <ul class="">
                    <li class="py-2"><a href="<?php echo site_url() ?>" class="hover:font-bold">ABOUT ME</a></li>
                    <li class="py-2"><a href="<?php echo get_permalink(21); ?>" class="hover:font-bold">RESUME</a></li>
                    <li class="py-2"><a href="<?php echo get_permalink(24); ?>" class="hover:font-bold">PROJECTS</a></li>
                    <li class="py-2"><a href="<?php echo get_permalink(48); ?>" class="hover:font-bold">CONTACT</a></li>
                </ul>
            </div>
    </nav>