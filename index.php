<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTO</title>
    <link rel="stylesheet" href="./components/style.css"><!--custom css-->
    <script src="https://cdn.tailwindcss.com"></script><!--tailwind css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- main background  -->
    <div class="flex justify-center items-center h-screen w-screen bg-red-100">
        <!-- secondary background -->
        <div class="flex justify-center bg-white second-background">
            <!-- thirdary background -->
            <div class="w-11/12 third-background">
                <!-- navbar -->
                <div class="flex h-16 bg-white">
                    <!-- navbar three components -->
                    <div class="w-6/12 h-16 flex items-center">
                        <!-- hamburger images -->
                        <img src="./images/hamburger.jpg"  class="h-10">
                        <!-- buttons -->
                        <div class="flex justify-end h-16 w-full items-center text-lg">
                            <a href="#" class="px-2">Home</a>
                            <a href="#" class="px-2">About</a>
                            <a href="#" class="px-2">Special Dishes</a>
                        </div>
                    </div>
                    <div class="flex items-center justify-center text-5xl w-4/12 h-16 pt-4">
                        <!-- main logo of restro -->
                        <p class="logo" style="font-family: 'La Belle Aurore', cursive;">Resto</p>
                    </div>
                    <div class="flex w-6/12 h-16">
                        <!-- buttons -->
                        <div class="flex justify-start h-16 w-full items-center text-lg">
                            <a href="#" class="px-2">Menu</a>
                            <a href="#" class="px-2">Team</a>
                            <a href="#" class="px-2">Reservation</a>
                        </div>
                        <!-- search buttons -->
                    </div>
                    <div class="flex justify-end items-center h-16">
                        <img src="./images/search.jpg" class="h-10">
                    </div>
                </div>
                <!-- navbar ends -->

                <!-- introduction of text -->
                <div class="flex  introduction">
                    <div class="grid w-2/4 flex-column  h-full">
                        <!-- text -->
                        <div class="flex justify-start items-end  text-6xl" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                            <p>We Love <br>Delicious Food!</p>
                        </div>
                        <!-- buttons -->
                        <div class="flex justify-start items-start ">
                            <a href="#" class="bg-red-500 text-white rounded-3xl h-10 w-36 flex justify-center items-center mt-10">
                                Explore Menu
                            </a>
                            <a href="#"class="h-10 w-36 flex justify-center items-center mt-10">
                            <img src="./images/play-video.jpg" class="h-5 w-5">    
                             Play Video
                            </a>
                        </div>
                        <!-- intro of flexing -->
                        <div class="flex justify-start items-start text-lg text-gray-600">
                                <div>
                                    <img src="./images/fast-delivery.jpg" class="h-16 w-24 border-r-4">
                                    <p class="">Fast Delivery</p>
                                </div>
                                <div>
                                    <img src="./images/fresh-food.jpg" class="h-16 w-24 border-r-4 ">
                                    <p class="pl-2">Fresh Food</p>
                                </div>
                                <div>
                                    <img src="./images/247support.jpg" class="h-16 w-24  border-r-4">
                                    <p class="pl-2">24/7 Services</p>
                                </div>
                        </div>
                    </div>
                    
                    <!-- intro image / main image -->
                    <div class="w-2/4 h-full ">
                        <div class="flex justify-center items-center image-intro">
                            <img src="./images/main-image2.jpg" class="w-11/12">
                            <!-- swipe left and swipe right  -->
                            <div class="w-2/4 absolute bg-green-500 flex justify-end items-end mt-80 pt-6 ml-28">
                                   <div class="flex justify-end items-end bg-red-500">
                                    <img src="./images/edited greater.jpg" class="h-20 opacity-75">
                                    <img src="./images/edited smaller.jpg" class="h-20 opacity-75">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- introduction overs -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
