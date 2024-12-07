<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite("resources\css\app.css")

    <title>Register</title>
</head>

<body>

    <!-- Register Form -->
    <div class="bg-gradient-to-br from-purple-700 to-pink-500 min-h-screen flex flex-col justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md">
            <h1 class="text-4xl font-bold text-center text-purple-700 mb-8">Register</h1>
            <form action="/register" method="POST">
                @csrf
                <input
                    type="text"
                    placeholder="Username"
                    name="name"
                    required
                    class="w-full p-3 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input
                    type="email"
                    placeholder="Email"
                    name="email"
                    required
                    class="w-full p-3 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input
                    type="password"
                    placeholder="Password( 8 characters)"
                    name="password"
                    required
                    class="w-full p-3 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input
                    type="password"
                    placeholder="Confirm Password"
                    required
                    class="w-full p-3 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button
                    type="submit"
                    class="w-full bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg">
                    Register
                </button>
            </form>
            <a href="/login"
                class="toggle-link text-center mt-4 text-blue-500 cursor-pointer hover:underline">
               <p> Already have an account? Login<p>
            </a>
        </div>
    </div>
    </div>



</body>

</html>

<div class="bg-gradient-to-br from-purple-700 to-pink-500 min-h-screen flex flex-col justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md">
        <h1 class="text-4xl font-bold text-center text-purple-700 mb-8">Welcome to My Website</h1>
        <form class="space-y-6">
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="email" name="email"
                    type="email">
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="password" name="password"
                    type="password">
            </div>
            <div>
                <button class="w-full bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg">
                    Log In
                </button>
            </div>
        </form>
    </div>
</div>