   
   
 <body class="p-4">
    <div class="max-w-md mx-auto mt-24">
        <!-- Accordion Item 1 -->
        <div class="overflow-hidden shadow-md bg-white transition-all duration-500">
            <div class="bg-gray-100 p-4 cursor-pointer flex justify-between items-center" onclick="toggleAccordion(1)">
                <h3 class="font-semibold text-lg">Accordion Item 1</h3>
                <span class="transform transition-transform" id="arrow-icon-1">▼</span>
            </div>
            <div class="p-4 hidden" id="accordion-content-1">
                <!-- Content for Accordion Item 1 -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    
        <!-- Accordion Item 2 -->
        <div class="overflow-hidden shadow-md bg-white transition-all duration-500">
            <div class="bg-gray-100 p-4 cursor-pointer flex justify-between items-center" onclick="toggleAccordion(2)">
                <h3 class="font-semibold text-lg">Accordion Item 2</h3>
                <span class="transform transition-transform" id="arrow-icon-2">▼</span>
            </div>
            <div class="p-4 hidden" id="accordion-content-2">
                <!-- Content for Accordion Item 2 -->
                <p>Nulla facilisi. Suspendisse potenti. Vestibulum nec velit nec urna tincidunt vehicula.</p>
            </div>
        </div>
    
        <!-- Accordion Item 3 -->
        <div class="overflow-hidden shadow-md bg-white transition-all duration-500">
            <div class="bg-gray-100 p-4 cursor-pointer flex justify-between items-center" onclick="toggleAccordion(3)">
                <h3 class="font-semibold text-lg">Accordion Item 3</h3>
                <span class="transform transition-transform" id="arrow-icon-3">▼</span>
            </div>
            <div class="p-4 hidden" id="accordion-content-3">
                <!-- Content for Accordion Item 3 -->
                <p>Vestibulum ullamcorper, justo nec tincidunt feugiat, tortor justo eleifend nulla.</p>
            </div>
        </div>
    </div>
    
    {{-- <script>
        function toggleAccordion(index) {
            document.getElementById(`accordion-content-${index}`).classList.toggle("hidden");
            document.getElementById(`arrow-icon-${index}`).classList.toggle("rotate-180");
        }
    </script> --}}
    </body>