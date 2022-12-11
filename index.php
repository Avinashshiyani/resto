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
    <div class="flex justify-center items-center h-screen w-screen bg-red-200">
        <!-- secondary background -->
        <div class="flex justify-center bg-white second-background">
            <!-- thirdary background -->
            <div class="bg-green-500 w-11/12 third-background">
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
                        <div class="flex justify-end items-center h-16">
                            <img src="./images/search.jpg" class="h-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
