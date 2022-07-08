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

    <!-- Setting item -->
    <a href="{{ route('settings-account') }}">
    <div
      class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out"
    >
      <h2 class="font-bold text-md text-gray-800 dark:text-white">
        Account settings
      </h2>
      <p class="text-xs text-gray-400">Change your email</p>
    </div>
    </a>
    <!-- /Setting item -->

    <!-- Setting item -->
    <a href="{{ route('settings-profile') }}">
    <div
      class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out"
    >
      <h2 class="font-bold text-md text-gray-800 dark:text-white">
        Profile settings
      </h2>
      <p class="text-xs text-gray-400">Displayname and bio settings</p>
    </div>
    </a>
    <!-- /Setting item -->

     <!-- Setting item -->
     <div
     class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out"
   >
     <h2 class="font-bold text-md text-gray-800 dark:text-white">
       Avatar & cover
     </h2>
     <p class="text-xs text-gray-400">Create a pretty profile</p>
   </div>
   <!-- /Setting item -->

    <!-- Setting item -->
    <div
      class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out"
    >
      <h2 class="font-bold text-md text-gray-800 dark:text-white">
        Password settings
      </h2>
      <p class="text-xs text-gray-400">Better secure than sorry</p>
    </div>
    <!-- /Setting item -->

    <h1
      class="text-gray-900 dark:text-white text-md font-bold p-3 border-b border-gray-200 dark:border-dim-200"
    >
      More
    </h1>

     <!-- Setting item -->
     <div
     class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out"
   >
     <h2 class="font-bold text-md text-gray-800 dark:text-white">
       Privacy Policy
     </h2>
     <p class="text-xs text-gray-400">How we handle shit</p>
   </div>
   <!-- /Setting item -->

    <!-- Setting item -->
    <div
      class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out"
    >
      <h2 class="font-bold text-md text-gray-800 dark:text-white">
        Terms of Service
      </h2>
      <p class="text-xs text-gray-400">How you need to handle shit</p>
    </div>
    <!-- /Setting item -->

     <!-- Setting item -->
     <div
     class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out"
   >
     <h2 class="font-bold text-md text-gray-800 dark:text-white">
       Guidelines
     </h2>
     <p class="text-xs text-gray-400">What to do, what to do</p>
   </div>
   <!-- /Setting item -->

    <!-- Setting item -->
    <div
      class="text-blue-400 text-sm font-normal p-3 border-b border-gray-200 dark:border-dim-200 hover:bg-gray-100 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out"
    >
      <h2 class="font-bold text-md text-gray-800 dark:text-white">
        Source code
      </h2>
      <p class="text-xs text-gray-400">Setup your own crappy server</p>
    </div>
    <!-- /Setting item -->

</div>
<!-- /Timeline Notification -->

@endsection