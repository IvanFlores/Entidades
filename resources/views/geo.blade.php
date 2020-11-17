@extends('plantilla')
@section('contenido')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
            id="bolivia" style="width: 900px; height: 600px;">
    </div>
    <script type="text/javascript">
        google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
        });
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
            ['Departamento', 'Cantidad'],
            ['La Paz', 148],
            ['Cochabamba', 20],
            ['Santa Cruz', 36],
        ]);

        var options = {
            region: 'BO',
            resolution: 'provinces',
            colorAxis: {colors: ['lightgreen', 'green']}
        };

        var chart = new google.visualization.GeoChart(document.getElementById('bolivia'));

        chart.draw(data, options);
        }
    </script>
@endsection
