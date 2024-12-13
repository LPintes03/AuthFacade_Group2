
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite("resources\css\app.css")

</head>
<body>
    <div class="h-screen flex items-center justify-center">

    
        <div class="  w-full max-w-[570px] rounded-[20px] bg-white py-12 px-8 text-center md:py-[60px] md:px-[70px]">
            <h3 class="text-gray-900 pb-2 text-xl font-bold sm:text-2xl">Welcome {{ $user->name }}</h3>
            <span class="bg-blue-500 mx-auto mb-6 inline-block h-1 w-[90px] rounded"></span>
            <p class="text-gray-500 mb-10 text-base leading-relaxed">Email:{{ $user->email }}</p>

            <div class="flex flex-wrap gap-4">
              @if (Auth::user()->profile)
                <div class="flex-1">
                    <a href="/profile"><button class="bg-blue-500 whitespace-nowrap border-blue-500 block w-full rounded-lg border p-3 text-center text-base font-medium text-white transition hover:bg-opacity-90">View Profile</button></a>
                </div>

              @else
              <div class="flex-1">
                <a href="/create-profile"><button class="bg-blue-500 whitespace-nowrap border-blue-500 block w-full rounded-lg border p-3 text-center text-base font-medium text-white transition hover:bg-opacity-90">Create Profile</button></a>
              </div>
              @endif
                
              <form action="/logout" method="POST">
                @csrf
                <div class="flex-1">
                   <button class="text-gray-900 block w-full rounded-lg border border-gray-200 p-3 text-center text-base font-medium transition hover:border-red-600 hover:bg-red-600 hover:text-white">LogOUt</button>
                 </div>
           </form>
            </div>
          </div>
        </div>
     
       
     
</body>
</html>