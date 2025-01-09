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
    </style>
</head>

<div class="flex mx-4 mb-2 text-white" style="height:98vh;">

    <div class="bg-gray-600 w-full h-full rounded-2xl">
    <nav class="justify-around flex list-none ">
            <a href="allchannels.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-600 hover:bg-gray-900">All Channels</li>
            </a>
            <a href="favorite.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-800">Favorite</li>
            </a>
            <a href="channelsReq.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-600 hover:bg-gray-800">Channels Request</li>
            </a>
            <a href="aboutUs.php">
                <li class="rounded-xl mt-2 py-2 px-3 bg-gray-600 hover:bg-gray-800">About Us</li>
            </a>
        </nav>
        <div class="m-2 mt-4 flex flex-wrap justify-start content-start">
            
            <!--  -->
            <div class="flex items-center justify-between m-1 px-5 py-2 bg-gray-800 rounded-lg">

                <img src="assets/img/tmp imges/4abeb149-b7a1-4e8a-8a1b-b22bb759e35f_1024.jpeg" class="w-16 h-8 flex m-1"
                    alt="logo">
                <div class="block">
                    <h3>Lorem FM</h3>
                    <p>Lorem, ipsum dolor.</p>
                </div>

            </div>
            <!--  -->
         

        </div>
    </div>
</div>