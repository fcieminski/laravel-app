<?php

namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;

class CrudController extends Controller
{
    public function create(Generator $faker)
    {
        $crud = new Crud();
        $crud->name = $faker->lexify('???????');
        $crud->color = $faker->boolean ? 'green' : 'red'; 
        $crud->save();
        return response($crud->jsonSerialize(), Response::HTTP_CREATED);
    }
    public function index()
    {
        return response(Crud::all()->jsonSerialize(), Response::HTTP_OK);
    }
    public function update(Request $request, $id)
    {
        $crud = Crud::findOrFail($id);
        if($request->color){
            $crud->color = $request->color;
            $crud->save();
        }
        if($request->name){
            $crud->name = $request->name;
            $crud->save();
        }
        return response(null, Response::HTTP_OK);

    }
    public function destroy($id)
    {
        Crud::destroy($id);
        return response(null, Response::HTTP_OK);
    }

}
