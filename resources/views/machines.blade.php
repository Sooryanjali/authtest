<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEDC Portal</title>
    <style>
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    
        .bg-\[\#5C3DC3\] {
            --tw-bg-opacity: 1;
            background-color: rgb(92 61 195 / var(--tw-bg-opacity)) /* #5c3dc3 */;
        }
        .hover\:bg-\[\#462f91\]:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(70 47 145 / var(--tw-bg-opacity)) /* #462f91 */;
        }
        .bg-\[\#462f91\] {
            --tw-bg-opacity: 1;
            background-color: rgb(70 47 145 / var(--tw-bg-opacity)) /* #462f91 */;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-[#5C3DC3] text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h2 class="text-2xl px-4">Dashboard</h2>
        </div>
    </header>
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-black text-white min-h-screen">
            <div class="pt-6 px-4 pb-0">
                <h1 class="text-2xl font-bold">IEDC Portal</h1>
            </div>
            <nav class="mt-10">
                <a href="/" class="block py-4 px-4 text-white hover:bg-[#462f91]">Home</a>
                <a href="{{route('profile.edit')}}"
                    {{ __('Profile') }} class="block py-2.5 px-4 text-white hover:bg-[#462f91]">Profile</a>
                <a href="/dashboard" class="block py-4 px-4 bg-[#462f91]">Machines</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Startups</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Fablabs</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Nodal officers</a>
                <a href="/idea" class="block py-4 px-4 text-white hover:bg-[#462f91]">Idea Validation</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 this.closest('form').submit();"
                        class="block py-2.5 px-4 text-white hover:bg-[#462f91]">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </nav>
        </div>
        
        <!-- Main content -->
        <div class="flex-1">
            <main class="p-6">
                <div class="container mx-auto py-8">
                    @php
                        $groupedMachines = $mach->groupBy('Category');
                    @endphp
                    @foreach($groupedMachines as $category => $machines)
                        <div class="mb-8">
                            <h1 class="text-3xl font-bold mb-4">{{ $category }}</h1>
                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-2">
                                @foreach($machines as $machine)
                                    <div class="bg-white shadow-md w-60 rounded-lg overflow-hidden">
                                        <div class="h-48 bg-gray-200">
                                            <img src="images/printer.jpg" alt="Image description" class="h-full w-full object-cover">
                                        </div>
                                        <div class="p-6">
                                            <h2 class="text-xl font-semibold mb-2">Name: {{ $machine->Machine_name }}</h2>
                                            <h2 class="text-xl font-semibold mb-4">Location: {{ $machine->Location }}</h2>
                                            <a href="{{ url('/machines/detail', ['Machine_name' => $machine->Machine_name]) }}" class="text-white px-4 py-2 rounded bg-[#5C3DC3] hover:bg-[#462f91]">Details</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
        
            </main>
        </div>
    </div>
    <footer class="bg-[#5C3DC3] text-white py-4 text-center">
        © 2024 IEDC Portal. All rights reserved.
    </footer>
</body>
</html>
