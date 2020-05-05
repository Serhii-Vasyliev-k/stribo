<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->where('parent_id', 0);

        return view('category.index', ['categories' => $categories, 'currentCategory' => '']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Category|null $category
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category = NULL)
    {
        return view('category.create', [
            'category' => $category,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ' ',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $category = new Category();
        $category->title = $request->title;

        if ($request->file('file'))
        {
            $image = $request->file('file')->store('images');
            $category->image = $image;
        } else {
            $category->image = 'images/empty.png';
        }

        $category->parent_id = $request->parent_id;

        $category->save();

        $urls = array();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        if ($category->children->isNotEmpty())
        {
            return view('category.index', [
                'categories' => $category->children,
                'currentCategory' => $category,
            ]);
        } else {
            return redirect(route('product.index', [
                'category' => $category
            ]));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', [
            'category' => $category,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ' ',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->title = $request->title;

        if($request->file('file'))
        {
            $image = $request->file('file')->store('images');
            $category->image = $image;
        }

        if($request->parent_id)
        {
            $category->parent_id = $request->parent_id;
        }
        else
        {
            $category->parent_id = 0;
        }

        $category->vendor = $request->vendor;

        $category->save();

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back();
    }
}
