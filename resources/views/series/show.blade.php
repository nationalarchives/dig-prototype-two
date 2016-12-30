@extends('layouts.dashboard')

@section('content')
    <h1 class="page-header">{{ $series->name }}</h1>
    <p>{{ trans('editorial.series.preamble') }}</p>
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th scope="row">{{ trans('editorial.series.reference') }}</th>
                    <td>{{ $series->reference }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ trans('editorial.series.name') }}</th>
                    <td>{{ $series->name }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ trans('editorial.series.description') }}</th>
                    <td>{{ $series->description }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ trans('editorial.series.parent_collection') }}</th>
                    <td>{{ $series->collection->name }}</td>
                </tr>
                <tr>
                    <th scope="row">{{ trans('editorial.series.transferring_department') }}</th>
                    <td>{{ $series->collection->department->name }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <h2 class="sub-title">{{ trans('editorial.series.batches.heading', [ 'series' => $series->reference ]) }}</h2>
            <ul class="list-group">
                @foreach($series->batches as $batch)
                    <li class="list-group-item">
                        <a href="/batch/{{$batch->id}}">{{ $batch->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('editorial.series.summary_heading', ['series' => $series->reference ]) }}</h3>
                </div>
                <div class="panel-body">
                    <div id="piechart"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Uploaded records'],
                ['Open records', 824],
                ['Closed records with closed description', 310],
                ['Closed records with open description', 105]
            ]);

            var options = {
                title: 'Records described in CSV metadata'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
@endsection