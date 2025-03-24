<x-layout title="Products & Services">

  <!-- HEADER IMAGE -->
  <section
    class="relative bg-cover bg-center bg-no-repeat h-50 flex items-center"
      style="background-image: url('storage/images/bcraw.jpg');">
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-green-700 bg-opacity-80"></div>
      <div class="container mx-auto text-left z-0 p-12">
          <h2 class="text-4xl md:text-5xl text-white font-bold">
              Products
          </h2>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section id="products">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 my-5 md:px-10">
      
        <!-- Sidebar -->
        <div class="md:col-span-1 rounded-lg shadow-lg border p-5">
            <h3 class="font-poppins font-bold text-green-700 mb-3">REFAMED RAW MATERIALS</h3>
            <ul class="space-y-2 text-sm font-bold font-poppins text-gray-700">
                <li class="border p-2 rounded-md transition duration-100 bg-green-700 text-white">
                    <a href="/article/3" class="block">ANTIBIOTICS</a>
                </li>
                <li class="border p-2 rounded-md transition duration-100 hover:bg-green-700 hover:text-white">
                    <a href="/article/4" class="block">VITAMINS</a>
                </li>
                <li class="border p-2 rounded-md transition duration-100 hover:bg-green-700 hover:text-white">
                    <a href="/article/5" class="block">MINERALS AND FEED ADDITIVES</a>
                </li>
                <li class="border p-2 rounded-md transition duration-100 hover:bg-green-700 hover:text-white">
                    <a href="/article/5" class="block">EXCIPIENTS</a>
                </li>
                <li class="border p-2 rounded-md transition duration-100 hover:bg-green-700 hover:text-white">
                    <a href="/article/5" class="block">DISINFECTANTS</a>
                </li>
            </ul>
        </div>
        
        <!-- Product Grid -->
        <div class="md:col-span-3">
          <section id="productservice">
            <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-6 p-6">
              <div>
                <img src="/storage/ourproducts/antibioticraw1.jpg" class="w-auto h-auto" alt="">
              </div>
              <div class="grid grid-cols-1 gap-6 md:grid-cols-2 text-left md:text-left">
                <div class="">
                  <ul class="list-disc pl-5 space-y-2">
                    <li>Amoxicillin THD Compacted/Powder</li>
                    <li>Amoxicillin THD Powder C Feed Grade</li>
                    <li>Amprolium HCl</li>
                    <li>Attapulgite Pharmasorb</li>
                    <li>Chlortetracycline HCl</li>
                    <li>Dimetridazole BP98</li>
                    <li>Doxycycline HCl</li>
                    <li>Enrofloxacin HCl / Base</li>
                    <li>Florphenicol</li>
                    <li>Halquinol</li>
                    <li>Levamisole HCl</li>
                    <li>Neomycin Sulfate Feed Grade</li>
                    
                  </ul>
                </div>
                <div class="">
                  <ul class="list-disc pl-5 space-y-2">
                    <li>Norfloxacin Base USP29</li>
                    <li>Norfloxacin HCl 98.5% USP</li>
                    <li>Oxytetracycline HCl</li>
                    <li>Robenidine HCl</li>
                    <li>Sodium Sulfadiazine USP24</li>
                    <li>Sulfadiazine Base</li>
                    <li>Sulfamethoxazole</li>
                    <li>Tiamulin Fumarate</li>
                    <li>Trimethoprim BP98</li>
                    <li>Tylosin Phosphate</li>
                    <li>Tylosin Tartrate</li>
                    
                  </ul>
                </div>
              </div>
            </div>
          
          </section>
        </div>

      </div>
  </section>


</x-layout>