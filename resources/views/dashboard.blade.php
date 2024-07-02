<x-app-layout>
    <style>
    .expandable-card {
    transition: max-height 0.3s ease-in-out, padding 0.3s ease-in-out, color 0.3s ease-in-out;
    max-height: 150px;
    max-width: 500px;
    overflow: hidden;
    background-color: #f0f0f0; /* Default background color */
    color: #000; /* Default text color */
}

.expandable-card:hover {
    max-height: 600px; /* Adjust this value based on the content height */
    padding: 16px;
    background-color: #5C3DC3; /* Background color on hover */
    color: #fff; /* Text color on hover */
}
.px-16 {
    padding-left: 4rem /* 64px */;
    padding-right: 4rem /* 64px */;
}
.p-16 {
    padding: 4rem /* 64px */;
}


        .search-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .search-container input[type="text"] {
            width: calc(100% - 100px); /* Adjust width as needed */
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
        }
        .justify-items-center {
    justify-items: center;
}
.hover\:bg-cyan-900:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(22 78 99 / var(--tw-bg-opacity)) /* #164e63 */;
}
.hover\:bg-\[\#5C3DC3\]:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(92 61 195 / var(--tw-bg-opacity)) /* #5c3dc3 */;
}
.hover\:text-white:hover {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity)) /* #ffffff */;
}    
    </style>

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/6 h-screen text-gray-800 bg-white">
            <div class="p-4">
                <ul>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#5C3DC3] hover:text-white">MACHINES</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#5C3DC3] hover:text-white">STARTUPS</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#5C3DC3] hover:text-white">EVENTS</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#5C3DC3] hover:text-white">FABLABS</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#5C3DC3] hover:text-white">NODAL OFFICERS</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-5/6 py-12 bg-gray-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-16 flex justify-between items-center">
                        <div class="font-bold text-2xl text-gray-900">
                            {{ __("TKMCE Rank #5") }}
                        </div>
                        
                        <!-- Search Bar -->
                        <div class="search-container">
                            <input type="text" class="p-2 border border-gray-300 rounded-lg" placeholder="Search for Machines">
                            <div class="p-6">
                                <button class="w-full p-2 transition duration-200 hover:bg-[#5C3DC3] hover:text-white rounded-lg">Search</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IEDC Details Section -->
                <div class="mt-8 bg-white shadow-sm sm:rounded-lg">
                    <div class="px-16 py-16 pb-16 pt-8">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-6">MACHINES</h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
                            <div class="expandable-card bg-gray-50 p-4 rounded-lg shadow-md">
                               
                                <div class="flex items-center space-x-10">
                                    <h4 class="text-xl font-semibold text-black hover:text-white">TKMCE MACHINES</h4>
                                    <h4 class="text-xl font-semibold text-black hover:text-white">70+</h4>
                                </div>
                                <p class="mt-2 text-black hover:text-white">
                                    The Innovation and Entrepreneurship Development Centre (IEDC) aims to foster a culture of innovation and entrepreneurship among students and faculty. It provides various resources, mentorship, and support to turn ideas into viable businesses.
                                </p>
                            </div>
                            
                            <div class="expandable-card bg-gray-50 p-4 rounded-lg shadow-md">
                                
                                <h4 class="text-xl font-semibold text-black hover:text-white">IEDC MACHINES</h4>
                                <p class="mt-2 text-black hover:text-white">
                                    The IEDC nurtures startups by organizing hackathons, workshops, and mentorship programs. These initiatives help students and faculty develop innovative ideas and transform them into successful startups.
                                </p>
                            </div>

                            <div class="expandable-card bg-gray-50 p-4 rounded-lg shadow-md">
                                
                                <h4 class="text-xl font-semibold text-black hover:text-white">RANK #1</h4>
                                <p class="mt-2 text-black hover:text-white">
                                    The IEDC provides access to state-of-the-art machines and tools necessary for prototyping and product development. This includes 3D printers, CNC machines, and other advanced fabrication equipment.
                                </p>
                            </div>

                        </div>
                        <div class="p-8 pt-8">
                            <button class="w-2/3 justify-items-center p-2 transition duration-200 hover:bg-[#5C3DC3] hover:text-white rounded-lg">Edit Machines</button>
                        </div>

                            <h2 class="self-start text-2xl font-semibold tracking-tight leading-7 text-[color:var(--sds-color-text-default-default)]">
                             Categories
                            </h2> 
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</x-app-layout>
