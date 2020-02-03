<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <link href="styles/blog.css" rel="stylesheet">

</head>
<body>
    <header>
        @include('navbar')
    </header>

{{-- <main role="main" class="container"> --}}
    <div class="container">
        <div style="margin-top: 90px" class="blog-post">
            @yield('body')
        </div>
        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module">
                @yield('side')
            </div>
        </aside>
    </div>
{{-- </main> --}}
</body>
</html>
