@vite("resources\css\app.css")

<div class="h-screen flex items-center justify-center">
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
        
    <div class="flex flex-col items-center p-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('storage/' . $profile->profile_pic) }}" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $profile->user->name }}</h5>
        <h1 class="mb-1 text-xl  text-gray-900 dark:text-white">Contact #</h1>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $profile->contact }}</span>
        <h1 class="mb-1 text-xl  text-gray-900 dark:text-white">Bio</h1>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $profile->bio }}</span>
        
        <div class="m-10">
            <a href="/">
                <button class="cursor-pointer transition-all bg-blue-500 text-white px-6 py-2 rounded-lg
                border-blue-600
                border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px]
                active:border-b-[2px] active:brightness-90 active:translate-y-[2px]">
                  home
                </button>
            </a>
        </div>
    </div>
</div>
</div>

