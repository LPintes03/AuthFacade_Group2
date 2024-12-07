<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite("resources\css\app.css")
    <title>Login</title>
</head>

<body>


    <!-- Login Form -->
    <div class="bg-gradient-to-br from-purple-700 to-pink-500 min-h-screen flex flex-col justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md">

            <h2 class="text-center text-2xl font-semibold mb-6">Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input
                    type="text"
                    placeholder="Username"
                    name="login_name"
                    required
                    class="w-full p-3 mb-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input
                    type="password"
                    placeholder="Password"
                    name="login_password"
                    required
                    class="w-full p-3 mb-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button
                    type="submit"
                    class="w-full bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg">
                    Login
                </button>
            </form>
            <a href="/register"
                class="toggle-link text-center mt-4 text-blue-500 cursor-pointer hover:underline">
                <p>Don't have an account? Register</p>
            </a>
        </div>
    </div>
    </div>



</body>


</body>

</html>