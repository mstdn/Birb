@extends('layouts.account')

@section('content')

<!-- Timeline Notification -->
<div
class="border-b border-gray-200 dark:border-dim-200 bg-gray-50 dark:bg-dim-300 py-2 border-l border-r"
>
<div
  class="flex flex-col items-center justify-center text-center p-6 bg-white dark:bg-dim-900 border-b border-t border-gray-200 dark:border-dim-200 hover:bg-gray-50 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out text-blue-400 text-sm"
>
<img class="inline-block h-16 w-16 rounded-full" src="{{asset('storage/' . $user->avatar)}}" alt="" />
  <h1 class="dark:text-white text-gray-900 text-2xl font-bold mb-2">
    {{ $user->username }}
  </h1>
  <p class="text-gray-500 mb-5">
    {{$user->bio}}
  </p>
  <a
    href="javascript:void(0)"
    onclick="document.querySelector('html').classList.toggle('dark')"
    class="mx-auto w-11 h-11 xl:w-48 flex items-center justify-center bg-blue-400 hover:bg-blue-500 py-3 rounded-full text-white font-bold font-sm transition duration-350 ease-in-out"
  >
    <svg
      fill="currentColor"
      viewBox="0 0 24 24"
      class="block xl:hidden h-6 w-6"
    >
      <g>
        <path
          d="M15.692 11.205l6.383-7.216c.45-.45.45-1.18 0-1.628-.45-.45-1.178-.45-1.627 0l-7.232 6.402s.782.106 1.595.93c.548.558.882 1.51.882 1.51z"
        ></path>
        <path
          d="M17.45 22.28H3.673c-1.148 0-2.083-.946-2.083-2.11V7.926c0-1.165.934-2.112 2.082-2.112h5.836c.414 0 .75.336.75.75s-.336.75-.75.75H3.672c-.32 0-.583.274-.583.612V20.17c0 .336.26.61.582.61h13.78c.32 0 .583-.273.583-.61v-6.28c0-.415.336-.75.75-.75s.75.335.75.75v6.28c0 1.163-.934 2.11-2.084 2.11z"
        ></path>
      </g>
    </svg>
    <span class="hidden xl:block font-bold text-md"
      >Follow {{$user->username}}</span
    >
  </a>
</div>
</div>
<!-- /Timeline Notification -->


@if(count($posts) == 0)

<!-- No posts -->
<div
class="border-b border-gray-200 dark:border-dim-200 bg-gray-50 dark:bg-dim-300 py-2 border-l border-r"
>
<div
  class="flex flex-shrink-0 items-center justify-center py-4 bg-white dark:bg-dim-900 border-b border-t border-gray-200 dark:border-dim-200 hover:bg-gray-50 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out text-blue-400 text-sm"
>
  No posts found! Go follow some users.
  
</div>
</div>
<!-- /No posts -->
@endif
      
@foreach($posts as $post)
<x-post-card :post="$post" />
@endforeach 

@endsection
