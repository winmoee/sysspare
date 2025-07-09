{{-- resources/views/products/gt-1.blade.php --}}
<style>
    /* For dropdown content */
#feature1 .p-6 {
    background: #f9fafb;
    border-radius: 0 0 0.5rem 0.5rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
    margin: 0;
}
@media (min-width: 768px) {
    #feature1 .p-6 {
        min-height: 100px;
        padding-left: 3rem;
        padding-right: 3rem;
    }
}
</style>
<div class="specification-container">
    <table class="table-striped">
        <tbody>
        <tr class="text-grey-color">
                <td class="py-1 fs-6">Model</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">ZN-1100
                </td>
            </tr> 
             <tr class="text-grey-color">
                <td class="py-1 fs-6">Horse Power</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">18Hp
                </td>
            </tr>
            <tr class="text-grey-color">
                <td class="py-1 fs-6">Special feature</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">water and fuel tank big
                </td>
            </tr> 
             <tr class="text-grey-color">
                <td class="py-1 fs-6">RPM</td>
                <td class="ps-4 pe-2">-</td>
                <td class="text-dark fs-6">2200</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>






</section>

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

