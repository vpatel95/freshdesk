<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        
        <title>@yield('title')</title>
        @include('includes.common.styles')
        @stack('styles')

    </head>

    <body class=" sidebar_hidden">
        @include('includes.common.header')
        @yield('breadcrumbs')

        <div id="wrapper_all">
            @yield('content')
        </div>

        @yield('side-nav')

        @include('includes.common.footer')

        @include('includes.common.scripts')
        @stack('scripts')

    </body>

</html>
