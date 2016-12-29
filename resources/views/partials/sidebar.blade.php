<div class="col-sm-3 col-md-2 sidebar">
    <div class="department-identifier">
        <h2> {{ Auth::user()->department->name }} </h2>
    </div>
    @include('partials.search-form')

    <h3>Dashboard</h3>
    <ul class="nav nav-sidebar">
        <li><a href="#">My transfers</a></li>
        <li><a href="#">My records</a></li>
    </ul>
    @include('partials.guidance')
    <h3>Messages</h3>
    <ul class="nav nav-sidebar">
        <li><a href="">Message centre</a></li>
    </ul>
</div>