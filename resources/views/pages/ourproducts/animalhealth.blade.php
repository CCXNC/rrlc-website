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
        <div class="md:col-span-1 rounded-lg shadow-lg border p-5 mt-5">
            <h3 class="font-poppins font-bold text-lg text-green-700 mb-3">ANIMAL HEALTH PRODUCTS</h3>
            <ul class="space-y-2 text-sm font-bold font-poppins text-gray-700">
                <li class="border p-2 rounded-md transition duration-100 bg-green-700 text-white">
                    <a href="/article/3" class="block">Water Soluble Products</a>
                </li>
                <li class="border p-2 rounded-md transition duration-100 hover:bg-green-700 hover:text-white">
                    <a href="/article/4" class="block">Oral Solution</a>
                </li>
                <li class="border p-2 rounded-md transition duration-100 hover:bg-green-700 hover:text-white">
                    <a href="/article/5" class="block">Disinfectant</a>
                </li>
                <li class="border p-2 rounded-md transition duration-100 hover:bg-green-700 hover:text-white">
                    <a href="/article/5" class="block">Nutraceuticals</a>
                </li>
                <li class="border p-2 rounded-md transition duration-100 hover:bg-green-700 hover:text-white">
                    <a href="/article/5" class="block">Antibiotic Premixes</a>
                </li>
            </ul>
        </div>
        
        <!-- Product Grid -->
        <div class="md:col-span-3">
          <section id="productservice">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
      
              <!-- Card -->
              <a href="{{route('showproduct')}}">
                <div class="flex flex-col items-center bg-white shadow-lg rounded-lg overflow-hidden group transition-all duration-300 hover:bg-green-700">
                  <div class="w-full bg-white transition-transform duration-300 hover:scale-105">
                      <img src="storage/ourproducts/wsp/amoxin.jpg" alt="Onion Minced" 
                          class="w-full h-auto object-cover">
                  </div>
                  <div class="relative p-3 text-center w-full group-hover:bg-green-700 transition-all duration-300">
                      <h3 class="text-lg font-bold text-green-700 group-hover:text-white  rounded">
                          Amoxin
                      </h3>
                  </div>
                </div>
              </a>

              <!-- Card -->
              <div class="flex flex-col items-center bg-white shadow-lg rounded-lg overflow-hidden group transition-all duration-300 hover:bg-green-700">
                <div class="w-full bg-white ransition-transform duration-300 hover:scale-105">
                    <img src="storage/ourproducts/wsp/cetrolyte.jpg" alt="Onion Minced" 
                        class="w-full h-auto object-cover">
                </div>
                <div class="relative p-3 text-center w-full group-hover:bg-green-700 transition-all duration-300">
                    <h3 class="text-lg font-bold text-green-700 group-hover:text-white rounded">
                      Cetrolyte
                    </h3>
                </div>
              </div>

              <!-- Card -->
              <div class="flex flex-col items-center bg-white shadow-lg rounded-lg overflow-hidden group transition-all duration-300 hover:bg-green-700">
                <div class="w-full bg-white ransition-transform duration-300 hover:scale-105">
                    <img src="storage/ourproducts/wsp/revitasol.jpg" alt="Onion Minced" 
                        class="w-full h-auto object-cover">
                </div>
                <div class="relative p-3 text-center w-full group-hover:bg-green-700 transition-all duration-300">
                    <h3 class="text-lg font-bold text-green-700 group-hover:text-white rounded">
                      Revitasol
                    </h3>
                </div>
              </div>

              <!-- Card -->
              <div class="flex flex-col items-center bg-white shadow-lg rounded-lg overflow-hidden group transition-all duration-300 hover:bg-green-700">
                <div class="w-full bg-white ransition-transform duration-300 hover:scale-105">
                    <img src="storage/ourproducts/wsp/pyriquin.jpg" alt="Onion Minced" 
                        class="w-full h-auto object-cover">
                </div>
                <div class="relative p-3 text-center w-full group-hover:bg-green-700 transition-all duration-300">
                    <h3 class="text-lg font-bold text-green-700 group-hover:text-white rounded">
                      Pyriquin
                    </h3>
                </div>
              </div>

              <!-- Card -->
              <div class="flex flex-col items-center bg-white shadow-lg rounded-lg overflow-hidden group transition-all duration-300 hover:bg-green-700">
                <div class="w-full bg-white ransition-transform duration-300 hover:scale-105">
                    <img src="storage/ourproducts/wsp/stresol.jpg" alt="Onion Minced" 
                        class="w-full h-auto object-cover">
                </div>
                <div class="relative p-3 text-center w-full group-hover:bg-green-700 transition-all duration-300">
                    <h3 class="text-lg font-bold text-green-700 group-hover:text-white rounded">
                      Stresol
                    </h3>
                </div>
              </div>
          
            </div>
          
          </section>
        </div>

      </div>
  </section>


</x-layout>