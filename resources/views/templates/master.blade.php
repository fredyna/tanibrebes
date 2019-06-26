@include('templates.partials._header')
@if (Auth::user())
    @include('templates.partials._sidebar')
    @include('templates.partials._topbar')
@endif
@yield('content')
@include('templates.partials._footer')
