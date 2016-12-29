<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
<div id="app">
    @include('partials.navbar')

    <div class="row" style="margin-top: 4em;">
        @yield('content')
    </div>
</div>

@include('partials.scripts')
</body>
</html>
