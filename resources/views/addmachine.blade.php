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
            background-color: rgb(92 61 195 / var(--tw-bg-opacity)) /* #5c3dc3 */
        }
        .hover\:bg-\[\#462f91\]:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(70 47 145 / var(--tw-bg-opacity)) /* #462f91 */;
        }
        .bg-\[\#462f91\] {
            --tw-bg-opacity: 1;
            background-color: rgb(70 47 145 / var(--tw-bg-opacity)) /* #462f91 */;
        }
        .hover\:bg-\[\#5C3DC3\]:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(92 61 195 / var(--tw-bg-opacity)) /* #5c3dc3 */;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-[#5C3DC3] text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h2 class="text-2xl px-4">Dashboard</h2>
            <input type="text" placeholder="Search for Institute" class="mx-6 px-7 py-2 rounded">
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
                <div class="container mx-auto p-4">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-2xl font-bold mb-4">Machine Details</h2>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Existing form fields -->
                                <div>
                                    <label class="block text-gray-700">Machine Name</label>
                                    <input type="text" name="machine_name" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700">Institution Name</label>
                                    <input type="text" name="machine_id" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700">Institution Id</label>
                                    <input type="text" name="institution_name" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700">Category</label>
                                    <input type="text" name="institution_id" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700">Item Model</label>
                                    <input type="text" name="category" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div>

                                <div>
                                    <label class="block text-gray-700">Manufacturing Date</label>
                                    <input type="date" name="manufacturing_date" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div> 

                                <div>
                                    <label class="block text-gray-700">Count</label>
                                    <input type="text" name="item_model" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div>
                    
                                <div>
                                    <label class="block text-gray-700">Available</label>
                                    <input type="text" name="count" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700">Cost</label>
                                    <input type="text" name="available" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                                </div>
                               
                                <div class="md:col-span-1">
                                    <label class="block text-gray-700">Description</label>
                                    <textarea name="description" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required></textarea>
                                </div>
                                <div class="md:col-span-2" id="specifications-container">
                                    <label class="block text-gray-700">Specification</label>
                                    <textarea name="specification[]" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required></textarea>
                                </div>
                               
                                <div class="md:col-span-2" id="image-container">
                                    <label class="block text-gray-700">Upload Image</label>
                                    <input type="file" name="image[]" class="mt-1 block w-full border border-gray-300 rounded-md p-2" accept="image/*" required>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="bg-[#5C3DC3] hover:bg-[#462f91] text-white font-bold py-2 px-4 rounded">
                                    Save
                                </button>
                                <button type="button" id="add-specification-button" class="bg-[#5C3DC3] hover:bg-[#462f91] text-white font-bold py-2 px-4 rounded">
                                    Add Specification
                                </button>
                                <button type="button" id="add-image-button" class="bg-[#5C3DC3] hover:bg-[#462f91] text-white font-bold py-2 px-4 rounded">
                                    Add Image
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <footer class="bg-[#5C3DC3] text-white py-4 text-center">
        © 2024 IEDC Portal. All rights reserved.
    </footer>
    <script>
        document.getElementById('add-specification-button').addEventListener('click', function() {
            const container = document.getElementById('specifications-container');
            const newTextArea = document.createElement('textarea');
            newTextArea.name = 'specification[]';
            newTextArea.classList.add('mt-1', 'block', 'w-full', 'border', 'border-gray-300', 'rounded-md', 'p-2');
            newTextArea.required = true;
            container.appendChild(newTextArea);
        });

        document.getElementById('add-image-button').addEventListener('click', function() {
            const container = document.getElementById('image-container');
            const newInput = document.createElement('input');
            newInput.type = 'file';
            newInput.name = 'image[]';
            newInput.classList.add('mt-1', 'block', 'w-full', 'border', 'border-gray-300', 'rounded-md', 'p-2');
            newInput.accept = 'image/*';
            newInput.required = true;
            container.appendChild(newInput);
        });
    </script>
</body>
</html>
