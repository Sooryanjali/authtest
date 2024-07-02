<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>

    background-image: linear-gradient(to right, rgb(168, 85, 247), rgb(228, 55, 0));
    background-repeat: no-repeat;
    background-position: left center;
    display: inline-block;
    background-size: 100% 100%;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

           
            @keyframes aura {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .aura-background {
            background: linear-gradient(270deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
            background-size: 800% 800%;
            animation: aura 10s ease infinite;
        }

        .glass {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        .video-background-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        .video-background {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: -1;
        }
        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .bg-cyan-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(6 182 212 / var(--tw-bg-opacity)) /* #06b6d4 */;
}
.hover\:bg-cyan-900:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(22 78 99 / var(--tw-bg-opacity)) /* #164e63 */;
}
.bg-sky-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(12 74 110 / var(--tw-bg-opacity)) /* #0c4a6e */;
}
.backdrop-blur-lg {
    --tw-backdrop-blur: blur(16px);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
@keyframes move {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }
        .bg-opacity-20 {
    --tw-bg-opacity: 0.2;
}

/*.full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }*/
        </style>
    </head>
    <body class="bg-white dark:bg-cyan-900 font-sans leading-normal tracking-normal">
       <!-- <div class="flex-center position-ref full-height">

            @if (Route::has('login') && Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/home') }}">Dashboard</a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

        </div>-->
        <nav class="bg-sky-900 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-lg font-bold">IEDC PORTAL</a>
            <div class="flex items-center">
                <div class="block lg:hidden">
                    <button id="nav-toggle" class="text-gray-400 hover:text-white focus:outline-none">
                        <svg class="fill-current h-6 w-6" viewBox="0 0 24 24">
                            <path d="M4 5h16M4 12h16m-7 7h7"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="w-full flex-grow lg:items-center lg:w-auto hidden lg:block" id="nav-content">
                <div class="text-sm lg:flex-grow">
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-2">Home</a>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-2">About</a>
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-2">Contact</a>
                </div>
            </div>
            <div class="justify-items-end">
                @if (Route::has('login') && Auth::check())
                    <div class="top-left links ">
                        <a href="{{ url('/home') }}">Dashboard</a>
                    </div>
                @elseif (Route::has('login') && !Auth::check())
                    <div class="top-left links ">
                        <a href="{{ url('/login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-2">Login</a>
                        <a href="{{ url('/register') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-2">SignUp</a>
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <div class="video-background-container relative h-screen">
        <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay loop muted>
            <source src="videos/im4.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 flex items-center justify-center bg-opacity-50 ">
            <div class="bg-opacity-0 p-6 rounded-lg  bg-white  text-white text-center">
                <h2 class="text-5xl md:text-6xl font-bold mb-0"> WELCOME TO <span style="background-image: linear-gradient(to right, rgb(14, 208, 208), rgb(8, 93, 189)); background-repeat: no-repeat; background-position: left center; display: inline-block; background-size: 100% 100%; background-clip: text; -webkit-text-fill-color: transparent;">IEDC </span> PORTAL</h2>
                <!--<span class="relative inline-block pb-1 px-1 rounded-lg" style="background-image: linear-gradient(to right, rgb(168, 85, 247), rgb(228, 55, 0)); background-repeat: no-repeat; background-position: left center; display: inline-block; background-size: 100% 100%; background-clip: text; -webkit-text-fill-color: transparent;">world's largest</span>-->
            </div>
        </div>
    </div>
   
    <footer class="bg-sky-900 text-white text-center p-4 mt-0">
        <p>&copy; 2024 IEDC Portal. All rights reserved.</p>
    </footer>
    </body>
</html>

