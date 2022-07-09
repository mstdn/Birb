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
      Avatar settings
    </h1>

    <p class="text-gray-500 p-4">
        Edit your display name and biography in an instant! No worries, no costs and such. 
      </p>

      
    <form method="POST" action="{{ route('settings-avatar-update') }}" enctype="multipart/form-data">
    @csrf
      <h1 class="text-gray-900 dark:text-white text-md font-bold p-3 border-b border-gray-200 dark:border-dim-200">
      Avatar upload</h1>
        <div class="relative m-2">
            
            <label class="w-64 flex flex-col items-center text-white px-4 py-6 text-blue bg-blue-400 hover:bg-blue-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue-600 cursor-pointer">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type='file' name="avatar" class="hidden" />
                @error('avatar')
                    <p class="class="text-red-500">{{ $message }}</p>
                @enderror
            </label>
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
        <form method="POST" action="{{ route('settings-cover-update') }}">
            @csrf
          <h1 class="text-gray-900 dark:text-white text-md font-bold p-3 border-b border-gray-200 dark:border-dim-200">
            Banner upload</h1>
              <div class="relative m-2">
                  
                  <label class="w-64 flex flex-col items-center text-white px-4 py-6 text-blue bg-blue-400 hover:bg-blue-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue-600 cursor-pointer">
                      <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                      </svg>
                      <span class="mt-2 text-base leading-normal">Select a file</span>
                      <input type='file' name="header_bg" class="hidden" />
                  </label>
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