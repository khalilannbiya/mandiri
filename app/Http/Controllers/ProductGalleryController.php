<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ProductGalleryRequest;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $slug)
    {
        $product = Product::with('productGalleries')->where('slug', $slug)->first();
        if (request()->ajax()) {
            $productGalleries = $product->productGalleries;
            return DataTables::of($productGalleries)
                ->addColumn('action', function ($item) {
                    return '
                        <form action="' . route('dashboard.gallery.destroy', $item->id) . '" method="post" class="inline-block">
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold ml-3 py-1 px-3 rounded shadow-lg">Delete</button>
                        ' . method_field('delete') . csrf_field() . '
                        </form>
                    ';
                })
                ->editColumn('url', function ($item) {
                    return '
                        <img style="max-width : 150px" src="' . Storage::url($item->url) . '" alt="Image">
                    ';
                })
                ->rawColumns(['action', 'url'])
                ->make();
        }
        return view('pages.dashboard.gallery.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('pages.dashboard.gallery.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductGalleryRequest $request, Product $product)
    {
        try {
            DB::beginTransaction();

            $files = $request->file('files');
            if ($request->hasFile('files')) {
                foreach ($files as $file) {
                    $path = $file->store('public/gallery');

                    ProductGallery::create([
                        'product_id' => $product->id,
                        'url' => $path,
                    ]);
                }
            }

            DB::commit();
            return redirect()->route('dashboard.product.gallery.index', $product->slug);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to add photos: ' . $e->getMessage()]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductGallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('dashboard.product.gallery.index', $gallery->product->slug);
    }
}
