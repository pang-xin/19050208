<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class HereController extends Controller
{
    public function create()
    {
        return view('index/create');
    }
    public function createDo()
    {
        $data = \request()->all();
        user::create($data);
        return \redirect('index/list');
    }
    public function list()
    {
        $data = user::paginate(2);
        return \view('index/list', ['data' => $data]);
    }
    public function delete($id)
    {
        user::where('user_id',$id)->delete();
        return \view('index/list');
    }
}
