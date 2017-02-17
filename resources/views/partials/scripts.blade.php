<!-- Scripts -->
<script src="/js/app.js"></script>
{{--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>--}}
{{--<script type="text/javascript">--}}
    {{--google.charts.load('current', {'packages': ['corechart']});--}}
    {{--google.charts.setOnLoadCallback(drawChart);--}}
    {{--function drawChart() {--}}

        {{--var data = google.visualization.arrayToDataTable([--}}
            {{--['Task', 'Uploaded records'],--}}
            {{--['Open records', 824],--}}
            {{--['Closed records with closed description', 310],--}}
            {{--['Closed records with open description', 105]--}}
        {{--]);--}}

        {{--var options = {--}}
            {{--title: 'Records described in CSV metadata'--}}
        {{--};--}}

        {{--var chart = new google.visualization.PieChart(document.getElementById('piechart'));--}}

        {{--chart.draw(data, options);--}}
    {{--}--}}
{{--</script>--}}
<script type="application/javascript" src="http://chart.apis.google.com/chart?cht=p&chs=850x350&chdl=Open+records%7CClosed+records+with+closed+description%7CClosed+records+with+open+description&chl=Open+records%7CClosed+records+with+closed+description%7CClosed+records+with+open+description&chco=4286f4|f45641|41e2f4,4286f4|6699CC|CC33FF&chp=1.48350972222&chtt=Records+described+in+CSV+metadata&chts=000000,18&chd=t:50,10,5|50,25,25"></script>
@yield('scripts')