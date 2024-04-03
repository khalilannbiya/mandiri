<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Product::with('category')->get();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-3 rounded shadow-lg" href="' . route('dashboard.product.gallery.index', $item->slug) . '">
                            Gallery
                        </a>
                        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 ml-3 rounded shadow-lg" href="' . route('dashboard.product.edit', $item->slug) . '">
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
        return view('pages.dashboard.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.dashboard.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['slug'] = Str::slug($request->name);

            $product = Product::create($data);

            DB::commit();
            return redirect()->route('dashboard.product.gallery.index', $product->slug);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to create product: ' . $e->getMessage()]);
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
    public function edit(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('pages.dashboard.product.edit', [
            'item' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['slug'] = Str::slug($request->name);

            $product->update($data);

            DB::commit();
            return redirect()->route('dashboard.product.index');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to update product: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('dashboard.product.index');
    }
}
