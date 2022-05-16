<?php get_header(); ?>

    <!-- Main Content -->


    <div class="lg:grid lg:grid-cols-5 min-h-screen relative">
            <div class="lg:col-span-2"></div>
            <div class="lg:col-span-3 bg-white"></div>
            <div class="lg:absolute container mx-auto my-8 lg:my-0 flex-row w-5/6 lg:flex lg:h-3/5 lg:w-1/2 lg:translate-x-1/2 lg:translate-y-1/3 lg:shadow-xl ">
                <div class="lg:flex-row bg-orange-50 lg:h-full h-2/5 lg:w-2/5">
                    <div class="flex h-1/2 items-center py-8">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/thumbnail.jpg" alt="thumbnail" class="w-1/2 lg:w-1/2 h-auto mx-auto rounded-full">
                    </div>
                    <div class="h-1/2 items-center">
                        <div class="w-min mx-auto">
                            <h1 class="text-xl pb-6 md:text-2xl lg:text-3xl font-bold lg:pb-8">Tony<br>Kern</h1>
                        </div>
                        <div class="pb-4 border-t-2 border-b-0 border-x-0 mx-auto w-1/6 h-min lg:p-y-8 border-stone-800">
                        </div>
                        <div class="text-center py-4 lg:py-6">
                            <p class="tracking-widerest">WEB DEVELOPER</p>
                        </div>
                        <div class="flex items-center lg:w-full text-center">
                            <div class="flex mx-auto pt-4 pb-6 items-center space-x-4 place-self-end">
                                <a href="mailto:tony.kern.dev@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-stone-800" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                  </svg></a>
                                <a href="https://www.linkedin.com/in/tony-kern-524227225/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="30" height="30"
                                    viewBox="0 0 30 30"
                                    style="fill:#292524;">
                                    <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path></svg>
                                </a>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="flex-row lg:pl-12 bg-white text-center lg:text-left items-center lg:w-3/5">
                    <p class="text-3xl pt-8 pb-4 lg:pb-0 lg:w-min lg:my-6 md:text-6xl lg:text-8xl font-bold">Hello</p>
                    <p class="lg:w-fit font-bold md:text-xl">I'm Tony. I build websites.</p>
                    <div class="flex my-8 w-min mx-auto lg:ml-0 space-x-2 lg:space-x-4">
                        <a href="<?php echo get_permalink(21); ?>"><button class="text-center w-28 lg:w-36 border-solid border rounded-3xl lg:px-4 py-1 font-semibold border-yellow-700 bg-yellow-700 text-white hover:text-stone-800 hover:bg-white">RESUME</button></a>
						<a href="<?php echo get_permalink(24); ?>"><button href="<?php echo get_permalink(24); ?>" class="text-center w-28 lg:w-36 border-solid border rounded-3xl lg:px-4 py-1 font-semibold border-yellow-700 hover:border-yellow-700 hover:bg-yellow-700 hover:text-white">PROJECTS</button></a>
                    </div>
                    <div class="flex-row text-sm px-8 md:px-16 lg:px-0 lg:text-md font-medium lg:w-4/5 lg:space-y-4 lg:leading-6">
                        <div class="flex-row">
                        <p>I'm a passionate Web Developer that enjoys building cool things. I specialize in building clean and responsive websites. I'm always ready to take on the next project, and I enjoy solving any puzzles that I may encounter during that project.</p>
                        </div>
                        <br class="lg:hidden">
                        <div>
                        <p class="pb-8">If you have a project I could help you out with or just want to say hello, you can contact me <a href="mailto:tony.kern.dev@gmail.com"><span class="font-bold">here</span></a> or send me a message via the contacts page.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

<?php get_footer(); ?>