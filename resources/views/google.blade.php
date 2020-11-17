@extends('plantilla')
@section('contenido')
<style>
    div.vscroll {
        background-color: #f1f1f1;
        width: 100%;
        height: 800px;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: center;
        padding: 20px;
    }
    h1 {
        color: Green;
    }
    div.scroll {
        margin: 4px, 4px;
        padding: 4px;
        background-color: #e2e2e2;
        width: 90%;
        overflow-x: auto;
        /*overflow-y: hidden;*/
        white-space: nowrap;
    }
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <body>

            <div class="scroll">
                <div id="chart_div"></div>
            </div>
        <?php $datos = '';?>
        @foreach ($entidades as $entidad)
            @if ($entidad->id === 1)
                <?php
                //$t1 = "<div>";
                //$t2 = "</div>";
                $datos=$datos."[{'v':'".$entidad->id."','f':'".$entidad->denominacion."'},'','".$entidad->denominacion."'],";?>
            @else
                <?php $datos=$datos."[{'v':'".$entidad->id."','f':'".$entidad->denominacion."'},'".$entidad->id_padre."','".$entidad->denominacion."'],";?>
            @endif
        @endforeach
        <?php
        $datos2 = "[{'v':'1','f':'1'},'','Organización de Entidades del Estado Plurinacional'],
        [{'v':'2','f':'2'},'1','ADMINISTRACIÓN PÚBLICA '],
        [{'v':'3','f':'3'},'2','ADMINISTRACIÓN PÚBLICA NO FINANCIERA']";
        $datos1 = "[{'v':'1','f':'1<div>Base</div>'},'', 'Base'],
        ['2','1','VP'],
        ['3','1',''],
        ['4','2','Bob Sponge'],
        ['5','3',''],";
        echo($datos);
        ?>

    </body>
    <script type="text/javascript">
        google.charts.load('current', {packages:["orgchart"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Name');
            data.addColumn('string', 'Manager');
            data.addColumn('string', 'ToolTip');

            // For each orgchart box, provide the name, manager, and tooltip to show.
            data.addRows([
                <?php echo($datos)?>
            ]);

            // Create the chart.
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            // Draw the chart, setting the allowHtml option to true for the tooltips.
            chart.draw(data, {'allowHtml':true,
                'allowCollapse':true,
                'size':'large'
            });
        }
    </script>
@endsection
