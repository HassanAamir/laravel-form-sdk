<?php

// namespace YourVendor\YourPackage\Controllers;
namespace HassanAamir\LaravelFormSdk\Controllers;

use App\Http\Controllers\Controller;
use HassanAamir\LaravelFormSdk\Models\Form;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return $forms;
    }

    public function store(Request $request)
    {
        $form = Form::create($request->all());
        return $form;
    }

    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        $form->update($request->all());
        return $form;
    }

    public function destroy($id)
    {
        $form = Form::find($id);
        $form->delete();
        return 'deleted';
    }
}
