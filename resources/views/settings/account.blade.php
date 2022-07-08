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
      General settings
    </h1>

    <p class="text-gray-500 p-4">
        Manage your font size, color and background. These settings
        affect all the Twitter accounts on this browser.
      </p>

    <form method="GET" action="/home">
        <!-- Search -->
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
                name="email" value="{{ auth()->user()->email }}" />
          </div>
          <!-- /Search -->
          <br />
          <button type="submit" class="mx-auto w-11 h-11 xl:w-auto flex items-center justify-center bg-blue-400 hover:bg-blue-500 p-3 rounded-full text-white font-bold font-sm transition duration-350 ease-in-out mb-10">
            <svg
                fill="currentColor"
                viewBox="0 0 24 24"
                class="block xl:hidden h-6 w-6"
            >
                <path
                d="M8.8 7.2H5.6V3.9c0-.4-.3-.8-.8-.8s-.7.4-.7.8v3.3H.8c-.4 0-.8.3-.8.8s.3.8.8.8h3.3v3.3c0 .4.3.8.8.8s.8-.3.8-.8V8.7H9c.4 0 .8-.3.8-.8s-.5-.7-1-.7zm15-4.9v-.1h-.1c-.1 0-9.2 1.2-14.4 11.7-3.8 7.6-3.6 9.9-3.3 9.9.3.1 3.4-6.5 6.7-9.2 5.2-1.1 6.6-3.6 6.6-3.6s-1.5.2-2.1.2c-.8 0-1.4-.2-1.7-.3 1.3-1.2 2.4-1.5 3.5-1.7.9-.2 1.8-.4 3-1.2 2.2-1.6 1.9-5.5 1.8-5.7z"
                ></path>
            </svg>
            <span class="hidden xl:block font-bold text-md">Save</span>
          </button>
        </form>

</div>
<!-- /Timeline Notification -->

@endsection