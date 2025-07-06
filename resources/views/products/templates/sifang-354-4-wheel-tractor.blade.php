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
                <td class="text-dark fs-6">720</td>
            </tr>
          
          
        </tbody>
            </table>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Video Section -->
<div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Sifang Four Wheels Tractor Video</h2>
        <div class="flex justify-center">
            <div class="w-full max-w-4xl">
                <div class="relative aspect-video rounded-lg overflow-hidden shadow-lg">
                    <iframe 
                        src="https://www.youtube.com/embed/yBUSSs_DMfM" 
                        class="w-full h-full" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-8">
<div class="bg-white rounded-lg shadow-lg p-6">
   
        
    <div class="max-w-7xl mx-auto py-6 lg:py-8">
        <div class="space-y-4">
    <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    onclick="toggleMainFeature('feature3')"
                    class="w-full flex items-center justify-between px-6 py-4 bg-white hover:bg-gray-50 focus:outline-none transition-colors duration-150"
                >
                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-700 text-left">အချက်အလက်များ</span>
                    </div>
                    <svg
                        id="arrowFeature3"
                        class="w-5 h-5 text-gray-500 transform transition-transform duration-200 flex-shrink-0 ml-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
             <div id="feature3" class="hidden border-t border-gray-200 bg-gray-50">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <div class="flex flex-col">
                                    
                                    <h3 class="text-lg font-semibold mb-2">Engine-model</h3>
                                    <p class="text-gray-600 leading-relaxed">25.8 kw </p>
                                </div>

                                 <div class="flex flex-col">
                                    
                                    <h3 class="text-lg font-semibold mb-2">Brake</h3>
                                    <p class="text-gray-600 leading-relaxed">  အခြောက်အမျိုးအစား (နှစ်ပြား)</p>
                                </div>
                               
                                <div class="flex flex-col">
                                    
                                    <h3 class="text-lg font-semibold mb-2">PTO</h3>
                                    <p class="text-gray-600 leading-relaxed">720</p>
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
 
