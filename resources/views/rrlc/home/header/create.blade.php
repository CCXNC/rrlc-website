<x-layout-backend>
  <x-slot name="title">Create Job</x-slot>
  <div
      class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl"
  >
      <h2 class="text-4xl text-center font-bold mb-4">
          Create Home Carousel
      </h2>
      <form
          method="POST"
          action="{{route('home_carousel.store')}}"
          enctype="multipart/form-data"
      >
      @csrf
          <x-inputs.text id="title" name="title" label="Title" placeholder="Header One" />
          
          <x-inputs.file id="Image" name="image_path" label="Image"  />

          <button
              type="submit"
              class="w-full bg-green-700 hover:bg-green-800 text-white px-4 py-2 my-3 rounded focus:outline-none"
          >
              Save
          </button>
      </form>
  </div>
</x-layout-backend>