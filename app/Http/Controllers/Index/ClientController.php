<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //客户添加视图
    public function create(){
        return view('client.create');
    }
}
