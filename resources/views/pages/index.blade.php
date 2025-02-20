<x-layout title="Home Page">

    <!-- SLIDER 
    <section id="" class="w-full">
        <div x-data="{ activeSlide: 0, slides: ['slide1.jpg', 'slide2.jpg', 'slide3.jpg'], autoSlide() { setInterval(() => { this.next(); }, 3000); }, next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length; }, prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length; } }" x-init="autoSlide()" class="relative w-full max-w-2xl mx-auto overflow-hidden rounded-lg shadow-lg">
            <div class="relative w-full h-64">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index" class="absolute inset-0 flex items-center justify-center transition-opacity duration-700">
                        <img :src="slide" class="w-full h-full object-cover" alt="Carousel Slide">
                    </div>
                </template>
            </div>
            
            <button @click="prev" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                &#10094;
            </button>
            <button @click="next" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                &#10095;
            </button>
            
            <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index" class="w-3 h-3 rounded-full" :class="activeSlide === index ? 'bg-white' : 'bg-gray-500'"></button>
                </template>
            </div>
        </div>

    </section>
    -->
    
    <!-- Page Banner Head Section-->
   
    <section  class=" bg-gray-200 w-full flex justify-center ">
        <!-- Banner Image -->
        <div style="background-image: url('storage/images/cetrolyte.png');" class="bg-[size:70%] bg-no-repeat size-60 md:size-80 flex-shrink-0"></div>
        <!-- Banner Text and Button -->
         <div class=" my-5 p-3 max-w-2xl">
            <h1 class="font-bold text-3xl md:text-5xl">Selling is what we do best at Lorem Ipsum</h1>
            <p class="mt-3 tex-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque ut, veniam reprehenderit ducimus libero.</p>
            <button class="px-4 py-2 border-2 text-green-700 font-bold border-green-700 rounded-lg w-full m-3 hover:bg-green-700 mt-7 md:mt-14 hover:text-white hover:border-green-700">Explore</button>
         </div>
        
    </section>

    <!-- Section Top body Grid Card -->
    <section id="topgridcard" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 md:gap-y-5 justify-items-center">

        <!-- Card 1 -->
            <div class="p-4 pb-10 md:border-slate-200 ">
                <video class="w-full h-auto rounded-lg" controls>
                    <source src="storage/video/video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        <!-- Card 2 -->
        <div class="p-4 pb-10 md:border-slate-200 ">
            <p class="text-justify p-5"><h3 class="font-bold text-2xl tracking-wide my-2">Refamed Research Laboratory Corporation</h3>
                is a globally competitive, Company engaged in manufacturing, Marketing, and Distribution of Animal health and Nutrition products since 1999. Refamed also boasts its achievement of attaining FDA cGMP (Certificate of Current Good Manufacturing Practice) and ISO 9001-2015 certification for quality manufacturing systems and processes.                
            </p>    
            <div class="px-6 py-4 border-t text-right">
                <button class="border-2 border-green-700 text-green-700 font-bold px-5 py-2 hover:bg-green-700 rounded hover:text-white"> Read More...</button>
            </div>
        </div>
    
    </section>

         <!-- Technology Section -->
         <section id="technology" class="flex justify-center px-4">
            <div class="bg-green-700 w-full text-center text-white p-6 rounded-lg">
                <!-- Card 1 -->
                <div class="p-4 pb-10 border-slate-200">
                    <h3 class="text-2xl font-bold my-2 tracking-wide">We are Certified Company</h3>
                    <p class="mb-4">True to its vision, REFAMED, being a 100% Filipino owned company has passed these certifications making its products globally competitive.</p>
                    <div class="bg-white p-7 rounded-lg flex flex-wrap justify-center items-center gap-7">
                        <img src="storage/logos/bai_logo.png" alt="" class="h-20 w-22">
                        <img src="storage/logos/fda.png" alt="" class="h-20 w-auto">
                        <img src="storage/logos/iso-sgs.png" alt="" class="h-20 w-auto">
                    </div>
                </div>
            </div>
        </section>
        

        <!-- Section Product and Services -->
        <section id="productservice">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-14 space-y-10 md:space-y-0 md:space-x-5 px-10 md:px-20">
                <!-- Card 1 -->
                <div class="rounded-lg shadow-lg border">
                    <img src="storage/images/images/111.jpg" alt="REFAMED joins Philippine Poultry Show" class="bg-cover h-60 w-full rounded-t-lg">
                    <div class="p-3">
                        <h3 class="text-xl font-semibold">REFAMED joins 2019 Philippine Poultry Show</h3>
                        <p class="text-gray-700 text-sm">REFAMED Research Laboratory had joined the biggest and the largest poultry event in the Philippines. The Philippine Poultry Show and Fiestag 2019 was held last August 23-25, 2019, at the SMX Convention Center, Mall of Asia, Pasay City.</p>
                        <button class="border border-orange-600 hover:bg-orange-100 bg-white px-4 py-1 rounded-lg mx-5 my-7">See more</button>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="rounded-lg shadow-lg border">
                    <img src="storage/images/images/222.jpg" alt="REFAMED joins Philippine Poultry Show" class="bg-cover h-60 w-full rounded-t-lg">
                    <div class="p-3">
                        <h3 class="text-xl font-semibold">REFAMED joins 2024 Philippine Poultry Show</h3>
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium molestias impedit iure maiores, similique esse consectetur, hic labore itaque omnis delectus? Commodi, provident culpa ut facilis libero voluptas tempora dolor exercitationem eius, numquam eum quas inventore voluptatum quasi cupiditate!</p>
                        <button class="border border-orange-600 hover:bg-orange-100 bg-white px-4 py-1 rounded-lg mx-5 my-7">See more</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="rounded-lg shadow-lg border">
                    <img src="storage/images/images/333.jpg" alt="REFAMED joins Philippine Poultry Show" class="bg-cover h-60 w-full rounded-t-lg">
                    <div class="p-3">
                        <h3 class="text-xl font-semibold">REFAMED joins 2025 Philippine Poultry Show</h3>
                        <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor unde quibusdam omnis. Voluptas nulla accusamus, quae fugiat eligendi iure, sunt pariatur dolores earum eum sed cum quasi facilis ipsam, labore illum. Natus, incidunt voluptatibus. Voluptatum et voluptas consectetur. Odio tempora odit deserunt perferendis nesciunt quod inventore reiciendis molestias ipsam aliquid.</p>
                        <button class="border border-orange-600 hover:bg-orange-100 bg-white px-4 py-1 rounded-lg mx-5 my-7">See more</button>
                    </div>
                </div>
            </div>

        </section>

</x-layout> 

<!-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> -->