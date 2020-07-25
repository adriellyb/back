<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Republic;

class UserController extends Controller
{
    /*public function createUser(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json($user); //responde se foi atualizada
    }

    public function showUser($id){
        $user = User::findOrFail($id); //find or fail averigua se existe o id pedido na tabela
        return response()->json($user);
    }

    public function listUser(){
        $user = User::all();
        return response()->json($user);
    }

    public function updateUser(Request $request, $id){
        $user = User::findOrFail($id);
        
        if($request->name){
            $user->name = $request->name;
        }

        if($request->age){
            $user->age = $request->age;
        }

        if($request->phone){
            $user->phone = $request->phone;
        }

        if($request->email){
            $user->email = $request->email;
        }

        if($request->password){
            $user->password = $request->password;
        }
        
        $user->save();
        return response()->json($user);
    }

    public function deleteUser($id){
        User::destroy($id);
        return response()->json(['Usuario deletado']);
    }

    public function addRepublic($id, $republic_id){
        $user = User::findOrFail($id);
        $republic = Republic::findOrFail($republic_id);
        $user->$republic_id = $republic_id;
        $user->save();
        return response()->json($user);
    }

    public function removeRepublic($id, $republic_id){
        $user = User::findOrFail($id);
        $republic = Republic::findOrFail($republic_id);
        $user->$republic_id = NULL;
        $user->save();
        return response()->json($user);
    }*/
}
