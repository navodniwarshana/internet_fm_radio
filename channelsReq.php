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
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-800">Channels Request</li>
            </a>
            <a href="aboutUs.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-600 hover:bg-gray-800">About Us</li>
            </a>
        </nav>

        <div class="m-2 mt-4  items-center">

            <!--  -->
            <div
                class="p-6 bg-gray-800 text-white rounded-lg shadow-lg  overflow-y-scroll h-64 bg-gray-800 custom-scrollbar"
                style="height:80vh;">

                <form action="#" method="POST" class="space-y-4">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium mb-1">Your Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your email" required />
                    </div>

                    <!-- FM Channel Name -->
                    <div>
                        <label for="channel-name" class="block text-sm font-medium mb-1">FM Channel Name</label>
                        <input type="text" id="channel-name" name="channel-name"
                            class="w-full px-3 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter channel name" required />
                    </div>

                    <!-- Frequency -->
                    <div>
                        <label for="frequency" class="block text-sm font-medium mb-1">Frequency</label>
                        <input type="text" id="frequency" name="frequency"
                            class="w-full px-3 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter frequency (e.g., 101.1 MHz)" required />
                    </div>

                    <!-- Country -->
                    <div>
                        <label for="country" class="block text-sm font-medium mb-1">Country</label>
                        <select id="country" name="country"
                            class="w-full px-3 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="" disabled selected>Select your country</option>
                            <option value="US">Sri Lanka</option>
                            <option value="UK">Pakisthan</option>
                            <option value="India">India</option>
                            <option value="Australia">Chaina</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Submit
                        </button>
                    </div>
                </form>  
            </div>
            <!--  -->


        </div>
    </div>
</div>