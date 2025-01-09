<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles.cssa">

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

            /* Custom Scrollbar */
        .custom-scrollbar {
            scrollbar-width: thin; /* For Firefox */
            scrollbar-color: #718096 #2d3748; /* Thumb and track colors */
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px; /* Width of the scrollbar */
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #2d3748; /* Dark gray track to match the theme */
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #718096; /* Light gray scrollbar thumb */
            border-radius: 3px; /* Rounded scrollbar thumb */
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background-color: #4a5568; /* Slightly darker gray on hover */
        }

    </style>
</head>
<div class="flex mx-4 mb-2 text-white" style="height:98vh;">

    <div class="bg-gray-600 w-full h-full rounded-2xl">
        <nav class="justify-around flex list-none ">
            <a href="allchannels.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-600 hover:bg-gray-900">All Channels</li>
            </a>
            <a href="favorite.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-600 hover:bg-gray-900">Favorite</li>
            </a>
            <a href="channelsReq.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-600 hover:bg-gray-800">Channels Request</li>
            </a>
            <a href="aboutUs.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-800 ">About Us</li>
            </a>
        </nav>

        <div class="m-2 mt-4  items-center">

            <!--  -->
            <div class=" bg-gray-900 text-white flex items-center justify-center rounded-lg" >
                <div class="max-w-4xl p-6 bg-gray-800 rounded-lg shadow-lg" style="height:80vh;">
                    <h1 class="text-4xl font-bold mb-4 text-center text-blue-500">About Us</h1>
                    <p class="text-gray-300 mb-6 text-lg leading-relaxed text-center">
                        Welcome to our platform! We are dedicated to providing high-quality FM radio channels that
                        connect, entertain, and inform our listeners.
                        Our mission is to deliver a seamless audio experience and become your go-to source for music,
                        news, and entertainment.
                    </p>


                    <!-- Contact Section -->
                    <div class="mt-10 text-center">
                        <h2 class="text-3xl font-semibold mb-4 text-blue-500 ">Contact Us</h2>
                        <p class="text-gray-300">
                            Have questions or suggestions? Feel free to <a href="mailto:info@example.com"
                                class="text-blue-400 underline">email us</a>
                            or follow us on <a href="#" class="text-blue-400 underline">social media</a>.
                        </p>
                    </div>
                </div>
            </div>

            <!--  -->


        </div>
    </div>
</div>