<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{-- title --}}
        @yield('title')
        {{-- title --}}
    </title>

    {{-- included styles/css --}}
    @include('frontend.layouts.partials.styles')
    {{-- included styles/css --}}
</head>

<body>
    {{-- included navbar --}}
    @include('frontend.layouts.partials.navbar')
    {{-- included navbar --}}

    {{-- main content --}}
    @yield('main-content')
    {{-- main content --}}

    {{-- included scripts --}}
    @include('frontend.layouts.partials.scripts')
    {{-- included scripts --}}

    {{-- custom js --}}
    @yield('custom-scripts')
    {{-- custom js --}}
</body>

</html>
<!-- footer  -->
