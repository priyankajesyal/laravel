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
        $input = new student;
        $input->name = $request->name;
        $input->data = $request->data;
        $input->save();
        return redirect('index');
    }

    public function getdata(Request $request)
    {
        $get = (new student())->get();
        return view('viewdata', compact('get'));
    }


    public function edit(Request $request, $id)
    {
        $get = Student::find($id);
        return view('update', compact('get'));
    }


    public function update(Request $request, $id)
    {
        $data = student::find($id);
        $data->name = request('name');
        $data->data = request('data');

        $data->update($request->all());
        return redirect('getdata');
    }

    public function delete(Request $request, $id)
    {
        $data = student::find($id);
        $data->delete();
        return redirect('getdata');
    }
}
