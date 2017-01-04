<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>

@include('partials.navbar')

<div class="container-fluid">
    <div class="row">
        @include('partials.sidebar')
        <main>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @include('partials.breadcrumbs')
                @include('partials.errors')
                @include('partials.flash-messages')
                @yield('content')
            </div>
        </main>
    </div>
</div>
@include('partials.scripts')
</body>
</html>
