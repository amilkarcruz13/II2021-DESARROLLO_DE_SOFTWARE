<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // index
    public function index(Request $request){
        // all(); devolver todos los datos de la tabla en una coleccion de objetos
        // filtrar registros => where() ->  aplica una condicional
        // WHERE state > 0 and name like '%a%'  
        //get() : devuelva la peticion como una coleccion de objetos
        //paginate() : devuelve la peticion como una coleccion de objetos y adicionalmente
        // devuelve datos paginados
        // render() => genera automaticamente un componente HTML paginador 
        $students = Student::where('name', 'LIKE', $request->name.'%')->orderBy('id', 'desc')->paginate(4);
        //$student = Student::all();
        //dd($student);
        return view('admin/index')->with('students', $students);
    }
    // create
    public function create(){
        return view('admin/student/create');
    }
    // store
    public function store(Request $request){
        // dd($request);
        $student = new Student($request->all());
        $student->save();
        return redirect()->route('student.index');
    }
    // show
    // edit
    public function edit($id){
        $student = Student::find($id);
        return view('admin/student/edit')->with('student', $student);
    }
    // update
    public function update($id, Request $request){
        $student = Student::find($id);
        // dd($request);
        $student->name = $request->name;
        $student->code = $request->code;
        $student->career = $request->career;
        $student->save();
        return redirect()->route('student.index');
        // dd($student);

    }
    // destroy
    public function destroy($id){
        $student = Student::find($id);
        if($student->state == 1){
            $student->state = 0;
        }
        else {
            $student->state = 1;
        }
        $student->save();
        return redirect()->route('student.index');
    }
}
