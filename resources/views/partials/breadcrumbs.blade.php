<ol class="breadcrumb">
    <li><a href="{{ route('home.index') }}">{{ Auth::user()->department->name }}</a></li>
    @yield('page_specific_breadcrumbs')
</ol>