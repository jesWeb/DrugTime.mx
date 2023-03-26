<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use App\Models\typeUser;

class loginController extends Controller
{
    //vista principal
    public function index()
    {
         //vista
         return view('logeo.login');
     }  

     //------------------validadion--------------------//
     public function validar(Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');
        
        $consulta = clientes::where('email', '=',$email )
        ->where('pass', '=',$pass)
        ->get();

 
    if (count($consulta)==0) {
        # vista de si no es encontrado
        return view('login');
    }
    else {
        # crear la session 
        $request->session()->put('session_id',$consulta[0]->id_cliente);
        $request->session()->put('session_name',$consulta[0]->nombre);
        $request->session()->put('session_tipo',$consulta[0]->id_typeuser);
        
        #consultar la session 
        $session_id = $request->session()->get('session_id');
        $session_name = $request->session()->get('session_name');
        $session_tipo = $request->session()->get('session_tipo');
        //------ //
        if ($session_tipo == 1 ){return view("");}
        else {
            if($session_tipo == 2){return view("");}
            else {
                return view("");
            }
        }
    }
     

     }

     //---------------------Logout-----------------//

     public function logout(Request $request){
      
        $request->session()->forget('session_id');
        $request->session()->forget('session_name');
        $request->session()->forget('session_tipo');
        return view('login.login');

     }

}
