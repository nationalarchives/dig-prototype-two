<div class="col-sm-3 col-md-2 sidebar">
    <div class="department-identifier">
        <h2> {{ Auth::user()->department->name }} </h2>
    </div>
    @include('partials.search-form')

    <h3>{{ trans('editorial.navigation.heading') }}</h3>
    <ul class="nav nav-sidebar">
        @foreach(trans('editorial.navigation.links') as $link)
            <li><a href="#">{{ $link }}</a></li>
        @endforeach
    </ul>
    @include('partials.guidance')
    <h3>{{ trans('editorial.messages.heading') }}</h3>
    <ul class="nav nav-sidebar">
        <li><a href="">Message centre</a></li>
    </ul>
</div>