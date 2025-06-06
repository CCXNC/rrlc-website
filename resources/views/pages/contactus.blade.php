<x-layout title="Contact Us">
    <section
        class="relative bg-cover bg-center bg-no-repeat h-50 flex items-center"
        style="background-image: url('storage/images/bcraw.jpg');">
       <!-- Dark Overlay -->
       <div class="absolute inset-0 bg-green-700 bg-opacity-80"></div>
        <div class="container mx-auto text-left z-0 p-12">
            <h2 class="text-4xl md:text-5xl text-white font-bold">
                Contact Us
            </h2>
           
        </div>
    </section>
   
    <!-- Section Contact Us -->
    <section id="topgridcard" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 md:gap-y-5 justify-items-center">

        <!-- Card 1 -->
        <div class="p-5 m-6 md:border-slate-200 text-gray-600">
            <h3 class="text-xl font-bold uppercase text-green-800">CONTACT INFO</h3>
            <p class="mt-4 leading-loose text-medium">
                <span class="far fa-building"></span> Blaine Industrial Complex Brgy.14 Kamias Road Governor`s Drive Bo. Bancal Carmona, Cavite, Philippines 4116
            </p>
            <p class="mt-2 leading-loose text-medium">
                <span class="fas fa-mobile-alt"></span> (02) 8539-8541
            </p>
            <p class="mt-2 leading-loose text-medium">
                <span class="far fa-envelope"></span> info@refamed.com.ph
            </p>
            <p class="mt-2 leading-loose text-medium">
                <span class="fas fa-globe"></span> www.refamed.com.ph
            </p>
        </div>

        <!-- Card 2 (Equal Span for Form & Image) -->
        <div class="p-5 m-5 md:border-slate-200 text-left text-gray-600 md:col-span-2 relative grid grid-cols-1 md:grid-cols-2 items-center min-h-[350px] bg-cover bg-right bg-no-repeat rounded-lg shadow-lg">
            
            <!-- Left Side (Text & Form) - Spans 1 Column -->
            <div class="p-6 w-full mx-auto">
                <h3 class="text-xl font-bold uppercase text-green-800">SEND US A MESSAGE</h3>
                <p class="mt-4 text-sm">
                    To request for quotation and inquiries, or to set an appointment. Everything you want to know about us, send through this form. We promise to e-mail you back ASAP.
                </p>
                <div class="mt-5 space-y-3">
                    <x-inputs.text id="name" name="name" placeholder="Name" class="w-full" />
                    <x-inputs.text id="email" name="email" placeholder="Email" class="w-full" />
                    <x-inputs.text id="subject" name="subject" placeholder="Subject" class="w-full" />
                    <x-inputs.text-area id="description" name="description" placeholder="Message" class="w-full" />
                    <button class="bg-green-700 text-white px-5 py-2 rounded hover:bg-green-800">Send</button>
                </div>
            </div>

            <!-- Right Side (Image Background) - Spans 1 Column -->
            <div class="w-full h-full bg-cover bg-right bg-no-repeat rounded-r-lg"
                style="background-image: url('storage/images/employee1.png'); background-size: contain; background-position: center right;">
            </div>

        </div>


    </section>
    

    <!-- Section Top body Grid Card -->
    <section id="topgridcard" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 md:gap-y-5 justify-items-center bg-green-700 text-white">

        <!-- Card 1 -->
        
        <div class="md:border-slate-200 flex flex-col items-left text-left p-5">

            <!-- Title -->
            <h3 class="px-12 font-bold text-lg">ABOUT REFAMED</h3>
        
            <!-- Logo -->
            <div class="w-auto h-28 px-12">
                <img src="storage/logos/glow_rrlc_logo.png" alt="Refamed Logo" class="h-full w-auto">
            </div>
        
            <!-- Description -->
            <p class="text-justify text-sm px-10">
                Refamed is a globally competitive company engaged in manufacturing, marketing, and distribution of animal health and nutrition products since 1999.
                Refamed also boasts its achievement of attaining FDA cGMP (Certificate of Current Good Manufacturing Practice) and ISO 9001-2015 certification for quality manufacturing systems and processes.
            </p>    
        
        </div>
      
        <!-- Subscribe Now Section -->
        <div class="p-10 text-center flex flex-col items-center">
            <h3 class="text-lg font-bold mb-4">Subscribe Now</h3>
            <p class="text-sm">Subscribe to our newsletter to get notified about our articles and exclusive offers!</p>

            <!-- Subscribe Button -->
            <a href="https://snowqueencel.beehiiv.com/subscribe" target="_blank" 
            class="mt-4 px-6 py-2 bg-green-800 hover:bg-green-900 text-white font-semibold rounded flex items-center justify-center space-x-2 w-40">
                <span>Subscribe</span>
                <span>🔔</span>
            </a>

            <!-- Social Media Icons -->
            <div class="flex justify-left items-center mt-5 space-x-3">
                <!-- Facebook Icon -->
                <a href="https://www.facebook.com" target="_blank" 
                class="w-10 h-10 bg-blue-600 text-white flex items-center justify-center rounded-full text-2xl hover:bg-blue-800">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- LinkedIn Icon -->
                <a href="https://www.linkedin.com" target="_blank" 
                class="w-10 h-10 bg-blue-600 text-white flex items-center justify-center rounded-full text-2xl hover:bg-blue-800">
                <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
            

      
    </section>
          <!-- Copyright Section -->
          <div class="bg-green-800 text-white text-center text-sm py-4">
            Copyright &copy; 2025 by Refamed Researched Laboratory Corporation Since 1999. All rights reserved
        </div>
</x-layout> 