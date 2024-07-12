<!-- resources/views/machines.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEDC Portal</title>
    <style>
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
        /* Additional custom styles (if needed) */
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-black text-white min-h-screen">
            <div class="p-6 text-center">
                <h1 class="text-2xl font-bold">IEDC Portal</h1>
            </div>
            <nav class="mt-10">
                <a href="#" class="block py-2.5 px-4 text-white hover:bg-purple-500">Home</a>
                <a href="#" class="block py-2.5 px-4 text-white hover:bg-purple-500">Profile</a>
                <a href="{{ route('machines') }}" class="block py-2.5 px-4 bg-purple-500">Machines</a>
                <a href="#" class="block py-2.5 px-4 text-white hover:bg-purple-500">Nodal officers</a>
                <a href="#" class="block py-2.5 px-4 text-white hover:bg-purple-500">Startups</a>
                <a href="#" class="block py-2.5 px-4 text-white hover:bg-purple-500">Fablabs</a>
                <a href="#" class="block py-2.5 px-4 text-white hover:bg-purple-500">Logout</a>
            </nav>
        </div>
        
        <!-- Main content -->
        <div class="flex-1">
            <header class="bg-purple-700 text-white py-4">
                <div class="container mx-auto flex justify-between items-center">
                    <h2 class="text-2xl">Dashboard</h2>
                    <input type="text" placeholder="Search Enter Institution Name..." class="px-4 py-2 rounded">
                </div>
            </header>
            <main class="p-6">
                <div class="container mx-auto py-8">
                @foreach($mach as $machine)
                    <h1 class="text-3xl font-bold mb-8">{{ $machine->Category}} </h1>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        
                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                <div class="h-48 bg-gray-200"></div>
                                <div class="p-6">
                                    <!--$machine->Machine_name-->
                                    <h2 class="text-xl font-semibold mb-2">{{ $machine->Machine_name}}</h2>
                                    <h2 class="text-xl font-semibold mb-2">{{ $machine->Location}}</h2>
                                   
                                    <a href="#" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-4">
                    <button class="w-1/5 justify-items-center p-2 transition duration-200 bg-[#5C3DC3] hover:bg-[#462f91] text-white rounded-lg">Add Machines</button>
                </div>
            </main>
        </div>
    </div>
    <footer class="bg-gray-800 text-white py-4 text-center">
                © 2024 IEDC Portal. All rights reserved.
            </footer>
</body>
</html>
