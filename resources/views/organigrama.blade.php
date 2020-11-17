@extends('plantillaorg')
@section('contenido')
    <div id="chart-container"></div>
<!-- <button id="btn-export-hier">Exportar Estructura</button> -->
<div id="datos">
    <?php $datos = '';?>
    @foreach ($entidades as $entidad)
        @if ($entidad->id === 1)
            <?php $datos=$datos.'{id:'.$entidad->id.', entidad: "'.$entidad->denominacion.'" },';?>
        @else
            <?php $datos=$datos.'{id:'.$entidad->id.', pid: '.$entidad->id_padre.', entidad: "'.$entidad->denominacion.'" },';?>
        @endif
    @endforeach
</div>

<!-- <p>
    <?php echo($estructura[0])?>
</p>
<div>
    @foreach ($hijos as $hijo)
        <div>{{ $hijo }}</div>
    @endforeach
</div> -->

<script type="text/javascript" src="js/core.min.js"></script>
<script type="text/javascript" src="js/jquery.mockjax.min.js"></script>
<script type="text/javascript" src="js/jquery.orgchart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script type="text/javascript">
    $(function() {

        <?php forEach($hijos as $hijo) echo($hijo);?>

        var datascource = {
            <?php echo($estructura[0]);?>
        };

        var ajaxURLs = {
            'children': '/orgchart/children/',
        };

        var oc=$('#chart-container').orgchart({
            'data' : datascource,
            'ajaxURL': ajaxURLs,
            'nodeContent': 'title',
            'nodeId': 'id',
            //'pan': true,
            //'zoom': true,
            //'verticalLevel': 5,
            //'visibleLevel': 10,
            //'exportButton': true,
            'exportFilename': 'Entidades',
            'direction': 'l2r'
        });
        $('#btn-export-hier').on('click', function() {
          if (!$('pre').length) {
            //var oc = $('#chart-container');
            var hierarchy = oc.getHierarchy();
            $('#btn-export-hier').after('<pre>').next().append(JSON.stringify(hierarchy, null, 2));
          }
        });
    });
</script>
<script src="/js/script.js"></script>
@endsection
