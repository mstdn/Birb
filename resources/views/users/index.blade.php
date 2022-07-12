@extends('layouts.account')

@section('content')

<!-- Timeline Notification -->
<div
class="border-b border-gray-200 dark:border-dim-200 bg-gray-50 dark:bg-dim-300 py-2 border-l border-r"
>

<div style="background-image: url({{ asset('storage/' . $user->header_bg) }})" class="flex flex-col items-center justify-center text-center p-6 bg-white dark:bg-dim-900 border-b border-t border-gray-200 dark:border-dim-200 hover:bg-gray-50 dark:hover:bg-dim-300 cursor-pointer transition duration-350 ease-in-out text-blue-400 text-sm"
>
<div class="bg-blend-darken" ></div>
<img class="inline-block h-16 w-16 rounded-full" src="{{asset('storage/' . $user->avatar)}}" alt="" />
  <h1 class="dark:text-white text-gray-900 text-2xl font-bold mb-2">
    {{ $user->username }}
  </h1>
  <p class="text-white mb-5">
    {{$user->bio}}
  </p>
  <x-follow-button :user="$user"></x-follow-button>
</div>

<h1 class="text-gray-900 dark:text-white text-md font-bold p-3 border-b border-gray-200 dark:border-dim-200">
  Birbs by {{ $user->username }}</h1>

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
      
@foreach($posts->reverse() as $post)
<x-post-card :post="$post" />
@endforeach 

@endsection
