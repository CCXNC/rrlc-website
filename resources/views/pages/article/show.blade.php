<x-layout title="Article">
  <section
  class="relative bg-cover bg-center bg-no-repeat h-50 flex items-center"
  style="background-image: url('/storage/images/bg.jpg');">
<!-- Dark Overlay -->
<div class="absolute inset-0 bg-green-700 bg-opacity-80"></div>
  <div class="container mx-auto text-left z-0 p-12">
      <h2 class="text-4xl md:text-5xl text-white font-bold">
          Articles
      </h2>
  </div>
</section>

<!-- ARTICLE -->
<section id="article">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5 space-y-5 md:space-y-0 md:space-x-5  my-5 px-10 md:px-20">
    
    <!-- 3/4 Column -->
    <div class="md:col-span-2 space-y-5">
      <!-- Card 1 -->
      <div class="rounded-lg shadow-lg border">
        <img src="/storage/newsarticle/article11.png" 
             alt="Impact of Third Quarter Syndrome" 
             class="h-60 w-full object-cover rounded-t-lg">
        <div class="p-3">
          <h3 class="text-2xl font-bold text-green-700 mb-2">
            Impact of Third Quarter Syndrome on Poultry Production
          </h3>
          <p class="text-gray-700 text-medium text-justify">
            The poultry industry has been facing different challenges every year, production operation is getting more intensive. Experts in animal health and nutrition aim to improve production performance to satisfy consumer demand. One of the major factors that affect Poultry production is environmental change, especially during the months of July to September, which is commonly called Third Quarter Syndrome (TQS). Changes in season particularly in a tropical country like the Philippines bring more hot and humid conditions, thus, affecting the storage and quality of raw materials used in feeds. This favors the growth of mycotoxins such as Aflatoxin, DON, Ochratoxin, and Trichothecene or T2.  These toxins have a negative effect on the immune system of animals. It affects the function of different organs more importantly the kidney and liver which are vital in blood filtration. Continuous exposure of birds even at the low level of aflatoxin, ochratoxin, trichothecenes, and fumonisin can impair the immune system, thus, making the animals prone to infectious diseases.
          </p>
          <p class="text-gray-700 text-medium text-justify">
          One critical stage affected by TQS is on brooding of day-old chick, where good health and nutrition foundation is needed. During brooding, managing temperature and humidity inside the building is difficult, particularly in a conventional setup. Outside environment condition affects the amount of feeding and with the added mycotoxin problem, TQS critically affects gut development, growth performance, and overall health of birds. Also, during this period farm environment is very conducive to viruses and bacteria leading to the breakout of diseases. With this scenario, TQS has a significant impact on the development of birds affecting the growing cycle and Feed Conversion Rate (FCR) in broilers as well as the egg laying rate and longevity in layers.          </p>
          <p class="text-gray-700 text-medium text-justify">
            There are ways to prevent TQS such as good management must be properly implemented and monitored. Providing optimum temperature during the brooding stage in poultry can help maintain body heat requirements, thus, maximizing the potential performance of the animals. Proper ventilation can prevent the build-up of high ammonia levels inside the building which could prevent the respiratory problem. Also, giving supplementation of electrolytes to maintain body homeostasis, vitamins C & E, and other supplemental feed additives like Organic Selenium, Nucleotides to boost their immune system can help during the growing period. Lastly, monitoring of raw materials and random inspection of incoming raw materials to ensure mycotoxin level is within acceptable range before using in feeds. A broad-spectrum toxin binder is highly recommended to prevent mycotoxicosis in farm animals.  And, proper storage of feeds with spacing and pallets, and practicing FIFO (first in, first out) must be implemented.  In addition, multi-enzyme in feed is usually used to improve nutrient utilization of birds by increasing the digestibility of raw materials even during seasons when poor quality of raw materials is inevitable.            </p>
            <div class="px-6 py-4 border-t text-right">
          </div>
        </div>
      </div>
    </div>

    <!-- 1/4 Column (Sidebar or Additional Content) -->
    <div class="md:col-span-1 rounded-lg shadow-lg border p-5">
      <h3 class="text-xl font-bold text-green-700 mb-3">Recent Articles</h3>
      <ul class="space-y-2 font-semibold">
        <li><a href="/article/3" class="text-green-700 hover:underline">• Impact of Third Quarter Syndrome on Poultry Production</a></li>
        <li><a href="/article/4" class="text-green-700 hover:underline">• Organic Selenium: A Powerful Antioxidant that Strengthens Immune Response</a></li>
        <li><a href="/article/5" class="text-green-700 hover:underline">• REFAMED Awarded as Distinguished Company in Feed Industry</a></li>
        <li><a href="/article/5" class="text-green-700 hover:underline">• REFAMED joins 2019 Philippine Poultry Show</a></li>
        <li><a href="/article/5" class="text-green-700 hover:underline">• African Swine Fever: Confirmed in the Philippines</a></li>
      </ul>
    </div>
  </div>
</section>


</x-layout>