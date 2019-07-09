@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Inventario</div>
                <div class="panel-body">
                    <table id="" class="table table-striped hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Proveedor</th>
                                <th>Numero de Lote</th>
                                <th>Fecha de Vencimiento</th>
                                <th>Precio</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inventory as $item)
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->cantidad}}</td>
                                <td>{{$item->proveedor}}</td>
                                <td>{{$item->numero_lote}}</td>
                                <td>{{$item->fecha_vencimiento}}</td>              
                                <td>{{$item->precio}}</td>              
                                <td><a class="btn btn-primary" href="{{ url('buy-inventory/'.($item->id)) }}" >Comprar</a></td>              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection