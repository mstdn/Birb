@extends('layouts.settings')

@section('content')
<!-- Profile -->
<div
class="border-b border-gray-200 dark:border-dim-200 bg-gray-50 dark:bg-dim-300 pt-2 border-l border-r"
>

@include('settings.top')

<h1
      class="text-gray-900 dark:text-white text-md font-bold p-3 border-b border-gray-200 dark:border-dim-200"
    >
      Profile settings
    </h1>

    <p class="text-gray-500 p-4">
        Edit your display name and biography in an instant! No worries, no costs and such. 
      </p>

      
    <form method="POST" action="{{ route('settings-profile-update') }}">
    @csrf
      <h1 class="text-gray-900 dark:text-white text-md font-bold p-3 border-b border-gray-200 dark:border-dim-200">
      Displayname</h1>
        <div class="relative m-2">
            <div
              class="absolute text-gray-600 flex items-center pl-4 h-full cursor-pointer"
            >
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                <circle cx="12" cy="14" r="2"></circle>
                <polyline points="14 4 14 8 8 8 8 4"></polyline>
             </svg>
            </div>
            <input class="w-full bg-gray-200 dark:bg-dim-400 border-gray-200 dark:border-dim-400 text-gray-500 focus:bg-gray-100 dark:focus:bg-dim-900 focus:outline-none focus:border focus:border-blue-200 font-normal h-9 flex items-center pl-12 text-sm rounded-full border shadow"
                name="name" value="{{ auth()->user()->name }}" />
          </div>

          <h1 class="text-gray-900 dark:text-white text-md font-bold p-3 border-b border-gray-200 dark:border-dim-200">
            Bio</h1>
              <div class="relative m-2">
                  <div
                    class="absolute text-gray-600 flex items-center pl-4 h-full cursor-pointer"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                      <circle cx="12" cy="14" r="2"></circle>
                      <polyline points="14 4 14 8 8 8 8 4"></polyline>
                   </svg>
                  </div>
                  <textarea rows="5" class="w-full bg-gray-200 dark:bg-dim-400 border-gray-200 dark:border-dim-400 text-gray-500 focus:bg-gray-100 dark:focus:bg-dim-900 focus:outline-none focus:border focus:border-blue-200 font-normal h-24 flex items-center pl-12 text-sm rounded-full border shadow"
                      name="bio" value="">{{ auth()->user()->bio }}</textarea>
                </div>
          <br />
          <button type="submit" class="mx-auto w-11 h-11 xl:w-auto flex items-center justify-center bg-blue-400 hover:bg-blue-500 p-3 rounded-full text-white font-bold font-sm transition duration-350 ease-in-out mb-10">
            <svg
                fill="currentColor"
                viewBox="0 0 24 24"
                class="block xl:hidden h-6 w-6"
            >
                <path
                d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"
                ></path>
            </svg>
            <span class="hidden xl:block font-bold text-md">Save</span>
          </button>
        </form>

</div>
<!-- /Timeline Notification -->

@endsection