<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Republic;  

class RepublicController extends Controller
{
    // Criando comandos para manipulacao de Student
    public function createRepublic(Request $request){
        $republic = new Republic;
        $republic->name = $request->name;
        $republic->address = $request->address;
        $republic->describe = $request->describe;
        $republic->price = $request->price;
        $republic->bedroom = $request->bedroom;
        $republic->save();
        return response()->json($republic);
    }

    public function showRepublic($id){
        $republic = Republic::findOrFail($id);
        return response()->json($republic);
    }

    public function findRepublicByName($name){
        $republic = Republic::findOrFail($name);
        return response()->json($republic);
    }

    public function listRepublic(){
        $republic = Republic::all();
        return response()->json($republic);
    }

    public function updateRepublic(Request $request, $id){
        $republic = Republic::findOrFail($id);
        
        if($request->name){
            $republic->name = $request->name;
        }

        if($request->address){
            $republic->address = $request->address;
        }

        if($request->describe){
            $republic->describe = $request->describe;
        }

        if($request->price){
            $republic->price = $request->price;
        }

        if($request->bedroom){
            $republic->bedroom = $request->bedroom;
        }
        
        $republic->save();
        return response()->json($republic);
    }

    public function deleteRepublic($id){
        Republic::destroy($id);
        return response()->json(['Republica deletada']);
    }
}