<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Profile</title>
</head>


<body >
    <div class="max-w-[1200px] mx-auto  m-5">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            {{--  --}}
            <div class="md:col-span-3">
                <div class="bg-green-200 py-2 px-5 gap-2 flex flex-col justify-center items-center">
                    <img class="w-28 object-cover" src="https://i.pinimg.com/564x/c4/57/bd/c457bd9496170bfa3845b7cee775df65.jpg" alt="">
                    <p class=" font-bold">User Name</p> 
                </div>
                <div class="bg-white w-full border-2 space-y-2 border-green-200 p-1">
                    <div class="flex justify-between border-b-2">
                        <p>Student Id </p>
                        <p>skjdhjksdhsjhs</p>
                    </div>
                    <div class="flex justify-between border-b-2">
                        <p>Student Id </p>
                        <p>skjdhjksdhsjhs</p>
                    </div>
                    <div class="flex justify-between border-b-2">
                        <p>Student Id </p>
                        <p>skjdhjksdhsjhs</p>
                    </div>
                    <div class="flex justify-between border-b-2">
                        <p>Student Id </p>
                        <p>skjdhjksdhsjhs</p>
                    </div>
                    <div class="flex justify-between border-b-2">
                        <p>Student Id </p>
                        <p>skjdhjksdhsjhs</p>
                    </div>
                    <div class="flex justify-between border-b-2">
                        <p>Student Id </p>
                        <p>skjdhjksdhsjhs</p>
                    </div>
                </div>
            </div>
          {{--  --}}
           <div class="md:col-span-9 border border-blue-30 bg-slate-200">
          
            <div class="flex p-2 items-center text-white bg-white">
                <div class="bg-green-500 hover:bg-green-400 transition-all  w-fit m p-3">Button</div>
                <div class="bg-green-500 hover:bg-green-400 transition-all  w-fit m p-3">Button</div>
                <div class="bg-green-500 hover:bg-green-400 transition-all  w-fit m p-3">Button</div>
                <div class="bg-green-500 hover:bg-green-400 transition-all  w-fit m p-3">Button</div>
            </div>

            {{--  --}}
            <div class="grid grid-cols-12 w-fit m p-3">
                <div class="border border-white font-bold col-span-12">Student Details</div>

                <div class="border border-white col-span-2">Studnet's Name</div>
                <div class="border border-white col-span-4"></div>
                <div class="border border-white col-span-2">Mobile No</div>
                <div class="border border-white col-span-4">26-9-9999</div>
        
                <div class="border border-white col-span-2">Date of Birth</div>
                <div class="border border-white col-span-2">26-9-9999</div>
                <div class="border border-white col-span-2">Nationality</div>
                <div class="border border-white col-span-2">26-9-9999</div>
                <div class="border border-white col-span-2">Blood Group</div>
                <div class="border border-white col-span-2">26-9-9999</div>

                <div class="border border-white col-span-2">Father's Name</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                <div class="border border-white col-span-2">Mother's Name</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                {{-- single --}}
                <div class="border border-white col-span-2">Father Proffession</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                <div class="border border-white col-span-2">Mother Proffession</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                {{-- single --}}
                <div class="border border-white col-span-2">Father mobile</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                <div class="border border-white col-span-2">Mother mobile</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                {{--  --}}
                <div class="border border-white col-span-2">Father email</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                <div class="border border-white col-span-2">Mother email</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                {{--  --}}
                <div class="border border-white font-bold col-span-12">Present Address </div>
                <div class="border border-white col-span-12">Village</div>
                <div class="border border-white col-span-2">POst Office</div>
                <div class="border border-white col-span-4"></div>
                <div class="border border-white col-span-2">Post Code</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                <div class="border border-white col-span-2">Thana</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                <div class="border border-white col-span-2">District</div>
                <div class="border border-white col-span-4">26-9-9999</div>


                <div class="border border-white font-bold col-span-12">Permanent Address </div>
                <div class="border border-white col-span-12">Village</div>
                <div class="border border-white col-span-2">POst Office</div>
                <div class="border border-white col-span-4"></div>
                <div class="border border-white col-span-2">Post Code</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                <div class="border border-white col-span-2">Thana</div>
                <div class="border border-white col-span-4">26-9-9999</div>
                <div class="border border-white col-span-2">District</div>
                <div class="border border-white col-span-4">26-9-9999</div>
            </div>
            {{--  --}}
           </div>
        </div>


        {{-- table --}}
        <!-- component -->
<div class="flex flex-col overflow-x-auto">
  <div class=" ">
    <div class="inline-block min-w-full py-2 ">
      <div class="">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium">
            <tr>
              <th scope="col" class="min-w-16 max-w-32 p-3">sl</th>
              <th scope="col" class="min-w-16 max-w-32 p-3">Exam Name</th>
              <th scope="col" class="min-w-16 max-w-32 p-3">Institution Name</th>
              <th scope="col" class="min-w-16 max-w-32 p-3">Division</th>
              <th scope="col" class="min-w-16 max-w-32 p-3">Roll</th>
              <th scope="col" class="min-w-16 max-w-32 p-3">Reg No.</th>
              <th scope="col" class="min-w-16 max-w-32 p-3">Gpa</th>
              <th scope="col" class="min-w-16 max-w-32 p-3">Year</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class=" min-w-16 max-w-32 p-3 font-medium">1</td>
              <td class=" min-w-16 max-w-32 p-3">Cell Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident amet iusto minus beatae aspernatur consequatur ipsum. Reprehenderit ea vero facilis.</td>
              <td class=" min-w-16 max-w-32 p-3">Cell</td>
              <td class=" min-w-16 max-w-32 p-3">Cell</td>
              <td class=" min-w-16 max-w-32 p-3">Cell</td>
              <td class=" min-w-16 max-w-32 p-3">Cell</td>
              <td class=" min-w-16 max-w-32 p-3">Cell</td>
              <td class=" min-w-16 max-w-32 p-3">Cell</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>



    <script>
        function getRandomColor(colorCodes, prevColor) {
            let randomColor;
            do {
                const randomIndex = Math.floor(Math.random() * colorCodes.length);
                randomColor = colorCodes[randomIndex];
            } while (randomColor === prevColor);
            return randomColor;
        }
        const colorCodes = [
            '#96B6C5', '#ADC4CE', '#EEE0C9', '#F1F0E8',
            '#B5C0D0', '#CCD3CA', '#F5E8DD', '#EED3D9'
        ];
        let prevColor = null;
        const tableHeaders = document.querySelectorAll('th');
        tableHeaders.forEach(th => {
            const randomColor = getRandomColor(colorCodes, prevColor);
            th.style.backgroundColor = randomColor;
            prevColor = randomColor;
        });
    </script>

</body>
</html>











 {{--    --}}



{{--   --}}