<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotController extends Controller
{
    public function index()
    {
        $number = rand(1, 10);
        $prizes = ['特賞', '金賞', '参加賞','壊れちゃった'];
        return view('lot.index', ['number' => $number, 'prizes' => $prizes]);
    }
}
