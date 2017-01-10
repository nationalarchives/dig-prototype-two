<!-- Scripts -->
<script src="/js/app.js"></script>
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
@yield('scripts')