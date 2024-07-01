<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>


    </style>

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/6 h-screen text-gray-800 bg-white">
            <div class="p-4">
                <ul>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200  hover:bg-cyan-900 hover:text-white">Dashboard</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200  hover:bg-cyan-900 hover:text-white">IEDC Details</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200  hover:bg-cyan-900 hover:text-white">Startups</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-cyan-900 hover:text-white">Events</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200  hover:bg-cyan-900 hover:text-white">Mentors</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-cyan-900 hover:text-white">Settings</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 py-12 bg-gray-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>

                <!-- IEDC Details Section -->
                <div class="mt-8 bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">IEDC Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold text-gray-800">Mission</h4>
                                <p class="mt-2 text-gray-600">
                                    To foster a culture of innovation and entrepreneurship among students and faculty.
                                </p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold text-gray-800">Activities</h4>
                                <p class="mt-2 text-gray-600">
                                    Organizing hackathons, workshops, and mentorship programs to nurture innovative ideas.
                                </p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold text-gray-800">Achievements</h4>
                                <p class="mt-2 text-gray-600">
                                    Successfully hosted multiple national-level events and facilitated several startups.
                                </p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold text-gray-800">Mentors</h4>
                                <p class="mt-2 text-gray-600">
                                    A diverse team of industry experts and experienced professionals guiding the students.
                                </p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold text-gray-800">Collaborations</h4>
                                <p class="mt-2 text-gray-600">
                                    Partnering with renowned organizations and institutions to provide ample opportunities.
                                </p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                                <h4 class="text-xl font-semibold text-gray-800">Upcoming Events</h4>
                                <p class="mt-2 text-gray-600">
                                    Stay tuned for upcoming hackathons, innovation challenges, and networking events.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</x-app-layout>
