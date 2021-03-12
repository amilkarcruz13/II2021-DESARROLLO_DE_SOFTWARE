<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // index
    public function index(){
        // all(); devolver todos los datos de la tabla en una coleccion de objetos
        // filtrar registros => where() ->  aplica una condicional
        // WHERE state > 0 and name like '%a%'  
        //get() : devuelva la peticion como una coleccion de objetos
        //paginate() : devuelve la peticion como una coleccion de objetos y adicionalmente
        // devuelve datos paginados
        // render() => genera automaticamente un componente HTML paginador 
        $student = Student::where('state', 1)->paginate(2);
        //$student = Student::all();
        //dd($student);
        return view('admin/index')->with('student', $student);
    }
    // create
    // store
    // show
    // edit
    // update
    // destroy
}
