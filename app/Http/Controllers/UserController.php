<?php

namespace App\Http\Controllers;
use App\Models\get8;
use Illuminate\Http\Request;



class UserController extends Controller
{


    /**
     * Данный метод обрабатывает данные с webhooks и с users.blade.php и отвечает за сохранение и изменение данных в бд
     * @param Request $request
     * @return object
     */
    public function createUser(Request $request): object
    {
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

    /**
     * Данный метод выводит все записи из бд используя пагинацию по 5 записей на страницу.
     */
    public function showUser(){
     $user = get8::paginate(5);
     return view('users', compact('user'));
    }
}
