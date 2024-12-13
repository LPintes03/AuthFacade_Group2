<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources\css\app.css')<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    @vite('resources\css\app.css')

    <title>Document</title>
</head>

<body class="bg-gray-300">
    <nav class="bg-red-800 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <div class="flex-1">
                                <a href="/"><button
                                        class="bg-red-200 whitespace-nowrap border-red-300     block w-full rounded-lg border p-2 text-center text-base font-medium text-gray transition hover:bg-opacity-90">
                                        Dashboard</button></a>
                            </div>


                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf

                                <button
                                    class="text-gray-900 block w-full -lg border border-gray-200 p-2 text-center text-base font-medium transition hover:border-red-300 hover:bg-red-400 hover:text-gray-500">
                                    Log out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex flex-col items-center mt-20 h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Create a Profile</h2>

            <form action="/create-profile" method="POST" enctype="multipart/form-data" class="flex flex-col">
                @csrf

                <div class="mb-6">
                    <input type="text" name="contact"
                        class="bg-gray-100 text-gray-500 border-0 rounded-md p-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                        placeholder="Contact">
                    @if ($errors->has('contact'))
                        <div class="text-red-600 text-sm mt-1">{{ $errors->first('contact') }}</div>
                    @endif
                </div>

                <div class="mb-4">
                    <textarea name="bio"
                        class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                        placeholder="Bio"></textarea>
                    @if ($errors->has('bio'))
                        <div class="text-red-600 text-sm mt-1">{{ $errors->first('bio') }}</div>
                    @endif
                </div>

                <div class="mb-4">
                    <input type="file" name="profile_pic"
                        class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150">
                    @if ($errors->has('profile_pic'))
                        <div class="text-red-600 text-sm mt-1">{{ $errors->first('profile_pic') }}</div>
                    @endif
                </div>

                <button type="submit"
                    class="bg-gradient-to-r from-red-500 to-gray-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-red-900 hover:to-gray-600 transition ease-in-out duration-150">Apply</button>
            </form>
        </div>
    </div>

</body>

</html>
