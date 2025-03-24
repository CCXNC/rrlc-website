<x-layout-backend title="Home">
  <section
    class="relative bg-cover bg-center bg-no-repeat h-50 flex items-center"
      style="background-image: url('/storage/images/bcraw.jpg');">
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-green-700 bg-opacity-80"></div>
      <div class="container mx-auto text-left z-0 p-12">
          <h2 class="text-4xl md:text-5xl text-white font-bold">
              Home Page
          </h2>
    </div>
  </section>

  <div class="overflow-x-auto px-10 py-10">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-bold ml-2 text-gray-800">Carousel List</h2>
      <a href="{{route('home_carousel.create')}}"class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">Create</a>
  </div>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-6 py-3 text-left text-gray-700 font-semibold">Image</th>
                <th class="px-6 py-3 text-left text-gray-700 font-semibold">Title</th>
                <th class="px-6 py-3 text-left text-gray-700 font-semibold">Action</th>
            </tr>
        </thead>
        <tbody>
          @forelse($carousels as $carousel)
            <tr class="border-t border-gray-200">
              <td class="px-6 py-4">
                  <img src="/storage/{{$carousel->image_path}}" alt="Image" class="w-auto h-[150px] rounded" />
              </td>
              <td class="px-6 py-4 text-gray-800">{{$carousel->title}}</td>
              <td class="px-6 py-4 space-x-1">
                  <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">View</button>
                  <button class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600">Edit</button>
                  <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
              </td>
            </tr>
          @empty
            <p>No Content available</p>
          @endforelse
        </tbody>
    </table>
  </div>


</x-layout-backend>

