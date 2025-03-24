<x-layout title="About Us">
  <section
    class="relative bg-cover bg-center bg-no-repeat h-50 flex items-center"
      style="background-image: url('storage/images/bcraw.jpg');">
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-green-700 bg-opacity-80"></div>
      <div class="container mx-auto text-left z-0 p-12">
          <h2 class="text-4xl md:text-5xl text-white font-bold">
              About Us
          </h2>
    </div>

    
  </section>

  <section class="flex items-center justify-center w-auto h-[500px] md:h-[500px] mx-auto">
    <div class="relative w-full h-full flex items-center justify-center">
        <img src="storage/images/aboutus-image.jpg" alt="no image" class="max-w-full max-h-full object-contain">
    </div>
  </section>
  <section class="px-10 pb-10">
    <h3 class="font-bold text-2xl text-green-800 tracking-wide my-2">
      Refamed Research Laboratory Corporation
    </h3>
    <div class="text-medium text-justify mb-2 text-gray-600 font-semibold">
      Refamed is a globally competitive, 100% Filipino-owned company engaged in manufacturing, marketing, and distribution of animal health and nutrition products since 1999. Refamed also boasts its achievement of attaining FDA cGMP (Certificate of Current Good Manufacturing Practice) and ISO 9001-2015 certification for quality manufacturing systems and processes.
      Aside from its excellent quality products, Refamed is also the exclusive distributor of Adisseo, a world leader in nutritional solutions and additives for animal feeds. Refamed and Adisseo work hand-in-hand to deliver safe and quality liquid methionine, vitamins, organic selenium, and probiotics to farms and feedmills. Its renowned products include Rhodimet AT88®, Microvit®, Selisseo®, and Alterion®. In addition, Refamed partners with Kemin (Toxfin Dry®), Canadian Bio-System (Phytomax® and Maxigen Plus®), and Advanced Enzymes (Refazyme®) for other specialty product portfolios.
    </div>
  
    <h3 class="font-bold text-2xl text-center text-green-800 tracking-wide mt-10">Our Vision</h3>
    <div class="text-medium text-center mb-2 text-gray-600 font-semibold">
      REFAMED is a leading innovative company in manufacturing and marketing animal health and nutrition products that foster the advancement and development of globally competitive farmers.
    </div>
  
    <h3 class="font-bold text-2xl text-center text-green-800 tracking-wide mt-10">Our Mission</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <div class="text-center">
        <i class="fas fa-users text-2xl text-green-800"></i>
        <h3 class="font-bold text-xl text-green-800 tracking-wide my-2">Stakeholders</h3>
        <div class="text-medium mb-2 text-gray-600 font-semibold">
          We will achieve profitability to sustain business.
        </div>
      </div>
      <div class="text-center">
        <i class="fas fa-shopping-bag text-2xl text-green-800"></i>
        <h3 class="font-bold text-xl text-green-800 tracking-wide my-2">Customer</h3>
        <div class="text-medium mb-2 text-gray-600 font-semibold">
          We create sustainable solutions to satisfy customer needs.
        </div>
      </div>
      
      
      <div class="text-center">
        <i class="fas fa-hand-holding-heart text-2xl text-green-800"></i>
        <h3 class="font-bold text-xl text-green-800 tracking-wide my-2">Corporate Social Responsibilities</h3>
        <div class="text-medium mb-2 text-gray-600 font-semibold pr-10">
          We will sustain the legacy of NQM in our commitment to contribute to various social corporate responsibility activities.
        </div>
      </div>
      <div class="text-center">
        <i class="fas fa-user text-2xl text-green-800"></i>
        <h3 class="font-bold text-xl text-green-800 tracking-wide my-2">Employees</h3>
        <div class="text-medium mb-2 text-gray-600 font-semibold">
          We provide employees opportunities for growth and quality of life.
        </div>
      </div>
    </div>

    <h3 class="font-bold text-2xl text-green-800 tracking-wide text-center mt-10">We are Certified Company</h3>
    <div class="text-medium text-center mb-2 text-gray-600 font-semibold">
      True to its vision, REFAMED, being a 100% Filipino owned company has passed these certifications making its products globally competitive.
    </div>
    <div class="p-7 rounded-lg flex flex-wrap justify-center items-center gap-7">
      <img src="storage/logos/bai_logo.png" alt="" class="h-20 w-22">
      <img src="storage/logos/fda.png" alt="" class="h-20 w-auto">
      <img src="storage/logos/iso-sgs.png" alt="" class="h-20 w-auto">
  </div>
  </section>

  
  <h1 class="bg-green-700 p-5 rounded text-white text-xl font-bold tracking-wide text-center mb-2">NQM FOUNDATION</h1>

    <!-- RECHECK ARTICLE -->
    <section id="productservice">
      <div class="px-10 text-meduim font-semibold text-gray-600 text-justify">
        REFAMED believes that giving back to the Filipino community is a responsibility of everybody. It is our commitment that we want to continue for a long time.      
      </div>
    
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-5 space-y-10 md:space-y-0 md:space-x-5 px-5 md:px-20">
        <!-- Card 1 -->
        <div class="rounded-lg shadow-lg border overflow-hidden relative">
          <img src="storage/refamedcares/img3.jpg" alt="REFAMED joins Philippine Poultry Show" class="h-60 w-full object-cover object-center rounded-t-lg">
          <!-- Black opacity overlay -->
          <div class="absolute inset-0 bg-gray-500 opacity-50"></div>
        </div>
        
        
        <!-- Card 1 -->
        <div class="rounded-lg shadow-lg border overflow-hidden relative">
          <img src="storage/refamedcares/img4.jpg" alt="REFAMED joins Philippine Poultry Show" class="h-60 w-full object-cover object-center rounded-t-lg">
          <!-- Black opacity overlay -->
          <div class="absolute inset-0 bg-gray-500 opacity-50"></div>
        </div>
  
         <!-- Card 1 -->
         <div class="rounded-lg shadow-lg border overflow-hidden relative">
          <img src="storage/refamedcares/img1.png" 
               alt="img" 
               class="h-60 w-full object-cover object-center rounded-t-lg">
          <!-- Black opacity overlay -->
          <div class="absolute inset-0 bg-gray-500 opacity-50"></div>
        </div>
        
        
      </div>
    </section>
</x-layout>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>