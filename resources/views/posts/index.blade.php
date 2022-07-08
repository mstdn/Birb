@extends('layouts.app')

@section('content')

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
