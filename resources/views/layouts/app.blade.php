<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="{{ url('/') }}">
        <!-- Favicon -->
        <link href="assets/v1/img/favicon.png" rel="icon" type="image/png">
        <link href="assets/v1/img/favicon.ico" rel="shortcut icon">
		
		<!-- all css here -->
        @component('layouts.default.head_scripts')
            @yield('scripts_css')
        @endcomponent

    </head>
    <body>
        <!-- header start -->
        @include('layouts.default.header')

        @component('layouts.default.breadcrumb')
            @slot('title')
                @yield('breadcrumb_title')
            @endslot
        @endcomponent
        
        @yield('content')

        @include('layouts.default.footer')
        
        <!-- all js here -->       
        @component('layouts.default.body_scripts')
            @yield('scripts_js')
        @endcomponent

    </body>
</html>
