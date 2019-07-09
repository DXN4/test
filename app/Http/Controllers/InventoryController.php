<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use App\Delivery;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('inventory.create_inventory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_delivery()
    {
        $delivery=Delivery::all();
        return view("inventory.view_delivery",compact('delivery'));
    }

    public function buy($id)
    {
        $inventory=Inventory::find($id);
        return view("inventory.sale_inventory",compact('inventory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory = new Inventory;
        $inventory->nombre = $request->nombre;
        $inventory->cantidad = $request->cantidad;
        $inventory->proveedor = $request->proveedor;
        $inventory->numero_lote = $request->numero_lote;
        $inventory->fecha_vencimiento = $request->fecha_vencimiento;
        $inventory->precio = $request->precio;
        $inventory->save();

        alert()->success('Producto Resgritrado')->autoclose(3500);;
        return redirect('/view-inventory');
    }

    public function buy_store(Request $request)
    {
        $delivery = new Delivery;
        $delivery->id_producto = $request->id_producto;
        $delivery->cantidad = $request->cantidad;
        $delivery->email = $request->email;
        $delivery->precio = $request->precio;
        $delivery->save();
        alert()->success('Producto Resgritrado')->autoclose(3500);;
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $inventory=Inventory::all();
        return view("inventory.view_inventory",compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
