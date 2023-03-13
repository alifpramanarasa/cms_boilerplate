<!doctype html>
<html class="bg-gray-200">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @vite('resources/css/app.css')                    
    </head>
    <body>
        <div class="app">
            <div class="flex">                

                @include('dashboard.partials._sidebar')                                       
                
                <div class="w-full">
                    @include('dashboard.partials._navbar')

                    <div class="p-4">
                        @yield('content')
                    </div>

                </div>
            </div>
        </div>
    <div>  
</html>