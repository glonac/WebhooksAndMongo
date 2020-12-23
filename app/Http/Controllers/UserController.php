<?php

namespace App\Http\Controllers;
use App\Models\get8;
use Illuminate\Http\Request;



class UserController extends Controller
{
    public function createUser(Request $request): object
    { //Для работы с webhook
        get8::updateOrCreate(['hash' => $request['hash']],
            ['name' => $request['name'],
                'family' => $request['family'],
                'key' => $request['data']['key'],
                'url' => $request['data']['url'],
                'img_name' => $request['data']['img_name'],
                'update' => $request['update']
            ]);
        return response()->json(['success' => 'OK']);
    }
    public function showUser(){
     $user = get8::paginate(5);
     return view('users', compact('user'));
    }
}
