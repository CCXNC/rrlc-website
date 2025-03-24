<x-layout title="Home Page">
    
    <!-- SLIDER IMAGE SECTION -->
    <section class="w-full h-[250px] md:h-[400px] lg:h-[425px] !mt-0 mb-2 !pt-0 !pb-0 !bg-transparent">
        <div 
            x-data="{ 
                activeSlide: 0, 
                slides: ['storage/newsarticle/header1.jpg', 'storage/newsarticle/article22.jpg'], 
                autoSlide() { setInterval(() => { this.next(); }, 5000); }, 
                next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length; }, 
                prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length; } 
            }" 
            x-init="autoSlide()" 
            class="relative w-full h-full mx-auto overflow-hidden !bg-transparent"
        >
            <!-- Slider Container -->
            <div class="relative w-full h-full flex items-center justify-center">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index" class="absolute inset-0 flex items-center justify-center transition-opacity duration-700">
                        <img :src="slide" class="w-full h-full object-cover" alt="Carousel Slide">
                    </div>
                </template>
            </div>

            <!-- Previous Button -->
            <button @click="prev" 
                class="absolute top-1/2 left-2 md:left-4 transform -translate-y-1/2 bg-gray-600 bg-opacity-50 text-white p-3 md:p-4 rounded-full hover:bg-gray-800 transition">
                &#10094;
            </button>

            <!-- Next Button -->
            <button @click="next" 
                class="absolute top-1/2 right-2 md:right-4 transform -translate-y-1/2 bg-gray-600 bg-opacity-50 text-white p-3 md:p-4 rounded-full hover:bg-gray-800 transition">
                &#10095;
            </button>
        </div>
    </section>

    <!-- FEATURED PRODUCTS SECTION -->
    <section class="w-full h-full bg-green-700 text-white flex flex-col justify-center items-center py-10">
        <h2 class="text-3xl font-bold font-poppins text-center mb-8">FEATURED PRODUCTS</h2>
        <div 
            x-data="{ 
                activeSlide: 0, 
                slides: [
                    [ { img: 'storage/ourproducts/wsp/amoxin.png', name: 'AMOXIN', link: '{{route('animalhealth')}}' }, 
                    { img: 'storage/ourproducts/wsp/biotrol.png', name: 'BIOTROL', link: '{{route('animalhealth')}}' }, 
                    { img: 'storage/ourproducts/wsp/cetrolyte.png', name: 'CETROLYTE', link: '{{route('animalhealth')}}' } 
                    ],
                    [ { img: 'storage/ourproducts/wsp/REVITASOL.png', name: 'REVITASOL', link: '{{route('animalhealth')}}' }, 
                    { img: 'storage/ourproducts/wsp/PYRIQUIN.png', name: 'PYRIQUIN', link: '{{route('animalhealth')}}' }, 
                    { img: 'storage/ourproducts/wsp/STRESOL.png', name: 'STRESOL', link: '{{route('animalhealth')}}' } 
                    ]
                ],
                next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length; }, 
                prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length; }
            }" 
            class="relative flex items-center justify-center w-full overflow-hidden px-4"
        >
            <!-- Previous Button -->
            <button @click="prev" 
                class="absolute left-4 bg-white text-green-800 p-4 rounded-full opacity-80 hover:bg-gray-300 z-10">
                &#10094;
            </button>

            <!-- Product Slides -->
            <div class="w-full flex justify-center">
                <template x-for="(slideGroup, index) in slides" :key="index">
                    <div x-show="activeSlide === index" class="flex flex-wrap justify-center gap-20 md:gap-36 items-center"> 
                        <template x-for="(slide, subIndex) in slideGroup" :key="subIndex">
                            <div class="flex flex-col items-center justify-center">
                                <a :href="slide.link" class="sm:w-64 sm:h-64 w-48 h-48 bg-white rounded-full flex items-center justify-center shadow-lg"> 
                                    <img :src="slide.img" class="sm:w-64 sm:h-64 w-40 h-40 object-contain" alt="Product"> 
                                </a>
                                <p class="mt-6 mb-5 text-center font-poppins font-bold text-xl text-white">
                                    <a :href="slide.link" x-text="slide.name" class="hover:underline"></a>
                                </p>
                            </div>
                        </template>
                    </div>
                </template>
            </div>

            <!-- Next Button -->
            <button @click="next" 
                class="absolute right-4 bg-white text-green-800 p-4 rounded-full opacity-80 hover:bg-gray-300 z-10">
                &#10095;
            </button>
        </div>
    </section>


    <!-- Page Banner Head Section

    <section  class=" bg-gray-200 w-full flex justify-center ">
    
        <div style="background-image: url('storage/images/cetrolyte.png');" class="bg-[size:70%] bg-no-repeat size-60 md:size-80 flex-shrink-0"></div>
    
        <div class=" my-5 p-3 max-w-2xl">
            <h1 class="font-bold text-3xl md:text-5xl">Selling is what we do best at Lorem Ipsum</h1>
            <p class="mt-3 tex-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque ut, veniam reprehenderit ducimus libero.</p>
            <button class="px-4 py-2 border-2 text-green-700 font-bold border-green-700 rounded-lg w-full m-3 hover:bg-green-700 mt-7 md:mt-14 hover:text-white hover:border-green-700">Explore</button>
        </div>
        
    </section>-->

    <!-- About RRLC & Video -->
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

    <!-- Article Section -->
    <section id="productservice">
        <h1 class="p-4 font-poppins font-bold text-center text-3xl text-green-800">Recent Articles</h1>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-3 space-y-10 md:space-y-0 md:space-x-5 p-4">
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

     <!-- Careers -->
     <section id="topgridcard" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 md:gap-y-5 justify-items-center">

        <!-- Card 1 -->
            <div class="p-4 pb-10 md:border-slate-200 ">
               <img src="storage/images/employees.jpg" class="w-[500px]" alt="">
            </div>
        <!-- Card 2 -->
        <div class="p-4 pb-10 md:border-slate-200 ">
            <p class="text-justify p-5"><h3 class="font-bold text-2xl tracking-wide my-2 text-green-700">Careers at Refamed</h3>
                Join our team of engaged and purpose-driven employees, and learn how you can make a difference at Refamed.            
            </p>    

            <div class="px-6 py-4 border-t text-right">
                <a href="{{route('careers')}}"class="border-2 border-green-700 text-green-700 font-bold px-5 py-2 hover:bg-green-700 rounded hover:text-white"> Read About Careers</a>
            </div>
        </div>
    
    </section>

    
</x-layout> 

