<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DorisController extends Controller
{
    //
    public function index(){

    	$users = [
    		'Doris',
    		'Carlos',
    		'Irene',
    		'Paola',
    		'William',
    	];

        $title = 'Listado de usuario';

        //dd(compact('title','users'));
    	return view('users', compact('title','users'));
    }

    public function datosList(){
    	return view('datosList');
    }

        public function datosNew(){
    	return view('datosNew');
    }

    public function datosShow($id){
    	return "Mostrando información del dato: $id";
    }
} 
 