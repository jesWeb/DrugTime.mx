<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usersNews;
class UsersNController extends Controller
{
    //
    public function index()
    {
         //vista
         return view('logeo.register');
        
     } 

     
     public function store(Request $request){
        //formulario almacenamiento de datos
        $registros = new usersNews;
        $registros->email= $request->input('email');
        $registros->password= $request->input('password');

      //guardamos datos en BD 
      $registros->save();
      //vista
    return redirect()->route('cliente.info');

  }









}
