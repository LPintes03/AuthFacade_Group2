<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    @vite('resources\css\app.css')
    <title>Profile</title>
</head>

<body class="bg-gray-300">
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

    <div class="h-screen flex items-center justify-center">
        <div
            class="w-full max-w-sm bg-gray-800 border border-red-200 rounded-lg shadow dark:bg-white dark:border-white">


            <div class="flex flex-col items-center p-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('storage/' . $profile->profile_pic) }}"
                    alt="Bonnie image" />
                <h5 class="mb-2 text-xl font-medium text-white dark:text-white">{{ $profile->user->name }}</h5>
                <h1 class="mb-1 text-xl  text-white dark:text-white">Contact #</h1>
                <span class="text-sm text-gray-300 dark:text-gray-400">{{ $profile->contact }}</span>
                <h1 class="mb- text-xl  text-white dark:text-white">Bio</h1>
                <span class="text-sm text-gray-300 dark:text-gray-400">{{ $profile->bio }}</span>

                <div class="m-10">
                    <a href="/">
                        <button
                            class="cursor-pointer transition-all bg-gray-500 text-white px-6 py-2 rounded-lg
                    border-gray-600
                    border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px]
                    active:border-b-[2px] active:brightness-90 active:translate-y-[2px]">
                    Dashboard
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
