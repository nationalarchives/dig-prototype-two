<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
<div id="app">
    @include('partials.navbar')

    <div class="authentication">
        @yield('content')
    </div>
</div>

@include('partials.scripts')
</body>
</html>
