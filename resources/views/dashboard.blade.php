<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: all 1s ease-in-out !important;
        }

        .accordion-body.active {
            max-height: 1000px;
            /* transition: max-height 2s ease; */
           
        }
    </style>
</head>

<body>
    <div id="accordion-nested-parent" data-accordion="collapse">
        <div>
            <h2 id="accordion-collapse-heading-1">
                <button type="button" class="" data-accordion-target="#accordion-collapse-body-1"
                    aria-expanded="false" aria-controls="accordion-collapse-body-1">
                    <span>What is Flowbite?</span>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="accordion-body" aria-labelledby="accordion-collapse-heading-1">
                <div class="">
                    <p class="mb-2 text-gray-500 ">Flowbite is an open-source library of interactive
                        components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.
                    </p>
                    <!-- Nested accordion -->
                    <div id="accordion-nested-collapse" data-accordion="collapse">
                        <div>
                            <h2 id="accordion-nested-collapse-heading-1">
                                <button type="button" data-accordion-target="#accordion-nested-collapse-body-1"
                                    aria-expanded="false" aria-controls="accordion-nested-collapse-body-1">
                                    <span>Sub Accordion</span>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-1" class="accordion-body"
                                aria-labelledby="accordion-nested-collapse-heading-1">
                                <div class="p-5">
                                    <p class="text-gray-500 ">The main difference is that the core components
                                        from Flowbite are open source under the MIT license, whereas Tailwind UI is a
                                        paid
                                        product.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        // Customizing accordion expand with transition
        const accordionButtons = document.querySelectorAll('[data-accordion-target]');
        accordionButtons.forEach(button => {
            button.addEventListener('click', () => {
                const accordionBody = document.querySelector(button.getAttribute('data-accordion-target'));
                accordionBody.classList.toggle('active');
            });
        });
    </script>
</body>

</html>
