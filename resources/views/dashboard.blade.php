<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    @vite('resources\css\app.css')

    <title>Dashboard</title>

</head>

<body>


    <nav class="bg-gray-300 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ '/' }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">WAD</span>
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
                        <span class="block text-sm text-gray-900 dark:text-white"> {{ Auth::user()->name }}
                        </span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">
                            {{ Auth::user()->email }}

                        </span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ '/' }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>

                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log
                                    out</button>
                            </form>
                    </ul>
                </div>

            </div>

        </div>
    </nav>


    <section class="mt-10 p-4">
        <div class="w-full md:w-1/2 md:mx-auto flex flex-col md:flex-row items-center justify-center text-center">
            <img class="inline-flex object-cover border-4 border-indigo-600 rounded-full shadow-[5px_5px_0_0_rgba(0,0,0,1)] shadow-indigo-600/100 bg-indigo-50 h-24 w-24 !h-32 !w-32 mb-4 md:mb-0 ml-0 md:mr-5"
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxoZWFkc2hvdHxlbnwwfDB8fHwxNjk1ODE3MjEzfDA&ixlib=rb-4.0.3&q=80&w=1080"
                alt="">
            <div class="flex flex-col">
                <div class="md:text-justify mb-3">
                    <div class="flex flex-col mb-5">
                        <p class="text-indigo-900 font-bold text-xl">
                            {{ Auth::user()->name }} </p>

                        <ul class="mt-2 flex flex-row items-center justify-center md:justify-start ">
                            <li class="mr-5">
                                <p class="text-stone-400 text-l">
                                    {{ Auth::user()->email }} </p>
                            </li>


                        </ul>
                    </div>

                    <p class="text-indigo-300 font-semibold text-center md:text-left">
                        {{ Auth::user()->bio }}
                    </p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
