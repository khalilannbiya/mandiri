<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoryRequest;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Category::all();
            return DataTables::of($query)->addColumn('action', function ($item) {
                return '
                    <a class="bg-green-500 hover:bg-green-700 mb-2 text-white font-bold py-1 px-3 ml-3 rounded shadow-lg" href="' . route('dashboard.category.show-by-category', $item->slug) . '">
                         Products
                    </a>
                    <a class="bg-green-500 hover:bg-green-700 mb-2 text-white font-bold py-1 px-3 ml-3 rounded shadow-lg" href="' . route('dashboard.category.edit', $item->id) . '">
                        Edit
                    </a>
                    <form action="' . route('dashboard.category.destroy', $item->id) . '" method="post" class="inline-block">
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold ml-3 py-1 px-3 rounded shadow-lg">Delete</button>
                    ' . method_field('delete') . csrf_field() . '
                    </form>
                ';
            })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['slug'] = Str::slug($request->name);

            Category::create($data);

            DB::commit();
            return redirect()->route('dashboard.category.index');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to create category: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['slug'] = Str::slug($request->name);

            $category->update($data);


            DB::commit();
            return redirect()->route('dashboard.category.index');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to update category: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('dashboard.product.index');
    }

    public function showByCategory(string $slug)
    {
        $category = Category::with('products')->where('slug', $slug)->first();
        if (request()->ajax()) {
            $query = $category->products;
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-3 rounded shadow-lg" href="' . route('dashboard.product.gallery.index', $item->id) . '">
                            Gallery
                        </a>
                        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 ml-3 rounded shadow-lg" href="' . route('dashboard.product.edit', $item->id) . '">
                            Edit
                        </a>
                        <form action="' . route('dashboard.product.destroy', $item->id) . '" method="post" class="inline-block">
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold ml-3 py-1 px-3 rounded shadow-lg">Delete</button>
                        ' . method_field('delete') . csrf_field() . '
                        </form>
                    ';
                })
                ->editColumn('price', function ($item) {
                    return number_format($item->price);
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.category.show-by-category', compact('category'));
    }
}
