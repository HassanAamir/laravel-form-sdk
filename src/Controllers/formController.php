<?php

// namespace YourVendor\YourPackage\Controllers;
namespace HassanAamir\LaravelFormSdk\Controllers;

use App\Http\Controllers\Controller;
use HassanAamir\LaravelFormSdk\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return response()->json($forms);
    }

    public function store(Request $request)
    {
        $form = Form::create($request->all());
        return response()->json($form);
    }

    public function show($id)
    {
        $form = Form::find($id);
        return response()->json($form);
    }

    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        $form->update($request->all());
        return response()->json($form);
    }

    public function destroy($id)
    {
        $form = Form::find($id);
        $form->delete();
        return response()->json(null, 204);
    }
}
