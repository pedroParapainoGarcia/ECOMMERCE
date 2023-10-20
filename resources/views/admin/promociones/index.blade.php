@extends('adminlte::page')

@section('title', 'Ecommerce')

@section('content_header')
<h1>Listado de Promociones</h1>
@stop

@section('content')

<a class="btn btn-primary mb-3" href="{{ route('admin.promociones.create')}}">CREAR</a>



<table id="promociones" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
   
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">FechaInicio</th>
            <th scope="col">FechaFin</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($promociones as $promocione)
        <tr>
            <td>{{$promocione->id}}</td>
            <td>{{$promocione->nombre}}</td>
            <td>{{$promocione->precio}}</td>
            <td>{{$promocione->fechainicio}}</td>
            <td>{{$promocione->fechafin}}</td>
                       
            <td>                
                <form action="{{ route ('admin.promociones.destroy',$promocione->id)}}" method="POST">

                    <a href="{{ route ('admin.promociones.edit',$promocione->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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

<script>
    $(document).ready(function() {
    $('#promociones').DataTable({
        //"lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrando de _MAX_ registros totales)",
            'search': 'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        }
    });
} );
</script>

@stop