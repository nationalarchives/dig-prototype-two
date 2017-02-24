<!DOCTYPE html>
<html>
    <head>
        <title>Prototype not currently available</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                margin-bottom: 40px;
                font-size: 1.5em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    <h1>{{ trans('editorial.static_pages.maintenance_view.heading') }}</h1>
                    <p>{{ trans('editorial.static_pages.maintenance_view.message') }}</p>
                </div>
            </div>
        </div>
    </body>
</html>
