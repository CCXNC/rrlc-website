<x-layout title="Job Application Form">
     <!-- Section Contact Us -->
     <div class="flex justify-center items-center p-8">
        <div class=" max-w-lg w-full">
          <h1 class="text-green-800 text-3xl font-bold text-center mb-6">APPLY NOW</h1>
          <form class="space-y-4">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <input type="text" placeholder="Full Name" class="w-full p-3 border border-gray-300 rounded-md">
                  <input type="email" placeholder="Email Address" class="w-full p-3 border border-gray-300 rounded-md">
                  <input type="tel" placeholder="Contact Number" class="w-full p-3 border border-gray-300 rounded-md">
                  <select class="w-full p-3 border border-gray-300 rounded-md" name="" aria-placeholder="job">
                    <option class="text-gray-300" value="">Select Job Position</option>
                    <option value="Software Developer">Software Developer</option>
                  </select>
              </div>
              <div>
                  <label class="text-green-800 font-bold block mb-2">Upload your CV</label>
                  <input type="file" class="w-full p-3 border border-gray-300 rounded-md bg-white">
              </div>
              <button class="w-full bg-green-700 text-white p-3 rounded-md font-semibold hover:bg-green-800">
                  Submit Application
              </button>
          </form>
      </div>
  </div>
  </x-layout>