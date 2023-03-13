<!doctype html>
<html>
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
                        <div class="shadow-md rounded-lg w-full h-[200px]">
                            <h1>Hello World</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <div>  
</html>