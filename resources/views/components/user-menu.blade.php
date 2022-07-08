<div x-data="{dropdownMenu: false}" class="relative">
    <!-- User Menu -->
    <button @click="dropdownMenu = ! dropdownMenu" class="w-14 xl:w-full mx-auto mt-auto flex flex-row justify-between mb-5 rounded-full hover:bg-blue-50 dark:hover:bg-dim-800 p-2 cursor-pointer transition duration-350 ease-in-out mb-2">
    <div class="flex flex-row">
    <img
        class="w-10 h-10 rounded-full"
        src="{{asset(auth()->user()->avatar)}}"
        alt="{{auth()->user()->name}}"
    />
    <div class="hidden xl:block flex flex-col ml-2">
        <h1 class="text-gray-800 dark:text-white font-bold text-sm">
        {{auth()->user()->name}}
        </h1>
        <p class="text-gray-400 text-sm">{{auth()->user()->username}}</p>
    </div>

    </div>
    <div class="hidden xl:block">
    <div
        class="flex items-center h-full text-gray-800 dark:text-white"
    >
        <svg
        viewBox="0 0 24 24"
        fill="currentColor"
        class="h-4 w-4 mr-2"
        >
        <g>
            <path
            d="M20.207 8.147c-.39-.39-1.023-.39-1.414 0L12 14.94 5.207 8.147c-.39-.39-1.023-.39-1.414 0-.39.39-.39 1.023 0 1.414l7.5 7.5c.195.196.45.294.707.294s.512-.098.707-.293l7.5-7.5c.39-.39.39-1.022 0-1.413z"
            ></path>
        </g>
        </svg>
    </div>
    </div>
    </button>
    <!-- /User Menu -->

    <div x-show="dropdownMenu" class="absolute right-0 w-auto mt-2 py-2 bg-white border rounded shadow-xl">
        <a href="/{{ '@' . auth()->user()->username }}" @click="dropdown = false" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">
            <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 11.816c1.355 0 2.872-.15 3.84-1.256.814-.93 1.078-2.368.806-4.392-.38-2.825-2.117-4.512-4.646-4.512S7.734 3.343 7.354 6.17c-.272 2.022-.008 3.46.806 4.39.968 1.107 2.485 1.256 3.84 1.256zM8.84 6.368c.162-1.2.787-3.212 3.16-3.212s2.998 2.013 3.16 3.212c.207 1.55.057 2.627-.45 3.205-.455.52-1.266.743-2.71.743s-2.255-.223-2.71-.743c-.507-.578-.657-1.656-.45-3.205zm11.44 12.868c-.877-3.526-4.282-5.99-8.28-5.99s-7.403 2.464-8.28 5.99c-.172.692-.028 1.4.395 1.94.408.52 1.04.82 1.733.82h12.304c.693 0 1.325-.3 1.733-.82.424-.54.567-1.247.394-1.94zm-1.576 1.016c-.126.16-.316.246-.552.246H5.848c-.235 0-.426-.085-.552-.246-.137-.174-.18-.412-.12-.654.71-2.855 3.517-4.85 6.824-4.85s6.114 1.994 6.824 4.85c.06.242.017.48-.12.654z"
                ></path>
              </svg> 
        </a>
        <form action="{{ route('logout')}}" method="POST">
        @csrf
            <button type="submit" @click="dropdown = false" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
             </svg>
            </button>
        </form>
    </div>
</div>