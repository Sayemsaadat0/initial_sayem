<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravelll</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- <link rel="stylesheet" href="/resources/css/app.css"> --}}

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .accordion {
                margin: 60px auto;
                width: 500px;
            }
    
            .accordion li {
                list-style: none;
                width: 100%;
                background: rgb(146, 135, 158);
                padding: 10px;
                margin: 10px;
                border-radius: 10px;
            }
    
            .accordion li label {
                cursor: pointer;
            }
    
            input[type="radio"] {
                display: none;
                width: 100%;
            }
    
            .accordion .content {
                max-height: 0;
                overflow: hidden;
                transition: max-height 1s ease-in-out;
            }
    
            .accordion input[type="radio"]:checked + label + .content {
                max-height: 400px;
            }
        </style>
    </head>
   
<body> 
    <ul class="accordion">
        <li>
            <input type="radio" name="accordion" id="first" >
            <label for="first" >First</label>
            <div class="content">
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nam ipsum soluta voluptatum, impedit perspiciatis consequuntur vitae at perferendis labore aliquam incidunt quibusdam dolorem corporis ab quae necessitatibus dolore laudantium maxime earum pariatur quis reprehenderit non distinctio. Natus, repellat necessitatibus?</p>

                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nam ipsum soluta voluptatum, impedit perspiciatis consequuntur vitae at perferendis labore aliquam incidunt quibusdam dolorem corporis ab quae necessitatibus dolore laudantium maxime earum pariatur quis reprehenderit non distinctio. Natus, repellat necessitatibus?</p>
            </div> 
        </li>
        <li>
            <input type="radio" name="accordion" id="Second" >
            <label for="Second">Second</label>
            <div class="content">
                <p>  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nam ipsum soluta voluptatum, impedit perspiciatis consequuntur vitae at perferendis labore aliquam incidunt quibusdam dolorem corporis ab quae necessitatibus dolore laudantium maxime earum pariatur quis reprehenderit non distinctio. Natus, repellat necessitatibus?</p>
            </div> 
        </li>
    </ul>
    {{-- <script>
        onclick="toggleAccordion('Second')" // this line will be within the btton
        function toggleAccordion(id) {
            const radio = document.getElementById(id);
            radio.checked = !radio.checked; 
        }
    </script> --}}
</body>
</html>
