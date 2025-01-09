<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles.css">
    <title>My Radio | Home</title>
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
              .content-auto {
                content-visibility: auto;
              }
            }

      

        .bg-gray-600{
            background: rgba( 93, 138, 190, 0.3 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 1.5px );
            -webkit-backdrop-filter: blur( 2.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }

        .bg-custom {
    background-image: url('assets/img/tmp imges/bg.webp');
    background-size: cover;
    background-position: center;
}
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Include Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Icon with Tailwind styling -->

</head>

<body>

    <!-- ------------ -->

    <body class="bg-gray-900 text-white" style="width: 100%; height: 100vh;">

        <header class="bg-gray-600 text-center " style="width: 100%; height: 10%;">
            <h2 class="text-center text-2xl font-bold ">My Radio</h2>
        </header>

        <!-- Main -->
        <div class="flex w-full mt-2">

            <!-- Player -->

            <div class="block md:w-1/3 w-full " style="height: 82%;">
                <div class="flex ml-1 fi">
                    <div class="w-1/6 lg:bg-gray-600 lg:rounded-md hidden lg:block">
                        <!-- Song 1 -->
                        <a href="">
                            <div class="flex-none snap-center m-1 rounded-md" style="height: 45vh;">
                                <img src="assets/img/tmp imges/0aa02ca4285b4914a7a52dd038718be6.webp" alt="Song 1"
                                    class="rounded-md object-cover overflow-hidden blur-sm" style="height: 45vh;">
                            </div>
                        </a>

                    </div>
                    <div class="w-full lg:w-4/6 w-2/4 mx-1 bg-gray-600 rounded-md">
                        <!-- Song 2 -->
                        <a href="">
                            <div class="flex-none snap-center m-1 rounded-md flex justify-center" style="height: 45vh;">
                                <img src="assets/img/tmp imges/0aa02ca4285b4914a7a52dd038718be6.webp" alt="Song 1"
                                    class="rounded-md object-cover overflow-hidden " style="height: 45vh;">
                            </div>
                        </a>

                    </div>
                    <div class="w-1/6 lg:bg-gray-600 lg:rounded-md hidden lg:block">
                        <!-- Song 3 -->
                        <a href="">
                            <div class="flex-none snap-center m-1 rounded-md" style="height: 45vh;">
                                <img src="assets/img/tmp imges/0aa02ca4285b4914a7a52dd038718be6.webp" alt="Song 1"
                                    class="rounded-md object-cover overflow-hidden blur-sm" style="height: 45vh;">
                            </div>
                        </a>

                    </div>
                </div>

                <!-- channe name -->
                <div class="mx-16 ">
                    <div class="flex justify-between my-8 w-full">
                        <div class="block justify-start ">
                            <h3>Lorem, ipsum.</h3>
                            <p>Lorem ipsum dolor sit.</p>
                        </div>
                        <div class="flex justify-end ">
                            <a href="#" id="likeIcon" class="w-10 flex justify-end">
                                <i class="fa-solid fa-heart text-white text-2xl "></i>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- / channe name -->

                <!-- Navigation btns -->
                <div class="mx-10 mb-2">
                    <div class="flex justify-between my-8 justify-between w-full">
                        <div class="flex justify-start ">
                            <a href="">
                            <i class="fa-solid fa-ban text-white text-xl"></i>
                            </a>
                        </div>
                        <div class="flex justify-end ">
                            <a href="" class="w-10"><img src="assets/img/icon/.png" alt=""></a>
                            <a href="" class="w-10 flex justify-end"><img src="assets/img/icon.png" alt=""></a>

                        </div>
                    </div>
                    <div class=" flex justify-between mt-5 w-full">
                        <a href="" class="w-10 ">  <i class="fa-solid text-white text-2xl fa-list"></i></a>
                        <a href="" class="w-10 ">  <i class="fa-solid text-white text-2xl fa-forward"></i></a>
                        <a href="" class="w-10 ">  <i class="fa-solid text-white text-2xl fa-play"></i></a>
                        <a href="" class="w-10 ">  <i class="fa-solid text-white text-2xl fa-forward"></i></a>
                        <a href="" class="w-10 ">  <i class="fa-solid text-white text-2xl fa-heart"></i></a>

               
                    </div>
                </div>
                <!-- / Navigation btns -->

            </div>

            <!--channel list  -->
            <iframe src="allchannels.php" class="hidden md:block bg-custom-bg bg-cover bg-center"
                style="width: 85%;"></iframe>


        </div>
        <!-- / Main -->

        <!--  footer -->
        <footer class="bg-gray-600 text-center text-white absalute bottom-0 w-full" style="height: 5%; ">
            © 2025 NavodNiwarshana. All rights reserved.
        </footer>

        <!-- / footer -->


        <!-- script -->
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .scroll-smooth {
                scroll-behavior: smooth;
            }
        </style>
        <script>
            const likeIcon = document.getElementById('likeIcon');
            likeIcon.addEventListener('click', () => {
                likeIcon.querySelector('svg').classList.toggle('text-red-500'); // Toggle red color
            });
        </script>
    </body>

</html>

