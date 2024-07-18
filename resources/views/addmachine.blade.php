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
        .border-indigo-500 {
            --tw-border-opacity: 1;
            border-color: rgb(99 102 241 / var(--tw-border-opacity)) /* #6366f1 */;
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
                <a href="{{route('profile.edit')}}" class="block py-2.5 px-4 text-white hover:bg-[#462f91]">{{ __('Profile') }}</a>
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
        <div class="flex-1">
            <main class="p-6">
                <div class="container mx-auto p-4">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-2xl font-bold mb-4">Machine Details</h2>
                        <form method="POST" action="{{ route('input') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Machine Name -->
                                <div>
                                    <x-input-label for="machine_name" :value="__('Machine Name')" />
                                    <x-text-input id="machine_name" class="block mt-1 w-full h-10 border-gray-300" type="text" name="machine_name" :value="old('machine_name')" required autofocus />
                                    <x-input-error :messages="$errors->get('machine_name')" class="mt-2" />
                                </div>
                                
                                <!-- Institution ID -->
                                <div>
                                    <x-input-label for="institution_id" :value="__('Institution ID')" />
                                    <x-text-input id="institution_id" class="block mt-1 w-full h-10 border-gray-300" type="text" name="institution_id" :value="old('institution_id')" required />
                                    <x-input-error :messages="$errors->get('institution_id')" class="mt-2" />
                                </div>
                                
                                <!-- Category -->
                                <div>
                                    <x-input-label for="category" :value="__('Category')" />
                                    <x-text-input id="category" class="block mt-1 w-full h-10 border-gray-300" type="text" name="category" :value="old('category')" required />
                                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                                </div>
                                
                                <!-- Model -->
                                <div>
                                    <x-input-label for="model" :value="__('Model')" />
                                    <x-text-input id="model" class="block mt-1 w-full h-10 border-gray-300" type="text" name="model" :value="old('model')" required />
                                    <x-input-error :messages="$errors->get('model')" class="mt-2" />
                                </div>
                                
                                <!-- Location -->
                                <div>
                                    <x-input-label for="location" :value="__('Location')" />
                                    <x-text-input id="location" class="block mt-1 w-full h-10 border-gray-300" type="text" name="location" :value="old('location')" required />
                                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                                </div>
                                
                                <!-- Date of Manufacture -->
                                <div>
                                    <x-input-label for="date_of_manufacture" :value="__('Date of Manufacture')" />
                                    <x-text-input id="date_of_manufacture" class="block mt-1 w-full h-10 border-gray-300" type="date" name="date_of_manufacture" :value="old('date_of_manufacture')" required />
                                    <x-input-error :messages="$errors->get('date_of_manufacture')" class="mt-2" />
                                </div>
                                
                                <!-- Rate -->
                                <div>
                                    <x-input-label for="rate" :value="__('Rate')" />
                                    <x-text-input id="rate" class="block mt-1 w-full h-10 border-gray-300" type="number" name="rate" :value="old('rate')" required />
                                    <x-input-error :messages="$errors->get('rate')" class="mt-2" />
                                </div>
                                
                                <!-- Count -->
                                <div>
                                    <x-input-label for="count" :value="__('Count')" />
                                    <x-text-input id="count" class="block mt-1 w-full h-10 border-gray-300" type="number" name="count" :value="old('count')" required />
                                    <x-input-error :messages="$errors->get('count')" class="mt-2" />
                                </div>

                                <!-- Description -->
                                <div class="md:col-span-2">
                                    <x-input-label for="description" :value="__('Description')" />
                                    <textarea id="description" class= " resize-none block mt-1 w-full border border-gray-300 rounded-md p-2" name="description" required>{{ old('description') }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>

                                <!-- Specification -->
                                <div class="md:col-span-2" id="specifications-container">
                                    <x-input-label for="specification" :value="__('Specification')" />
                                    @foreach (old('specification', ['']) as $specification)
                                        <textarea id="specification" class=" resize-none caret-[#462f91] block mt-1 w-full border border-gray-300 rounded-md p-2" name="specification[]" required>{{ $specification }}</textarea>
                                    @endforeach
                                    <x-input-error :messages="$errors->get('specification')" class="mt-2" />
                                </div>

                                <!-- Images -->
                                <div class="md:col-span-2" id="image-container">
                                    <x-input-label for="image" :value="__('Upload Image')" />
                                    @if (old('image'))
                                        @foreach (old('image') as $image)
                                            <input id="image" class="block mt-1 w-full border border-gray-300 rounded-md p-2" type="file" name="image[]" accept="image/*" required />
                                        @endforeach
                                    @else
                                        <input id="image" class="block mt-1 w-full border border-gray-300 rounded-md p-2" type="file" name="image[]" accept="image/*" required />
                                    @endif
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>

                            <div class="flex items-center justify-end transition duration-150 ease-out hover:ease-in mt-6">
                                <x-primary-button class="ml-4" onclick="document.getElementById('save-modal').showModal()">
                                    {{ __('Save') }}
                                </x-primary-button>

                                <button type="button" id="add-specification-button" class="ml-4 bg-[#5C3DC3] hover:bg-[#462f91] text-white font-bold py-2 px-4 rounded">
                                    Add Specification
                                </button>
                                <button type="button" id="add-image-button" class="ml-4 bg-[#5C3DC3] hover:bg-[#462f91] text-white font-bold py-2 px-4 rounded">
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
