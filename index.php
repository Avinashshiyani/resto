<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resto</title>
    <script src="https://cdn.tailwindcss.com"></script><!--tailwind css-->
    <link rel="stylesheet" href="./components/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-red-100 p-4">
    <!-- white background -->
    <div class="bg-white flex p-2 justify-center">
        <div class="flex container justify-around  items-center">
            <!-- navbar -->
                <div>
                <i class="fa-sharp fa-solid fa-bars"></i>
                </div>
                <div class="space-x-4">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Special Dishes</a>
                </div>
                <div class="text-3xl">
                    <span>Resto</span>
                </div>
                <div class="space-x-4">
                    <a href="#">Menu</a>
                    <a href="#">Team</a>
                    <a href="#">Reservation</a>
                </div>
                <div><i class="fa-sharp fa-solid fa-magnifying-glass"></i></div>
            </div>
        </div>
        <!-- navbar over -->
        <!-- intro starts -->
        <div class="bg-white flex p-2 justify-center">
            <div class="container flex w-full mx-24 justify-center items-center">
                <!-- intro-text -->
                <div class="w-full">
                    <div class=" text-6xl mt-44">
                        <h1>We Love <br>Delicious Food!</h1>
                    </div>
                    <div class=" text-lg mt-16">
                        <a href="#" class="bg-red-500 px-8 py-2 rounded-3xl text-white font-bold">Explore Menu</a>
                        <a href="#" class="px-5 font-bold"><i class="fa-solid fa-play"></i> Play Video</a>
                    </div>
                    <div class="flex text-lg  mt-32 justify-center">
                        <div class="border-r-4 w-2/4 grid justify-center">
                        <i class="fa-solid fa-rocket fa-4x text-slate-700"></i>
                        <p>Fast Delivery</p>
                        </div>

                        <div class="border-r-4 w-2/4 grid justify-center">
                        <i class="fa-solid fa-leaf fa-4x text-slate-700"></i>
                        <p>Fresh Food</p>
                        </div>

                        <div class="border-r-4 w-2/4 grid justify-center">
                        <i class="fa-solid fa-comment fa-4x text-slate-700"></i>
                        <p>24/7 Support</p>
                        </div>
                    </div>
                </div>
                <!-- image of main -->
                <div class="main-image bg-no-repeat bg-center bg-cover">
                <!-- image upper icons -->
                    <div class="flex items-end justify-end h-full">
                        <i class="fa-light fa-less-than fa-4x p-4 px-10 bg-white"></i>
                        <i class="fa-light fa-greater-than fa-4x p-4 px-10 bg-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- intro over -->

        <!-- intro second starts -->
        <div class="bg-white p-2 flex">
            <div class="container  mx-24 mt-16 flex">
                <div class="w-2/4  main-image bg-no-repeat bg-center bg-cover">
                </div>
                <!-- second intro info -->
                <div class="w-2/4  mx-8 my-2 grid space-y-1 mt-10">
                    <span class="text-2xl text-red-500 font-bold">About</span>
                    <span class="text-3xl font-bold">Welcome To resto</span>
                    <span class="text-lg pt-16">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi perferendis cupiditate, praesentium mollitia ea dolores, exercitationem esse culpa hic accusamus sed voluptates minus. Error, qui pariatur eligendi quae necessitatibus eius?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi perferendis cupiditate, praesentium mollitia ea dolores, exercitationem esse culpa hic accusamus sed voluptates minus. Error, qui pariatur eligendi quae necessitatibus eius?
                    </span>
                    <span class="text-2xl font-bold pt-12">Special Recepie</span>
                    <div class="flex  space-x-3">                        
                        <div class="w-2/4 main-image h-32 bg-cover"></div>
                        <div class="w-2/4 main-image h-32 bg-cover"></div>
                        <div class="w-2/4 main-image h-32 bg-cover"></div>
                    </div>
                    <div class="flex space-x-8 text-lg text-red-500">
                    <p class="">Australian Special Salad</p>
                    <p class="">Australian Special Salad</p>
                    <p class="pl-4">Australian Special Salad</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- intro second overs -->

        <!-- slate div started -->
        <div class="bg-slate-100 flex p-2">
            <div class="container bg-slate-100 mx-24">
                <div class="grid justify-center  items-center">
                    <span class="text-red-500 flex justify-center">Specialities</span>
                    <span class="text-3xl font-bold">Special Dishes</span>
                </div>
                <!-- slate div introduction starts -->
                <div class="flex">
                    <div class="w-2/4 flex items-center bg-green-100">
                        <span class="text-4xl font-bold">01.</span>
                        <div class="h-0.5 w-80 bg-black"></div>
                        <div class="flex bg-red-100 ">
                            <span>Pizza</span>
                            <span>Peri Souce</span>
                        </div>
                    </div>
                    <!-- slate div introduction over -->  
                    <div class="w-2/4 bg-red-300">
                        1
                    </div>
                </div>
            </div>
        </div>
</body>
</html>