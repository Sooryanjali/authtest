<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEDC Portal Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-black text-white">
        <div class="p-4 text-center text-2xl font-bold">IEDC Portal</div>
        <nav class="mt-10">
            <a href="#" class="block py-2.5 px-4 hover:bg-purple-600">Home</a>
            <a href="#" class="block py-2.5 px-4 hover:bg-purple-600">Profile</a>
            <a href="#" class="block py-2.5 px-4 bg-purple-600">Machines</a>
            <a href="#" class="block py-2.5 px-4 hover:bg-purple-600">Nodal officers</a>
            <a href="#" class="block py-2.5 px-4 hover:bg-purple-600">Startups</a>
            <a href="#" class="block py-2.5 px-4 hover:bg-purple-600">Fablabs</a>
            <a href="#" class="block py-2.5 px-4 hover:bg-purple-600">Logout</a>
        </nav>
    </div>
    
    <!-- Main content -->
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <input type="text" placeholder="Search Enter Institution Name..." class="border border-gray-300 rounded py-2 px-4">
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex">
                <div class="w-1/3">
                    <div class="bg-gray-200 h-40 mb-4"></div>
                </div>
                <div class="w-2/3 pl-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Machine Name</h2>
                        <span class="text-2xl font-bold text-green-500">$500</span>
                    </div>
                    <div class="mb-4">
                        <p><strong>Machine id:</strong> 12345</p>
                        <p><strong>Institution Name:</strong> XYZ University</p>
                        <p><strong>Institution id:</strong> 67890</p>
                        <p><strong>Category:</strong> XYZ</p>
                        <p><strong>Item Model:</strong> ABC123</p>
                        <p><strong>Manufacturing Date:</strong> 2022-01-01</p>
                        <p><strong>Available:</strong> Yes</p>
                        <p><strong>Count:</strong> 10</p>
                    </div>
                    <button class="bg-purple-600 text-white py-2 px-4 rounded">Edit</button>
                </div>
            </div>

            <div class="mt-4">
                <details class="bg-gray-100 p-4 rounded">
                    <summary class="cursor-pointer font-bold">Description</summary>
                    <p class="mt-2">This is a detailed description of the item including its features and specifications.</p>
                </details>
            </div>
        </div>
    </div>
</div>

<footer class="bg-purple-600 text-white text-center py-4 mt-6">
    &copy; 2023 Dashboard. All rights reserved.
</footer>

</body>
</html>