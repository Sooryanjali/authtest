<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
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
    background: rgba(255, 255, 255, 0.036); /* Decreased opacity */
    backdrop-filter: blur(20px); /* Increased blur value */
    -webkit-backdrop-filter: blur(20px); /* Increased blur value for WebKit browsers */
    border-radius: 10px;
    border: 0px solid rgba(255, 255, 255, 0.3);
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
            .bg-\[\#8B58E3\] {
                --tw-bg-opacity: 1;
                background-color: rgb(139 88 227 / var(--tw-bg-opacity)) /* #8b58e3 */;
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
                --tw-backdrop-blur: blur(0%px);
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
            .bg-\[\#5C3DC3\] {
    --tw-bg-opacity: 1;
    background-color: rgb(92 61 195 / var(--tw-bg-opacity)) /* #5c3dc3 */;
}
.hover\:bg-\[\#462f91\]:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(70 47 145 / var(--tw-bg-opacity)) /* #462f91 */;
}

            /* Custom styles for the marquee effect */
        .marquee {
            display: flex;
            overflow: hidden;
            white-space: nowrap;
            animation: marquee 60s linear infinite ;
        }
        .marquee-reverse {
            animation-direction: reverse;
        }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .font-semibold {
    font-weight: 600;
}
        </style>
    </head>
    <body class="bg-white dark:bg-cyan-900 font-sans leading-normal tracking-normal">
        <nav class="glass p-4 fixed w-full top-0 z-10">
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
                        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-4">Home</a>
                        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-4">About</a>
                        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-4">Contact</a>
                    </div>
                </div>
                <div class="justify-items-end">
                    @if (Route::has('login') && Auth::check())
                        <div class="top-left links ">
                            <a href="{{ url('/dashboard') }}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-400 hover:text-white mx-2">Dashboard</a>
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
                <source src="videos/im3.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 flex items-center justify-center bg-opacity-50">
                <div class="bg-opacity-0 p-6 rounded-lg bg-white text-white text-center">
                    <h2 class="text-5xl md:text-6xl font-bold mb-0"> WELCOME TO <span style="background-image: linear-gradient(to right, rgb(14, 208, 208), rgb(8, 93, 189)); background-repeat: no-repeat; background-position: left center; display: inline-block; background-size: 100% 100%; background-clip: text; -webkit-text-fill-color: transparent;">IEDC </span> PORTAL</h2>
                </div>
            </div>
        </div>
        
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-black px-12 pt-8">MACHINE CATEGORY</h1>
        </div>

        <div class="relative flex h-[500px] w-full flex-col items-center justify-center overflow-hidden rounded-lg border-white bg-background md:shadow-xl">
            <!-- First Marquee Row -->
            <div class="marquee pause-on-hover">
                @for ($i=0;$i<10;$i++)
                    <figure class="relative w-80 cursor-pointer overflow-hidden rounded-xl border p-12 border-white bg-white hover:bg-white">
                                    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105">
                                        <div class="h-48 bg-gray-200">
                                            <img src="{{ asset('path/to/your/image.jpg') }}" alt="Image description" class="h-full w-full object-cover">
                                        </div>

                                        <div class="p-6">
                                            <h2 class="text-xl font-semibold mb-2">Category {{$i}}</h2>
                                            <a href="/login" class=" text-white px-4 py-2 rounded bg-[#5C3DC3] hover:bg-[#462f91]">View More</a>
                                        </div>
                                    </div>
                    </figure>
                @endfor
                  
   

                   

 
            </div>
    
            <!-- Second Marquee Row 
            <div class="marquee marquee-reverse pause-on-hover">
              
                <figure class="relative w-80 cursor-pointer overflow-hidden rounded-xl border p-12 border-white bg-white hover:bg-white">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105">
                        <div class="h-48 bg-gray-200"></div>
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2">Machine</h2>
                            <a href="/login" class=" text-white px-4 py-2 rounded bg-[#5C3DC3] hover:bg-[#462f91]">Details</a>
                        </div>
                    </div>
                </figure>

                <figure class="relative w-80 cursor-pointer overflow-hidden rounded-xl border p-12 border-white bg-white hover:bg-white">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform hover:scale-105">
                        <div class="h-48 bg-gray-200"></div>
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2">Machine</h2>
                            <a href="/login" class=" text-white px-4 py-2 rounded bg-[#5C3DC3] hover:bg-[#462f91]">Details</a>
                        </div>
                    </div>
                </figure> -->

                
            </div>
        </div>
    
        <!-- Include Marquee Script -->
        <script>
            // Pause on hover for the marquee
            document.querySelectorAll('.pause-on-hover').forEach(el => {
                el.addEventListener('mouseover', () => el.style.animationPlayState = 'paused');
                el.addEventListener('mouseout', () => el.style.animationPlayState = 'running');
            });
        </script>

        <footer class="bg-black text-white text-center p-4 mt-0">
            <p>&copy; 2024 IEDC Portal. All rights reserved.</p>
        </footer>
    </body>
</html>
