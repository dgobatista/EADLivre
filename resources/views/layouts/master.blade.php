<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title') - Admin</title>
        <meta content="CDA Dashboard" name="description" />
        <meta content="Jimmy" name="author" />
        @include('layouts.head')
    </head>
<body>
    <div class="wrapper">
            @include('layouts.sidebar')
            @include('layouts.header')
        <div class="page-wrapper">
                @include('layouts.settings')
                <div class="page-body">
                   @yield('content')
                </div>
                @include('layouts.footer')  
                @include('layouts.footer-script')
        </div> 
    </div> 

    </body>
</html>