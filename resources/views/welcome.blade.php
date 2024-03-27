{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravelll</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
   
<body>
    <div class="py-24 px-8 max-w-5xl mx-auto">
        <ul>
            <li>
                <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-base-content">How secure is my insurance information?</span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-300 ease-out false"></rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 1s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed">We prioritize the security of your insurance information. We use advanced encryption and strict data protection measures to ensure your data is safe and confidential.</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    
    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
            content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
        }
    </script>
     

</body>
</html> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravelll</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .group:hover .group-hover\:block {
            display: block;
        }

        .chart-bar {
            border: 1px solid #000;
            width: 30px;
            /* Adjust width as needed */
            background-color: #6c757d;
            margin: 0 5px;
        }
    </style>

    {{--  --}}

</head>


{{-- chart 1 --}}

<body>
    {{--  --}}

    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div>
                <a href="#" class="text-white font-bold text-lg">Logo</a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden md:block">
                <a href="/" class="text-gray-300 hover:text-white px-4">Home</a>
                <a href="/form" class="text-gray-300 hover:text-white px-4">Form</a>
                <a href="/admit" class="text-gray-300 hover:text-white px-4">Admit</a>
                <a href="/accordion" class="text-gray-300 hover:text-white px-4">accordion</a>
                <a href="/dashboard" class="text-gray-300 hover:text-white px-4">Dashboard</a>
                <a href="/profile" class="text-gray-300 hover:text-white px-4">Profile</a>
            </div>
            <!-- Mobile Menu Button (Hidden on Desktop) -->
            <div class="md:hidden">
                <button class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    {{--  --}}


    <div class="flex flex-col items-center w-full p-6 pb-6 mt-10 bg-white rounded-lg shadow-xl sm:p-8">
        <h2 class="text-xl font-bold">Monthly Revenue</h2>
        <span class="text-sm font-semibold text-gray-500">2020</span>
        <div id="chart" class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
            <!-- JavaScript will dynamically populate this section -->
        </div>
        <div class="flex w-full mt-3">
            <div class="flex items-center ml-auto">
                <span class="block w-4 h-4 bg-indigo-400"></span>
                <span class="ml-1 text-xs font-medium">Existing</span>
            </div>
            <div class="flex items-center ml-4">
                <span class="block w-4 h-4 bg-indigo-300"></span>
                <span class="ml-1 text-xs font-medium">Upgrades</span>
            </div>
            <div class="flex items-center ml-4">
                <span class="block w-4 h-4 bg-indigo-200"></span>
                <span class="ml-1 text-xs font-medium">New</span>
            </div>
        </div>
    </div>

    <script>
        // Sample dynamic data values
        const revenueData = [15000, 20000, 500000, 3000, 400000000000]; // Example data in millions

        function updateChart() {
            const chart = document.getElementById('chart');
            chart.innerHTML = ''; // Clear existing content

            // Find the maximum value to use for scaling
            const maxValue = Math.max(...revenueData);
            const maxBarHeight = 400;
            const minBarHeight = 1;
            const scale = (maxBarHeight - minBarHeight) / maxValue;
            console.log('scale', scale)
            revenueData.forEach(value => {
                const percentage = (value / maxValue) * 100;
                console.log('percentage', percentage)
                let barHeight = Math.round(percentage * scale + minBarHeight);
                // Ensure the bar height is within the specified range
                barHeight = Math.max(minBarHeight, Math.min(maxBarHeight, barHeight));
                console.log('barHeight', barHeight)
                const bar = document.createElement('div');
                bar.style.height = `${barHeight}px`;
                bar.classList.add('chart-bar');
                chart.appendChild(bar);
            });
        }
        updateChart();
    </script>
</body>

</html>


{{-- 
    
     <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$45,000</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-10 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-6 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-20 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Feb</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-10 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-20 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Mar</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$50,000</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-10 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-6 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-24 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Apr</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-10 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-20 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">May</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-24 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Jun</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-16 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-20 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Jul</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-10 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-24 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Aug</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-10 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-32 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Sep</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-12 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow bg-indigo-400 h-28"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Oct</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-8 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-40 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Nov</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span>
                <div class="flex items-end w-full">
                    <div class="relative flex justify-center flex-grow h-12 bg-indigo-200"></div>
                    <div class="relative flex justify-center flex-grow h-8 bg-indigo-300"></div>
                    <div class="relative flex justify-center flex-grow h-40 bg-indigo-400"></div>
                </div>
                <span class="absolute bottom-0 text-xs font-bold">Dec</span>
            </div>
    --}}
