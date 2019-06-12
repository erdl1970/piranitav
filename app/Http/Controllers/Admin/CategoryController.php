<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    $categories = Category::where('active', true)->paginate(10);
    return view('admin.categories.index')->with(compact('categories'));  //  listado
    }

    public function create()
    {
        return view('admin.categories.create'); //   formulario de registro
    }

    public function store(Request $request)
    {
        //validar

        $this->validate($request, Category::$rules, Category::$messages);

        //registrar la nueva categoría en la bd

       Category::create($request->all()); // mass assignement

       return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        //return "Mostrar aquí el form de edición con id $id";
        //$category = Category::find($id); Se remplazo con la modificación del parametro
        return view('admin.categories.edit')->with(compact('category')); //   formulario de edición
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, Category::$rules, Category::$messages);
        $category->update($request->all());
        return redirect('/admin/categories');
    }

    public function destroy($category)
    {
        $category = Category::find($category);
        $category->active = false;
        $category->save(); // DELETE
        return redirect('/admin/categories');
    }};