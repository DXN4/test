@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Pedidos</div>
                <div class="panel-body">
                    <table id="" class="table table-striped hover">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Numero de Lote</th>
                                <th>Fecha de Vencimiento</th>
                                <th>Precio</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($delivery as $item)
                            <tr>
                                <td>{{$item->email}}</td>                            
                                <td>{{$item->delivery->nombre}}</td>
                                <td>{{$item->cantidad}}</td>              
                                <td>{{$item->delivery->numero_lote}}</td>
                                <td>{{$item->delivery->fecha_vencimiento}}</td>
                                <td>{{$item->precio}}</td>                            
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