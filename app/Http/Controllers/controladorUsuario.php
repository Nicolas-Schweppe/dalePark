<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControladorUsuario extends Controller
{
    public function validacion(Request $request){
        
        $data=request()->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Ingrese el email',
            'password.required'=>'Ingrese contraseña'
        ]);
       
        
        $email=$request->get('email');
        $query=User::where('email','=',$email)->get();

        if($query->count()!= 0){
            $hashp=$query[0]->password;
            $password=$request->get('password');
            
            if(password_verify($password,$hashp)){
                //return view('inicio');
                return redirect('/inicio');
            }else{
               
                return back()->withErrors(['password'=>'Contraseña incorrecta'])->withInput([request('password')]);
            }
        }else{
            
            return back()->withErrors(['email'=>'Correo electronico incorrecto'])->withInput([request('email')]); 
        }
    }
}
?>