<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    @vite('resources\css\app.css')

</head>

<body>

    <nav class="bg-red-800 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://img.logoipsum.com/329.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
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
                            @if (Auth::user()->profile)
                                <div class="flex-1">
                                    <a href="/profile"><button
                                            class="bg-red-200 whitespace-nowrap border-red-300     block w-full rounded-lg border p-2 text-center text-base font-medium text-gray transition hover:bg-opacity-90">View
                                            Profile</button></a>
                                </div>
                            @else
                                <div class="flex-1">
                                    <a href="/create-profile"><button
                                            class="bg-red-200 whitespace-nowrap border-red-300 block w-full rounded-lg border p-2 text-center text-base font-medium text-gray transition hover:bg-opacity-90">Create
                                            Profile</button></a>
                                </div>
                            @endif

                        </li>
                        <li>
                            <div class="flex-1">
                                <a href="/dashboard"><button
                                        class="bg-red-200 whitespace-nowrap border-red-300     block w-full rounded-lg border p-2 text-center text-base font-medium text-gray transition hover:bg-opacity-90">View
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


    <div class="h-screen flex items-center justify-center">

        <div class="  w-full max-w-[570px] rounded-[20px] bg-white py-12 px-8 text-center md:py-[60px] md:px-[70px]">
            <h3 class="text-gray-900 pb-2 text-xl font-bold sm:text-5xl">Welcome {{ Auth::user()->name }}!</h3>
            <span class="bg-red-500 mx-auto mb-2 inline-block h-1 w-[200px] rounded"></span>
            <p class="text-gray-500 mb-40 text-base leading-relaxed">{{ Auth::user()->email }}</p>
        </div>
    </div>



</body>

</html>
