{{-- resources/views/products/gt-1.blade.php --}}
<div class="specification-container">
    <table class="table-striped">
        <tbody>
            <!--tr class="text-grey-color">
                <td class="py-1 fs-6">Horse Power</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">22Hp
                </td>
            </tr>-->
            <!-- <tr class="text-grey-color">
                <td class="py-1 fs-6">Weight</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">1850 kg
                </td>
            </tr> -->
            {{-- <tr class="text-grey-color">
                <td class="py-1 fs-6">Wheel</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">800 x 275 (mm)</td>
            </tr>
            <tr class="text-grey-color">
                <td class="py-1 fs-6">Width</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">1055 - 1205 (mm)</td>
            </tr>
            <tr class="text-grey-color">
                <td class="py-1 fs-6">Height</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">1225 (mm)</td>
            </tr> --}}
        </tbody>
    </table>
</div>
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
                                        <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/implements/cultivaror-1.png"

                                             class="w-full aspect-[4/3] object-cover rounded-lg mb-4">
                                        <h3 class="text-lg font-semibold mb-2">18-Blade Cultivator</h3>
                                    </div>

                                    <!-- Feature 2:-->
                                    <div class="flex flex-col">
                                        <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/implements/cultivaror-2.png"

                                             class="w-full aspect-[4/3] object-cover rounded-lg mb-4">
                                        <h3 class="text-lg font-semibold mb-2">Cultivator 24 Blade</h3>
                                    </div>

                                    <!-- Feature 3: Gear Shift -->
                                    <div class="flex flex-col">
                                        <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/0main/products/yanmar/28.png"

                                             class="w-full aspect-[4/3] object-cover rounded-lg mb-4">
                                        <h3 class="text-lg font-semibold mb-2">Cultivator 28 Blade</h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
          </div>
        </div>
     </div>







    <!-- SECOND SECTION -->
    <!-- Section removed as per user request -->

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
