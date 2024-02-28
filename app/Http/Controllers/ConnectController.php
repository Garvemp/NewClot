<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Validator, Hash, Auth;


class ConnectController extends Controller
{
    //requiere que el usuario sea un visitante y no este logeado
    public function __Construct(){
        $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin(){
        return view ('connect.login');
    }
    
    public function postLogin(Request $request){
        //reglas para los campos
        $rules =[
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
        //mensajes de alerta cuando los requerimientos no se cumplan
        $message = [
            'email.required' => 'Su correo electrónico es requerido.',
            'email.email' => 'El formato de su correo electronico es invalido.',
            'password.required' => 'Por favor escriba una contraseña.',
            'password.min' => 'La contraseña debe contener al menos 8 caracteres.'
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'se ha producido un error')->with('typealert', 'danger');
        else:
            //autenticar al usuario
            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)):
                return redirect('/admin');
            else:
                return back()->with('message', 'Correo electrónico o contraseña erronea')->with('typealert', 'danger');
            endif;
        endif;

        

    }

    public function getRegister(){
        return view ('connect.register');
    }

    public function postRegister(Request $request){
        $rules =[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8|same:password'
        ];

        $message = [
            'name.required' => 'Su nombre es requerido.',
            'lastname.required' => 'Su apellido es requerido.',
            'email.required' => 'Su correo electrónico es requerido.',
            'email.email' => 'El formato de su correo electronico es invalido.',
            'email.unique' => 'Ya existe un usuario registrado con este correo electrónico.',
            'password.required' => 'Por favor escriba una contraseña.',
            'password.min' => 'La contraseña debe contener al menos 8 caracteres.',
            'cpassword.required' => 'Es necesario confirmar la contraseña',
            'cpassword.min' => 'La confirmación de la contraseña debe contener al menos 8 caracteres.',
            'cpassword.same' => 'Las contraseñas no coinciden.'
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'se ha producido un error')->with('typealert', 'danger');
        else:
            $user = new User;
            $user->name = e($request->input('name'));
            $user->lastname = e($request->input('lastname')); 
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));
            if($user->save()):
                return redirect('/login')->with('message', 'su usuario se creo con éxito, ahora puede iniciar sesión ')->with('typealert', 'success');
            endif;
        endif;
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
