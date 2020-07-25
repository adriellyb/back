<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Republic;

class StudentController extends Controller
{
    // Criando comandos para manipulacao de Student
    public function createStudent(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->age = $request->age;
        $student->phone = $request->phone;
        $student->college = $request->college;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();
        return response()->json($student); //responde se foi atualizada
    }

    public function showStudent($id){
        $student = Student::findOrFail($id); //find or fail averigua se existe o id pedido na tabela
        return response()->json($student);
    }

    public function listStudent(){
        $student = Student::all();
        return response()->json($student);
    }

    public function updateStudent(Request $request, $id){
        $student = Student::findOrFail($id);
        
        if($request->name){
            $student->name = $request->name;
        }

        if($request->age){
            $student->age = $request->age;
        }

        if($request->phone){
            $student->phone = $request->phone;
        }

        if($request->college){
            $student->college = $request->college;
        }

        if($request->email){
            $student->email = $request->email;
        }

        if($request->password){
            $student->password = $request->password;
        }
        
        $student->save();
        return response()->json($student);
    }

    public function deleteStudent($id){
        Student::destroy($id);
        return response()->json(['Usuario deletado']);
    }

    // ALterando o objeto Republics atraves do Student
    public function addRepublic($id, $republic_id){
        $student = Student::findOrFail($id);
        $republic = Republic::findOrFail($republic_id);
        $student->$republic_id = $republic_id;
        $student->save();
        return response()->json($student);
    }

    public function removeRepublic($id, $republic_id){
        $student = Student::findOrFail($id);
        $republic = Republic::findOrFail($republic_id);
        $student->$republic_id = NULL;
        $student->save();
        return response()->json($student);
    }
}
