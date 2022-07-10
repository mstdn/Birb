<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta property="og:site_name" content="{{ config('app.name', 'Birb') }}">
    <meta property="og:title" content="{{ config('app.name', 'Birb') }} Social Network">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{request()->url()}}">
    <!-- Favicon -->
    <link href="{{ asset('favicon.png') }}" rel="icon" type="image/png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white dark:bg-dim-900">
    <div class="container mx-auto h-screen">
      
      <div class="flex flex-row justify-center">
        <!-- Left -->
        <div class="w-68 xs:w-88 xl:w-275 h-screen">
          <div
            class="flex flex-col h-screen xl:pr-3 fixed overflow-y-auto w-68 xs:w-88 xl:w-275"
          >
            <!-- Logo -->
            <a class="flex my-2 justify-center xl:justify-start" href="#">
              <svg
                viewBox="0 0 24 24"
                class="w-8 h-8 text-blue-400 dark:text-white"
                fill="currentColor"
              >
                <g>
                  <path
                    d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"
                  ></path>
                </g>
              </svg>
            </a>
            <!-- /Logo -->

            <!-- Nav -->
            @include('components.nav')
            <!-- /Nav -->

            @auth
            <!-- User Menu -->
            @include('components.user-menu')
            <!-- /User Menu -->
            @endauth
          </div>
        </div>
        <!-- /Left -->

        <!-- Middle -->
        <div class="w-full sm:w-600 h-screen">
          <!-- Header -->
          <div
            class="flex justify-between items-center border-b px-4 py-3 sticky top-0 bg-white dark:bg-dim-900 border-l border-r border-gray-200 dark:border-gray-700"
          >
            <!-- Title -->
            <h2 class="text-gray-800 dark:text-gray-100 font-bold font-sm">
              Home
            </h2>
            <!-- /Title -->

            <!-- Custom Timeline -->
            <div>
              <a href="javascript:void(0)"
              onclick="document.querySelector('html').classList.toggle('dark')">
              <svg
                viewBox="0 0 24 24"
                class="w-5 h-5 text-blue-400"
                fill="currentColor"
              >
                <g>
                  <path
                    d="M22.772 10.506l-5.618-2.192-2.16-6.5c-.102-.307-.39-.514-.712-.514s-.61.207-.712.513l-2.16 6.5-5.62 2.192c-.287.112-.477.39-.477.7s.19.585.478.698l5.62 2.192 2.16 6.5c.102.306.39.513.712.513s.61-.207.712-.513l2.16-6.5 5.62-2.192c.287-.112.477-.39.477-.7s-.19-.585-.478-.697zm-6.49 2.32c-.208.08-.37.25-.44.46l-1.56 4.695-1.56-4.693c-.07-.21-.23-.38-.438-.462l-4.155-1.62 4.154-1.622c.208-.08.37-.25.44-.462l1.56-4.693 1.56 4.694c.07.212.23.382.438.463l4.155 1.62-4.155 1.622zM6.663 3.812h-1.88V2.05c0-.414-.337-.75-.75-.75s-.75.336-.75.75v1.762H1.5c-.414 0-.75.336-.75.75s.336.75.75.75h1.782v1.762c0 .414.336.75.75.75s.75-.336.75-.75V5.312h1.88c.415 0 .75-.336.75-.75s-.335-.75-.75-.75zm2.535 15.622h-1.1v-1.016c0-.414-.335-.75-.75-.75s-.75.336-.75.75v1.016H5.57c-.414 0-.75.336-.75.75s.336.75.75.75H6.6v1.016c0 .414.335.75.75.75s.75-.336.75-.75v-1.016h1.098c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"
                  ></path>
                </g>
              </svg>
              </a>
            </div>
            <!-- /Custom Timeline -->
          </div>
          <!-- /Header -->

          @auth
          <!-- Post Tweet -->
          @include('posts.create')
          <!-- /Post Tweet -->
          @endauth

          <!-- Timeline -->

          <!-- New Tweets -->
          <!-- components.more -->
          <!-- /New Tweets -->

          <!-- Tweet -->
          @yield('content')
          <!-- /Tweet -->

          <!-- Timeline Notification -->
          @include('components.tl-noti')
          <!-- /Timeline Notification -->

          <!-- Spinner -->
          <!-- components.spinner -->
          <!-- /Spinner -->

          <!-- /Timeline -->
        </div>
        <!-- /Middle -->

        <!-- Right -->
        <div class="hidden md:block w-290 lg:w-350 h-screen">
          <div
            class="flex flex-col fixed overflow-y-auto w-290 lg:w-350 h-screen"
          >
            <!-- Search -->
            @include('components.search')
            <!-- /Search -->

            <!-- What’s happening -->
            @include('components.trending')
            <!-- /What’s happening -->

            @auth
            <!-- Who to follow -->
            @include('components.follow')
            <!-- /Who to follow -->
            @endauth

             <!-- footer -->
             @include('components.footer')
             <!-- /footer -->
          </div>
        </div>
        <!-- /Right -->
      </div>
      <x-flash-message />
    </div>
    
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  </body>
</html>
