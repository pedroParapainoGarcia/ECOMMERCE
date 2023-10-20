@extends('adminlte::page')

@section('title', 'Ecommerce')

@section('content_header')
<h1>Lista de Productos </h1>
@stop

@section('content')


<a class="btn btn-primary mb-3" href="{{ route('admin.productos.create')}}">CREAR</a>


<table id="productos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">



    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">PrecioCompra</th>
            <th scope="col">PrecioVenta</th>
            <th scope="col">Stock</th>
            <th scope="col">Categoria</th>
            <th scope="col">Marca</th>
            <th scope="col">Promocion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->preciocompra}}</td>
            <td>{{$producto->precioventa}}</td>
            <td>{{$producto->stock}}</td>
            
            
            

            <td>
                @foreach($categorias as $categoria)
                @if($producto->id_categoria == $categoria->id)                
                <h6><span>{{$categoria->nombre}}</span></h6>
                @endif
                @endforeach
            </td>

            <td>
                @foreach($marcas as $marca)
                @if($producto->id_marca == $marca->id)                
                <h6><span>{{$marca->nombre}}</span></h6>
                @endif
                @endforeach
            </td>

            <td>
                @foreach($promociones as $promocione)
                @if($producto->id_promocion == $promocione->id)                
                <h6><span>{{$promocione->nombre}}</span></h6>
                @endif
                @endforeach
            </td>

            <td>
                <form action="{{ route ('admin.productos.destroy',$producto->id)}}" method="POST">
                    <a href="{{ route ('admin.productos.edit',$producto->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info"><i class="fa fa-trash"></i></button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<!-- SUM()  Datatables-->
<script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>

<script>
    $(document).ready(function() {
    $('#productos').DataTable({
        
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar" + 
            `<select>
                <option value = '5'>5</option>
                <option value = '10'>10</option>
                <option value = '25'>25</option>
                <option value='100'>100</option>
                <option value='-1'>All</option>
                </select>` +            
            "registros por página",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrando de _MAX_ registros totales)",
            'search': 'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        },
        
        
    });  

} ); 

</script>

@stop