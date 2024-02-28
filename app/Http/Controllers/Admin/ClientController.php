<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Validator, Str, Config;


class ClientController extends Controller
{
    //
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }
    public function getHome(){
        $clients = Client::all();
        return view('admin.clients.home', ['clients' => $clients]);
    }

    public function getClientAdd(){
        
        return view('admin.clients.add');
    }

    public function postClientAdd(Request $request){
        $rules = [
            'id_c' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ];

        $messages = [
            'id_c' => 'La Cédula del cliente es requerido',
            'name.required' => 'El Nombre del cliente es requerido',
            'lastname.required' => 'El Apellido del clinte es requerido',
            'phone' => 'Ingrese un número de telefono ',
            'email' => 'El Email del cliente es requerido'
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
           
            //otras variables
            $client = new Client();
            $client->id_c = e($request->input('id_c'));  
            $client->name = e($request->input('name'));
            $client->lastname = e($request->input('lastname'));
            $client->phone = e($request->input('phone'));
            $client->email = e($request->input('email'));
            $client->contcuello = $request->input('contcuello');
            $client->contbusto = $request->input('contbusto');
            $client->contcintura = $request->input('contcintura');
            $client->contcadera = $request->input('contcadera');
            $client->contestraple = $request->input('contestraple');
            $client->contimperio = $request->input('contimperio');
            $client->ltdelantero = $request->input('ltdelantero');
            $client->ltposterior = $request->input('ltposterior');
            $client->lcostado = $request->input('lcostado');
            $client->aespalda = $request->input('aespalda');
            $client->apecho = $request->input('apecho');
            $client->ahombro = $request->input('ahombro');
            $client->dbusto = $request->input('dbusto');
            $client->adbusto = $request->input('adbusto');
            $client->adimperio = $request->input('adimperio');
            $client->adcadera = $request->input('adcadera');
            $client->chdelantero = $request->input('chdelantero');
            $client->chespalda = $request->input('chespalda');
            $client->evdelantero = $request->input('evdelantero');
            $client->ehdelantero = $request->input('ehdelantero');
            $client->evespalda = $request->input('evespalda');
            $client->ehespalda = $request->input('ehespalda');
            $client->larodilla = $request->input('larodilla');
            $client->lfcorta = $request->input('lfcorta');
            $client->lflarga = $request->input('lflarga');
            $client->lvestido = $request->input('lvestido');
            $client->bocamanga = $request->input('bocamanga');
            $client->adcopa = $request->input('adcopa');
            $client->ldbrazo = $request->input('ldbrazo');
            $client->lacodo = $request->input('lacodo');
            $client->cdpuno = $request->input('cdpuno');
            $client->ltiro = $request->input('ltiro');
            $client->arodilla = $request->input('arodilla');
            $client->abota = $request->input('abota');
            $client->crodilla = $request->input('crodilla');
            $client->cbota = $request->input('cbota');

            if($client->save()):
            //otras variables
                
                return redirect('/admin/clients')->with('message', 'Guardado con exito')->with('typealert', 'success');
            endif;
        endif;
    }

    public function getClientEdit($id_c){
        $client = Client::where('id_c', $id_c)->first();
        $data = ['client' => $client];
        return view('admin.clients.edit', compact('client'));
        
        
    }
    

    public function postClientEdit(Request $request, $id_c){
        $rules = [
            'id_c' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ];
        $messages = [
            'id_c' => 'La Cédula del cliente es requerido',
            'name.required' => 'El Nombre del cliente es requerido',
            'lastname.required' => 'El Apellido del clinte es requerido',
            'phone' => 'Ingrese un número de telefono ',
            'email' => 'El Email del cliente es requerido'
        ];
        

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'se ha producido un error')->with('typealert', 'danger');
        else:
            $client = Client::find($id_c);  
            if($client):
                $client = Client::find($id_c);  
                $client->id_c = e($request->input('id_c'));
                $client->name = e($request->input('name'));
                $client->lastname = e($request->input('lastname'));
                $client->phone = e($request->input('phone'));
                $client->email = e($request->input('email'));
                $client->contcuello = $request->input('contcuello');
                $client->contbusto = $request->input('contbusto');
                $client->contcintura = $request->input('contcintura');
                $client->contcadera = $request->input('contcadera');
                $client->contestraple = $request->input('contestraple');
                $client->contimperio = $request->input('contimperio');
                $client->ltdelantero = $request->input('ltdelantero');
                $client->ltposterior = $request->input('ltposterior');
                $client->lcostado = $request->input('lcostado');
                $client->aespalda = $request->input('aespalda');
                $client->apecho = $request->input('apecho');
                $client->ahombro = $request->input('ahombro');
                $client->dbusto = $request->input('dbusto');
                $client->adbusto = $request->input('adbusto');
                $client->adimperio = $request->input('adimperio');
                $client->adcadera = $request->input('adcadera');
                $client->chdelantero = $request->input('chdelantero');
                $client->chespalda = $request->input('chespalda');
                $client->evdelantero = $request->input('evdelantero');
                $client->ehdelantero = $request->input('ehdelantero');
                $client->evespalda = $request->input('evespalda');
                $client->ehespalda = $request->input('ehespalda');
                $client->larodilla = $request->input('larodilla');
                $client->lfcorta = $request->input('lfcorta');
                $client->lflarga = $request->input('lflarga');
                $client->lvestido = $request->input('lvestido');
                $client->bocamanga = $request->input('bocamanga');
                $client->adcopa = $request->input('adcopa');
                $client->ldbrazo = $request->input('ldbrazo');
                $client->lacodo = $request->input('lacodo');
                $client->cdpuno = $request->input('cdpuno');
                $client->ltiro = $request->input('ltiro');
                $client->arodilla = $request->input('arodilla');
                $client->abota = $request->input('abota');
                $client->crodilla = $request->input('crodilla');
                $client->cbota = $request->input('cbota');


                if($client->save()):
                    return back()->with('message', 'Guardado con exito')->with('typealert', 'success');
                else:
                    return back()->with('message', 'Se ha producido un error al guardar el cliente')->with('typealert', 'danger');
                endif;
            else:
                return back()->with('message', 'Cliente no encontrado')->with('typealert', 'danger');
            endif;    
        endif;
    }
    
    public function getClientDelete($id_c){
        $c = Client::find($id_c);
        if($c->delete()):
            return back()->with('message', 'Eliminado con exito')->with('typealert', 'success');
        endif;
    }

}
