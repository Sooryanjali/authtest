
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
                <a href="#" class="block py-4 px-4 bg-[#462f91]">Machines</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Startups</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Fablabs</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Nodal officers</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Idea Validation</a>
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
    <div class="flex-1 p-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex">
                <div class="w-1/3">
                    <div class="bg-gray-200 h-40 mb-4"></div>
                </div>

                @foreach ($mach as $machine )
                <div class="w-2/3 pl-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Machine Name :{{ $machine->Machine_name}}</h2>
                        <span class="text-2xl font-bold text-green-500">${{ $machine->rate}}</span>
                    </div>
                    <div class="mb-4">
                        <p><strong>Machine id:</strong> {{ $machine->Machine_ID}}</p>
                        <p><strong>Institution Name:</strong> {{ $machine->Institution_id}}</p>
                        <p><strong>Institution id:</strong> {{ $machine->Institution_id}}</p>
                        <p><strong>Category:</strong> {{ $machine->Category}}</p>
                        <p><strong>Item Model:</strong> {{ $machine->Model}}</p>
                        <p><strong>Manufacturing Date:</strong> {{ $machine->Date_of_manufacture}}</p>
                        <p><strong>Available:</strong> {{ $machine->Available}}</p>
                        <p><strong>Count:</strong> {{ $machine->count}}</p>
                    </div>
                    <button class="bg-[#5C3DC3] hover:bg-[#462f91] text-white py-2 px-4 rounded">Edit</button>
                </div>
            </div>
            @endforeach

            <div class="mt-4">
                <details class="bg-gray-100 p-4 rounded">
                    <summary class="cursor-pointer font-bold">Description</summary>
                    <p class="mt-2">This is a detailed description of the item including its features and specifications.</p>
                </details>
            </div>
        </div>
    </div>
</div>
<footer class="bg-[#5C3DC3] text-white py-4 text-center">
    &copy; 2023 Dashboard. All rights reserved.
</footer>
</body>
</html>