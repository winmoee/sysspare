{{-- resources/views/products/gt-1.blade.php --}}

<div class="specification-container">
    <br>
    <table class="table-striped">
    <tbody>
            <tr class="text-grey-color">

                <td class="py-1 fs-6">Engine-model</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">25.8 kw
                </td>
            </tr>
            <tr class="text-grey-color">
                <td class="py-1 fs-6">Brake</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">Dry type-two disc
                </td>
            </tr>
             <tr class="text-grey-color">
                <td class="py-1 fs-6">PTO</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">720/540</td>
            </tr>


        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">

<div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-xl p-8 mb-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
               <!-- Video Section -->
               <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <div class="practical-video-wraper">
                    <div class="video-item">
                        <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                src="https://www.youtube.com/embed/La71WklUQQI?si=tPtwn1_AhFylp4x5"
                                frameborder="0"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

                <!-- Catalog Section -->
                {{-- <div class="catalog-container bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-transform duration-300">
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-book-open text-green-600 mr-3"></i>
                        Catalog
                    </h2>
                    <div class="space-y-4">
                        <div class="catalog-wraper bg-gray-50 rounded-lg p-4 hover:bg-green-50 transition-colors duration-200">
                        <a href="https://drive.google.com/file/d/1OuhVrkvUT3BPEzmK9lHUMSFqPO-BI2IF/view?usp=sharing"
                                    class="text-green-600 hover:text-green-700 transition-colors duration-200"
                                    target="_blank">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium text-gray-800">Sifang 354 4 wheels tractor</h4>
                                    <span class="text-sm text-green-600">Download</span>
                                </div>
                                    <i class="fas fa-arrow-right"></i>
                            </div>
                        </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

<div class="bg-white rounded-lg shadow-lg p-6">


    <div class="max-w-7xl mx-auto py-6 lg:py-8">
        <div class="space-y-4">
        <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <button
                        onclick="toggleMainFeature('feature2')"
                        class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                    >
                        <div class="flex items-center">
                            <span class="text-lg font-medium text-gray-700 text-left">တွဲဖက်ပစ္စည်းများ</span>
                        </div>
                        <svg
                            id="arrowFeature2"
                            class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="feature2" class="hidden border-t border-gray-200 bg-gray-50">
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <!-- Feature 1:  -->
                                <div class="flex flex-col">
                                    <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/set.jpg"

                                         class="w-full aspect-[4/3] object-cover rounded-lg mb-4">
                                    <h3 class="text-lg font-semibold mb-2">1GQN - 150ထွန်ခုံ (34) သွား</h3>
                                </div>

                                <!-- Feature 2:-->
                                <div class="flex flex-col">
                                    <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/set1.jpg"

                                         class="w-full aspect-[4/3] object-cover rounded-lg mb-4">
                                    <h3 class="text-lg font-semibold mb-2">1GQN - 180ထွန်ခုံ (34) သွား</h3>
                                </div>

                                <!-- Feature 3: Gear Shift -->
                                <div class="flex flex-col">
                                    <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/set2.jpg"

                                         class="w-full aspect-[4/3] object-cover rounded-lg mb-4">
                                    <h3 class="text-lg font-semibold mb-2">1LY - 320 သုံးသွားလင်ဗန်း</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        </div>
      </div>
    </div>
 </div>








<!-- Add JavaScript for toggle functionality -->
<script>
    function toggleSpecifications() {
        const content = document.getElementById('specificationsContent');
        const arrow = document.getElementById('specArrow');

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            arrow.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        }
    }
</script>

<script>
    function toggleMainFeature(featureId) {
        const content = document.getElementById(featureId);
        const arrow = document.getElementById('arrow' + featureId.charAt(0).toUpperCase() + featureId.slice(1));

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            arrow.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        }
    }
</script>

