<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
        <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 bg-gray-200 h-screen shadow-md">
                <div class="mt-5">
                    <img class="bg-white w-10/12 mx-auto rounded-lg py-2" src="https://bitmapitsolution.com/images/logo/logo.png" alt="">
                </div>

                <div class="mt-12">
                    <a href="{{route('dashboard')}}" class="block text-xl pl-4 py-2 border-b-2 border-red-300 hover:bg-blue-500 hover:text-white">Dashboard</a>

                    <a href="{{route('notice.index')}}" class="block text-xl pl-4 py-2 border-b-2 border-red-300 hover:bg-blue-500 hover:text-white">Notices</a>

                    <a href="{{route('category.index')}}" class="block text-xl pl-4 py-2 border-b-2 border-red-300 hover:bg-blue-500 hover:text-white">Categories</a>

                    <a href="{{route('news.index')}}" class="block text-xl pl-4 py-2 border-b-2 border-red-300 hover:bg-blue-500 hover:text-white">News</a>


                    <form action="{{route('logout')}}" method="POST" class="block text-xl pl-4 py-2 border-b-2 border-red-300 hover:bg-blue-500 hover:text-white">
                        @csrf
                        <input type="submit" value="Logout" class="w-full text-left">
                    </form>
                </div>
            </div>
            <div class="flex-1">
                @yield('content')
            </div>
        </div>
    </body>
</html>
