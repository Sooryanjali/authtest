<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEDC Portal</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Machines</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Startups</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Fablabs</a>
                <a href="#" class="block py-4 px-4 text-white hover:bg-[#462f91]">Nodal officers</a>
                <a href="/machines/idea" class="block py-4 px-4 text-white bg-[#462f91]">Idea Validation</a>
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
                <!-- Chat Interface -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-4">Idea Validation Chat</h2>
                    <div id="chat-box" class="border rounded p-4 h-64 overflow-y-scroll mb-4 bg-gray-100">
                        <!-- Chat messages will be appended here -->
                    </div>
                    <div class="flex">
                        <input type="text" id="chat-input" class="flex-1 border rounded-l px-4 py-2" placeholder="Type your message...">
                        <button id="send-btn" class="bg-[#5C3DC3] text-white px-4 py-2 rounded-r">Send</button>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <footer class="bg-[#5C3DC3] text-white py-4 text-center">
        © 2024 IEDC Portal. All rights reserved.
    </footer>

    <script>
        document.getElementById('send-btn').addEventListener('click', () => {
            const chatInput = document.getElementById('chat-input');
            const chatBox = document.getElementById('chat-box');
            const message = chatInput.value.trim();

            if (message) {
                const userMessage = document.createElement('div');
                userMessage.className = 'text-right mb-2';
                userMessage.innerHTML = '<span class="inline-block bg-blue-500 text-white rounded px-4 py-2">' + message + '</span>';
                chatBox.appendChild(userMessage);

                // Scroll to the bottom of the chat box
                chatBox.scrollTop = chatBox.scrollHeight;

                // Clear the input field
                chatInput.value = '';

                // Send the message to the backend
                fetch('/chat', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({ message: message })
                })
                .then(response => response.json())
                .then(data => {
                    const botMessage = document.createElement('div');
                    botMessage.className = 'text-left mb-2';
                    botMessage.innerHTML = '<span class="inline-block bg-gray-300 text-black rounded px-4 py-2">' + data.response + '</span>';
                    chatBox.appendChild(botMessage);

                    // Scroll to the bottom of the chat box
                    chatBox.scrollTop = chatBox.scrollHeight;
                })
                .catch(error => {
                    const botMessage = document.createElement('div');
                    botMessage.className = 'text-left mb-2';
                    botMessage.innerHTML = '<span class="inline-block bg-red-300 text-black rounded px-4 py-2">Error: Could not process your request.</span>';
                    chatBox.appendChild(botMessage);

                    // Scroll to the bottom of the chat box
                    chatBox.scrollTop = chatBox.scrollHeight;
                });
            }
        });
    </script>
</body>
</html>
