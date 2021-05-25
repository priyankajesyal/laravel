<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class IndexController extends Controller
{
    public function form(Request $request)
    {
        return view('index');
    }

    public function forminsert(Request $request)
    {
        $input =new student;
        $input->name=$request->name;
        $input->data=$request->data;
        $input->save();
        return redirect('formdata');
    }
}
