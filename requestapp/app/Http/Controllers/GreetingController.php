<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GreetingRequest;


class GreetingController extends Controller
{
    public function index()
    {
        return view('greeting.index'); //[.]は[/]を意味するンゴ
    }
    //public function [メソッド名](Request $request) {・・・}
 public function welcome(GreetingRequest $request)
    {
        

      /*   $rule = [
             //[[パラメータ名] => [ルール]|[ルール]|…, [パラメータ名] => [ルール]|[ルール]|…, …]
            'username' => 'required|max:20'
        ];

        //$request->validate([バリデーションルール])
        $request->validate($rule);
                */
         $username = $request->input('username');
         //$request->session()->put([属性名], [値])
        //$request->session()->forget([属性名])　属性名を破棄
        //$request->session()->flush() すべて破棄
          $request->session()->put(['username' => $username]);

         return view('greeting.welcome', ['username' => $username]);
    }
      public function hello(Request $request)
    {
        //$request->session()->all() すべてのセッション取るンゴ
//$request->session()->get([属性名]) 指定されたセッションを取るンゴ
//$request->session()->has([属性名]) 指定されたセッションがあるか確認するンゴ

        $username = $request->session()->get('username');

        return view('greeting.hello', ['username' => $username]);
    }
}
