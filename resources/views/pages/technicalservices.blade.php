<x-layout title="Technical Services">
  <!-- header image section -->
  <section class="w-full h-[300px] md:h-[400px]">
    <div class="relative w-full h-full">
      <img src="storage/technicalservices/header.jpg" alt="no image">
    </div>
  </section>

  <h1 class="bg-green-700 p-5 rounded text-white text-xl font-bold tracking-wide text-center">REFAMED RECHECK</h1>

  <!-- RECHECK ARTICLE -->
  <section id="productservice">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-5 space-y-10 md:space-y-0 md:space-x-5 px-10 md:px-20">
      <!-- Card 1 -->
      <div class="rounded-lg shadow-lg border">
        <img src="storage/technicalservices/pic1.jpg" alt="REFAMED joins Philippine Poultry Show" class="bg-cover h-60 w-full rounded-t-lg">
        <div class="p-3">
          <h3 class="text-xl font-bold text-green-700 mb-2">Farm Audit and Troubleshooting</h3>
          <p class="text-gray-700 text-medium">Our in-house veterinarian
          will assist the farm on 
            disease diagnosis and 
            will give recommendations
            on how to improve on 
            farm production.</p>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="rounded-lg shadow-lg border">
        <img src="storage/technicalservices/pic2.jpg" alt="REFAMED joins Philippine Poultry Show" class="bg-cover h-60 w-full rounded-t-lg">
        <div class="p-3">
          <h3 class="text-xl font-bold text-green-700 mb-2">Farm Training</h3>
          <p class="text-gray-700 text-medium">On-site or on-line technical trainings and seminars  are 
            conducted by our technical team to provide basic knowledge 
            and skills to farm and feedmill personnel regarding animal 
            production, nutrition and health.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="rounded-lg shadow-lg border">
        <img src="storage/technicalservices/pic5.jpg" alt="REFAMED joins Philippine Poultry Show" class="bg-cover h-60 w-full rounded-t-lg">
        <div class="p-3">
          <h3 class="text-xl font-bold text-green-700 mb-2">Feed Formulation and Animal Health Program Assistance</h3>
          <p class="text-gray-700 text-medium">Our technical team can assist the farm in feed formulation design and assessment. 
            We also give preventive and therapeutic animal health  program based on farm audit activities.</p>
        </div>
      </div>
      
      <!-- Card 4 -->
      <div class="rounded-lg shadow-lg border">
        <img src="storage/technicalservices/pic3.png" alt="REFAMED joins Philippine Poultry Show" class="bg-cover h-60 w-full rounded-t-lg">
        <div class="p-3">
          <h3 class="text-xl font-bold text-green-700 mb-2">In Feed Liquid Spray System Calibration and Maintenance Service</h3>
          <p class="text-gray-700 text-medium">In partnership
            with Adisseo 
            we provide 
            engineering 
            service for 
            installation 
            and regular 
            calibration 
            and 
            maintenance 
            of Rhodimet 
            liquid spray 
            system for 
            accuracy and 
            cost savings.</p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="rounded-lg shadow-lg border">
        <img src="storage/technicalservices/pic4.jpg" alt="REFAMED joins Philippine Poultry Show" class="bg-cover h-60 w-full rounded-t-lg">
        <div class="p-3">
          <h3 class="text-xl font-bold text-green-700 mb-2">Mycotoxin Management System</h3>
          <p class="text-gray-700 text-medium">Mycoscan is 
            used for analysis 
            and quantification 
            of mycotoxin in 
            raw materials and 
            finished feeds 
            for proper dosage 
            recommendation of 
            mycotoxin binder.</p>
        </div>
      </div>

     
      
    </div>
  </section>

  <!-- Ask your specialist Button -->
  <button onclick="openModal()" class="bg-green-700 text-white px-6 py-3 rounded-t-lg  font-bold fixed bottom-2 right-5 md:bottom-[1px] md:right-5 z-50">
    ASK OUR SPECIALIST
  </button>

  <!-- Ask your specialist Modal -->
  <div id="signupModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-40">
    <div class="bg-green-700 text-white p-8 rounded-lg w-96 max-w-full relative shadow-lg">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl font-bold">×</button>
        
        <div class="text-left">
          <!-- Heading -->
          <h2 class="text-2xl font-extrabold ">ASK OUR SPECIALIST</h2>
          <p class="text-sm mt-2">Do you need help in your farm production?</p>
          <p class="text-sm mt-2">Do you want to know which breed is the best for your operation?</p>
          <p class="text-sm mt-2">Having a problem at your flock?</p>
          <p class="text-sm mt-5"> Message us with your questions and our REFAMED Specialists will help you.</p>
        
        </div>
      
    
        <!-- Email Input -->
        <input type="email" placeholder="Email" class="w-full px-4 py-2 mt-4 rounded-lg text-gray-900 border-none focus:ring-2 focus:ring-green-500">
        <textarea class="w-full px-4 py-2 mt-4 rounded-lg text-gray-900 border-none focus:ring-2 focus:ring-green-500" cols="30" rows="5" placeholder="Message"></textarea>
        <div class="btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-primary">
            <input type="checkbox"> I am not a robot
          </label>
        </div>

        <!-- Submit Button -->
        <button class="w-full mt-4 bg-white text-green-700 font-bold py-2 rounded-lg hover:bg-gray-200">
            Send Message
        </button>
    </div>
  </div>

</x-layout>


<script>
  function openModal() {
      document.getElementById("signupModal").classList.remove("hidden");
  }

  function closeModal() {
      document.getElementById("signupModal").classList.add("hidden");
  }
</script>