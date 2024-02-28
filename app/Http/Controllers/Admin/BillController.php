<?php

namespace App\Http\Controllers\Admin;
use App\Models\Bill;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Product;

use Validator, Str, Config;

class BillController extends Controller
{
    //
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }
    public function getHome(){
        $bills = Bill::all();
        return view('admin.bills.home', ['bills' => $bills]);
    }

    public function getBillAdd(){
        return view('admin.bills.add');
    }

    public function postBillAdd(Request $request)
    {   $rules = [
            'id_product' => 'required|exists:products,id',
            'id_client' => 'required|exists:clients,id_c',
            'date_e' => 'required|date',
            'price' => 'required|numeric|min:0',
            'discount' => 'required_if:indiscount,1|numeric|min:0',
            'date' => 'required|date',
            'payment' => 'required',
            'facest' => 'required',
            'content' => 'nullable'
        ];
        $messages = [
            'id_product.required' => 'Se requiere el ID del producto',
            'id_product.exists' => 'El ID del producto no existe',
            'id_client.required' => 'Se requiere el ID del cliente',
            'id_client.exists' => 'El ID del cliente no existe',
            'date_e' => 'se requiere la fecha de entrega del producto',
            'price' => 'se requiere el precio del producto',
            'discount' => 'se requiere el descuento que tiene el producto, puede ser 0 en caso de que no lo tenga',
            'date' => 'se requiere la fecha del día de la realización de la factura',
            'payment' => 'se requiere escoger el metodo de pago del cliente',
            'facest' => 'se requiere saber el estado de la factura',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        }

        // Calcular subtotal y total
        $price = $request->input('price');
        $indiscount = $request->input('indiscount');
        $discount = $request->input('discount');
        $subtotal = $price + ($indiscount == 1 ? $discount : 0);
        $total = $subtotal * 1.19; // 19% de IVA
        $bill = new Bill();
        $id_client = $request->input('id_client');
        $id_product = $request->input('id_product');

        // Validar la existencia del cliente
        $client = Client::find($id_client);
        if (!$client) {
            return back()->with('message', 'El cliente especificado no existe')->with('typealert', 'danger');
        }

        // Assigning id_client to the bill
        $bill->id_client = $id_client;

        // Validar la existencia del producto
        $product = Product::find($id_product);
        if (!$product) {
            return back()->with('message', 'El producto especificado no existe')->with('typealert', 'danger');
        }

            $bill->id_product = $request->input('id_product');
            $bill->date_e = $request->input('date_e');
            $bill->price = $request->input('price');
            $bill->indiscount = $request->input('indiscount');
            $bill->discount = $request->input('discount');
            $bill->date = $request->input('date');
            $bill->payment = $request->input('payment');
            $bill->facest = $request->input('facest');
            $bill->content = $request->input('content');
            $bill->subtotal = $subtotal;
            $bill->total = $total;
        


        if ($bill->save()) {
            return redirect('/admin/bills')->with('message', 'Guardado con éxito')->with('typealert', 'success');
        } else {
            return back()->with('message', 'Se ha producido un error al guardar la factura')->with('typealert', 'danger');
        }
    }


    public function getBillEdit($id){
        $bill = Bill::find($id);
        if (!$bill) {
            return back()->with('message', 'La factura especificada no existe')->with('typealert', 'danger');
        }
        return view('admin.bills.edit', compact('bill'));
    }
    
    public function postBillEdit(Request $request, $id){
        $rules = [
            'id_product' => 'required',
            'id_client' => 'required',
            'date_e' => 'required|date',
            'price' => 'required|numeric|min:0',
            'discount' => 'required_if:indiscount,1|numeric|min:0',
            'date' => 'required|date',
            'payment' => 'required',
            'facest' => 'required',
            'content' => 'nullable'
        ];
    
        $messages = [
            'id_product' => 'se requiere de un nombre del producto que solicita',
            'icon.required' => 'se requiere la cédula del cliente que esta almacenada en la base de datos',
            'date_e' => 'se requiere la fecha de entrega del producto',
            'price' => 'se requiere el precio del producto',
            'discount' => 'se requiere el descuento que tiene el producto, puede ser 0 en caso de que no lo tenga',
            'date' => 'se requiere la fecha del día de la realización de la factura',
            'payment' => 'se requiere escoger el metodo de pago del cliente',
            'facest' => 'se requiere saber el estado de la factura',
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
        return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
        else:
            $bill = Bill::find($id); 
            if($bill):
                // Recalculate subtotal and total
                $price = $request->input('price');
                $indiscount = $request->input('indiscount');
                $discount = $request->input('discount');
                $subtotal = $price + ($indiscount == 1 ? $discount : 0);
                $total = $subtotal * 1.19; // 19% de IVA

                $bill->id_product = $request->input('id_product');
                $bill->id_client = $request->input('id_client');
                $bill->date_e = $request->input('date_e');
                $bill->price = $request->input('price');
                $bill->indiscount = $request->input('indiscount');
                $bill->discount = $request->input('discount');
                $bill->date = $request->input('date');
                $bill->payment = $request->input('payment');
                $bill->facest = $request->input('facest');
                $bill->content = $request->input('content');
                $bill->subtotal = $subtotal;
                $bill->total = $total;

                if($bill->save()):
                        return back()->with('message', 'Factura actualizada con éxito')->with('typealert', 'success');
                else:
                    return back()->with('message', 'Se ha producido un error al actualizar la factura')->with('typealert', 'danger');
                endif; 
            else:
                return back()->with('message', 'Cliente no encontrado')->with('typealert', 'danger');
            endif;
        endif;
   
    }
    
        
    
    public function getBillDelete($id){
        $bill = Bill::find($id);
        if($bill->delete()):
            return back()->with('message', 'Factura eliminada con éxito')->with('typealert', 'success');
        endif;
    }

}
