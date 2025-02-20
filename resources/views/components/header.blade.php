<header class="bg-white text-green-800 p-4 sticky top-0 z-10">
    <div class="container mx-auto flex justify-between items-center">
        <a class="w-24 h-auto hidden md:flex ml-28" href="{{url('/')}}">
            <img src="storage/logos/rrlc_logo.png" alt="">
        </a>
        <a class="w-24 h-auto ml-5 md:hidden" href="{{url('/')}}">
            <img src="storage/logos/rrlc_logo.png" alt="">
        </a>
        <nav class="hidden md:flex tracking-wide items-center space-x-4">
            <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
            
            <div class="relative group">
                <x-nav-link class="cursor-pointer">Our Products</x-nav-link>
                <div class="absolute hidden group-hover:block bg-white shadow-lg p-5 mt-2 w-60 tracking-wide">
                    <a href="/ourproducts" class="font-bold block pb-1">Animal Health</a>
                    <a href="/ourproducts" class="font-bold block pb-1">Animal Nutrition</a>
                    <a href="/ourproducts" class="font-bold block pb-1">Tolling Services</a>
                    <a href="/ourproducts" class="font-bold block pb-1">Refamed Raw Materials</a>
                </div>
            </div>
            
            <x-nav-link url="/technicalservices" :active="request()->is('technicalservices')">Technical Services</x-nav-link>
            <x-nav-link url="/articles" :active="request()->is('articles')">Article</x-nav-link>
            <x-nav-link url="/articles" :active="request()->is('articles')">Newsletter</x-nav-link>
            <x-nav-link url="/aboutus" :active="request()->is('aboutus')">About Us</x-nav-link>
            <x-nav-link url="/dashboard" :active="request()->is('dashboard')">Career</x-nav-link>
            <x-button-link url="/contactus" :active="request()->is('contactus')" icon="fa fa-pills">Contact Us</x-button-link>
        </nav>
        <button id="hamburger" class="text-green-800 md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="z-50 fixed top-0 right-0 w-64 h-full bg-green-700 text-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
    <div class="p-4 flex justify-between items-center">
        <h2 class="text-lg font-bold"></h2>
        <button id="close-menu" class="text-white text-2xl">&times;</button>
    </div>
    <nav class="tracking-wide space-y-2 p-4">
        <x-nav-link url="/" :active="request()->is('/')" :mobile="true">Home</x-nav-link>
        
        <div class="relative">
            <div class="flex justify-between items-center cursor-pointer" id="toggle-products">
                <h3 class="ml-4 font-bold">Our Products</h3>
                <span id="products-icon" class="text-xl"> +</span>
            </div>
            <div id="products-dropdown" class="hidden bg-green-600 shadow-lg p-2 mt-2 w-full">
                <x-nav-link url="/ourproducts" :active="request()->is('jobs/category1')" :mobile="true" class="block">Animal Health</x-nav-link>
                <x-nav-link url="/ourproducts" :active="request()->is('jobs/category2')" :mobile="true" class="block">Animal Nutrition</x-nav-link>
                <x-nav-link url="/ourproducts" :active="request()->is('jobs/category3')" :mobile="true" class="block">Tolling Services</x-nav-link>
                <x-nav-link url="/ourproducts" :active="request()->is('jobs/category3')" :mobile="true" class="block">Refamed Raw Materials</x-nav-link>
            </div>
        </div>
        
        <x-nav-link url="/technicalservices" :active="request()->is('technicalservices')" :mobile="true">Technical Services</x-nav-link>
        <x-nav-link url="/articles" :active="request()->is('articles')" :mobile="true">Article</x-nav-link>
        <x-nav-link url="/newsletter" :active="request()->is('newsletter')" :mobile="true">About Us</x-nav-link>
        <x-nav-link url="/aboutus" :active="request()->is('aboutus')" :mobile="true">About Us</x-nav-link>
        <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true">Career</x-nav-link>
        <div class="pt-1"></div>
        <x-button-link url="/contactus" :active="request()->is('contactus')" icon="fa fa-pills" :block="true">Contact Us</x-button-link>
    </nav>
</div>

<!-- JavaScript -->
<script>
    const menu = document.getElementById('mobile-menu');
    const openBtn = document.getElementById('hamburger');
    const closeBtn = document.getElementById('close-menu');
    const toggleProducts = document.getElementById('toggle-products');
    const productsDropdown = document.getElementById('products-dropdown');
    const productsIcon = document.getElementById('products-icon');

    openBtn.addEventListener('click', () => {
        menu.classList.remove('translate-x-full'); // Show menu
    });

    closeBtn.addEventListener('click', () => {
        menu.classList.add('translate-x-full'); // Hide menu
    });

    toggleProducts.addEventListener('click', () => {
        const isHidden = productsDropdown.classList.contains('hidden');
        productsDropdown.classList.toggle('hidden');
        productsIcon.textContent = isHidden ? '-' : '+';
    });
</script>
