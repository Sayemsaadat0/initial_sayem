{{-- <style>
    /* Accordion styles */
    .accordion {
        margin: 0 auto;
        max-width: 500px;
    }

    .accordion summary {
        cursor: pointer;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .accordion summary::-webkit-details-marker {
        display: none;
    }

    .accordion summary:hover {
        background-color: #e0e0e0;
    }

    .accordion div {
        padding: 10px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-top: none;
        overflow: hidden;
        max-height: 0;
        transition: max-height 2s ease;
    }

    .accordion[open] div {
        max-height: 500px;
    }
</style>

<details class="accordion">
    <summary>No Js</summary>
    <div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde, ex rem voluptates autem aliquid veniam
            quis temporibus repudiandae illo, nostrum, pariatur quae! At animi modi dignissimos corrupti placeat
            voluptatum!
        </p>

        <details class="accordion">
            <summary>No Js</summary>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde, ex rem voluptates autem aliquid
                    veniam quis temporibus repudiandae illo, nostrum, pariatur quae! At animi modi dignissimos corrupti
                    placeat voluptatum!
                </p>
            </div>
        </details>
    </div>
</details> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
    <style>

    </style>
</head>

<body>

    <div id="accordion-collapse" data-accordion="collapse">
        <div>
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200  hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                    aria-controls="accordion-collapse-body-1">
                    <span>What is Flowbite?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-gray-500 ">Flowbite is an open-source library of interactive
                        components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.
                    </p>
                    <p class="text-gray-500 ">Check out this guide to learn how to <a
                            href="/docs/getting-started/introduction/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start  developing websites even faster with components on top of Tailwind CSS.</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        const accordionToggles = document.querySelectorAll('[data-accordion-target]');
        accordionToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const target = document.querySelector(toggle.getAttribute('data-accordion-target'));
                target.classList.toggle('open');
            });
        });
    </script>

</body>

</html>
