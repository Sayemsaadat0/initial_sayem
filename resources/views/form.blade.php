<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Form</title>
</head>
<body class="bg-blue-100">
    <div class=" bg-white w-[1500px] px-[120px] mx-auto">
        <div class="flex w-full justify-between items-center p-5">
            <div>
                <img src="https://i.pinimg.com/originals/82/c6/5b/82c65b9bb0a75026fc4c82a438b4cc9b.jpg"
                    class="rounded-full w-28 h-28" alt="">
                </div>
            <div class="text-center">
                <h3 class="text-2xl text-blue-400 font-bold">Pallabi Mazedul Islam Model High School</h3>
                <p class="text-sm">13/14,Pallabi, Dhaka - 1216. <br>
                    Contact No: 01309108183 <br>
                    Email: mimodelschool1978@gmail.com <br>
                    Website: http://pmimhs.edu.bd/ <br>
                   <span class="text-red-500"> Print date:14-03-2024</span></p>
                <p class="font-bold font-semi-bold text-center text-xl">Student Information</p>
            </div>
            <div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMDXx9Q6qcC2IwyL9lKV1-DutX_zgd_h4kkA&usqp=CAU"
                    class="w-40" alt="">
                </div>
        </div>
        {{-- student info --}} 
        <div class="grid grid-cols-12  ">
            <div class="border-t  border-b border-l  border-black p-1.5 col-span-2">ছাত্রের নাম(বাংলায়)</div>
            <div class="border border-black p-1.5 col-span-6">।।</div>
            <div class="border-t  border-b border-r border-black p-1.5 col-span-2">আইডি নং</div>
            <div class="border-t  border-b border-r  border-black p-1.5 col-span-2">২১২২২</div>
        </div>
        <div class="grid grid-cols-12  ">
            <div class="border-l border-b border-black p-1.5 col-span-2">ছাত্রের নাম(ইঙ্গরেজিতে)</div>
            <div class="border-l border-b border-black p-1.5 col-span-6"></div>
            <div class="border-l border-b border-black p-1.5 col-span-2">মোবাইল নং</div>
            <div class="border-l border-b border-r border-black p-1.5 col-span-2"></div>
        </div>
        {{-- class nd Group Info --}}
        <div class="grid grid-cols-12  ">
            <div class="border-l border-b border-black p-1.5 col-span-2">ক্লাস</div>
            <div class="border-l border-b border-black p-1.5 col-span-5 text-red-600"></div>
            <div class="border-l border-b border-black p-1.5 col-span-1">রোল</div>
            <div class="border-l border-b border-black p-1.5 col-span-1"></div>
            <div class="border-l border-b border-black p-1.5 col-span-1">শাখা</div>
            <div class="border-l border-b border-r border-black p-1.5 col-span-2">Morning - A</div>
        </div>
        <div class="grid grid-cols-12  ">
            <div class="border-l border-b border-black p-1.5 col-span-2">গ্রুপ</div>
            <div class="border-l border-b border-black p-1.5 col-span-5"></div>
            <div class="border-l border-b border-black p-1.5 col-span-1">বছর</div>
            <div class="border-l border-b border-black p-1.5 col-span-1">২০২৩</div>
            <div class="border-l border-b border-black p-1.5 col-span-1">সেশন</div>
            <div class="border-l border-b border-r border-black p-1.5 col-span-2"></div>
        </div>
        <div class="grid grid-cols-12 mt-1">
            <div class="border-l border-b border-black p-1.5 col-span-2">জন্ম তারিখ</div>
            <div class="border-l border-b border-black p-1.5 col-span-3">N/A</div>
            <div class="border-l border-b border-black p-1.5 col-span-2">জাতীয়তা</div>
            <div class="border-l border-b border-black p-1.5 col-span-3">34</div>
            <div class="border-l border-b border-black p-1.5 col-span-1"> রক্তের গ্রুপ</div>
            <div class="border-l border-b border-r border-black p-1.5 col-span-1">বি +</div>
        </div>
        {{-- guardian Info --}}
        <div class="grid grid-cols-12 mt-1">
            <div class="border-t  border-b border-l border-t  border-black p-1.5 col-span-2"> পিতার নাম </div>
            <div class="border-l border-b border-t  border-black p-1.5 col-span-5"></div>
            <div class="border-l border-b border-t border-black p-1.5 col-span-2">মোবাইল</div>
            <div class="border-l border-b border-t border-r border-black p-1.5 col-span-3"></div>
        </div>
        <div class="grid grid-cols-12">
            <div class="border-l border-b  border-black p-1.5 col-span-2">পেশা</div>
            <div class="border-l border-b  border-black p-1.5 col-span-5"></div>
            <div class="border-l border-b  border-black p-1.5 col-span-2">মাসিক আয়</div>
            <div class="border-l border-b  border-r border-black p-1.5 col-span-3">34</div>
        </div>
        <div class="grid grid-cols-12">
            <div class="border-l border-b  border-black p-1.5 col-span-2">মাতার নাম</div>
            <div class="border-l border-b  border-black p-1.5 col-span-5"></div>
            <div class="border-l border-b  border-black p-1.5 col-span-2">মোবাইল </div>
            <div class="border-l border-b  border-r border-black p-1.5 col-span-3"></div>
        </div>
        <div class="grid grid-cols-12">
            <div class="border-l border-b  border-black p-1.5 col-span-2">পেশা</div>
            <div class="border-l border-b  border-black p-1.5 col-span-5"></div>
            <div class="border-l border-b  border-black p-1.5 col-span-2">মাসিক আয়</div>
            <div class="border-l border-b  border-r border-black p-1.5 col-span-3">34</div>
        </div>
        {{--  Address--}}
        <div class="grid grid-cols-12 mt-1">
            <div class="border border-black p-1.5 col-span-12">বর্তমান ঠিকানা</div>
            <div class="border-b border-l border-black p-1.5 col-span-2">গ্রাম/মহল্লা</div>
            <div class="border-b border-l border-black p-1.5 col-span-3"></div>
            <div class="border-b border-l border-black p-1.5 col-span-2">ডাকঘর</div>
            <div class="border-b border-l border-black p-1.5 col-span-3"></div>
            <div class="border-b border-l border-black p-1.5 col-span-1">পোস্ট কোড</div>
            <div class="border-b border-l border-r border-black p-1.5 col-span-1">36232</div>
            <div class="border-b border-l  border-black p-1.5 col-span-2">থানা</div>
            <div class="border-b border-l  border-black p-1.5 col-span-3"></div>
            <div class="border-b border-l  border-black p-1.5 col-span-2">জেলা</div>
            <div class="border-b border-l border-r border-black p-1.5 col-span-5"></div>
            {{--  --}}
            <div class="border-b border-l border-r border-black p-1.5 col-span-12"> স্থায়ী ঠিকানা</div>
            <div class="border-b border-l border-black p-1.5 col-span-2">গ্রাম/মহল্লা</div>
            <div class="border-b border-l border-black p-1.5 col-span-3"></div>
            <div class="border-b border-l border-black p-1.5 col-span-2">ডাকঘর</div>
            <div class="border-b border-l border-black p-1.5 col-span-3"></div>
            <div class="border-b border-l border-black p-1.5 col-span-1">পোস্ট কোড</div>
            <div class="border-b border-l border-r border-black p-1.5 col-span-1"></div>
            <div class="border-b border-l border-black p-1.5 col-span-2">থানা</div>
            <div class="border-b border-l border-black p-1.5 col-span-3"></div>
            <div class="border-b border-l border-black p-1.5 col-span-2">জেলা</div>
            <div class="border-b border-l border-r border-black p-1.5 col-span-5"></div>
            {{--  --}}
            <div class="border border-black p-1.5 col-span-12 mt-1">পূর্বে যে প্রতিষ্ঠানে অধ্যায়ন করেছে তার নাম </div>
            <div class="border-b border-l border-black p-1.5 col-span-2">শ্রেনী</div>
            <div class="border-b border-l border-black p-1.5 col-span-2"></div>
            <div class="border-b border-l border-black p-1.5 col-span-2">রেজি নং</div>
            <div class="border-b border-l border-black p-1.5 col-span-2"></div>
            <div class="border-b border-l border-black p-1.5 col-span-2">ফলাফল</div>
            <div class="border-b border-l border-r border-black p-1.5 col-span-2"></div>
        </div>
        <div class="py-10 mt-20 flex justify-between items-center">
            <div class="border-t border-black pt-2 w-[25%] text-center">ছাত্রের পুর্নাঙ্গ সাক্ষর</div>
            <div class="border-t border-black pt-2 w-[25%] text-center">অভিভাবকের সাক্ষর এবং তারিখ</div>
            <div class="border-t border-black pt-2 w-[25%] text-center">অধ্যক্ষ</div>
        </div>
    </div>
</body>

</html>
