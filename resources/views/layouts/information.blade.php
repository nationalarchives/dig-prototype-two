<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
<div id="app">
    <div class="container">
        @include('partials.flash-messages')
        @yield('content')
    </div>
</div>

@include('partials.scripts')
</body>
</html>