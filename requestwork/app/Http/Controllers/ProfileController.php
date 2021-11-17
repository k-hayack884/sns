<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
class ProfileController extends Controller
{
     public function index()
    {
        return view('index'); //[.]は[/]を意味するンゴ
    }
    public function confirm(ProfileRequest $request)
    {
        

      /*   $rule = [
             //[[パラメータ名] => [ルール]|[ルール]|…, [パラメータ名] => [ルール]|[ルール]|…, …]
            'username' => 'required|max:20'
        ];

        //$request->validate([バリデーションルール])
        $request->validate($rule);
                */
         $username = $request->input('username');
         $password = $request->input('password');
         $latitude = $request->input('latitude');
         $longitude = $request->input('longitude');
         //$request->session()->put([属性名], [値])
        //$request->session()->forget([属性名])　属性名を破棄
        //$request->session()->flush() すべて破棄
          $request->session()->put(['username' => $username],['password' => $password],['latitude' => $latitude],['longitude' => $longitude]);
          //3つ以上の変数はcompact関数を使うニキー
          var_dump($latitude);
          var_dump($longitude);

         return view('confirm', compact('username','password','latitude','longitude'));
    }
}
