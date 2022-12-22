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
            <div class="container bg-red-500 mx-24 mt-16 flex">
                <div class="w-2/4  main-image bg-no-repeat bg-center bg-cover">
                </div>
                <div class="w-2/4">
                    
                </div>
            </div>
        </div>
        <!-- intro second overs -->
</body>
</html>