<nav class="navbar navbar-inverse navbar-fixed-top notification-panel">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><span
                                class="glyphicon glyphicon-envelope message"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                @include('partials.authentication-links')
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="panel panel-success">
            <div class="panel-heading">Batch LEV2359B008 receipt confirmed</div>
            <div class="panel-body">
                <p>The National Archives confirmed receipt of hard disk containing Batch LEV2359B008 on 14 February
                    2017</p>
                <a href="#" class="btn btn-sm btn-primary pull-right">View batch</a>
            </div>
        </div>

    </div>
</div>